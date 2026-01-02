const cube = document.querySelector(".cube");

document.addEventListener("mousemove", e => {
  const x = (window.innerHeight / 2 - e.clientY) / 15;
  const y = (window.innerWidth / 2 - e.clientX) / 15;
  cube.style.transform = `rotateX(${x}deg) rotateY(${y}deg)`;
});
