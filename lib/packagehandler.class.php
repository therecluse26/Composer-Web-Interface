<?php
/**
* Handler for managing Composer packages utilizing Packagist API
**/
require dirname(__DIR__) . '/vendor/autoload.php';

use GuzzleHttp\Client;

class PackageHandler 
{
    
    public $client;
    
    /**
    * Instantiates Guzzle client for HTTP requests
    **/
    function __construct() {
        
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://packagist.org/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
    }
    
    /**
    * Search for a Composer package
    **/
    public function search($search_method, $key, $per_page = 20) {
        
        //Packagist API request using Guzzle
        $response = json_decode($this->client->get('search.json?q='.$key.'&per_page='.$per_page)->getBody());
        
        $return_arr = array();
        
        //Formats array for cleanliness
        foreach($response as $result) {
            
            foreach ($result as $res) {
                
                array_push($return_arr, $res);
                
            }
            
        }
    
        return $return_arr;
        
    }
    
    /**
    * Shows info for a specific Composer package
    **/
    public function show($package) {
        
        
    }
    
    /**
    * Adds Composer package to composer.json file
    **/
    public function add($package) {
        
        
    }
    
    /**
    * Removes Composer package from composer.json file
    **/
    public function remove($package) {
        
        
    }
    
}