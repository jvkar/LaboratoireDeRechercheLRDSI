window.addEventListener("scroll", function() {
    var scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
    var screenHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight || 0;
    var myItem = document.querySelector(".scrollup");
  
    if (scrollPos > screenHeight * 0.5) {
      myItem.classList.add("show-scrollup");
    } else {
      myItem.classList.remove("show-scrollup");
    }
  });
// get the navigation links and breadcrumb list items
const navLinks = document.querySelectorAll('.nav-menu li a');
const breadcrumbItems = document.querySelectorAll('.breadcrumb li');

// loop through each navigation link and add an event listener
navLinks.forEach((link, index) => {
  link.addEventListener('click', (event) => {
    // prevent default link behavior
    event.preventDefault();
    
    // update the active class for the navigation link and breadcrumb item
    navLinks.forEach((navLink) => {
      navLink.classList.remove('active');
    });
    link.classList.add('active');
    breadcrumbItems.forEach((breadcrumbItem) => {
      breadcrumbItem.classList.remove('active');
    });
    breadcrumbItems[index].classList.add('active');
  });
});









