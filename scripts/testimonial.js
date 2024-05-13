$(document).ready(function(){
    $(".submit").on("click", function(e){
        e.preventDefault();
        const name = document.getElementById("name").value;
        const itemName = document.getElementById("item-name").value;
        const message = document.getElementById("message").value;

        if(name && itemName && message)
        {
            $.ajax({
                url: "../backend/testimonial.php",
                method: "post",
                data:{
                    name,
                    itemName,
                    message
                },
                success: function()
                {
                    Swal.fire({
                        title: "Testimonial Submitted!",
                        text: "Thank you for your feedback!",
                        icon: "success"
                    }).then((result)=>{
                        window.location.href = "./testimonials.php";
                    })
                },
                error: function()
                {
                    alert("Connection Error!");
                }
            })
        }else{
            Swal.fire({
                title: "Empty Fields!",
                text: "Please make sure all fields are filled!",
                icon: "warning"
              });
        }
    })
})