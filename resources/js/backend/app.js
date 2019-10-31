/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('bootstrap-select');
require('masonry-layout');
require('imagesloaded');

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

$(function () {
    $('.selectpicker').selectpicker();
});
var $grid = $('.grid').imagesLoaded( function() {
  // init Masonry after all images have loaded
  $grid.masonry({ "itemSelector": ".grid-item",
    "columnWidth": ".grid-item",
    "percentPosition": true,
    "gutter": 30 });
});
