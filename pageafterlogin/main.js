// Dropdown - filter

document.addEventListener('DOMContentLoaded', function () {
    var filterButton = document.querySelector('.filter-button');
    var filterDropdown = document.querySelector('.filter-dropdown');
    filterButton.addEventListener('click', function() {

        if (filterDropdown.style.display === "none" || !filterDropdown.style.display) {
            filterDropdown.style.display = "block";
        } else {
            filterDropdown.style.display = "none";
        }
    });
});

// Slider