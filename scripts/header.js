document.addEventListener("DOMContentLoaded", function() {
    if (JSON.parse(localStorage.getItem("logInAcc"))) {
        const dropDown = document.querySelector(".drop-down");
        const profileDiv = document.querySelector(".profile-div");
        let count = 0;

        if (dropDown && profileDiv) {
            dropDown.addEventListener("click", function() {
                if (count === 0) {
                    profileDiv.style.display = "block";
                    count = 1;
                } else {
                    profileDiv.style.display = "none";
                    count = 0;
                }
            });
        }

        const logOut = document.querySelector(".logOut");
        
        if (logOut) {
            logOut.addEventListener("click", () => {
                localStorage.removeItem("logInAcc");
            });
        }
    }
});
