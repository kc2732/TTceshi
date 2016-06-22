/**
 * Created by PC on 2016/6/21.
 */
$(function(){
    $("input[name=BloodPressure]").click(
        function () {
            switch ($("input[name=BloodPressure]:checked").attr("id")){
                case "BP1":
                    $(".BloodPressure").show();
                    break;
                case "BP2":
                    $(".BloodPressure").hide();
                    break;
            }
        }
    )

    $("input[name=DanGuChun]").click(
        function () {
            switch ($("input[name=DanGuChun]:checked").attr("id")){
                case "DGC1":
                    $(".DanGuChunShuJu").show();
                    break;
                case "DGC2":
                    $(".DanGuChunShuJu").hide();
                    break;
            }
        }
    )

    $("input[name=HuanBing]").click(
        function(){
            switch ($("input[name=HuanBing]").attr("id")){
                case "HBYes":
                    $(".Guanxi").show();
                    break;
                case "HBNo":
                    $(".Guanxi").hide();
            }
        }
    )

    $("input[name=FuXiongDi]").click(
        function () {
            if($("input[name=FuXiongDi]::checked")){
                $(".FXDAge").show();
            }else{
                $(".FXDAge").hide();
            }
        }
    )

    $("input[name=MuJieMei]").click(
        function () {
            if($("input[name=MuJieMei]::checked")){
                $(".MJMAge").show();
            }else{
                $(".MJMAge").hide();
            }
        }
    )


})
