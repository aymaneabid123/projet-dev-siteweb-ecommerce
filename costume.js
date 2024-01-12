
const products = [
  {
    id: 1,
    title: "COSTUME raye",
    price: 650,
    colors: [{
      code:"beige",
      img:"color3 noir.png",
    },
      {
        code: "blue",
        img: "color3 blue.png",
      },
      {
        code: "grey",
        img: "color3 gris.png",
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

const color_btns=document.querySelectorAll('.color1');
color_btns.forEach(color1=>{
    color1.addEventListener('click', () => {
        let colorNameclass=color1.className;
        console.log(colorNameclass);
        setNewcolor(colorNameclass);
    });
});

function setNewcolor(color){
   console.log (document.querySelector('.product1img img').src=color+".png");
}
const color_btns1=document.querySelectorAll('.color2');
color_btns1.forEach(color2=>{
    color2.addEventListener('click', () => {
        let colorNameclass=color2.className;
        console.log(colorNameclass);
        setNewcolor1(colorNameclass);
    });
});

function setNewcolor1(color){
   console.log (document.querySelector('.product2img img').src=color+".png");
}
const color_btns2=document.querySelectorAll('.color3');
color_btns2.forEach(color3=>{
    color3.addEventListener('click', () => {
        let colorNameclass=color3.className;
        console.log(colorNameclass);
        setNewcolor2(colorNameclass);
    });
});

function setNewcolor2(color){
   console.log (document.querySelector('.product1pourimg').src=color+".png");
}
const color_btns3=document.querySelectorAll('.color4');
color_btns3.forEach(color4=>{
    color4.addEventListener('click', () => {
        let colorNameclass=color4.className;
        console.log(colorNameclass);
        setNewcolor3(colorNameclass);
    });
});

function setNewcolor3(color){
   console.log (document.querySelector('.product2pourimg').src=color+".png");
}

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

const productButton = document.querySelector(".productButton");
const payment = document.querySelector(".payment");
const close = document.querySelector(".close");

productButton.addEventListener("click", () => {
  payment.style.display = "flex";
});

close.addEventListener("click", () => {
  payment.style.display = "none";
});



