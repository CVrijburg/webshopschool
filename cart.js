//Create a new function
$(function () {
    //Start this function when an item with the 'js-addToCart' class is clicked
    $('.js-addToCart').click(function (event) {
        //Get the target id and put it inside 'var productID'
        console.log(event.currentTarget.id);
        var productID = event.currentTarget.id;
        //Execute $.ajax script
        $.ajax({
            //Specify the method
            'method': 'get',
            //Navigate to addToCart.php
            'url': 'actions/addToCart.php',
            //Specify 'data'
            'data': {
                //Initialize 'productID' and set it to the contents of 'var productID'
                'productID': productID
            },
            //If the script run without errors, execute 'success'
            'success': function (result) {
                // alert(result);
            },
            //If the script run with errors, execute 'error'
            'error': function (error) {
                alert(error);
            }
        });
    });

    //Start this function when an item with the 'js-clearCart' class is clicked
    $('.js-clearCart').click(function () {
        // alert("Test");
        $.ajax({
            //Navigate to clearCart.php
            'url': 'actions/clearCart.php',
            //If the script run without errors, execute 'success'
            'success': function (result) {
                alert(result);
                location.reload();
            },
            //If the script run with errors, execute 'error'
            'error': function (error) {
                alert(error);
            }
        });
    });

    //Start this function when an item with the 'js-checkout' class is clicked
    $('.js-checkout').click(function () {
        var output;
        output = confirm("Are you sure you want to purchase the contents of your shoppin cart?");
        if( output ) {
            $.ajax({
                //Navigate to checkout.php
                'url': 'actions/checkout.php',
                //If the script run without errors, execute 'success'
                'success': function (result) {
                    alert(result);
                    location.reload();
                },
                //If the script run with errors, execute 'error'
                'error': function (error) {
                    alert(error);
                }
            });
        }
    });
});