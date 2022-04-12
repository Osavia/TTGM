import { ModalClass, BodyClass } from "./constants.js";

const displayBtn = document.querySelector("#openModal");
const removeBtn = document.querySelector("#close");
const modal = document.querySelector("#popup");    
const body = document.querySelector("body");

const main = () => {
  displayBtn.addEventListener("click", handleClass);
  removeBtn.addEventListener("click", handleClass);
  console.log('hola');
};

const handleClass = () => {

  showOrHideClass(modal, ModalClass.ACTIVE);
  showOrHideClass(body, BodyClass.SHADOW);
};

const showOrHideClass = (element, classeName) => {

  const hasClass = element.classList.contains(classeName);

  hasClass ? element.classList.remove(classeName) : element.classList.add(classeName);

};

window.addEventListener("load", main);
























// cette condition est la même sous ce format:
// if (result) {
//   element.classList.remove(classeName);
// } else {
//   element.classList.add(classeName);
// };