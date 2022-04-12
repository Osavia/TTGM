"use strict";

const movingDiv = document.querySelector(".movingDiv");

const main = () => {
  document.body.addEventListener("scroll", onScroll);
};

const onScroll = () => {
  const posY = document.body.scrollTop;
  const yMax = document.body.scrollHeight;
  const xMax = window.innerWidth - 100; // la div fait 100px de width

  console.log(posY);
  console.log(yMax);
  console.log(xMax);
  // width = xMax
  // posY  = yMax

  const y = yMax - innerHeight;
  console.log(y);

  // 100 <=> y
  // x   <=> scrollY

  // const leftValue = (posY * xMax)/ yMax;
  const leftValue = (xMax * posY) / y;
  movingDiv.style.left = `${leftValue}px`;
};

window.addEventListener("load", main);