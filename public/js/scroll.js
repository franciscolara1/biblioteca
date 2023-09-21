const leftBtn = document.querySelector(".button-arrow-left");
const rightBtn = document.querySelector(".button-arrow-right");

const content = document.querySelector(".scrolling-container");

const leftBtn2 = document.querySelector(".button-arrow-left2");
const rightBtn2 = document.querySelector(".button-arrow-right2");

const content2 = document.querySelector(".scrolling-container2");

rightBtn.addEventListener("click", () =>{
    content.scrollLeft += 400;
});

leftBtn.addEventListener("click", () =>{
    content.scrollLeft -= 400;
})


rightBtn2.addEventListener("click", () =>{
    content2.scrollLeft += 400;
});

leftBtn2.addEventListener("click", () =>{
    content2.scrollLeft -= 400;
});