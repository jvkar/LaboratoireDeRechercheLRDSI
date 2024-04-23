function showDropdown(index) {
    var dropdowns = document.querySelectorAll(".fill"); // Get all dropdowns
    
    for (var i = 0; i < dropdowns.length; i++) {
        if (i === index) {
            dropdowns[i].classList.add("show"); // Show the selected dropdown
             
        } else {
            dropdowns[i].classList.remove("show"); // Hide other dropdowns
            
        }
    }
}

