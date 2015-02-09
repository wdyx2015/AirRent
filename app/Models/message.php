<?php namespace App\Models;
Use Eloquent;
class Message extends Eloquent {
    protected $fillable = array('content', 'fromuid', 'touid','creation_date','sent_date','subject');
    public $timestamps = false;
}
