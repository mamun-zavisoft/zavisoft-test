(function () {
    const loader = document.getElementById('global-loader');

    if (!loader) return;

    // Show loader
    function showLoader() {
        loader.classList.remove('hidden');
    }

    // Hide loader
    function hideLoader() {
        loader.classList.add('hidden');
    }

    // Page load
    window.addEventListener('load', hideLoader);

    // Link click (route change)
    document.addEventListener('click', function (e) {
        const link = e.target.closest('a');

        if (
            link &&
            link.href &&
            !link.hasAttribute('target') &&
            !link.href.startsWith('javascript:') &&
            !link.href.startsWith('#')
        ) {
            showLoader();
        }
    });

    // Form submit
    document.addEventListener('submit', function () {
        showLoader();
    });

    // Browser back/forward
    window.addEventListener('beforeunload', showLoader);

})();
