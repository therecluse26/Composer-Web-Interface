<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/components/bootstrap/css/bootstrap.min.css">
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="lib/js/showajax.js" type="text/javascript"></script>
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
                    
                <div class="input-group input-group-lg">
                    
                <input id="search_string" type="text" class="form-control" placeholder="Search for..." />

                <span class="input-group-btn">
                    <button class="btn btn-default" id="search_btn">Search</button>
                </span>

                <select id="search_number" class="form-control">
                    <option value="20">Results Per Page</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>

                </div><!-- /input-group -->
              
            <div id="search_result"></div>
            
        </div>
        <br>
        <script src="lib/js/searchajax.js" type="text/javascript"></script>
    </body>
</html>