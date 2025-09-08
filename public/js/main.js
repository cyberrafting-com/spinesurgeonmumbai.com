document.addEventListener("DOMContentLoaded", function() {
    // Mega menu functionality
    const menuItems = document.querySelectorAll("nav ul li");

    menuItems.forEach((item) => {
        const megaMenu = item.querySelector(".mega-menu");
        if (megaMenu) {
            // Add hover effect
            item.addEventListener("mouseenter", function() {
                megaMenu.style.display = "block";
            });

            item.addEventListener("mouseleave", function() {
                megaMenu.style.display = "none";
            });

            // Touch devices support
            item.addEventListener("click", function(e) {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    megaMenu.style.display =
                        megaMenu.style.display === "block" ? "none" : "block";
                }
            });
        }
    });

    // Close mega menu when clicking outside
    document.addEventListener("click", function(e) {
        if (!e.target.closest("nav ul li")) {
            const megaMenus = document.querySelectorAll(".mega-menu");
            megaMenus.forEach((menu) => {
                menu.style.display = "none";
            });
        }
    });
});