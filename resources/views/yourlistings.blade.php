<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <link href="{{URL::asset('css/bootstrap.css')}}" media="all" rel="stylesheet" type="text/css">
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
      <div class="subnav hide-print">
         <div class="page-container">
            <ul class="subnav-list">
               <li>
                  <a href="#" aria-selected="false" class="subnav-item">Dashboard</a>
               </li>
               <li>
                  <a href="#" aria-selected="false" class="subnav-item">Inbox</a>
               </li>
               <li>
                  <a href="#" aria-selected="true" class="subnav-item">Your Listings</a>
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
      <div class="page-container row-space-top-4 row-space-4">
         <div class="row">
            <div class="col-3">
               <ul class="sidenav-list">
                  <li>
                     <a href="#" aria-selected="true" class="sidenav-item">Manage Listings</a>
                  </li>
                  <li>
                     <a href="#" aria-selected="false" class="sidenav-item">Your Reservations</a>
                  </li>
                  <li>
                     <a href="#" aria-selected="false" class="sidenav-item">Reservation Requirements</a>
                  </li>
               </ul>
            </div>
            <div class="col-9">
               <div class="panel">
                  <div class="panel-header">
                     <div class="row">
                        <div class="col-6">
                           <div class="select">
                              <form id="select-listings-filter" action="#">
                                 <select id="f" name="f">
                                    <option value="all">Show all listings</option>
                                    <option value="active">Show active</option>
                                    <option value="inactive">Show hidden</option>
                                 </select>
                              </form>
                           </div>
                        </div>
                        <div class="col-6">
                        </div>
                     </div>
                  </div>
                  <div class="suspension-container">
                     <ul class="list-unstyled list-layout">
                        <li class="listing panel-body" data-hosting-id="5225086">
                           <div class="row row-table">
                              <div class="col-2 col-middle">
                                 <a href="#">
                                    <div class="media-photo media-photo-block" style="height: 63px;">
                                       <div class="media-cover text-center">
                                          <img style="width: 100%;" class="lazy img-responsive-height" data-original="#" src="{{URL::asset('images/temp.jpg')}}" style="display: inline;">
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-6 col-middle">
                                 <span class="h4">
                                 <a href="#" class="text-normal">Beautiful Place</a>
                                 </span>
                                 <div class="actions row-space-top-1">
                                    <a href="#">
                                    Manage Listing and Calendar
                                    </a>                
                                 </div>
                              </div>
                              <div class="col-4 col-middle">
                                 <div class="pull-right">
                                    <div class="listing-criteria-header activation-notification">
                                       <div class="listing-criteria-header-message">
                                          <a href="#" class="btn btn-host">2 steps to list</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="listing panel-body" data-hosting-id="5232349">
                           <div class="row row-table">
                              <div class="col-2 col-middle">
                                 <a href="#">
                                    <div class="media-photo media-photo-block" style="height: 63px;">
                                       <div class="media-cover text-center">
                                          <img style="width: 100%;" class="lazy img-responsive-height" data-original="" src="{{URL::asset('images/temp.jpg')}}" style="display: inline;">
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-6 col-middle">
                                 <span class="h4">
                                 <a href="#" class="text-normal">Beautiful Place</a>
                                 </span>
                                 <div class="actions row-space-top-1">
                                    <a href="#">
                                    Manage Listing and Calendar
                                    </a>                
                                 </div>
                              </div>
                              <div class="col-4 col-middle">
                                 <div class="pull-right">
                                    <div id="hosting_id_5232349" class="activation-notification availability-select">
                                       <i class="dot row-space-top-2 col-top dot-danger dot-red"></i>&nbsp;
                                       <div class="select">
                                          <select>
                                             <option value="listed">Listed</option>
                                             <option value="unlisted">Unlisted</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
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
                     <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
                     <i class="icon footer-icon icon-facebook"></i>
                     </a>        
                  </li>
                  <li>
                     <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
                     <i class="icon footer-icon icon-google-plus"></i>
                     </a>        
                  </li>
                  <li>
                     <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
                     <i class="icon footer-icon icon-twitter"></i>
                     </a>        
                  </li>
                  <li>
                     <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
                     <i class="icon footer-icon icon-linkedin"></i>
                     </a>      
                  </li>
                  <li>
                     <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
                     <i class="icon footer-icon icon-pinterest"></i>
                     </a>        
                  </li>
                  <li>
                     <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
                     <i class="icon footer-icon icon-youtube"></i>
                     </a>        
                  </li>
                  <li>
                     <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
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