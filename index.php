<?php
require "lib/packagehandler.class.php";

$pkg = new PackageHandler;

$search = $_GET['q'];

if (!$_GET['per_page']) {
    $per_page = 20;
} else {
    $per_page = $_GET['per_page'];
}

$results = $pkg->search('query', $search, $per_page);

$composer_json = json_decode(file_get_contents('composer.json'), true);

echo file_get_contents('composer.json', true);

echo "<br><br>";

echo json_encode($composer_json);

?>

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
        
            <h1 class="text-center">Results for <?php echo '"'.ucfirst($search).'"'; ?></h1>

            <?php
                $i = 0;
                        
                foreach($results as $result) {
                        
                    //Displays if package is installed or not
                    if(array_key_exists($result->name, $composer_json['require'])) {
                        $installed = true;
                        $color = "green";
                        $button = "<button id='uninstall' class='btn btn-primary'>Uninstall</button>";
                    } else {
                        $installed = false;
                        $color = "red";
                        $button = "<button id='install' class='btn btn-primary'>Install</button>";
                    }
                    
                        echo "<div class='well'>
                        <h3 id='$i-name' style='color:$color;'>$result->name</h3>
                        <div id='$i-description'>$result->description</div>
                        <div id='$i-url'><a href='$result->url'>$result->url</a></div><br>
                        <div id='$i-downloads'>Downloads: $result->downloads</div>
                        <div id='$i-favers'>Favers: $result->favers</div><br>
                        $button
                        </div><br>";
                        
                        $i++;                    
                }
            
            ?>
        </div>
    </body>
</html>