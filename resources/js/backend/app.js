/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

const school = document.getElementById('school');

if (school) {
    school.addEventListener('change', (e) => {
        const schoolType = e.target.parentElement.parentElement.children[1];
        if (e.target.value === 'no') { //no school
            schoolType.classList.add("hide");
        } else {
            schoolType.classList.remove("hide")
        }
    });
}
