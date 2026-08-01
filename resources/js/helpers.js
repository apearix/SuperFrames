/**
 * Formats a number to Indian Rupee (INR) string
 * @param {number} amount 
 * @returns {string}
 */
export function formatCurrency(amount) {
    return new Intl.NumberFormat('en-IN', {
        style: 'currency',
        currency: 'INR',
        maximumFractionDigits: 0
    }).format(amount);
}

/**
 * Trigger native web share or fallback clipboard copy
 * @param {string} title 
 * @param {string} url 
 */
export function shareProduct(title, url) {
    if (navigator.share) {
        navigator.share({
            title: title,
            url: url || window.location.href
        }).catch(() => {});
    } else {
        navigator.clipboard.writeText(url || window.location.href);
        alert('Link copied to clipboard!');
    }
}