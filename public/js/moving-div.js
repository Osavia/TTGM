"use strict";

const movingDiv = document.querySelector(".movingDiv");


const main = () => {
  document.body.addEventListener("scroll", onScroll);
};

const onScroll = () => {
  const posY = document.body.scrollTop;
  const yMax = document.body.scrollHeight - innerHeight;
  const xMax = window.innerWidth - 100; // la div fait 100px de width
  // width = xMax
  // posY  = yMax

  const leftValue = (xMax * posY) / yMax;
  movingDiv.style.left = `${leftValue}px`;
};

window.addEventListener("load", main);