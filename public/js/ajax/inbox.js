var loginNameID = "#headerUserName";
var bannerNameID = "#conversationWidth";
var leftBarNameID = "#ownerName";
var topMessageID = "#thread-list-top-message";
var bottomMessageID = "#bottom-messages";

var originUser = null;
var desUser = null;
var topMessages = null;
var bottomMessages = null;
var ownerUser = null;


var restURL = "";

function buildRestURL()
{
    restURL = window.location.href.replace("/inbox/", "/rest/inbox/");
}

function setDataToHTML()
{
    //Load top message
    var strTopMessage = '';
    var tplLeftMessage = '<li class="thread-list-item" id="question2_post_336035933">\n\
                     <div class="row row-condensed">\n\
                        <div class="col-sm-2 col-md-1 text-center">\n\
                           <a href="#" class="media-photo media-round" data-behavior="tooltip" aria-label="Nguyen Huu"><img alt="Nguyen Huu" height="36" src="http://localhost/air-rent/public/images/temp.jpg" title="Nguyen Huu" width="36"></a>\n\
                           {{user_name}}\n\
                        </div>\n\
                        <div class="col-sm-10 ">\n\
                           <div class="row-space-4">\n\
                              <div class="panel panel-quote panel-quote-flush ">\n\
                                 <div class="panel-body">\n\
                                    <div class="message-text">\n\
                                       <p class="trans">{{content}}</p>\n\
                                    </div>\n\
                                 </div>\n\
                              </div>\n\
                              <div class="time-container text-muted ">\n\
                                 <small class="time" title="">\n\
                                 {{sent_date_str}}\n\
                                 </small>\n\
                                 <small class="exact-time hide">\n\
                                 </small>\n\
                              </div>\n\
                           </div>\n\
                        </div>\n\
                     </div>\n\
                  </li>';
    var tplRightMessage = '<li class="thread-list-item" id="question2_post_337316340">\n\
                    <div class="row row-condensed">\n\
                       <div class="col-sm-10 col-md-push-1">\n\
                          <div class="row-space-4">\n\
                             <div class="panel panel-quote panel-quote-flush panel-quote-right">\n\
                                <div class="panel-body">\n\
                                   <div class="flag-control pull-right">\n\
                                      <a href="#" id="flag-for-message-337316340" class="flag-trigger link-reset" data-behavior="tooltip" aria-label="Report this message">\n\
                                      <i class="icon icon-flag h4"></i>\n\
                                      </a>\n\
                                      <div class="modal flag-modal" role="dialog" data-trigger="#flag-for-message-337316340" aria-hidden="true">\n\
                                         <div class="modal-table">\n\
                                            <div class="modal-cell">\n\
                                               <div class="modal-content">\n\
                                                  <form accept-charset="UTF-8" action="/user_flags" class="new_user_flag" id="new_user_flag" method="post">\n\
                                                     <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="V4$.airbnb.co.uk$t_Vx4Rp0zw0$PYduk9H4PtEeLxnnkottrZ9arXpyhmCz9KujIApuCpk="></div>\n\
                                                     <div class="panel-header main-header">\n\
                                                        <a href="#" class="modal-close" data-behavior="modal-close"></a>\n\
                                                        Do you want to anonymously report this message?\n\
                                                     </div>\n\
                                                     <div class="panel-header thanks-header hide">\n\
                                                        Thank You!\n\
                                                     </div>\n\
                                                     <div class="panel-body flag-form">\n\
                                                        If so, please choose one of the following reasons and\n\
                                                        our dedicated Trust and Safety team will look into it.<br><br>\n\
                                                        <ul class="list-unstyled">\n\
                                                           <li class="row-space-2">\n\
                                                              <a href="#" class="flag-reasons btn btn-large btn-block\n\
                                                                 " data-reason-id="Attempt to pay or communicate outside Airbnb">Attempt to pay or communicate outside Airbnb <i class="icon icon-question flag-question h5" data-behavior="tooltip" data-position="right" aria-label="This person is attempting to share or request contact info before an\n\
                                                                 accepted reservation."></i></a>\n\
                                                           </li>\n\
                                                           <li class="row-space-2">\n\
                                                              <a href="#" class="flag-reasons btn btn-large btn-block\n\
                                                                 " data-reason-id="Solicitation for another website">Solicitation for another website <i class="icon icon-question flag-question h5" data-behavior="tooltip" data-position="right" aria-label="This message links to a website unaffiliated with Airbnb."></i></a>\n\
                                                           </li>\n\
                                                           <li class="row-space-2">\n\
                                                              <a href="#" class="flag-reasons btn btn-large btn-block\n\
                                                                 " data-reason-id="Inappropriate content">Inappropriate content <i class="icon icon-question flag-question h5" data-behavior="tooltip" data-position="right" aria-label="This message contains violent, graphic, or otherwise offensive content."></i></a>\n\
                                                           </li>\n\
                                                           <li class="row-space-2 other">\n\
                                                              <a href="#" class="flag-reasons btn btn-large btn-block\n\
                                                                 row-space-2" data-reason-id="Other">Other <i class="icon icon-question flag-question h5" data-behavior="tooltip" data-position="right" aria-label="None of the above reasons apply."></i></a>\n\
                                                              <div class="other-container hide">\n\
                                                                 <textarea class="row-space-2" cols="40" id="user_flag_other_note" name="user_flag[other_note]" placeholder="Please describe a reason" required="required" rows="3"></textarea>\n\
                                                              </div>\n\
                                                           </li>\n\
                                                        </ul>\n\
                                                        <input id="user_flag_flaggable_type" name="user_flag[flaggable_type]" type="hidden" value="message">\n\
                                                        <input id="user_flag_flaggable_id" name="user_flag[flaggable_id]" type="hidden" value="337316340">\n\
                                                        <input id="user_flag_name" name="user_flag[name]" type="hidden">\n\
                                                        <input id="user_flag_id" name="user_flag[id]" type="hidden">\n\
                                                     </div>\n\
                                                     <div class="panel-body flag-thank-you hide">\n\
                                                        <p>\n\
                                                           Thanks for taking the time to report this message.\n\
                                                           Your participation helps keep Airbnb a safe and trusted\n\
                                                           community, and it doesn"t go unnoticed!\n\
                                                        </p>\n\
                                                        <a href="#" class="btn btn-small btn-block">Close</a>\n\
                                                     </div>\n\
                                                     <div class="panel-footer hide">\n\
                                                        <input class="btn btn-primary btn-large" id="user_flag_submit" name="commit" type="submit" value="Submit">\n\
                                                     </div>\n\
                                                  </form>\n\
                                               </div>\n\
                                            </div>\n\
                                         </div>\n\
                                      </div>\n\
                                   </div>\n\
                                   <div class="already-flagged text-muted  hide">\n\
                                      You have reported this message.\n\
                                      <a href="#" class="show-message hide">Show Message</a><a href="#" class="hide-message hide">Hide Message</a> or <a href="#" class="undo_flag">Undo?</a>\n\
                                   </div>\n\
                                   <div class="message-text">\n\
                                      <p class="trans">{{content}}</p>\n\
                                   </div>\n\
                                </div>\n\
                             </div>\n\
                             <div class="time-container text-muted text-right">\n\
                                <small class="time" title="">\n\
                                {{sent_date_str}}\n\
                                </small>\n\
                                <small class="exact-time hide">\n\
                                </small>\n\
                             </div>\n\
                          </div>\n\
                       </div>\n\
                       <div class="col-sm-2 col-md-1 col-md-push-1 text-center">\n\
                          <a href="/users/show/27255417" class="media-photo media-round" data-behavior="tooltip" aria-label="Qui"><img alt="Qui" height="36" src="https://a1.muscache.com/defaults/user_pic-36x36.png?v=2" title="Qui" width="36"></a>\n\
                          {{user_name}}\n\
                       </div>\n\
                    </div>\n\
                 </li>';
    
    for (var i = 0; i < topMessages.length; i++)
    {
        var message = topMessages[i];
        strTopMessage += Mustache.to_html(tplLeftMessage, message);
    }
    $(topMessageID).empty().append(strTopMessage);

    //Load bottom message
    var strBottomMessage = '';
    for (var i = 0; i < bottomMessages.length; i++)
    {
        var message = bottomMessages[i];
        if (message['main_user'] == 1)
        {
            strBottomMessage += Mustache.to_html(tplLeftMessage, message);
        }
        else
        {
            strBottomMessage += Mustache.to_html(tplRightMessage, message);
        }
    }
    $(bottomMessageID).empty().append(strBottomMessage);

    //For the login name
    $(loginNameID).empty().append(originUser["user_name"]);

    //For banner Name
    var bannerTpl = "Conversation with {{user_name}}";
    $(bannerNameID).empty().append(Mustache.to_html(bannerTpl, desUser));

    //For left bar Name
    $(leftBarNameID).empty().append(originUser["user_name"]);
}

