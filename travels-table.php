<?php

//echo file_get_contents("https://5f27781bf5d27e001612e057.mockapi.io/webprovise/travels");

//echo file_get_contents("https://5f27781bf5d27e001612e057.mockapi.io/webprovise/companies");

$str_data = file_get_contents("travels.json");

// Decode JSON data to PHP associative array
$data = json_decode($str_data, true);

//initilizing temp variable to design table dynamically
$temp = "<table>";

//defining table column headers depending upon JSON records
$temp .= "<tr>";
$temp .= "<td> id </td>";
$temp .= "<td> createdAt </td>";
$temp .= "<td> employeeName </td>";
$temp .= "<td> departure </td>"; 
$temp .= "<td> destination </td>"; 
$temp .= "<td> price </td>"; 
$temp .= "<td> companyId </td>"; 
$temp .= "</tr>";

//Dynamically generating rows & columns
for ($i = 0; $i <sizeof($data["travels"]); $i++)
{
    $temp .= "<tr>";
    $temp .= "<td>" . $data ["travels"][$i]["id"] . "</td>" ;
    $temp .= "<td>" . $data ["travels"][$i]["createdAt"] . "</td>" ;
    $temp .= "<td>" . $data ["travels"][$i]["employeeName"] . "</td>" ;
    $temp .= "<td>" . $data ["travels"][$i]["departure"] . "</td>" ;
    $temp .= "<td>" . $data ["travels"][$i]["destination"] . "</td>" ;
    $temp .= "<td>" . $data ["travels"][$i]["price"] . "</td>" ;
    $temp .= "<td>" . $data ["travels"][$i]["companyId"] . "</td>" ;
    $temp .= "</td>";
    
}
    
//end tag of table
$temp .= "</table>";

//printing temp variable which holds table
echo $temp;


?>