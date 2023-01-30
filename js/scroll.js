var last_known_scroll_position = 0;
var ticking = false;
var body = document.body;

function scrolledClass(scroll_pos) {
  if(scroll_pos > 75) {
    body.classList.add('scrolled');
  } else {
    body.classList.remove('scrolled');
  }
}

document.addEventListener('scroll', function(e) {
  last_known_scroll_position = window.scrollY;

  if (!ticking) {
    window.requestAnimationFrame(function() {
      scrolledClass(last_known_scroll_position);
      ticking = false;
    });

    ticking = true;
  }
});