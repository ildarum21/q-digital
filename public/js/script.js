console.log('hi');
window.onload = () => {
  document.querySelector(".exit__circle").onclick = () => {
    let bg = document.querySelector(".bg");
    let menu = document.querySelector(".container");
    let circle = document.querySelector('.exit__circle');
    if (bg.style.height != 100 + "px") {
      bg.style.height = 100 + "px";
      menu.style.opacity = 0;
     circle.innerHTML=' <img class="exit__line" src="/public/images/burger.png" alt="">';
    }else{
        bg.style.height = 970 + "px";
        menu.style.opacity = 1;
        circle.innerHTML='<img class="exit__line" src="/public/images/2line.png" alt=""> ';
       

    }
  };
};
