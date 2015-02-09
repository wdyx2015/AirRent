<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <link href="{{URL::asset('css/bootstrap.css')}}" media="all" rel="stylesheet" type="text/css">
      <link href="{{URL::asset('css/create_place.css')}}" media="all" rel="stylesheet" type="text/css">
      <style>
         .cbp-tm-submenu
         {
         display: none;
         }
         li:hover .cbp-tm-submenu
         {
         display:  block;
         }
         .no-display
         {
         display: none !important;
         }
         .headerBigThan50
         {
         position: fixed !important; 
         top: 0px !important;
         }
         .headerLessThan50
         {
         top: 0px !important;
         }
         .navBigThan50
         {
         position: fixed !important;
         top: 40px !important;
         }
         .navLessThan50
         {
         position:absolute !important; 
         top: 0px !important;
         }
         .contentBigThan50
         {
         position: absolute !important;
         top: 40px !important;
         }
         .nav-sections
         {
         position: static !important;
         }
         .publish-actions
         {
         position: static !important;
         transform:translateY(0) !important;
         -webkit-transform: translateY(0) !important;
         -moz-transform: translateY(0) !important;
         }
      </style>
      <script src="{{URL::asset('js/jquery-1.11.2.min.js')}}"></script>
      <script>
         $(function() {
             var status = -1;
             $(window).resize(function() {
                 var height = $("#js-manage-listing-footer").offset().top - $("#js-manage-listing-header").offset().top - 40;
                 $("#js-manage-listing-nav").attr("style","height:"+height+"px;");
                 height = height - 113;
                 $("#js-manage-listing-nav").find(".nav-sections").attr("style","height:"+height+"px;");
             }).trigger("resize");
             $(window).scroll(function() {
                 var scrollTop = $(window).scrollTop();
                 if (scrollTop > 50)
                 {
                     if (status === 1) return;
                     status = 1;
                     $("#js-manage-listing-header").removeClass("headerLessThan50").addClass("headerBigThan50");
                     $("#js-manage-listing-nav").removeClass("navLessThan50").addClass("navBigThan50");
                     $("#js-manage-listing-content").addClass("contentBigThan50");
                     $(window).trigger("resize");
                 }
                 else
                 {
                     if (status === 2) return;
                     status = 2;
                     $("#js-manage-listing-header").removeClass("headerBigThan50").addClass("headerLessThan50");
                     $("#js-manage-listing-nav").removeClass("navBigThan50").addClass("navLessThan50");
                     $("#js-manage-listing-content").removeClass("contentBigThan50");
                     $(window).trigger("resize");
                 }
             });
             $("li.nav-item[data-track]").on("click",function(){
                 $("li.nav-item[data-track]").removeClass("nav-active");
                 $(this).addClass("nav-active");
                 var targetTrack = "#"+$(this).attr("data-track")+"-tracker";
                 $(".tab-navitagor").addClass("no-display");
                 $(targetTrack).removeClass("no-display");
             });
         })
         
      </script>
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
                  Nguyen Huu
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
      <div class="manage-listing  never-listed" id="js-manage-listing">
         <div id="js-disaster-alert"></div>
         <div class="manage-listing-header" id="js-manage-listing-header" style="top: 0px;">
            <div class="subnav ml-header-subnav">
               <ul class="subnav-list">
                  <li>
                     <a href="#" class="subnav-item icon icon-arrow-left" id="all-listings" data-behavior="tooltip" data-position="right" aria-label="View all your listings."></a>
                  </li>
                  <li id="listing-name" class="subnav-text">Beautiful Place</li>
                  <li>
                     <a href="#" data-track="preview" class="subnav-item pull-right" id="preview-btn" data-behavior="tooltip" data-position="left" target="_blank" aria-label="Preview your listing as it will appear when active.">
                     <i class="icon icon-eye"></i>
                     Preview
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="manage-listing-row-container">
            <div class="manage-listing-nav fixed" id="js-manage-listing-nav" style="position:absolute; top: 0px;">
               <div class="nav-sections">
                  <!-- Basics -->
                  <div class="h6 section-header row-space-1 pre-listed">
                     Basics
                  </div>
                  <ul class="list-unstyled">
                     <li class="nav-item nav-calendar pre-listed complete nav-active" data-track="calendar">
                        <a href="#">
                           <div class="row row-condensed row-table nav-item">
                              <div class="col-9 col-middle">Calendar</div>
                              <div class="col-3 col-middle text-center">
                                 <div class="js-new-section-icon not-post-listed">
                                    <i class="nav-icon icon icon-add icon-pink icon-rausch"></i>
                                 </div>
                                 <i class="nav-icon icon icon-ok-alt icon-green icon-lima nav-icon-checked not-post-listed visible transition"></i>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="nav-item nav-pricing pre-listed complete" data-track="pricing">
                        <a href="#">
                           <div class="row row-condensed row-table nav-item">
                              <div class="col-9 col-middle">Pricing</div>
                              <div class="col-3 col-middle text-center">
                                 <div class="js-new-section-icon not-post-listed">
                                    <i class="nav-icon icon icon-add icon-pink icon-rausch"></i>
                                 </div>
                                 <i class="nav-icon icon icon-ok-alt icon-green icon-lima nav-icon-checked not-post-listed visible transition"></i>
                              </div>
                           </div>
                        </a>
                     </li>
                  </ul>
                  <!-- Description -->
                  <div class="h6 section-header row-space-1 row-space-top-5 ">
                     Description
                  </div>
                  <ul class="list-unstyled">
                     <li class="nav-item nav-overview pre-listed complete" data-track="overview">
                        <a href="#">
                           <div class="row row-condensed row-table nav-item">
                              <div class="col-9 col-middle">Overview</div>
                              <div class="col-3 col-middle text-center">
                                 <div class="js-new-section-icon not-post-listed">
                                    <i class="nav-icon icon icon-add icon-pink icon-rausch"></i>
                                 </div>
                                 <i class="nav-icon icon icon-ok-alt icon-green icon-lima nav-icon-checked not-post-listed visible transition"></i>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="nav-item nav-details post-listed" data-track="details">
                        <a href="#">
                           <div class="row row-condensed row-table nav-item">
                              <div class="col-9 col-middle">Details</div>
                              <div class="col-3 col-middle text-center">
                                 <div class="js-new-section-icon">
                                    <i class="nav-icon icon icon-add icon-pink icon-rausch"></i>
                                 </div>
                                 <i class="nav-icon icon icon-ok-alt icon-green icon-lima nav-icon-checked not-post-listed"></i>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="nav-item nav-photos pre-listed complete" data-track="photos">
                        <a href="#">
                           <div class="row row-condensed row-table nav-item">
                              <div class="col-9 col-middle">Foto</div>
                              <div class="col-3 col-middle text-center">
                                 <div class="js-new-section-icon not-post-listed">
                                    <i class="nav-icon icon icon-add icon-pink icon-rausch"></i>
                                 </div>
                                 <i class="nav-icon icon icon-ok-alt icon-green icon-lima nav-icon-checked not-post-listed visible transition"></i>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="nav-item nav-guidebook post-listed" data-track="guidebook">
                        <a href="#">
                           <div class="row row-condensed row-table nav-item">
                              <div class="col-9 col-middle">Guidebook</div>
                              <div class="col-3 col-middle text-center">
                                 <div class="js-new-section-icon">
                                    <i class="nav-icon icon icon-add icon-pink icon-rausch"></i>
                                 </div>
                                 <i class="nav-icon icon icon-ok-alt icon-green icon-lima nav-icon-checked not-post-listed"></i>
                              </div>
                           </div>
                        </a>
                     </li>
                  </ul>
                  <!-- Settings -->
                  <div class="h6 section-header row-space-1 row-space-top-5 ">
                     Settings
                  </div>
                  <ul class="list-unstyled">
                     <li class="nav-item nav-amenities pre-listed" data-track="amenities">
                        <a href="#">
                           <div class="row row-condensed row-table nav-item">
                              <div class="col-9 col-middle">Amenities</div>
                              <div class="col-3 col-middle text-center">
                                 <i class="nav-icon icon icon-ok-alt icon-green icon-lima nav-icon-checked not-post-listed"></i>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="nav-item nav-listing pre-listed complete" data-track="listing">
                        <a href="#">
                           <div class="row row-condensed row-table nav-item">
                              <div class="col-9 col-middle">Listing</div>
                              <div class="col-3 col-middle text-center">
                                 <div class="js-new-section-icon not-post-listed">
                                    <i class="nav-icon icon icon-add icon-pink icon-rausch"></i>
                                 </div>
                                 <i class="nav-icon icon icon-ok-alt icon-green icon-lima nav-icon-checked not-post-listed visible transition"></i>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="nav-item nav-address pre-listed complete" data-track="address">
                        <a href="#">
                           <div class="row row-condensed row-table nav-item">
                              <div class="col-9 col-middle">Location</div>
                              <div class="col-3 col-middle text-center">
                                 <div class="js-new-section-icon not-post-listed">
                                    <i class="nav-icon icon icon-add icon-pink icon-rausch"></i>
                                 </div>
                                 <i class="nav-icon icon icon-ok-alt icon-green icon-lima nav-icon-checked not-post-listed visible transition"></i>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="nav-item nav-terms post-listed" data-track="terms">
                        <a href="#">
                           <div class="row row-condensed row-table nav-item">
                              <div class="col-9 col-middle">Terms</div>
                              <div class="col-3 col-middle text-center">
                                 <div class="js-new-section-icon">
                                    <i class="nav-icon icon icon-add icon-pink icon-rausch"></i>
                                 </div>
                                 <i class="nav-icon icon icon-ok-alt icon-green icon-lima nav-icon-checked not-post-listed"></i>
                              </div>
                           </div>
                        </a>
                     </li>
                  </ul>
                  <!-- Cleaning -->
               </div>
               <div style="clear:both"></div>
               <div class="publish-actions text-center publish">
                  <div id="user-suspended"></div>
                  <div id="availability-dropdown">
                  </div>
                  <div id="js-publish-button">
                     <div class="not-post-listed text-center">
                        <div class="animated text-lead text-muted steps-remaining js-steps-remaining anim-fade-out-scale-down" style="display: none;"></div>
                        <button data-href="complete" class="animated btn btn-large btn-special btn-primary anim-flip-in-Y" id="js-list-space-button" data-track="list_space_button_left_nav" style="opacity: 0; display: inline-block;">
                        List Space
                        </button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="manage-listing-content" id="js-manage-listing-content">
               <div id="calendar-tracker" class="tab-navitagor">
                  <div id="performance-analytics"></div>
                  <div id="calendar-container">
                     <div class="calendar-settings-btn-container pull-right post-listed">
                        <span class="label-contrast label-new
                           hide">NEW</span>
                        <a class="text-normal link-reset" id="js-calendar-settings-btn" href="#">
                        Settings
                        &nbsp;<i class="icon icon-cog text-lead"></i>
                        </a>
                     </div>
                     <div id="calendar">
                        <div class="panel">
                           <div class="section-onetime-dates row-space-top-2">
                              <div class="js-saving-progress saving-progress" style="display:none;">
                                 <h5>Saving...</h5>
                              </div>
                           </div>
                           <div id="wizard-container">
                              <div class="wizard-pane row row-table text-center">
                                 <div class="col-10 col-middle">
                                    <h2 class="row-space-5">When is your listing available?</h2>
                                    <ul class="list-unstyled row">
                                       <li class="availability-option col-4">
                                          <div class="calendar-image available-always selected" data-slug="always"></div>
                                          <div class="h3">Always</div>
                                          <p class="choice-description">List all dates as available</p>
                                       </li>
                                       <li class="availability-option col-4">
                                          <div class="calendar-image available-sometimes " data-slug="sometimes"></div>
                                          <div class="h3">Sometimes</div>
                                          <p class="choice-description">List some dates as available</p>
                                       </li>
                                       <li class="availability-option col-4">
                                          <div class="calendar-image available-onetime " data-slug="onetime"></div>
                                          <div class="h3">One Time</div>
                                          <p class="choice-description">List only one time period as available</p>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="post-listed">
                        <hr class="row-space-top-8">
                        <div class="row">
                           <div class="col-6">
                              <small class="text-muted">
                              <i class="dot dot-success"></i>
                              &nbsp; Reservations<br>
                              <i class="dot dot-white dot-border"></i>
                              &nbsp; Available<br>
                              <i class="dot dot-lighter-gray dot-border"></i>
                              &nbsp; Blocked<br>
                              </small>
                           </div>
                           <div class="col-6">
                              <p class="text-muted text-right">
                                 <small>
                                 <a href="#" class="js-calendar-sync text-normal link-underline">
                                 View calendar sync instructions</a>
                                 <br>
                                 <a class="text-normal link-underline" href="#">
                                 Share feedback about calendar settings with Airbnb</a>
                                 <br>
                                 Calendar last updated today
                                 <span class="icon icon-question" data-behavior="tooltip" aria-label="Visiting this page automatically marks your calendar as up-to-date."></span>
                                 </small>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="amenities-tracker" class="no-display tab-navitagor">
                  <div>
                     <div class="row js-section">
                        <div class="js-saving-progress saving-progress" style="display:none;">
                           <h5>Saving...</h5>
                        </div>
                        <div class="col-4">
                           <h3>Most Common</h3>
                           <p class="text-muted">
                              Common amenities at most Airbnb listings.
                           </p>
                        </div>
                        <div class="col-8">
                           <div class="amenities-common" id="js-amenities-common">
                              <ul class="js-amenities-list
                                 list-unstyled
                                 ">
                                 <li>
                                    <label for="40" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="40" id="40" name="amenities">
                                    Essentials
                                    </label>
                                    <span class="icon icon-question" data-behavior="tooltip" aria-label="Towels, bed sheets, soap, and toilet paper"></span>
                                 </li>
                                 <li>
                                    <label for="1" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="1" id="1" name="amenities">
                                    TV
                                    </label>
                                 </li>
                                 <li>
                                    <label for="2" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="2" id="2" name="amenities">
                                    Cable TV
                                    </label>
                                 </li>
                                 <li>
                                    <label for="5" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="5" id="5" name="amenities">
                                    Air Conditioning
                                    </label>
                                 </li>
                                 <li>
                                    <label for="30" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="30" id="30" name="amenities">
                                    Heating
                                    </label>
                                    <span class="icon icon-question" data-behavior="tooltip" aria-label="Central heating or a heater in the listing"></span>
                                 </li>
                                 <li>
                                    <label for="8" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="8" id="8" name="amenities">
                                    Kitchen
                                    </label>
                                    <span class="icon icon-question" data-behavior="tooltip" aria-label="Space where guests can cook their own meals"></span>
                                 </li>
                                 <li>
                                    <label for="3" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="3" id="3" name="amenities">
                                    Internet
                                    </label>
                                 </li>
                                 <li>
                                    <label for="4" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="4" id="4" name="amenities">
                                    Wireless Internet
                                    </label>
                                    <span class="icon icon-question" data-behavior="tooltip" aria-label="Continuous access in the listing"></span>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <hr class="section-divider">
                     <div class="row js-section">
                        <div class="js-saving-progress saving-progress" style="display:none;">
                           <h5>Saving...</h5>
                        </div>
                        <div class="col-4">
                           <h3>Extras</h3>
                           <p class="text-muted">
                              Additional amenities your listing may offer.
                           </p>
                        </div>
                        <div class="col-8">
                           <div class="amenities-extras" id="js-amenities-extras">
                              <ul class="js-amenities-list
                                 list-unstyled
                                 ">
                                 <li>
                                    <label for="25" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="25" id="25" name="amenities">
                                    Hot Tub
                                    </label>
                                 </li>
                                 <li>
                                    <label for="33" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="33" id="33" name="amenities">
                                    Washer
                                    </label>
                                    <span class="icon icon-question" data-behavior="tooltip" aria-label="In the building, free or for a fee"></span>
                                 </li>
                                 <li>
                                    <label for="7" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="7" id="7" name="amenities">
                                    Pool
                                    </label>
                                    <span class="icon icon-question" data-behavior="tooltip" aria-label="Private or Shared"></span>
                                 </li>
                                 <li>
                                    <label for="34" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="34" id="34" name="amenities">
                                    Dryer
                                    </label>
                                    <span class="icon icon-question" data-behavior="tooltip" aria-label="In the building, free or for a fee"></span>
                                 </li>
                                 <li>
                                    <label for="16" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="16" id="16" name="amenities">
                                    Breakfast
                                    </label>
                                    <span class="icon icon-question" data-behavior="tooltip" aria-label="Breakfast is provided."></span>
                                 </li>
                                 <li>
                                    <label for="9" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="9" id="9" name="amenities">
                                    Free Parking on Premises
                                    </label>
                                 </li>
                                 <li>
                                    <label for="15" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="15" id="15" name="amenities">
                                    Gym
                                    </label>
                                    <span class="icon icon-question" data-behavior="tooltip" aria-label="Free, in the building or nearby"></span>
                                 </li>
                                 <li>
                                    <label for="21" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="21" id="21" name="amenities">
                                    Elevator in Building
                                    </label>
                                 </li>
                                 <li>
                                    <label for="27" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="27" id="27" name="amenities">
                                    Indoor Fireplace
                                    </label>
                                 </li>
                                 <li>
                                    <label for="28" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="28" id="28" name="amenities">
                                    Buzzer/Wireless Intercom
                                    </label>
                                 </li>
                                 <li>
                                    <label for="14" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="14" id="14" name="amenities">
                                    Doorman
                                    </label>
                                 </li>
                                 <li>
                                    <label for="41" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="41" id="41" name="amenities">
                                    Shampoo
                                    </label>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <hr class="section-divider">
                     <div class="row js-section">
                        <div class="js-saving-progress saving-progress" style="display:none;">
                           <h5>Saving...</h5>
                        </div>
                        <div class="col-4">
                           <h3>Special Features</h3>
                           <p class="text-muted">
                              Features of your listing for guests with specific needs.
                           </p>
                        </div>
                        <div class="col-8">
                           <div class="amenities-special" id="js-amenities-special">
                              <ul class="js-amenities-list
                                 list-unstyled
                                 ">
                                 <li>
                                    <label for="31" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="31" id="31" name="amenities">
                                    Family/Kid Friendly
                                    </label>
                                 </li>
                                 <li>
                                    <label for="11" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="11" id="11" name="amenities">
                                    Smoking Allowed
                                    </label>
                                 </li>
                                 <li>
                                    <label for="32" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="32" id="32" name="amenities">
                                    Suitable for Events
                                    </label>
                                    <span class="icon icon-question" data-behavior="tooltip" aria-label="The listing can accommodate a gathering of 25 or more attendees"></span>
                                 </li>
                                 <li>
                                    <label for="12" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="12" id="12" name="amenities">
                                    Pets Allowed
                                    </label>
                                 </li>
                                 <li>
                                    <label for="17" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="17" id="17" name="amenities">
                                    Pets live on this property
                                    </label>
                                    <ul class="js-amenities-list
                                       list-unstyled
                                       dependent-amenities-list
                                       hide">
                                       <li>
                                          <label for="18" class="label-large label-inline amenity-label">
                                          <input type="checkbox" value="18" id="18" name="amenities">
                                          Dog(s)
                                          </label>
                                       </li>
                                       <li>
                                          <label for="19" class="label-large label-inline amenity-label">
                                          <input type="checkbox" value="19" id="19" name="amenities">
                                          Cat(s)
                                          </label>
                                       </li>
                                       <li>
                                          <label for="20" class="label-large label-inline amenity-label">
                                          <input type="checkbox" value="20" id="20" name="amenities">
                                          Other pet(s)
                                          </label>
                                       </li>
                                    </ul>
                                 </li>
                                 <li>
                                    <label for="6" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="6" id="6" name="amenities">
                                    Wheelchair Accessible
                                    </label>
                                    <span class="icon icon-question" data-behavior="tooltip" aria-label="Easy access to the building and listing for guests in wheelchairs"></span>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <hr class="section-divider">
                     <div class="row js-section" id="home_safety">
                        <div class="js-saving-progress saving-progress" style="display:none;">
                           <h5>Saving...</h5>
                        </div>
                        <div class="col-4">
                           <h3>Home Safety</h3>
                           <p class="text-muted">
                              Safety equipment for your home.
                           </p>
                           <p class="text-muted">
                              Smoke and carbon monoxide detectors are strongly encouraged for all listings. Eligible hosts can get them free before December 31, 2014 <a href="#">on our Home Safety Page</a>. <a href="#">Restrictions apply</a>.
                           </p>
                        </div>
                        <div class="col-8">
                           <div class="amenities-home_safety" id="js-amenities-home_safety">
                              <ul class="js-amenities-list
                                 list-unstyled
                                 ">
                                 <li>
                                    <label for="35" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="35" id="35" name="amenities">
                                    Smoke Detector
                                    </label>
                                 </li>
                                 <li>
                                    <label for="36" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="36" id="36" name="amenities">
                                    Carbon Monoxide Detector
                                    </label>
                                 </li>
                                 <li>
                                    <label for="37" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="37" id="37" name="amenities">
                                    First Aid Kit
                                    </label>
                                 </li>
                                 <li>
                                    <label for="38" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="38" id="38" name="amenities">
                                    Safety Card
                                    </label>
                                    <span class="icon icon-question" data-behavior="tooltip" aria-label="Posted emergency information and resources"></span>
                                 </li>
                                 <li>
                                    <label for="39" class="label-large label-inline amenity-label">
                                    <input type="checkbox" value="39" id="39" name="amenities">
                                    Fire Extinguisher
                                    </label>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="listing-tracker" class="no-display tab-navitagor">
                  <div>
                     <div class="row js-section post-listed">
                        <div class="js-saving-progress saving-progress" style="display:none;">
                           <h5>Saving...</h5>
                        </div>
                        <div class="col-4">
                           <h3>House Manual</h3>
                           <p class="text-muted">
                              Instructions for guests once they've arrived at your listing. Only shared after a reservation is confirmed.
                           </p>
                        </div>
                        <div class="col-8">
                           <!-- HTML for house manual subsection -->
                           <div class="row-space-2">
                              <label class="label-large">House Manual</label>
                              <textarea class="input-large textarea-resize-vertical" name="house_manual" rows="6" placeholder="Information for your guest once on the property (e.g. wireless password, entertainment equipment, air-conditioning, heating)."></textarea>
                           </div>
                        </div>
                     </div>
                     <hr class="section-divider post-listed">
                     <div class="row js-section">
                        <div class="js-saving-progress saving-progress" style="display:none;">
                           <h5>Saving...</h5>
                        </div>
                        <div class="col-4">
                           <h3>Rooms and Beds</h3>
                           <p class="text-muted">
                              The number of rooms and beds guests can access.
                           </p>
                        </div>
                        <div class="col-8">
                           <!-- HTML for rooms and beds subsection -->
                           <div class="row row-space-2">
                              <div class="col-6">
                                 <label class="label-large">Bedrooms</label>
                                 <div id="bedrooms-select">
                                    <div class="select
                                       select-large
                                       select-block" data-behavior="tooltip" data-position="right" aria-label="Number of bedrooms can only be set if the room type is <strong>Entire home/apt</strong>.">
                                       <select name="bedrooms" id="select-bedrooms" disabled="">
                                          <option disabled="" selected="" value="Select...">Select...</option>
                                          <option value="0">Studio</option>
                                          <option value="1" selected="selected">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row row-space-2">
                              <div class="col-6">
                                 <label class="label-large">Beds</label>
                                 <div id="beds-select">
                                    <div class="select
                                       select-large
                                       select-block">
                                       <select name="beds" id="select-beds">
                                          <option disabled="" selected="" value="Select...">Select...</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                          <option value="11">11</option>
                                          <option value="12">12</option>
                                          <option value="13">13</option>
                                          <option value="14">14</option>
                                          <option value="15">15</option>
                                          <option value="16">16+</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row row-space-2">
                              <div class="col-6">
                                 <label class="label-large">Bathrooms</label>
                                 <div id="bathrooms-select">
                                    <div class="select
                                       select-large
                                       select-block">
                                       <select name="bathrooms" id="select-bathrooms">
                                          <option disabled="" selected="" value="Select...">Select...</option>
                                          <option value="0">0</option>
                                          <option value="0.5">0.5</option>
                                          <option value="1">1</option>
                                          <option value="1.5">1.5</option>
                                          <option value="2">2</option>
                                          <option value="2.5">2.5</option>
                                          <option value="3">3</option>
                                          <option value="3.5">3.5</option>
                                          <option value="4">4</option>
                                          <option value="4.5">4.5</option>
                                          <option value="5">5</option>
                                          <option value="5.5">5.5</option>
                                          <option value="6">6</option>
                                          <option value="6.5">6.5</option>
                                          <option value="7">7</option>
                                          <option value="7.5">7.5</option>
                                          <option value="8">8+</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr class="section-divider">
                     <div class="row js-section">
                        <div class="js-saving-progress saving-progress" style="display:none;">
                           <h5>Saving...</h5>
                        </div>
                        <div class="col-4">
                           <h3>Listing Info</h3>
                           <p class="text-muted">
                              Basic information about your listing.
                           </p>
                        </div>
                        <div class="col-8">
                           <!-- HTML for listing info subsection -->
                           <div class="row-space-2">
                              <label class="label-large">Home Type</label>
                              <div id="property-type-select">
                                 <div class="select
                                    select-large
                                    select-block">
                                    <select name="property_type_id" id="select-property_type_id">
                                       <option value="1">Apartment</option>
                                       <option value="2" selected="selected">House</option>
                                       <option value="3">Bed &amp; Breakfast</option>
                                       <option value="35">Loft</option>
                                       <option value="4">Cabin</option>
                                       <option value="11">Villa</option>
                                       <option value="5">Castle</option>
                                       <option value="9">Dorm</option>
                                       <option value="6">Treehouse</option>
                                       <option value="8">Boat</option>
                                       <option value="28">Plane</option>
                                       <option value="32">Camper/RV</option>
                                       <option value="12">Igloo</option>
                                       <option value="10">Lighthouse</option>
                                       <option value="15">Yurt</option>
                                       <option value="16">Tipi</option>
                                       <option value="18">Cave</option>
                                       <option value="19">Island</option>
                                       <option value="22">Chalet</option>
                                       <option value="23">Earth House</option>
                                       <option value="24">Hut</option>
                                       <option value="25">Train</option>
                                       <option value="34">Tent</option>
                                       <option value="33">Other</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="row-space-2">
                              <label class="label-large">Room Type</label>
                              <div id="room-type-select">
                                 <div class="select
                                    select-large
                                    select-block">
                                    <select name="room_type_category" id="select-room_type_category">
                                       <option value="entire_home">Entire home/apt</option>
                                       <option value="private_room">Private room</option>
                                       <option value="shared_room" selected="selected">Shared room</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="row-space-2">
                              <label class="label-large">Accommodates</label>
                              <div id="person-capacity-select">
                                 <div class="select
                                    select-large
                                    select-block">
                                    <select name="person_capacity" id="select-person_capacity">
                                       <option value="1">1</option>
                                       <option value="2" selected="selected">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                       <option value="11">11</option>
                                       <option value="12">12</option>
                                       <option value="13">13</option>
                                       <option value="14">14</option>
                                       <option value="15">15</option>
                                       <option value="16">16+</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr class="section-divider">
                     <p class="text-center text-muted">
                        If you wish, you can permanently <a href="#" id="js-delete-listing-link" data-track="toggle_delete">deactivate this listing</a>.
                     </p>
                     <div id="delete-listing-container"></div>
                  </div>
               </div>
               <div id="address-tracker" class="no-display tab-navitagor">
                  <div>
                     <div class="row js-section" id="js-location-container">
                        <div class="js-saving-progress saving-progress" style="display:none;">
                           <h5>Saving...</h5>
                        </div>
                        <div class="col-4">
                           <h3>Address</h3>
                           <p class="text-muted">
                           </p>
                           <p class="text-muted">
                              Your exact address is private and only shared with guests after a reservation is confirmed.
                           </p>
                           <p></p>
                        </div>
                        <div class="col-8">
                           <div class="media-photo">
                              <div class="location-map-container empty-map"></div>
                              <div class="location-map-pin map-pin moving"></div>
                           </div>
                           <div class="panel">
                              <div class="panel-body">
                                 <div class="text-center">
                                    <h4 class="text-muted">This listing has no address.</h4>
                                    <button class="btn btn-primary" id="js-add-address">Add Address</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="address-flow-view"></div>
                     <div class="tooltip help-tooltip" data-trigger="#js-location-container" data-event="none" style="display: block; top: 47px; left: 650px; opacity: 1;">
                        <div class="media">
                           <i class="pull-left icon icon-light-bulb icon-blue icon-beach icon-size-2"></i>
                           <div class="media-body text-lead text-muted help-tooltip-body">
                              <strong>Your Address is Private</strong>
                              <p>It will only be shared with guests after a reservation is confirmed.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="overview-tracker" class="no-display tab-navitagor">
                  <div>
                     <div class="row js-section">
                        <div class="js-saving-progress saving-progress" style="display:none;">
                           <h5>Saving...</h5>
                        </div>
                        <div class="col-4">
                           <h3>Overview</h3>
                           <p class="text-muted">
                              A title and summary displayed on your public listing page.
                           </p>
                        </div>
                        <div class="col-8">
                           <div class="row-space-2" id="tooltip-help-name">
                              <label class="label-large">Title</label>
                              <input type="text" name="name" value="" class="input-large" placeholder="Write a title" maxlength="35">
                              <p class="hide icon-red error-too-long row-space-top-1">Please shorten to save changes</p>
                              <p class="hide icon-red error-value-required row-space-top-1">A value is required to save changes</p>
                              <div id="js-name-count" class="row-space-top-1 h6 text-right">
                                 <span>35</span> characters left
                              </div>
                           </div>
                           <div id="tooltip-help-summary">
                              <label class="label-large">Summary</label>
                              <textarea class="input-large" name="summary" rows="6" placeholder="Write a summary in 250 characters or less" maxlength="250"></textarea>
                              <p class="hide icon-red error-too-long row-space-top-1">Please shorten to save changes</p>
                              <p class="hide icon-red error-value-required row-space-top-1">A value is required to save changes</p>
                              <div id="js-summary-count" class="row-space-top-1 h6 text-right">
                                 <span>250</span> characters left
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr class="section-divider not-post-listed">
                     <p class="text-center not-post-listed">
                        Want to write even more? You can also <a href="#" id="js-write-more">add a detailed description</a> to your listing.
                     </p>
                     <div class="tooltip help-tooltip" data-trigger="#tooltip-help-name" data-event="none" style="display: block; top: 54px; left: 650px; opacity: 1;">
                        <div class="media">
                           <i class="pull-left icon icon-light-bulb icon-blue icon-beach icon-size-2"></i>
                           <div class="media-body text-lead text-muted help-tooltip-body">
                              <strong>A great title</strong>
                              <p>
                                 A great title is unique and descriptive!  It should highlight the main attractions of your space.
                              </p>
                              <p>
                                 <strong>Examples:</strong>
                              </p>
                              <ul>
                                 <li>Charming Victorian in the Mission.</li>
                                 <li>Cozy 2BD with Parking Included</li>
                                 <li>Amazing View from a Modern Loft</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="tooltip help-tooltip" data-trigger="#tooltip-help-summary" data-event="none" style="display: none;">
                        <div class="media">
                           <i class="pull-left icon icon-light-bulb icon-blue icon-beach icon-size-2"></i>
                           <div class="media-body text-lead text-muted help-tooltip-body">
                              <strong>A great summary</strong>
                              <p>A great summary is rich and exciting! It should cover the major features of your space and neighborhood in 250 characters or less.</p>
                              <p>
                                 <strong>Example: </strong>Our cool and comfortable one bedroom apartment with exposed brick has a true city feeling! It comfortably fits two and is centrally located on a quiet street, just two blocks from Washington Park. Enjoy a gourmet kitchen, roof access, and easy access to all major subway lines!
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="photos-tracker" class="no-display tab-navitagor">
                  <div id="photos">
                     <div class="row row-space-top-6">
                        <div class="col-6 col-center text-center">
                           <div class="row-space-2"><i class="icon icon-camera icon-size-2 icon-pink"></i></div>
                           <div class="h3 row-space-1">Add a photo or two!</div>
                           <p class="text-lead text-muted row-space-3">Or three, or more! Guests love photos that highlight the features of your space.</p>
                           <div class="add-photos-button">
                              <input type="file" multiple="multiple" name="photos" class="hide">
                              <button class="btn btn-primary row-space-2" id="photo-uploader" style="position: relative; z-index: 0;">
                              <i class="icon icon-upload"></i> Add Photos
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="pricing-tracker" class="no-display tab-navitagor">
                  <div>
                     <div class="row js-section js-tooltip-trigger" id="js-standard-price">
                        <div class="js-saving-progress saving-progress" style="display:none;">
                           <h5>Saving...</h5>
                        </div>
                        <div class="col-4">
                           <h3>Base Price</h3>
                           <p class="text-muted">
                              Set the default nightly price guests will see for your listing.
                           </p>
                        </div>
                        <div class="col-8">
                           <label class="label-large" for="listing_price_native">Per night</label>
                           <div class="row row-table row-space-1">
                              <div class="col-4 col-middle">
                                 <div class="input-addon">
                                    <span class="input-prefix">£</span>
                                    <input class="input-stem input-large autosubmit-text" type="text" name="listing_price_native" value="" id="listing_price_native" data-suggested="">
                                 </div>
                              </div>
                              <div class="col-8 col-middle">
                              </div>
                           </div>
                           <p class="ml-error" data-error="price"></p>
                           <div class="row row-space-top-3">
                              <div class="col-6">
                                 <label class="label-large">Currency</label>
                                 <div id="currency-picker">
                                    <div class="select
                                       select-large
                                       select-block">
                                       <select name="listing_native_currency" id="select-listing_native_currency">
                                          <option value="ARS">ARS</option>
                                          <option value="AUD">AUD</option>
                                          <option value="BRL">BRL</option>
                                          <option value="CAD">CAD</option>
                                          <option value="CHF">CHF</option>
                                          <option value="CNY">CNY</option>
                                          <option value="CZK">CZK</option>
                                          <option value="DKK">DKK</option>
                                          <option value="EUR">EUR</option>
                                          <option value="GBP" selected="selected">GBP</option>
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
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr class="section-divider">
                     <p class="text-center text-muted" id="js-set-long-term-prices">
                        Want to offer a discount for longer stays?
                        <a href="#">You can also set weekly and monthly prices.</a>
                     </p>
                     <div id="js-advanced-pricing-content">
                        <!-- Modal for advanced pricing goes here -->
                     </div>
                     <div id="js-long-term-prices" class="hide">
                        <div class="row js-section js-tooltip-trigger" id="js-long-term-prices">
                           <div class="js-saving-progress saving-progress" style="display:none;">
                              <h5>Saving...</h5>
                           </div>
                           <div class="col-4">
                              <h3>Long-Term Prices</h3>
                              <p class="text-muted">
                                 Set discounted prices for reservations that are 7 nights or longer.
                              </p>
                           </div>
                           <div class="col-8">
                              <div class="row-space-3">
                                 <div>
                                    <label class="label-large" for="listing_weekly_price_native">Per week</label>
                                    <div class="row row-table row-space-1">
                                       <div class="col-4 col-middle">
                                          <div class="input-addon">
                                             <span class="input-prefix">£</span>
                                             <input type="text" name="listing_weekly_price_native" value="" class="input-stem input-large autosubmit-text" id="listing_weekly_price_native" data-suggested="">
                                          </div>
                                       </div>
                                       <div class="col-8 col-middle text-highlight">
                                       </div>
                                    </div>
                                    <p class="ml-error hide" data-error="weekly_price"></p>
                                    <div class="js-advanced-weekly-pricing"></div>
                                 </div>
                              </div>
                              <div class="row-space-3">
                                 <div>
                                    <label class="label-large" for="listing_monthly_price_native">Per month</label>
                                    <div class="row row-table row-space-1">
                                       <div class="col-4 col-middle">
                                          <div class="input-addon">
                                             <span class="input-prefix">£</span>
                                             <input type="text" name="listing_monthly_price_native" value="" class="autosubmit-text input-stem input-large" id="listing_monthly_price_native" data-suggested="">
                                          </div>
                                       </div>
                                       <div class="col-8 col-middle text-highlight">
                                       </div>
                                    </div>
                                    <p class="ml-error hide" data-error="monthly_price"></p>
                                    <span class="js-advanced-monthly-pricing"></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr class="section-divider post-listed">
                     <div class="row js-section post-listed">
                        <div class="js-saving-progress saving-progress" style="display:none;">
                           <h5>Saving...</h5>
                        </div>
                        <div class="col-4">
                           <h3>Additional Pricing Options</h3>
                           <p class="text-muted">
                           </p>
                        </div>
                        <div class="col-8">
                           <div class="row-space-3 js-tooltip-trigger" id="js-cleaning-fee">
                              <label class="label-large label-inline" for="listing_cleaning_fee_native_checkbox">
                              <input type="checkbox" id="listing_cleaning_fee_native_checkbox" data-extras="true">
                              Cleaning Fee
                              </label>
                              <div class="hide" data-checkbox-id="listing_cleaning_fee_native_checkbox">
                                 <div class="row row-table row-space-1">
                                    <div class="col-4 col-middle">
                                       <div class="input-addon">
                                          <span class="input-prefix">£</span>
                                          <input type="text" class="autosubmit-text input-stem input-large" name="listing_cleaning_fee_native" value="" data-extras="true">
                                       </div>
                                    </div>
                                    <div class="col-8 col-middle">
                                    </div>
                                 </div>
                                 <p class="text-muted">
                                    This fee will apply to every reservation at your listing.
                                 </p>
                                 <p class="ml-error" data-error="extras_price"></p>
                              </div>
                           </div>
                           <div class="row-space-3 js-tooltip-trigger" id="js-additional-guests">
                              <label class="label-large label-inline" for="price_for_extra_person_checkbox">
                              <input type="checkbox" id="price_for_extra_person_checkbox" data-extras="true">
                              Additional Guests
                              </label>
                              <div class="hide" data-checkbox-id="price_for_extra_person_checkbox">
                                 <div class="row row-space-1 row-condensed">
                                    <div class="col-4">
                                       <div class="input-addon">
                                          <span class="input-prefix">£</span>
                                          <input type="text" class="autosubmit-text input-stem input-large" name="listing_price_for_extra_person_native" value="0" data-extras="true">
                                       </div>
                                    </div>
                                    <div class="col-5 text-right">
                                       <label class="label-large">For each guest after</label>
                                    </div>
                                    <div class="col-3">
                                       <div id="guests-included-select">
                                          <div class="select
                                             select-large
                                             select-block">
                                             <select name="guests_included" id="select-guests_included">
                                                <option value="1" selected="selected">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16+</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <p class="ml-error" data-error="price_for_extra_person">
                                 </p>
                                 <p class="text-muted">
                                    This fee will apply for each additional guest, for each night of the reservation.
                                 </p>
                              </div>
                           </div>
                           <div class="row-space-3 js-tooltip-trigger" id="js-security-deposit">
                              <label class="label-large label-inline" for="listing_security_deposit_native_checkbox">
                              <input type="checkbox" id="listing_security_deposit_native_checkbox" data-extras="true">
                              Security Deposit
                              </label>
                              <div class="hide" data-checkbox-id="listing_security_deposit_native_checkbox">
                                 <div class="row row-space-1">
                                    <div class="col-4">
                                       <div class="input-addon">
                                          <span class="input-prefix">£</span>
                                          <input type="text" class="autosubmit-text input-stem input-large" name="listing_security_deposit_native" value="" data-extras="true">
                                       </div>
                                    </div>
                                 </div>
                                 <p class="ml-error" data-error="security_deposit"></p>
                                 <p class="text-muted">
                                    Any guest who confirms a reservation at your listing will be responsible for damages up to this amount. No charges or authorizations will be made unless you make a claim within 48 hours after check out.
                                 </p>
                              </div>
                           </div>
                           <div class="row-space-3 js-tooltip-trigger" id="js-weekend-pricing">
                              <label class="label-large label-inline" for="listing_weekend_price_native_checkbox">
                              <input type="checkbox" id="listing_weekend_price_native_checkbox" data-extras="true">
                              Weekend Pricing
                              </label>
                              <div class="hide" data-checkbox-id="listing_weekend_price_native_checkbox">
                                 <div class="row row-table row-space-1">
                                    <div class="col-4 col-middle">
                                       <div class="input-addon">
                                          <span class="input-prefix">£</span>
                                          <input type="text" class="autosubmit-text input-stem input-large" name="listing_weekend_price_native" value="" data-extras="true">
                                       </div>
                                    </div>
                                    <div class="col-8 col-middle">
                                    </div>
                                 </div>
                                 <p class="text-muted">
                                    This is a nightly price. It will replace your base price for every Friday and Saturday.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tooltip help-tooltip" data-trigger="#js-standard-price" data-event="none" style="display: block; top: 47px; left: 650px; opacity: 1;">
                        <div class="media">
                           <i class="pull-left icon icon-light-bulb icon-blue icon-beach icon-size-2"></i>
                           <div class="media-body text-lead text-muted help-tooltip-body">
                              <strong>Setting a price</strong>
                              <p>If you haven’t received many reviews, choose a price that’s below average for your area to help attract guests. Once your listing has received a few positive reviews, you can always raise the price.<br><br>When Airbnb suggests a nightly price, it’s based on pricing and travel trends in your area, in addition to the details of your listing.</p>
                           </div>
                        </div>
                     </div>
                     <div class="tooltip help-tooltip" data-trigger="#js-long-term-prices" data-event="none" style="display: none;">
                        <div class="media">
                           <i class="pull-left icon icon-light-bulb icon-blue icon-beach icon-size-2"></i>
                           <div class="media-body text-lead text-muted help-tooltip-body">
                              <strong>Discount longer trips</strong>
                              <p>Encourage travelers to book longer reservations at your listing by making a stay more affordable.</p>
                           </div>
                        </div>
                     </div>
                     <div class="tooltip help-tooltip" data-trigger="#js-cleaning-fee" data-event="none" style="display: none;">
                        <div class="media">
                           <i class="pull-left icon icon-light-bulb icon-blue icon-beach icon-size-2"></i>
                           <div class="media-body text-lead text-muted help-tooltip-body">
                              <p>The cleaning fee will be included in the total cost of each reservation.</p>
                           </div>
                        </div>
                     </div>
                     <div class="tooltip help-tooltip" data-trigger="#js-weekend-pricing" data-event="none" style="display: none;">
                        <div class="media">
                           <i class="pull-left icon icon-light-bulb icon-blue icon-beach icon-size-2"></i>
                           <div class="media-body text-lead text-muted help-tooltip-body">
                              <p>Make extra money on weekends, or attract more requests by making weekend trips more affordable.</p>
                           </div>
                        </div>
                     </div>
                     <div class="tooltip help-tooltip" data-trigger="#js-additional-guests" data-event="none" style="display: none;">
                        <div class="media">
                           <i class="pull-left icon icon-light-bulb icon-blue icon-beach icon-size-2"></i>
                           <div class="media-body text-lead text-muted help-tooltip-body">
                              <p>Set the number of guests you’d like to host before charging for additional guests.</p>
                           </div>
                        </div>
                     </div>
                     <div class="tooltip help-tooltip" data-trigger="#js-security-deposit" data-event="none" style="display: none;">
                        <div class="media">
                           <i class="pull-left icon icon-light-bulb icon-blue icon-beach icon-size-2"></i>
                           <div class="media-body text-lead text-muted help-tooltip-body">
                              <p>Guests will see the amount of your security deposit on your listing page.</p>
                           </div>
                        </div>
                     </div>
                     <div id="js-donation-tool-placeholder"></div>
                  </div>
               </div>
            </div>
            <div class="manage-listing-help" id="js-manage-listing-help"></div>
         </div>
         <div class="manage-listing-footer" id="js-manage-listing-footer">
            <div class="container-brand-dark footer-panel">
               <div class="row row-table">
                  <div class="col-2 col-middle"><span class="text-muted">© Airbnb, Inc.</span></div>
                  <div class="col-8 col-middle text-center text-muted">
                     <a href="#" class="text-muted">
                     About
                     </a> |
                     <a href="#" class="text-muted">
                     Help
                     </a> |
                     <a href="#" class="text-muted">
                     Safety
                     </a> |
                     <a href="#" class="text-muted">
                     Responsible Hosting
                     </a> |
                     <a href="#" id="apple-turnover-trigger-footer" class="text-muted apple-turnover-trigger">
                     Local Laws
                     </a> |
                     <a href="#" class="text-muted">
                     Policies
                     </a> |
                     <a href="#" class="text-muted">
                     Terms &amp; Privacy
                     </a>
                  </div>
                  <div class="col-2 col-middle">
                     <div class="language-curr-picker pull-right">
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
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>