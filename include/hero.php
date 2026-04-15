<?php
/**
 * LMC Flowers — Hero Section
 * Incluye: slider hero principal + category strip
 */
?>

<!-- ══════════════════════════════════════════════
     HERO PRINCIPAL
═══════════════════════════════════════════════ -->
<header class="relative min-h-[92vh] md:h-screen w-full flex items-center justify-center overflow-hidden bg-black">

    <!-- Imagen de fondo con zoom animado -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1523438885200-e635ba2c371e?auto=format&fit=crop&q=80&w=2000"
             alt="LMC Flowers Hero"
             class="w-full h-full object-cover opacity-60 scale-105 animate-[subtle-zoom_20s_infinite_alternate]">
    </div>

    <!-- Contenido central -->
    <div class="hero-content relative z-10 text-center text-white px-6 pt-10 md:pt-0">

        <h1 class="hero-title text-5xl md:text-7xl serif italic mb-8 md:mb-10 leading-[1.08] md:leading-[1.15]">
            <span class="hero-underline">Flores que dicen lo que las</span><br>
            <span class="hero-underline">palabras no pueden.</span>
        </h1>

        <p class="hero-subtitle text-[10px] md:text-xs tracking-[0.35em] font-light uppercase max-w-xl mx-auto leading-loose mb-10 md:mb-12 opacity-80">
            Diseño floral de alta gama para bodas y eventos corporativos en el sur de la Florida.
        </p>

        <div class="hero-cta-group flex flex-col sm:flex-row justify-center gap-6">
            <a href="#portfolio"
               class="btn-luxury w-full sm:w-auto max-w-[280px] sm:max-w-none mx-auto px-10 py-4 border border-white/30 hover:bg-white hover:text-black hover:border-white">
                Ver Portafolio
            </a>
            <a href="#contacto"
               class="hero-cta-invert btn-luxury w-full sm:w-auto max-w-[280px] sm:max-w-none mx-auto px-10 py-4">
                Contáctanos
            </a>
        </div>

    </div>

    <!-- Dots del slider -->
    <div class="hero-slider-dots absolute w-full flex justify-center space-x-4 z-20">
        <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
        <div class="w-1.5 h-1.5 rounded-full bg-white/30"></div>
        <div class="w-1.5 h-1.5 rounded-full bg-white/30"></div>
    </div>

</header>


<!-- ══════════════════════════════════════════════
     CATEGORY STRIP
═══════════════════════════════════════════════ -->
<div class="bg-white border-b border-gray-100 py-6">
    <div class="max-w-7xl mx-auto px-5 md:px-8 flex justify-between items-center text-[8px] md:text-[9px] tracking-[0.4em] uppercase opacity-45 font-semibold whitespace-nowrap overflow-x-auto no-scrollbar">
        <span>Bodas</span><span class="mx-2">•</span>
        <span>Quinceañeras</span><span class="mx-2">•</span>
        <span>Lanzamientos</span><span class="mx-2">•</span>
        <span>Galas Corporativas</span><span class="mx-2">•</span>
        <span>Sociales</span><span class="mx-2">•</span>
        <span>Miami Delivery</span>
    </div>
</div>
