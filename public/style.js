document.addEventListener("DOMContentLoaded", function () {
    const logoutForm = document.getElementById("logoutForm");

    function showLogoutForm() {
        logoutForm.classList.add("entering");
        logoutForm.classList.remove("leaving");
        logoutForm.style.display = "block";

        setTimeout(() => {
            logoutForm.classList.add("enter-active");
        }, 10);
    }

    function hideLogoutForm() {
        logoutForm.classList.add("leaving");
        logoutForm.classList.remove("entering", "enter-active");

        setTimeout(() => {
            logoutForm.style.display = "none";
            logoutForm.classList.remove("leaving");
        }, 75);
    }

    document
        .getElementById("toggleLogout")
        .addEventListener("click", function (event) {
            event.stopPropagation();
            if (logoutForm.style.display === "block") {
                hideLogoutForm();
            } else {
                showLogoutForm();
            }
        });

    document.addEventListener("click", function (event) {
        if (
            !logoutForm.contains(event.target) &&
            event.target.id !== "toggleLogout"
        ) {
            hideLogoutForm();
        }
    });
});
