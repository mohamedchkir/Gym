// **************This is for the index page ********//

//Menu toggle
function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle('hidden')
    document.getElementById(collapseID).classList.toggle('block')
  }

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
