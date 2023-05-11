/* =========== DASHBOARD =========== */

// get elements
let hamburgerMenu = document.getElementById('hamburger-menu');
let sideBar = document.getElementById('side-bar');
console.log(sideBar);

// side bar toggle
hamburgerMenu.addEventListener('click', function () {
    sideBar.classList.toggle('hidden');
})