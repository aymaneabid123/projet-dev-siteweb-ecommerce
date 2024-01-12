const products = [
    {
      colors: [{
        code:"beige",
        img:"color1 veste gris.png",
      },
        {
          code: "blue",
          img: "color1 veste vert.png",
        },
        {
            code: "blue",
            img: "color1 veste roz.png",
          },
      ],
    },
    
    
  ];
  let choosenProduct = products[0];

const currentProductImg = document.querySelector(".productImg");
const currentProductColors = document.querySelectorAll(".color");
currentProductColors.forEach((color, index) => {
  color.addEventListener("click", () => {
    currentProductImg.src = choosenProduct.colors[index].img;
  });
});

  const productButton = document.querySelector(".productButton");
const payment = document.querySelector(".payment");
const close = document.querySelector(".close");

productButton.addEventListener("click", () => {
  payment.style.display = "flex";
});

close.addEventListener("click", () => {
  payment.style.display = "none";
});
window.addEventListener("scroll",function(){
  var header=this.document.querySelector(".navbar");
  header.classList.toggle("sticky",window.scrollY>0);
});
const categorieButton = document.querySelector(".cat");
const type = document.querySelector(".type");
categorieButton.addEventListener("mouseover", () => {
type.style.display = "flex";
});
categorieButton.addEventListener("mouseout", () => {
type.style.display = "none";
});