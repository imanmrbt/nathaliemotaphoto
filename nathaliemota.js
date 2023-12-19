document.addEventListener("DOMContentLoaded", function () {
    Script();
  });
  
  
  function Script() {
const test = document.getElementById('menu-item-9');

test.addEventListener("click", function openForm() {
  document.getElementById("myForm").style.display = "block";
});
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}}