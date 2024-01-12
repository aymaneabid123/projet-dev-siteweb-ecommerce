

window.addEventListener("scroll",function(){
  var header=this.document.querySelector(".navbar");
  header.classList.toggle("sticky",window.scrollY>600);
});
const categorieButton = document.querySelector(".cat");
const type = document.querySelector(".type");
categorieButton.addEventListener("mouseover", () => {
  type.style.display = "flex";
});
categorieButton.addEventListener("mouseout", () => {
  type.style.display = "none";
});
const row = document.querySelector('.row');
const viewproduct = document.querySelector('.viewproduct');
row.addEventListener("mouseover", () => {
  viewproduct.style.display = "flex";
});
row.addEventListener("mouseout", () => {
  viewproduct.style.display = "none";
});
const viewproduct1 = document.querySelector('.viewproduct1');
const row1 = document.querySelector('.row1');
row1.addEventListener("mouseover", () => {
  viewproduct1.style.display = "flex";
});
row1.addEventListener("mouseout", () => {
  viewproduct1.style.display = "none";
});
const viewproduct2 = document.querySelector('.viewproduct2');
const row2 = document.querySelector('.row2');
row2.addEventListener("mouseover", () => {
  viewproduct2.style.display = "flex";
});
row2.addEventListener("mouseout", () => {
  viewproduct2.style.display = "none";
});


