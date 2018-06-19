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

<div class="container">
    <h1>Pre-Order Your Sub by 8:30 AM</h1>
    <p><em>Late orders are <u>not</u> accepted.</em></p>

    <div class="card">
        <h5 class="card-header">Featured</h5>
        <div class="card-body">
            <form>
                <label for="name">First and Last Name</label>
                <input name="name" id="name" class="form-control" type="text" placeholder="Enter Name"
                       autocomplete="off" maxlength="150"/>

                <label for="email">Email</label>
                <input name="email" id="email" class="form-control" type="email" placeholder="Enter Email"
                       autocomplete="off" maxlength="100"/>

                <label for="date">Date</label>
                <input name="date" id="date" class="form-control" type="text" placeholder="Select Date"
                       autocomplete="off" maxlength="10"/>


                <label for="bread"> #1 Bread </label>
                <select name="bread" id="bread" class="form-control">
                    <option value="">-- Please Select Bread Type --</option>
                </select>

                <br/>

                <label for="sauce"> #2 Sauce </label>
                <select name="sauce" id="sauce" class="form-control">
                    <option value="">-- Select Sauce Type --</option>
                </select>

                <br/>

                <label for="sandwich"> #3 Sandwhich Type </label>
                <select name="sandwich" id="sandwich" class="form-control">
                    <option value="">-- Select Sandwich --</option>
                </select>

                <br/>

                <label for="cheese"> #4 Cheese </label>
                <select name="cheese" id="cheese" class="form-control">
                    <option value="">-- Select Cheese Type --</option>
                </select>

                <br/>

                <label for="veggies"> #5 Veggies </label>
                <select name="veggies" id="veggies" class="form-control">
                    <option value="">-- Select Veggies Type --</option>
                </select>
                <br/>

            </form>
        </div>
        <div class="card-footer">
            <button id="btn-submit" type="button" class="btn btn-info pull-right">Submit</button>
        </div
    </div>

</div>

<?php include "templates/footer.php"; ?>   
   