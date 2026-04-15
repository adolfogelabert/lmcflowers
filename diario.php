<?php
/**
 * LMC Flowers — El Diario
 * Página principal del blog / grilla de posts.
 * TODO: Reemplazar el array $posts por consulta a BD cuando esté disponible.
 */

// ── Datos de ejemplo (reemplazar con query a BD) ──────────────────────────────
$posts = [
    [
        'slug'      => 'tendencias-florales-2026',
        'imagen'    => 'imagenes/galeria_1.jpg',
        'categoria' => 'Tendencias',
        'titulo'    => 'Las tendencias florales que dominarán 2026',
        'extracto'  => 'El minimalismo orgánico, los tonos tierra y las flores silvestres marcan la pauta este año en bodas y eventos de lujo en Miami y más allá.',
        'fecha'     => 'Marzo 15, 2026',
    ],
    [
        'slug'      => 'como-elegir-flores-boda',
        'imagen'    => 'imagenes/galeria_2.jpg',
        'categoria' => 'Guías',
        'titulo'    => 'Cómo elegir las flores perfectas para tu boda',
        'extracto'  => 'Desde la paleta de colores hasta la estación del año, te guiamos paso a paso para crear una decoración que narre vuestra historia.',
        'fecha'     => 'Febrero 28, 2026',
    ],
    [
        'slug'      => 'detras-de-gala-art-basel',
        'imagen'    => 'imagenes/galeria_9.jpg',
        'categoria' => 'Behind the Scenes',
        'titulo'    => 'Detrás de la Gala Art Basel Miami 2025',
        'extracto'  => 'Un vistazo exclusivo al proceso creativo detrás de uno de los eventos más importantes del año en el sur de la Florida.',
        'fecha'     => 'Enero 10, 2026',
    ],
    [
        'slug'      => 'arte-de-la-mesa-floral',
        'imagen'    => 'imagenes/galeria_3.jpg',
        'categoria' => 'Diseño',
        'titulo'    => 'El arte de la mesa: centros florales que cuentan historias',
        'extracto'  => 'Un centro de mesa bien diseñado puede transformar por completo la atmósfera de un evento. Exploramos las claves para lograrlo.',
        'fecha'     => 'Diciembre 20, 2025',
    ],
    [
        'slug'      => 'flores-tropicales-miami',
        'imagen'    => 'imagenes/galeria_6.jpg',
        'categoria' => 'Inspiración',
        'titulo'    => 'Flora tropical: el lujo silvestre de Miami en tus eventos',
        'extracto'  => 'Las heliconias, orquídeas y anturios son protagonistas de una nueva corriente que celebra la exuberancia del trópico con elegancia.',
        'fecha'     => 'Noviembre 5, 2025',
    ],
    [
        'slug'      => 'bodas-en-coral-gables',
        'imagen'    => 'imagenes/galeria_8.jpg',
        'categoria' => 'Bodas',
        'titulo'    => 'Bodas en Coral Gables: cuando la arquitectura y las flores dialogan',
        'extracto'  => 'Los jardines y mansiones de Coral Gables ofrecen un lienzo único para la decoración floral. Así fue nuestra última producción en la zona.',
        'fecha'     => 'Octubre 18, 2025',
    ],
];
?>
<?php include 'include/head.php'; ?>

<body class="antialiased">

    <?php include 'include/nav.php'; ?>

    <!-- ══════════════════════════════════════════════
         HERO INTERIOR — DIARIO
    ═══════════════════════════════════════════════ -->
    <section class="relative pt-40 pb-16 text-center" style="background: url('imagenes/galeria_4.jpg') center center / cover no-repeat;">
        <div class="absolute inset-0" style="background: rgba(14,12,10,0.52);"></div>
        <div class="relative max-w-3xl mx-auto px-6">
            <span class="text-[9px] tracking-[0.55em] text-[#c5a059] font-bold uppercase mb-4 block">LMC Flowers</span>
            <h1 class="text-4xl md:text-5xl serif italic leading-tight mb-5 text-white">El Diario</h1>
            <p class="text-[10px] text-white/60 uppercase tracking-[0.3em]">Inspiración &bull; Tendencias &bull; Behind the Scenes</p>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════
         GRILLA DE POSTS
    ═══════════════════════════════════════════════ -->
    <main class="bg-[#f9f8f6] py-20 md:py-28">
        <div class="max-w-7xl mx-auto px-5 md:px-8">

            <!-- Encabezado de sección -->
            <div class="text-center mb-16 md:mb-20">
                <span class="text-[9px] tracking-[0.5em] text-[#c5a059] font-bold uppercase mb-4 block">Todos los artículos</span>
                <h2 class="text-3xl md:text-4xl serif italic leading-tight"><?= count($posts) ?> publicaciones</h2>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-12">

                <?php foreach ($posts as $post) : ?>
                <article class="group cursor-pointer bg-white">

                    <!-- Imagen -->
                    <a href="blog/post.php?slug=<?= urlencode($post['slug']) ?>">
                        <div class="overflow-hidden aspect-[4/3]">
                            <img src="<?= htmlspecialchars($post['imagen']) ?>"
                                 alt="<?= htmlspecialchars($post['titulo']) ?>"
                                 class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                        </div>
                    </a>

                    <!-- Contenido -->
                    <div class="p-6 md:p-8">

                        <!-- Meta -->
                        <div class="flex items-center gap-4 mb-4">
                            <span class="text-[9px] tracking-[0.3em] uppercase font-bold text-[#c5a059]">
                                <?= htmlspecialchars($post['categoria']) ?>
                            </span>
                            <span class="text-gray-300">|</span>
                            <span class="text-[9px] tracking-[0.2em] uppercase text-gray-400">
                                <?= htmlspecialchars($post['fecha']) ?>
                            </span>
                        </div>

                        <!-- Título -->
                        <a href="blog/post.php?slug=<?= urlencode($post['slug']) ?>">
                            <h2 class="text-xl serif italic mb-3 leading-snug group-hover:text-[#c5a059] transition-colors duration-300">
                                <?= htmlspecialchars($post['titulo']) ?>
                            </h2>
                        </a>

                        <!-- Extracto -->
                        <p class="text-[11px] text-gray-500 leading-relaxed mb-6">
                            <?= htmlspecialchars($post['extracto']) ?>
                        </p>

                        <!-- Botón -->
                        <a href="blog/post.php?slug=<?= urlencode($post['slug']) ?>"
                           class="inline-flex items-center gap-2 text-[9px] uppercase tracking-[0.25em] font-bold hover:text-[#c5a059] transition-colors duration-200">
                            Leer más
                            <i data-lucide="arrow-up-right" class="w-3 h-3"></i>
                        </a>

                    </div>

                </article>
                <?php endforeach; ?>

            </div>

        </div>
    </main>

    <?php include 'include/footer.php'; ?>

    <button id="back-to-top" class="back-to-top" aria-label="Volver arriba" title="Volver arriba">
        <i data-lucide="arrow-up" class="w-4 h-4"></i>
    </button>

    <script src="js/main.js"></script>

</body>
</html>
