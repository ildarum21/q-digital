window.onload = () => {
  let bg = document.querySelector(".bg");
  let menu = document.querySelector(".container-menu");
  let circle = document.querySelector(".exit__line");
  document.querySelector(".exit__circle").onclick = () => {
    menu.classList.toggle("active");
    circle.classList.toggle("active");
  };

  let crest = document.querySelectorAll(".day_crest");
  let descr = document.querySelectorAll(".day_description");
  for (let i = 0; i < crest.length; i++) {
    crest[i].onclick = (e) => {
      crest[i].classList.toggle("active");
      descr[i].classList.toggle("active");
    }
  }
};
