/**
 * Created by PC on 2016/6/5.
 */
$(document).ready(function () {
    $("#show-sign-in").click(function () {
        $("#sign-in-main").show();
        $("#sign-up-main").hide();
    })
    $("#show-sign-up").click(function(){
        $("#sign-in-main").hide();
        $("#sign-up-main").show();
    })
})