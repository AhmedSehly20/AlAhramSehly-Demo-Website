document.addEventListener("DOMContentLoaded", function () {
  var trigger = document.querySelector(".trigger-drop");
  var dropdown = document.querySelector(".drop");

  trigger.addEventListener("click", function () {
    dropdown.style.display =
      dropdown.style.display === "block" ? "none" : "block";
  });
});
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
