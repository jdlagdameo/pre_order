<?php
/**
 * Pre-order Form
 *
 * @author: John Dave D. Lagdameo
 * @since: 2018/06/19
 *
 * @internal revisions:
 *
 */

$title = "Pre-order";
$js_file = "assets/js/index.js";
?>

<?php include "templates/header.php"; ?>

<div id="container-order" class="container">

    <h3>Pre-Order Your Sub by 8:30 AM</h3>
    <p><em>Late orders are <u>not</u> accepted.</em></p>

    <div class="card">
        <h5 class="card-header">Pre-Order</h5>
        <div class="card-body">
            <p><u>Orders not picked up will not be allowed to pre order again.</u></p>
            <hr/>
            <form>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">First and Last Name</label>
                    <div class="col-sm-10">
                        <input name="name" id="name" class="form-control" type="text" placeholder="Enter Name"
                               autocomplete="off" maxlength="150"/>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" id="email" class="form-control" type="email" placeholder="Enter Email"
                               autocomplete="off" maxlength="100"/>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="date" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                        <input name="date" id="date" class="form-control datepicker" type="text"
                               placeholder="Select Date"
                               autocomplete="off" maxlength="10" readonly data-date-format="yyyy-mm-dd"/>
                    </div>
                </div>

                <hr/>

                <div class="form-group row">
                    <label for="bread" class="col-sm-2 col-form-label">#1 Bread</label>
                    <div class="col-sm-10">
                        <select name="bread" id="bread" class="form-control">
                            <option value="">-- Please Select Bread Type --</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sauce" class="col-sm-2 col-form-label">#2 Sauce</label>
                    <div class="col-sm-10">
                        <select name="sauce" id="sauce" class="form-control">
                            <option value="">-- Select Sauce Type --</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sandwich" class="col-sm-2 col-form-label"> #3 Sandwich Type</label>
                    <div class="col-sm-10">
                        <select name="sandwich" id="sandwich" class="form-control">
                            <option value="">-- Select Sandwich Type --</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sandwich" class="col-sm-2 col-form-label">#4 Cheese</label>
                    <div class="col-sm-10">
                        <select name="cheese" id="cheese" class="form-control">
                            <option value="">-- Select Cheese Type --</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="veggies" class="col-sm-2 col-form-label">#5 Veggies</label>
                    <div class="col-sm-10">
                        <select name="veggies" id="veggies" class="form-control">
                            <option value="">-- Select Veggies Type --</option>
                        </select>
                    </div>
                </div>

            </form>
        </div>
        <div class="card-footer">
            <button id="btn-submit" type="button" class="btn btn-info float-right">Submit</button>
        </div
    </div>

</div>

<?php include "templates/footer.php"; ?>   
   