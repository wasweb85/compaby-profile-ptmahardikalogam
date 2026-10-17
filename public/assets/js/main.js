(function () {
    'use strict';

    var hd = document.getElementById('hd');
    var nv = document.getElementById('nv');
    var mb = document.getElementById('mb');

    // Motion preference and throttling flag
    var rm = matchMedia('(prefers-reduced-motion: reduce)').matches;
    var tk = 0;

    // Header scroll & Hero parallax
    function scrollState() {
        if (hd) {
            hd.classList.toggle('scrolled', window.scrollY > 30);
        }
        if (rm || tk) return;
        tk = 1;
        requestAnimationFrame(function () {
            tk = 0;
            var e = document.querySelector('.hero, .phero');
            if (e) {
                e.style.setProperty('--py', Math.min(window.scrollY * 0.3, e.offsetHeight * 0.3) + 'px');
            }
        });
    }

    // Mobile menu toggle
    if (mb && nv) {
        mb.addEventListener('click', function (e) {
            e.stopPropagation();
            var isOpen = nv.classList.toggle('open');
            mb.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });

        // Close menu when clicking navigation links
        var navLinks = nv.querySelectorAll('a');
        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                nv.classList.remove('open');
                mb.setAttribute('aria-expanded', 'false');
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', function (e) {
            if (!nv.contains(e.target) && !mb.contains(e.target) && nv.classList.contains('open')) {
                nv.classList.remove('open');
                mb.setAttribute('aria-expanded', 'false');
            }
        });
    }

    // Scroll listener
    window.addEventListener('scroll', scrollState, { passive: true });

    // Initial check on page load
    scrollState();
})();
