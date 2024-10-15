const sideMenu = document.getElementById("side-menux"); 
const exitButton = document.getElementById("exit-button")
const topTitle = document.querySelector('.top-title');


function toggleMenu() {
  if (sideMenu.style.left === "-250px") { 
    sideMenu.style.left = "0px";
    setTimeout(() => {
        exitButton.style.display = "block";
    }, 500);
    topTitle.classList.add('shifted');
  } else {
    sideMenu.style.left = "-250px";
    exitButton.style.display = "none"
    topTitle.classList.remove('shifted');
  }
}

document.addEventListener("click", function(event) {
    const isClickInsideMenu = sideMenu.contains(event.target);
    const isClickOnMenuButton = document.querySelector(".menu-button").contains(event.target);
    if (!isClickOnMenuButton && !isClickInsideMenu) {
        if (sideMenu.style.left === "0px"){
            toggleMenu();
        }
    }
});