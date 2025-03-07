console.log('Hello World!');

window.addEventListener('load', function(){
  const load = document.querySelector('.sectionabout1');
  load.classList.add('show');
  window.addEventListener('scroll', function() {
    console.log(window.scrollY);
    var navbar = document.querySelector('.navbar');
    if (window.scrollY ) { // Regola questo valore per cambiare quando la navbar si rimpicciolisce
      navbar.classList.add('navbar-shrink');
    } else {
      navbar.classList.remove('navbar-shrink');
    }
  });
})
  // Navbar

  
  //section 2
  document.addEventListener('DOMContentLoaded', function() {
    const quote = document.querySelector('.sectionabout2');
  
    function checkSlide() {
      // Calcola la posizione di attivazione a 5 pixel dall'inizio del div
      const slideInAt = quote.offsetTop - (window.innerHeight);
      const quoteBottom = quote.offsetTop + quote.offsetHeight;
      const isHalfShown = window.scrollY > slideInAt;
      const isNotScrolledPast = window.scrollY < quoteBottom;
  
      if (isHalfShown && isNotScrolledPast) {
        quote.classList.add('show');
      }
    }
  
    window.addEventListener('scroll', checkSlide);
  });

  //section 3
  document.addEventListener('DOMContentLoaded', function() {
    const quote = document.querySelector('.sectionabout3');
  
    function checkSlide() {
      // Calcola la posizione di attivazione a 5 pixel dall'inizio del div
      const slideInAt = quote.offsetTop - (window.innerHeight - 5);
      const quoteBottom = quote.offsetTop + quote.offsetHeight;
      const isHalfShown = window.scrollY > slideInAt;
      const isNotScrolledPast = window.scrollY < quoteBottom;
  
      if (isHalfShown && isNotScrolledPast) {
        quote.classList.add('show');
      }
    }
  
    window.addEventListener('scroll', checkSlide);
  });

