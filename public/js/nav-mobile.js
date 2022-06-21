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