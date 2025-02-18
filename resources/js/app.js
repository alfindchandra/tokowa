// Satart Navbar ===================================================

document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");
    const mobileSubmenuButton = document.querySelector(
        'button[onclick="toggleMobileSubmenu()"]'
    );
    const mobileSubmenu = document.getElementById("mobile-submenu");

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener("click", function (event) {
            event.stopPropagation();
            mobileMenu.classList.toggle("hidden");
            toggleMenuIcon();
        });

        document.addEventListener("click", function (event) {
            if (
                !mobileMenu.contains(event.target) &&
                !mobileMenuButton.contains(event.target)
            ) {
                mobileMenu.classList.add("hidden");
                toggleMenuIcon();
            }
        });

        const menuItems = mobileMenu.querySelectorAll("a");
        menuItems.forEach((item) => {
            item.addEventListener("click", function () {
                mobileMenu.classList.add("hidden");
                toggleMenuIcon();
            });
        });
    }

    if (mobileSubmenuButton && mobileSubmenu) {
        mobileSubmenuButton.addEventListener("click", function (event) {
            event.stopPropagation();
            mobileSubmenu.classList.toggle("hidden");
        });

        document.addEventListener("click", function (event) {
            if (
                !mobileSubmenu.contains(event.target) &&
                !mobileSubmenuButton.contains(event.target)
            ) {
                mobileSubmenu.classList.add("hidden");
            }
        });
    }

    function toggleMenuIcon() {
        const svg = mobileMenuButton.querySelector("svg");
        if (mobileMenu.classList.contains("hidden")) {
            // Change to hamburger icon
            svg.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            `;
        } else {
            // Change to X icon
            svg.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            `;
        }
    }
});

// End Navbar ===================================================

// start accordion ===================================================

document.addEventListener("DOMContentLoaded", function () {
    const accordionHeaders = document.querySelectorAll(".accordion-header");

    accordionHeaders.forEach((header) => {
        header.addEventListener("click", function () {
            // Toggle the active state of current accordion
            const content = this.nextElementSibling;
            const arrow = this.querySelector("svg");

            // Close all other accordions
            accordionHeaders.forEach((otherHeader) => {
                if (otherHeader !== this) {
                    otherHeader.nextElementSibling.classList.add("hidden");
                    otherHeader
                        .querySelector("svg")
                        .classList.remove("rotate-180");
                }
            });

            // Toggle current accordion
            content.classList.toggle("hidden");
            arrow.classList.toggle("rotate-180");
        });
    });
});
//  end accordion ===================================================
