<?php
/**
 * LMC Flowers — Detalle de Producto
 * Parámetro de entrada: ?slug=nombre-del-producto
 * TODO: Reemplazar el array $catalogo por consulta a BD cuando esté disponible.
 */

$basePath = '../';

// ── Catálogo de productos con datos extendidos ────────────────────────────────
$catalogo = [
    'arreglo-blush-premium' => [
        'slug'        => 'arreglo-blush-premium',
        'codigo'      => 'LMC-001',
        'nombre'      => 'Arreglo Blush Premium',
        'descripcion' => 'Una composición exquisita que combina peonías inglesas, ranúnculos franceses y follaje silvestre recién cortado. Cada arreglo es elaborado a mano por nuestros diseñadores en Miami, asegurando frescura y calidad en cada entrega. Perfecto para celebraciones románticas, aniversarios o como regalo de lujo.',
        'precio'      => '99.99',
        'etiqueta'    => 'Más vendido',
        'galeria'     => [
            '../imagenes/galeria_6.jpg',
            '../imagenes/galeria_7.jpg',
            '../imagenes/galeria_8.jpg',
        ],
    ],
    'garden-collection' => [
        'slug'        => 'garden-collection',
        'codigo'      => 'LMC-002',
        'nombre'      => 'Garden Collection',
        'descripcion' => 'Inspirada en los jardines de la campiña inglesa, esta colección reúne flores de temporada en una paleta de verdes, cremas y blancos naturales. Gypsophila, eucalipto, sweet peas y rosas David Austin se unen en una composición voluminosa y romántica, ideal para cualquier celebración.',
        'precio'      => '124.99',
        'etiqueta'    => '',
        'galeria'     => [
            '../imagenes/galeria_7.jpg',
            '../imagenes/galeria_1.jpg',
        ],
    ],
    'arreglo-coral-sunset' => [
        'slug'        => 'arreglo-coral-sunset',
        'codigo'      => 'LMC-003',
        'nombre'      => 'Coral Sunset',
        'descripcion' => 'Tonos terracota, naranja quemado y siena se fusionan en esta composición de inspiración mediterránea. Helecho tropical, ramas de olivo y flores exóticas conforman un arreglo audaz e impactante, ideal para espacios contemporáneos o eventos con paleta cálida.',
        'precio'      => '89.99',
        'etiqueta'    => '',
        'galeria'     => [
            '../imagenes/galeria_3.jpg',
        ],
    ],
    'white-orchid-box' => [
        'slug'        => 'white-orchid-box',
        'codigo'      => 'LMC-004',
        'nombre'      => 'White Orchid Box',
        'descripcion' => 'Tres orquídeas phalaenopsis de tallo largo, cuidadosamente seleccionadas, presentadas en una caja forrada con musgo verde vivo. Una propuesta sofisticada y duradera, perfecta como regalo ejecutivo o decoración de interiores de alto nivel.',
        'precio'      => '149.99',
        'etiqueta'    => 'Exclusivo',
        'galeria'     => [
            '../imagenes/galeria_9.jpg',
            '../imagenes/galeria_3.jpg',
        ],
    ],
    'tropical-luxe' => [
        'slug'        => 'tropical-luxe',
        'codigo'      => 'LMC-005',
        'nombre'      => 'Tropical Luxe',
        'descripcion' => 'Heliconia, anturio rojo y ave del paraíso protagonizan esta composición tropical de gran escala. Diseñada para espacios amplios y eventos de impacto visual, combina el exotismo del trópico con la elegancia de presentación característica de LMC Flowers Miami.',
        'precio'      => '114.99',
        'etiqueta'    => '',
        'galeria'     => [
            '../imagenes/galeria_1.jpg',
            '../imagenes/galeria_6.jpg',
        ],
    ],
    'velvet-rose-arrangement' => [
        'slug'        => 'velvet-rose-arrangement',
        'codigo'      => 'LMC-006',
        'nombre'      => 'Velvet Rose',
        'descripcion' => 'Doce rosas de jardín inglés en el más profundo tono borgoña, acompañadas de gypsophila etérea y ramas de eucalipto plata. Un clásico reinventado con sensibilidad contemporánea, que lleva la elegancia atemporal de la rosa a su máxima expresión.',
        'precio'      => '109.99',
        'etiqueta'    => 'Nuevo',
        'galeria'     => [
            '../imagenes/galeria_8.jpg',
            '../imagenes/galeria_9.jpg',
            '../imagenes/galeria_1.jpg',
        ],
    ],
];

// ── Resolver producto ─────────────────────────────────────────────────────────
$slug    = preg_replace('/[^a-z0-9\-]/', '', strtolower($_GET['slug'] ?? ''));
$product = $catalogo[$slug] ?? null;

if (!$product) {
    header('Location: ../tienda.php');
    exit;
}

