/**
 * LMC Flowers — Galería
 * Modal de imagen para la página galeria.php
 */
(function () {
    'use strict';

    const modal      = document.getElementById('galeria-modal');
    const modalImg   = document.getElementById('galeria-modal-img');
    const modalCapt  = document.getElementById('galeria-modal-caption');
    const modalClose = document.getElementById('galeria-modal-close');

    if (!modal) return;

    // Abrir modal al hacer clic en una imagen de la galería
    document.querySelectorAll('.galeria-item').forEach(function (item) {
        item.addEventListener('click', function () {
            const src     = item.getAttribute('data-src');
            const caption = item.getAttribute('data-caption') || '';

            modalImg.src        = src;
            modalImg.alt        = caption;
            modalCapt.textContent = caption;
            modal.classList.remove('galeria-modal--hidden');
            document.body.style.overflow = 'hidden';
        });
    });

    // Cerrar con botón X
    modalClose.addEventListener('click', cerrarModal);

    // Cerrar al hacer clic fuera de la imagen
    modal.addEventListener('click', function (e) {
        if (e.target === modal) cerrarModal();
    });

    // Cerrar con Escape
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') cerrarModal();
    });

    function cerrarModal() {
        modal.classList.add('galeria-modal--hidden');
        document.body.style.overflow = '';
        // Limpiar src para evitar flash de imagen anterior
        setTimeout(function () { modalImg.src = ''; }, 300);
    }
}());
