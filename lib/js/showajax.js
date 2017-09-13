function showPackage(btn, package_name){

    var pkg = package_name;
    
    $('#show-'+btn).click(function(e){

        e.preventDefault();

        $.ajax({
            url: "lib/show_package.ajax.php",
            type: "GET",
            data: {
                package: pkg
            },
            beforeSend: function () {
               $('#search_result').html("<p class='text-center'><img class='verloader' src='lib/loading.gif'></p>");
                $("#search_title").html("Searching for " + $("#search_string").val() + "...");

            },
            success: function(response){
                $("#search_result").html(response);  
                $("#search_title").html("Search results for \"" + $("#search_string").val() + "\"");
            }, 
            error: function(xmlhttprequest, textstatus, message){

                var respmsg = null;

                if (message == 'Internal Server Error'){

                    respmsg = xmlhttprequest.status;

                } else {

                    respmsg = 'Other Error';
                }

                $("#search_result").html("<h4 class='text-center'>" + respmsg + "</h4>");  

            }
        })
    })
}