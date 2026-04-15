<?php
/**
 * LMC Flowers — Sección Shop
 * Incluye: grid de productos + claim hero CTA
 */
?>

<!-- ══════════════════════════════════════════════
     SECCIÓN SHOP — ARREGLOS
═══════════════════════════════════════════════ -->
<section id="shop" class="product_windows py-20 md:py-24">
    <div class="max-w-7xl mx-auto px-5 md:px-8">

        <!-- Encabezado -->
        <div class="text-center mb-12 md:mb-14 text-white/90">
            <span class="text-[9px] tracking-[0.45em] font-semibold uppercase mb-3 block">Shop Productos</span>
            <h2 class="text-4xl md:text-5xl serif italic">Arreglos</h2>
        </div>

        <!-- Grid de productos -->
        <div class="grid md:grid-cols-3 gap-10 md:gap-16 max-w-5xl mx-auto">

            <!-- Producto 1 -->
            <article class="text-center">
                <div class="overflow-hidden mb-5 bg-white/10">
                    <img src="imagenes/galeria_6.jpg"
                         alt="Arreglo premium blush"
                         class="shop-card-image w-full object-cover">
                </div>
                <p class="serif text-[38px] shop-price mb-4">
                    <span class="currency">$</span>99.99
                </p>
                <button class="w-full btn-luxury bg-[#20262d] text-white py-3 border border-[#20262d] hover:bg-transparent hover:text-white">
                    Agregar al carro
                </button>
            </article>

            <!-- Producto 2 -->
            <article class="text-center">
                <div class="overflow-hidden mb-5 bg-white/10">
                    <img src="imagenes/galeria_7.jpg"
                         alt="Arreglo premium garden"
                         class="shop-card-image w-full object-cover">
                </div>
                <p class="serif text-[38px] shop-price mb-4">
                    <span class="currency">$</span>99.99
                </p>
                <button class="w-full btn-luxury bg-[#20262d] text-white py-3 border border-[#20262d] hover:bg-transparent hover:text-white">
                    Agregar al carro
                </button>
            </article>

            <!-- Producto 3 -->
            <article class="text-center">
                <div class="overflow-hidden mb-5 bg-white/10">
                    <img src="imagenes/galeria_3.jpg"
                         alt="Arreglo premium coral"
                         class="shop-card-image w-full object-cover">
                </div>
                <p class="serif text-[38px] shop-price mb-4">
                    <span class="currency">$</span>99.99
                </p>
                <button class="w-full btn-luxury bg-[#20262d] text-white py-3 border border-[#20262d] hover:bg-transparent hover:text-white">
                    Agregar al carro
                </button>
            </article>

        </div>

        <!-- Botón ver tienda -->
        <div class="mt-14 text-center">
            <a href="tienda.php"
               class="btn-luxury inline-block px-12 py-4 border border-white/60 text-white hover:bg-white hover:text-[#1a1a1a] transition-all text-[10px] uppercase tracking-[0.28em]">
                Ver tienda completa
            </a>
        </div>

    </div>
</section>


