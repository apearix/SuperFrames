/**
 * Vanilla JS Accordion Helper
 */
export function initAccordions() {
    const accordionTriggers = document.querySelectorAll('[data-accordion-trigger]');

    accordionTriggers.forEach((trigger) => {
        trigger.addEventListener('click', () => {
            const targetId = trigger.getAttribute('data-accordion-target');
            const target = document.querySelector(targetId);

            if (target) {
                const isExpanded = trigger.getAttribute('aria-expanded') === 'true';
                trigger.setAttribute('aria-expanded', !isExpanded);
                target.classList.toggle('hidden');

                const icon = trigger.querySelector('[data-accordion-icon]');
                if (icon) {
                    icon.classList.toggle('rotate-180');
                }
            }
        });
    });
}