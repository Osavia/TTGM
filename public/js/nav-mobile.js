"use strict";

import { ModalClass, BodyClass } from "./constants.js";
import { showOrHideClass } from "./functions.js";

const btnMobile = document.getElementById("button--mobile");
const menuMobile = document.getElementById("menu--mobile");
const closeMenuMobile = document.getElementById("close--menu-mobile");

const main = () => {
  btnMobile.addEventListener("click", handleClass);
  closeMenuMobile.addEventListener("click", handleClass);
};

const handleClass = () => {

  showOrHideClass(menuMobile, ModalClass.ACTIVETRANSFORME);
  showOrHideClass(closeMenuMobile, ModalClass.ACTIVETRANSFORME);
};

window.addEventListener("load", main);

// const GlobalActions = {
//   ADD_CLASS: 1,
//   REMOVE_CLASS: 2,
// };

// const Classes = {
//   ACTIVE: "active-transforme",
//   SHOW: "show",
// };

// const main = () => {
//   // const menuBtn = document.getElementById("menu");
//   // const shadow = document.getElementById("shadow");
//   // const navMenu = document.getElementById("nav-menu");
//   const btnMobile = document.getElementById("button--mobile");
//   const shadowMobile = document.getElementById("shadow-mobile");
//   const menuMobile = document.getElementById("menu--mobile");

//   btnMobile.addEventListener("click", () =>
//     handleClick(GlobalActions.ADD_CLASS, menuMobile, shadowMobile)
//   );
//   shadowMobile.addEventListener("click", () =>
//     handleClick(GlobalActions.REMOVE_CLASS, menuMobile, shadowMobile)
//   );
// };

// const handleClick = (action, menu, shadow) => {
//   handleClassByAction(menu, Classes.ACTIVE, action);
//   handleClassByAction(shadow, Classes.SHOW, action);
// };

// const handleClassByAction = (element, className, action) => {
//   action === GlobalActions.ADD_CLASS
//     ? element.classList.add(className)
//     : element.classList.remove(className);
// };
