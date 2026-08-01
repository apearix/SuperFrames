export function initTabs() {
    const tabContainers = document.querySelectorAll('[data-tabs]');

    tabContainers.forEach((container) => {
        const triggers = container.querySelectorAll('[data-tab-trigger]');
        const panels = container.querySelectorAll('[data-tab-panel]');

        triggers.forEach((trigger) => {
            trigger.addEventListener('click', () => {
                const targetPanel = trigger.getAttribute('data-tab-trigger');

                triggers.forEach((t) => t.classList.remove('active', 'border-[var(--color-primary)]', 'text-[var(--color-primary)]'));
                panels.forEach((p) => p.classList.add('hidden'));

                trigger.classList.add('active', 'border-[var(--color-primary)]', 'text-[var(--color-primary)]');
                
                const panel = container.querySelector(`[data-tab-panel="${targetPanel}"]`);
                if (panel) {
                    panel.classList.remove('hidden');
                }
            });
        });
    });
}