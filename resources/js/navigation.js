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

//<nav id="nav" class="fixed p-4 right-0 w-[300px] top-0 bottom-0 bg-black bg-opacity-90 md:shadow-xl z-[100] flex flex-col gap-8">
