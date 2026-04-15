<?php
/**
 * LMC Flowers — Tienda
 * Grilla completa de productos.
 * TODO: Reemplazar array $productos por consulta a BD.
 */

// ── Catálogo de productos ─────────────────────────────────────────────────────
$productos = [
    [
        'slug'        => 'arreglo-blush-premium',
        'imagen'      => 'imagenes/galeria_6.jpg',
        'nombre'      => 'Arreglo Blush Premium',
        'descripcion' => 'Composición en tonos rosados con peonías, ranúnculos y follaje silvestre.',
        'precio'      => '99.99',
        'etiqueta'    => 'Más vendido',
    ],
    [
        'slug'        => 'garden-collection',
        'imagen'      => 'imagenes/galeria_7.jpg',
        'nombre'      => 'Garden Collection',
        'descripcion' => 'Selección de flores de temporada en paleta verde y crema, estilo jardín inglés.',
        'precio'      => '124.99',
        'etiqueta'    => '',
    ],
    [
        'slug'        => 'arreglo-coral-sunset',
        'imagen'      => 'imagenes/galeria_3.jpg',
        'nombre'      => 'Coral Sunset',
        'descripcion' => 'Arreglo en tonos terracota y naranja con helecho tropical y ramas de olivo.',
        'precio'      => '89.99',
        'etiqueta'    => '',
    ],
    [
        'slug'        => 'white-orchid-box',
        'imagen'      => 'imagenes/galeria_9.jpg',
        'nombre'      => 'White Orchid Box',
        'descripcion' => 'Tres orquídeas phalaenopsis presentadas en caja de lujo con musgo vivo.',
        'precio'      => '149.99',
        'etiqueta'    => 'Exclusivo',
    ],
    [
        'slug'        => 'tropical-luxe',
        'imagen'      => 'imagenes/galeria_1.jpg',
        'nombre'      => 'Tropical Luxe',
        'descripcion' => 'Heliconia, anturio y ave del paraíso en una composición exuberante y moderna.',
        'precio'      => '114.99',
        'etiqueta'    => '',
    ],
    [
        'slug'        => 'velvet-rose-arrangement',
        'imagen'      => 'imagenes/galeria_8.jpg',
        'nombre'      => 'Velvet Rose',
        'descripcion' => 'Docena de rosas de jardín inglés en borgoña profundo, con gypsophila y eucalipto.',
        'precio'      => '109.99',
        'etiqueta'    => 'Nuevo',
    ],
];
?>
<?php include 'include/head.php'; ?>

<body class="antialiased">

    <?php include 'include/nav.php'; ?>

    <!-- ══════════════════════════════════════════════
         HERO INTERIOR — TIENDA
    ═══════════════════════════════════════════════ -->
    <section class="relative pt-40 pb-20 text-center"
             style="background: url('imagenes/galeria_4.jpg') center center / cover no-repeat;">
        <div class="absolute inset-0" style="background: rgba(14,12,10,0.55);"></div>
        <div class="relative max-w-3xl mx-auto px-6">
            <span class="text-[9px] tracking-[0.55em] text-[#c5a059] font-bold uppercase mb-4 block">LMC Flowers Miami</span>
            <h1 class="text-4xl md:text-5xl serif italic leading-tight mb-5 text-white">La Tienda</h1>
            <p class="text-[10px] text-white/60 uppercase tracking-[0.3em]">Arreglos de lujo &bull; Entrega en Miami &bull; Diseño exclusivo</p>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════
         GRILLA DE PRODUCTOS
    ═══════════════════════════════════════════════ -->
    <main class="product_windows py-20 md:py-28">
        <div class="max-w-7xl mx-auto px-5 md:px-8">

            <!-- Encabezado -->
            <div class="text-center mb-14 md:mb-18 text-white/90">
                <span class="text-[9px] tracking-[0.45em] font-semibold uppercase mb-3 block">Colección actual</span>
                <h2 class="text-3xl md:text-4xl serif italic"><?= count($productos) ?> arreglos disponibles</h2>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 md:gap-12">

                <?php foreach ($productos as $p) : ?>
                <article class="group text-center">

                    <!-- Imagen -->
                    <a href="tienda/producto.php?slug=<?= htmlspecialchars($p['slug']) ?>"
                       class="block overflow-hidden mb-5 bg-white/10 relative">
                        <?php if ($p['etiqueta'] !== '') : ?>
                        <span class="absolute top-3 left-3 z-10 text-[8px] font-bold uppercase tracking-[0.25em] bg-[#1a1a1a] text-[#c5a059] px-3 py-1">
                            <?= htmlspecialchars($p['etiqueta']) ?>
                        </span>
                        <?php endif; ?>
                        <img src="<?= htmlspecialchars($p['imagen']) ?>"
                             alt="<?= htmlspecialchars($p['nombre']) ?>"
                             class="shop-card-image w-full object-cover transition-transform duration-1000 group-hover:scale-105">
                    </a>

                    <!-- Nombre -->
                    <h3 class="text-lg serif italic text-white mb-1">
                        <a href="tienda/producto.php?slug=<?= htmlspecialchars($p['slug']) ?>"
                           class="hover:text-[#c5a059] transition-colors">
                            <?= htmlspecialchars($p['nombre']) ?>
                        </a>
                    </h3>

                    <!-- Descripción -->
                    <p class="text-[10px] text-white/55 leading-relaxed mb-4 px-2">
                        <?= htmlspecialchars($p['descripcion']) ?>
                    </p>

                    <!-- Precio -->
                    <p class="serif text-[38px] shop-price mb-5 mx-auto justify-center">
                        <span class="currency">$</span><?= htmlspecialchars($p['precio']) ?>
                    </p>

                    <!-- Botón -->
                    <button class="w-full btn-luxury bg-[#20262d] text-white py-3 border border-[#20262d] hover:bg-transparent hover:text-white transition-all text-[9px] uppercase tracking-[0.25em]">
                        Agregar al carrito
                    </button>

                </article>
                <?php endforeach; ?>

            </div>

        </div>
    </main>

    <!-- ══════════════════════════════════════════════
         CTA INFERIOR
    ═══════════════════════════════════════════════ -->
    <section class="bg-[#f9f8f6] py-16 text-center">
        <div class="max-w-xl mx-auto px-6">
            <p class="text-[11px] text-gray-400 uppercase tracking-[0.3em] mb-6">¿Necesitas algo especial?</p>
            <a href="index.php#contacto"
               class="btn-luxury inline-block px-12 py-4 border border-black hover:bg-black hover:text-white transition-all text-[10px] uppercase tracking-[0.25em]">
                Solicitar arreglo personalizado
            </a>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

    <button id="back-to-top" class="back-to-top" aria-label="Volver arriba" title="Volver arriba">
        <i data-lucide="arrow-up" class="w-4 h-4"></i>
    </button>

    <script src="js/main.js"></script>

</body>
</html>
