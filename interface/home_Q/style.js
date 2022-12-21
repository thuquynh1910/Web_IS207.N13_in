$( "#login-open" ).click(function() {
    $(".modal").css("display", "block");
    $(".auth-form-header-in").css("display", "none");

});

$( "#login-close" ).click(function() {
    $(".modal").css("display", "none");
});

$ (".modal-overlay").click (function() {
    $(".modal").css("display","none");
});

$( "#login-open" ).click(function() {
    $("#log-open").css("display", "none");
});