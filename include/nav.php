<?php
/**
 * LMC Flowers — Navegación principal
 * Incluye: nav fija, modal buscador, modal menú mobile
 */
?>

<!-- ══════════════════════════════════════════════
     NAVEGACIÓN PRINCIPAL
═══════════════════════════════════════════════ -->
<nav id="main-nav" class="fixed w-full z-50 transition-all duration-500 h-24 flex items-center">
    <div class="nav-shell max-w-7xl mx-auto w-full">

        <!-- Logo -->
        <div class="nav-left flex flex-col items-center group cursor-pointer">
            <a href="<?= $basePath ?? '' ?>index.php" class="nav-brand flex items-center cursor-pointer">
                <img src="<?= $basePath ?? '' ?>images/logo-demo-2.svg" alt="LMC Flowers" class="h-10 max-[480px]:h-8 md:h-12 w-auto logo-light">
                <img src="<?= $basePath ?? '' ?>images/logo-demo-3.svg" alt="LMC Flowers" class="h-10 max-[480px]:h-8 md:h-12 w-auto logo-dark">
            </a>
        </div>

        <!-- Links desktop -->
        <div class="hidden lg:flex items-center space-x-8 text-[9px] font-medium uppercase tracking-[0.26em]">
            <a href="<?= $basePath ?? '' ?>index.php"           class="nav-desktop-link">Inicio</a>
            <a href="<?= $basePath ?? '' ?>servicios.php" class="nav-desktop-link">Servicios</a>
            <a href="<?= $basePath ?? '' ?>index.php#portfolio" class="nav-desktop-link">Galería</a>
            <a href="<?= $basePath ?? '' ?>index.php#shop"      class="nav-desktop-link">Shop</a>
            <a href="<?= $basePath ?? '' ?>diario.php"          class="nav-desktop-link">Diario</a>
        </div>

        <!-- Iconos + CTA derecha -->
        <div class="nav-right flex items-center md:space-x-6">

            <div class="nav-icons flex items-center gap-2 md:gap-4">
                <!-- Hamburger (solo mobile) -->
                <button id="mobile-menu-open"
                        class="md:hidden hover:text-gold-brand transition"
                        aria-label="Abrir menu"
                        aria-expanded="false"
                        aria-controls="mobile-menu-modal">
                    <i data-lucide="menu" class="w-4 h-4"></i>
                </button>

                <!-- Buscador -->
                <button id="search-modal-open"
                        class="hover:text-gold-brand transition"
                        aria-label="Abrir buscador">
                    <i data-lucide="search" class="w-4 h-4"></i>
                </button>

                <!-- Carrito -->
                <div class="relative cursor-pointer hover:text-gold-brand transition">
                    <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                    <span class="absolute -top-1.5 -right-1.5 bg-black text-white text-[8px] w-3 h-3 rounded-full flex items-center justify-center">0</span>
                </div>
            </div>

            <!-- Separador (solo desktop) -->
            <div class="hidden md:block h-6 w-[0.5px] bg-gray-200 mx-2"></div>

            <!-- CTA Cotizar (solo desktop) -->
            <a href="<?= $basePath ?? '' ?>index.php#contacto" class="hidden md:block nav-cta btn-luxury border border-black/10 px-5 py-2 hover:bg-black hover:text-white hover:border-black">
                Cotizar ahora
            </a>

            <!-- Selector de idioma -->
            <div id="lang-menu" class="lang-menu">
                <button id="lang-trigger"
                        class="lang-trigger"
                        aria-label="Abrir selector de idioma"
                        aria-expanded="false">
                    <img id="lang-current-flag" class="lang-flag" src="<?= $basePath ?? '' ?>images/flag-us.svg" alt="Bandera idioma actual">
                    <span id="lang-current-code">EN</span>
                </button>
                <div class="lang-dropdown" role="menu">
                    <button class="lang-option" role="menuitem"
                            data-lang-code="EN"
                            data-lang-flag="<?= $basePath ?? '' ?>images/flag-us.svg">
                        <img class="lang-flag" src="<?= $basePath ?? '' ?>images/flag-us.svg" alt="Bandera USA">
                        <span>English</span>
                    </button>
                    <button class="lang-option" role="menuitem"
                            data-lang-code="MX"
                            data-lang-flag="<?= $basePath ?? '' ?>images/flag-mx.svg">
                        <img class="lang-flag" src="<?= $basePath ?? '' ?>images/flag-mx.svg" alt="Bandera Mexico">
                        <span>Español</span>
                    </button>
                </div>
            </div>

        </div>

        <!-- CTA Cotizar (solo mobile — fila 2 del grid) -->
        <a href="<?= $basePath ?? '' ?>index.php#contacto" class="mobile-nav-cta btn-luxury md:hidden">Cotizar ahora</a>

    </div>
</nav>


<!-- ══════════════════════════════════════════════
     MODAL — BUSCADOR
═══════════════════════════════════════════════ -->
<div id="search-modal" class="search-modal" aria-hidden="true">
    <div class="search-modal-panel">
        <div class="flex items-center gap-2">
            <i data-lucide="search" class="w-4 h-4 text-white/70"></i>
            <input id="search-modal-input"
                   class="search-modal-input"
                   type="text"
                   placeholder="Buscar en el sitio...">
            <button id="search-modal-close"
                    class="text-white/80 hover:text-white px-2"
                    aria-label="Cerrar buscador">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════════
     MODAL — MENÚ MOBILE
═══════════════════════════════════════════════ -->
<div id="mobile-menu-modal" class="mobile-menu-modal md:hidden" aria-hidden="true">
    <div class="mobile-menu-panel">

        <!-- Cabecera del panel -->
        <div class="px-5 py-5 border-b border-gray-100 flex items-center justify-between">
            <img src="<?= $basePath ?? '' ?>images/logo-demo-3.svg" alt="LMC Flowers" class="h-8 w-auto">
            <button id="mobile-menu-close"
                    class="hover:text-gold-brand transition"
                    aria-label="Cerrar menu">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>

        <!-- Links de navegación -->
        <div class="px-6 pt-7 pb-6 flex-1 overflow-y-auto">
            <nav class="flex flex-col gap-5 text-[11px] uppercase tracking-[0.24em] font-medium text-[#1a1a1a] items-center text-center">
                <a href="<?= $basePath ?? '' ?>index.php"           class="mobile-menu-link">Inicio</a>
                <a href="<?= $basePath ?? '' ?>servicios.php" class="mobile-menu-link">Servicios</a>
                <a href="<?= $basePath ?? '' ?>index.php#portfolio" class="mobile-menu-link">Galería</a>
                <a href="<?= $basePath ?? '' ?>index.php#shop"      class="mobile-menu-link">Shop</a>
                <a href="<?= $basePath ?? '' ?>diario.php"          class="mobile-menu-link">Diario</a>
                <a href="<?= $basePath ?? '' ?>index.php#contacto"  class="mobile-menu-link">Contacto</a>
            </nav>

            <div class="flex justify-center">
                <a href="<?= $basePath ?? '' ?>index.php#contacto" class="mobile-menu-link btn-luxury mt-8 inline-block border border-black px-5 py-3 text-center hover:bg-black hover:text-white">
                    Cotizar ahora
                </a>
            </div>
        </div>

    </div>
</div>
