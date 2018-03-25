$(document).ready(function () {
//        var firstname = $("#fname").val();
var fnamevalue = $("#first_name").val();
        $("#first_name").submit(function () {
            if(fnamevalue.length < 1){
                $("#first_name").addClass("animated shake");

            }else{
                $("#first_name").blur(function () {
                    $("#first_name").removeClass("animated shake");
                })
            }
        })









        // if(firstname.length < 1){
        //     $("#fname").blur(function () {
        //         $("#fname").addClass("animated shake");
        //     })
        // }else {
        //     $("#fname").blur(function () {
        //         $("#fname").removeClass("animated shake");
        //     })
        // }
    })
