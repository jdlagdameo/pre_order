<?php
/**
 * Summary of Pre-order
 *
 * @author: John Dave D. Lagdameo
 * @since: 2018/06/19
 *
 * @internal revisions:
 *
 */

$order_id = $_GET['order'];
require "classes/PreOrder.class.php";
$oPreOrder = new PreOrder();

$title = "Summary";

$data = $oPreOrder->summary($order_id);
if(!$data || !isset($_GET['order'])){
    header("location:index.php");
}
extract($data);
?>

<?php include "templates/header.php"; ?>


<div id="container-summary" class="container">
    <div class="card">
        <h5 class="card-header">Pre-Order Summary</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2">
                    <p><b>First and Last Name</b></p>
                </div>
                <div class="col-sm-10">
                    <p id="name"><?php echo $name; ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <p><b>Email</b></p>
                </div>
                <div class="col-sm-10">
                    <p id="email"><?php echo $email; ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <p><b>Date</b></p>
                </div>
                <div class="col-sm-10">
                    <p id="date"><?php echo $date; ?></p>
                </div>
            </div>

            <hr/>

            <div class="row">
                <div class="col-sm-2">
                    <p><b>Bread</b></p>
                </div>
                <div class="col-sm-10">
                    <p id="bread"><?php echo $bread; ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <p><b>Sauce</b></p>
                </div>
                <div class="col-sm-10">
                    <p id="sauce"><?php echo $sauce; ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <p><b>Sandwich Type</b></p>
                </div>
                <div class="col-sm-10">
                    <p id="sandwich"><?php echo $sandwich; ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <p><b>Cheese</b></p>
                </div>
                <div class="col-sm-10">
                    <p id="cheese"><?php echo $cheese; ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <p><b>Veggies</b></p>
                </div>
                <div class="col-sm-10">
                    <p id="veggies"><?php echo $veggies; ?></p>
                </div>
            </div>

            <div class="alert alert-info" role="alert">
                Orders not picked up will not be allowed to pre order again.
            </div>
        </div>
        <div class="card-footer">

        </div
    </div>

    <input type="hidden" id="order" value="<?php echo $_GET['order'] ?>"/>

</div>

<?php include "templates/footer.php"; ?>
