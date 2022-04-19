const btnMobile = document.getElementById('button-mobile');
const menuMobile = document.getElementById('menu-mobile');
const shadow = document.getElementById('shadow');


const main = () => {

  btnMobile.addEventListener("click", addDiv);
  shadow.addEventListener("click", removeDiv);

  }
  
  const addDiv = () => {
    menuMobile.classList.add("active");
    shadow.classList.add("active_shadow");
  }

  const removeDiv = () => {
    menuMobile.classList.remove("active");
    shadow.classList.remove("active_shadow");
  }

  const beOrNotToBe = (element, action, classeName) => {
    element.classList.action(classeName)
  }
  
  addEventListener("load", main);