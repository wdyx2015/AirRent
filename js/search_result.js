$(function(){
    $("#showMoreFilter").on("click",function(){
        var showTabs = $(".condition-hide");
        var hideTabs = $(".condition-show");
        showTabs.removeClass("condition-hide").addClass("condition-show");
        hideTabs.removeClass("condition-show").addClass("condition-hide");
    });
    $("#showLessFilter").on("click", function(){
        var showTabs = $(".condition-hide");
        var hideTabs = $(".condition-show");
        showTabs.removeClass("condition-hide").addClass("condition-show");
        hideTabs.removeClass("condition-show").addClass("condition-hide");
    });
    $("input[name='checkin']").datepicker();
    $("input[name='checkout']").datepicker();
    $("#sliderPrice").slider({
      values: [ 7, 500 ],
      min: 7,
      max: 500,
      range: true,
      slide: function( event, ui ) {
        $( "#text-min-price" ).html(ui.values[ 0 ]);
        $( "#text-max-price" ).html(ui.values[ 1 ]);
        if (ui.values[ 1 ] === 500)
          $("#text-max-price").append("+");
      }
    });
    
});