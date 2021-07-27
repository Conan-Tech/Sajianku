$(document).ready(function(){
    $(".form-item").submit(function(e){
        e.preventDefault();

        let form_data = $(this).serialize(); 

        $.ajax({ //request ajax ke cart_process.php
            url: "/pelayan/add-cart",
            type: "POST",
            dataType:"json", 
            data: form_data,
            success: function(response){
                $("#cart-info").html(data.items); //total items di cart-info element
                button_content.html('BELI'); //
                alert("Item telah dimasukan ke keranjang belanja anda"); 
                if($(".shopping-cart-box").css("display") == "block"){
                    $(".cart-box").trigger( "click" ); 
                }
            }
        })
    });
})