<?php
/**
 * LMC Flowers — Sección Contacto
 * Formulario de cotización de eventos.
 * TODO: Conectar action a un script de procesamiento PHP (ej: procesar-contacto.php)
 */
?>

<!-- ══════════════════════════════════════════════
     SECCIÓN CONTACTO
═══════════════════════════════════════════════ -->
<section id="contacto" class="bg-[#1d1e20] py-16 md:py-24 text-white">
    <div class="max-w-7xl mx-auto px-5 md:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            <!-- Info de contacto -->
            <div>
                <span class="text-[10px] tracking-[0.35em] uppercase text-white/60 block mb-8">Contacto</span>
                <h3 class="serif italic text-5xl md:text-7xl leading-[0.9] mb-10">
                    Hagamos algo hermoso juntos.
                </h3>
                <ul class="text-white/80 leading-8 text-[13px]">
                    <li>Miami, Florida — USA</li>
                    <li>Lunes — Sábado &nbsp;·&nbsp; 9am – 7pm</li>
                    <li>WhatsApp disponible</li>
                    <li>info@lmcflowers.com</li>
                </ul>
            </div>

            <!-- Formulario -->
            <form class="contact-panel space-y-5" action="procesar-contacto.php" method="post">

                <!-- Nombre + Teléfono -->
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label for="nombre" class="block text-[10px] uppercase tracking-[0.2em] mb-2 text-white/75">Nombre</label>
                        <input id="nombre" name="nombre" type="text" placeholder="Tu nombre" required>
                    </div>
                    <div>
                        <label for="telefono" class="block text-[10px] uppercase tracking-[0.2em] mb-2 text-white/75">Teléfono</label>
                        <input id="telefono" name="telefono" type="tel" placeholder="+1 (305) 000-0000">
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-[10px] uppercase tracking-[0.2em] mb-2 text-white/75">Email</label>
                    <input id="email" name="email" type="email" placeholder="tu@email.com" required>
                </div>

                <!-- Tipo de evento -->
                <div>
                    <label for="tipo-evento" class="block text-[10px] uppercase tracking-[0.2em] mb-2 text-white/75">Tipo de evento</label>
                    <select id="tipo-evento" name="tipo-evento" required>
                        <option value="" selected disabled>Tipo de evento</option>
                        <option value="boda">Boda</option>
                        <option value="corporativo">Corporativo</option>
                        <option value="social">Social</option>
                        <option value="quince">Quinceañera</option>
                    </select>
                </div>

                <!-- Fecha + Presupuesto -->
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label for="fecha" class="block text-[10px] uppercase tracking-[0.2em] mb-2 text-white/75">Fecha del evento</label>
                        <input id="fecha" name="fecha" type="text" placeholder="mm / dd / aaaa">
                    </div>
                    <div>
                        <label for="presupuesto" class="block text-[10px] uppercase tracking-[0.2em] mb-2 text-white/75">Presupuesto aprox</label>
                        <input id="presupuesto" name="presupuesto" type="text" placeholder="$ USD">
                    </div>
                </div>

                <!-- Mensaje -->
                <div>
                    <label for="mensaje" class="block text-[10px] uppercase tracking-[0.2em] mb-2 text-white/75">Cuéntanos sobre tu evento</label>
                    <textarea id="mensaje" name="mensaje" rows="4" placeholder="Descríbenos tu visión..."></textarea>
                </div>

                <!-- Submit -->
                <button type="submit"
                        class="w-full btn-luxury border border-white/40 py-4 text-white hover:bg-white hover:text-black transition-all">
                    Enviar solicitud
                </button>

            </form>

        </div>
    </div>
</section>
