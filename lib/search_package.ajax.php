<?php
require "packagehandler.class.php";

$pkg = new PackageHandler;

$search = $_GET['q'];

if (!$_GET['per_page']) {
    $per_page = 20;
} else {
    $per_page = $_GET['per_page'];
}

if (!$_GET['search_type']) {
    $search_type = "name";
} else {
    $search_type = $_GET['search_type'];
}

$results = $pkg->search('query', $search, $per_page);

$composer_json = json_decode(file_get_contents('../composer.json'), true);

$i = 0;

if($results) {
    
    foreach($results as $result) {

        //Displays if package is installed or not
        if(array_key_exists($result->name, $composer_json['require'])) {
            $installed = true;
            $color = "green";
            $button = "<button id='uninstall-$i' class='btn btn-primary'>Uninstall</button>";
        } else {
            $installed = false;
            $color = "black";
            $button = "<button id='install-$i' class='btn btn-primary'>Install</button>";
        }

        echo "<div class='well'>
        <h3 id='$i-name' style='color:$color;margin-top:-2px;'>$result->name</h3>
        <div id='$i-description'>$result->description</div>
        <div id='$i-url'><a href='$result->url'>$result->url</a></div><br>
        <div id='$i-repo'><a href='$result->repository'>$result->repository</a></div><br>
        <div id='$i-downloads'>Downloads: $result->downloads</div>
        <div id='$i-favers'>Favers: $result->favers</div><br>
        $button 
        <button id='show-$i' class='btn btn-primary' onclick='showPackage(\"$i\", \"$result->name\");'>Show Details</button>
        </div><br>";

        $i++;                    
    }
    
} else {
    
    echo "<h4 class='text-center'>No packages found for \"$search\"</h4>";
    
}
