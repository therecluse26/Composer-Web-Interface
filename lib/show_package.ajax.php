<?php
require "packagehandler.class.php";

$pkg = new PackageHandler;

$package_details = $pkg->show($_GET['package']);

if($package_details) {
 
    print_r( $package_details );
    
} else {
    
    echo "<h4 class='text-center'>Could not pull package details</h4>";
    
}
