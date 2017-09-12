<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/components/bootstrap/css/bootstrap.min.css">
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="vendor/components/bootstrap/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div id="container" class="container">
        
            <h2 id="search_title" class="text-center">Search</h2>
            <div class="">
                <div class="input-group text-center">
                <form id="search_form">
                  <input id="search_string" type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <submit class="btn btn-default" id="search_btn" type="button">Go!</submit>
                  </span>
                    </form>
                </div><!-- /input-group -->
              </div><!-- /.col-lg-6 -->
            <br>
            
            <div id="search_result">
            
            </div>


        </div>
        <script type="text/javascript">
        
            $(document).ready(function(){
                
                $("#search_form").submit(function(e){
                    
                    e.preventDefault();
                    
                    $.ajax({
                        url: "lib/search_package.ajax.php",
                        type: "GET",
                        data: {
                            q: $("#search_string").val(),
                            per_page: 100
                        },
                        beforeSend: function () {
                           $('#search_result').html("<p class='text-center'><img class='verloader' src='lib/loading.gif'></p>");
                        },
                        success: function(response){
                            $("#search_result").html(response);  
                            $("#search_title").html("Search for \"" + $("#search_string").val() + "\"");
                        }
                        
                    })
                    
                })
                
            })
            
        </script>
    </body>
</html>