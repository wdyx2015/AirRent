<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="renderer" content="webkit"/>
        <meta content="no-transform " http-equiv="Cache-Control"/>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/css3.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/responsivebootstrap.css')}}"/>
        <script type="text/javascript" src="{{URL::asset('js/jquery-1.11.2.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/modal.js')}}"></script>
        
        <script>
            function showModalSignUp()
            {
                $("#loginModal").modal("hide");
                $("#signUpModal").modal("show");
            }
            function showLoginModal()
            {
                $("#signUpModal").modal("hide");
                $("#loginModal").modal("show");
            }
            function showForgotModal()
            {
                $("#loginModal").modal("hide");
                $("#resetModal").modal("show");
            }
            $(function(){
                $(".cmt_ul_left").find("li").each(function(){
                    $(this).hover(function(){
                        $(".cmt_ul_left li").removeClass("cmt_current");
                        $(this).addClass("cmt_current");
                        var index = $(this).index();
                        $(".cmt_con_left").children("div").attr("style", "display:none;");
                        $(".cmt_con_left").children("div").eq(index).removeAttr("style");;
                    });
                });
                
                $(".cmt_ul_right").find("li").each(function(){
                    $(this).hover(function(){
                        $(".cmt_ul_right li").removeClass("cmt_current");
                        $(this).addClass("cmt_current");
                        var index = $(this).index();
                        $(".cmt_con_right").children("div").attr("style", "display:none;");
                        $(".cmt_con_right").children("div").eq(index).removeAttr("style");;
                    });
                });
            })
        </script>
    </head>    
    <body>
        <div style="position:relative">
            <div class="head_bar">
                <div class="head_bar_con">
                    <ul class="nav_R">
                        <li><a rel="nofollow" title="" href="javascript:void(0)" onclick="showModalSignUp()">Sign Up</a></li> 
                        <li>·</li>
                        <li><a rel="nofollow" href="javascript:void(0)" onclick="showLoginModal()">Log in</a></li>
                        <li>·</li> 
                        <li class="current">
                            <a href="#" class="openTri_R marginR10">Short Term Rental Guide</a>
                            <div class="head_pop width_58" style="">
                                <div class="pop_column">
                                    <span><a class="fl" href="#">Text Here</a><a class="fr" href="#">Text Here</a></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="icon_iphone">Phone</a>
                        </li>
                        <li><a rel="nofollow" href="#" class="btn_free">Post Free</a></li>
                    </ul> 
                </div>
            </div>
            <div class="banner_con">
                <div class="banner" style="height: 553px;">
                    <ul class="banner_ul">
                        <li style="display: list-item;" class="banner_img">                     
                            <a href="#">
                                <img src="{{URL::asset('images/index_5.jpg')}}" name="indeximage">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="search_index">
                    <div class="search_column">
                        <span class="icon_place" id="suggest_icon"></span>
                        <input class="ipt_search" type="text" id="searchcity" name="searchcity" autocomplete="off" value="Text Here">
                    </div>
                    <div class="search_column">
                        <span class="icon_date" id="calendar_btn_s"></span>
                        <input class="ipt_search" type="text" readonly="" id="startenddate" name="startenddate" value="Text Here">
                    </div>
                    <input class="btn_pink_search" type="button" value="Search">
                </div>
            </div>            
            <div class="index_T">
                <h1>The Story belongs to us</h1>
                <span>Body in the whole world such as at home</span>
            </div>
            <div class="index_vedio">
                <div class="vedio_column">
                    <a href="#" class="vediodialogpic" name="vedio1">
                        <img lazy_src="finish" src="{{URL::asset('images/vedio_1.jpg')}}">
                            <span class="vedio_uper">
                                <span class="icon_vedio"></span>Welcome to the world</span>
                    </a>                
                </div>
                <div class="vedio_column">
                    <a href="#" class="vediodialogpic" name="vedio2">
                        <img lazy_src="finish" src="{{URL::asset('images/vedio_2.jpg')}}">
                            <span class="vedio_uper">
                                <span class="icon_vedio"></span>Journey, There is always<br>accompanied by here</span>
                    </a>                
                </div>
            </div>
            <div class="index_T">
                <h1>Let quietly sharing and trust</h1>
                <span>Perfect security mechanism and credit mechanism to help landlords and tenants</span>
            </div>
            <div class="content_v2 marginB30">
                <ul class="xz_ads">
                    <li><img lazy_src="finish" src="{{URL::asset('images/xz_indexad1.png')}}"><a href="#" class="ads_hover indexdialogpic" name="authentication"></a></li>
                    <li><img lazy_src="finish" src="{{URL::asset('images/xz_indexad2.png')}}"><a href="#" class="ads_hover indexdialogpic" name="transaction"></a></li>
                    <li><img lazy_src="finish" src="{{URL::asset('images/xz_indexad3.png')}}"><a href="#" class="ads_hover indexdialogpic" name="protection"></a></li>
                    <li class="nobor"><img lazy_src="finish" src="{{URL::asset('images/xz_indexad4.png')}}"><a href="#" class="ads_hover indexdialogpic" name="comment"></a></li>
                </ul>
            </div>
            <div class="index_commnet">
                <div class="index_T">
                    <h1 class="white">All the world is to meet the long-awaited reunion</h1>
                    <span class="white">Tenant and landlord are touched each other</span>
                </div>
                <div id="commentdiary"><div class="comment_column">
                        <div class="cmt_con cmt_con_left">
                            <span class="comment_user">Tenant Reviews</span>
                            <div>
                                <span><img src="{{URL::asset('images/17.jpg')}}"></span>
                                <span>muse5</span>
                                <span>2014.12</span>
                                <span class="comment_W"><a href="#">Really a very fortunate to stay, although only a few days to Beijing time, warm and thoughtful brother landlord let me harvest indescribable really impressed! Introduced me to a lot of good fun, and the landlord's house with his brother on the same picture, especially in particularly warm, take the time landlord brother gave me a big bowl of chaos for breakfast, also insisted on driving me to take along to the subway station happiness </a></span>
                            </div>
                            <div style="display:none;">
                                <span><img src="{{URL::asset('images/4.jpg')}}"></span>
                                <span>neemar</span>
                                <span>2014.2</span>
                                <span class="comment_W"><a href="#">Zhu sister stayed only one night at home, a family of four made us very satisfied! Day is the heavy snow, later than the scheduled one hour to reach the landlord on time to the future has been patiently waiting for us, and along the way we played several phone calls for directions, told attention to safety, not short-lived rent dad entered Speaking on the House: This is simply feel at home ah! Thank you for the warm reception the couple Zhu </a></span>
                            </div>
                            <div style="display:none;">
                                <span><img src="{{URL::asset('images/6.jpg')}}"></span>
                                <span>zhaoyan</span>
                                <span>2014.12</span>
                                <span class="comment_W"><a href="#">as to when a little late, and the landlord drizzly telephone contact, without the slightest impatience, it is a passion to tell me the line. After arriving home, and online Introduction to the same. Although it is a small bedroom, but very clean and sanitary, warmly decorated, super NICE landlord handed until I sat down on a hot drink, too considerate. Overall, very satisfied, much better than staying in a hotel, there is no worry that the bathroom is not </a></span>
                            </div>
                            <div style="display:none;">
                                <span><img src="{{URL::asset('images/1.jpg')}}"></span>
                                <span>evome1991</span>
                                <span>2014.12</span>
                                <span class="comment_W"><a href="#">room really exceeded expectations, we enjoyed on its own terrace and eating fruit tea sister Vivian, the room is a Mediterranean-style, lazy small sofa is just our son can sleep, and gave us a very warm duvet . I remember we were staying when the weather is cold, there is no air conditioning, the rooms are very warm, very comfortable living. There are milk, porridge breakfast in the morning. Really great, felt like a pig wrote, "There are </a></span>
                            </div>
                            <div style="display:none;">
                                <span><img src="{{URL::asset('images/11.jpg')}}"></span>
                                <span>vivian0824</span>
                                <span>2014.11</span>
                                <span class="comment_W"><a href="#">Beijing cold now, but one into the Peas sister, there is a return to the feeling of home, very warm, clean bed linen washing, not the kind of feeling cold hotel, and some is thick caring friendship. Bookcase with books, kitchen with cooking, what a lovely home! Rental housing looks like this little thing, but because of her intentions in doing, becomes very different, thanks sister, warm home to me a dilute Beijing's meet, thanks pig Short Term let me </a></span>
                            </div>
                            <ul class="cmt_ul cmt_ul_left">
                                <li class="cmt_current"></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div> 
                        <em class="middle_line"></em>              
                    </div>
                    <div class="comment_column">
                        <div class="cmt_con cmt_con_right cmt_R">
                            <span class="comment_user">The landlord diary</span>
                            <div style="display: block;">
                                <span><img src="{{URL::asset('images/12.jpg')}}"></span>
                                <span>Beijing good landlord</span>
                                <span>2014-10-29</span>
                                <span class="comment_W"><a href="#">What is the value of short-rent, ideal for short-term accommodation is what I've been trying to find out, what happens where, presumably there is some significance: to promote a project to pull strings to find a job, a person witnessing a change . I imagine there is a building, the building has a great public space, let us communicate with each other, so there is passion, interesting people come in, so that we find like-minded people, including </a></span>
                            </div>
                            <div style="display: none;">
                                <span><img src="{{URL::asset('images/14.jpg')}}"></span>
                                <span>jasmine0427</span>
                                <span>2014-12-22</span>
                                <span class="comment_W"><a href="#">try holding the attitude, cautious in pig Short Term release of the room, the staff pig short rent, really responsible for my room from the Post to the line, took more than a week, each modifications, all the details, the staff of one pig short rent review to help me, this is the pig short rental business is getting better fundamental reasons for it. Really Just for tenant and landlord checks from their hands. Also sincerely thank my first tenant, let me be more </a></span>
                            </div>
                            <div style="display: none;">
                                <span><img src="{{URL::asset('images/16.jpg')}}"></span>
                                <span>moonriver</span>
                                <span>2014-11-26</span>
                                <span class="comment_W"><a href="">Many years ago, I like them, to love and ideals come a long way; we have to change yourself so that he, when I saw you and listening to your story, like watching to many years ago that drift from south to north, tenacious grown themselves. I want to say is that those in love, wandering the little friends, children traveling thousands of miles, your parents take care of yourself; and do not forget to greet thousands of miles beyond the care of them.</a></span>
                            </div>
                            <div style="display: none;">
                                <span><img src="{{URL::asset('images/9.jpg')}}"></span>
                                <span>Flower sharing</span>
                                <span>2014-12-15</span>
                                <span class="comment_W"><a href="#">no valuables and cheap points, these gifts are recognized tenants junior partner of the flower in my eyes, like and love. These gifts have a story, and you made me a burst of happiness expansion landlord! We cook together, eating, shopping, watching movies, playing games, live chat, chat work, we exchange gifts, trust, give positive energy to each other. These were originally supposed to happen in a friend who, while we, this is a stranger, </a></span>
                            </div>
                            <div style="display: none;">
                                <span><img src="{{URL::asset('images/15.jpg')}}"></span>
                                <span>Guns father</span>
                                <span>2014-12-11</span>
                                <span class="comment_W"><a href="#">After reading an upcoming study abroad young tenant of the reviews, my feeling is not less than her! Like the author, through these words I can truly feel the girl mentality in Beijing these days. Junior Wen Qing is gong to go south, mid-Wen Qing to 798, the higher-order Wen Qing appreciate the alley of the old Beijing ...... there are two young men waiting for a visa to go abroad stay, I am very pleased to see them, I hope to give them A life due </a></span>
                            </div>
                            <ul class="cmt_ul cmt_ul_right">
                                <li class="cmt_current"></li>
                                <li class=""></li>
                                <li class=""></li>
                                <li class=""></li>
                                <li></li>
                            </ul>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="rooms_show" id="load_Ajax_IndexRecommend">
                <div class="index_T">
                    <h1>Distance without knowing each other, thousands</h1>
                    <span>The world is so big, there is something for your home</span>
                </div>
                <div class="content_v2">
                    <ul class="rooms_show_ul">
                        <li>     
                            <img class="img_room" lazy_src="finish" alt="" width="400" height="326" src="{{URL::asset('images/13.jpg')}}">
                            <span class="img_upCover"></span>
                            <div class="rooms_intro">
                                <img class="img_user_fd" lazy_src="finish" width="96" height="96" src="{{URL::asset('images/15.jpg')}}">
                                <span class="room_name">Text Here</span>
                                <span class="index_price"><em class="bigFont">¥</em>268</span>
                            </div>
                            <a href="#" class="room_hover"></a>
                        </li>                                 
                        <li>     
                            <img class="img_room" lazy_src="finish" alt="" width="400" height="326" src="{{URL::asset('images/8.jpg')}}">
                            <span class="img_upCover"></span>
                            <div class="rooms_intro">
                                <img class="img_user_fd" lazy_src="finish" width="96" height="96" src="{{URL::asset('images/20.jpg')}}">
                                <span class="room_name">Text Here</span>
                                <span class="index_price"><em class="bigFont">¥</em>488</span>
                            </div>
                            <a href="#" class="room_hover"></a>
                        </li>                                                                                         
                        <li class="nomargin">         
                            <img class="img_room" lazy_src="finish" width="400" height="326" src="{{URL::asset('images/city_sz.jpg')}}">
                            <div class="rooms_intro city_top">
                                <span class="index_price">353<em class="bigFont">$</em></span>
                                <span class="room_name">Text Here</span>
                            </div>
                            <a href="#" class="room_hover"></a>
                        </li>         
                        <li>   
                            <img class="img_room city_big" src="{{URL::asset('images/city_qd_big.jpg')}}" width="820" height="326">
                            <div class="rooms_intro city_big">
                                <span class="room_name">Text Here</span><br>
                                <span class="index_price">793<em class="bigFont">$</em></span>
                            </div>
                            <a href="#" class="room_hover"></a>
                        </li>

                        <li class="nomargin">     
                            <img class="img_room" lazy_src="finish" alt="" width="400" height="326" src="{{URL::asset('images/18.jpg')}}">
                                <span class="img_upCover"></span>
                                <div class="rooms_intro">
                                    <img class="img_user_fd" lazy_src="finish" width="96" height="96" src="{{URL::asset('images/5.jpg')}}">
                                    <span class="room_name">Text Here</span>
                                    <span class="index_price"><em class="bigFont">¥</em>288</span>
                                </div>
                                <a href="#" class="room_hover"></a>
                        </li>                                                 
                        <li>     
                            <img class="img_room" lazy_src="finish" alt="" width="400" height="326" src="{{URL::asset('images/19.jpg')}}">
                            <span class="img_upCover"></span>
                            <div class="rooms_intro">
                                <img class="img_user_fd" lazy_src="finish" width="96" height="96" src="{{URL::asset('images/10.jpg')}}">
                                <span class="room_name">Text Here</span>
                                <span class="index_price"><em class="bigFont">¥</em>258</span>
                            </div>
                            <a href="#" class="room_hover"></a>
                        </li>                                                 
                        <li>     
                            <img class="img_room" lazy_src="finish" alt="" width="400" height="326" src="{{URL::asset('images/1.jpg')}}">
                            <span class="img_upCover"></span>
                            <div class="rooms_intro">
                                <img class="img_user_fd" lazy_src="finish" width="96" height="96" src="{{URL::asset('images/7.jpg')}}">
                                <span class="room_name">Text Here</span>
                                <span class="index_price"><em class="bigFont">¥</em>111</span>
                            </div>
                            <a href="#" class="room_hover"></a>
                        </li>                                                 
                        <li class="nomargin">         
                            <img class="img_room" lazy_src="finish" width="400" height="326" src="{{URL::asset('images/city_nj.jpg')}}">
                            <div class="rooms_intro city_top">
                                <span class="index_price">264<em class="bigFont">$</em></span>
                                <span class="room_name">Text Here</span>
                            </div>
                            <a href="#" class="room_hover"></a>
                        </li>
                        <li>
                            <img class="img_room" lazy_src="finish" alt="" width="400" height="326" src="{{URL::asset('images/3.jpg')}}">
                            <span class="img_upCover"></span>
                            <div class="rooms_intro">
                                <img class="img_user_fd" lazy_src="finish" width="96" height="96" src="{{URL::asset('images/2.jpg')}}">
                                <span class="room_name">Text Here</span>
                                <span class="index_price"><em class="bigFont">¥</em>1300</span>
                            </div>
                            <a href="#" class="room_hover"></a>
                        </li>
                        <li class="nomargin">
                            <img class="img_room city_big" src="{{URL::asset('images/city_cq_big.jpg')}}" width="820" height="326">
                                <div class="rooms_intro city_big">
                                    <span class="room_name">Text Here</span><br>
                                    <span class="index_price">485<em class="bigFont">$</em></span>
                                </div>
                                <a href="#" class="room_hover"></a>
                        </li>    
                    </ul>
                </div>
            </div>

            <div class="foot_v2">
                <span class="foot_T">Follow Us</span>
                <ul class="see_ul">
                    <li><a href="#" class="icon_wx indexdialogpic" name="focusus"></a></li>
                    <li><a href="#" class="icon_wb"></a></li>
                </ul>
                <ul class="foot_ul">
                    <li><a class="guide" href="#">Tenant</a></li>
                    <li><a class="guide icon_fk" href="#">Landlord</a></li>
                    <li>
                        <span class="guide_T">Links</span>
                        <a href="#">link1</a>
                        <a href="#">link2</a>
                    </li>
                    <li>
                        <span class="guide_T">Links</span>
                        <a href="#">link1</a>
                        <a href="#">link2</a> 
                    </li>
                    <li class="width_280">
                        <span class="guide_T">Links</span>
                            <br/>
                            <a href="#">link1</a> 
                            <a href="#">link2</a>
                            <a href="#">link3</a>
                            <a href="#">link4</a>
                            <br/>
                            <a href="#">link5</a>
                            <a href="#">link6</a>
                            <a href="#">link7</a>
                            <a href="#">link8</a>
                    </li>
                    <li class="width_100 bigFont">
                        <span class="guide_T">Phone</span><br/>
                            400  018  3100
                    </li>
                    <li class="width_100 bigFont">
                        <span class="guide_T">Text Here</span><br/>
                            abc@243242423.com
                    </li>
                </ul>
                <dl class="link_dl">
                    <dt>City</dt>
                    <dd>
                        <a target="#" href="#">City Name</a>
                        <a target="#" href="#">City Name</a>
                        <a target="#" href="#">City Name</a><a target="#" href="#">City Name</a>
                    </dd>
                </dl>
                <dl class="link_dl">
                    <dt>Navigator</dt>
                    <dd>
                        <a target="#" href="#">Navigator Name</a>
                        <a target="#" href="#">Navigator Name</a>
                        <a target="#" href="#">Navigator Name</a>
                    </dd>
                </dl>
                <div class="foot_btm">Some text here Some text here Some text here
                </div>
            </div>
        </div>
        
        <div class="modal" id="signUpModal" style="display: none;">
            <div class="modal-table">
                <div class="modal-cell"><div class="signup modal-content">
                        <div id="notice" class="alert panel-header alert-header alert-danger alert-error hidden-element"></div>
                        <div class="panel-padding panel-body">
                            <form accept-charset="UTF-8" action="/create" class="signup-form" data-action="Signup" id="user_new" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="V4$.airbnb.co.uk$i5GkOmioNK0$pezlmfZcqy2XZHkZtjBCPpWGT2SmWI2m-ODqmpq6BgI="></div>
                                <div class="signup-form-fields">

                                    <div class="control-group row-space-1" id="inputFirst">
                                        <input type="text" name="user[first_name]" placeholder="First name" class="decorative-input" value="">
                                    </div>
                                    <div class="control-group row-space-1" id="inputLast">
                                        <input type="text" name="user[last_name]" placeholder="Last name" class="decorative-input inspectletIgnore" value="">
                                    </div>
                                    <div class="control-group row-space-1" id="inputEmail">
                                        <input type="email" name="user[email]" placeholder="Email Address" class="decorative-input inspectletIgnore" value="">
                                    </div>
                                    <div class="control-group row-space-1" id="inputPassword">
                                        <input type="password" id="user_password" name="user[password]" placeholder="Password" class="decorative-input inspectletIgnore">
                                    </div>
                                    <div class="control-group row-space-1" id="inputConfirmPassword">
                                        <input type="password" name="user[password_confirmation]" placeholder="Confirm Password" class="decorative-input inspectletIgnore">
                                    </div>
                                    <label for="user_profile_info_receive_promotional_email" class="checkbox">
                                        <input name="user_profile_info[receive_promotional_email]" type="hidden" value="0">
                                        <input checked="checked" id="user_profile_info_receive_promotional_email" name="user_profile_info[receive_promotional_email]" type="checkbox" value="1">
                                        Tell me about AirRent news
                                    </label>

                                    <div class="row-space-2 row-space-top-2">
                                        <small>
                                            By signing up, I agree to AirRent's <a href="#" data-popup="true">Terms of Service</a>, <a href="#" data-popup="true">Privacy Policy</a>, <a href="#" data-popup="true">Guest Refund Policy</a>, and <a href="#" data-popup="true">Host Guarantee Terms</a>.
                                        </small>

                                    </div>
                                    <input id="is_in_header_view" name="is_in_header_view" type="hidden" value="true">
                                    <button type="submit" class="btn btn-primary btn-block btn-large large padded-btn-block">
                                        Sign up
                                    </button>
                                </div>
                            </form>
                            <div id="tos_outside" class="row-space-top-2 hide">
                                <small>
                                    By signing up, I agree to AirRent's <a href="#" data-popup="true">Terms of Service</a>, <a href="#" data-popup="true">Privacy Policy</a>, <a href="#" data-popup="true">Guest Refund Policy</a>, and <a href="#" data-popup="true">Host Guarantee Terms</a>.
                                </small>
                            </div>
                        </div>
                        <div class="panel-body">
                            Already an AirRent member?
                            <a href="javascript:void(0)" onclick="showLoginModal()">
                                Log in
                            </a></div>
                        <form accept-charset="UTF-8" action="/authenticate" class="hide hidden-element in_modal" id="facebook_form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="V4$.airbnb.co.uk$i5GkOmioNK0$pezlmfZcqy2XZHkZtjBCPpWGT2SmWI2m-ODqmpq6BgI="></div>
                        </form>
                        <div id="social-media-data" data-show-weibo-button="" data-show-facebook-button="true" data-show-google-button="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="modal" id="loginModal" style="display: none;">
            <div class="modal-table">
                <div class="modal-cell">
                    <div class="signup modal-content">
                        <div class="modal-header panel-header show-sm">
                            Log In
                            <a href="#" class="modal-close" data-behavior="modal-close"></a>
                        </div>
                        <div id="notice" class="alert panel-header alert-header alert-danger alert-error hidden-element"></div>
                        <div class="panel-padding panel-body">

                            <form accept-charset="UTF-8" action="/authenticate" class="signin-form login-form" data-action="Signin" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="V4$.airbnb.co.uk$8MSDgK_Dq48$ZnFLFDFXcLtXLwdWKKCGNyU28AG5xw310mLH_YFCvp8="></div>
                                <div class="control-group row-space-1">
                                    <input class="decorative-input inspectletIgnore" id="signin_email" name="email" placeholder="Email Address" type="email">
                                </div>
                                <div class="control-group row-space-2">
                                    <input class="decorative-input inspectletIgnore" id="signin_password" name="password" placeholder="Password" type="password">
                                </div>
                                <div class="clearfix row-space-2">
                                    <label for="remember_me2" class="checkbox remember-me">
                                        <input type="checkbox" name="remember_me" id="remember_me2" value="true" class="remember_me">
                                        Remember me
                                    </label>
                                    <a href="javascript:void(0)" onclick="showForgotModal()" class="forgot-password pull-right">Forgot password?</a>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary large btn-large padded-btn-block" id="user-login-btn">
                                    Log In
                                </button>
                            </form>
                            <hr>
                            <div class="text-left">
                                Don't have an account?
                                <a href="javascript:void(0)" onclick="showModalSignUp()">
                                    Sign up
                                </a>    </div>
                        </div>
                        <form accept-charset="UTF-8" action="/authenticate" class="hidden-element hide in_modal" id="facebook_form" method="post">
                            <div style="margin:0;padding:0;display:inline">
                                <input name="utf8" type="hidden" value="✓">
                                <input name="authenticity_token" type="hidden" value="V4$.airbnb.co.uk$8MSDgK_Dq48$ZnFLFDFXcLtXLwdWKKCGNyU28AG5xw310mLH_YFCvp8=">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal" id="resetModal" style="display:none;">
            <div class="modal-table">
                <div class="modal-cell">
                    <div class="signup modal-content">
                        <form accept-charset="UTF-8" action="/forgot_password" method="post">
                            <div style="margin:0;padding:0;display:inline">
                                <input name="utf8" type="hidden" value="✓">
                                <input name="authenticity_token" type="hidden" value="V4$.airbnb.co.uk$8MSDgK_Dq48$ZnFLFDFXcLtXLwdWKKCGNyU28AG5xw310mLH_YFCvp8="></div>
                            <div id="forgot_password_container">
                                <h3 class="panel-header panel-header-gray">
                                    Reset Password
                                </h3>
                                <div class="panel-padding panel-body">
                                    <p>Enter the email address associated with your account, and we'll email you a link to reset your password.</p>
                                    <div class="textInput text-input-container" id="inputEmail">
                                        <input class="decorative-input" id="forgot_email" name="email" placeholder="Email" type="email">
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-primary">
                                        Send Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>