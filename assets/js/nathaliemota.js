document.addEventListener("DOMContentLoaded", function () {
    loadScript();
  });
  
  
  function loadScript() {
/**contact form***************************************************************************/
const popupopen = document.getElementById('menu-item-9');
  popupopen.addEventListener("click", function openForm() {
    document.getElementById("myForm").style.display = "block";
});

const popupclose = document.getElementById('btn');
  popupclose.addEventListener("click", function closeForm() {
    document.getElementById("myForm").style.display = "none";
});

/***********burger*******************************************************************/
var burgerMenu = document.getElementById('burger-menu');

var overlay = document.getElementById('navigation');

burgerMenu.addEventListener('click', function() {
this.classList.toggle("close");
overlay.classList.toggle("overlay");
});
/**lightbox****************************************************************************/

  }