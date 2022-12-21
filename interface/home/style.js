$( "#login-open" ).click(function() {
    $("#login").css("display", "block");
    $(".auth-form-header-in").css("display", "none");

});

$( "#login-close" ).click(function() {
    $("#login").css("display", "none");
});

$ (".modal-overlay").click (function() {
    $("#login").css("display","none");
});




