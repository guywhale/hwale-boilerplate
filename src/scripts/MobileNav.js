const MobileNav = (el) => {
  let open = false;
  const html = document.querySelector('html');
  const navBtn = document.querySelector('[data-nav-btn]');
  const topLine = navBtn.querySelector('[data-top]');
  const middleLine = navBtn.querySelector('[data-middle]');
  const bottomLine = navBtn.querySelector('[data-bottom]');

  if (navBtn) {
    navBtn.addEventListener('click', (ev) => {
      open = !open;

      if (open) {
        html.style.overflow = 'hidden';
        el.classList.remove('translate-x-[125%]');
        el.classList.add('translate-x-0');
        navBtn.classList.remove('justify-between');
        navBtn.classList.add('justify-center');
        topLine.classList.add('absolute', 'rotate-45');
        middleLine.classList.add('absolute', 'opacity-0');
        bottomLine.classList.add('absolute', '-rotate-45');
      } else {
        html.style.overflow = 'auto';
        el.classList.add('translate-x-[125%]');
        el.classList.remove('translate-x-0');
        navBtn.classList.add('justify-between');
        navBtn.classList.remove('justify-center');
        topLine.classList.remove('absolute', 'rotate-45');
        middleLine.classList.remove('absolute', 'opacity-0');
        bottomLine.classList.remove('absolute', '-rotate-45');
      }
    })
  }
}

export default MobileNav;
