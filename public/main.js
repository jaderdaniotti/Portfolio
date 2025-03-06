console.log('Hello World!');
window.addEventListener('scroll', function() {
    console.log(window.scrollY);
    var navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) { // Regola questo valore per cambiare quando la navbar si rimpicciolisce
      navbar.classList.add('navbar-shrink');
    } else {
      navbar.classList.remove('navbar-shrink');
    }
  });
  