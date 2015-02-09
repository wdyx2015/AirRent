<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Message;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;
use Response;
use Exception;

class InboxsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($uid1 = 0, $uid2 = 0) {
        if (!$uid1 || !$uid2 || $uid1 == $uid2) {
            return Redirect::to('/');
        }

        $originUser = User::where('uid', '=', $uid1)->get();
        $desUser = User::where('uid', '=', $uid2)->get();
        if (count($originUser) == 0 || count($desUser) == 0) {
            return Redirect::to('/');
        }
        return View::make("conversation");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($uid1, $uid2) {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

    //Customize function
    public function jsonGet($uid1 = 0, $uid2 = 0) {
        $dataReturn = array("result" => "success", "message" => "Requested Successfully", "data" => null, "code" => 200);
        if (!$uid1 || !$uid2 || $uid1 == $uid2) {
            $dataReturn["result"] = "fail";
            $dataReturn["message"] = "Invalid Request";
            $dataReturn["code"] = 501;
            return Response::json(
                            $dataReturn
            );
        }

        $messages = Message::whereIn('fromuid', array($uid1, $uid2))->orderBy('sent_date', 'DESC')->get();
        $originUser = User::where('uid', '=', $uid1)->get();
        $desUser = User::where('uid', '=', $uid2)->get();
        if (count($originUser) == 0 || count($desUser) == 0) {
            $dataReturn["result"] = "fail";
            $dataReturn["message"] = "Invalid Request";
            $dataReturn["code"] = 501;
            return Response::json(
                            $dataReturn
            );
        }
        $originUser = $originUser[0];
        $desUser = $desUser[0];
        $ownerUser = (intval($uid1) < intval($uid2)) ? $originUser : $desUser;

        //for top messages
        $topMessages = array();
        $todayStart = strtotime(date('Y-m-d 00:00:00'));
        $todayEnd = strtotime(date('Y-m-d 23:59:59'));
        $hasTop = true;

        //for bottom messages
        $bottomMessages = array();

        //loop to get top messages and bottom messages
        for ($i = 0; $i < count($messages); $i++) {
            $messages[$i]->main_user = $messages[$i]->fromuid == $uid1 ? 1 : 0;
            if ($messages[$i]->fromuid == $uid1) {
                $messages[$i]->user_name = $originUser->user_name;
            } else {
                $messages[$i]->user_name = $desUser->user_name;
            }

            if ($hasTop && $messages[$i]->sent_date >= $todayStart && $messages[$i]->sent_date <= $todayEnd && $messages[$i]->fromuid == $uid1) {
                $messages[$i]->sent_date_str = date('h:i A', $messages[$i]->sent_date);
                $topMessages[] = $messages[$i];
            } else {
                $hasTop = false;
                if ($messages[$i]->sent_date >= $todayStart && $messages[$i]->sent_date <= $todayEnd)
                    $messages[$i]->sent_date_str = date('h:i A', $messages[$i]->sent_date);
                else
                    $messages[$i]->sent_date_str = date('m/d/Y h:i A', $messages[$i]->sent_date);
                $bottomMessages[] = $messages[$i];
            }
        }

        //Return data
        $data = array("topMessages" => $topMessages, "bottomMessages" => $bottomMessages, 'desUser' => $desUser, 'originUser' => $originUser, 'ownerUser' => $ownerUser);
        $dataReturn['data'] = $data;

        return Response::json(
                        $dataReturn
        );
    }

    public function jsonPost($uid1 = 0, $uid2 = 0) {
        $dataReturn = array("result" => "success", "message" => "Requested Successfully", "data" => null, 'code' => 202);

        //Check valid $uid
        if (!$uid1 || !$uid2 || $uid1 == $uid2) {
            $dataReturn["result"] = "fail";
            $dataReturn["message"] = "Invalid Request";
            $dataReturn["code"] = 501;
            return Response::json(
                            $dataReturn
            );
        }

        //Check whether database contains these use or not
        $originUser = User::where('uid', '=', $uid1)->get();
        $desUser = User::where('uid', '=', $uid2)->get();
        if (count($originUser) == 0 || count($desUser) == 0) {
            $dataReturn["result"] = "fail";
            $dataReturn["message"] = "Invalid Request";
            $dataReturn["code"] = 501;
            return Response::json(
                            $dataReturn
            );
        }

        //Check whether the data is correct or not
        $input = Input::all();
        if (!isset($input['content']) || trim($input['content']) == "") {
            $dataReturn["result"] = "fail";
            $dataReturn["message"] = "Invalid Request";
            $dataReturn["code"] = 501;
            return Response::json(
                            $dataReturn
            );
        }

        //Gather the data and build the object
        $message = array();
        $message['content'] = $input['content'];
        $message['fromuid'] = $uid1;
        $message['touid'] = $uid2;
        $message['creation_date'] = time();
        $message['sent_date'] = time();
        $message['subject'] = "New Conversation";
        Message::create($message);

        //Try to insert to database
        try {
            Message::create($message);
        } catch (Exception $ex) {
            $dataReturn["result"] = "fail";
            $dataReturn["message"] = "Invalid Data";
            $dataReturn["code"] = 501;
            return Response::json(
                            $dataReturn
            );
        }

        //For show the data
        $dataReturn["data"] = $this->getAllJsonData($uid1, $uid2);

        return Response::json(
                        $dataReturn
        );
    }

    private function getAllJsonData($uid1, $uid2) {
        $messages = Message::whereIn('fromuid', array($uid1, $uid2))->orderBy('sent_date', 'DESC')->get();
        $originUser = User::where('uid', '=', $uid1)->get();
        $desUser = User::where('uid', '=', $uid2)->get();
        $originUser = $originUser[0];
        $desUser = $desUser[0];
        $ownerUser = (intval($uid1) < intval($uid2)) ? $originUser : $desUser;

        //for top messages
        $topMessages = array();
        $todayStart = strtotime(date('Y-m-d 00:00:00'));
        $todayEnd = strtotime(date('Y-m-d 23:59:59'));
        $hasTop = true;

        //for bottom messages
        $bottomMessages = array();

        //loop to get top messages and bottom messages
        for ($i = 0; $i < count($messages); $i++) {
            $messages[$i]->main_user = $messages[$i]->fromuid == $uid1 ? 1 : 0;
            if ($messages[$i]->fromuid == $uid1) {
                $messages[$i]->user_name = $originUser->user_name;
            } else {
                $messages[$i]->user_name = $desUser->user_name;
            }

            if ($hasTop && $messages[$i]->sent_date >= $todayStart && $messages[$i]->sent_date <= $todayEnd && $messages[$i]->fromuid == $uid1) {
                $messages[$i]->sent_date_str = date('h:i A', $messages[$i]->sent_date);
                $topMessages[] = $messages[$i];
            } else {
                $hasTop = false;
                if ($messages[$i]->sent_date >= $todayStart && $messages[$i]->sent_date <= $todayEnd)
                    $messages[$i]->sent_date_str = date('h:i A', $messages[$i]->sent_date);
                else
                    $messages[$i]->sent_date_str = date('m/d/Y h:i A', $messages[$i]->sent_date);
                $bottomMessages[] = $messages[$i];
            }
        }

        //Return data
        return array("topMessages" => $topMessages, "bottomMessages" => $bottomMessages, 'desUser' => $desUser, 'originUser' => $originUser, 'ownerUser' => $ownerUser);
    }

}
