//@ts-nocheck
export const nav = document.querySelector("#nav");
export const closeNav = document.querySelector("#closeNav");
export const openNav = document.querySelector("#openNav");

export const toggleNav = () => {
  nav.classList.toggle('nav-open');
  nav.classList.toggle('nav-closed');
  closeNav.classList.toggle('hidden');
  openNav.classList.toggle('hidden');
};

if(openNav || closeNav) {
    openNav.addEventListener('click', toggleNav);
    closeNav.addEventListener('click', toggleNav);
}

