$(document).ready(function () {
    toastr.options = {        
        closeButton: true,
        newestOnTop: false,
        progressBar: true,
        positionClass: "toast-top-right",
        preventDuplicates: false,
        onclick: null,
        timeOut: 15000,
        extendedTimeOut: 0,
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
    };
});
function formModal(url) {
    $("#formModal .modal-body").html("Loading...");
    $("#formModal").modal("show");
    $.ajax({
        url: url,
        success: function (response) {
            $("#formModal .modal-body").html(response);
        },
    });
}
function largeModal(url, header) {
    $("#largeModal .modal-body").html("Loading...");
    $("#largeModal .modal-title").html("Loading...");
    $("#largeModal").modal("show");
    $.ajax({
        url: url,
        success: function (response) {
            $("#largeModal .modal-body").html(response);
            $("#largeModal .modal-title").html(header);
        },
    });
}
function smallModal(url, header) {
    $("#smallModal .modal-body").html("Loading...");
    $("#smallModal .modal-title").html("Loading...");
    $("#smallModal").modal("show");
    $.ajax({
        url: url,
        success: function (response) {
            $("#smallModal .modal-body").html(response);
            $("#smallModal .modal-title").html(header);
        },
    });
}
function confirmModal(delete_url, param) {
    $("#confirmModal").modal("show");
    callBackFunction = param;
    document.getElementById("delete_form").setAttribute("action", delete_url);
}
$(".ajaxDeleteForm").submit(function (e) {
    var form = $(this);
    ajaxSubmit(e, form, callBackFunction);
});
function closeModel() {}
function closeConfirmModel() {
    $("#confirmModal").modal("hide");
}
// function initValidate(selector) {
//     $(selector).validate({});
// }
function initValidate(selector) {
    console.log(selector);
    $(selector).validate({
        errorElement: "div",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        },
    });
}

function initSelect2(selector) {
    $(selector).select2();
}
function ajaxSubmit(e, form, callBackFunction) {
    if (form.valid()) {
        e.preventDefault();
        var btn = $(form).find('button[type="submit"]');
        var btn_text = $(btn).html();
        $(btn).html('<i class="fa fa-refresh fa-spin" aria-hidden="true"></i>');
        $(btn).css("opacity", "0.7");
        $(btn).css("pointer-events", "none");
        var action = form.attr("action");
        var form = e.target;
        var data = new FormData(form);
        $.ajax({
            type: "POST",
            url: action,
            processData: !1,
            contentType: !1,
            dataType: "json",
            data: data,
            success: function (response) {
                $(btn).html(btn_text);
                $(btn).css("opacity", "1");
                $(btn).css("pointer-events", "inherit");
                if (response.status) {
                    Command: toastr.success(response.notification, "Success");
                    callBackFunction(response);
                } else {
                    if (typeof response.notification === "object") {
                        var errors = "";
                        $.each(response.notification, function (key, msg) {
                            errors +=
                                "<div>" + (key + 1) + ". " + msg + "</div>";
                        });
                        Command: toastr.error(errors, "Alert");
                    } else {
                        Command: toastr.error(response.notification, "Alert");
                    }
                }
            },
        });
    } else {
        toastr.error("Please make sure to fill all the necessary fields");
    }
}
function initTrumbowyg(target) {
    $(target).trumbowyg({
        btnsDef: {
            image: { dropdown: ["insertImage", "upload"], ico: "insertImage" },
            heading: {
                dropdown: ["h1", "h2", "h3", "h4", "h5", "h6"],
                ico: "pencil",
            },
        },
        btns: [
            ["viewHTML"],
            ["formatting"],
            ["strong", "em", "del"],
            ["superscript", "subscript"],
            ["link"],
            ["image"],
            ["table"],
            ["justifyLeft", "justifyCenter", "justifyRight", "justifyFull"],
            ["unorderedList", "orderedList"],
            ["horizontalRule"],
            ["removeformat"],
            ["fullscreen"],
        ],
        plugins: {
            upload: {
                serverPath:
                    $("#baseUrl").attr("href") + "/backend/trumbowyg/upload",
                fileFieldName: "image",
                headers: {},
                urlPropertyName: "file",
            },
            resizimg: !0,
        },
    });
}
function destroyTrumbowyg(target) {
    $(target).trumbowyg("destroy");
}
// $(document).ready(function () {
//     initValidate("#add_footer_form");
//     $("#add_footer_form").submit(function (e) {
//         var form = $(this);
//         ajaxSubmit(e, form, responseHandler);
//     });
//     var responseHandler = function (response) {
//         $("input, textarea").val("");
//         $("select option:first").prop("selected", !0);
//         setTimeout(function () {
//             window.location.href = $("#baseUrl").attr("href") + "/thank-you";
//         }, 2000);
//     };
// });
// $(document).ready(function () {
//     initValidate("#add_contact_form");
//     $("#add_contact_form").submit(function (e) {
//         var form = $(this);
//         ajaxSubmit(e, form, responseHandler);
//     });
//     var responseHandler = function (response) {
//         $("input, textarea").val("");
//         $("select option:first").prop("selected", !0);
//         setTimeout(function () {
//             window.location.href = $("#baseUrl").attr("href") + "/thank-you";
//         }, 2000);
//     };
// });
$(document).ready(function () {
    initValidate("#add_newsletter_form");
    $("#add_newsletter_form").submit(function (e) {
        var form = $(this);
        ajaxSubmit(e, form, responseHandler);
    });
    var responseHandler = function (response) {
        $("input, textarea").val("");
        $("select option:first").prop("selected", !0);
        setTimeout(function () {
            window.location.href = $("#baseUrl").attr("href") + "/thank-you";
        }, 2000);
    };
});

