<?php
/**
 * LMC Flowers — Galería de trabajos
 * Grilla estilo masonry (CSS columns) + modal de imagen.
 */

// ── Catálogo de imágenes ──────────────────────────────────────────────────────
$galeria = [
    [
        'src'     => 'imagenes/galeria_1.jpg',
        'titulo'  => 'La boda de Vizcaya',
        'lugar'   => 'Coral Gables',
    ],
    [
        'src'     => 'imagenes/galeria_2.jpg',
        'titulo'  => 'Gala Art Basel 2025',
        'lugar'   => 'Miami Beach',
    ],
    [
        'src'     => 'imagenes/galeria_3.jpg',
        'titulo'  => 'Centros de temporada',
        'lugar'   => 'Brickell',
    ],
    [
        'src'     => 'imagenes/galeria_4.jpg',
        'titulo'  => 'Orquídeas en blanco',
        'lugar'   => 'Minimalismo',
    ],
    [
        'src'     => 'imagenes/galeria_6.jpg',
        'titulo'  => 'Flora tropical',
        'lugar'   => 'Wynwood',
    ],
    [
        'src'     => 'imagenes/galeria_7.jpg',
        'titulo'  => 'Evento privado',
        'lugar'   => 'South Beach',
    ],
    [
        'src'     => 'imagenes/galeria_8.jpg',
        'titulo'  => 'Rosa de terciopelo',
        'lugar'   => 'Hecho a medida',
    ],
    [
        'src'     => 'imagenes/galeria_9.jpg',
        'titulo'  => 'Velada de orquídeas',
        'lugar'   => 'Diseño floral',
    ],
    [
        'src'     => 'imagenes/galeria_hero-2.jpg',
        'titulo'  => 'El florecimiento del compromiso',
        'lugar'   => 'Bodas de destino',
    ],
    [
        'src'     => 'imagenes/crea-imagenes-de-arreglos-florales-para-galeria-de (1).jpeg',
        'titulo'  => 'Arreglos de lujo',
        'lugar'   => 'Luxury Delivery',
    ],
];
?>
<?php include 'include/head.php'; ?>
<style>
/* ── Masonry (CSS columns) ──────────────────────────────────── */
.masonry-grid {
    columns: 3;
    column-gap: 1rem;
}
@media (max-width: 900px) {
    .masonry-grid { columns: 2; }
}
@media (max-width: 480px) {
    .masonry-grid { columns: 1; }
}
.masonry-grid .galeria-item {
    break-inside: avoid;
    margin-bottom: 1rem;
    display: block;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}
.masonry-grid .galeria-item img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.8s ease;
}
.masonry-grid .galeria-item:hover img {
    transform: scale(1.04);
}
.galeria-item-overlay {
    position: absolute;
    inset: 0;
    background: rgba(14,12,10,0);
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 1.5rem;
    transition: background 0.4s ease;
}
.masonry-grid .galeria-item:hover .galeria-item-overlay {
    background: rgba(14,12,10,0.55);
}
.galeria-item-overlay span,
.galeria-item-overlay p {
    opacity: 0;
    transform: translateY(6px);
    transition: opacity 0.35s ease, transform 0.35s ease;
}
.masonry-grid .galeria-item:hover .galeria-item-overlay span,
.masonry-grid .galeria-item:hover .galeria-item-overlay p {
    opacity: 1;
    transform: translateY(0);
}

/* ── Modal ──────────────────────────────────────────────────── */
#galeria-modal {
    position: fixed;
    inset: 0;
    z-index: 1000;
    background: rgba(10,9,8,0.88);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1.5rem;
    transition: opacity 0.3s ease;
    opacity: 1;
}
#galeria-modal.galeria-modal--hidden {
    opacity: 0;
    pointer-events: none;
}
#galeria-modal-img {
    max-width: 90vw;
    max-height: 85vh;
    object-fit: contain;
    display: block;
    box-shadow: 0 8px 60px rgba(0,0,0,0.6);
}
#galeria-modal-close {
    position: absolute;
    top: 1.25rem;
    right: 1.5rem;
    background: none;
    border: none;
    color: rgba(255,255,255,0.7);
    cursor: pointer;
    transition: color 0.2s;
    line-height: 1;
    padding: 0.25rem;
}
#galeria-modal-close:hover { color: #fff; }
#galeria-modal-caption {
    position: absolute;
    bottom: 1.5rem;
    left: 50%;
    transform: translateX(-50%);
    white-space: nowrap;
    font-size: 9px;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.5);
    font-family: 'Montserrat', sans-serif;
}
</style>

