<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/components/bootstrap/css/bootstrap.min.css">
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="vendor/components/bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            background-color:#fafafa;
        }
        
    </style>
    </head>

    <body>
        <div id="container" class="container">
        
            <h2 id="search_title" class="text-center">Find a Composer Package</h2>
                <form id="search_form">
                <div class="input-group">
                  <input id="search_string" type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <submit class="btn btn-default" id="search_btn" type="button">Search</submit>
                  </span>
                </div><!-- /input-group -->
                </form>
              
            
            <div id="search_result">
            </div>
        </div><!-- /.col-lg-6 -->
        <br>
        <script src="lib/js/searchajax.js" type="text/javascript"></script>
    </body>
</html>