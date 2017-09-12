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
                <form id="search_form">

                <div class="input-group">
                  <input id="search_string" type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <submit class="btn btn-default" id="search_btn" type="button">Go!</submit>
                  </span>
                </div><!-- /input-group -->
                                        </form>

              </div><!-- /.col-lg-6 -->
            <br>
            
            <div id="search_result">
            
            </div>


        <script src="lib/js/searchajax.js" type="text/javascript"></script>
    </body>
</html>