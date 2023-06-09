<?php
header('Access-Control-Allow-Origin: *');
$TOYS = array(
    array(
        'img'  => "playdoh.jpg",
        "toy_category" => "Arts and Crafts",
        "toy_name" => "Play-Doh",
        "toy_price" => "₱500",
        "toy_stocks" => "20",
        "toy_material" => "Plastic",
        "toy_description" => "A brand name for a soft, nontoxic modeling compound made in bright colors and marketed for children"
    ),

    array(
        'img'  => "megablockss.jpg",
        "toy_category" => "Building Blocks",
        "toy_name" => "Mega Bloks",
        "toy_price" => "₱700",
        "toy_stocks" => "10",
        "toy_material" => "Plastic",
        "toy_description" => "Mega Bloks, Inc. is Canada's largest toy company. It is the world's second biggest manufacturer of construction toys, and one of the fastest-growing toy brands in the world."
    ),

    array(
        'img'  => "codingrobot.jpg",
        "toy_category" => "Educational Toys",
        "toy_name" => "STEM Solar Robots",
        "toy_price" => "₱2,500",
        "toy_stocks" => "50",
        "toy_material" => "Metal",
        "toy_description" => "The robot moves in the direct sunlight and allows children to create and use their infinite imagination. "
    ),

    array(
        'img'  => "teddybear.jpg",
        "toy_category" => "Stuffed Animals",
        "toy_name" => "Teddy bears",
        "toy_price" => "₱600",
        "toy_stocks" => "17",
        "toy_material" => "Fabric",
        "toy_description" => "A teddy bear is a children's toy, made from soft or furry material, which looks like a friendly bear."
    ),

    array(
        'img'  => "chess.jpg",
        "toy_category" => "Board Games",
        "toy_name" => "Chess",
        "toy_price" => "₱499",
        "toy_stocks" => "30",
        "toy_material" => "Wood",
        "toy_description" => "Chess is a game played between two opponents on opposite sides of a board containing 64 squares of alternating colors."
    ),

    array(
        'img'  => "transformers.jpg",
        "toy_category" => "Action Figures",
        "toy_name" => "Transformers",
        "toy_price" => "₱800",
        "toy_stocks" => "20",
        "toy_material" => "Metal",
        "toy_description" => "An individual toy's parts can be shifted about to change it from a vehicle, a device, or an animal, to a robot action figure and back again."
    )
);
    $myObj = json_encode($TOYS);
    echo $myObj;
?>