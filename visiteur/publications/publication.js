$(document).ready(function() {
    $('a[href^="#"]').on('click', function(event) {
      event.preventDefault();

      var target = $($(this).attr('href'));

      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
      }
    });
  });
//   function myFunction(index) {
//     var dots = document.getElementById("dots_" + index);
//     var moreText = document.getElementById("more_" + index);
//     var btnText = document.getElementById("myBtn_" + index);

//     if (dots.style.display === "none") {
//         dots.style.display = "inline";
//         btnText.innerHTML = "Voir plus";
//         moreText.style.display = "none";
//     } else {
//         dots.style.display = "none";
//         btnText.innerHTML = "Voir moins";
//         moreText.style.display = "inline";
//     }
// }
var readMoreButtons = document.querySelectorAll('.read_more');

    // Add click event listeners to each button
    readMoreButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Get the target element ID from the data-target attribute
            var targetId = button.getAttribute('data-target');

            // Get the target element
            var targetElement = document.getElementById(targetId);

            // Toggle the visibility of the target element
            if (targetElement.style.display === 'none' || targetElement.style.display === '') {
                targetElement.style.display = 'block';
                button.innerHTML = 'Show Less';
            } else {
                targetElement.style.display = 'none';
                button.innerHTML = 'Show More';
            }
        });
    });