import { ModalClass, BodyClass } from "./constants.js";

// .displayBts = tous les boutons "supprimer"
const displayBtns = document.querySelectorAll(".displayBtns");
// #closePopup = bouton qui ferme la popup
const removeBtn = document.querySelector("#closePopup");
// .myPopup = classe qui determine le css de la modale. De base en transforme (0)
const modal = document.querySelector(".myPopup");
const body = document.querySelector("body");

const main = () => {

  // si une seule instruction :
  // displayBtns.forEach((element) => console.log(element));
  
  displayBtns.forEach((element) => {
    console.log(element);
    element.addEventListener("click", handleClass);
  });

  removeBtn.addEventListener("click", handleClass);

  // (e) => handleClass(e)
  // puis e.target.id
  // Ou bien () => handleClass(element) direct
};

const targetEvenement = (evt) => {
  evt.target;
};

const handleClass = () => {
  showOrHideClass(modal, ModalClass.ACTIVE);
  showOrHideClass(body, BodyClass.SHADOW);
};

const showOrHideClass = (element, classeName) => {
  
  const hasClass = element.classList.contains(classeName);

  hasClass
    ? element.classList.remove(classeName)
    : element.classList.add(classeName);
};

window.addEventListener("load", main);

// cette condition est la même sous ce format:
// if (result) {
//   element.classList.remove(classeName);
// } else {
//   element.classList.add(classeName);
// };
