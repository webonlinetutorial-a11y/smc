document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.querySelector('[data-admin-menu-toggle]');

    if (!toggle) {
        return;
    }

    toggle.addEventListener('click', function () {
        var isOpen = document.body.classList.toggle('admin-nav-open');
        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
});
