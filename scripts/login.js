$(document).ready(function(){
    $(".button").on("click", function(){
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        if(username && password)
        {
            $.ajax({
                url: "../backend/login.php",
                method: "post",
                data:{
                    username,
                    password
                },
                success: function(response)
                {
                    if(response === "success"){
                        swal("Welcome back!", "Successfully Log in", "success")
                        .then((value)=>{
                            let logIn = true;
                            localStorage.setItem("logInAcc", JSON.stringify(logIn));
                            window.location.href = "./store.php";
                        })
                    }else if(response === "invalid"){
                        swal(`Invalid Password!`, "", "warning");
                    }else if(response === "not found"){
                        swal(`Account not found!`, "", "warning");
                    }
                },
                error: function(){
                    alert("Connection Failed!");
                }
            })
        }else{
            swal(`Empty Fields`, "Make sure all fields are filled", "warning");
        }
    })
})