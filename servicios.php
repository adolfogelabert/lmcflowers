<?php
/**
 * LMC Flowers — Página de Servicios
 * Detalle completo de los 3 servicios con CTA de cotización.
 */
?>
<?php include 'include/head.php'; ?>

<body class="antialiased">

    <?php include 'include/nav.php'; ?>

    <!-- ══════════════════════════════════════════════
         HERO INTERIOR — SERVICIOS
    ═══════════════════════════════════════════════ -->
    <section class="relative pt-40 pb-20 text-center"
             style="background: url('imagenes/galeria_4.jpg') center center / cover no-repeat;">
        <div class="absolute inset-0" style="background: rgba(14,12,10,0.55);"></div>
        <div class="relative max-w-3xl mx-auto px-6">
            <span class="text-[9px] tracking-[0.55em] text-[#c5a059] font-bold uppercase mb-4 block">LMC Flowers Miami</span>
            <h1 class="text-4xl md:text-5xl serif italic leading-tight mb-5 text-white">Nuestros Servicios</h1>
            <p class="text-[11px] text-white/60 uppercase tracking-[0.3em]">Diseño floral &bull; Producción de eventos &bull; Luxury Delivery</p>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════
         INTRO
    ═══════════════════════════════════════════════ -->
    <section class="bg-white py-16 md:py-20">
        <div class="max-w-3xl mx-auto px-8 text-center">
            <p class="text-[14px] text-gray-500 leading-relaxed">
                Desde 2024 transformamos los momentos más importantes de nuestros clientes en experiencias estéticas inolvidables. Cada servicio que ofrecemos nace de la misma convicción: la belleza de las flores, cuando se trabaja con intención y oficio, tiene el poder de contar historias.
            </p>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════
         SERVICIO 1 — BODAS DE DESTINO
         Imagen izquierda / Texto derecha
    ═══════════════════════════════════════════════ -->
    <section id="bodas" class="bg-[#f9f8f6] py-20 md:py-28">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-20 items-center">

                <!-- Imagen -->
                <div class="overflow-hidden aspect-[4/5]">
                    <img src="imagenes/galeria_2.jpg"
                         alt="Bodas de Destino — LMC Flowers Miami"
                         class="w-full h-full object-cover transition-transform duration-1000 hover:scale-105">
                </div>

                <!-- Texto -->
                <div class="flex flex-col justify-center">
                    <span class="text-[9px] tracking-[0.55em] text-[#c5a059] font-bold uppercase mb-4 block">Servicio 01</span>
                    <h2 class="text-3xl md:text-4xl serif italic leading-tight mb-6 text-[#1a1a1a]">Bodas de Destino</h2>
                    <div class="w-8 h-[1px] bg-[#c5a059] mb-8"></div>
                    <p class="text-[13px] text-gray-600 leading-relaxed mb-6">
                        Diseñamos la decoración floral completa de tu boda con una visión artística que honra cada detalle de tu historia. Desde la primera consulta hasta el último pétalo, estamos presentes para que el día más importante de tu vida sea exactamente como lo imaginaste — o mejor.
                    </p>
                    <p class="text-[13px] text-gray-600 leading-relaxed mb-10">
                        Trabajamos con parejas locales e internacionales que eligen Miami como destino para su celebración, coordinando cada elemento floral con el venue, el vestido y la atmósfera deseada.
                    </p>

                    <!-- Lista de características -->
                    <ul class="space-y-3 mb-12">
                        <?php
                        $bodas_items = [
                            'Consultoría de diseño floral personalizada',
                            'Ramo de novia y accesorios de la boda',
                            'Decoración de ceremonia y recepción',
                            'Centros de mesa, arcos y estructuras florales',
                            'Coordinación con venue y wedding planner',
                            'Montaje y desmontaje el día del evento',
                        ];
                        foreach ($bodas_items as $item):
                        ?>
                        <li class="flex items-start gap-3 text-[12px] text-gray-600">
                            <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#c5a059] flex-shrink-0"></span>
                            <?= htmlspecialchars($item) ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="index.php#contacto"
                       class="btn-luxury inline-block self-start px-10 py-4 border border-black hover:bg-black hover:text-white transition-all text-[10px] uppercase tracking-[0.25em]">
                        Solicitar cotización
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════
         SERVICIO 2 — EVENTOS CORPORATIVOS
         Imagen derecha / Texto izquierda
    ═══════════════════════════════════════════════ -->
    <section id="corporativos" class="bg-white py-20 md:py-28">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-20 items-center">

                <!-- Texto (primero en desktop, segundo en mobile) -->
                <div class="flex flex-col justify-center order-2 md:order-1">
                    <span class="text-[9px] tracking-[0.55em] text-[#c5a059] font-bold uppercase mb-4 block">Servicio 02</span>
                    <h2 class="text-3xl md:text-4xl serif italic leading-tight mb-6 text-[#1a1a1a]">Eventos Corporativos</h2>
                    <div class="w-8 h-[1px] bg-[#c5a059] mb-8"></div>
                    <p class="text-[13px] text-gray-600 leading-relaxed mb-6">
                        Las marcas más exigentes de Miami y el mundo confían en nosotros para crear experiencias sensoriales que refuercen su identidad. Diseñamos instalaciones florales y ambientaciones botánicas que comunican los valores de tu empresa sin necesidad de palabras.
                    </p>
                    <p class="text-[13px] text-gray-600 leading-relaxed mb-10">
                        De galas y lanzamientos de producto a conferencias y cenas de directivos, adaptamos cada propuesta al espíritu de la marca y al propósito del evento.
                    </p>

                    <!-- Lista de características -->
                    <ul class="space-y-3 mb-12">
                        <?php
                        $corp_items = [
                            'Briefing creativo y conceptualización de marca',
                            'Instalaciones florales a gran escala',
                            'Ambientación de espacios interiores y exteriores',
                            'Galas, lanzamientos y eventos VIP',
                            'Brand experience con identidad cromática',
                            'Producción integral: logística y montaje',
                        ];
                        foreach ($corp_items as $item):
                        ?>
                        <li class="flex items-start gap-3 text-[12px] text-gray-600">
                            <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#c5a059] flex-shrink-0"></span>
                            <?= htmlspecialchars($item) ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="index.php#contacto"
                       class="btn-luxury inline-block self-start px-10 py-4 border border-black hover:bg-black hover:text-white transition-all text-[10px] uppercase tracking-[0.25em]">
                        Solicitar cotización
                    </a>
                </div>

                <!-- Imagen -->
                <div class="overflow-hidden aspect-[4/5] order-1 md:order-2">
                    <img src="imagenes/galeria_9.jpg"
                         alt="Eventos Corporativos — LMC Flowers Miami"
                         class="w-full h-full object-cover transition-transform duration-1000 hover:scale-105">
                </div>

            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════
         SERVICIO 3 — LUXURY DELIVERY
         Imagen izquierda / Texto derecha
    ═══════════════════════════════════════════════ -->
    <section id="delivery" class="bg-[#f9f8f6] py-20 md:py-28">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-20 items-center">

                <!-- Imagen -->
                <div class="overflow-hidden aspect-[4/5]">
                    <img src="imagenes/galeria_1.jpg"
                         alt="Luxury Delivery — LMC Flowers Miami"
                         class="w-full h-full object-cover transition-transform duration-1000 hover:scale-105">
                </div>

                <!-- Texto -->
                <div class="flex flex-col justify-center">
                    <span class="text-[9px] tracking-[0.55em] text-[#c5a059] font-bold uppercase mb-4 block">Servicio 03</span>
                    <h2 class="text-3xl md:text-4xl serif italic leading-tight mb-6 text-[#1a1a1a]">Luxury Delivery</h2>
                    <div class="w-8 h-[1px] bg-[#c5a059] mb-8"></div>
                    <p class="text-[13px] text-gray-600 leading-relaxed mb-6">
                        Arreglos florales de alta gama diseñados y entregados en Miami el mismo día. Cada composición es una pieza única, elaborada a mano por nuestro equipo con flores frescas seleccionadas esa mañana, y presentada en embalaje de lujo digno de quien la recibe.
                    </p>
                    <p class="text-[13px] text-gray-600 leading-relaxed mb-10">
                        Ideal para sorpresas, regalos corporativos, fechas especiales o simplemente porque alguien merece algo extraordinario hoy. Servicio disponible en toda el área metropolitana de Miami.
                    </p>

                    <!-- Lista de características -->
                    <ul class="space-y-3 mb-12">
                        <?php
                        $delivery_items = [
                            'Arreglos diseñados a medida o con guía de estilo',
                            'Flores importadas y de temporada seleccionadas a diario',
                            'Entrega el mismo día en Miami-Dade y Broward',
                            'Embalaje de lujo con tarjeta personalizada',
                            'Servicio de suscripción semanal o mensual',
                            'Atención personalizada por WhatsApp o teléfono',
                        ];
                        foreach ($delivery_items as $item):
                        ?>
                        <li class="flex items-start gap-3 text-[12px] text-gray-600">
                            <span class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#c5a059] flex-shrink-0"></span>
                            <?= htmlspecialchars($item) ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="index.php#contacto"
                       class="btn-luxury inline-block self-start px-10 py-4 border border-black hover:bg-black hover:text-white transition-all text-[10px] uppercase tracking-[0.25em]">
                        Solicitar cotización
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════
         CTA FINAL
    ═══════════════════════════════════════════════ -->
    <section class="bg-[#1a1a1a] py-20 md:py-24 text-center">
        <div class="max-w-2xl mx-auto px-6">
            <span class="text-[9px] tracking-[0.55em] text-[#c5a059] font-bold uppercase mb-4 block">¿Listo para comenzar?</span>
            <h2 class="text-3xl md:text-4xl serif italic text-white leading-tight mb-6">Hablemos de tu próximo evento</h2>
            <p class="text-[12px] text-white/50 leading-relaxed mb-10 uppercase tracking-[0.2em]">
                Cada proyecto comienza con una conversación
            </p>
            <a href="index.php#contacto"
               class="btn-luxury inline-block px-12 py-5 border border-[#c5a059] text-[#c5a059] hover:bg-[#c5a059] hover:text-white transition-all text-[10px] uppercase tracking-[0.3em]">
                Cotizar ahora
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
