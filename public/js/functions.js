const showOrHideClass = (element, classeName) => {
  const hasClass = element.classList.contains(classeName);

  hasClass
    ? element.classList.remove(classeName)
    : element.classList.add(classeName);

  // cette condition est la même sous ce format:
  // if (result) {
  //   element.classList.remove(classeName);
  // } else {
  //   element.classList.add(classeName);
  // };
};

export { showOrHideClass };
