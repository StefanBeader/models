/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/frontend/app.js":
/*!**************************************!*\
  !*** ./resources/js/frontend/app.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ./components/dropdown */ "./resources/js/frontend/components/dropdown.js");

if (document.getElementById('slider')) {
  __webpack_require__(/*! ./components/slider */ "./resources/js/frontend/components/slider.js");
}

__webpack_require__(/*! ./components/customSelect */ "./resources/js/frontend/components/customSelect.js");

var school = document.getElementById('school');

if (school) {
  school.addEventListener('changeSchool', function (e) {
    if (e.detail.selectedValue === 0) {
      //no school
      e.target.parentElement.parentElement.nextElementSibling.classList.add("hide");
    } else {
      e.target.parentElement.parentElement.nextElementSibling.classList.remove("hide");
    }
  });
}

var mobileMenu = document.getElementsByClassName('links')[0];
var menuToggle = document.getElementById('menuToggle');
menuToggle.addEventListener('click', function (ev) {
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

/***/ }),

/***/ "./resources/js/frontend/components/customSelect.js":
/*!**********************************************************!*\
  !*** ./resources/js/frontend/components/customSelect.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var x, i, j, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */

x = document.getElementsByClassName("custom-select");

for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /* For each element, create a new DIV that will act as the selected item: */

  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */

  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");

  for (j = 0; j < selElmnt.length; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function (e) {
      /* When an item is clicked, update the original select box,
      and the selected item: */
      var y, i, k, s, h;
      s = this.parentNode.parentNode.getElementsByTagName("select")[0];
      h = this.parentNode.previousSibling;

      for (i = 0; i < s.length; i++) {
        if (s.options[i].innerHTML == this.innerHTML) {
          s.selectedIndex = i;
          s.dispatchEvent(new CustomEvent('changeSchool', {
            detail: {
              selectedValue: i
            }
          }));
          h.innerHTML = this.innerHTML;
          y = this.parentNode.getElementsByClassName("same-as-selected");

          for (k = 0; k < y.length; k++) {
            y[k].removeAttribute("class");
          }

          this.setAttribute("class", "same-as-selected");
          break;
        }
      }

      h.click();
    });
    b.appendChild(c);
  }

  x[i].appendChild(b);
  a.addEventListener("click", function (e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x,
      y,
      i,
      arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");

  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i);
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }

  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/* If the user clicks anywhere outside the select box,
then close all select boxes: */


document.addEventListener("click", closeAllSelect);

/***/ }),

/***/ "./resources/js/frontend/components/dropdown.js":
/*!******************************************************!*\
  !*** ./resources/js/frontend/components/dropdown.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance"); }

function _iterableToArray(iter) { if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } }

var lastShownDropdown = false;

var dropdownToggles = _toConsumableArray(document.getElementsByClassName('dropdown-toggle'));

dropdownToggles.forEach(function (item) {
  item.addEventListener('click', openDropdown);
});
document.getElementsByTagName('body')[0].addEventListener('click', function () {
  if (lastShownDropdown) {
    lastShownDropdown.classList.remove('show');
  }
}, true);

function openDropdown(event) {
  if (lastShownDropdown) {
    lastShownDropdown.classList.remove('show');
  }

  event.preventDefault();
  var dropdown = event.target.nextSibling.nextSibling;
  dropdown.classList.add('show');
  lastShownDropdown = dropdown;
}

/***/ }),

/***/ "./resources/js/frontend/components/slider.js":
/*!****************************************************!*\
  !*** ./resources/js/frontend/components/slider.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance"); }

function _iterableToArray(iter) { if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } }

var slidesContainer = document.getElementsByClassName('slides')[0];

var slides = _toConsumableArray(document.getElementsByClassName('slide'));

var moveLeft = document.getElementById('moveLeft');
var moveRight = document.getElementById('moveRight');
var slidesMargin = 0;
var slideMoved = false;
setInterval(function () {
  if (!slideMoved) {
    if (slidesMargin < slides.length * 100 - 100) {
      slidesMargin += 100;
    } else {
      slidesMargin = 0;
    }

    slidesContainer.style.marginLeft = "-" + slidesMargin + "%";
  }
}, 5000);
moveLeft.addEventListener('click', function () {
  if (slidesMargin >= 100) {
    slidesMargin -= 100;
  } else {
    slidesMargin = slides.length * 100 - 100;
  }

  slidesContainer.style.marginLeft = "-" + slidesMargin + "%";
  slideMoved = true;
  setTimeout(function () {
    slideMoved = false;
  }, 5000);
});
moveRight.addEventListener('click', function () {
  if (slidesMargin < slides.length * 100 - 100) {
    slidesMargin += 100;
  } else {
    slidesMargin = 0;
  }

  slidesContainer.style.marginLeft = "-" + slidesMargin + "%";
  slideMoved = true;
  setTimeout(function () {
    slideMoved = false;
  }, 5000);
});

/***/ }),

/***/ "./resources/sass/backend/app.scss":
/*!*****************************************!*\
  !*** ./resources/sass/backend/app.scss ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/frontend/app.scss":
/*!******************************************!*\
  !*** ./resources/sass/frontend/app.scss ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*****************************************************************************************************************!*\
  !*** multi ./resources/js/frontend/app.js ./resources/sass/frontend/app.scss ./resources/sass/backend/app.scss ***!
  \*****************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/stefanbeader/code/models/resources/js/frontend/app.js */"./resources/js/frontend/app.js");
__webpack_require__(/*! /Users/stefanbeader/code/models/resources/sass/frontend/app.scss */"./resources/sass/frontend/app.scss");
module.exports = __webpack_require__(/*! /Users/stefanbeader/code/models/resources/sass/backend/app.scss */"./resources/sass/backend/app.scss");


/***/ })

/******/ });