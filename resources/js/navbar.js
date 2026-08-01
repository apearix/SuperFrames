export function initNavbarScroll() {
    const header = document.querySelector('header');
    if (!header) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            header.classList.add('shadow-md', 'bg-white/98');
        } else {
            header.classList.remove('shadow-md', 'bg-white/98');
        }
    });
}