<?php

//echo file_get_contents("https://5f27781bf5d27e001612e057.mockapi.io/webprovise/travels");

//echo file_get_contents("https://5f27781bf5d27e001612e057.mockapi.io/webprovise/companies");

$jsondata = file_get_contents("companies.json");

// Decode JSON data to PHP associative array
$json = json_decode($jsondata, true);

$output = "<ul>";

//Dynamically generating rows & columns
foreach ($json ['companies'] as $companies)
{
    $output .= "<h4>" . $companies['id']."</h4>";
    $output .= "<li>" . $companies['createdAt']."</li>";
    $output .= "<li>" . $companies['name']."</li>";
    $output .= "<li>" . $companies['parentId']."</li>";
   
}
    
//end tag of table
$output .= "</ul>";
echo $output;

?>