$(document).ready(function(){
    $(".delete-js").on("click", function(){
        const itemId = $(this).attr("value");
        $.ajax({
            url: "../backend/deleteItem.php",
            method: "post",
            data:{
                itemId
            },
            success: function()
            {
                window.location.href = "./cart.php";
            },
            error: function()
            {
                alert("Connection Error!");
            }
        })
    })
})