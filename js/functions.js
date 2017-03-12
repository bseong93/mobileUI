function contentHeight() {
    var screen = $.mobile.getScreenHeight(),
        header = $(".ui-header").hasClass("ui-header-fixed") ? $(".ui-header").outerHeight() - 1 : $(".ui-header").outerHeight(),
        footer = $(".ui-footer").hasClass("ui-footer-fixed") ? $(".ui-footer").outerHeight() - 1 : $(".ui-footer").outerHeight(),
        /* content div has padding of 1em = 16px (32px top+bottom). This step
   can be skipped by subtracting 32px from content var directly. */
        contentCurrent = $(".ui-content").outerHeight() - $(".ui-content").height(),
        content = screen - header - footer - contentCurrent;
    /* apply result */
    $(".ui-content").height(content);
}


$(document).ready(function(){
	$('#refresh_btn').click(function(){
		location.reload();
	});
    $('#home_icon').click(function(){
        location.replace('main.php');
    });
});


$(document).on("pagecontainertransition", contentHeight);
//pageone
$(document).on("pagecreate","#pageone",function(){
    $("#pageone").on("swipeleft",function(){
        location.replace("onoff.php");
    }); 
    $("#pageone").on("swiperight",function(){
        location.replace("alarm.php");
    });                       
});
//pagetwo
$(document).on("pagecreate","#pagetwo",function(){
    $("#pagetwo").on("swipeleft",function(){
        location.replace("alarm.php");
    }); 
    $("#pagetwo").on("swiperight",function(){
        location.replace("main.php");
    });                       
});
//pagethree
$(document).on("pagecreate","#pagethree",function(){
    $("#pagethree").on("swipeleft",function(){
        location.replace("main.php");
    }); 
    $("#pagethree").on("swiperight",function(){
        location.replace("onoff.php");
    });                       
});
//
$(window).on("throttledresize orientationchange", contentHeight);
$(document).delegate(".ui-content", "scrollstart", false);