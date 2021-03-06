<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <link href="{{URL::asset('css/bootstrap.css')}}" media="all" rel="stylesheet" type="text/css">
      <link href="{{URL::asset('css/booking.css')}}" media="all" rel="stylesheet" type="text/css">
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
      <div id="main-view" class="main-view page-container-responsive row-space-top-6 row-space-6">
         <form action="#" method="post" id="checkout-form" data-acculynk-tokenizer-url="#" data-acculynk-merchantscript-domain="mws.acculynk.net" data-acculynk-pinpad-domain="#" data-acculynk-pinpad-alt-domain="#">
            <input name="code" type="hidden" value="B28X3P">
            <input name="hosting_id" type="hidden" value="4561322">
            <input name="date" type="hidden" value="2015-02-18">
            <input name="nights" type="hidden" value="1">
            <input name="number_of_guests" type="hidden" value="1">
            <input name="special_offer_id" type="hidden" value="">
            <input name="sig" type="hidden" value="">
            <input name="ref" type="hidden" value="">
            <div class="row">
               <div class="col-md-5 col-md-push-7 col-lg-4 col-lg-push-8 row-space-2">
                  <div class="panel payments-listing">
                     <div class="payments-listing-image" style="background-image: url({{URL::asset('images/temp.jpg')}})">
                        <img src="{{URL::asset('images/temp.jpg')}}" class="img-responsive" alt="8 mins to Heathrow, 25 to London">
                     </div>
                     <div class="panel-body">
                        <section id="your-trip" class="your-trip">
                           <div class="hosting-info">
                              <div class="payments-listing-name h4 row-space-1">8 mins to Heathrow, 25 to London</div>
                              <div class="hide-sm">
                                 <p>Autumn Way, West Drayton, Greater London UB7 9GP, United Kingdom</p>
                                 <hr>
                                 <div class="row-space-1">
                                    <strong>Private room</strong> for <strong>1 guest</strong>
                                 </div>
                                 <div>
                                    <strong>Wed, Feb 18, 2015</strong> to <strong>Thu, Feb 19, 2015</strong>
                                 </div>
                              </div>
                              <hr>
                              <table class="reso-info-table">
                                 <tbody>
                                    <tr>
                                       <td>Cancellation Policy</td>
                                       <td>
                                          <a href="#" class="cancel-policy-link">Moderate</a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>House Rules</td>
                                       <td>
                                          <a href="#" class="house-rules-link">Read policy</a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Nights
                                       </td>
                                       <td>
                                          1
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <hr>
                              <section id="billing-summary" class="billing-summary">
                                 <div class="tooltip tooltip-top-middle taxes-breakdown" role="tooltip" data-sticky="true" data-trigger="#tax-tooltip" aria-hidden="true">
                                    <div class="panel-body">
                                       <table>
                                          <tbody>
                                             <tr>
                                                <td colspan="2"><a href="#">Learn more</a></td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 <table id="billing-table" class="reso-info-table billing-table
                                    ">
                                    <tbody>
                                       <tr class="base-price">
                                          <td class="name">£37 x 1 night
                                          </td>
                                          <td class="val">
                                             £37
                                          </td>
                                       </tr>
                                       <tr class="service-fee">
                                          <td class="name">
                                             Service fee
                                             <i class="icon icon-question" data-behavior="tooltip" aria-label="This is the fee charged by Airbnb"></i>
                                          </td>
                                          <td class="val">£5</td>
                                       </tr>
                                       <tr class="coupon">
                                          <td class="name">
                                             <span class="with-applied-coupon">
                                             <a href="#" class="open-coupon-section-link">Coupon</a>
                                             </span>
                                             <span class="without-applied-coupon">
                                             <a href="#" class="open-coupon-section-link">Coupon code</a>
                                             </span>
                                          </td>
                                          <td class="val">
                                             <div class="uneditable-fields">
                                                £0
                                             </div>
                                          </td>
                                       </tr>
                                       <tr class="editable-fields">
                                          <td colspan="2">
                                             <div class="row-condensed clearfix row-space-1">
                                                <div class="col-sm-7">
                                                   <input autocomplete="off" class="coupon-code-field" name="coupon_code" type="text" value="">
                                                </div>
                                                <div class="col-sm-5">
                                                   <a href="#" class="btn btn-block apply-coupon">Apply</a>
                                                </div>
                                             </div>
                                             <a href="#" class="cancel-coupon">Cancel</a>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                                 <hr>
                                 <table id="payment-total-table" class="reso-info-table billing-table">
                                    <tbody>
                                       <tr class="total">
                                          <td class="name"><span class="h3">Total</span></td>
                                          <td class="text-special icon-blue icon-dark-gray"><span class="h3">£42</span></td>
                                       </tr>
                                    </tbody>
                                 </table>
                                 <div class="panel-total-charge">
                                    <hr>
                                    <small>
                                       <div>
                                          <span id="currency-total-charge" class="">
                                          You are paying in
                                          <strong><span id="payment-currency">€EUR</span></strong>.
                                          Your total charge is
                                          <strong><span id="payment-total-charge">€55</span></strong>.
                                          </span>
                                          <span id="fx-messaging">The <a href="#">exchange rate</a> for booking this listing is €1 EUR to £0.76 GBP (your host's listing currency).</span>
                                       </div>
                                    </small>
                                 </div>
                              </section>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
               <div id="content-container" class="col-md-7 col-md-pull-5 col-lg-pull-4">
                  <div id="form-errors" class="alert alert-error hide row-space-2">
                     <h3 class="error-header">
                        Almost done!
                     </h3>
                     <ul></ul>
                  </div>
                  <div id="server-error" class="alert alert-error hide row-space-2">
                     Unfortunately, a server error prevented your request from being completed. Airbnb may be undergoing maintenance or your connection may have timed out. Please try again.
                  </div>
                  <div id="verification-error" class="alert alert-error hide row-space-2">
                     Your card could not be verified. Please try another card. Your card was not charged.
                  </div>
                  <section id="payment" class="payment row-space-3">
                     <h2 class="section-title">Payment</h2>
                     <div class="payment-section">
                        <div class="row">
                           <div class="col-lg-6">
                              <label for="country-select">
                              Country
                              </label>
                              <div class="select select-block">
                                 <select id="country-select" name="payment_country">
                                    <option value="AF">
                                       Afghanistan
                                    </option>
                                    <option value="AX">
                                       Åland Islands
                                    </option>
                                    <option value="AL">
                                       Albania
                                    </option>
                                    <option value="DZ">
                                       Algeria
                                    </option>
                                    <option value="AS">
                                       American Samoa
                                    </option>
                                    <option value="AD">
                                       Andorra
                                    </option>
                                    <option value="AO">
                                       Angola
                                    </option>
                                    <option value="AI">
                                       Anguilla
                                    </option>
                                    <option value="AQ">
                                       Antarctica
                                    </option>
                                    <option value="AG">
                                       Antigua and Barbuda
                                    </option>
                                    <option value="AR">
                                       Argentina
                                    </option>
                                    <option value="AM">
                                       Armenia
                                    </option>
                                    <option value="AW">
                                       Aruba
                                    </option>
                                    <option value="AU">
                                       Australia
                                    </option>
                                    <option value="AT">
                                       Austria
                                    </option>
                                    <option value="AZ">
                                       Azerbaijan
                                    </option>
                                    <option value="BS">
                                       Bahamas
                                    </option>
                                    <option value="BH">
                                       Bahrain
                                    </option>
                                    <option value="BD">
                                       Bangladesh
                                    </option>
                                    <option value="BB">
                                       Barbados
                                    </option>
                                    <option value="BY">
                                       Belarus
                                    </option>
                                    <option value="BE">
                                       Belgium
                                    </option>
                                    <option value="BZ">
                                       Belize
                                    </option>
                                    <option value="BJ">
                                       Benin
                                    </option>
                                    <option value="BM">
                                       Bermuda
                                    </option>
                                    <option value="BT">
                                       Bhutan
                                    </option>
                                    <option value="BO">
                                       Bolivia
                                    </option>
                                    <option value="BA">
                                       Bosnia and Herzegovina
                                    </option>
                                    <option value="BW">
                                       Botswana
                                    </option>
                                    <option value="BV">
                                       Bouvet Island
                                    </option>
                                    <option value="BR">
                                       Brazil
                                    </option>
                                    <option value="IO">
                                       British Indian Ocean Territory
                                    </option>
                                    <option value="VG">
                                       British Virgin Islands
                                    </option>
                                    <option value="BN">
                                       Brunei
                                    </option>
                                    <option value="BG">
                                       Bulgaria
                                    </option>
                                    <option value="BF">
                                       Burkina Faso
                                    </option>
                                    <option value="BI">
                                       Burundi
                                    </option>
                                    <option value="KH">
                                       Cambodia
                                    </option>
                                    <option value="CM">
                                       Cameroon
                                    </option>
                                    <option value="CA">
                                       Canada
                                    </option>
                                    <option value="CV">
                                       Cape Verde
                                    </option>
                                    <option value="BQ">
                                       Caribbean Netherlands
                                    </option>
                                    <option value="KY">
                                       Cayman Islands
                                    </option>
                                    <option value="CF">
                                       Central African Republic
                                    </option>
                                    <option value="TD">
                                       Chad
                                    </option>
                                    <option value="CL">
                                       Chile
                                    </option>
                                    <option value="CN">
                                       China
                                    </option>
                                    <option value="CX">
                                       Christmas Island
                                    </option>
                                    <option value="CC">
                                       Cocos [Keeling] Islands
                                    </option>
                                    <option value="CO">
                                       Colombia
                                    </option>
                                    <option value="KM">
                                       Comoros
                                    </option>
                                    <option value="CG">
                                       Congo
                                    </option>
                                    <option value="CK">
                                       Cook Islands
                                    </option>
                                    <option value="CR">
                                       Costa Rica
                                    </option>
                                    <option value="HR">
                                       Croatia
                                    </option>
                                    <option value="CW">
                                       Curaçao
                                    </option>
                                    <option value="CY">
                                       Cyprus
                                    </option>
                                    <option value="CZ">
                                       Czech Republic
                                    </option>
                                    <option value="CD">
                                       Democratic Republic of the Congo
                                    </option>
                                    <option value="DK">
                                       Denmark
                                    </option>
                                    <option value="DJ">
                                       Djibouti
                                    </option>
                                    <option value="DM">
                                       Dominica
                                    </option>
                                    <option value="DO">
                                       Dominican Republic
                                    </option>
                                    <option value="TL">
                                       East Timor
                                    </option>
                                    <option value="EC">
                                       Ecuador
                                    </option>
                                    <option value="EG">
                                       Egypt
                                    </option>
                                    <option value="SV">
                                       El Salvador
                                    </option>
                                    <option value="GQ">
                                       Equatorial Guinea
                                    </option>
                                    <option value="ER">
                                       Eritrea
                                    </option>
                                    <option value="EE">
                                       Estonia
                                    </option>
                                    <option value="ET">
                                       Ethiopia
                                    </option>
                                    <option value="FK">
                                       Falkland Islands [Islas Malvinas]
                                    </option>
                                    <option value="FO">
                                       Faroe Islands
                                    </option>
                                    <option value="FJ">
                                       Fiji
                                    </option>
                                    <option value="FI">
                                       Finland
                                    </option>
                                    <option value="FR">
                                       France
                                    </option>
                                    <option value="GF">
                                       French Guiana
                                    </option>
                                    <option value="PF">
                                       French Polynesia
                                    </option>
                                    <option value="TF">
                                       French Southern Territories
                                    </option>
                                    <option value="GA">
                                       Gabon
                                    </option>
                                    <option value="GM">
                                       Gambia
                                    </option>
                                    <option value="GE">
                                       Georgia
                                    </option>
                                    <option value="DE">
                                       Germany
                                    </option>
                                    <option value="GH">
                                       Ghana
                                    </option>
                                    <option value="GI">
                                       Gibraltar
                                    </option>
                                    <option value="GR">
                                       Greece
                                    </option>
                                    <option value="GL">
                                       Greenland
                                    </option>
                                    <option value="GD">
                                       Grenada
                                    </option>
                                    <option value="GP">
                                       Guadeloupe
                                    </option>
                                    <option value="GU">
                                       Guam
                                    </option>
                                    <option value="GT">
                                       Guatemala
                                    </option>
                                    <option value="GG">
                                       Guernsey
                                    </option>
                                    <option value="GN">
                                       Guinea
                                    </option>
                                    <option value="GW">
                                       Guinea-Bissau
                                    </option>
                                    <option value="GY">
                                       Guyana
                                    </option>
                                    <option value="HT">
                                       Haiti
                                    </option>
                                    <option value="HM">
                                       Heard Island and McDonald Islands
                                    </option>
                                    <option value="HN">
                                       Honduras
                                    </option>
                                    <option value="HK">
                                       Hong Kong
                                    </option>
                                    <option value="HU">
                                       Hungary
                                    </option>
                                    <option value="IS">
                                       Iceland
                                    </option>
                                    <option value="IN">
                                       India
                                    </option>
                                    <option value="ID">
                                       Indonesia
                                    </option>
                                    <option value="IQ">
                                       Iraq
                                    </option>
                                    <option value="IE">
                                       Ireland
                                    </option>
                                    <option value="IM">
                                       Isle of Man
                                    </option>
                                    <option value="IL">
                                       Israel
                                    </option>
                                    <option value="IT">
                                       Italy
                                    </option>
                                    <option value="CI">
                                       Ivory Coast
                                    </option>
                                    <option value="JM">
                                       Jamaica
                                    </option>
                                    <option value="JP">
                                       Japan
                                    </option>
                                    <option value="JE">
                                       Jersey
                                    </option>
                                    <option value="JO">
                                       Jordan
                                    </option>
                                    <option value="KZ">
                                       Kazakhstan
                                    </option>
                                    <option value="KE">
                                       Kenya
                                    </option>
                                    <option value="KI">
                                       Kiribati
                                    </option>
                                    <option value="XK">
                                       Kosovo
                                    </option>
                                    <option value="KW">
                                       Kuwait
                                    </option>
                                    <option value="KG">
                                       Kyrgyzstan
                                    </option>
                                    <option value="LA">
                                       Laos
                                    </option>
                                    <option value="LV">
                                       Latvia
                                    </option>
                                    <option value="LB">
                                       Lebanon
                                    </option>
                                    <option value="LS">
                                       Lesotho
                                    </option>
                                    <option value="LR">
                                       Liberia
                                    </option>
                                    <option value="LY">
                                       Libya
                                    </option>
                                    <option value="LI">
                                       Liechtenstein
                                    </option>
                                    <option value="LT">
                                       Lithuania
                                    </option>
                                    <option value="LU">
                                       Luxembourg
                                    </option>
                                    <option value="MO">
                                       Macau
                                    </option>
                                    <option value="MK">
                                       Macedonia
                                    </option>
                                    <option value="MG">
                                       Madagascar
                                    </option>
                                    <option value="MW">
                                       Malawi
                                    </option>
                                    <option value="MY">
                                       Malaysia
                                    </option>
                                    <option value="MV">
                                       Maldives
                                    </option>
                                    <option value="ML">
                                       Mali
                                    </option>
                                    <option value="MT">
                                       Malta
                                    </option>
                                    <option value="MH">
                                       Marshall Islands
                                    </option>
                                    <option value="MQ">
                                       Martinique
                                    </option>
                                    <option value="MR">
                                       Mauritania
                                    </option>
                                    <option value="MU">
                                       Mauritius
                                    </option>
                                    <option value="YT">
                                       Mayotte
                                    </option>
                                    <option value="MX">
                                       Mexico
                                    </option>
                                    <option value="FM">
                                       Micronesia
                                    </option>
                                    <option value="MD">
                                       Moldova
                                    </option>
                                    <option value="MC">
                                       Monaco
                                    </option>
                                    <option value="MN">
                                       Mongolia
                                    </option>
                                    <option value="ME">
                                       Montenegro
                                    </option>
                                    <option value="MS">
                                       Montserrat
                                    </option>
                                    <option value="MA">
                                       Morocco
                                    </option>
                                    <option value="MZ">
                                       Mozambique
                                    </option>
                                    <option value="MM">
                                       Myanmar [Burma]
                                    </option>
                                    <option value="NA">
                                       Namibia
                                    </option>
                                    <option value="NR">
                                       Nauru
                                    </option>
                                    <option value="NP">
                                       Nepal
                                    </option>
                                    <option value="NL">
                                       Netherlands
                                    </option>
                                    <option value="NC">
                                       New Caledonia
                                    </option>
                                    <option value="NZ">
                                       New Zealand
                                    </option>
                                    <option value="NI">
                                       Nicaragua
                                    </option>
                                    <option value="NE">
                                       Niger
                                    </option>
                                    <option value="NG">
                                       Nigeria
                                    </option>
                                    <option value="NU">
                                       Niue
                                    </option>
                                    <option value="NF">
                                       Norfolk Island
                                    </option>
                                    <option value="MP">
                                       Northern Mariana Islands
                                    </option>
                                    <option value="NO">
                                       Norway
                                    </option>
                                    <option value="OM">
                                       Oman
                                    </option>
                                    <option value="PK">
                                       Pakistan
                                    </option>
                                    <option value="PW">
                                       Palau
                                    </option>
                                    <option value="PS">
                                       Palestinian Territories
                                    </option>
                                    <option value="PA">
                                       Panama
                                    </option>
                                    <option value="PG">
                                       Papua New Guinea
                                    </option>
                                    <option value="PY">
                                       Paraguay
                                    </option>
                                    <option value="PE">
                                       Peru
                                    </option>
                                    <option value="PH">
                                       Philippines
                                    </option>
                                    <option value="PN">
                                       Pitcairn Islands
                                    </option>
                                    <option value="PL">
                                       Poland
                                    </option>
                                    <option value="PT">
                                       Portugal
                                    </option>
                                    <option value="PR">
                                       Puerto Rico
                                    </option>
                                    <option value="QA">
                                       Qatar
                                    </option>
                                    <option value="RE">
                                       Réunion
                                    </option>
                                    <option value="RO">
                                       Romania
                                    </option>
                                    <option value="RU">
                                       Russia
                                    </option>
                                    <option value="RW">
                                       Rwanda
                                    </option>
                                    <option value="BL">
                                       Saint Barthélemy
                                    </option>
                                    <option value="SH">
                                       Saint Helena
                                    </option>
                                    <option value="KN">
                                       Saint Kitts and Nevis
                                    </option>
                                    <option value="LC">
                                       Saint Lucia
                                    </option>
                                    <option value="MF">
                                       Saint Martin
                                    </option>
                                    <option value="PM">
                                       Saint Pierre and Miquelon
                                    </option>
                                    <option value="VC">
                                       Saint Vincent and the Grenadines
                                    </option>
                                    <option value="WS">
                                       Samoa
                                    </option>
                                    <option value="SM">
                                       San Marino
                                    </option>
                                    <option value="ST">
                                       São Tomé and Príncipe
                                    </option>
                                    <option value="SA">
                                       Saudi Arabia
                                    </option>
                                    <option value="SN">
                                       Senegal
                                    </option>
                                    <option value="RS">
                                       Serbia
                                    </option>
                                    <option value="SC">
                                       Seychelles
                                    </option>
                                    <option value="SL">
                                       Sierra Leone
                                    </option>
                                    <option value="SG">
                                       Singapore
                                    </option>
                                    <option value="SX">
                                       Sint Maarten
                                    </option>
                                    <option value="SK">
                                       Slovakia
                                    </option>
                                    <option value="SI">
                                       Slovenia
                                    </option>
                                    <option value="SB">
                                       Solomon Islands
                                    </option>
                                    <option value="SO">
                                       Somalia
                                    </option>
                                    <option value="ZA">
                                       South Africa
                                    </option>
                                    <option value="GS">
                                       South Georgia and the South Sandwich Islands
                                    </option>
                                    <option value="KR">
                                       South Korea
                                    </option>
                                    <option value="SS">
                                       South Sudan
                                    </option>
                                    <option value="ES">
                                       Spain
                                    </option>
                                    <option value="LK">
                                       Sri Lanka
                                    </option>
                                    <option value="SR">
                                       Suriname
                                    </option>
                                    <option value="SJ">
                                       Svalbard and Jan Mayen
                                    </option>
                                    <option value="SZ">
                                       Swaziland
                                    </option>
                                    <option value="SE">
                                       Sweden
                                    </option>
                                    <option value="CH">
                                       Switzerland
                                    </option>
                                    <option value="TW">
                                       Taiwan
                                    </option>
                                    <option value="TJ">
                                       Tajikistan
                                    </option>
                                    <option value="TZ">
                                       Tanzania
                                    </option>
                                    <option value="TH">
                                       Thailand
                                    </option>
                                    <option value="TG">
                                       Togo
                                    </option>
                                    <option value="TK">
                                       Tokelau
                                    </option>
                                    <option value="TO">
                                       Tonga
                                    </option>
                                    <option value="TT">
                                       Trinidad and Tobago
                                    </option>
                                    <option value="TN">
                                       Tunisia
                                    </option>
                                    <option value="TR">
                                       Turkey
                                    </option>
                                    <option value="TM">
                                       Turkmenistan
                                    </option>
                                    <option value="TC">
                                       Turks and Caicos Islands
                                    </option>
                                    <option value="TV">
                                       Tuvalu
                                    </option>
                                    <option value="UM">
                                       U.S. Outlying Islands
                                    </option>
                                    <option value="VI">
                                       U.S. Virgin Islands
                                    </option>
                                    <option value="UG">
                                       Uganda
                                    </option>
                                    <option value="UA">
                                       Ukraine
                                    </option>
                                    <option value="AE">
                                       United Arab Emirates
                                    </option>
                                    <option value="GB">
                                       United Kingdom
                                    </option>
                                    <option value="US">
                                       United States
                                    </option>
                                    <option value="UY">
                                       Uruguay
                                    </option>
                                    <option value="UZ">
                                       Uzbekistan
                                    </option>
                                    <option value="VU">
                                       Vanuatu
                                    </option>
                                    <option value="VA">
                                       Vatican City
                                    </option>
                                    <option value="VE">
                                       Venezuela
                                    </option>
                                    <option value="VN" selected="selected">
                                       Vietnam
                                    </option>
                                    <option value="WF">
                                       Wallis and Futuna
                                    </option>
                                    <option value="EH">
                                       Western Sahara
                                    </option>
                                    <option value="YE">
                                       Yemen
                                    </option>
                                    <option value="ZM">
                                       Zambia
                                    </option>
                                    <option value="ZW">
                                       Zimbabwe
                                    </option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="payment-controls">
                           <div class="row">
                              <div class="col-sm-12">
                                 <label for="payment_type">
                                 Payment type
                                 </label>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-6 row-space-2">
                                 <div class="select select-block">
                                    <select name="payment_type" class="grouped-field" id="payment-method-select">
                                       <option value="cc" data-payment-type="payment-method" data-cc-type="visa" data-cc-name="" data-cc-expire="">
                                          Credit Card
                                       </option>
                                       <option value="paypal" data-payment-type="payment-method" data-cc-type="visa" data-cc-name="" data-cc-expire="">
                                          PayPal
                                       </option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="payment-method grouped-field cc active" style="margin-bottom: 5px;">
                                    <div class="payment-logo unionpay hide"></div>
                                    <div class="payment-logo visa">Credit Card</div>
                                    <div class="payment-logo master"></div>
                                    <div class="payment-logo american_express"></div>
                                    <div class="payment-logo discover"></div>
                                    <div class="payment-logo jcb hide"></div>
                                    <i class="icon icon-lock icon-light-gray h3"></i>
                                    <div class="cc-data hide">
                                       <div class="cc-info">
                                          Name: <span id="selected-cc-name"></span>
                                       </div>
                                       <div class="cc-info">
                                          Expires: <span id="selected-cc-expires"></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="payment-method grouped-field paypal active">
                                    <div class="payment-logo paypal">PayPal</div>
                                 </div>
                                 <div class="payment-method grouped-field sofort">
                                    <div class="payment-logo sofort">Sofortüberweisung</div>
                                 </div>
                                 <div class="payment-method grouped-field alipay">
                                    <div class="payment-logo alipay">Alipay</div>
                                 </div>
                              </div>
                           </div>
                           <div id="brazil-cc-message" class="hide">IOF 6.38% applicable for all Brazilian International Credit Cards</div>
                        </div>
                        <div id="payment-methods-content">
                           <div class="payment-method cc active" id="payment-method-cc">
                              <div class="payment-method-container">
                                 <input type="hidden" name="acculynk[sessionId]" id="acculynk-session-id">
                                 <input type="hidden" name="acculynk[pnref]" id="acculynk-pnref">
                                 <input type="hidden" name="acculynk[accountToken]" id="acculynk-account-token">
                                 <input type="hidden" name="acculynk[lastFour]" id="acculynk-last-four">
                                 <input type="hidden" name="acculynk[firstSix]" id="acculynk-first-six">
                                 <input type="hidden" name="payment_method_nonce" id="payment_method_nonce">
                                 <div class="new-card">
                                    <div class="cc-details row">
                                       <div class="control-group cc-type col-md-6">
                                          <label class="control-label" for="credit-card-type">
                                          Card type
                                          </label>
                                          <div class="select select-block">
                                             <select class="cc-med" name="credit_card[cc_type]">
                                                <option value="visa" selected="selected">
                                                   Visa
                                                </option>
                                                <option value="master">
                                                   MasterCard
                                                </option>
                                                <option value="american_express">
                                                   American Express
                                                </option>
                                                <option value="discover">
                                                   Discover
                                                </option>
                                                <option value="jcb">
                                                   JCB
                                                </option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="control-group cc-number col-md-6">
                                          <label for="credit-card-number">
                                          Card number
                                          </label>
                                          <input type="text" autocomplete="off" class="cc-med" name="credit_card[cc_number]" id="credit-card-number">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="control-group cc-expiration col-md-6">
                                          <label for="credit-card-expire">
                                          Expires on
                                          </label>
                                          <div class="row row-condensed">
                                             <div class="col-sm-6">
                                                <div class="select select-block">
                                                   <select id="credit-card-expire-month" class="cc-short" name="credit_card[cc_expire_month]">
                                                      <option value="">mm</option>
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
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-sm-6">
                                                <div class="select select-block">
                                                   <select id="credit-card-expire-year" class="cc-short" name="credit_card[cc_expire_year]">
                                                      <option value="">yyyy</option>
                                                      <option value="2015">2015</option>
                                                      <option value="2016">2016</option>
                                                      <option value="2017">2017</option>
                                                      <option value="2018">2018</option>
                                                      <option value="2019">2019</option>
                                                      <option value="2020">2020</option>
                                                      <option value="2021">2021</option>
                                                      <option value="2022">2022</option>
                                                      <option value="2023">2023</option>
                                                      <option value="2024">2024</option>
                                                      <option value="2025">2025</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="control-group cc-security-code col-md-4">
                                          <label class="control-label" for="credit-card-security-code">
                                          Security code
                                          </label>
                                          <div class="row">
                                             <div class="col-sm-6 col-md-8">
                                                <input type="text" autocomplete="off" class="cc-short" name="credit_card[cc_security_code]" id="credit-card-security-code">
                                             </div>
                                             <a href="#" id="tooltip-cvv" class="tooltip-link link-reset" tabindex="-1">
                                             <i class="icon icon-question icon-light-gray h4"></i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                       <div class="col-sm-12">
                                          <h2>Billing Information</h2>
                                          <p></p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="control-group cc-first-name col-md-6">
                                          <label class="control-label" for="credit-card-first-name">
                                          First name
                                          </label>
                                          <input type="text" name="credit_card[first_name]" id="credit-card-first-name">
                                       </div>
                                       <div class="control-group cc-last-name col-md-6">
                                          <label class="control-label" for="credit-card-last-name">
                                          Last name
                                          </label>
                                          <input type="text" name="credit_card[last_name]" id="credit-card-last-name">
                                       </div>
                                    </div>
                                    <div class="row hide">
                                       <div class="control-group cc-address1 col-md-6">
                                          <label class="control-label" for="credit-card-address1">
                                          Street address
                                          </label>
                                          <input type="text" name="credit_card[address1]" id="credit-card-address1">
                                       </div>
                                       <div class="col-md-2">
                                          <label for="credit-card-address2">
                                          Apt #
                                          </label>
                                          <input type="text" class="cc-short" name="credit_card[address2]" id="credit-card-address2">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="control-group cc-city
                                          col-md-6 col-lg-5 
                                          hide ">
                                          <label for="credit-card-city">
                                          City
                                          </label>
                                          <input type="text" name="credit_card[city]" id="credit-card-city">
                                       </div>
                                       <div class="cc-state col-md-2
                                          hide">
                                          <label for="credit-card-state">
                                          State
                                          </label>
                                          <input type="text" class="cc-short" name="credit_card[state]" id="credit-card-state">
                                       </div>
                                       <div class="control-group cc-zip
                                          col-md-6 col-lg-3">
                                          <label for="credit-card-zip">
                                          Postal code
                                          </label>
                                          <input type="text" class="cc-short" name="credit_card[zip]" id="credit-card-zip">
                                       </div>
                                       <div class="col-md-6 col-lg-3">
                                          <label>&nbsp;</label>
                                          <div class="help-inline credit-card-country-name">
                                             <strong id="billing-country">Vietnam</strong>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="payment-method paypal" id="payment-method-paypal">
                              <div class="paypal-instructions row-space-top-2">
                                 <p>
                                    You will be redirected to PayPal.
                                    <strong>You must complete the process or the transaction will not occur.</strong>
                                 </p>
                              </div>
                           </div>
                           <div class="payment-method alipay" id="payment-method-alipay">
                              <div class="alipay-instructions row-space-top-2">
                                 <p>
                                    You will be redirected to Alipay.
                                    <strong>You must complete the process or the transaction will not occur.</strong>
                                 </p>
                              </div>
                           </div>
                           <div class="payment-method sofort" id="payment-method-sofort">
                              <div class="sofort-instructions row-space-top-2">
                                 <p>
                                    If the host approves your request, you'll receive a notificiation to complete payment within 24 hours so that the reservation can be confirmed.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <input name="payment_method" type="hidden" value="cc">
                     <input name="credit_card[country]" type="hidden" value="VN">
                  </section>
                  <hr>
                  <section id="message-to-host" class="message-to-host row-space-3">
                     <h2 class="section-title">
                        Introduce Yourself to Parul
                     </h2>
                     <p>
                        Giving your host more information will make them more likely to confirm your booking request:
                     </p>
                     <ul>
                        <li>
                           Tell Parul a little about yourself
                        </li>
                        <li>
                           What brings you to West Drayton? Who's joining you?
                        </li>
                        <li>
                           What do you love about this listing? Mention it!
                        </li>
                     </ul>
                     <div class="row">
                        <div class="col-sm-3">
                           <div class="media-photo media-round">
                              <img src="{{URL::asset('images/temp.jpg')}}" class="img-responsive" width="75" height="75" style="width: 75px; height: 75px;">
                           </div>
                        </div>
                        <div class="col-sm-9">
                           <textarea name="message_to_host" rows="3" placeholder="Message your host..."></textarea>
                        </div>
                     </div>
                  </section>
                  <hr>
                  <section id="policies" class="policies row-space-3">
                     <div class="terms media">
                        <div class="media-body">
                           <label for="agrees-to-terms">
                           By clicking on "Continue", you agree to pay the total amount shown, which includes Service Fees, on the right and to the <a href="#" class="terms_link">Terms of Service</a>, <a href="#" class="house-rules-link">House Rules</a>, <a href="#" class="cancel-policy-link">Cancellation Policy</a> and <a href="#" class="refund_policy_link">Guest Refund Policy</a>.
                           </label>
                        </div>
                     </div>
                  </section>
                  <p>
                     <button id="payment-form-submit" type="submit" class="btn btn-large btn-primary">
                     Continue
                     </button>
                     <span id="verify-explain" class="text-muted">
                     Next you'll verify your ID for your host
                     </span>
                  </p>
                  <p class="book-now-explanation default">
                     You will only be charged if the host accepts your request. They'll have 24 hours to reply. If the host declines or does not respond, no charge is made.
                  </p>
                  <p class="book-now-explanation immediate_charge hide">
                     Clicking <strong>Continue</strong> will charge your payment method, but you'll get an automatic refund if the host declines or doesn't respond within 24 hours.
                  </p>
                  <p class="book-now-explanation deferred_payment hide">
                     The host will have 24 hours to reply. If they accept your request, you'll be asked to complete your payment and confirm the reservation. If the host declines or does not respond, you won't be charged.
                  </p>
               </div>
            </div>
         </form>
         <div id="house-rules-modal" class="modal" role="dialog" aria-hidden="true">
            <div class="modal-table">
               <div class="modal-cell">
                  <div class="modal-content">
                     <div class="panel-header">
                        <a href="#" class="panel-close" data-behavior="modal-close"></a>
                        House Rules
                     </div>
                     <div class="panel-body">
                        <p>Feel at home but please tidy up after yourselves!</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="security-deposit-modal" class="modal" role="dialog" data-trigger="#security-deposit-modal-trigger" aria-hidden="true">
            <div class="modal-table">
               <div class="modal-cell">
                  <div class="modal-content">
                     <div class="panel-header">
                        <a href="#" class="panel-close" data-behavior="modal-close"></a>
                        Security Deposit
                     </div>
                     <div class="panel-body">
                        <p>
                           The security deposit will be collected by Airbnb the day before arrival by authorising your credit card for the listed amount. The authorisation will be voided within 48 hours of checkout so long as the host does not report any problems.
                        </p>
                        <p>
                           If the host reports a problem, we will capture the entire authorised amount while we gather additional information from both parties. If a compromise is reached, we will refund the agreed upon amount. Although it is primarily up to the host to determine the extent of the damage, Airbnb tracks every claim that is made, and if a host develops a trend of claiming damages in order to keep the security deposit, the host may be removed from Airbnb.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>