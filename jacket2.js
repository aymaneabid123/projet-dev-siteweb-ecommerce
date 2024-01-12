const products = [
    {
      id: 1,
      title: "COSTUME raye",
      price: 650,
      colors: [{
        code:"beige",
        img:"color2 jacket noir.png",
      },
        {
          code: "blue",
          img: "color2 jacket vert.png",
        },
      ],
    },
    {
      id: 2,
      title: "COSTUME CARROU WITH JILIE",
      price: 750,
      colors: [
        {
          code: "grey",
          img: "costume gris carrou.png",
        },
        {
          code: "brown",
          img: "costume marron carrou.png",
        },
        {
          code: "blue",
          img: "costume blue carrou.png",
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
