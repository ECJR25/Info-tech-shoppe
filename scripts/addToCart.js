$(document).ready(function(){
    $(".cart-js").on("click", function(){
        if(JSON.parse(localStorage.getItem("logInAcc"))) {
            const itemContainer = $(this).closest('.item-con');
            const itemId = itemContainer.attr("id");
            const itemName = itemContainer.find(".name-js").text();
            const tempPrice = itemContainer.find(".price").text();
            const itemPrice = parseFloat(tempPrice.replace('$', ''));
            const itemSrc = itemContainer.find(".img-con img").attr("src");

            $.ajax({
                url: "../backend/cart.php",
                method: "post",
                data: {
                    itemId,
                    itemName,
                    itemPrice,
                    itemSrc
                },
                success: function(response) {
                    if(response === "existed") {
                        Swal.fire({
                            title: "Item already in cart!",
                            text: "Item Quantity Added!",
                            icon: "info"
                        });
                    } else {
                        const count = $(".count");
                        count.text(response);
                    }
                },
                error: function() {
                    Swal.fire({
                        title: "Connection Error!",
                        text: "Please try again later.",
                        icon: "error"
                    });
                }
            });
        } else {
            Swal.fire({
                title: "You need to log in first!",
                text: "",
                icon: "warning"
            });
        }
    });
});
