"use strict";

const items = document.querySelectorAll(".slider-image");
const btnNav = document.querySelectorAll(".btn-bottom");
const nbSlide = items.length;
const arrowUp = document.querySelector(".arrow-right");
const arrowDown = document.querySelector(".arrow-left");
let count = 0;

const main = () => {
  arrowUp.addEventListener("click", nextSlide);
  arrowDown.addEventListener("click", previousSlide);
  document.addEventListener("keydown", keyPress);
  btnNav.forEach((element) => {
    element.addEventListener("click", (event) => selectSlide(event));
  });
};

const nextSlide = () => {
  items[count].classList.remove("slider-active");

  if (count < nbSlide - 1) {
    count++;
  } else {
    count = 0;
  }

  items[count].classList.add("slider-active");
};

const previousSlide = () => {
  items[count].classList.remove("slider-active");

  if (count > 0) {
    count--;
  } else {
    count = nbSlide - 1;
  }

  items[count].classList.add("slider-active");
};

const keyPress = (e) => {
  if (e.keyCode === 37) {
    previousSlide();
  } else if (e.keyCode === 39) {
    nextSlide();
  }
};

const selectSlide = (event) => {
  items[count].classList.remove("slider-active");
  count = event.target.dataset.item;
  items[count].classList.add("slider-active");
};

window.addEventListener("load", main);
