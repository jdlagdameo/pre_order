 $("#btn-submit").click(function(){
            var name = $("#name").val();
            var email = $("#email").val();
            var date = $("#date").val();
            var bread = $("#bread").val();
            var sauce = $("#sauce").val();
            var sandwich = $("#sandwich").val();
            var cheese = $("#cheese").val();
            var veggies = $("#veggies").val();
                
            $.ajax({
                type:"get",
                url:"api.php",
                cache:false,
                data:{do:'pre_order',name:name,email:email,date:date,bread:bread,sauce:sauce,sandwich:sandwich,cheese:cheese,veggies:veggies},
                dataType:"html",
                success:function(response){
                    console.log(response);
                    return false;
                    var success = response.success;
                    var title = (success?"Success":"Invalid Entry");
                    swal(title,response.message,(success?"success":"error"));
                    if(success){
                        // location.reload();
                    }
                }
            });
        });
        
    
        /* Retrieve Drop Down Choice */
        $.ajax({
            type:"get",
            url:"api.php",
            cache:false,
            data:{do:'retrieve_choices'},
            dataType:"json",
            success:function(response){
                /* Bread */
                var bread_arr = response.bread;
                for(var x=0;x<bread_arr.length;x++){
                    var bread = bread_arr[x];
                    $('#bread').append($('<option>', {value: bread,text: bread}));
                }

                /* Sauce */
                var sauce_arr = response.sauce;
                for(var x=0;x<sauce_arr.length;x++){
                    var sauce = sauce_arr[x];
                    $('#sauce').append($('<option>', {value: sauce,text: sauce}));
                }

                /* Sandwich */
                var sandwich_arr = response.sandwich;
                for(var x=0;x<sandwich_arr.length;x++){
                    var sandwich = sandwich_arr[x];
                    $('#sandwich').append($('<option>', {value: sandwich,text: sandwich}));
                }

                 /* Cheese */
                var cheese_arr = response.cheese;
                for(var x=0;x<cheese_arr.length;x++){
                    var cheese = cheese_arr[x];
                    $('#cheese').append($('<option>', {value: cheese,text: cheese}));
                }

                /* Veggies */
                var veggies_arr = response.veggies;
                for(var x=0;x<veggies_arr.length;x++){
                    var veggies = veggies_arr[x];
                    $('#veggies').append($('<option>', {value: veggies,text: veggies}));
                }
            }

        });