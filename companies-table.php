<?php

//echo file_get_contents("https://5f27781bf5d27e001612e057.mockapi.io/webprovise/travels");

//echo file_get_contents("https://5f27781bf5d27e001612e057.mockapi.io/webprovise/companies");

$str_data = file_get_contents("companies.json");

// Decode JSON data to PHP associative array
$data = json_decode($str_data, true);

//initilizing temp variable to design table dynamically
$temp = "<table>";

//defining table column headers depending upon JSON records
$temp .= "<tr>";
$temp .= "<td> id </td>";
$temp .= "<td> createdAt </td>";
$temp .= "<td> name </td>";
$temp .= "<td> parentId </td>"; 
$temp .= "</tr>";

//Dynamically generating rows & columns
for ($i = 0; $i <sizeof($data["companies"]); $i++)
{
    $temp .= "<tr>";
    $temp .= "<td>" . $data ["companies"][$i]["id"] . "</td>" ;
    $temp .= "<td>" . $data ["companies"][$i]["createdAt"] . "</td>" ;
    $temp .= "<td>" . $data ["companies"][$i]["name"] . "</td>" ;
    $temp .= "<td>" . $data ["companies"][$i]["parentId"] . "</td>" ;
    $temp .= "</td>";
    
}
    
//end tag of table
$temp .= "</table>";

//printing temp variable which holds table
echo $temp;


?>