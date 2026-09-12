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

document.addEventListener('click', function (event) {
    var button = event.target.closest('[data-copy-path]');

    if (!button) {
        return;
    }

    var input = button.previousElementSibling;

    if (!input || typeof input.value !== 'string') {
        return;
    }

    var restoreLabel = function () {
        setTimeout(function () {
            button.textContent = 'Copy';
        }, 1500);
    };

    var onCopied = function () {
        button.textContent = 'Copied!';
        restoreLabel();
    };

    if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(input.value).then(onCopied, function () {
            input.select();
            document.execCommand('copy');
            onCopied();
        });
    } else {
        input.select();
        document.execCommand('copy');
        onCopied();
    }
});
