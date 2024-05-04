const nav = document.querySelector("#nav")
const closeNav = document.querySelector("#closeNav")
const openNav = document.querySelector("#openNav")

const toggleNav = () => {
  nav.classList.toggle('nav-open');
  nav.classList.toggle('nav-closed');
  closeNav.classList.toggle('hidden');
  openNav.classList.toggle('hidden');
 }
 
 openNav.addEventListener('click', toggleNav);
 closeNav.addEventListener('click', toggleNav);

