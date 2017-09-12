$(document).ready(function(){

    $("#search_form").submit(function(e){

        e.preventDefault();

        $.ajax({
            url: "lib/search_package.ajax.php",
            type: "GET",
            data: {
                q: $("#search_string").val(),
                per_page: $("#search_number").val()
            },
            beforeSend: function () {
               $('#search_result').html("<p class='text-center'><img class='verloader' src='lib/loading.gif'></p>");
            },
            success: function(response){
                $("#search_result").html(response);  
                $("#search_title").html("Search for \"" + $("#search_string").val() + "\"");
            }, 
            error: function(xmlhttprequest, textstatus, message){

                var respmsg = null;

                if (message == 'Internal Server Error'){

                    respmsg = 'Server timeout, please try again';

                } else {

                    respmsg = 'Other Error';
                }

                    $("#search_result").html("<h4 class='text-center'>" + respmsg + "</h4>");  

            }
        })
    })
})