// ── Productos relacionados (todos excepto el actual, máx. 4) ──────────────────
$relacionados = array_filter($catalogo, fn($p) => $p['slug'] !== $slug);
$relacionados = array_slice($relacionados, 0, 4);
?>
<?php include '../include/head.php'; ?>

<body class="antialiased bg-[#f9f8f6] nav--solid">

    <?php include '../include/nav.php'; ?>

    <!-- Espaciado nav fijo -->
    <div class="h-24 md:h-28"></div>

    <!-- ══════════════════════════════════════════════
         BREADCRUMB
    ═══════════════════════════════════════════════ -->
    <div class="max-w-6xl mx-auto px-5 md:px-8 pt-6 pb-2">
        <nav aria-label="Breadcrumb"
             class="flex items-center gap-2 text-[9px] uppercase tracking-[0.3em] text-gray-400">
            <a href="../index.php"  class="hover:text-[#c5a059] transition-colors">Inicio</a>
            <span>/</span>
            <a href="../tienda.php" class="hover:text-[#c5a059] transition-colors">Tienda</a>
            <span>/</span>
            <span class="text-[#1a1a1a]"><?= htmlspecialchars($product['nombre']) ?></span>
        </nav>
    </div>

    <!-- ══════════════════════════════════════════════
         DETALLE DEL PRODUCTO
    ═══════════════════════════════════════════════ -->
    <section class="max-w-6xl mx-auto px-5 md:px-8 py-10 md:py-16">
        <div class="grid md:grid-cols-2 gap-12 md:gap-20 items-start">

            <!-- ── GALERÍA ──────────────────────────────────── -->
            <div>
                <!-- Imagen principal -->
                <div class="overflow-hidden bg-white mb-4 relative group cursor-zoom-in"
                     onclick="prodOpenLightbox(document.getElementById('prod-main-img').src)">
                    <img id="prod-main-img"
                         src="<?= htmlspecialchars($product['galeria'][0]) ?>"
                         alt="<?= htmlspecialchars($product['nombre']) ?>"
                         class="prod-main-img w-full object-cover transition-transform duration-700 group-hover:scale-[1.03]">
                    <!-- Ícono lupa -->
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                        <span class="bg-white/80 rounded-full p-3 shadow-md">
                            <i data-lucide="zoom-in" class="w-5 h-5 text-[#1a1a1a]"></i>
                        </span>
                    </div>
                </div>

                <!-- Miniaturas (sólo si hay más de una imagen) -->
                <?php if (count($product['galeria']) > 1) : ?>
                <div class="flex gap-3">
                    <?php foreach ($product['galeria'] as $i => $img) : ?>
                    <button type="button"
                            class="prod-thumb <?= $i === 0 ? 'prod-thumb--active' : '' ?>"
                            onclick="prodSetImg(this, '<?= htmlspecialchars($img) ?>')"
                            aria-label="Ver imagen <?= $i + 1 ?>">
                        <img src="<?= htmlspecialchars($img) ?>"
                             alt="Vista <?= $i + 1 ?>"
                             class="w-full h-full object-cover">
                    </button>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>

            <!-- ── INFORMACIÓN ──────────────────────────────── -->
            <div class="pt-2">

                <!-- Etiqueta (si existe) -->
                <?php if ($product['etiqueta'] !== '') : ?>
                <span class="text-[8px] font-bold uppercase tracking-[0.3em] bg-[#c5a059] text-white px-3 py-1 inline-block mb-5">
                    <?= htmlspecialchars($product['etiqueta']) ?>
                </span>
                <?php endif; ?>

                <!-- Código de producto -->
                <p class="text-[9px] uppercase tracking-[0.35em] text-gray-400 mb-2">
                    <?= htmlspecialchars($product['codigo']) ?>
                </p>

                <!-- Nombre -->
                <h1 class="text-4xl md:text-5xl serif italic leading-tight text-[#1a1a1a] mb-5">
                    <?= htmlspecialchars($product['nombre']) ?>
                </h1>

                <!-- Línea dorada decorativa -->
                <div class="w-10 h-px bg-[#c5a059] mb-6"></div>

                <!-- Descripción -->
                <p class="text-sm text-gray-500 leading-relaxed mb-8">
                    <?= htmlspecialchars($product['descripcion']) ?>
                </p>

                <!-- Precio -->
                <p class="serif text-[50px] shop-price leading-none mb-8">
                    <span class="currency">$</span><?= htmlspecialchars($product['precio']) ?>
                </p>

                <!-- Botón principal — Agregar al carrito -->
                <button type="button"
                        class="w-full btn-luxury bg-[#1a1a1a] text-white py-4 border border-[#1a1a1a] hover:bg-transparent hover:text-[#1a1a1a] transition-all mb-4">
                    Agregar al carrito
                </button>

                <!-- Botón secundario — Arreglo personalizado -->
                <a href="../index.php#contacto"
                   class="block w-full btn-luxury text-center py-4 border border-[#c5a059] text-[#c5a059] hover:bg-[#c5a059] hover:text-white transition-all">
                    Solicitar arreglo personalizado
                </a>

                <!-- Beneficios -->
                <div class="mt-8 pt-6 border-t border-gray-200 space-y-4">
                    <p class="flex items-center gap-3 text-sm text-gray-500 leading-relaxed">
                        <i data-lucide="truck"   class="w-4 h-4 text-[#c5a059] flex-shrink-0"></i>
                        Entrega en Miami &mdash; mismo día disponible
                    </p>
                    <p class="flex items-center gap-3 text-sm text-gray-500 leading-relaxed">
                        <i data-lucide="leaf"    class="w-4 h-4 text-[#c5a059] flex-shrink-0"></i>
                        Flores frescas cortadas el mismo día
                    </p>
                    <p class="flex items-center gap-3 text-sm text-gray-500 leading-relaxed">
                        <i data-lucide="package" class="w-4 h-4 text-[#c5a059] flex-shrink-0"></i>
                        Presentación de lujo incluida
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- ══════════════════════════════════════════════
         PRODUCTOS RELACIONADOS
    ═══════════════════════════════════════════════ -->
    <section class="product_windows py-20 md:py-24">
        <div class="max-w-7xl mx-auto px-5 md:px-8">

            <div class="text-center mb-12 text-white/90">
                <span class="text-[9px] tracking-[0.45em] font-semibold uppercase mb-3 block">También te puede gustar</span>
                <h2 class="text-3xl md:text-4xl serif italic">Arreglos relacionados</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-10">
                <?php foreach ($relacionados as $rel) : ?>
                <article class="group text-center">
                    <a href="producto.php?slug=<?= htmlspecialchars($rel['slug']) ?>">
                        <div class="overflow-hidden mb-4 bg-white/10 relative">
                            <?php if ($rel['etiqueta'] !== '') : ?>
                            <span class="absolute top-2 left-2 z-10 text-[7px] font-bold uppercase tracking-[0.2em] bg-[#1a1a1a] text-[#c5a059] px-2 py-0.5">
                                <?= htmlspecialchars($rel['etiqueta']) ?>
                            </span>
                            <?php endif; ?>
                            <img src="<?= htmlspecialchars($rel['galeria'][0]) ?>"
                                 alt="<?= htmlspecialchars($rel['nombre']) ?>"
                                 class="prod-related-img w-full object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>
                        <h3 class="text-sm serif italic text-white mb-1">
                            <?= htmlspecialchars($rel['nombre']) ?>
                        </h3>
                        <p class="serif text-[24px] shop-price justify-center">
                            <span class="currency">$</span><?= htmlspecialchars($rel['precio']) ?>
                        </p>
                    </a>
                </article>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- ══════════════════════════════════════════════
         MODAL LIGHTBOX
    ═══════════════════════════════════════════════ -->
    <div id="prod-lightbox"
         class="fixed inset-0 z-[200] flex items-center justify-center bg-black/90 opacity-0 pointer-events-none transition-opacity duration-300"
         onclick="prodCloseLightbox()">
        <button type="button"
                class="absolute top-5 right-6 text-white/70 hover:text-white transition-colors"
                onclick="prodCloseLightbox()" aria-label="Cerrar">
            <i data-lucide="x" class="w-7 h-7"></i>
        </button>
        <img id="prod-lightbox-img" src="" alt=""
             class="max-h-[90vh] max-w-[90vw] object-contain shadow-2xl"
             onclick="event.stopPropagation()">
    </div>

    <?php include '../include/footer.php'; ?>

    <button id="back-to-top" class="back-to-top" aria-label="Volver arriba" title="Volver arriba">
        <i data-lucide="arrow-up" class="w-4 h-4"></i>
    </button>

    <script src="../js/main.js"></script>
    <script>
    // ── Galería de miniaturas ──────────────────────────────────────────────────
    function prodSetImg(thumb, src) {
        var mainImg = document.getElementById('prod-main-img');
        mainImg.style.opacity = '0';
        setTimeout(function () {
            mainImg.src = src;
            mainImg.style.opacity = '1';
        }, 150);
        document.querySelectorAll('.prod-thumb').forEach(function (t) {
            t.classList.remove('prod-thumb--active');
        });
        thumb.classList.add('prod-thumb--active');
    }

    // ── Lightbox ───────────────────────────────────────────────────────────────
    function prodOpenLightbox(src) {
        var lb = document.getElementById('prod-lightbox');
        document.getElementById('prod-lightbox-img').src = src;
        lb.classList.remove('opacity-0', 'pointer-events-none');
        lb.classList.add('opacity-100');
        document.body.style.overflow = 'hidden';
    }
    function prodCloseLightbox() {
        var lb = document.getElementById('prod-lightbox');
        lb.classList.remove('opacity-100');
        lb.classList.add('opacity-0', 'pointer-events-none');
        document.body.style.overflow = '';
    }
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') prodCloseLightbox();
    });
    </script>

</body>
</html>
