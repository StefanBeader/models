require('./components/dropdown');

if (document.getElementById('slider')) {
  require('./components/slider')
}
require('./components/customSelect');

const school = document.getElementById('school');

if (school) {
    school.addEventListener('changeSchool', (e) => {
        if (e.detail.selectedValue === 0) { //no school
            e.target.parentElement.parentElement.nextElementSibling.classList.add("hide");
        } else {
            e.target.parentElement.parentElement.nextElementSibling.classList.remove("hide")
        }
    });
}

const mobileMenu = document.getElementsByClassName('links')[0];
const menuToggle = document.getElementById('menuToggle');

menuToggle.addEventListener('click', ev => {
   if (mobileMenu.classList.contains('show')) {
       hideMobileMenu();
   } else {
       openMobileMenu();
   }
}, true);

function openMobileMenu() {
    mobileMenu.classList.add('show');
    menuToggle.children[0].innerText = "Close";
}

function hideMobileMenu() {
    mobileMenu.classList.remove('show');
    menuToggle.children[0].innerText = "Menu";
}