function ajaxGetData()
{
    document.getElementById("gspinner").style.display = "block";
    $.ajax({
        type: "GET",
        url: restURL,
        dataType: "json"    })
            .done(function(data) {
                if (data.code == "200" || data.code == 200)
                {
                    originUser = data.data.originUser;
                    desUser = data.data.desUser;
                    topMessages = data.data.topMessages;
                    bottomMessages = data.data.bottomMessages;
                    ownerUser = data.data.ownerUser;
                    setDataToHTML();
                }
                else
                {
                    alert(data.message);
                }
                document.getElementById("gspinner").style.display = "none";
            })
            .fail(function(jqXHR, textStatus) {
                alert("Request failed: " + textStatus);
                document.getElementById("gspinner").style.display = "none";
            });
}

function ajaxPostData()
{
    var text = document.getElementById("message_inquiry").value;
    if ($.trim(text) == "")
    {
        alert("Empty content!");
        return;
    }
    document.getElementById("gspinner").style.display = "block";
    $("#buttonSend").attr("disabled", "disabled");
    $.ajax({
        type: "POST",
        url: restURL,
        dataType: "json",
        data: {dataType: "json", content: text}
    })
            .done(function(data) {
                if (data.code == "202" || data.code == 202)
                {
                    originUser = data.data.originUser;
                    desUser = data.data.desUser;
                    topMessages = data.data.topMessages;
                    bottomMessages = data.data.bottomMessages;
                    ownerUser = data.data.ownerUser;
                    setDataToHTML();
                    document.getElementById("message_inquiry").value = "";
                    alert("Saved Successfully");
                }
                $("#buttonSend").removeAttr("disabled");
                document.getElementById("gspinner").style.display = "none";
            })
            .fail(function(jqXHR, textStatus) {
                alert("Request failed: " + textStatus);
                $("#buttonSend").removeAttr("disabled");
                document.getElementById("gspinner").style.display = "none";
            });
}

$(function() {
    buildRestURL();
    ajaxGetData();
});