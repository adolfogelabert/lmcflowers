<?php
/**
 * LMC Flowers — Sección Portfolio / Galería
 */
?>

<!-- ══════════════════════════════════════════════
     SECCIÓN PORTFOLIO — GRID ASIMÉTRICO
═══════════════════════════════════════════════ -->
<section id="portfolio" class="py-24 md:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-5 md:px-8">

        <!-- Encabezado -->
        <div class="text-center mb-16 md:mb-20">
            <span class="text-[10px] tracking-[0.6em] text-gray-400 font-bold uppercase mb-4 block">Visual Diary</span>
            <h2 class="text-4xl md:text-6xl serif italic">Nuestras Creaciones</h2>
        </div>

        <!-- Grid asimétrico -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">

            <!-- Item 1: Vertical grande -->
            <div class="md:col-span-4 portfolio-item relative group cursor-pointer overflow-hidden aspect-[3/4]">
                <img src="imagenes/galeria_1.jpg"
                     alt="La boda de Vizcaya"
                     class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                <div class="portfolio-overlay absolute inset-0 opacity-0 flex flex-col justify-end p-10 text-white">
                    <p class="text-[9px] uppercase tracking-[0.3em] mb-2 opacity-70 font-bold">Coral Gables</p>
                    <h4 class="text-2xl serif italic mb-4">La boda de Vizcaya</h4>
                    <div class="w-10 h-[1px] bg-gold-brand"></div>
                </div>
            </div>

            <!-- Item 2: Horizontal -->
            <div class="md:col-span-8 portfolio-item relative group cursor-pointer overflow-hidden aspect-video md:aspect-auto">
                <img src="imagenes/galeria_2.jpg"
                     alt="Gala Art Basel 2025"
                     class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                <div class="portfolio-overlay absolute inset-0 opacity-0 flex flex-col justify-end p-10 text-white">
                    <p class="text-[9px] uppercase tracking-[0.3em] mb-2 opacity-70 font-bold">Miami Beach</p>
                    <h4 class="text-2xl serif italic mb-4">Gala Art Basel 2025</h4>
                    <div class="w-10 h-[1px] bg-gold-brand"></div>
                </div>
            </div>

            <!-- Item 3: Cuadrado -->
            <div class="md:col-span-5 portfolio-item portfolio-row-two-card relative group cursor-pointer overflow-hidden aspect-square md:aspect-auto">
                <img src="imagenes/galeria_9.jpg"
                     alt="Velada de orquídeas blancas"
                     class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                <div class="portfolio-overlay absolute inset-0 opacity-0 flex flex-col justify-end p-10 text-white">
                    <p class="text-[9px] uppercase tracking-[0.3em] mb-2 opacity-70 font-bold">Minimalismo</p>
                    <h4 class="text-2xl serif italic mb-4">Velada de orquídeas blancas</h4>
                    <div class="w-10 h-[1px] bg-gold-brand"></div>
                </div>
            </div>

            <!-- Item 4: Retrato -->
            <div class="md:col-span-3 portfolio-item portfolio-row-two-card relative group cursor-pointer overflow-hidden aspect-square md:aspect-auto">
                <img src="imagenes/galeria_hero-2.jpg"
                     alt="El florecimiento del compromiso"
                     class="w-full h-full md:min-h-full object-cover portfolio-focus-mid transition-transform duration-1000 group-hover:scale-105">
                <div class="portfolio-overlay absolute inset-0 opacity-0 flex flex-col justify-end p-10 text-white">
                    <p class="text-[9px] uppercase tracking-[0.3em] mb-2 opacity-70 font-bold">Diseño</p>
                    <h4 class="text-2xl serif italic mb-4">El florecimiento del compromiso</h4>
                    <div class="w-10 h-[1px] bg-gold-brand"></div>
                </div>
            </div>

            <!-- Item 5: Pequeño -->
            <div class="md:col-span-4 portfolio-item portfolio-row-two-card relative group cursor-pointer overflow-hidden aspect-square md:aspect-auto">
                <img src="imagenes/galeria_8.jpg"
                     alt="Concepto de rosa de terciopelo"
                     class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                <div class="portfolio-overlay absolute inset-0 opacity-0 flex flex-col justify-end p-10 text-white">
                    <p class="text-[9px] uppercase tracking-[0.3em] mb-2 opacity-70 font-bold">Hecho a la medida</p>
                    <h4 class="text-2xl serif italic mb-4">Concepto de rosa de terciopelo</h4>
                    <div class="w-10 h-[1px] bg-gold-brand"></div>
                </div>
            </div>

        </div>

        <!-- Botón Ver Más -->
        <div class="mt-16 md:mt-20 text-center">
            <a href="galeria.php" class="btn-luxury inline-block px-12 py-5 border border-black hover:bg-black hover:text-white transition-all">
                Ver Galería Completa
            </a>
        </div>

    </div>
</section>
