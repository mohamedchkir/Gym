// **************This is for the index page ********//

// Burger menus
document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
 });

//aos animation
  AOS.init({
    delay: 200,
    duration: 1200,
    once: false,
  })

// **************This is for the dashboard page ********//



// JavaScript code for dropdown menu in responsive design
const toggleBtn = document.querySelector('.toggle-btn');
const toggleBtnIcon = document.querySelector('.toggle-btn i');
const dropDownMenu = document.querySelector('.dropdown-menu');

toggleBtn.onclick = function() {
   dropDownMenu.classList.toggle('open');
   const isOpen = dropDownMenu.classList.contains('open');

   toggleBtnIcon.classList = isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars';
}

// JavaScript code to change header color on scroll
const header = document.querySelector('.header');

window.onscroll = function() {
   let top = window.scrollY;
   if(top >= 80){
      header.classList.add('active');
   } else{
      header.classList.remove('active');
   }
}
