<?php
/**
 * LMC Flowers — Sección Blog
 * Posts más recientes del diario.
 * TODO: Reemplazar el array $posts por consulta a BD cuando esté disponible.
 */

// ── Datos de ejemplo (reemplazar con query a BD) ──────────
$posts = [
    [
        'id'       => 1,
        'slug'     => 'tendencias-florales-2026',
        'imagen'   => 'imagenes/galeria_1.jpg',
        'categoria'=> 'Tendencias',
        'titulo'   => 'Las tendencias florales que dominarán 2026',
        'extracto' => 'El minimalismo orgánico, los tonos tierra y las flores silvestres marcan la pauta este año en bodas y eventos de lujo.',
        'fecha'    => 'Marzo 15, 2026',
        'autor'    => 'LMC Team',
    ],
    [
        'id'       => 2,
        'slug'     => 'como-elegir-flores-boda',
        'imagen'   => 'imagenes/galeria_2.jpg',
        'categoria'=> 'Guías',
        'titulo'   => 'Cómo elegir las flores perfectas para tu boda',
        'extracto' => 'Desde la paleta de colores hasta la estación del año, te guiamos paso a paso para crear una decoración que narre tu historia.',
        'fecha'    => 'Febrero 28, 2026',
        'autor'    => 'LMC Team',
    ],
    [
        'id'       => 3,
        'slug'     => 'detras-de-gala-art-basel',
        'imagen'   => 'imagenes/galeria_9.jpg',
        'categoria'=> 'Behind the Scenes',
        'titulo'   => 'Detrás de la Gala Art Basel Miami 2025',
        'extracto' => 'Un vistazo exclusivo al proceso creativo detrás de uno de los eventos más importantes del año en el sur de la Florida.',
        'fecha'    => 'Enero 10, 2026',
        'autor'    => 'LMC Team',
    ],
];
?>

<!-- ══════════════════════════════════════════════
     SECCIÓN BLOG — POSTS RECIENTES
═══════════════════════════════════════════════ -->
<section id="blog" class="py-24 md:py-28 bg-[#f9f8f6]">
    <div class="max-w-7xl mx-auto px-5 md:px-8">

        <!-- Encabezado -->
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 md:mb-20">
            <div>
                <span class="text-[10px] tracking-[0.5em] text-gold-brand font-bold uppercase mb-4 block">El Diario</span>
                <h2 class="text-4xl md:text-5xl serif italic leading-[1.05]">Inspiración &amp; Tendencias</h2>
            </div>
            <a href="diario.php"
               class="btn-luxury mt-6 md:mt-0 inline-block border border-black/30 px-8 py-3 hover:bg-black hover:text-white hover:border-black transition-all">
                Ver todos los posts
            </a>
        </div>

        <!-- Grid de posts -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-12">

            <?php foreach ($posts as $post) : ?>
            <article class="group cursor-pointer">

                <!-- Imagen -->
                <a href="blog/post.php?slug=<?= urlencode($post['slug']) ?>">
                    <div class="image-container overflow-hidden aspect-[4/3] mb-6">
                        <img src="<?= htmlspecialchars($post['imagen']) ?>"
                             alt="<?= htmlspecialchars($post['titulo']) ?>"
                             class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                    </div>
                </a>

                <!-- Meta -->
                <div class="flex items-center gap-4 mb-3">
                    <span class="text-[9px] tracking-[0.3em] uppercase font-bold text-gold-brand">
                        <?= htmlspecialchars($post['categoria']) ?>
                    </span>
                    <span class="text-gray-300">|</span>
                    <span class="text-[9px] tracking-[0.2em] uppercase text-gray-400">
                        <?= htmlspecialchars($post['fecha']) ?>
                    </span>
                </div>

                <!-- Título -->
                <a href="blog/post.php?slug=<?= urlencode($post['slug']) ?>">
                    <h3 class="text-xl serif italic mb-3 leading-snug group-hover:text-gold-brand transition-colors duration-300">
                        <?= htmlspecialchars($post['titulo']) ?>
                    </h3>
                </a>

                <!-- Extracto -->
                <p class="text-[11px] text-gray-500 leading-relaxed mb-5">
                    <?= htmlspecialchars($post['extracto']) ?>
                </p>

                <!-- Leer más -->
                <a href="blog/post.php?slug=<?= urlencode($post['slug']) ?>"
                   class="inline-flex items-center gap-2 text-[9px] uppercase tracking-[0.25em] font-bold hover:text-gold-brand transition-colors duration-200">
                    Leer más
                    <i data-lucide="arrow-up-right" class="w-3 h-3"></i>
                </a>

            </article>
            <?php endforeach; ?>

        </div>

    </div>
</section>
