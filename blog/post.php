<?php
/**
 * LMC Flowers — Detalle de post / artículo del Diario
 * Parámetro de entrada: ?slug=nombre-del-post (GET, validado contra whitelist)
 * TODO: Reemplazar el array $posts por consulta a BD cuando esté disponible.
 */

// ── Base path (un nivel arriba de /blog/) ─────────────────────────────────────
$basePath = '../';

// ── Catálogo de posts (whitelist + contenido) ─────────────────────────────────
$catalogo = [
    'tendencias-florales-2026' => [
        'slug'      => 'tendencias-florales-2026',
        'imagen'    => '../imagenes/galeria_1.jpg',
        'categoria' => 'Tendencias',
        'titulo'    => 'Las tendencias florales que dominarán 2026',
        'extracto'  => 'El minimalismo orgánico, los tonos tierra y las flores silvestres marcan la pauta este año en bodas y eventos de lujo en Miami y más allá.',
        'fecha'     => 'Marzo 15, 2026',
        'autor'     => 'LMC Team',
        'contenido' => [
            [
                'tipo'  => 'subtitulo',
                'texto' => 'El regreso a lo orgánico',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'Después de años en los que la precisión geométrica dominó la floricultura de lujo, 2026 trae una corriente de romanticismo silvestre. Ramos asimétricos, flores con tallo largo, ramilletes de hierbas aromáticas mezclados con peonías y ranúnculos protagonizan las propuestas más solicitadas de la temporada.',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'Los tonos tierra — terracota, siena quemado, blanco roto y verde salvia — reemplazan la paleta monocromática de temporadas anteriores. En LMC Flowers Miami, hemos observado que nuestros clientes buscan cada vez más esa sensación de "jardín encontrado" incluso en los eventos más formales.',
            ],
            [
                'tipo'  => 'subtitulo',
                'texto' => 'Flores protagonistas del año',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'La achillea, el gossypium (flor de algodón), la lunaria y el eucalipto plateado encabezan la lista de las variedades más solicitadas. Acompañan a las eternas rosas de jardín inglés y las peonías, que nunca pierden vigencia en el mercado premium. Las orquídeas cymbidium, por su parte, han evolucionado hacia presentaciones más desestrctuturadas y naturales.',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'La sostenibilidad también juega un papel clave: los clientes preguntan activamente por flores de cultivo local y arreglos sin florales sin espuma sintética. En LMC adaptamos nuestras propuestas utilizando materiales biodegradables y flores de temporada cultivadas en Florida siempre que es posible.',
            ],
            [
                'tipo'  => 'subtitulo',
                'texto' => 'Instalaciones y eventos corporativos',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'Las instalaciones florales a gran escala —arcos de entrada, túneles de flores, muros botánicos— mantienen su popularidad en eventos corporativos y bodas de alta gama. Sin embargo, la escala intimista gana terreno: centros de mesa de menor altura que invitan a la conversación, boutonnieres de flores secas y welcome tables que duplican como regalo para los invitados.',
            ],
        ],
    ],
    'como-elegir-flores-boda' => [
        'slug'      => 'como-elegir-flores-boda',
        'imagen'    => '../imagenes/galeria_2.jpg',
        'categoria' => 'Guías',
        'titulo'    => 'Cómo elegir las flores perfectas para tu boda',
        'extracto'  => 'Desde la paleta de colores hasta la estación del año, te guiamos paso a paso para crear una decoración que narre vuestra historia.',
        'fecha'     => 'Febrero 28, 2026',
        'autor'     => 'LMC Team',
        'contenido' => [
            [
                'tipo'  => 'subtitulo',
                'texto' => 'Empieza por la paleta de color',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'Antes de elegir una sola flor, define los colores de tu boda. ¿Buscas un ambiente romántico en blanco roto y champagne? ¿O prefieres un contraste dramático con flores en borgoña y follaje oscuro? La paleta determina las variedades disponibles y condiciona cada decisión floral posterior.',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'Recomendamos seleccionar un color dominante, un color de apoyo y un acento. Con esta base, el diseñador floral puede construir composiciones con profundidad visual sin caer en la sobreinformación cromática.',
            ],
            [
                'tipo'  => 'subtitulo',
                'texto' => 'La estación lo cambia todo',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'En Miami contamos con la ventaja del clima tropical, lo que amplía nuestra disponibilidad de flores durante todo el año. Sin embargo, casarte en temporada implica precios más bajos, mejor calidad y mayor frescura. Consulta a tu florista sobre qué está en su mejor momento el mes de tu evento.',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'Las flores importadas pueden conseguirse año redondo, pero su costo logístico puede incrementar significativamente el presupuesto de decoración. Una estrategia inteligente combina flores locales de temporada como base y añade una o dos variedades especiales como punto focal.',
            ],
            [
                'tipo'  => 'subtitulo',
                'texto' => 'El ramo de novia, protagonista indiscutible',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'El ramo es la pieza más fotografiada de toda la boda. Debe complementar el vestido, la silueta de la novia y fluir con naturalidad con el resto de la decoración. Te recomendamos reservar entre el 15% y el 20% del presupuesto floral total para el ramo y los accesorios de la novia.',
            ],
        ],
    ],
    'detras-de-gala-art-basel' => [
        'slug'      => 'detras-de-gala-art-basel',
        'imagen'    => '../imagenes/galeria_9.jpg',
        'categoria' => 'Behind the Scenes',
        'titulo'    => 'Detrás de la Gala Art Basel Miami 2025',
        'extracto'  => 'Un vistazo exclusivo al proceso creativo detrás de uno de los eventos más importantes del año en el sur de la Florida.',
        'fecha'     => 'Enero 10, 2026',
        'autor'     => 'LMC Team',
        'contenido' => [
            [
                'tipo'  => 'subtitulo',
                'texto' => 'El encargo más ambicioso del año',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'Cuando recibimos el brief para la Gala Art Basel Miami 2025, el reto era claro: crear instalaciones florales que dialogaran con las obras de arte sin competir con ellas. El espacio, un hangar reconvertido en Wynwood, demandaba escala monumental y una paleta que evocara la neutralidad de una galería de arte contemporáneo.',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'El equipo de LMC Flowers trabajó durante seis semanas en la conceptualización, selección de materiales y logística. Más de 4,000 tallos de flores fueron procesados en nuestro taller de Miami Beach en las 72 horas previas al evento.',
            ],
            [
                'tipo'  => 'subtitulo',
                'texto' => 'El proceso de diseño',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'Optamos por una instalación suspendida de 12 metros de largo utilizando ramas de cerezo japonés (Prunus serrulata) importadas directamente de Japón. La base estructural fue diseñada por ingenieros especializados en instalaciones temporales, garantizando la seguridad de los más de 800 asistentes.',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'Los centros de mesa combinaron orquídeas phalaenopsis blancas con follaje de helecho negro y ramas de olivo plateado. La iluminación, trabajada junto al equipo de producción del evento, realzaba la translucidez de los pétalos creando un efecto casi escultórico.',
            ],
            [
                'tipo'  => 'subtitulo',
                'texto' => 'El resultado',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'Las instalaciones florecieron en los titulares de medios especializados y en las redes sociales de los asistentes. Para nosotros, sin embargo, el mayor reconocimiento fue la llamada del cliente el día siguiente para confirmar la producción de la gala del siguiente año. Eso es todo lo que necesitamos saber.',
            ],
        ],
    ],
    'arte-de-la-mesa-floral' => [
        'slug'      => 'arte-de-la-mesa-floral',
        'imagen'    => '../imagenes/galeria_3.jpg',
        'categoria' => 'Diseño',
        'titulo'    => 'El arte de la mesa: centros florales que cuentan historias',
        'extracto'  => 'Un centro de mesa bien diseñado puede transformar por completo la atmósfera de un evento. Exploramos las claves para lograrlo.',
        'fecha'     => 'Diciembre 20, 2025',
        'autor'     => 'LMC Team',
        'contenido' => [
            [
                'tipo'  => 'subtitulo',
                'texto' => 'Altura, textura y movimiento',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'El centro de mesa es la pieza que los invitados tienen enfrente durante horas. Por eso no puede ser simplemente hermoso; debe ser experiencial. Diseñamos cada arreglo pensando en tres dimensiones: la altura (¿facilita o dificulta la conversación?), la textura (¿invita a ser tocado?) y el movimiento (¿tiene flores que se mueven con la brisa del salón?).',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'La altura es el primer parámetro de decisión. Un centro alto genera drama visual desde la entrada del salón pero puede dificultar el contacto visual entre comensales. La norma general: si hay 6 o más personas por mesa, los centros altos deben ser estrechos; si la mesa es íntima, un arreglo bajo y abundante genera más calidez.',
            ],
            [
                'tipo'  => 'subtitulo',
                'texto' => 'El contenedor como parte del diseño',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'Hemos pasado de los jarrones de cristal estándar a explorar cerámica artesanal, mármol, madera tallada y hasta metal oxidado. El recipiente es parte del diseño, no un accesorio invisible. Una flor sencilla en un recipiente extraordinario puede ser más impactante que un bouquet voluminoso en un jarrón genérico.',
            ],
        ],
    ],
    'flores-tropicales-miami' => [
        'slug'      => 'flores-tropicales-miami',
        'imagen'    => '../imagenes/galeria_6.jpg',
        'categoria' => 'Inspiración',
        'titulo'    => 'Flora tropical: el lujo silvestre de Miami en tus eventos',
        'extracto'  => 'Las heliconias, orquídeas y anturios son protagonistas de una nueva corriente que celebra la exuberancia del trópico con elegancia.',
        'fecha'     => 'Noviembre 5, 2025',
        'autor'     => 'LMC Team',
        'contenido' => [
            [
                'tipo'  => 'subtitulo',
                'texto' => 'Miami como fuente de inspiración',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'Durante demasiado tiempo, el lujo floral se asoció casi exclusivamente con rosas europeas, peonías y lirios. En LMC Flowers creemos que esa ecuación está incompleta, especialmente en Miami. La flora tropical —disponible localmente, de menor impacto ambiental y de una belleza absolutamente particular— merece ocupar el lugar estelar en producciones de alta gama.',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'La heliconia, con sus brácteas de naranja y rojo encendido, genera instalaciones de un dramatismo sin igual. El anturio barnizado aporta una elegancia casi artificial, perfecta para eventos de diseño contemporáneo. Las orquídeas vanda, cultivadas en colgantes de madera, replican la atmósfera de los jardines botánicos más exclusivos del mundo.',
            ],
            [
                'tipo'  => 'subtitulo',
                'texto' => 'Cómo integrar lo tropical con sofisticación',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'La clave está en el edición. La exuberancia tropical puede resultar excesiva si no se disciplina con criterio. Combinamos flores tropicales con follaje neutro (eucalipto, ruscus, philodendron) y acentos en blanco o crema que "respiran" visualmente el arreglo. El resultado: tropical pero refinado, exótico pero accesible.',
            ],
        ],
    ],
    'bodas-en-coral-gables' => [
        'slug'      => 'bodas-en-coral-gables',
        'imagen'    => '../imagenes/galeria_8.jpg',
        'categoria' => 'Bodas',
        'titulo'    => 'Bodas en Coral Gables: cuando la arquitectura y las flores dialogan',
        'extracto'  => 'Los jardines y mansiones de Coral Gables ofrecen un lienzo único para la decoración floral. Así fue nuestra última producción en la zona.',
        'fecha'     => 'Octubre 18, 2025',
        'autor'     => 'LMC Team',
        'contenido' => [
            [
                'tipo'  => 'subtitulo',
                'texto' => 'Un escenario que dicta el estilo',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'Coral Gables es una de las zonas residenciales más elegantes del hemisferio occidental. Sus mansiones mediterráneas, sus jardines de ficus centenarios y la luz dorada de sus tardes crean un marco visual que exige una aproximación floral muy particular: orgánica, generosa, con raíces en el jardín clásico europeo pero adaptada a la energía vibrante de Florida.',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'Para la boda que produjimos en octubre, el cliente nos dio total libertad creativa con una sola restricción: "Queremos que parezca que las flores siempre han estado ahí". Ese briefing es, a la vez, el más liberador y el más exigente que podemos recibir.',
            ],
            [
                'tipo'  => 'subtitulo',
                'texto' => 'Respetando la arquitectura',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'Los arcos de entrada de la mansión —construidos en piedra coral de los años 40— pedían a gritos una enredadera de jazmín y rosas trepadoras. Instalamos una estructura de acero invisible recubierta de musgo vivo sobre la que dejamos caer cascadas de wisteria blanca y rosas de jardín inglés de variedad "Constance Spry". El resultado fue una puerta que parecía llevar décadas creciendo allí.',
            ],
            [
                'tipo'  => 'parrafo',
                'texto' => 'Para los centros de mesa del jardín posterior, combinamos floreros de barro envejecido con composiciones de dalia espuela de caballero, astrantia, romero en flor y zinnias en rosa pálido. Todo el material fue adquirido en viveros locales de Homestead, reforzando nuestro compromiso con la producción floral sostenible.',
            ],
        ],
    ],
];

