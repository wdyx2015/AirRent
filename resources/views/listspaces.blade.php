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
      <div class="page-container-full">
         <div class="panel lys-panel-header">
            <div class="panel-light panel-body">
               <div></div>
               <div class="row row-space-top-6 row-space-6">
                  <div class="col-7 col-center text-center">
                     <h1 class="h2">List Your Space</h1>
                     <p class="text-lead">
                        AirRent lets you make money renting out your place.
                     </p>
                  </div>
               </div>
               <div></div>
            </div>
            <div class="panel-body panel-medium">
               <div class="page-container">
                  <form accept-charset="UTF-8" action="#" class="host-onboarding-form" method="post">
                     <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="V4$.airbnb.co.uk$7p6WyuVdS_I$D58_0hlnmRIIbviOSN17PbOXwqKl6PqBoLL7vbUo0A0="></div>
                     <div class="row row-space-5 row-space-top-5 row-table">
                        <div class="col-3 text-right col-middle">
                           <div class="h4 text-light">
                              Home Type
                           </div>
                        </div>
                        <div class="col-9 fieldset fieldset_property_type_id col-middle">
                           <div class="btn-group">
                              <button class="btn btn-large type" data-name="Apartment" data-type-id="1" data-icon-class="icon-apartment" data-behavior="tooltip" data-position="bottom" aria-label="Your space is a flat, flat, or unit in a multi-unit building.">
                              <i class="icon icon-apartment h4 icon-kazan"></i>
                              Apartment
                              </button>
                              <button class="btn btn-large type" data-name="House" data-type-id="2" data-icon-class="icon-home" data-behavior="tooltip" data-position="bottom" aria-label="Your space is a single-family house or townhouse.">
                              <i class="icon icon-home h4 icon-kazan"></i>
                              House
                              </button>
                              <button class="btn btn-large type" data-name="Bed &amp; Breakfast" data-type-id="3" data-icon-class="icon-cup" data-behavior="tooltip" data-position="bottom" aria-label="You rent out several rooms within an establishment. Your service includes breakfast.">
                              <i class="icon icon-cup h4 icon-kazan"></i>
                              Bed &amp; Breakfast
                              </button>
                              <div class="select select-large">
                                 <select style="padding-top: 9px;padding-bottom: 9px;">
                                    <option disabled="" selected="">Other</option>
                                    <option data-icon-class="icon-star-alt" data-name="Loft" data-type-id="35">
                                       Loft
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Cabin" data-type-id="4">
                                       Cabin
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Villa" data-type-id="11">
                                       Villa
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Castle" data-type-id="5">
                                       Castle
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Dorm" data-type-id="9">
                                       Dorm
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Treehouse" data-type-id="6">
                                       Treehouse
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Boat" data-type-id="8">
                                       Boat
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Plane" data-type-id="28">
                                       Plane
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Camper/RV" data-type-id="32">
                                       Camper/RV
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Igloo" data-type-id="12">
                                       Igloo
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Lighthouse" data-type-id="10">
                                       Lighthouse
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Yurt" data-type-id="15">
                                       Yurt
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Tipi" data-type-id="16">
                                       Tipi
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Cave" data-type-id="18">
                                       Cave
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Island" data-type-id="19">
                                       Island
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Chalet" data-type-id="22">
                                       Chalet
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Earth House" data-type-id="23">
                                       Earth House
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Hut" data-type-id="24">
                                       Hut
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Train" data-type-id="25">
                                       Train
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Tent" data-type-id="34">
                                       Tent
                                    </option>
                                    <option data-icon-class="icon-star-alt" data-name="Other" data-type-id="33">
                                       Other
                                    </option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row row-space-5  row-space-top-5 row-table">
                        <div class="col-3 text-right col-middle">
                           <div class="h4 text-light">
                              Room Type
                           </div>
                        </div>
                        <div class="col-9 fieldset fieldset_room_type col-middle">
                           <div class="btn-group">
                              <button class="btn btn-large type" data-name="Entire home/flat" data-slug="entire_home_apt" data-type="Entire home/apt" data-type-id="0" data-icon-class="icon-entire-place" data-behavior="tooltip" data-position="bottom" aria-label="You're renting out an entire home.">
                              <i class="icon icon-entire-place h4 icon-kazan"></i>
                              Entire home/flat
                              </button>
                              <button class="btn btn-large type" data-name="Private room" data-slug="private_room" data-type="Private room" data-type-id="1" data-icon-class="icon-private-room" data-behavior="tooltip" data-position="bottom" aria-label="You're renting out a private room within a home.">
                              <i class="icon icon-private-room h4 icon-kazan"></i>
                              Private room
                              </button>
                              <button class="btn btn-large type" data-name="Shared room" data-slug="shared_room" data-type="Shared room" data-type-id="2" data-icon-class="icon-shared-room" data-behavior="tooltip" data-position="bottom" aria-label="You're renting out a common area, such as an airbed in a living room.">
                              <i class="icon icon-shared-room h4 icon-kazan"></i>
                              Shared room
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="row row-space-5 row-space-top-5 row-table">
                        <div class="col-3 text-right col-middle">
                           <div class="h4 text-light">
                              Accommodates
                           </div>
                        </div>
                        <div class="col-9 fieldset fieldset_person_capacity col-middle">
                           <div class="unselected row row-condensed">
                              <div class="col-3">
                                 <div class="panel">
                                    <div class="panel-body panel-light" style="height: 44px;padding: 0px;">
                                       <div class="row row-table">
                                          <div class="col-2 col-middle">
                                             <i class="icon icon-group h4 icon-kazan"></i>
                                          </div>
                                          <div class="col-6 col-middle">
                                             <div class="select select-large">
                                                <select id="accomodates-select" style="border: none;width: 114px;">
                                                   <option class="accommodates" data-accommodates="1">
                                                      1
                                                   </option>
                                                   <option class="accommodates" data-accommodates="2">
                                                      2
                                                   </option>
                                                   <option class="accommodates" data-accommodates="3">
                                                      3
                                                   </option>
                                                   <option class="accommodates" data-accommodates="4">
                                                      4
                                                   </option>
                                                   <option class="accommodates" data-accommodates="5">
                                                      5
                                                   </option>
                                                   <option class="accommodates" data-accommodates="6">
                                                      6
                                                   </option>
                                                   <option class="accommodates" data-accommodates="7">
                                                      7
                                                   </option>
                                                   <option class="accommodates" data-accommodates="8">
                                                      8
                                                   </option>
                                                   <option class="accommodates" data-accommodates="9">
                                                      9
                                                   </option>
                                                   <option class="accommodates" data-accommodates="10">
                                                      10
                                                   </option>
                                                   <option class="accommodates" data-accommodates="11">
                                                      11
                                                   </option>
                                                   <option class="accommodates" data-accommodates="12">
                                                      12
                                                   </option>
                                                   <option class="accommodates" data-accommodates="13">
                                                      13
                                                   </option>
                                                   <option class="accommodates" data-accommodates="14">
                                                      14
                                                   </option>
                                                   <option class="accommodates" data-accommodates="15">
                                                      15
                                                   </option>
                                                   <option class="accommodates" data-accommodates="16+">
                                                      16+
                                                   </option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row row-space-5 row-space-top-5 row-table">
                        <div class="col-3 text-right col-middle">
                           <div class="h4 text-light">City</div>
                        </div>
                        <div class="col-9 fieldset fieldset_city col-middle">
                           <div class="row">
                              <div class="col-6">
                                 <div class="panel location" style="
                                    height: 60px;
                                    ">
                                    <div class="panel-body panel-light panel-border location-panel-body clearfix" style="
                                       width: 350px;
                                       padding: 10px;
                                       height: 55px;
                                       ">
                                       <i class="icon icon icon-map-marker icon-kazan h4 pull-left" style="
                                          float: left;
                                          margin: 5px;
                                          "></i>
                                       <input class="pull-left geocomplete" id="location_input" name="location_input" placeholder="San Francisco, Rome, Shibuya..." type="text" autocomplete="off" style="
                                          float: left;
                                          width: 265px;
                                          ">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-9 col-offset-3" id="js-submit-button"><button type="submit" class="btn btn-primary btn-large submit
                           ">
                           Continue
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="page-container page-container-responsive col-center">
                  <div class="row row-space-2 row-space-top-8">
                     <div class="col-4 text-center">
                        <i class="icon icon-handshake icon-kazan icon-size-3"></i>
                        <h4>Trust &amp; Safety</h4>
                        <div class="text-lead text-color-light">
                           Trust &amp; safety tools help you accept a booking only if you're 100% comfortable.
                        </div>
                     </div>
                     <div class="col-4 text-center">
                        <i class="icon icon-host-guarantee icon-kazan icon-size-3"></i>
                        <h4>£600,000 Host Guarantee</h4>
                        <div class="text-lead text-color-light">
                           Your peace of mind is priceless. So we don't charge for it. Every <a href="#">eligible</a> booking on AirRent is covered by our Host Guarantee - at no additional cost to you.
                        </div>
                     </div>
                     <div class="col-4 text-center">
                        <i class="icon icon-lock icon-kazan icon-size-3"></i>
                        <h4>Secure Payments</h4>
                        <div class="text-lead text-color-light">
                           Our fast, flexible payment system puts money in your bank account 24 hours after guests check in.
                        </div>
                     </div>
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