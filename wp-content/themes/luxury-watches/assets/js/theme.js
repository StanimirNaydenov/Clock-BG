jQuery(document).ready(function() {
window.addEventListener('load', (event) => {
    jQuery(".preloader").delay(2000).fadeOut("slow");
  });
})

document.addEventListener("DOMContentLoaded", function () {
  var toggleCheckbox = document.getElementById("wardrobe_fashion_stylist_preloader_toggle");
  var preloader = document.getElementById("preloader");

  // Check if toggleCheckbox exists before accessing its properties
  if (toggleCheckbox) {
      // Function to toggle preloader based on checkbox state
      function togglePreloader() {
          preloader.style.display = toggleCheckbox.checked ? "block" : "none";
      }

      // Toggle preloader initially
      togglePreloader();

      // Listen for checkbox change event
      toggleCheckbox.addEventListener("change", togglePreloader);
  }
});