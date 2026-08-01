/**
 * Grid Filtering System
 */
export function initFilters() {
    const filterContainer = document.querySelector('[data-filter-container]');
    if (!filterContainer) return;

    const filterButtons = filterContainer.querySelectorAll('[data-filter-btn]');
    const items = filterContainer.querySelectorAll('[data-filter-item]');

    filterButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-filter-btn');

            filterButtons.forEach((btn) => btn.classList.remove('active'));
            button.classList.add('active');

            items.forEach((item) => {
                const itemCategory = item.getAttribute('data-category');
                if (category === 'all' || itemCategory === category) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
}