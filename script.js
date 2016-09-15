/**
 * Created by PC on 2016/6/5.
 */
$(document).ready(function () {
    $("#show-sign-in").click(function () {
        $("#sign-in-main").show();
        $("#sign-up-main").hide();
    });
    $("#show-sign-up").click(function(){
        $("#sign-in-main").hide();
        $("#sign-up-main").show();
    });

})

function showCont(){
    switch($("input[name=question8]:checked").attr("id")){
        case "question81":
            //alert("one");
            $(".question81").show();
            $(".question82").hide();
            break;
        case "question82":
            $(".question82").show();
            $(".question81").hide();
            break;
        default:
            break;
    }
    switch($("input[name=question10]:checked").attr("id")){
        case "question101":
            //alert("one");
            $(".question101").show();
            $(".question102").hide();
            break;
        case "question102":
            $(".question102").show();
            $(".question101").hide();
            break;
        default:
            break;
    }
    switch($("input[name=question11]:checked").attr("id")){
        case "question11":
            //alert("one");
            $(".question111").show();
            break;
        case "question12":
            $(".question112").show();
            break;
        default:
            break;
    }
    switch($("input[name=question11]:not(:checked)").attr("id")){
        case "question11":
            //alert("one");
            $(".question111").hide();
            break;

        default:
            break;
    }

    switch($("input[name=question12]:checked").attr("id")){
        case "question12":
            $(".question112").show();
            break;
        default:
            break;
    }
    switch($("input[name=question12]:not(:checked)").attr("id")){

        case "question12":
            $(".question112").hide();
            break;
        default:
            break;
    }

    switch($("input[name=question14]:checked").attr("id")){
        case "question141":
            //alert("one");
            $(".question141").show();
            $(".question142").hide();
            break;
        case "question142":
            $(".question142").show();
            $(".question141").hide();
            break;
        default:
            break;
    }
    switch($("input[name=question15]:checked").attr("id")){
        case "question15":
            $(".question151").show();
            break;
        default:
            break;
    }
    switch($("input[name=question15]:not(:checked)").attr("id")){
        case "question15":
            $(".question151").hide();
            break;
        default:
            break;
    }
    switch($("input[name=question16]:checked").attr("id")){
        case "question16":
            $(".question152").show();
            break;
        default:
            break;
    }
    switch($("input[name=question16]:not(:checked)").attr("id")){

        case "question16":
            $(".question152").hide();
            break;
        default:
            break;
    }

    switch($("input[name=question18]:checked").attr("id")){
        case "question181":
            //alert("one");
            $(".question181").show();
            $(".question182").hide();
            break;
        case "question182":
            $(".question182").show();
            $(".question181").hide();
            break;
        default:
            break;
    }
    switch($("input[name=question19]:checked").attr("id")){
        case "question19":
            $(".question191").show();
            break;
        default:
            break;
    }
    switch($("input[name=question19]:not(:checked)").attr("id")){
        case "question19":
            $(".question191").hide();
            break;
        default:
            break;
    }
    switch($("input[name=question20]:checked").attr("id")){
        case "question20":
            $(".question192").show();
            break;
        default:
            break;
    }
    switch($("input[name=question20]:not(:checked)").attr("id")){

        case "question20":
            $(".question192").hide();
            break;
        default:
            break;
    }


    switch($("input[name=question22]:checked").attr("id")){
        case "question221":
            //alert("one");
            $(".question221").show();
            $(".question222").hide();
            break;
        case "question222":
            $(".question222").show();
            $(".question221").hide();
            break;
        default:
            break;
    }
    switch($("input[name=question23]:checked").attr("id")){
        case "question23":
            $(".question231").show();
            break;
        default:
            break;
    }
    switch($("input[name=question23]:not(:checked)").attr("id")){
        case "question23":
            $(".question231").hide();
            break;
        default:
            break;
    }
    switch($("input[name=question24]:checked").attr("id")){
        case "question24":
            $(".question232").show();
            break;
        default:
            break;
    }
    switch($("input[name=question24]:not(:checked)").attr("id")){

        case "question24":
            $(".question232").hide();
            break;
        default:
            break;
    }


    switch($("input[name=question26]:checked").attr("id")){
        case "question261":
            //alert("one");
            $(".question261").show();
            $(".question262").hide();
            break;
        case "question262":
            $(".question262").show();
            $(".question261").hide();
            break;
        default:
            break;
    }
    switch($("input[name=question27]:checked").attr("id")){
        case "question27":
            $(".question271").show();
            break;
        default:
            break;
    }
    switch($("input[name=question27]:not(:checked)").attr("id")){
        case "question27":
            $(".question271").hide();
            break;
        default:
            break;
    }
    switch($("input[name=question28]:checked").attr("id")){
        case "question28":
            $(".question272").show();
            break;
        default:
            break;
    }
    switch($("input[name=question28]:not(:checked)").attr("id")){

        case "question28":
            $(".question272").hide();
            break;
        default:
            break;
    }


    switch($("input[name=question30]:checked").attr("id")){
        case "question301":
            //alert("one");
            $(".question301").show();
            $(".question302").hide();
            break;
        case "question302":
            $(".question302").show();
            $(".question301").hide();
            break;
        default:
            break;
    }
    switch($("input[name=question31]:checked").attr("id")){
        case "question31":
            $(".question311").show();
            break;
        default:
            break;
    }
    switch($("input[name=question31]:not(:checked)").attr("id")){
        case "question31":
            $(".question311").hide();
            break;
        default:
            break;
    }
    switch($("input[name=question32]:checked").attr("id")){
        case "question32":
            $(".question312").show();
            break;
        default:
            break;
    }
    switch($("input[name=question32]:not(:checked)").attr("id")){

        case "question32":
            $(".question312").hide();
            break;
        default:
            break;
    }


    switch($("input[name=question34]:checked").attr("id")){
        case "question341":
            //alert("one");
            $(".question341").show();
            $(".question342").hide();
            break;
        case "question342":
            $(".question342").show();
            $(".question341").hide();
            break;
        default:
            break;
    }
    switch($("input[name=question35]:checked").attr("id")){
        case "question35":
            $(".question351").show();
            break;
        default:
            break;
    }
    switch($("input[name=question35]:not(:checked)").attr("id")){
        case "question35":
            $(".question351").hide();
            break;
        default:
            break;
    }
    switch($("input[name=question36]:checked").attr("id")){
        case "question36":
            $(".question352").show();
            break;
        default:
            break;
    }
    switch($("input[name=question36]:not(:checked)").attr("id")){

        case "question36":
            $(".question352").hide();
            break;
        default:
            break;
    }

    switch($("input[name=question38]:checked").attr("id")){
        case "question381":
            //alert("one");
            $(".question381").show();
            $(".question382").hide();
            break;
        case "question382":
            $(".question382").show();
            $(".question381").hide();
            break;
        default:
            break;
    }

    switch($("input[name=question61]:checked").attr("id")){
        case "question611":
            //alert("one");
            $(".question611").show();
            $(".question612").hide();
            break;
        case "question612":
            $(".question612").show();
            $(".question611").hide();
            break;
        default:
            break;
    }

    switch($("input[name=question67]:checked").attr("id")){
        case "question671":
            //alert("one");
            $(".question671").show();
            $(".question672").hide();
            break;
        case "question672":
            $(".question672").show();
            $(".question671").hide();
            break;
        default:
            break;
    }

    switch($("input[name=question71]:checked").attr("id")){
        case "question711":
            //alert("one");
            $(".question711").show();
            $(".question712").hide();
            break;
        case "question712":
            $(".question712").show();
            $(".question711").hide();
            break;
        default:
            break;
    }

    switch($("input[name=question79]:checked").attr("id")){
        case "question791":
            //alert("one");
            $(".question791").show();
            $(".question792").hide();
            break;
        case "question792":
            $(".question792").show();
            $(".question791").hide();
            break;
        default:
            break;
    }

    switch($("input[name=question84]:checked").attr("id")){
        case "question841":
            //alert("one");
            $(".question841").show();
            $(".question842").hide();
            break;
        case "question842":
            $(".question842").show();
            $(".question841").hide();
            break;
        default:
            break;
    }

    switch($("input[name=question90]:checked").attr("id")){
        case "question901":
            //alert("one");
            $(".question901").show();
            $(".question902").hide();
            break;
        case "question902":
            $(".question902").show();
            $(".question901").hide();
            break;
        default:
            break;
    }

    switch($("input[name=question92]:checked").attr("id")){
        case "question921":
            //alert("one");
            $(".question921").show();
            $(".question922").hide();
            break;
        case "question922":
            $(".question922").show();
            $(".question921").hide();
            break;
        default:
            break;
    }

    switch($("input[name=question93]:checked").attr("id")){
        case "question931":
            //alert("one");
            $(".question931").show();
            $(".question932").hide();
            break;
        case "question932":
            $(".question932").show();
            $(".question931").hide();
            break;
        default:
            break;
    }

    switch($("input[name=question96]:checked").attr("id")){
        case "question961":
            //alert("one");
            $(".question961").show();
            $(".question962").hide();
            break;
        case "question962":
            $(".question962").show();
            $(".question961").hide();
            break;
        default:
            break;
    }

    switch($("input[name=question100]:checked").attr("id")){
        case "question1001":
            //alert("one");
            $(".question1001").show();
            $(".question1002").hide();
            break;
        case "question1002":
            $(".question1002").show();
            $(".question1001").hide();
            break;
        default:
            break;
    }

    switch($("input[name=question104]:checked").attr("id")){
        case "question1041":
            //alert("one");
            $(".question1041").show();
            $(".question1042").hide();
            break;
        case "question1042":
            $(".question1042").show();
            $(".question1041").hide();
            break;
        default:
            break;
    }

    switch($("input[name=question107]:checked").attr("id")){
        case "question1071":
            //alert("one");
            $(".question1071").show();
            $(".question1072").hide();
            break;
        case "question1072":
            $(".question1072").show();
            $(".question1071").hide();
            break;
        default:
            break;
    }

    switch($("input[name=question109]:checked").attr("id")){
        case "question1091":
            //alert("one");
            $(".question1091").show();
            $(".question1092").hide();
            break;
        case "question1092":
            $(".question1092").show();
            $(".question1091").hide();
            break;
        default:
            break;
    }

    switch($("input[name=question114]:checked").attr("id")){
        case "question1141":
            //alert("one");
            $(".question1141").show();
            $(".question1142").hide();
            break;
        case "question1142":
            $(".question1142").show();
            $(".question1141").hide();
            break;
        default:
            break;
    }
}
$(function(){
    //showCont();
    $("input[name=question8]").click(function(){
        showCont();
    });
    $("input[name=question10]").click(function(){
        showCont();
    });
    $("input[name=question11]").click(function(){
        showCont();
    });
    $("input[name=question12]").click(function(){
        showCont();
    });
    $("input[name=question14]").click(function(){
        showCont();
    });
    $("input[name=question15]").click(function(){
        showCont();
    });
    $("input[name=question16]").click(function(){
        showCont();
    });

    $("input[name=question18]").click(function(){
        showCont();
    });
    $("input[name=question19]").click(function(){
        showCont();
    });
    $("input[name=question20]").click(function(){
        showCont();
    });

    $("input[name=question22]").click(function(){
        showCont();
    });
    $("input[name=question23]").click(function(){
        showCont();
    });
    $("input[name=question24]").click(function(){
        showCont();
    });

    $("input[name=question26]").click(function(){
        showCont();
    });
    $("input[name=question27]").click(function(){
        showCont();
    });
    $("input[name=question28]").click(function(){
        showCont();
    });

    $("input[name=question30]").click(function(){
        showCont();
    });
    $("input[name=question31]").click(function(){
        showCont();
    });
    $("input[name=question32]").click(function(){
        showCont();
    });

    $("input[name=question34]").click(function(){
        showCont();
    });
    $("input[name=question35]").click(function(){
        showCont();
    });
    $("input[name=question36]").click(function(){
        showCont();
    });
    $("input[name=question38]").click(function(){
        showCont();
    });
    $("input[name=question61]").click(function(){
        showCont();
    });

    $("input[name=question67]").click(function(){
        showCont();
    });
    $("input[name=question71]").click(function(){
        showCont();
    });

    $("input[name=question79]").click(function(){
        showCont();
    });
    $("input[name=question84]").click(function(){
        showCont();
    });

    $("input[name=question90]").click(function(){
        showCont();
    });
    $("input[name=question92]").click(function(){
        showCont();
    });

    $("input[name=question93]").click(function(){
        showCont();
    });
    $("input[name=question96]").click(function(){
        showCont();
    });

    $("input[name=question100]").click(function(){
        showCont();
    });
    $("input[name=question104]").click(function(){
        showCont();
    });
    $("input[name=question107]").click(function(){
        showCont();
    });
    $("input[name=question109]").click(function(){
        showCont();
    });
    $("input[name=question114]").click(function(){
        showCont();
    });

});

$(document).ready(function () {
    $("form").validate({
        focusInvalid: false
    });

});




