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
