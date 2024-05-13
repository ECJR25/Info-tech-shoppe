

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
            address && contact)
            {
                $.ajax({
                    url: "../backend/updateProfile.php",
                    method: "post",
                    data:{
                        fName,
                        mName,
                        lName,
                        username,
                        address,
                        contact,
                        password,
                        confirmPass
                    },
                    success: function(response)
                    {
                        if(response === "empty")
                        {
                            swal("Empty Fields!", "Current Passowrd or New Password are empty!", "warning");
                        }else if(response === "invalid"){
                            swal("Invalid Password!", "Invalid current Password!", "warning");
                        }else if(response === "empty1"){
                            swal("Empty Fields!", "Please make sure other fields are filled!", "warning");
                        }else if(response === "updated"){
                            swal("Profile Updated!", "Profile has been updated!", "success")
                            .then((value)=>{
                                window.location.href = "./profile.php";
                            })
                        }
                    },
                    error: function()
                    {
                        alert("Connection error!");
                    }
                })
            }else{
                swal("Empty Fields!", "Please make sure other fields are filled!", "warning");
            }
    })
})