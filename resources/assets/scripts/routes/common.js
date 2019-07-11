export default {
  init() {
    // JavaScript to be fired on all pages
    $(document).ready(function() {

      // Check for click events on the navbar burger icon
      $('.navbar-burger').click(function() {

          // Toggle the 'is-active' class on both the 'navbar-burger' and the 'navbar-menu'
          $('.navbar-burger').toggleClass('is-active');
          $('.navbar-menu').toggleClass('is-active');

      });
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