// ── Validar y obtener el slug ─────────────────────────────────────────────────
$slug = isset($_GET['slug']) ? trim((string) $_GET['slug']) : '';

// Solo se permite el slug si existe en el catálogo (whitelist)
if ($slug === '' || !array_key_exists($slug, $catalogo)) {
    header('Location: ../diario.php');
    exit;
}

$post = $catalogo[$slug];

// Posts relacionados: los 3 siguientes (excluyendo el actual)
$otros    = array_filter($catalogo, fn($p) => $p['slug'] !== $slug);
$relacion = array_slice(array_values($otros), 0, 3);
?>
<?php include '../include/head.php'; ?>

<body class="antialiased">

    <?php include '../include/nav.php'; ?>

    <!-- ══════════════════════════════════════════════
         HERO INTERIOR — imagen destacada del post
    ═══════════════════════════════════════════════ -->
    <section class="relative pt-40 pb-20 text-center"
             style="background: url('<?= htmlspecialchars($post['imagen']) ?>') center center / cover no-repeat;">
        <div class="absolute inset-0" style="background: rgba(14,12,10,0.58);"></div>
        <div class="relative max-w-3xl mx-auto px-6">
            <span class="text-[9px] tracking-[0.55em] text-[#c5a059] font-bold uppercase mb-4 block">
                <?= htmlspecialchars($post['categoria']) ?>
            </span>
            <h1 class="text-3xl md:text-5xl serif italic leading-tight mb-6 text-white">
                <?= htmlspecialchars($post['titulo']) ?>
            </h1>
            <p class="text-[10px] text-white/60 uppercase tracking-[0.3em]">
                <?= htmlspecialchars($post['fecha']) ?> &nbsp;&bull;&nbsp; <?= htmlspecialchars($post['autor']) ?>
            </p>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════
         CONTENIDO DEL ARTÍCULO
    ═══════════════════════════════════════════════ -->
    <main class="bg-white py-16 md:py-24">
        <div class="max-w-2xl mx-auto px-8 md:px-12">

            <!-- Extracto destacado -->
            <p class="text-[15px] serif italic text-[#1a1a1a] leading-relaxed mb-12 border-l-2 border-[#c5a059] pl-6">
                <?= htmlspecialchars($post['extracto']) ?>
            </p>

            <!-- Bloques de contenido -->
            <?php foreach ($post['contenido'] as $bloque) : ?>
                <?php if ($bloque['tipo'] === 'subtitulo') : ?>
                    <h2 class="text-2xl serif italic mb-4 mt-10 text-[#1a1a1a]">
                        <?= htmlspecialchars($bloque['texto']) ?>
                    </h2>
                    <div class="w-8 h-[1px] bg-[#c5a059] mb-6"></div>
                <?php elseif ($bloque['tipo'] === 'parrafo') : ?>
                    <p class="text-[13px] text-gray-600 leading-relaxed text-justify mb-6">
                        <?= htmlspecialchars($bloque['texto']) ?>
                    </p>
                <?php endif; ?>
            <?php endforeach; ?>

            <!-- Volver al diario -->
            <div class="border-t border-gray-100 pt-10 mt-14 flex flex-col sm:flex-row items-center justify-between gap-6">
                <a href="../diario.php"
                   class="inline-flex items-center gap-2 text-[9px] uppercase tracking-[0.25em] font-bold hover:text-[#c5a059] transition-colors duration-200">
                    <i data-lucide="arrow-left" class="w-3 h-3"></i>
                    Volver al Diario
                </a>
                <a href="../index.php#contacto"
                   class="btn-luxury inline-block px-10 py-4 border border-black hover:bg-black hover:text-white transition-all text-[10px] uppercase tracking-[0.25em]">
                    Cotizar un evento
                </a>
            </div>

        </div>
    </main>

    <!-- ══════════════════════════════════════════════
         ARTÍCULOS RELACIONADOS
    ═══════════════════════════════════════════════ -->
    <?php if (!empty($relacion)) : ?>
    <section class="bg-[#f9f8f6] py-20 md:py-24">
        <div class="max-w-7xl mx-auto px-5 md:px-8">

            <div class="text-center mb-14">
                <span class="text-[9px] tracking-[0.5em] text-[#c5a059] font-bold uppercase mb-3 block">Seguir leyendo</span>
                <h2 class="text-3xl serif italic">Más del Diario</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-12">

                <?php foreach ($relacion as $rel) : ?>
                <article class="group cursor-pointer bg-white">

                    <a href="post.php?slug=<?= urlencode($rel['slug']) ?>">
                        <div class="overflow-hidden aspect-[4/3]">
                            <img src="<?= htmlspecialchars($rel['imagen']) ?>"
                                 alt="<?= htmlspecialchars($rel['titulo']) ?>"
                                 class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                        </div>
                    </a>

                    <div class="p-6">
                        <div class="flex items-center gap-4 mb-3">
                            <span class="text-[9px] tracking-[0.3em] uppercase font-bold text-[#c5a059]">
                                <?= htmlspecialchars($rel['categoria']) ?>
                            </span>
                            <span class="text-gray-300">|</span>
                            <span class="text-[9px] tracking-[0.2em] uppercase text-gray-400">
                                <?= htmlspecialchars($rel['fecha']) ?>
                            </span>
                        </div>
                        <a href="post.php?slug=<?= urlencode($rel['slug']) ?>">
                            <h3 class="text-lg serif italic mb-3 leading-snug group-hover:text-[#c5a059] transition-colors duration-300">
                                <?= htmlspecialchars($rel['titulo']) ?>
                            </h3>
                        </a>
                        <a href="post.php?slug=<?= urlencode($rel['slug']) ?>"
                           class="inline-flex items-center gap-2 text-[9px] uppercase tracking-[0.25em] font-bold hover:text-[#c5a059] transition-colors duration-200">
                            Leer más
                            <i data-lucide="arrow-up-right" class="w-3 h-3"></i>
                        </a>
                    </div>

                </article>
                <?php endforeach; ?>

            </div>

        </div>
    </section>
    <?php endif; ?>

    <?php include '../include/footer.php'; ?>

    <button id="back-to-top" class="back-to-top" aria-label="Volver arriba" title="Volver arriba">
        <i data-lucide="arrow-up" class="w-4 h-4"></i>
    </button>

    <script src="../js/main.js"></script>

</body>
</html>
