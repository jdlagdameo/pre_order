<?php

require "classes/PreOrder.class.php";
$oPreOrder = new PreOrder();

if (strtoupper($_SERVER['REQUEST_METHOD']) == "GET") {
    $do = $_GET['do'];
} else {
    $do = $_POST['do'];
}

switch ($do) {
    case "retrieve_choices":
        $url = 'data.json'; // path to your JSON file
        $data = file_get_contents($url); // put the contents of the file into a variable
        echo $data;
        break;

    case "pre_order":
        $name = $_POST['name'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $bread = $_POST['bread'];
        $sauce = $_POST['sauce'];
        $sandwich = $_POST['sandwich'];
        $cheese = $_POST['cheese'];
        $veggies = $_POST['veggies'];

        $data = [];
        $success = false;
        if (!$oPreOrder->haveValue($name)) {
            $message = "Full Name is required.";
        } else if (strlen(trim($name)) > 150) {
            $message = "Name must be less than or equal 150.";
        } else if (!$oPreOrder->haveValue($email)) {
            $message = "Email is required.";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = "Email is not valid.";
        } else if (strlen(trim($email)) > 100) {
            $message = "Email must be less than or equal 100.";
        } else if (!$oPreOrder->haveValue($date)) {
            $message = "Date is required.";
        } else if (!$oPreOrder->haveValue($bread)) {
            $message = "Bread is required.";
        } else if (!$oPreOrder->haveValue($sauce)) {
            $message = "Sauce is required.";
        } else if (!$oPreOrder->haveValue($sandwich)) {
            $message = "Sandwich is required.";
        } else if (!$oPreOrder->haveValue($cheese)) {
            $message = "Cheese is required.";
        } else if (!$oPreOrder->haveValue($veggies)) {
            $message = "Veggies is required.";
        } else {
            $table = "orders";
            $data_arr = compact("name", "email", "date", "bread", "sauce", "sandwich", "cheese", "veggies");
            $addData = $oPreOrder->AddData("orders", $data_arr);
            $success = $addData['success'];
            if ($success) {
                $success = true;
                $message = "Pre order success.";
                $data = $addData["data"];

            } else {
                $message = "Error in Pre Order. Please try again.";
            }
        }
        echo json_encode(compact("success", "message", "data"));
        break;

    case "get_details":
        $order_id = $_GET['order'];
        $data = $oPreOrder->summary($order_id);
        echo json_encode($data);

        break;

    default:


}


?>
