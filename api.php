<?php

require "classes/Functions.class.php";
$oFunctions = new Functions;

$do = $_GET['do'];

if ($do == "retrieve_choices") {
    $url = 'data.json'; // path to your JSON file
    $data = file_get_contents($url); // put the contents of the file into a variable
    echo $data;
} else if ($do == "pre_order") {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $date = $_GET['date'];
    $bread = $_GET['bread'];
    $sauce = $_GET['sauce'];
    $sandwich = $_GET['sandwich'];
    $cheese = $_GET['cheese'];
    $veggies = $_GET['veggies'];

    $data = [];
    $success = false;
    if (!$oFunctions->haveValue($name)) {
        $message = "Full Name is required.";
    } else if (strlen(trim($name)) > 150) {
        $message = "Name must be less than or equal 150.";
    } else if (!$oFunctions->haveValue($email)) {
        $message = "Email is required.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Email is not valid.";
    } else if (strlen(trim($email)) > 100) {
        $message = "Email must be less than or equal 100.";
    } else if (!$oFunctions->haveValue($date)) {
        $message = "Date is required.";
    } else if (!$oFunctions->haveValue($bread)) {
        $message = "Bread is required.";
    } else if (!$oFunctions->haveValue($sauce)) {
        $message = "Sauce is required.";
    } else if (!$oFunctions->haveValue($sandwich)) {
        $message = "Sandwich is required.";
    } else if (!$oFunctions->haveValue($cheese)) {
        $message = "Cheese is required.";
    } else if (!$oFunctions->haveValue($veggies)) {
        $message = "Veggies is required.";
    } else {
        $table = "orders";
        $data_arr = compact("name", "email", "data", "bread", "sauce", "sandwich", "cheese", "veggies");
        $addData = $oFunctions->AddData("orders", $data_arr);

        if ($success) {
            $success = true;
            $message = "Pre order success.";
            $data = $addData["data"];

        } else {
            $message = "Error in Pre Order. Please try again.";
        }
    }
    echo json_encode(compact("success", "message", "data"));

}


?>
