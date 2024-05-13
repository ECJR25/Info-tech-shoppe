

$(document).ready(function(){
    $(".button").on("click", function(e){
        e.preventDefault();
        const fName = document.getElementById("fname").value;      
        const mName = document.getElementById("mname").value;    
        const lName = document.getElementById("lname").value;    
        const username = document.getElementById("uname").value;    
        const address = document.getElementById("address").value;    
        const contact = document.getElementById("contact").value;    
        const password = document.getElementById("password").value;    
        const confirmPass = document.getElementById("confirmPass").value;    

        if(fName && lName && 
            username && address &&
            address && contact &&
            password && confirmPass)
            {
                if(password === confirmPass)
                {
                    $.ajax({
                        url: "../backend/signup.php",
                        method: "post",
                        data:{
                            fName,
                            mName,
                            lName,
                            username,
                            address,
                            contact,
                            password
                        },
                        success: function(response)
                        {
                            if(response === "existed"){
                                swal(`Username ${response}`, "Account already exist!", "warning");
                            }else{
                                swal(`Account Created!`, "Your account has been created!", "success")
                                .then((value)=>{
                                    window.location.href = "./login.php";
                                })
                            }
                        },
                        error: function()
                        {
                            alert("Connection error!");
                        }
                    })
                }else{
                    swal("Password does not match!", "Invalid password!", "warning");
                }
            }else{
                swal("Empty Fields!", "Please make sure all fields are filled!", "warning");
            }
    })
})