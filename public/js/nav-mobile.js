import { ModalClass, BodyClass } from "./constants.js";

const btnMobile = document.getElementById("button--mobile");
const menuMobile = document.getElementById("menu--mobile");
const body = document.querySelector("body");


const main = () => {
  btnMobile.addEventListener("click", handleClass);
  body.addEventListener("click", handleClass);
};

const handleClass = () => {
  
  showOrHideClass(menuMobile, ModalClass.ACTIVETRANSFORME);
  showOrHideClass(body, BodyClass.SHADOW);
};

const showOrHideClass = (element, classeName) => {
  const hasClass = element.classList.contains(classeName);

  hasClass
    ? element.classList.remove(classeName)
    : element.classList.add(classeName);
};

addEventListener("load", main);
