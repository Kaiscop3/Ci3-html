
document.querySelectorAll('.nested-dropbtn').forEach(button => {
    button.addEventListener('click', function (event) {
        event.preventDefault();
        const dropdown = this.parentElement;
        const isActive = dropdown.classList.contains('active');

        if (isActive) {
            dropdown.classList.remove('active');
            this.classList.remove('active');
            this.querySelector('.arrow').innerHTML = ">";
        } else {
            dropdown.classList.add('active');
            this.classList.add('active');
            this.querySelector('.arrow').innerHTML = ">";
        }
    });
});


document.addEventListener('click', function (event) {
    if (!event.target.closest('.nested-dropdown') && !event.target.closest('.dropdown-menu')) {
        document.querySelectorAll('.nested-dropdown').forEach(dropdown => {
            dropdown.classList.remove('active');
            dropdown.querySelector('.nested-dropbtn').classList.remove('active');
        });
    }
});


document.querySelector('.nested-dropbtn').addEventListener('click', function () {
    var dropdownContent = this.nextElementSibling;
    dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
});


window.onclick = function (event) {
    if (!event.target.matches('.nested-dropbtn')) {
        var dropdowns = document.getElementsByClassName("nested-dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.style.display === 'block') {
                openDropdown.style.display = 'none';
            }
        }
    }
}

document.addEventListener("DOMContentLoaded", function () {
    if (window.innerWidth > 992) {
        document.querySelectorAll('.nav-item.dropdown').forEach(function (element) {
            element.addEventListener('mouseover', function () {
                let dropdownMenu = this.querySelector('.dropdown-menu');
                if (dropdownMenu) {
                    dropdownMenu.classList.add('show');
                }
            });

            element.addEventListener('mouseout', function () {
                let dropdownMenu = this.querySelector('.dropdown-menu');
                if (dropdownMenu) {
                    dropdownMenu.classList.remove('show');
                }
            });
        });
    }

    // Handle clicks for dropdowns on mobile
    document.querySelectorAll('.dropdown-submenu a.dropdown-toggle').forEach(function (element) {
        element.addEventListener('click', function (e) {
            e.preventDefault();
            let nextEl = this.nextElementSibling;
            if (nextEl && nextEl.classList.contains('dropdown-menu')) {
                nextEl.classList.toggle('show');
            }
        });
    });
});