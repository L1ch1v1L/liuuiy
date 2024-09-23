<?php
function gen_table() {
    $connection = new mysqli("localhost","root","");
    if (!$connection) {
        echo "DB CONNECTION ERROR";
        return;
    }
    $response = $connection->query("SELECT * from PRIVET.news");
    $str = "<table>";
    foreach ($response as $item){
       $str .= "<tr>";
       $str .= "<td>";
       $str .= $item["name"];
       $str .= "</td>";
       $str .= "<td>";
       $str .= $item["description"];
       $str .= "</td>";
       $str .= "</tr>";
    }
    $str .= "</table>";
    echo $str;
}
?>