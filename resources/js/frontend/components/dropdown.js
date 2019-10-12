let lastShownDropdown = false;
const dropdownToggles = [...document.getElementsByClassName('dropdown-toggle')];

dropdownToggles.forEach((item) => {
  item.addEventListener('click', openDropdown);
});

document.getElementsByTagName('body')[0].addEventListener('click', () => {
  if (lastShownDropdown) {
    lastShownDropdown.classList.remove('show');
  }
}, true);

function openDropdown(event) {
  if (lastShownDropdown) {
    lastShownDropdown.classList.remove('show');
  }
  event.preventDefault();
  let dropdown = event.target.nextSibling.nextSibling;
  dropdown.classList.add('show');
  lastShownDropdown = dropdown;
}