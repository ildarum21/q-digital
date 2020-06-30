window.onload = () => {
  let bg = document.querySelector(".bg");
  let menu = document.querySelector(".container-menu");
  let circle = document.querySelector(".exit__line");
  document.querySelector(".exit__circle").onclick = () => {
      menu.classList.toggle("active");
      circle.classList.toggle("active");
  };
};
