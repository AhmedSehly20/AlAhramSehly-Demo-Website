// Get the menu button and navbar elements
let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");

// Toggle the menu and navbar when the menu button is clicked
menu.onclick = () => {
  menu.classList.toggle("fa-times"); // Toggle the 'fa-times' class to change the menu button's appearance
  navbar.classList.toggle("active"); // Toggle the 'active' class to show/hide the navbar
};

// Reset the menu and navbar when scrolling occurs
window.onscroll = () => {
  menu.classList.remove("fa-times"); // Remove the 'fa-times' class from the menu button
  navbar.classList.remove("active"); // Remove the 'active' class from the navbar
};

// Close the edit form and redirect to admin.php when the 'close-edit' button is clicked
document.querySelector("#close-edit").onclick = () => {
  document.querySelector(".edit-form-container").style.display = "none"; // Hide the edit form container
  window.location.href = "admin.php"; // Redirect to admin.php
};
