// Add JavaScript functionality here

// Example: Smooth scrolling to section when clicking on navigation links
document.addEventListener('DOMContentLoaded', function() {
    var links = document.querySelectorAll('nav ul li a');
  
    for (var i = 0; i < links.length; i++) {
      links[i].addEventListener('click', smoothScroll);
    }
  
    function smoothScroll(event) {
      event.preventDefault();
  
      var target = event.target.getAttribute('href');
      var targetSection = document.querySelector(target);
  
      window.scrollTo({
        top: targetSection.offsetTop,
        behavior: 'smooth'
      });
    }
  });
  