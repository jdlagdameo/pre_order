$(function () {
    var order = $("#order").val();
    $.ajax({
        type: "get",
        url: "api.php",
        cache: false,
        dataType: "json",
        data: {do: "get_details", order: order},
        success: function (response) {
            $("#name").html(response.name);
            $("#email").html(response.email);
            $("#date").html(response.date);
            $("#bread").html(response.bread);
            $("#sauce").html(response.sauce);
            $("#sandwich").html(response.sandwich);
            $("#cheese").html(response.cheese);
            $("#veggies").html(response.veggies);
        }
    });
});