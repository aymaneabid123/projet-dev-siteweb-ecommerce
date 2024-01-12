const wrapper = document.querySelector(".sliderWrapper");
const menuItems = document.querySelectorAll(".menuItem");

const products = [
  {
    id: 1,
    title: "COSTUME MATH",
    price: 650,
    colors: [{
      code:"grey",
      img:"color1 chemise blue.png",
    },
      {
        code: "blue",
        img: "color1 chemise blanc.png",
      },
      {
        code: "black",
        img: "color1 chemise gris.png",
      },
      {
        code: "black",
        img: "color1 chemise noir.png",
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
const currentProductTitle = document.querySelector(".productTitle");
const currentProductPrice = document.querySelector(".productPrice");
const currentProductColors = document.querySelectorAll(".color");
const currentProductSizes = document.querySelectorAll(".size");
const currentProductDesc= document.querySelector(".productDesc");

menuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    //change the current slide
    wrapper.style.transform = `translateX(${-100 * index}vw)`;

    //change the choosen product
    choosenProduct = products[index];

    //change texts of currentProduct
    currentProductTitle.textContent = choosenProduct.title;
    currentProductPrice.textContent = "MAD" + choosenProduct.price;
    currentProductImg.src = choosenProduct.colors[0].img;

    //assing new colors
    currentProductColors.forEach((color, index) => {
      color.style.backgroundColor = choosenProduct.colors[index].code;
    });
  });
});

currentProductColors.forEach((color, index) => {
  color.addEventListener("click", () => {
    currentProductImg.src = choosenProduct.colors[index].img;
  });
});

currentProductSizes.forEach((size, index) => {
  size.addEventListener("click", () => {
    size.style.backgroundColor = "black";
    size.style.color = "white";
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