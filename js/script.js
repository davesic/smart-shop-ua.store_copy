$(document).on("click", "a[modal]", function() {

    var modalWindow = $("div#" + $(this).attr("modal"));
    if (modalWindow.length) {
        modalShow(modalWindow);
        return false;
    }
}).on("click", ".icon-close, .callbackHunter_Popup-Modal, .button-close", function(event) {
    if (event.target != this) {
        return false;
    } else {
        modalHide($(this).closest(".callbackHunter_Popup-Modal"));
    }
}).on("keydown", function(key) {
    if (key.keyCode == 27) {
        modalHide($(".callbackHunter_Popup-Modal:visible:last"));
    }
}).on("click", ".callbackHunter_Popup-Modal > *", function(event) {
    event.stopPropagation();
    return true;
}).ready(function() {
    //console.log(cbkr_popup);
    setTimeout(function() {
        $('#cbkr').show();
        $(window).on("mouseout", function(event) {
            if (event.pageY - $(window).scrollTop() < 1 && cbkr_popup != 0) {
                // cbkr_popup = false;
                // $("a[modal=cbkr_form]").trigger("click");
                modalShow($('#cbkr_form'));
            }
        });
    }, 2000);
});

function modalHide($modal) {
    $modal.fadeOut("fast", function() {
        if (!$(".callbackHunter_Popup-Modal:visible").length) {
            $("body").removeClass("modal-show");
        }
    });
}

function modalRefresh() {
    if ($(".callbackHunter_Popup-Modal:visible:last").length) {
        var modalBlock = $(".callbackHunter_Popup-Modal:visible:last .callbackHunter_Popup-Modal-block"),
            width = parseInt(modalBlock.width()),
            height = parseInt(modalBlock.height());
        if ($(window).height() > height + 20) {
            modalBlock.addClass("modal-top").removeClass("margin-t-b").css("margin-top", -1 * (height / 2));
        } else {
            modalBlock.addClass("margin-t-b").removeClass("modal-top");
        }
        if ($(window).width() > width) {
            modalBlock.addClass("modal-left").removeClass("margin-l").css("margin-left", -1 * (width / 2));
        } else {
            modalBlock.addClass("margin-l").removeClass("modal-left");
        }
    }
}

function modalShow($modal) {
    $modal.fadeIn("fast");
    $("body").addClass("modal-show");
    modalRefresh();
}