<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Message;
use Redirect;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use DB;

class InboxsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($uid1 = 0, $uid2 = 0)
	{
            if (!$uid1 || !$uid2 || $uid1 == $uid2)
            {
                return Redirect::to('/');
            }
            
            $messages = Message::whereIn('fromuid', array($uid1, $uid2))->orderBy('sent_date','DESC')->get();
            $originUser = User::where('uid','=',$uid1)->get();
            $desUser = User::where('uid','=',$uid2)->get();
            if (count($originUser)==0 || count($desUser)==0)
            {
                 return Redirect::to('/');
            }
            $originUser = $originUser[0];
            $desUser = $desUser[0];
            $ownerUser = (intval($uid1) < intval($uid2))?$originUser:$desUser;
            
            //for top messages
            $topMessages = array();
            $todayStart = strtotime(date('Y-m-d 00:00:00'));
            $todayEnd = strtotime(date('Y-m-d 23:59:59'));
            $hasTop = true;
            
            //for bottom messages
            $bottomMessages = array();
            
            //loop to get top messages and bottom messages
            for ($i = 0; $i < count($messages); $i++)
            {
                $messages[$i]->main_user = $messages[$i]->fromuid == $uid1?TRUE:FALSE;
                if ($messages[$i]->fromuid == $uid1)
                {
                    $messages[$i]->user_name = $originUser->user_name;
                }
                else
                {
                    $messages[$i]->user_name = $desUser->user_name;
                }
                
                if ($hasTop && $messages[$i]->sent_date >= $todayStart && $messages[$i]->sent_date <= $todayEnd && $messages[$i]->fromuid == $uid1)
                {
                    $messages[$i]->sent_date_str = date('h:i A', $messages[$i]->sent_date);
                    $topMessages[] = $messages[$i];
                }
                else
                {
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
            
            return View::make("inbox", $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($uid1, $uid2)
	{
            $input = Input::all();
            $message = array();
            $message['content'] = $input['content'];
            $message['fromuid'] = $uid1;
            $message['touid'] = $uid2;
            $message['creation_date'] = time();
            $message['sent_date'] = time();
            $message['subject'] = "New Conversation";
            Message::create($message);
            return \Illuminate\Support\Facades\Redirect::route('inbox', array($uid1, $uid2));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
