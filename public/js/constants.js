const ModalClass = {
  ACTIVESCALE: "active-scale",
  ACTIVETRANSFORME: "active-transforme",
}
const BodyClass = {
  SHADOW: "shadow",
}

const showOrHideClass = (element, classeName) => {
  const hasClass = element.classList.contains(classeName);

  hasClass
    ? element.classList.remove(classeName)
    : element.classList.add(classeName);
};

export { ModalClass, BodyClass, showOrHideClass };