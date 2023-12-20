document.addEventListener("DOMContentLoaded", function () {
    loadScript();
  });
  
  
  function loadScript() {const popupopen = document.getElementById('menu-item-9');

popupopen.addEventListener("click", function openForm() {
  document.getElementById("myForm").style.display = "block";
});
const popupclose = document.getElementById('btn');

popupclose.addEventListener("click", function closeForm() {
    document.getElementById("myForm").style.display = "none";
  });

  }