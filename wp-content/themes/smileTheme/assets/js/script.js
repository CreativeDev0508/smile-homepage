/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
new WOW().init();
// Scroll to Top button functionality with smooth animation
const scrollToTopButton = document.getElementById('scrollToTopButton'); // Replace with your button's ID

const scrollToTop = () => {
  // Scroll to top logic with animation
  window.scrollTo({
    top: 0,
    behavior: 'smooth' // This dictates the animation part
  });
};

// Event listener for the button
scrollToTopButton.addEventListener('click', scrollToTop);

function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

const toggleBtns = document.querySelectorAll('.faq-toggle');

toggleBtns.forEach(toggleBtn => {
  toggleBtn.addEventListener('click', () => {
    toggleBtn.parentNode.classList.toggle('active')
  })
});