"use strict";

const DELAY = 1;
const PADDING = 32;

const hide = (el) => changeHeighAndPadding(el, 0, `0 ${PADDING}px`);
const pListener = (p) => p.addEventListener("click", () => handleClick(p));

const main = () => {
  const pFirst = document.querySelectorAll("#testAlex");
  pFirst.forEach(pListener);
};

const handleClick = (el) => {
  const pLast = document.querySelectorAll("#testDetail");
  hideAll(pLast);
  showContent(el.nextElementSibling);
};

const showContent = (el) => {
  if (el.clientHeight > 0) return;
  changeHeighAndPadding(el, "auto");
  const height = el.clientHeight;
  changeHeighAndPadding(el, 0);
  const show = () => changeHeighAndPadding(el, height + "px", PADDING + "px");
  setTimeout(show, DELAY);
};

const hideAll = (arr) => {
  const hideElements = () => arr.forEach(hide);
  setTimeout(hideElements, DELAY);
};

const changeHeighAndPadding = (el, height, padding = null) => {
  el.style.height = height;
  if (!padding) return;
  el.style.padding = padding;
};

addEventListener("load", main);