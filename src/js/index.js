// Event handler for navbar burger click
const onNavbarBurgerClick = (e) => {
  // Get the target from the "data-target" attribute
  const target = e.currentTarget.dataset.target;
  const targetEl = document.getElementById(target);

  // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
  e.currentTarget.classList.toggle('is-active');
  targetEl.classList.toggle('is-active');
};


// Event handler for mailto link mouseover
const onMailtoLinkMouseOver = (e) => {
  // Get the mailto link
  const mailto = e.currentTarget.dataset.mailto;

  // Set the href attribute
  e.currentTarget.href = `mailto:${atob(mailto)}`;
}


// When the document is loaded
document.addEventListener('DOMContentLoaded', function() {
  // Get all "navbar-burger" elements
  const navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if (navbarBurgers.length > 0) {
    // Add a click event on each of them
    navbarBurgers.forEach(el => {
      el.addEventListener('click', onNavbarBurgerClick);
    });
  }

  // Get all mailto links
  const mailtoLinks = Array.prototype.slice.call(document.querySelectorAll('a[data-mailto]'), 0);

  // Check if there are any mailto links
  if (mailtoLinks.length > 0) {
    // Add a mouseover and touchstart event on each of them
    mailtoLinks.forEach(el => {
      el.addEventListener('mouseover', onMailtoLinkMouseOver);
      el.addEventListener('touchstart', onMailtoLinkMouseOver);
    });
  }
});
