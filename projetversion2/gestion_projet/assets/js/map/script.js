
//-------------------------------------------------------
//sidebar------------------------------------------------

const menuItems = document.querySelectorAll(".menu-item");
const sidebar = document.querySelector(".sidebar");
const buttonClose = document.querySelector(".close-button");
  
menuItems.forEach((item) => {
  item.addEventListener("click", (e) => {
  const target = e.target;
  
    if (
        target.classList.contains("active-item") ||
        !document.querySelector(".active-sidebar")
      ) {
        document.body.classList.toggle("active-sidebar");
      }
  
      showContent(target.dataset.item);
      addRemoveActiveItem(target, "active-item");
    });
  });

  buttonClose.addEventListener("click", () => {
    closeSidebar();
  });
  
  
  function addRemoveActiveItem(target, className) {
    const element = document.querySelector(`.${className}`);
    target.classList.add(className);
    if (!element) return;
    element.classList.remove(className);
  }
  
  
  function showContent(dataContent) {
    const idItem = document.querySelector(`#${dataContent}`);
    addRemoveActiveItem(idItem, "active-content");
  }
  
  
  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
      closeSidebar();
    }
  });
  
  
  document.addEventListener("click", (e) => {
    if (!e.target.closest(".sidebar")) {
      closeSidebar();
    }
  });
  
  function closeSidebar() {
    document.body.classList.remove("active-sidebar");
    const element = document.querySelector(".active-item");
    const activeContent = document.querySelector(".active-content");
    if (!element) return;
    element.classList.remove("active-item");
    activeContent.classList.remove("active-content");
  }


