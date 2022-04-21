import { ModalClass, BodyClass } from "./constants.js";

// .displayBts = tous les boutons "supprimer"
const displayBtns = document.querySelectorAll(".displayBtns");
// #closePopup = bouton qui ferme la popup
const removeBtn = document.querySelector("#closePopup");
// .myPopup = classe qui determine le css de la modale. De base en transforme (0)
const modal = document.querySelector(".myPopup");
const body = document.querySelector("body");
const btnYes = document.querySelector("#myLink");

const main = () => {
  // si une seule instruction dans le forEach, pas besoin des {} :
  // displayBtns.forEach((element) => console.log(element));

  displayBtns.forEach((element) => {
    console.log(element);
    element.addEventListener("click", (event) => handleClass(event));
    // event = l'évent au click
  });

  removeBtn.addEventListener("click", handleClass);
};

const handleClass = (event) => {
  getPHPElement(event);
  showOrHideClass(modal, ModalClass.ACTIVESCALE);
  showOrHideClass(body, BodyClass.SHADOW);
};

const getPHPElement = (event) => {
  // on récupère 'event', l'évent au click
  // target cible l'endroit cliqué
  let clickedElement = event.target;
  console.log(clickedElement);

  // dataset recupère la DATA attribute indiquée dans le bouton au niveau html
  console.log(clickedElement.dataset.id_article);
  console.log(clickedElement.dataset.title_article);

  // innerHTML sur les Id "show_title_article" et "show_id_article"
  // de la valeur DATA attribute récupérée au moment de l'event
  document.getElementById("show_title_article").innerHTML =
    clickedElement.dataset.title_article;


  // setAttribute(nom de l'attribu, valeur)
  // permet de mettre un href dynamique à la balise btnYes
  btnYes.setAttribute(
    "href",
    "?page=delete_article&id=" + clickedElement.dataset.id_article
  );
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
