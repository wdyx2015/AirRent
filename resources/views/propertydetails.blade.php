<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <link href="{{URL::asset('css/bootstrap.css')}}" media="all" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('css/property_detail1.css')}}" media="all" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('css/property_detail2.css')}}" media="all" rel="stylesheet" type="text/css">
    </head>
    <body class="no_wiggle_webkit" style="top: 0px;">
        <div class="smart-banner">
            <a href="#" class="icon icon-remove icon-size-1 pull-left link-reset banner-close"></a>
            <a href="#" class="pull-left app-icon install-link"></a>
        </div>
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
                    <li id="sign_up" class="pull-left medium-right-margin">
                        <a href="#" class="link-reset" rel="nofollow">
                            Sign Up
                        </a>
                    </li>
                    <li id="login" class="pull-left">
                        <a href="#" class="link-reset" rel="nofollow">Log In</a>
                    </li>
                </ul>
                <ul class="nav pull-right logged-in list-unstyled medium-right-margin">
                    <li class="user-item pull-left medium-right-margin">
                        <a href="#">
                            <div class="media-photo media-round user-profile-image">
                                <img width="28" height="28" src="{{URL::asset('images/user_pic-50x50.png')}}" alt="">
                            </div>
                            <span class="value_name">Nguyen Huu</span>
                            <i class="icon icon-caret-down icon-light-gray h5"></i>
                        </a>

                    </li>
                    <li id="inbox-item" class="inbox-item pull-left">
                        <a href="#" rel="nofollow" class="link-reset inbox-icon">
                            <i class="alert-count fade text-center">0</i>
                            <i class="icon icon-envelope icon-gray">
                                <span class="text-hide hide">Inbox</span>
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="subnav" data-sticky="true" data-transition-at="#summary" aria-hidden="true">
            <div class="page-container-responsive">
                <ul class="subnav-list">
                    <li>
                        <a href="#" aria-selected="true" class="subnav-item">
                            Photos
                        </a>
                    </li>
                    <li>
                        <a href="#" class="subnav-item" aria-selected="false">
                            About this listing
                        </a>
                    </li>
                    <li>
                        <a href="#" class="subnav-item" aria-selected="false">
                            Reviews
                        </a>
                    </li>
                    <li>
                        <a href="#" class="subnav-item" aria-selected="false">
                            The Host
                        </a>
                    </li>
                    <li>
                        <a href="#" class="subnav-item" aria-selected="false">
                            Location
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="og_pro_photo_prompt" class="container"></div>
        <div id="room" itemscope="" itemtype="">
            <div id="photos" class="with-photos with-modal">
                <span class="cover-img-container" data-hook="cover-img-container">
                    <div class="cover-img show-sm" data-hook="img-sm" style="background-image: url({{URL::asset('images/temp.jpg')}});">
                    </div>
                    <div class="cover-img hide-sm" data-hook="img-lg" style="background-image: url({{URL::asset('images/temp.jpg')}});">
                    </div>
                </span>
            </div>
            <div id="summary" class="panel room-section">
                <div class="page-container-responsive">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row-space-4 row-space-top-4">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <a href="#" class="media-photo media-round">
                                            <img alt="Monica" class="host-profile-image" height="90" nopin="nopin" src="{{URL::asset('images/temp.jpg')}}" title="Monica" width="90"></a>
                                    </div>
                                    <div class="col-md-9">

                                        <h1 itemprop="name" class="overflow h3 row-space-1 text-center-sm" id="listing_name">
                                            Canal side luxury log cabin ensuite
                                        </h1>

                                        <span class="hide" itemprop="breadcrumb">
                                            <span itemscope="" itemtype="">
                                                <a href="#" itemprop="url"><span itemprop="title">United Kingdom</span>,</a>
                                            </span>
                                            <span itemscope="" itemtype="">
                                                <a href="#" itemprop="url"><span itemprop="title">Middlesex / London</span>,</a>
                                            </span>
                                            <span itemscope="" itemtype="">
                                                <a href="#" itemprop="url"><span itemprop="title">Uxbridge</span></a>
                                            </span>
                                        </span>
                                        <div id="display-address" class="row-space-2 text-muted" itemprop="aggregateRating" itemscope="" itemtype="" data-location="Uxbridge, Middlesex / London, United Kingdom">
                                            <a href="#" class="link-reset">Uxbridge, Middlesex / London, United Kingdom</a>
                                            &nbsp;
                                            <a href="#" class="link-reset">      <div class="star-rating">
                                                    <div class="foreground">
                                                        <i class="icon icon-pink icon-beach icon-star"></i>
                                                        <i class="icon icon-pink icon-beach icon-star"></i>
                                                        <i class="icon icon-pink icon-beach icon-star"></i>
                                                        <i class="icon icon-pink icon-beach icon-star"></i>
                                                        <i class="icon icon-pink icon-beach icon-star-half"></i>
                                                        <meta itemprop="ratingValue" content="4.5">
                                                    </div>
                                                    <div class="background">
                                                        <i class="icon icon-star icon-light-gray"></i>
                                                        <i class="icon icon-star icon-light-gray"></i>
                                                        <i class="icon icon-star icon-light-gray"></i>
                                                        <i class="icon icon-star icon-light-gray"></i>
                                                        <i class="icon icon-star icon-light-gray"></i>
                                                    </div>
                                                </div>
                                                (<span itemprop="reviewCount">47</span>)</a>
                                        </div>
                                        <div class="row row-condensed text-muted text-center info-equiment">
                                            <div class="col-sm-3">
                                                <i class="icon icon-private-room icon-size-2"></i>
                                            </div>
                                            <div class="col-sm-3">
                                                <i class="icon icon-group icon-size-2"></i>
                                            </div>
                                            <div class="col-sm-3">
                                                <i class="icon icon-double-bed icon-size-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row info-equiment">
                                    <div class="col-md-3 text-muted text-center hide-sm">
                                        <a href="#" class="link-reset text-wrap">Monica</a>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row row-condensed text-muted text-center">
                                            <div class="col-sm-3">
                                                Private room
                                            </div>
                                            <div class="col-sm-3">
                                                2 Guests
                                            </div>
                                            <div class="col-sm-3">
                                                1 Bed
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <form accept-charset="UTF-8" action="" class="info new-o2-form-inline" id="book_it_form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value=""></div>
                                <div id="pricing" itemprop="offers" itemscope="" itemtype="" class="">
                                    <div id="price_amount" itemprop="price" class="pull-left h3 text-special">£50</div>
                                    <div id="payment-period-container" class="pull-right">
                                        <div id="per_night" class="">
                                            Per Night
                                        </div>
                                        <div id="per_month" class="hide">
                                            Per Month
                                            <i id="price-info-tooltip" class="icon icon-question hide" data-behavior="tooltip"></i>
                                        </div>
                                    </div>
                                    <meta content="GBP" itemprop="priceCurrency">
                                </div>
                                <div id="book_it" class="v2 display-subtotal" style="top: 0px;">
                                    <div class="book-it-wrapper row-space-1">
                                        <div class="form-fields panel-body">
                                            <div class="row row-condensed row-space-3">
                                                <div class="col-md-9">
                                                    <div class="row row-condensed">
                                                        <div class="col-sm-6 row-space-1-sm">
                                                            <label for="checkin">
                                                                Check In
                                                            </label>
                                                            <input class="checkin ui-datepicker-target" id="checkin" name="checkin" placeholder="dd-mm-yyyy" type="text">
                                                        </div>
                                                        <div class="col-sm-6 row-space-1-sm">
                                                            <label for="checkout">
                                                                Check Out
                                                            </label>
                                                            <input class="checkout ui-datepicker-target" id="checkout" name="checkout" placeholder="dd-mm-yyyy" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="number_of_guests">
                                                        Guests
                                                    </label>
                                                    <div class="select select-block">
                                                        <select id="number_of_guests" name="number_of_guests"><option value="1">1</option>
                                                            <option value="2">2</option></select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="book_it_status" class="">
                                            <div id="book_it_enabled" class="clearfix">
                                                <div id="subtotal_area" class="panel-padding-fit">
                                                    <table class="table table-bordered table-breakdown">

                                                        <tbody><tr>
                                                                <td>
                                                                    £50 x 1 night
                                                                </td>
                                                                <td class="table-cell-price">£50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Service fee
                                                                    <i id="service-fee-tooltip" class="icon icon-question"></i>
                                                                </td>
                                                                <td class="table-cell-price">£6</td>
                                                            </tr>
                                                            <tr class="table-row-total">
                                                                <td>Total</td>
                                                                <td class="table-cell-price">£56</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id="book_it_button_container" class="panel-body">
                                                    <button type="submit" class="btn btn-primary btn-large btn-block" id="book_it_button">
                                                        <span class="book-it">
                                                            Request to Book
                                                        </span>
                                                        <span class="instant-book">
                                                            <i class="icon icon-bolt icon-beach h4"></i>
                                                            Instant Book
                                                        </span>
                                                    </button>
                                                </div>
                                                <div id="pf-pic-prompt-container" class="panel-body hide">
                                                    <div class="signup-or-separator">
                                                        <h6 class="text">or</h6>
                                                        <hr>
                                                    </div>
                                                    <p class="pf-pic-prompt text-center">
                                                        <a href="#" class="profile-pic-upsell-launcher">Add a profile photo</a> to Instant Book this listing.

                                                        <i class="icon icon-question" data-behavior="tooltip" data-position="bottom" aria-label="Instant Book lets you book a listing instantly, without having to wait for the host&#39;s confirmation."></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="book_it_disabled" class="text-center panel-body hide">
                                                <p id="book_it_disabled_message" class="icon-red">
                                                    This property is unavailable.
                                                </p>
                                                <a href="#" class="btn btn-large btn-block" id="view_other_listings_button">
                                                    View Other Listings
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wishlist-wrapper hide-sm">
                                        <div class="rich-toggle wish_list_button row-space-2 not_saved" data-hosting_id="2744855" data-img="" data-name="Canal side luxury log cabin ensuite" data-address="Merrydown, Uxbridge (LB of Hillingdon)" data-behavior="tooltip" data-position="bottom" aria-label="Saved 97 times">
                                            <input type="checkbox" name="wishlist-button" id="wishlist-button">
                                            <label for="wishlist-button" class="btn btn-block btn-large">
                                                <span class="rich-toggle-checked">
                                                    <i class="icon icon-heart icon-rausch"></i>
                                                    Saved to Wish List
                                                </span>
                                                <span class="rich-toggle-unchecked">
                                                    <i class="icon icon-heart-alt icon-light-gray"></i>
                                                    Save to Wish List
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="other-actions hide-sm hide-visually">
                                        <div class="row-space-4 text-center">
                                            <div class="row-space-2">
                                                <div class="social-share-widget">
                                                    <span class="share-title">
                                                        Share:
                                                    </span>
                                                    <span class="share-triggers">
                                                        <a href="#" aria-label="Email">
                                                            <i class="icon icon-envelope icon-gray social-icon-size"></i>
                                                        </a>
                                                        <a href="#" target="_blank" aria-label="Facebook">
                                                            <i class="icon icon-facebook icon-gray social-icon-size"></i>
                                                        </a>
                                                        <a href="#" target="_blank" aria-label="Twitter">
                                                            <i class="icon icon-twitter icon-gray social-icon-size"></i>
                                                        </a>
                                                        <a href="#" aria-label="Embed This Listing">
                                                            <i class="icon icon-code icon-gray social-icon-size"></i>
                                                        </a>
                                                        <a href="#">
                                                            ···
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row-space-2">
                                                <a href="#" id="flag-for-listing-2744855" class="flag-trigger link-reset text-muted" style="display: inline;">
                                                    <i class="icon icon-flag h4"></i>
                                                    Report this listing
                                                </a>
                                                <div class="already-flagged text-muted row-space-top-2 hide">
                                                    You have reported this listing.
                                                    <a href="#" class="undo_flag">
                                                        Undo?
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input id="hosting_id" name="hosting_id" type="hidden" value="2744855">
                            </form></div>
                    </div>
                </div>
            </div>

            <div id="details" class="details-section webkit-render-fix">
                <div class="page-container-responsive">
                    <div class="row">
                        <div class="col-lg-8" id="details-column">

                            <div class="row-space-8 row-space-top-8">

                                <h4 class="row-space-4 text-center-sm">
                                    About This Listing
                                </h4>


                                <p>Unique cabin on the banks of the Grand Union Canal. The cabins are in the garden of this very special mooring. Canal to one side and lake on the other!  Breakfast on board the boat.  Excellent access to London and Oxford</p>

                                <p></p>

                                <p class="text-center-sm">
                                    <a href="#">
                                        <strong>Contact Host</strong>
                                    </a>
                                </p>

                                <div class="row-space-4 row-space-top-4 inline-photo">
                                    <a href="#" class="photo-trigger" data-index="1"><img alt="Exterior of cabins

                                                                                          " class="media-photo media-photo-block row-space-1 row-space-top-1 img-responsive" src="{{URL::asset('images/temp.jpg')}}"></a>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <p class="text-muted pull-left">Exterior of cabins

                                            </p>
                                        </div>
                                        <div class="col-lg-3">
                                        </div>
                                    </div>
                                </div>
                                <div id="photo-grid-top" class="photo-grid hide row-space-4 row-space-top-4 hide-sm">
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="text-muted">
                                            The Space
                                        </div>

                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div>Bed type: <strong>Real Bed</strong></div>
                                                <div>Property type: <strong><a href="#" class="link-reset">Cabin</a></strong></div>
                                                <div>Accommodates: <strong>2</strong></div>
                                                <div>Bedrooms: <strong>1</strong></div>
                                                <div>Bathrooms: <strong>1</strong></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>Beds: <strong>1</strong></div>
                                                <div>Check In: <strong>8:00 AM</strong></div>
                                                <div>Check Out: <strong>11:00 AM</strong></div>
                                                <div>Pet Owner: <strong>Dog(s) and Cat(s)</strong></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row amenities">
                                    <div class="col-md-3 text-muted">
                                        Amenities
                                    </div>
                                    <div class="col-md-9 expandable expandable-trigger-more">
                                        <div class="expandable-content-summary">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="row-space-1">
                                                        <i class="icon h3 icon-internet"></i>
                                                        &nbsp;
                                                        <span id="amenity-short-tooltip-trigger-3">
                                                            Internet
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1">
                                                        <i class="icon h3 icon-heating"></i>
                                                        &nbsp;
                                                        <span id="amenity-short-tooltip-trigger-30">
                                                            Heating
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1">
                                                        <i class="icon h3 icon-washer"></i>
                                                        &nbsp;
                                                        <span id="amenity-short-tooltip-trigger-33">
                                                            Washer
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">

                                                    <div class="row-space-1">
                                                        <i class="icon h3 icon-dryer"></i>
                                                        &nbsp;
                                                        <span id="amenity-short-tooltip-trigger-34">
                                                            Dryer
                                                        </span>
                                                    </div>

                                                    <div class="row-space-1">
                                                        <i class="icon h3 icon-parking"></i>
                                                        &nbsp;
                                                        <span id="amenity-short-tooltip-trigger-9">
                                                            Free parking on premise
                                                        </span>
                                                    </div>
                                                    <a href="#">
                                                        <strong>+ More</strong>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="expandable-content-full" style="height: 106px;">
                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-8">
                                                            <del>
                                                                Kitchen
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 ">
                                                        <i class="icon h3 icon-internet"></i>
                                                        &nbsp;
                                                        <span id="amenity-long-tooltip-trigger-3">
                                                            <strong>
                                                                Internet
                                                            </strong>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-1">
                                                            <del>
                                                                TV
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-40">
                                                            <del>
                                                                Essentials
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 ">
                                                        <i class="icon h3 icon-heating"></i>
                                                        &nbsp;
                                                        <span id="amenity-long-tooltip-trigger-30">
                                                            <strong>
                                                                Heating
                                                            </strong>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-5">
                                                            <del>
                                                                Air Conditioning
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 ">
                                                        <i class="icon h3 icon-washer"></i>
                                                        &nbsp;
                                                        <span id="amenity-long-tooltip-trigger-33">
                                                            <strong>
                                                                Washer
                                                            </strong>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 ">
                                                        <i class="icon h3 icon-dryer"></i>
                                                        &nbsp;
                                                        <span id="amenity-long-tooltip-trigger-34">
                                                            <strong>
                                                                Dryer
                                                            </strong>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 ">
                                                        <i class="icon h3 icon-parking"></i>
                                                        &nbsp;
                                                        <span id="amenity-long-tooltip-trigger-9">
                                                            <strong>
                                                                Free parking on premise
                                                            </strong>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 ">
                                                        <i class="icon h3 icon-wifi"></i>
                                                        &nbsp;
                                                        <span id="amenity-long-tooltip-trigger-4">
                                                            <strong>
                                                                Wireless Internet
                                                            </strong>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-2">
                                                            <del>
                                                                Cable TV
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 ">
                                                        <i class="icon h3 icon-cup"></i>
                                                        &nbsp;
                                                        <span id="amenity-long-tooltip-trigger-16">
                                                            <strong>
                                                                Breakfast
                                                            </strong>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-12">
                                                            <del>
                                                                Pets Allowed
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 ">
                                                        <i class="icon h3 icon-family"></i>
                                                        &nbsp;
                                                        <span id="amenity-long-tooltip-trigger-31">
                                                            <strong>
                                                                Family/Kid Friendly
                                                            </strong>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-32">
                                                            <del>
                                                                Suitable for Events
                                                            </del>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">

                                                    <div class="row-space-1 ">
                                                        <i class="icon h3 icon-smoking"></i>
                                                        &nbsp;
                                                        <span id="amenity-long-tooltip-trigger-11">
                                                            <strong>
                                                                Smoking Allowed
                                                            </strong>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-6">
                                                            <del>
                                                                Handicap Accessible
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-21">
                                                            <del>
                                                                Elevator in Building
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-27">
                                                            <del>
                                                                Indoor Fireplace
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-28">
                                                            <del>
                                                                Buzzer/Wireless Intercom
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-14">
                                                            <del>
                                                                Doorman
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-7">
                                                            <del>
                                                                Pool
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-25">
                                                            <del>
                                                                Hot Tub
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-15">
                                                            <del>
                                                                Gym
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 ">
                                                        <i class="icon h3 icon-ok"></i>
                                                        &nbsp;
                                                        <span id="amenity-long-tooltip-trigger-35">
                                                            <strong>
                                                                Smoke Detector
                                                            </strong>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-36">
                                                            <del>
                                                                Carbon Monoxide Detector
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-37">
                                                            <del>
                                                                First Aid Kit
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-38">
                                                            <del>
                                                                Safety Card
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 ">
                                                        <i class="icon h3 icon-ok"></i>
                                                        &nbsp;
                                                        <span id="amenity-long-tooltip-trigger-39">
                                                            <strong>
                                                                Fire Extinguisher
                                                            </strong>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="text-muted">
                                            Prices
                                        </div>

                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div>Extra people: <strong><span id="localized_people_pricing_description_string">No Charge</span></strong></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>Cancellation: <strong><a href="#" data-popup="true" id="cancellation-policy">Strict</a></strong></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>



                                <div class="row description">

                                    <div class="col-md-3 text-muted">
                                        Description
                                    </div>

                                    <div class="col-md-9 expandable expandable-trigger-more">


                                        <div class="expandable-content expandable-content-long">


                                            <p><strong>The Space</strong></p>
                                            <p>This unique mooring is on a spit of land with the canal to one side and lake on the other. The cabin opens out onto a large decked area and garden. Very quiet and peaceful, wake to bird song or spot the odd Munk jack deer grazing by the lake. Swans, moorhens, geese and ducks come to the kitchen window to be fed.
                                                <br> London is on your doorstep. Buses at the end of the Mooring will connect you with the Underground into London or mainline stations to Oxford and beyond. Heathrow airport is 15minutes by car and there are easy connections  to Uxbridge. Taxi costs around £15. There is no vehicular access to the mooring...... just a stroll along the canal! The only traffic you will hear will be the occasional canal boat chugging up and down!
                                                <br>If you have a car, there is a free car park at the beginning of the towpath for residents and guests.
                                                <br>There is a second cabin next door.Check it out by typing in the same postcode as for this cabin!</p>
                                            <p><strong>Guest Access</strong></p>
                                            <p>The cabin has a comfortable double bed (vital!) with en suite bathroom.  As the cabins are independent of the main houseboat guest can come and go as they please. Continental breakfast  on board the main houseboat . Fresh Coffee, fresh orange juice, croissant etc. Please let me know in advance if you would like supper in the evening. This can be arranged for a small fee.  Weather permitting this can also be arranged al fresco on the deck. Coffee and tea facilities in the cabin. All linen and towels provided. Unfortunately no T.V. in the room (no space!) but fibre optic broadband connection.... good fast speed! Mobile connection is very good.</p>
                                            <p><strong>Interaction with Guests</strong></p>
                                            <p> I am an artist and work from my studio in the garden.  Sometimes I am in London working but prefer to be around the boat! It is all completely easy going and I love to meet new people and chat !
                                                <br>As the boat is a little ways from the car park, I am happy to  meet you at the car park with a trolley for luggage should you need it, and to show you the way.  </p>
                                            <p><strong>The Neighbourhood</strong></p>
                                            <p>This little mooring is unique and probably the only one like it in the South West of England. We are a community of approximately 22 boats each with our own patch of land and garden. It is rather Bohemian, slightly eccentric, very friendly and we have our fair share of artists and musicians!
                                                <br>In the evening, stroll down the canal, watch the boats go through the lock  and drop into a pub for a  drink and a meal.  Here you are in another world, Once you cross the bridge, you have stepped out of the rat race!</p>
                                            <p><strong>Getting around</strong></p>
                                            <p>Public transport is excellent with many connections available for Central London, Windsor and Oxford. We are 15 minutes by car from Heathrow airport. Bus connections from Heathrow are plenty. If you are planning on using this as a base to go touring, we are 10minutes from the M4 close to the M25,M40 A40 into London.  Car parking is available.</p>
                                            <p><strong>Other Things to Note</strong></p>
                                            <p>I live with a very gentle Springer Spaniel dog who loves people and is ball mad. I also have two cats. So if you have an aversion to dogs, or an allergy to cats I am sorry but this will not be good for you!</p>


                                            <div class="expandable-indicator"></div>
                                        </div>

                                        <a href="#">
                                            <strong>+ More</strong>
                                        </a>


                                    </div>
                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="text-muted">
                                            House Rules
                                        </div>

                                    </div>
                                    <div class="col-md-9 expandable expandable-trigger-more expanded">
                                        <div class="expandable-content">
                                            <p>This is a very peaceful and quiet location, so don't expect easy access to clubbing or nightlife..........sorry! As I have pets of my own, I understand that sometimes you want to travel with your pet!. If you do, then we can talk about it!
                                                <br>Smoking is permitted outside the cabin.</p>
                                            <div class="expandable-indicator"></div>
                                        </div>
                                        <a href="#">
                                            <strong>+ More</strong>
                                        </a>

                                    </div>
                                </div>

                                <hr>


                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="text-muted">
                                            Availability
                                        </div>

                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <strong>1 night</strong> minimum stay
                                            </div>
                                            <div class="col-md-6">
                                                <a href="#"><strong>View Calendar</strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row-space-4 row-space-top-4 inline-photo">
                                    <a href="#" class="photo-trigger" data-index="2"><img alt="Swing seat overlooking lake" class="media-photo media-photo-block row-space-1 row-space-top-1 img-responsive" src="{{URL::asset('images/temp.jpg')}}"></a>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <p class="text-muted pull-left">Swing seat overlooking lake</p>
                                        </div>
                                        <div class="col-lg-3">
                                        </div>
                                    </div>
                                </div>


                                <div id="photo-grid-bottom" class="photo-grid row-space-4 row-space-top-4 hide-sm">
                                    <div class="row

                                         featured-height
                                         ">
                                        <div class="col-6 row-full-height" style="">
                                            <div style="width: 100%; background-color: #535151;height: 100%;"></div>
                                        </div>
                                        <div class="col-6 row-full-height">
                                            <div style="width: 100%; background-color: #535151;height: 100%;"></div>
                                        </div>
                                    </div>
                                    <div class="row supporting-height">
                                        <div class="col-4 row-full-height">
                                            <div style="width: 100%; background-color: #535151;height: 100%;"></div>
                                        </div>
                                        <div class="col-4 row-full-height">
                                            <div style="width: 100%; background-color: #535151;height: 100%;"></div>
                                        </div>
                                        <div class="col-4 row-full-height" style="
                                             padding-right: 1px;
                                             ">
                                            <div style="width: 100%; background-color: #535151;height: 100%;"></div>    
                                        </div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="reviews" class="room-section webkit-render-fix">
                <div class="panel">
                    <div class="page-container-responsive row-space-2">
                        <div class="row">
                            <div class="col-lg-8">

                                <div class="row-space-8 row-space-top-8">


                                    <h4 class="row-space-4 text-center-sm">
                                        47 Reviews      <div class="star-rating">
                                            <div class="foreground">
                                                <i class="icon icon-pink icon-beach icon-star"></i>
                                                <i class="icon icon-pink icon-beach icon-star"></i>
                                                <i class="icon icon-pink icon-beach icon-star"></i>
                                                <i class="icon icon-pink icon-beach icon-star"></i>
                                                <i class="icon icon-pink icon-beach icon-star-half"></i>

                                            </div>
                                            <div class="background">
                                                <i class="icon icon-star icon-light-gray"></i>
                                                <i class="icon icon-star icon-light-gray"></i>
                                                <i class="icon icon-star icon-light-gray"></i>
                                                <i class="icon icon-star icon-light-gray"></i>
                                                <i class="icon icon-star icon-light-gray"></i>
                                            </div>
                                        </div>

                                    </h4>


                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="text-muted">
                                                Summary
                                            </div>

                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="pull-right">
                                                            <div class="star-rating">
                                                                <div class="foreground">
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>

                                                                </div>
                                                                <div class="background">
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <strong>
                                                            Accuracy
                                                        </strong>
                                                    </div>
                                                    <div>
                                                        <div class="pull-right">
                                                            <div class="star-rating">
                                                                <div class="foreground">
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>

                                                                </div>
                                                                <div class="background">
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <strong>
                                                            Communication
                                                        </strong>
                                                    </div>
                                                    <div>
                                                        <div class="pull-right">
                                                            <div class="star-rating">
                                                                <div class="foreground">
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>

                                                                </div>
                                                                <div class="background">
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <strong>
                                                            Cleanliness
                                                        </strong>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="pull-right">
                                                            <div class="star-rating">
                                                                <div class="foreground">
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star-half"></i>

                                                                </div>
                                                                <div class="background">
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <strong>
                                                            Location
                                                        </strong>
                                                    </div>
                                                    <div>
                                                        <div class="pull-right">
                                                            <div class="star-rating">
                                                                <div class="foreground">
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>

                                                                </div>
                                                                <div class="background">
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <strong>
                                                            Check In
                                                        </strong>
                                                    </div>
                                                    <div>
                                                        <div class="pull-right">
                                                            <div class="star-rating">
                                                                <div class="foreground">
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star"></i>
                                                                    <i class="icon icon-pink icon-beach icon-star-half"></i>

                                                                </div>
                                                                <div class="background">
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                    <i class="icon icon-star icon-light-gray"></i>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <strong>
                                                            Value
                                                        </strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="review-translate-button-wrapper" class="row-space-top-6 hide" data-is-translated="false">

                                        <button id="review-translate-button" class="btn btn-block">
                                            <span class="review_translate_button_label">Translate reviews to English</span>
                                            <div class="gBrandingText">
                                                powered by <img alt="Google" height="15" src="images/google-small-logo-6fb0dddb16ad59e5ea9e7f9ddf7feae4.png" width="51">
                                            </div>
                                        </button>
                                    </div>

                                </div>
                                <div class="review-content">

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3 text-center row-space-2">
                                                <a href="#" class="media-photo media-round row-space-1 text-center" name="review_25118323" target="blank">

                                                    <img alt="Johannes" class="lazy" data-original="" height="68" src="{{URL::asset('images/temp.jpg')}}" title="Johannes" width="68" style="display: inline;">
                                                </a>    <div class="name">
                                                    <a href="#" class="text-muted link-reset" target="blank">Johannes</a>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row-space-2">
                                                    <div data-review-id="25118323" data-original-text="" class="review-text expandable expandable-trigger-more expanded">

                                                        <div class="expandable-content">
                                                            <p>Staying in Monica's cabin was wonderful it's right next to the canal so was in a really beautiful setting! The property is also away from the hustle and bustle the only traffic noise was the occasional boat driving past! I would highly recommend anyone to stay here. Monica was really welcoming and helpful the cabin was very clean and cozy too. Thanks very much! </p>

                                                        </div>


                                                    </div>

                                                    <div class="text-muted review-subtext">
                                                        <div class="review-translation-language" data-review-id="25118323">
                                                        </div>
                                                        <div class="date">January 2015</div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row row-space-2">
                                            <div class="col-md-9 col-md-push-3">
                                                <hr>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3 text-center row-space-2">
                                                <a href="#" class="media-photo media-round row-space-1 text-center" name="review_22003237" target="blank">

                                                    <img alt="Danielle" class="lazy" data-original="" height="68" src="{{URL::asset('images/temp.jpg')}}" title="Danielle" width="68" style="display: inline;">
                                                </a>    <div class="name">
                                                    <a href="#" class="text-muted link-reset" target="blank">Danielle</a>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row-space-2">
                                                    <div data-review-id="22003237" data-original-text="" class="review-text expandable expandable-trigger-more expanded">

                                                        <div class="expandable-content">
                                                            <p>Lovely cabin and good location. Very clean and tidy with all facilities you need whilst away for the weekend.</p>

                                                        </div>


                                                    </div>

                                                    <div class="text-muted review-subtext">
                                                        <div class="review-translation-language" data-review-id="22003237">
                                                        </div>
                                                        <div class="date">October 2014</div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-9 col-offset-3">
                                                <p>
                                                    This host has 35 reviews for other properties.
                                                </p>
                                                <a href="#" class="btn">View Other Reviews</a>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-9 col-offset-3">
                                                <div class="pagination pagination-responsive" per_page="7"><ul class="list-unstyled"> <li class="active"><a href="#">1</a></li> <li><a href="#">2</a></li> <li><a href="#">3</a></li> <li class="gap"><span class="gap">…</span></li> <li><a href="#">7</a></li> <li class="next next_page"><a href="#"><i class="icon icon-caret-right"></i></a></li></ul></div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="host-profile" class="room-section webkit-render-fix">
                <div class="page-container-responsive row-space-2">
                    <div class="row">
                        <div class="col-lg-8">

                            <div class="row-space-8 row-space-top-8">

                                <h4 class="row-space-4 text-center-sm">
                                    About the Host, Monica
                                </h4>


                                <div class="row">
                                    <div class="col-md-3 text-center">

                                        <a href="#" class="media-photo media-round"><img alt="Monica" height="90" nopin="nopin" src="{{URL::asset('images/temp.jpg')}}" title="Monica" width="90"></a>
                                    </div>

                                    <div class="col-md-9">


                                        <div class="expandable expandable-trigger-more row-space-2">
                                            <div class="expandable-content">
                                                <p>HI!
                                                    <br>I live on a houseboat with a Springer Spaniel  and two cats and so.... predictably I am an Artist!
                                                    <br> My friends say I am a good cook, (at least I haven't poisoned anyone yet!) I firmly believe in home comforts, and an easy life!  I'm pretty laid back, a good sense of humour, if a little whacky at times, and love meeting new people.
                                                    <br>Cant live without my books, music and dog! I have travelled  pretty much all my life, one way or another. Born in Africa, lived in all sorts of places, and collected all sorts of stuff on the way.
                                                </p>

                                                <div>
                                                    <a href="#"><strong>View full profile</strong></a>
                                                </div>
                                                <div class="expandable-indicator"></div>
                                            </div>
                                            <a href="#">
                                                <strong>+ More</strong>
                                            </a>

                                        </div>


                                        <div class="row row-condensed row-space-2">

                                            <div class="col-md-6">
                                                <div>Uxbridge, England, United Kingdom</div>
                                                <div>
                                                    Member since March 2014
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div>
                                                    Response rate:
                                                    <strong>100%</strong>
                                                    <small class="response-details text-muted hide">(last 10 contacts)</small>
                                                </div>
                                                <div>
                                                    Response time:
                                                    <strong>within an hour</strong>
                                                </div>
                                            </div>

                                        </div>

                                        <div id="contact_wrapper">
                                            <button class="btn btn-small btn-primary" id="host-profile-contact-btn">Contact Host</button>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="row-space-8 row-space-top-8 social-connections-section">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="text-muted">
                                            Connections
                                        </div>

                                    </div>

                                    <div class="col-md-9 facebook-button-wrapper">
                                        <p>
                                            Are you or your friends connected with this host?
                                        </p>

                                        <a href="#" class="fb-button fb-blue btn icon-btn btn-small btn-facebook" data-populate_uri="" data-redirect_uri="">
                                            <span class="icon-container">
                                                <i class="icon icon-facebook"></i>
                                            </span>
                                            <span class="text-container">
                                                Connect with Facebook
                                            </span>
                                        </a>
                                    </div>

                                    <div class="col-md-9 social-connections hide">
                                        <p>
                                            You and Monica

                                            <a href="#">
                                                Learn More!
                                            </a>
                                        </p>

                                        <div class="social-connections-list row"></div>

                                        <a href="#" class="more-connections-link hide">
                                            <span id="more-count"></span> more friend connections
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row-space-8 row-space-top-8">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="text-muted">
                                            Trust
                                        </div>

                                    </div>
                                    <div class="col-md-9">

                                        <div class="row row-condensed">
                                            <div class="col-md-3 col-sm-6">
                                                <a href="#">

                                                    <div class="text-center text-wrap">


                                                        <div class="badge-pill h3">
                                                            <span class="badge-pill-count">82</span>
                                                        </div>
                                                        <div class="row-space-top-1">Reviews</div>
                                                    </div>
                                                </a>


                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <a href="#">

                                                    <div class="text-center text-wrap">


                                                        <div class="badge-pill h3">
                                                            <span class="badge-pill-count">2</span>
                                                        </div>
                                                        <div class="row-space-top-1">References</div>
                                                    </div>
                                                </a>


                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <a class="link-reset" rel="nofollow">

                                                    <div class="text-center text-wrap" id="verified-id-icon">

                                                        <img alt="Verified_id_50-1cd4c3a499402e856ea0ca5b533c972d" height="50" src="images/verified_id_50-1cd4c3a499402e856ea0ca5b533c972d.png" width="62">
                                                        <div class="row-space-top-1">Verified ID</div>
                                                    </div>
                                                </a>


                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <div id="neighborhood" class="room-section">
                <div class="panel location-panel">
                    <div id="map" class="main_content embedded-content" style="
                         background-color: #DEDEDE;
                         "></div>
                    <ul id="guidebook-recommendations" class="hide">
                        <li class="user-image">
                            <a href="#"><img alt="Monica" height="90" nopin="nopin" src="{{URL::asset('images/temp.jpg')}}" title="Monica" width="90"></a>
                        </li>
                        <li class="info" data-neighborhood-id="3024" href="#"></li>
                    </ul>

                    <div id="hover-card" class="panel">
                        <div id="neighborhood-seo-link" class="panel-body not-launched">
                            <div class="header row row-table text-center text-contrast">
                                <div class="col-12 col-center">
                                    <div class="h6 text-contrast">
                                        Neighbourhood
                                    </div>
                                </div>
                            </div>

                            <div class="text-center row-space-top-6">
                                <h3 class="seo-link">
                                    <a href="#">
                                        LB of Hillingdon
                                    </a>
                                </h3>
                                <h3 class="seo-text">
                                    LB of Hillingdon
                                </h3>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="text-center">
                                Listing Location
                            </div>
                            <div class="text-center">
                                <span>
                                    <a href="#" class="text-muted"><span>Merrydown,</span></a>
                                </span>
                                <span>
                                    <a href="#" class="text-muted"><span>Uxbridge,</span></a>
                                </span>
                                <span>
                                    <a href="#" class="text-muted"><span>Middlesex / London,</span></a>
                                </span>
                                <span>
                                    <a href="#" class="text-muted"><span>United Kingdom</span></a>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div id="similar-listings" class="row-space-6 row-space-top-4">
                <div class="page-container-responsive">
                    <h4 class="row-space-4 text-center-sm">
                        Similar Listings
                    </h4>

                    <div class="sliding-carousel similar-listings">
                        <div class="similar-listings-results carousel-view"><ul class="listings-container carousel-item-list list-unstyled row" style="width: 8360px;">
                                <li class="carousel-item page-container-responsive" data-index="0">

                                    <div class="col-md-4">


                                        <div data-lat="51.4779637773627" data-lng="-0.39363902381200905" data-name="* For 1-4 People-Log Cabin London" data-url="/rooms/565770?checkin=31-01-2015&amp;checkout=01-02-2015" data-user="1958273" data-id="565770" class="listing" itemscope="" itemtype="">

                                            <div class="panel-image listing-img">
                                                <a href="#" class="media-photo media-cover">
                                                    <div class="listing-img-container media-cover text-center">

                                                        <img itemprop="image" data-current="0" src="{{URL::asset('images/temp.jpg')}}" class="img-responsive-height" alt="* For 1-4 People-Log Cabin London" style="
                                                             width: 100%;
                                                             ">
                                                    </div>
                                                </a>

                                                <div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
                                                    <div>
                                                        <sup class="h6 text-contrast">£</sup>
                                                        <span class="h3 price-amount">45</span>
                                                        <sup class="h6 text-contrast"></sup>
                                                    </div>
                                                </div>
                                                <div class="panel-overlay-top-right wl-social-connection-panel">
                                                    <span class="rich-toggle wish_list_button wishlist-button not_saved" data-img="" data-name="* For 1-4 People-Log Cabin London" data-address="Hounslow" data-hosting_id="565770">
                                                        <input type="checkbox" id="wishlist-widget-565770" name="wishlist-widget-565770" data-for-hosting="565770">
                                                        <label for="wishlist-widget-565770" class="hide-sm">
                                                            <i class="icon icon-heart icon-pink icon-rausch icon-size-2 rich-toggle-checked"></i>
                                                            <i class="icon icon-heart wishlist-heart-unchecked icon-size-2 rich-toggle-unchecked"></i>
                                                            <i class="icon icon-heart-alt icon-white icon-size-2"></i>
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="panel-body panel-card-section">
                                                <div class="media">

                                                    <a href="#" class="pull-right media-photo media-round card-profile-picture card-profile-picture-offset">
                                                        <img src="{{URL::asset('images/temp.jpg')}}" alt="">
                                                    </a>

                                                    <a href="#" class="text-normal">
                                                        <div title="* For 1-4 People-Log Cabin London" class="h5 listing-name text-truncate row-space-top-1">
                                                            * For 1-4 People-Log Cabin London
                                                        </div>
                                                    </a>
                                                    <div class="text-muted listing-location text-truncate">Entire home/flat — 5.1 miles away
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-4">


                                        <div data-lat="51.536873696459146" data-lng="-0.5243764438744757" data-name="Studio near Uxbridge &amp; Heathrow Air" data-url="/rooms/138498?checkin=31-01-2015&amp;checkout=01-02-2015" data-user="605228" data-id="138498" class="listing" itemscope="" itemtype="">

                                            <div class="panel-image listing-img">
                                                <a href="#" class="media-photo media-cover">
                                                    <div class="listing-img-container media-cover text-center">

                                                        <img itemprop="image" data-current="0" src="{{URL::asset('images/temp.jpg')}}" class="img-responsive-height" alt="Studio near Uxbridge &amp; Heathrow Air" style="
                                                             width: 100%;
                                                             ">
                                                    </div>
                                                </a>
                                                <div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
                                                    <div>
                                                        <sup class="h6 text-contrast">£</sup>
                                                        <span class="h3 price-amount">40</span>
                                                        <sup class="h6 text-contrast"></sup>
                                                    </div>
                                                </div>
                                                <div class="panel-overlay-top-right wl-social-connection-panel">

                                                    <span class="rich-toggle wish_list_button wishlist-button not_saved" data-img="" data-name="Studio near Uxbridge &amp; Heathrow Air" data-address="Iver" data-hosting_id="138498">
                                                        <input type="checkbox" id="wishlist-widget-138498" name="wishlist-widget-138498" data-for-hosting="138498">
                                                        <label for="wishlist-widget-138498" class="hide-sm">
                                                            <i class="icon icon-heart icon-pink icon-rausch icon-size-2 rich-toggle-checked"></i>
                                                            <i class="icon icon-heart wishlist-heart-unchecked icon-size-2 rich-toggle-unchecked"></i>
                                                            <i class="icon icon-heart-alt icon-white icon-size-2"></i>
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="panel-body panel-card-section">
                                                <div class="media">

                                                    <a href="#" class="pull-right media-photo media-round card-profile-picture card-profile-picture-offset">
                                                        <img alt="" src="{{URL::asset('images/temp.jpg')}}">
                                                    </a>

                                                    <a href="#" class="text-normal">
                                                        <div title="Studio near Uxbridge &amp; Heathrow Air" class="h5 listing-name text-truncate row-space-top-1">
                                                            Studio near Uxbridge &amp; Heathrow Air
                                                        </div>
                                                    </a>
                                                    <div class="text-muted listing-location text-truncate">Entire home/flat — 1.9 miles away
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <div data-lat="51.52646100709262" data-lng="-0.4862887388947437" data-name="Luxury canal side cabin." data-url="/rooms/2750156?checkin=31-01-2015&amp;checkout=01-02-2015" data-user="13668628" data-id="2750156" class="listing" itemscope="" itemtype="">

                                            <div class="panel-image listing-img">
                                                <a href="#" class="media-photo media-cover">
                                                    <div class="listing-img-container media-cover text-center">

                                                        <img itemprop="image" data-current="0" src="{{URL::asset('images/temp.jpg')}}" class="img-responsive-height" alt="Luxury canal side cabin." style="
                                                             width: 100%;
                                                             ">
                                                    </div>
                                                </a>
                                                <div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
                                                    <div>
                                                        <sup class="h6 text-contrast">£</sup>
                                                        <span class="h3 price-amount">40</span>
                                                        <sup class="h6 text-contrast"></sup>
                                                    </div>
                                                </div>
                                                <div class="panel-overlay-top-right wl-social-connection-panel">
                                                    <span class="rich-toggle wish_list_button wishlist-button not_saved" data-img="" data-name="Luxury canal side cabin." data-address="Uxbridge" data-hosting_id="2750156">
                                                        <input type="checkbox" id="wishlist-widget-2750156" name="wishlist-widget-2750156" data-for-hosting="2750156">
                                                        <label for="wishlist-widget-2750156" class="hide-sm">
                                                            <i class="icon icon-heart icon-pink icon-rausch icon-size-2 rich-toggle-checked"></i>
                                                            <i class="icon icon-heart wishlist-heart-unchecked icon-size-2 rich-toggle-unchecked"></i>
                                                            <i class="icon icon-heart-alt icon-white icon-size-2"></i>
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="panel-body panel-card-section">
                                                <div class="media">

                                                    <a href="#" class="pull-right media-photo media-round card-profile-picture card-profile-picture-offset">
                                                        <img src="{{URL::asset('images/temp.jpg')}}" alt="">
                                                    </a>

                                                    <a href="#" class="text-normal">
                                                        <div title="Luxury canal side cabin." class="h5 listing-name text-truncate row-space-top-1">
                                                            Luxury canal side cabin.
                                                        </div>
                                                    </a>
                                                    <div class="text-muted listing-location text-truncate">Private room — 0.0 miles away
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
                                <a href="#" class="link-contrast">Why Host</a></li>


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
                            </a>        </li>
                        <li>
                            <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
                                <i class="icon footer-icon icon-google-plus"></i>
                            </a>        
                        </li>

                        <li>
                            <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
                                <i class="icon footer-icon icon-twitter"></i>
                            </a>        </li>

                        <li>
                            <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
                                <i class="icon footer-icon icon-linkedin"></i>
                            </a>      </li>

                        <li>
                            <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
                                <i class="icon footer-icon icon-pinterest"></i>
                            </a>        </li>
                        <li>
                            <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
                                <i class="icon footer-icon icon-youtube"></i>
                            </a>        </li>
                        <li>
                            <a href="#" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank">
                                <i class="icon footer-icon icon-instagram"></i>
                            </a>        </li>
                    </ul>
                    <div id="copyright" class="row-space-top-2 text-muted">
                        © AirRent, Inc.
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>