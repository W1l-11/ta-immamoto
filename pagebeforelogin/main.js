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

document.addEventListener('DOMContentLoaded', function () {
    var slides = document.querySelector('.slides');
    var slideIndex = 0;
    var slideCount = slides.children.length;
  
    function nextSlide() {
      slideIndex++;
      if (slideIndex >= slideCount) {
        slideIndex = 0;
      }
      updateSlidePosition();
    }
  
    function updateSlidePosition() {
      slides.style.transform = 'translateX(-' + (slideIndex * 100) + '%)';
    }
  
    setInterval(nextSlide, 7000); 
  });