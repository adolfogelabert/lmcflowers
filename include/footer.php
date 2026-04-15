<?php
/**
 * LMC Flowers — Footer
 * Columnas: marca, explorar, contacto, redes sociales + barra legal.
 */
?>

<!-- ══════════════════════════════════════════════
     FOOTER PRINCIPAL
═══════════════════════════════════════════════ -->
<footer class="site-footer pt-20 md:pt-24 pb-14">
    <div class="max-w-7xl mx-auto px-5 md:px-8">

        <!-- Grid de 4 columnas -->
        <div class="site-footer-grid grid md:grid-cols-4 gap-12 md:gap-20 mb-16 md:mb-20">

            <!-- Columna 1 — Marca -->
            <div class="site-footer-brand col-span-1">
                <div class="site-footer-brand-logo flex flex-col mb-10">
                    <a href="<?= $basePath ?? '' ?>index.php" class="block mb-10">
                        <img src="<?= $basePath ?? '' ?>images/logo-demo-2.svg" alt="LMC Flowers Logo" class="h-12 w-auto">
                    </a>
                </div>
                <p class="site-footer-text text-[11px] leading-loose mb-10 max-w-xs font-light">
                    Elevando la estética de tus celebraciones más importantes a través del arte floral y la producción impecable.
                </p>
            </div>

            <!-- Columna 2 — Explorar -->
            <div class="site-footer-col">
                <h4 class="site-footer-heading text-[10px] font-bold uppercase tracking-[0.3em] mb-10">Explorar</h4>
                <ul class="site-footer-text text-[10px] space-y-6 uppercase tracking-[0.2em] font-medium">
                    <li><a href="<?= $basePath ?? '' ?>servicios.php" class="site-footer-link">Servicios</a></li>
                    <li><a href="<?= $basePath ?? '' ?>index.php#portfolio" class="site-footer-link">Galería</a></li>
                    <li><a href="<?= $basePath ?? '' ?>index.php#shop"      class="site-footer-link">Shop</a></li>
                    <li><a href="<?= $basePath ?? '' ?>diario.php"          class="site-footer-link">Diario</a></li>
                </ul>
            </div>

            <!-- Columna 3 — Contacto -->
            <div class="site-footer-col">
                <h4 class="site-footer-heading text-[10px] font-bold uppercase tracking-[0.3em] mb-10">Contacto</h4>
                <ul class="site-footer-text text-[10px] space-y-5 uppercase tracking-[0.15em] font-medium leading-relaxed">
                    <li>Miami, FL, USA</li>
                    <li>info@lmcflowers.com</li>
                    <li>+1 (305) 555 1234</li>
                </ul>
            </div>

            <!-- Columna 4 — Redes Sociales -->
            <div class="site-footer-col">
                <h4 class="site-footer-heading text-[10px] font-bold uppercase tracking-[0.3em] mb-10">Redes Sociales</h4>
                <div class="site-footer-social-row flex space-x-4">
                    <a href="#" class="social-circle solid" aria-label="Instagram">
                        <i class="fab fa-instagram text-sm"></i>
                    </a>
                    <a href="#" class="social-circle" aria-label="Facebook">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </a>
                    <a href="#" class="social-circle" aria-label="X / Twitter">
                        <i class="fab fa-x-twitter text-sm"></i>
                    </a>
                    <a href="#" class="social-circle" aria-label="TikTok">
                        <i class="fab fa-tiktok text-sm"></i>
                    </a>
                </div>
                <p class="site-footer-muted mt-8 text-[9px] uppercase tracking-widest italic">
                    Follow for daily inspiration
                </p>
            </div>

        </div>

        <!-- Barra legal -->
        <div class="footer-legal site-footer-legal pt-8 flex flex-col md:flex-row justify-between items-center text-[9px] uppercase tracking-[0.16em] md:tracking-[0.28em] gap-6 text-center md:text-left">
            <p>© <?= date('Y') ?> LMC Group Miami. Crafted with excellence.</p>
            <div class="site-footer-legal-links flex space-x-10">
                <a href="<?= $basePath ?? '' ?>politicas.php" class="site-footer-legal-link">Políticas</a>
                <a href="<?= $basePath ?? '' ?>terminos.php"  class="site-footer-legal-link">Términos</a>
            </div>
        </div>

    </div>
</footer>
