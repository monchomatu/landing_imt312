/**
 * assets/js/app.js
 * Cronograma dinámico: pide los datos al servidor (api/cronograma.php),
 * que a su vez los consulta en MySQL, y los dibuja en la página.
 */
(function () {
    'use strict';

    const API_URL = 'api/cronograma.php';
    const contenedor = document.getElementById('weeks-container');
    const estado = document.getElementById('cronograma-estado');
    const botones = document.querySelectorAll('.filter-btn');

    const CLASES_ACTIVO = ['active', 'bg-ucb-navy', 'text-white'];
    const CLASES_INACTIVO = ['bg-white', 'text-slate-700'];

    // Colores de las etiquetas (badges) de cada sesión
    const BADGES = {
        gris:   'bg-slate-100 px-2 py-0.5 rounded',
        ambar:  'bg-amber-100 text-amber-900 px-2 py-0.5 rounded font-bold text-xs',
        azul:   'bg-blue-100 text-blue-900 px-2 py-0.5 rounded font-bold text-xs',
        verde:  'bg-green-100 text-green-900 px-2 py-0.5 rounded font-bold text-xs',
        morado: 'bg-purple-100 text-purple-900 px-2 py-0.5 rounded font-bold text-xs',
        indigo: 'bg-indigo-100 text-indigo-900 px-2 py-0.5 rounded font-bold text-xs'
    };

    // Estilos de la tarjeta de semana según su variante
    const VARIANTES = {
        normal: {
            tarjeta: 'bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:border-ucb-gold transition-all',
            cabecera: 'bg-ucb-navy text-white',
            numero: 'bg-ucb-gold text-ucb-navy',
            fecha: 'text-sm font-semibold',
            unidad: 'text-xs bg-white/10 px-2.5 py-1 rounded border border-white/20'
        },
        examen: {
            tarjeta: 'bg-white rounded-xl shadow-md border-2 border-amber-400 overflow-hidden transition-all',
            cabecera: 'bg-amber-400 text-ucb-navy',
            numero: 'bg-ucb-navy text-white',
            fecha: 'text-sm font-bold',
            unidad: 'text-xs bg-ucb-navy text-white px-2.5 py-1 rounded font-bold uppercase'
        },
        cierre: {
            tarjeta: 'bg-white rounded-xl shadow-md border-2 border-ucb-gold overflow-hidden transition-all',
            cabecera: 'bg-ucb-navy text-white',
            numero: 'bg-ucb-gold text-ucb-navy',
            fecha: 'text-sm font-bold',
            unidad: 'text-xs bg-ucb-gold text-ucb-navy px-2.5 py-1 rounded font-extrabold uppercase'
        }
    };

    // Los datos vienen de la base de datos: se escapan antes de insertarlos como HTML
    function esc(valor) {
        return String(valor ?? '').replace(/[&<>"']/g, (c) => ({
            '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;'
        }[c]));
    }

    function renderActividad(a, indice) {
        if (a.tipo === 'final') {
            return `
            <div class="bg-ucb-navy text-white p-4 rounded-xl border border-ucb-gold">
                <div class="flex items-center justify-between text-xs text-ucb-gold font-bold mb-1">
                    <span>${esc(a.etiqueta)}</span>
                    <span class="bg-ucb-gold text-ucb-navy px-2 py-0.5 rounded font-bold">${esc(a.badge)}</span>
                </div>
                <h4 class="font-bold text-white text-base">${esc(a.titulo)}</h4>
                <p class="text-xs text-slate-300 mt-1">${esc(a.descripcion)}</p>
                <div class="mt-2 text-xs text-slate-400 border-t border-white/10 pt-2 flex justify-between">
                    <span>${esc(a.nota_izq)}</span>
                    <span class="text-ucb-gold">${esc(a.nota_der)}</span>
                </div>
            </div>`;
        }

        if (a.tipo === 'evaluacion') {
            return `
            <div class="bg-amber-50 p-4 rounded-xl border border-amber-200">
                <div class="flex items-center justify-between text-xs text-amber-900 font-bold mb-1">
                    <span>${esc(a.etiqueta)}</span>
                    <span class="bg-amber-500 text-white px-2 py-0.5 rounded">${esc(a.badge)}</span>
                </div>
                <h4 class="font-bold text-ucb-navy text-base">${esc(a.titulo)}</h4>
                <p class="text-xs text-slate-700 mt-1">${esc(a.descripcion)}</p>
            </div>`;
        }

        const badge = a.badge
            ? `<span class="${BADGES[a.badge_color] || BADGES.gris}">${esc(a.badge)}</span>`
            : '';
        const capacidad = a.capacidad
            ? `<p class="text-xs text-slate-600 mt-1"><strong class="text-slate-700">Capacidad:</strong> ${esc(a.capacidad)}</p>`
            : '';
        const metodologia = a.metodologia
            ? `<p class="text-xs text-slate-500 mt-1"><strong class="text-slate-700">Metodología:</strong> ${esc(a.metodologia)}</p>`
            : '';
        return `
            <div class="${indice === 0 ? 'pt-1' : 'pt-3'}">
                <div class="flex items-center justify-between text-xs text-slate-500 mb-1">
                    <span class="font-bold text-ucb-navy">${esc(a.etiqueta)}</span>
                    ${badge}
                </div>
                <h4 class="font-semibold text-slate-800">${esc(a.titulo)}</h4>
                ${capacidad}
                ${metodologia}
            </div>`;
    }

    function renderSemana(s) {
        const v = VARIANTES[s.variante] || VARIANTES.normal;
        return `
        <div class="week-card ${esc(s.unidad)} ${v.tarjeta}">
            <div class="${v.cabecera} px-5 py-3 flex flex-wrap items-center justify-between gap-2">
                <div class="flex items-center space-x-3">
                    <span class="${v.numero} text-xs font-extrabold px-2.5 py-1 rounded">Semana ${esc(s.numero)}</span>
                    <span class="${v.fecha}">${esc(s.rango_fechas)}</span>
                </div>
                <span class="${v.unidad}">${esc(s.unidad_titulo)}</span>
            </div>
            <div class="p-5 space-y-4 text-sm divide-y divide-slate-100">
                ${s.actividades.map(renderActividad).join('')}
            </div>
        </div>`;
    }

    function marcarBoton(activo) {
        botones.forEach((btn) => {
            const esActivo = btn === activo;
            const esExamen = btn.dataset.unidad === 'exam';
            if (esExamen) {
                // El botón "Evaluaciones" conserva su color ámbar propio
                btn.setAttribute('aria-pressed', String(esActivo));
                btn.classList.toggle('ring-2', esActivo);
                btn.classList.toggle('ring-ucb-navy', esActivo);
                return;
            }
            CLASES_ACTIVO.forEach((c) => btn.classList.toggle(c, esActivo));
            CLASES_INACTIVO.forEach((c) => btn.classList.toggle(c, !esActivo));
            btn.setAttribute('aria-pressed', String(esActivo));
        });
    }

    function mostrarMensaje(html) {
        contenedor.innerHTML = html;
    }

    async function cargarCronograma(unidad, botonActivo) {
        marcarBoton(botonActivo);
        contenedor.setAttribute('aria-busy', 'true');
        estado.textContent = 'Consultando el servidor…';

        try {
            const respuesta = await fetch(`${API_URL}?unidad=${encodeURIComponent(unidad)}`, {
                headers: { Accept: 'application/json' }
            });
            const datos = await respuesta.json();

            if (!respuesta.ok || !datos.ok) {
                throw new Error(datos.error || `Error ${respuesta.status}`);
            }

            if (datos.total === 0) {
                mostrarMensaje('<p class="text-sm text-slate-500">No hay semanas para este filtro.</p>');
            } else {
                mostrarMensaje(datos.semanas.map(renderSemana).join(''));
            }
            estado.textContent = `Mostrando ${datos.total} semana(s) — datos consultados en MySQL vía PHP.`;
        } catch (error) {
            estado.textContent = '';
            mostrarMensaje(`
                <div class="bg-white border border-red-200 rounded-xl p-5 text-sm text-red-700" role="alert">
                    <p class="font-bold">No se pudo cargar el cronograma.</p>
                    <p class="mt-1 text-xs">${esc(error.message)}</p>
                    <button type="button" id="reintentar"
                            class="mt-3 px-3 py-1.5 rounded-lg text-xs font-bold bg-ucb-navy text-white">
                        Reintentar
                    </button>
                </div>`);
            document.getElementById('reintentar')
                .addEventListener('click', () => cargarCronograma(unidad, botonActivo));
        } finally {
            contenedor.setAttribute('aria-busy', 'false');
        }
    }

    botones.forEach((btn) => {
        btn.addEventListener('click', () => cargarCronograma(btn.dataset.unidad, btn));
    });

    // Carga inicial: todas las semanas
    const inicial = document.querySelector('.filter-btn[data-unidad="all"]');
    cargarCronograma('all', inicial);
})();
