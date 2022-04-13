import { ModalClass, BodyClass } from "./constants.js";

const displayBtn = document.querySelector(".displayModal");
const removeBtn = document.querySelector(".closePopup");
const modal = document.querySelector(".openPopup");    
const body = document.querySelector("body");


const main = () => {
  displayBtn.addEventListener("click", handleClass);
  removeBtn.addEventListener("click", handleClass);
  console.log(MouseEvent);
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