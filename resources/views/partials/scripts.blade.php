<!-- Global Helpers & Lucide Initialization -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    });

    window.refreshLucideIcons = function() {
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    };
</script>