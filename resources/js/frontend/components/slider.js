const slidesContainer = document.getElementsByClassName('slides')[0];
const slides = [...document.getElementsByClassName('slide')];
const moveLeft = document.getElementById('moveLeft');
const moveRight = document.getElementById('moveRight');
let slidesMargin = 0;
let slideMoved = false;

setInterval(() => {
  if (!slideMoved) {
    if (slidesMargin < (slides.length * 100 - 100)) {
      slidesMargin += 100;
    } else {
      slidesMargin = 0;
    }
    slidesContainer.style.marginLeft = "-" + slidesMargin + "%";
  }
}, 5000);

moveLeft.addEventListener('click', () => {
  if (slidesMargin >= 100) {
    slidesMargin -= 100;
  } else {
    slidesMargin = (slides.length * 100 - 100);
  }
  slidesContainer.style.marginLeft = "-" + slidesMargin + "%";
  slideMoved = true;
  setTimeout(() => {
    slideMoved = false;
  }, 5000);
});

moveRight.addEventListener('click', () => {
  if (slidesMargin < (slides.length * 100 - 100)) {
    slidesMargin += 100;
  } else {
    slidesMargin = 0;
  }
  slidesContainer.style.marginLeft = "-" + slidesMargin + "%";
  slideMoved = true;
  setTimeout(() => {
    slideMoved = false;
  }, 5000);
});