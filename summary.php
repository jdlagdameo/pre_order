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

$title = "Summary";
$js_file = "assets/js/summary.js";
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
                        <p id="name"></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <p><b>Email</b></p>
                    </div>
                    <div class="col-sm-10">
                        <span id="email"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <p><b>Date</b></p>
                    </div>
                    <div class="col-sm-10">
                        <span id="date"></span>
                    </div>
                </div>

                <hr/>

                <div class="row">
                    <div class="col-sm-2">
                        <p><b>Bread</b></p>
                    </div>
                    <div class="col-sm-10">
                        <span id="bread"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <p><b>Sauce</b></p>
                    </div>
                    <div class="col-sm-10">
                        <span id="sauce"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <p><b>Sandwich Type</b></p>
                    </div>
                    <div class="col-sm-10">
                        <span id="sandwich"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <p><b>Cheese</b></p>
                    </div>
                    <div class="col-sm-10">
                        <span id="cheese"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <p><b>Veggies</b></p>
                    </div>
                    <div class="col-sm-10">
                        <span id="veggies"></span>
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
