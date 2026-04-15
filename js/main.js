/* ============================================================
   LMC FLOWERS — JavaScript Principal
   Toda la lógica custom del sitio: nav scroll, modales,
   idioma, back-to-top, menú mobile.
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {

    // ── Inicializar Lucide Icons ──────────────────────────
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // ── Referencias DOM ──────────────────────────────────
    const backToTopButton  = document.getElementById('back-to-top');
    const searchModal      = document.getElementById('search-modal');
    const searchModalOpen  = document.getElementById('search-modal-open');
    const searchModalClose = document.getElementById('search-modal-close');
    const searchModalInput = document.getElementById('search-modal-input');
    const langMenu         = document.getElementById('lang-menu');
    const langTrigger      = document.getElementById('lang-trigger');
    const langCurrentCode  = document.getElementById('lang-current-code');
    const langCurrentFlag  = document.getElementById('lang-current-flag');
    const menuOpenButton   = document.getElementById('mobile-menu-open');
    const menuCloseButton  = document.getElementById('mobile-menu-close');
    const mobileMenuModal  = document.getElementById('mobile-menu-modal');
    const mobileMenuLinks  = document.querySelectorAll('.mobile-menu-link');

    // ── Smooth Scroll to Top ──────────────────────────────
    const smoothScrollToTop = (duration = 1100) => {
        const startY = window.scrollY || window.pageYOffset;
        if (startY <= 0) return;

        const startTime = performance.now();
        const easeInOutCubic = (t) =>
            t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2;

        const step = (currentTime) => {
            const elapsed  = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const eased    = easeInOutCubic(progress);
            window.scrollTo(0, Math.round(startY * (1 - eased)));
            if (progress < 1) requestAnimationFrame(step);
        };

        requestAnimationFrame(step);
    };

    // ── Nav Scroll State ──────────────────────────────────
    window.addEventListener('scroll', () => {
        const nav = document.getElementById('main-nav');
        if (!nav) return;

        if (window.scrollY > 40) {
            nav.classList.add('nav-scrolled');
            nav.classList.remove('h-24');
            nav.classList.add('h-20');
        } else {
            nav.classList.remove('nav-scrolled');
            nav.classList.add('h-24');
            nav.classList.remove('h-20');
        }

        if (backToTopButton) {
            if (window.scrollY > 360) {
                backToTopButton.classList.add('is-visible');
            } else {
                backToTopButton.classList.remove('is-visible');
            }
        }
    });

    // ── Back to Top ───────────────────────────────────────
    if (backToTopButton) {
        backToTopButton.addEventListener('click', () => smoothScrollToTop(1100));
    }

    // ── Search Modal ──────────────────────────────────────
    const openSearchModal = () => {
        if (!searchModal) return;
        searchModal.classList.add('is-open');
        searchModal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('search-open');
        if (searchModalInput) {
            setTimeout(() => searchModalInput.focus(), 50);
        }
    };

    const closeSearchModal = () => {
        if (!searchModal) return;
        searchModal.classList.remove('is-open');
        searchModal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('search-open');
    };

    if (searchModalOpen)  searchModalOpen.addEventListener('click', openSearchModal);
    if (searchModalClose) searchModalClose.addEventListener('click', closeSearchModal);
    if (searchModal) {
        searchModal.addEventListener('click', (e) => {
            if (e.target === searchModal) closeSearchModal();
        });
    }

    // ── Language Selector ─────────────────────────────────
    if (langTrigger && langMenu) {
        langTrigger.addEventListener('click', () => {
            const isOpen = langMenu.classList.toggle('is-open');
            langTrigger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });

        langMenu.querySelectorAll('.lang-option').forEach((option) => {
            option.addEventListener('click', () => {
                const code = option.getAttribute('data-lang-code');
                const flag = option.getAttribute('data-lang-flag');
                if (code && langCurrentCode) langCurrentCode.textContent = code;
                if (flag && langCurrentFlag) langCurrentFlag.src = flag;
                langMenu.classList.remove('is-open');
                langTrigger.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // ── Mobile Menu Modal ─────────────────────────────────
    const openMobileMenu = () => {
        if (!mobileMenuModal) return;
        mobileMenuModal.classList.add('is-open');
        document.body.classList.add('menu-open');
        mobileMenuModal.setAttribute('aria-hidden', 'false');
        if (menuOpenButton) menuOpenButton.setAttribute('aria-expanded', 'true');
    };

    const closeMobileMenu = () => {
        if (!mobileMenuModal) return;
        mobileMenuModal.classList.remove('is-open');
        document.body.classList.remove('menu-open');
        mobileMenuModal.setAttribute('aria-hidden', 'true');
        if (menuOpenButton) menuOpenButton.setAttribute('aria-expanded', 'false');
    };

    if (menuOpenButton)  menuOpenButton.addEventListener('click', openMobileMenu);
    if (menuCloseButton) menuCloseButton.addEventListener('click', closeMobileMenu);
    if (mobileMenuModal) {
        mobileMenuModal.addEventListener('click', (e) => {
            if (e.target === mobileMenuModal) closeMobileMenu();
        });
    }
    mobileMenuLinks.forEach((link) => link.addEventListener('click', closeMobileMenu));

    // ── Escape key cierra cualquier modal abierto ─────────
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            if (mobileMenuModal && mobileMenuModal.classList.contains('is-open')) closeMobileMenu();
            if (searchModal && searchModal.classList.contains('is-open')) closeSearchModal();
        }
    });

    // ── Click fuera cierra dropdown de idioma ─────────────
    document.addEventListener('click', (e) => {
        if (langMenu && langMenu.classList.contains('is-open') && !langMenu.contains(e.target)) {
            langMenu.classList.remove('is-open');
            if (langTrigger) langTrigger.setAttribute('aria-expanded', 'false');
        }
    });

});
