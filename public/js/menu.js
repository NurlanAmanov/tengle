  (function () {
    const toggleBtn = document.getElementById('drawer-toggle');
    const closeBtn  = document.getElementById('drawer-close');
    const drawer    = document.getElementById('mobile-drawer');
    const overlay   = document.getElementById('drawer-overlay');
    const iconBars  = document.getElementById('icon-bars');
    const iconX     = document.getElementById('icon-x');

    let lastFocused = null;

    function lockScroll(lock) {
      document.documentElement.classList.toggle('overflow-hidden', lock);
      document.body.classList.toggle('overflow-hidden', lock);
    }

    function openDrawer() {
      lastFocused = document.activeElement;
      drawer.classList.remove('-translate-x-full');
      overlay.classList.remove('hidden');
      iconBars.classList.add('hidden');
      iconX.classList.remove('hidden');
      toggleBtn.setAttribute('aria-expanded', 'true');
      lockScroll(true);

      // Fokus ilk linkə
      const firstLink = drawer.querySelector('a,button');
      firstLink && firstLink.focus();
    }

    function closeDrawer() {
      drawer.classList.add('-translate-x-full');
      overlay.classList.add('hidden');
      iconBars.classList.remove('hidden');
      iconX.classList.add('hidden');
      toggleBtn.setAttribute('aria-expanded', 'false');
      lockScroll(false);
      lastFocused && lastFocused.focus();
    }

    // Toggle
    toggleBtn?.addEventListener('click', () => {
      const isOpen = !drawer.classList.contains('-translate-x-full');
      isOpen ? closeDrawer() : openDrawer();
    });

    // Close actions
    closeBtn?.addEventListener('click', closeDrawer);
    overlay?.addEventListener('click', closeDrawer);
    window.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeDrawer();
    }, { passive: true });

    // Shadow on scroll
    const nav = document.getElementById('site-nav');
    const onScroll = () => {
      if (window.scrollY > 8) nav.classList.add('shadow-md');
      else nav.classList.remove('shadow-md');
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  })();