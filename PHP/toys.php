<?php
header('Access-Control-Allow-Origin: *');
$TOYS = array(
    array(
        "toy_category" => "Arts and Crafts",
        "toy_name" => "Play-Doh",
        "toy_price" => "₱500",
        "toy_stocks" => "20",
        "toy_material" => "Plastic",
    ),

    array(
        "toy_category" => "Building Blocks",
        "toy_name" => "Mega Bloks",
        "toy_price" => "₱700",
        "toy_stocks" => "10",
        "toy_material" => "Plastic",
    ),

    array(
        "toy_category" => "Educational Toys",
        "toy_name" => "STEM Solar Robots",
        "toy_price" => "₱2,500",
        "toy_stocks" => "50",
        "toy_material" => "Metal",
    ),

    array(
        "toy_category" => "Stuffed Animals",
        "toy_name" => "Teddy bears",
        "toy_price" => "₱600",
        "toy_stocks" => "17",
        "toy_material" => "Fabric",
    ),

    array(
        "toy_category" => "Board Games",
        "toy_name" => "Chess",
        "toy_price" => "₱499",
        "toy_stocks" => "30",
        "toy_material" => "Wood",
    ),

    array(
        "toy_category" => "Action Figures",
        "toy_name" => "Transformers",
        "toy_price" => "₱800",
        "toy_stocks" => "20",
        "toy_material" => "Metal",
    ),
);
echo json_encode(array("toys" => $TOYS));
echo $data;
?>