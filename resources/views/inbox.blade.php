<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <link href="{{URL::asset('css/bootstrap.css')}}" media="all" rel="stylesheet" type="text/css">
      <link href="{{URL::asset('css/inbox.css')}}" media="all" rel="stylesheet" type="text/css">
      <style>
         .cbp-tm-submenu
         {
         display: none;
         }
         li:hover .cbp-tm-submenu
         {
         display:  block;
         }
      </style>
   </head>
   <body class="no_wiggle_webkit" style="top: 0px;">
      <div id="header" class="my-header">
         <div class="regular-header clearfix">
            <a href="#" class="header-belo pull-left"></a>
            <ul class="nav pull-left list-unstyled search-form-container" id="search-form-header">
               <li id="header-search" class="search-bar-wrapper pull-left medium-right-margin">
                  <form action="#" id="search-form" class="search-form">
                     <div class="search-bar">
                        <i class="icon icon-search icon-gray h4"></i>
                        <input type="text" placeholder="Where are you going?" autocomplete="off" name="location" id="header-location" class="location">
                        <input type="hidden" name="source" value="hdr">
                     </div>
                     <div id="header-search-settings" class="search-settings">
                        <label class="checkin pull-left">
                        Check in
                        <input type="text" id="header-search-checkin" name="checkin" class="checkin ui-datepicker-target" placeholder="dd-mm-yyyy">
                        </label>
                        <label class="checkout pull-left">
                        Check out
                        <input type="text" id="header-search-checkout" class="checkout ui-datepicker-target" name="checkout" placeholder="dd-mm-yyyy">
                        </label>
                        <label class="guests pull-left">
                           Guests
                           <div class="select select-block">
                              <select id="header-search-guests" name="guests">
                                 <option value="1">1</option>
                              </select>
                           </div>
                        </label>
                        <label class="pull-left">Room type</label>
                        <label class="checkbox pull-left" for="room_type_0">
                        <input type="checkbox" id="room_type_0" name="room_types[]" value="Entire home/apt">
                        Entire home/flat
                        </label>
                        <label class="checkbox pull-left" for="room_type_1">
                        <input type="checkbox" id="room_type_1" name="room_types[]" value="Private room">
                        Private room
                        </label>
                        <label class="checkbox pull-left" for="room_type_2">
                        <input type="checkbox" id="room_type_2" name="room_types[]" value="Shared room">
                        Shared room
                        </label>
                        <button type="submit" class="btn btn-primary btn-block">
                        <i class="icon icon-search"></i>
                        Find a place
                        </button>
                     </div>
                  </form>
               </li>
               <li class="browse-container pull-left ">
                  <a class="link-reset" href="#" id="header-browse-trigger">
                  浏览
                  <i class="icon icon-caret-down icon-light-gray h5"></i>
                  </a>
                  <ul class="tooltip tooltip-top-left dropdown-menu list-unstyled cbp-tm-submenu">
                     <li><a href="#" class="link-reset menu-item">热门的公寓</a></li>
                     <li><a href="#" class="link-reset menu-item">好友的公寓</a></li>
                     <li><a href="#" class="link-reset menu-item">附近的公寓</a></li>
                  </ul>
               </li>
            </ul>
            <ul class="nav pull-right logged-out list-unstyled medium-right-margin">
               <li class="pull-left medium-right-margin">
                  <div class="media-photo media-round user-profile-image">
                     <img width="28" height="28" src="{{URL::asset('images/temp.jpg')}}" alt="">
                  </div>
                  <a href="#" class="link-reset" rel="nofollow" style="line-height: 34px;">
                  {{$originUser->user_name}}
                  </a>
                  <i class="icon icon-caret-down icon-light-gray h5"></i>
               </li>
               <li id="inbox-item" class="inbox-item pull-left">
                  <a href="#" rel="nofollow" class="link-reset inbox-icon">
                  <i class="alert-count fade text-center">0</i>
                  <i class="icon icon-envelope icon-gray" style="font-size: 25px;padding-left: 1px;margin-right: 10px;">
                  <span class="text-hide hide">Inbox</span>
                  </i>
                  </a>
               </li>
               <li class="pull-left medium-right-margin">
                  <a href="#" class="link-reset" rel="nofollow" style="line-height: 34px;">
                  Help
                  </a>
                  <i class="icon icon-caret-down icon-light-gray h5"></i>
               </li>
            </ul>
         </div>
      </div>
      <div class="subnav hide-print">
         <div class="page-container">
            <ul class="subnav-list">
               <li>
                  <a href="#" aria-selected="false" class="subnav-item">Dashboard</a>
               </li>
               <li>
                  <a href="#" aria-selected="true" class="subnav-item">Inbox</a>
               </li>
               <li>
                  <a href="#" aria-selected="false" class="subnav-item">Your Listings</a>
               </li>
               <li>
                  <a href="#" aria-selected="false" class="subnav-item">Your Trips</a>
               </li>
               <li>
                  <a href="#" aria-selected="false" class="subnav-item">Profile</a>
               </li>
               <li>
                  <a href="#" aria-selected="false" class="subnav-item">Account</a>
               </li>
            </ul>
         </div>
      </div>
      <div class="page-container page-container-responsive row-space-top-4">
         <h1 class="h2 row-space-4">
            Conversation with {{$desUser->user_name}}
         </h1>
         <div class="row">
            <div class="col-lg-12">
               <div class="alert row-space-4">
                  <div class="row-space-2">
                     <span class="label label-new">
                     Pending
                     </span>
                  </div>
                  <p>
                     You have a pending reservation from this guest that needs a response. Sending a message does not accept or decline the reservation.
                  </p>
                  <a href="#" class="btn btn-primary">Respond now</a>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-8">
               <ul id="thread-list" class="list-unstyled">
                  <li class="thread-list-item">
                     <div class="row row-condensed row-space-4">
                        <div class="col-sm-12 col-md-10 col-md-push-1">
                           <div class="panel-quote-flush panel">
                              <div class="panel-body normal-form-fields">
                                  {!! Form::open(array('action' => array('InboxsController@store', $originUser->uid, $desUser->uid),'class' => 'message_form clearfix','id' => 'non_special_offer_form' )) !!}
                                    <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="V4$.airbnb.co.uk$jKqGtvsHd8U$sPK72X3EiHRBDKaWDfFgDK-bZaRVwyjFd9LPX14Hfa8="></div>
                                    <input type="hidden" name="template" value="">
                                    <textarea class="row-space-2 input-resize-vert" id="message_inquiry" name="content" placeholder="Add a personal message here." style="overflow: hidden; word-wrap: break-word; resize: none; height: 40px;"></textarea>
                                    <div class="pull-right">
                                       <input type="submit" class="btn btn-primary" value="Send Message">
                                    </div>
                                    <div class="pull-left">
                                    </div>
                                  {!! Form::close() !!}
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </li>
                  
                  <!----- This is for top Messages ----->
                  @foreach ($topMessages as $message)
                  <li class="thread-list-item" id="question2_post_336035933">
                     <div class="row row-condensed">
                        <div class="col-sm-2 col-md-1 text-center">
                           <a href="#" class="media-photo media-round" data-behavior="tooltip" aria-label="Nguyen Huu"><img alt="Nguyen Huu" height="36" src="{{URL::asset('images/temp.jpg')}}" title="Nguyen Huu" width="36"></a>
                           {{$message->user_name}}
                        </div>
                        <div class="col-sm-10 ">
                           <div class="row-space-4">
                              <div class="panel panel-quote panel-quote-flush ">
                                 <div class="panel-body">
                                    <div class="message-text">
                                       <p class="trans">{{$message->content}}</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="time-container text-muted ">
                                 <small class="time" title="">
                                 {{$message->sent_date_str}}
                                 </small>
                                 <small class="exact-time hide">
                                 </small>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  @endforeach
                  <!------- End top messages --------->
                  
                  
                  <li class="thread-list-item">
                     <div class="row row-condensed row-space-4">
                        <div class="col-sm-10 col-sm-offset-1">
                           <h3>
                              <i class="icon icon-flag"></i> Safety Tip
                           </h3>
                           <p>
                              For your protection and the safety of your guests, always <a href="#">communicate through AirRent</a> and tell your guests about <a href="#">important safety features</a> in your space.
                           </p>
                        </div>
                     </div>
                  </li>
                  
                  <!------ This is for bottom messages ------->
                  @foreach ($bottomMessages as $message)
                  @if ($message->main_user)
                  <li class="thread-list-item" id="question2_post_337311754">
                    <div class="row row-condensed">
                       <div class="col-sm-2 col-md-1 text-center">
                          <a href="/users/show/27255417" class="media-photo media-round" data-behavior="tooltip" aria-label="Qui"><img alt="Qui" height="36" src="https://a1.muscache.com/defaults/user_pic-36x36.png?v=2" title="Qui" width="36"></a>
                          {{$message->user_name}}
                       </div>
                       <div class="col-sm-10 ">
                          <div class="row-space-4">
                             <div class="panel panel-quote panel-quote-flush ">
                                <div class="panel-body">
                                   <div class="message-text">
                                      <p class="trans">{{$message->content}}</p>
                                   </div>
                                </div>
                             </div>
                             <div class="time-container text-muted ">
                                <small class="time" title="">
                                {{$message->sent_date_str}}
                                </small>
                                <small class="exact-time hide">
                                </small>
                             </div>
                          </div>
                       </div>
                    </div>
                 </li>
                  @else
                  <li class="thread-list-item" id="question2_post_337316340">
                    <div class="row row-condensed">
                       <div class="col-sm-10 col-md-push-1">
                          <div class="row-space-4">
                             <div class="panel panel-quote panel-quote-flush panel-quote-right">
                                <div class="panel-body">
                                   <div class="flag-control pull-right">
                                      <a href="#" id="flag-for-message-337316340" class="flag-trigger link-reset" data-behavior="tooltip" aria-label="Report this message">
                                      <i class="icon icon-flag h4"></i>
                                      </a>
                                      <div class="modal flag-modal" role="dialog" data-trigger="#flag-for-message-337316340" aria-hidden="true">
                                         <div class="modal-table">
                                            <div class="modal-cell">
                                               <div class="modal-content">
                                                  <form accept-charset="UTF-8" action="/user_flags" class="new_user_flag" id="new_user_flag" method="post">
                                                     <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="V4$.airbnb.co.uk$t_Vx4Rp0zw0$PYduk9H4PtEeLxnnkottrZ9arXpyhmCz9KujIApuCpk="></div>
                                                     <div class="panel-header main-header">
                                                        <a href="#" class="modal-close" data-behavior="modal-close"></a>
                                                        Do you want to anonymously report this message?
                                                     </div>
                                                     <div class="panel-header thanks-header hide">
                                                        Thank You!
                                                     </div>
                                                     <div class="panel-body flag-form">
                                                        If so, please choose one of the following reasons and
                                                        our dedicated Trust and Safety team will look into it.<br><br>
                                                        <ul class="list-unstyled">
                                                           <li class="row-space-2">
                                                              <a href="#" class="flag-reasons btn btn-large btn-block
                                                                 " data-reason-id="Attempt to pay or communicate outside Airbnb">Attempt to pay or communicate outside Airbnb <i class="icon icon-question flag-question h5" data-behavior="tooltip" data-position="right" aria-label="This person is attempting to share or request contact info before an
                                                                 accepted reservation."></i></a>
                                                           </li>
                                                           <li class="row-space-2">
                                                              <a href="#" class="flag-reasons btn btn-large btn-block
                                                                 " data-reason-id="Solicitation for another website">Solicitation for another website <i class="icon icon-question flag-question h5" data-behavior="tooltip" data-position="right" aria-label="This message links to a website unaffiliated with Airbnb."></i></a>
                                                           </li>
                                                           <li class="row-space-2">
                                                              <a href="#" class="flag-reasons btn btn-large btn-block
                                                                 " data-reason-id="Inappropriate content">Inappropriate content <i class="icon icon-question flag-question h5" data-behavior="tooltip" data-position="right" aria-label="This message contains violent, graphic, or otherwise offensive content."></i></a>
                                                           </li>
                                                           <li class="row-space-2 other">
                                                              <a href="#" class="flag-reasons btn btn-large btn-block
                                                                 row-space-2" data-reason-id="Other">Other <i class="icon icon-question flag-question h5" data-behavior="tooltip" data-position="right" aria-label="None of the above reasons apply."></i></a>
                                                              <div class="other-container hide">
                                                                 <textarea class="row-space-2" cols="40" id="user_flag_other_note" name="user_flag[other_note]" placeholder="Please describe a reason" required="required" rows="3"></textarea>
                                                              </div>
                                                           </li>
                                                        </ul>
                                                        <input id="user_flag_flaggable_type" name="user_flag[flaggable_type]" type="hidden" value="message">
                                                        <input id="user_flag_flaggable_id" name="user_flag[flaggable_id]" type="hidden" value="337316340">
                                                        <input id="user_flag_name" name="user_flag[name]" type="hidden">
                                                        <input id="user_flag_id" name="user_flag[id]" type="hidden">
                                                     </div>
                                                     <div class="panel-body flag-thank-you hide">
                                                        <p>
                                                           Thanks for taking the time to report this message.
                                                           Your participation helps keep Airbnb a safe and trusted
                                                           community, and it doesn't go unnoticed!
                                                        </p>
                                                        <a href="#" class="btn btn-small btn-block">Close</a>
                                                     </div>
                                                     <div class="panel-footer hide">
                                                        <input class="btn btn-primary btn-large" id="user_flag_submit" name="commit" type="submit" value="Submit">
                                                     </div>
                                                  </form>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="already-flagged text-muted  hide">
                                      You have reported this message.
                                      <a href="#" class="show-message hide">Show Message</a><a href="#" class="hide-message hide">Hide Message</a> or <a href="#" class="undo_flag">Undo?</a>
                                   </div>
                                   <div class="message-text">
                                      <p class="trans">{{$message->content}}</p>
                                   </div>
                                </div>
                             </div>
                             <div class="time-container text-muted text-right">
                                <small class="time" title="">
                                {{$message->sent_date_str}}
                                </small>
                                <small class="exact-time hide">
                                </small>
                             </div>
                          </div>
                       </div>
                       <div class="col-sm-2 col-md-1 col-md-push-1 text-center">
                          <a href="/users/show/27255417" class="media-photo media-round" data-behavior="tooltip" aria-label="Qui"><img alt="Qui" height="36" src="https://a1.muscache.com/defaults/user_pic-36x36.png?v=2" title="Qui" width="36"></a>
                          {{$message->user_name}}
                       </div>
                    </div>
                 </li>
                  @endif
                  @endforeach
                  <!------- End bottom message ------->
                  
               </ul>
            </div>
            <div class="col-lg-4">
               <div class="panel row-space-4">
                  <div class="mini-profile va-container media">
                     <div class="va-top pull-left">
                        <a href="#" class="media-photo">
                        <img src="{{URL::asset('images/temp.jpg')}}" width="100" height="100" alt="Qui">
                        </a>
                     </div>
                     <div class="va-middle">
                        <div class="h4">
                           <a href="#" class="text-normal">{{$ownerUser->user_name}}</a>
                           <br>
                           <small>
                           Member since 2015
                           </small>
                        </div>
                     </div>
                  </div>
                  <div class="panel-header">
                     Verifications
                  </div>
                  <div class="panel-body">
                  </div>
               </div>
               <div class="select select-block row-space-2">
                  <select id="hosting" name="hosting">
                     <option value="5225086">Beautiful Place</option>
                     <option value="5232349" selected="selected">Shared House</option>
                     <option value="5241825"></option>
                  </select>
               </div>
               <div class="small-calendar row-space-2" id="calendar-container">
                  <div class="responsive-calendar small">
                     <div class="calendarMonthHeader">
                        <a href="#" data-month="2" data-year="2015" class="previousMonth pull-left panel text-center ">
                        <i class="icon icon-chevron-left h3"></i>
                        </a>
                        <a href="#" data-month="4" data-year="2015" class="nextMonth pull-left panel text-center ">
                        <i class="icon icon-chevron-right h3"></i>
                        </a>
                        <div class="select ">
                           <div class="loading-wrapper">
                              <select id="month-dropdown">
                                 <option data-month="2" data-year="2015">
                                    February 2015
                                 </option>
                                 <option data-month="3" data-year="2015" selected="">
                                    March 2015
                                 </option>
                                 <option data-month="4" data-year="2015">
                                    April 2015
                                 </option>
                                 <option data-month="5" data-year="2015">
                                    May 2015
                                 </option>
                                 <option data-month="6" data-year="2015">
                                    June 2015
                                 </option>
                                 <option data-month="7" data-year="2015">
                                    July 2015
                                 </option>
                                 <option data-month="8" data-year="2015">
                                    August 2015
                                 </option>
                                 <option data-month="9" data-year="2015">
                                    September 2015
                                 </option>
                                 <option data-month="10" data-year="2015">
                                    October 2015
                                 </option>
                                 <option data-month="11" data-year="2015">
                                    November 2015
                                 </option>
                                 <option data-month="12" data-year="2015">
                                    December 2015
                                 </option>
                                 <option data-month="1" data-year="2016">
                                    January 2016
                                 </option>
                                 <option data-month="2" data-year="2016">
                                    February 2016
                                 </option>
                                 <option data-month="3" data-year="2016">
                                    March 2016
                                 </option>
                                 <option data-month="4" data-year="2016">
                                    April 2016
                                 </option>
                                 <option data-month="5" data-year="2016">
                                    May 2016
                                 </option>
                                 <option data-month="6" data-year="2016">
                                    June 2016
                                 </option>
                                 <option data-month="7" data-year="2016">
                                    July 2016
                                 </option>
                                 <option data-month="8" data-year="2016">
                                    August 2016
                                 </option>
                                 <option data-month="9" data-year="2016">
                                    September 2016
                                 </option>
                                 <option data-month="10" data-year="2016">
                                    October 2016
                                 </option>
                                 <option data-month="11" data-year="2016">
                                    November 2016
                                 </option>
                                 <option data-month="12" data-year="2016">
                                    December 2016
                                 </option>
                                 <option data-month="1" data-year="2017">
                                    January 2017
                                 </option>
                                 <option data-month="2" data-year="2017">
                                    February 2017
                                 </option>
                                 <option data-month="3" data-year="2017">
                                    March 2017
                                 </option>
                                 <option data-month="4" data-year="2017">
                                    April 2017
                                 </option>
                                 <option data-month="5" data-year="2017">
                                    May 2017
                                 </option>
                                 <option data-month="6" data-year="2017">
                                    June 2017
                                 </option>
                                 <option data-month="7" data-year="2017">
                                    July 2017
                                 </option>
                                 <option data-month="8" data-year="2017">
                                    August 2017
                                 </option>
                                 <option data-month="9" data-year="2017">
                                    September 2017
                                 </option>
                                 <option data-month="10" data-year="2017">
                                    October 2017
                                 </option>
                                 <option data-month="11" data-year="2017">
                                    November 2017
                                 </option>
                                 <option data-month="12" data-year="2017">
                                    December 2017
                                 </option>
                                 <option data-month="1" data-year="2018">
                                    January 2018
                                 </option>
                                 <option data-month="2" data-year="2018">
                                    February 2018
                                 </option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="calendarDaysHeader text-right">
                        <ul class="list-layout clearfix">
                           <li>Mon</li>
                           <li>Tue</li>
                           <li>Wed</li>
                           <li>Thu</li>
                           <li>Fri</li>
                           <li>Sat</li>
                           <li>Sun</li>
                        </ul>
                     </div>
                     <div class="panel clearfix">
                        <ul class="list-unstyled calendarDates">
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="2" data-day="23">
                              <div class="date">23</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="2" data-day="24">
                              <div class="date">24</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="2" data-day="25">
                              <div class="date">25</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="2" data-day="26">
                              <div class="date">26</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="2" data-day="27">
                              <div class="date">27</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="2" data-day="28">
                              <div class="date">28</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="1">
                              <div class="date">1</div>
                              <div class="month">Mar</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="2">
                              <div class="date">2</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="3">
                              <div class="date">3</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="4">
                              <div class="date">4</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="5">
                              <div class="date">5</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="6">
                              <div class="date">6</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="7">
                              <div class="date">7</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="8">
                              <div class="date">8</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="9">
                              <div class="date">9</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="10">
                              <div class="date">10</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="11">
                              <div class="date">11</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="12">
                              <div class="date">12</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="13">
                              <div class="date">13</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="14">
                              <div class="date">14</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="15">
                              <div class="date">15</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="16">
                              <div class="date">16</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              right
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="17">
                              <div class="date">17</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              tile-status status-r
                              active
                              active-start
                              single
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="18">
                              <div class="date">18</div>
                              <div class="price">
                                 <span></span>
                              </div>
                              <span class="reservation reservation-info">
                              <a href="#">
                              <i class="icon icon-question" data-behavior="tooltip" aria-label="Qui - $10"></i>
                              </a>
                              </span>
                              <span class="reservation reservation-info">
                              <i class="icon icon-question" data-behavior="tooltip" aria-label="Current Enquiry"></i>
                              </span>
                           </li>
                           <li class="tile 
                              no-tile-status
                              active
                              active-end
                              left
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="19">
                              <div class="date">19</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="20">
                              <div class="date">20</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="21">
                              <div class="date">21</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="22">
                              <div class="date">22</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="23">
                              <div class="date">23</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="24">
                              <div class="date">24</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="25">
                              <div class="date">25</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="26">
                              <div class="date">26</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="27">
                              <div class="date">27</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="28">
                              <div class="date">28</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="29">
                              <div class="date">29</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="30">
                              <div class="date">30</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="3" data-day="31">
                              <div class="date">31</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="4" data-day="1">
                              <div class="date">1</div>
                              <div class="month">Apr</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="4" data-day="2">
                              <div class="date">2</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="4" data-day="3">
                              <div class="date">3</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="4" data-day="4">
                              <div class="date">4</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                           <li class="tile 
                              no-tile-status
                              both
                              " data-calendar-square-clickable="" data-year="2015" data-month="4" data-day="5">
                              <div class="date">5</div>
                              <div class="price">
                                 <span>$10</span>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <a href="#">
               View full calendar to edit
               </a>
               <h3>Help</h3>
               <dl class="help-questions">
                  <dt class="help-question">
                     <a class="link-reset" href="#">How do I get paid?</a>
                  </dt>
                  <dd class="help-answer row-space-1 hide">
                     The guest pays AirRent by credit card or PayPal. We'll pay you after the guest checks in.
                  </dd>
                  <dt class="help-question">
                     <a class="link-reset" href="#">When do I receive contact info?</a>
                  </dt>
                  <dd class="help-answer row-space-1 hide">
                     Once a reservation is accepted, the e-mail address and phone numbers of both parties will be provided to each of you.
                  </dd>
                  <dt class="help-question">
                     <a class="link-reset" href="#">Can I call the other person?</a>
                  </dt>
                  <dd class="help-answer row-space-1 hide">
                     Not until a reservation request is made and accepted.
                  </dd>
                  <dt class="help-question">
                     <a class="link-reset" href="#">How do I know if a place is available?</a>
                  </dt>
                  <dd class="help-answer row-space-1 hide">
                     The best way is to ask. If you submit a reservation request and the host is not available, the balance will be refunded within 48 hours.
                  </dd>
                  <dt class="help-question">
                     <a class="link-reset" href="#">How do I pay?</a>
                  </dt>
                  <dd class="help-answer row-space-1 hide">
                     The guest pays AirRent by credit card or PayPal. We hold the money in escrow until the guest checks in.
                  </dd>
                  <dt class="help-question">
                     <a class="link-reset" href="#">How do I get to a host's house?</a>
                  </dt>
                  <dd class="help-answer row-space-1 hide">
                     You should discuss this with the host after the reservation request is accepted.
                  </dd>
                  <dt class="help-question">
                     <a class="link-reset" href="#">How do I set a special price?</a>
                  </dt>
                  <dd class="help-answer row-space-1 hide">
                     You can set a price that applies only to a particular traveller. Click the "Make Special Offer" link on the conversation page with that traveller.
                  </dd>
                  <dt class="help-question">
                     <a class="link-reset" href="#">How do I contact AirRent?</a>
                  </dt>
                  <dd class="help-answer row-space-1 hide">
                     <a href="#">Contact us here</a>
                  </dd>
               </dl>
               <a href="#" >
               See FAQ for more help
               </a>
               <h3>Safety</h3>
               <p><a href="#">
                  Educate yourself about safety
                  </a>
               </p>
               <h3>Email Addresses</h3>
               <p>
                  Your phone number, listing address, and an anonymized version of your email address are automatically shared once a reservation is accepted. <a href="#" >Learn more about anonymous emails</a>.
               </p>
               <h3>How do I pay?</h3>
               <p>
                  Payments are transacted online through the AirRent payment system. Simply press the 'book it' button on the listing page, and enter your credit card or PayPal information.
               </p>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-8">
            </div>
         </div>
      </div>
      <div id="footer" class="container-brand-dark footer-surround footer-container">
         <div class="footer-content-container page-container-responsive">
            <div class="row row-condensed">
               <div class="col-md-3 col-md-offset-1">
                  <div class="language-curr-picker clearfix">
                     <div class="select select-large select-block row-space-2">
                        <select class="language-selector">
                           <option value="id">Bahasa Indonesia</option>
                           <option value="ms">Bahasa Melayu</option>
                           <option value="ca">Català</option>
                           <option value="da">Dansk</option>
                           <option value="de">Deutsch</option>
                           <option value="en">English</option>
                           <option value="es">Español</option>
                           <option value="el">Eλληνικά</option>
                           <option value="fr">Français</option>
                           <option value="it">Italiano</option>
                           <option value="hu">Magyar</option>
                           <option value="nl">Nederlands</option>
                           <option value="no">Norsk</option>
                           <option value="pl">Polski</option>
                           <option value="pt">Português</option>
                           <option value="fi">Suomi</option>
                           <option value="sv">Svenska</option>
                           <option value="tr">Türkçe</option>
                           <option value="is">Íslenska</option>
                           <option value="cs">Čeština</option>
                           <option value="ru">Русский</option>
                           <option value="th">ภาษาไทย</option>
                           <option value="zh">中文 (简体)</option>
                           <option value="zh-TW">中文 (繁體)</option>
                           <option value="ja">日本語</option>
                           <option value="ko">한국어</option>
                        </select>
                     </div>
                     <div class="select select-large select-block row-space-2">
                        <select class="currency-selector">
                           <option value="ARS">ARS</option>
                           <option value="AUD">AUD</option>
                           <option value="BRL">BRL</option>
                           <option value="CAD">CAD</option>
                           <option value="CHF">CHF</option>
                           <option value="CNY">CNY</option>
                           <option value="CZK">CZK</option>
                           <option value="DKK">DKK</option>
                           <option value="EUR">EUR</option>
                           <option value="GBP" selected="">GBP</option>
                           <option value="HKD">HKD</option>
                           <option value="HUF">HUF</option>
                           <option value="IDR">IDR</option>
                           <option value="ILS">ILS</option>
                           <option value="INR">INR</option>
                           <option value="JPY">JPY</option>
                           <option value="KRW">KRW</option>
                           <option value="MYR">MYR</option>
                           <option value="MXN">MXN</option>
                           <option value="NOK">NOK</option>
                           <option value="NZD">NZD</option>
                           <option value="PHP">PHP</option>
                           <option value="PLN">PLN</option>
                           <option value="RUB">RUB</option>
                           <option value="SEK">SEK</option>
                           <option value="SGD">SGD</option>
                           <option value="THB">THB</option>
                           <option value="TRY">TRY</option>
                           <option value="TWD">TWD</option>
                           <option value="USD">USD</option>
                           <option value="VND">VND</option>
                           <option value="ZAR">ZAR</option>
                        </select>
                     </div>
                     <div class="cx-number"></div>
                  </div>
               </div>
               <div class="col-md-2 col-md-offset-1 hide-sm">
                  <h5>Company</h5>
                  <ul class="unstyled list-layout">
                     <li><a href="#" class="link-contrast">About</a></li>
                     <li><a href="#" class="link-contrast">Jobs</a></li>
                     <li><a href="#" class="link-contrast">Press</a></li>
                     <li><a href="#" class="link-contrast">Blog</a></li>
                     <li><a href="#" class="link-contrast">Help</a></li>
                     <li><a href="#" class="link-contrast">Policies</a></li>
                     <li><a href="#" class="link-contrast">Disaster Response</a></li>
                     <li><a href="#" class="link-contrast">Terms &amp; Privacy</a></li>
                  </ul>
               </div>
               <div class="col-md-2 hide-sm">
                  <h5>Discover</h5>
                  <ul class="unstyled list-layout">
                     <li><a href="#" class="link-contrast">Trust &amp; Safety</a></li>
                     <li><a href="#" class="link-contrast">Invite Friends</a></li>
                     <li><a href="#" class="link-contrast">AirRent Picks</a></li>
                     <li><a href="#" class="link-contrast">Mobile</a></li>
                     <li><a href="#" class="link-contrast">Support NYC</a></li>
                     <li><a href="#" class="link-contrast">Business Travel</a></li>
                     <li><a href="#" class="link-contrast">Site Map</a></li>
                  </ul>
               </div>
               <div class="col-md-2 hide-sm">
                  <h5>Hosting</h5>
                  <ul class="unstyled list-layout">
                     <li>
                        <a href="#" class="link-contrast">Why Host</a>
                     </li>
                     <li><a href="#" class="link-contrast">Hospitality</a></li>
                     <li><a href="#" class="link-contrast">Responsible Hosting</a></li>
                     <li><a href="#" class="link-contrast">Home Safety</a></li>
                     <li><a href="#" class="link-contrast">Stories</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-sm-12 row-space-4 row-space-top-4 show-sm">
               <ul class="unstyled list-layout list-inline text-center h5">
                  <li><a href="#" class="link-contrast">About</a></li>
                  <li><a href="#" class="link-contrast">Jobs</a></li>
                  <li><a href="#" class="link-contrast">Press</a></li>
                  <li><a href="#" class="link-contrast">Blog</a></li>
                  <li><a href="#" class="link-contrast">Terms &amp; Privacy</a></li>
               </ul>
            </div>
            <hr class="footer-divider row-space-top-8 row-space-4 hide-sm">
            <div class="social-media text-center">
               <h5 class="row-space-4 hide-sm">Join Us On</h5>
               <ul class="unstyled list-layout list-inline" itemscope="" itemtype="">
                  <link itemprop="url" href="#">
                  <li>
                     <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" >
                     <i class="icon footer-icon icon-facebook"></i>
                     </a>        
                  </li>
                  <li>
                     <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" >
                     <i class="icon footer-icon icon-google-plus"></i>
                     </a>        
                  </li>
                  <li>
                     <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" >
                     <i class="icon footer-icon icon-twitter"></i>
                     </a>        
                  </li>
                  <li>
                     <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" >
                     <i class="icon footer-icon icon-linkedin"></i>
                     </a>      
                  </li>
                  <li>
                     <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" >
                     <i class="icon footer-icon icon-pinterest"></i>
                     </a>        
                  </li>
                  <li>
                     <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" >
                     <i class="icon footer-icon icon-youtube"></i>
                     </a>        
                  </li>
                  <li>
                     <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" >
                     <i class="icon footer-icon icon-instagram"></i>
                     </a>        
                  </li>
               </ul>
               <div id="copyright" class="row-space-top-2 text-muted">
                  © AirRent, Inc.
               </div>
            </div>
         </div>
      </div>
   </body>
</html>