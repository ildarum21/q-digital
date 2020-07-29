window.onload = () => {
  let bg = document.querySelector(".bg");
  let menu = document.querySelector(".container-menu");
  let circle = document.querySelector(".exit__line");
  document.querySelector(".exit__circle").onclick = () => {
    menu.classList.toggle("active");
    circle.classList.toggle("active");
    bg.classList.toggle("active");
  };

  let crest = document.querySelectorAll(".day_crest");
  let descr = document.querySelectorAll(".day_description");
  for (let i = 0; i < crest.length; i++) {
    crest[i].onclick = (e) => {
      crest[i].classList.toggle("active");
      descr[i].classList.toggle("active");
    }
  }


  let video = document.querySelectorAll(".video");
  let playbutton = document.querySelectorAll(".play_pause");
  for (let i = 0; i < playbutton.length; i++) {
    playbutton[i].onclick = (e) => {
      playbutton[i].classList.toggle("active");
      if (video[i].paused) {
        video[i].play();
      } else {
        video[i].pause();
      }
    }
  }
};