<body class="antialiased">

    <?php include 'include/nav.php'; ?>

    <!-- ══════════════════════════════════════════════
         HERO INTERIOR — GALERÍA
    ═══════════════════════════════════════════════ -->
    <section class="relative pt-40 pb-20 text-center"
             style="background: url('imagenes/galeria_4.jpg') center center / cover no-repeat;">
        <div class="absolute inset-0" style="background: rgba(14,12,10,0.55);"></div>
        <div class="relative max-w-3xl mx-auto px-6">
            <span class="text-[9px] tracking-[0.55em] text-[#c5a059] font-bold uppercase mb-4 block">Visual Diary</span>
            <h1 class="text-4xl md:text-5xl serif italic leading-tight mb-5 text-white">Galería de Trabajos</h1>
            <p class="text-[10px] text-white/60 uppercase tracking-[0.3em]">Bodas &bull; Eventos &bull; Diseño Floral &bull; Luxury Delivery</p>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════
         GALERÍA MASONRY
    ═══════════════════════════════════════════════ -->
    <main class="bg-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-5 md:px-8">

            <!-- Encabezado -->
            <div class="text-center mb-14">
                <span class="text-[9px] tracking-[0.5em] text-[#c5a059] font-bold uppercase mb-3 block">Nuestras creaciones</span>
                <h2 class="text-3xl serif italic">Cada imagen, una historia</h2>
            </div>

            <!-- Grid masonry -->
            <div class="masonry-grid">
                <?php foreach ($galeria as $foto) : ?>
                <div class="galeria-item"
                     data-src="<?= htmlspecialchars($foto['src']) ?>"
                     data-caption="<?= htmlspecialchars($foto['titulo']) ?> — <?= htmlspecialchars($foto['lugar']) ?>"
                     role="button"
                     tabindex="0"
                     aria-label="Ver <?= htmlspecialchars($foto['titulo']) ?>">
                    <img src="<?= htmlspecialchars($foto['src']) ?>"
                         alt="<?= htmlspecialchars($foto['titulo']) ?>">
                    <div class="galeria-item-overlay">
                        <span class="text-[8px] tracking-[0.3em] uppercase font-bold text-[#c5a059] mb-1">
                            <?= htmlspecialchars($foto['lugar']) ?>
                        </span>
                        <p class="text-white serif italic text-lg leading-snug">
                            <?= htmlspecialchars($foto['titulo']) ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </main>

    <!-- ══════════════════════════════════════════════
         CTA INFERIOR
    ═══════════════════════════════════════════════ -->
    <section class="bg-[#f9f8f6] py-16 text-center">
        <div class="max-w-xl mx-auto px-6">
            <p class="text-[11px] text-gray-400 uppercase tracking-[0.3em] mb-6">¿Quieres que creemos algo así para ti?</p>
            <a href="index.php#contacto"
               class="btn-luxury inline-block px-12 py-4 border border-black hover:bg-black hover:text-white transition-all text-[10px] uppercase tracking-[0.25em]">
                Cotizar un evento
            </a>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

    <!-- ══════════════════════════════════════════════
         MODAL DE IMAGEN
    ═══════════════════════════════════════════════ -->
    <div id="galeria-modal" class="galeria-modal--hidden" role="dialog" aria-modal="true" aria-label="Imagen ampliada">
        <button id="galeria-modal-close" aria-label="Cerrar imagen">
            <i data-lucide="x" class="w-7 h-7"></i>
        </button>
        <img id="galeria-modal-img" src="" alt="">
        <p id="galeria-modal-caption"></p>
    </div>

    <button id="back-to-top" class="back-to-top" aria-label="Volver arriba" title="Volver arriba">
        <i data-lucide="arrow-up" class="w-4 h-4"></i>
    </button>

    <script src="js/main.js"></script>
    <script src="js/galeria.js"></script>

</body>
</html>
