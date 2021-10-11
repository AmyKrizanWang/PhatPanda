<?php

//echo file_get_contents("https://5f27781bf5d27e001612e057.mockapi.io/webprovise/travels");

//echo file_get_contents("https://5f27781bf5d27e001612e057.mockapi.io/webprovise/companies");

$jsondata = file_get_contents("travels.json");

// Decode JSON data to PHP associative array
$json = json_decode($jsondata, true);

$output = "<ul>";

//Dynamically generating rows & columns
foreach ($json ['travels'] as $travels)
{
    $output .= "<h4>" . $travels['id']."</h4>";
    $output .= "<li>" . $travels['createdAt']."</li>";
    $output .= "<li>" . $travels['employeeName']."</li>";
    $output .= "<li>" . $travels['departure']."</li>";
    $output .= "<li>" . $travels['destination']."</li>";
    $output .= "<li>" . $travels['price']."</li>";
    $output .= "<li>" . $travels['companyId']."</li>";
   
}
    
//end tag of table
$output .= "</ul>";
echo $output;

?>