

$(document).ready(function() {
    $(".log-in").click(function() {
        console.log("Hello world!33");
        $(".signIn").addClass("active-dx");
        $(".signUp").addClass("inactive-sx");
        $(".signUp").removeClass("active-sx");
        $(".signIn").removeClass("inactive-dx");
    });

    $(".back").click(function() {
        console.log("Hello world!11");
        $(".signUp").addClass("active-sx");
        $(".signIn").addClass("inactive-dx");
        $(".signIn").removeClass("active-dx");
        $(".signUp").removeClass("inactive-sx");
    });
});