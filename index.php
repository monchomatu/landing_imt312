<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMT-312 Manufactura Integrada | UCB San Pablo</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ucb: {
                            navy: '#292D52',
                            gold: '#EAB818',
                            dark: '#1b1e38',
                            light: '#f4f6fa',
                            goldlight: '#fdf5d8',
                            accent: '#3b4073'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
        }

        .bg-ucb-navy { background-color: #292D52; }
        .bg-ucb-gold { background-color: #EAB818; }
        .text-ucb-navy { color: #292D52; }
        .text-ucb-gold { color: #EAB818; }
        .border-ucb-gold { border-color: #EAB818; }

        .gold-gradient {
            background: linear-gradient(135deg, #EAB818 0%, #c4960c 100%);
        }

        .navy-gradient {
            background: linear-gradient(135deg, #292D52 0%, #171930 100%);
        }

        .custom-shadow {
            box-shadow: 0 10px 30px -5px rgba(41, 45, 82, 0.12);
        }

        /* Tab active state transition */
        .tab-btn.active {
            border-color: #EAB818;
            color: #292D52;
            background-color: #ffffff;
            font-weight: 700;
        }

        /* Smooth scroll margin for fixed header */
        section {
            scroll-margin-top: 5rem;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-ucb-gold selection:text-ucb-navy">

    <!-- Fixed Navigation Bar -->
    <header class="fixed top-0 left-0 w-full z-50 bg-ucb-navy/95 backdrop-blur-md text-white shadow-lg border-b-2 border-ucb-gold">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand / Institution Logo area -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-lg gold-gradient flex items-center justify-center font-bold text-ucb-navy text-xl shadow-md">
                        UCB
                    </div>
                    <div>
                        <span class="text-xs font-semibold uppercase tracking-wider text-ucb-gold block">Facultad de Ingeniería</span>
                        <h1 class="text-base font-bold leading-tight text-white">IMT-312 Manufactura Integrada</h1>
                    </div>
                </div>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center space-x-1 font-medium text-sm">
                    <a href="#portada" class="px-3 py-2 rounded-md hover:text-ucb-gold hover:bg-white/5 transition-colors">Portada</a>
                    <a href="#presentacion" class="px-3 py-2 rounded-md hover:text-ucb-gold hover:bg-white/5 transition-colors">Presentación</a>
                    <a href="#cronograma" class="px-3 py-2 rounded-md hover:text-ucb-gold hover:bg-white/5 transition-colors">Cronograma</a>
                    <a href="#recursos" class="px-3 py-2 rounded-md hover:text-ucb-gold hover:bg-white/5 transition-colors">Recursos</a>
                    <a href="#evaluacion" class="px-3 py-2 rounded-md hover:text-ucb-gold hover:bg-white/5 transition-colors">Evaluación</a>
                    <a href="#politica-ia" class="px-3 py-2 rounded-md hover:text-ucb-gold hover:bg-white/5 transition-colors">Política IA</a>
                    <a href="#contacto" class="px-3 py-2 rounded-md text-ucb-navy bg-ucb-gold hover:bg-amber-400 transition-colors font-semibold shadow-sm ml-2">Contacto</a>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="lg:hidden flex items-center">
                    <button id="mobile-menu-btn" type="button" class="p-2 rounded-md text-gray-300 hover:text-white hover:bg-white/10 focus:outline-none" aria-label="Abrir Menú">
                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-ucb-dark text-white border-b border-ucb-gold/30 px-4 pt-2 pb-6 space-y-2">
            <a href="#portada" class="mobile-link block px-3 py-2 rounded-md hover:bg-white/10 hover:text-ucb-gold">Portada</a>
            <a href="#presentacion" class="mobile-link block px-3 py-2 rounded-md hover:bg-white/10 hover:text-ucb-gold">Presentación</a>
            <a href="#cronograma" class="mobile-link block px-3 py-2 rounded-md hover:bg-white/10 hover:text-ucb-gold">Cronograma por Semanas</a>
            <a href="#recursos" class="mobile-link block px-3 py-2 rounded-md hover:bg-white/10 hover:text-ucb-gold">Recursos y Bibliografía</a>
            <a href="#evaluacion" class="mobile-link block px-3 py-2 rounded-md hover:bg-white/10 hover:text-ucb-gold">Sistema de Evaluación</a>
            <a href="#politica-ia" class="mobile-link block px-3 py-2 rounded-md hover:bg-white/10 hover:text-ucb-gold">Política USO de IA</a>
            <a href="#contacto" class="mobile-link block px-3 py-2 rounded-md bg-ucb-gold text-ucb-navy font-bold text-center mt-3">Contacto e Información Docente</a>
        </div>
    </header>

    <main class="pt-20">

        <!-- PORTADA / HERO SECTION -->
        <section id="portada" class="relative navy-gradient text-white py-16 lg:py-24 overflow-hidden border-b-4 border-ucb-gold">
            <div class="absolute inset-0 opacity-10 pointer-events-none bg-[radial-gradient(#EAB818_1px,transparent_1px)] [background-size:16px_16px]"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <div class="lg:col-span-8 space-y-6">
                        <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-white/10 border border-ucb-gold/40 text-ucb-gold text-xs font-semibold uppercase tracking-wider">
                            <span>Universidad Católica Boliviana "San Pablo"</span>
                            <span>•</span>
                            <span>Sede La Paz</span>
                        </div>
                        
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-none">
                            Manufactura Integrada <span class="text-ucb-gold block mt-2 text-2xl sm:text-3xl lg:text-4xl">Código: IMT-312</span>
                        </h1>
                        
                        <p class="text-slate-300 text-base sm:text-lg max-w-2xl leading-relaxed">
                            Formación integral en automatización industrial, programación CNC (torneado y fresado), robótica y sistemas integrados CIM/FMS para el contexto productivo de Bolivia.
                        </p>

                        <!-- Quick Badges Grid -->
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-4">
                            <div class="p-3 rounded-lg bg-white/5 border border-white/10 text-center">
                                <span class="text-xs text-slate-400 block uppercase font-medium">Semestre</span>
                                <span class="text-base font-bold text-ucb-gold">7º Semestre</span>
                            </div>
                            <div class="p-3 rounded-lg bg-white/5 border border-white/10 text-center">
                                <span class="text-xs text-slate-400 block uppercase font-medium">Modalidad</span>
                                <span class="text-base font-bold text-white">Presencial</span>
                            </div>
                            <div class="p-3 rounded-lg bg-white/5 border border-white/10 text-center">
                                <span class="text-xs text-slate-400 block uppercase font-medium">Carga / Créditos</span>
                                <span class="text-base font-bold text-white">80 Horas / 5 Cr.</span>
                            </div>
                            <div class="p-3 rounded-lg bg-white/5 border border-white/10 text-center">
                                <span class="text-xs text-slate-400 block uppercase font-medium">Periodo</span>
                                <span class="text-base font-bold text-ucb-gold">Gestión I/2026</span>
                            </div>
                        </div>

                        <div class="pt-2 flex flex-wrap gap-4">
                            <a href="#cronograma" class="px-6 py-3 rounded-lg bg-ucb-gold text-ucb-navy font-bold hover:bg-amber-400 transition-all shadow-lg flex items-center space-x-2">
                                <span>Ver Cronograma por Semanas</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </a>
                            <a href="#presentacion" class="px-6 py-3 rounded-lg bg-white/10 text-white font-medium hover:bg-white/20 transition-all border border-white/20">
                                Competencias y Programa
                            </a>
                        </div>
                    </div>

                    <!-- General Info Card -->
                    <div class="lg:col-span-4 bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20 shadow-xl text-white">
                        <h3 class="text-lg font-bold text-ucb-gold mb-4 border-b border-white/10 pb-2 flex items-center justify-between">
                            <span>Información General</span>
                            <span class="text-xs bg-ucb-gold text-ucb-navy px-2 py-0.5 rounded font-extrabold">Paralelo 1</span>
                        </h3>
                        <dl class="space-y-3 text-sm">
                            <div>
                                <dt class="text-slate-400 text-xs">Carrera</dt>
                                <dd class="font-semibold text-white">Ingeniería Mecatrónica</dd>
                            </div>
                            <div>
                                <dt class="text-slate-400 text-xs">Tipo & Obligatoriedad</dt>
                                <dd class="font-medium text-slate-200">Específica — Obligatoria</dd>
                            </div>
                            <div>
                                <dt class="text-slate-400 text-xs">Prerrequisito</dt>
                                <dd class="font-semibold text-ucb-gold">IMT-212 Diseño de Máquinas</dd>
                            </div>
                            <div>
                                <dt class="text-slate-400 text-xs">Horario de Clases</dt>
                                <dd class="font-medium text-white">Lunes y Miércoles, 07:30 – 09:00</dd>
                            </div>
                            <div>
                                <dt class="text-slate-400 text-xs">Fechas de Gestión</dt>
                                <dd class="font-medium text-white">09/02/2026 al 23/06/2026 (19 semanas)</dd>
                            </div>
                            <div>
                                <dt class="text-slate-400 text-xs">Docente Titular</dt>
                                <dd class="font-semibold text-white">Ramón Herrera Peralta</dd>
                                <dd class="text-xs text-slate-300">Lic. en Ingeniería Mecatrónica</dd>
                            </div>
                        </dl>
                    </div>

                </div>
            </div>
        </section>

        <!-- PRESENTACIÓN SECTION -->
        <section id="presentacion" class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="text-ucb-gold font-bold uppercase tracking-wider text-xs px-3 py-1 rounded-full bg-ucb-navy inline-block mb-3">Introducción & Perfil</span>
                <h2 class="text-3xl font-extrabold text-ucb-navy">Presentación del Programa Analítico</h2>
                <div class="w-20 h-1 bg-ucb-gold mx-auto mt-3 rounded-full"></div>
            </div>

            <!-- Context & Introduction Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <div class="bg-white p-8 rounded-2xl shadow-md border-t-4 border-ucb-navy hover:shadow-lg transition-shadow">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="p-3 bg-slate-100 rounded-xl text-ucb-navy font-bold text-xl">01</div>
                        <h3 class="text-xl font-bold text-ucb-navy">Resumen e Contexto Profesional</h3>
                    </div>
                    <p class="text-slate-600 leading-relaxed text-sm mb-4">
                        La manufactura es una de las industrias de mayor relevancia estratégica en el mundo, pues sostiene el desarrollo de prácticamente todos los demás sectores productivos y tecnológicos. En su relación con la transformación de metales, esta industria enfrenta hoy un proceso acelerado de automatización e integración de tecnologías —sistemas CAD/CAM, control numérico computarizado, robótica industrial y redes de comunicación industrial.
                    </p>
                    <p class="text-slate-600 leading-relaxed text-sm">
                        Bolivia atraviesa actualmente un punto de transición tecnológica que demanda profesionales capaces de implementar, programar y operar de manera óptima sistemas de manufactura complejos, así como de integrar tecnologías de automatización en entornos industriales reales. Sin profesionales formados en estas competencias, la industria nacional no puede adoptar de forma autónoma y eficiente los sistemas CIM/FMS.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-md border-t-4 border-ucb-gold hover:shadow-lg transition-shadow">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="p-3 bg-amber-50 rounded-xl text-ucb-gold font-bold text-xl">02</div>
                        <h3 class="text-xl font-bold text-ucb-navy">Modelo Educativo Institucional</h3>
                    </div>
                    <p class="text-slate-600 leading-relaxed text-sm mb-4">
                        Esta asignatura se enmarca en el Modelo Educativo de la Universidad Católica Boliviana "San Pablo", de carácter humanista-cristiano y basado en la formación por competencias. El proceso de enseñanza-aprendizaje se organiza en torno al desarrollo de un desempeño profesional integral.
                    </p>
                    <p class="text-slate-600 leading-relaxed text-sm">
                        Incorpora competencias genéricas institucionales: aplicación de conocimientos en situaciones reales, postura crítica y reflexiva, creación e innovación frente a problemas del área de formación, y comunicación en un segundo idioma; orientando la formación de un profesional con responsabilidad social y compromiso ético frente al desarrollo tecnológico del país.
                    </p>
                </div>
            </div>

            <!-- COMPETENCIA GENERAL -->
            <div class="bg-ucb-navy text-white p-8 rounded-2xl shadow-xl mb-12 relative overflow-hidden">
                <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-ucb-gold opacity-10 rounded-full"></div>
                <div class="relative z-10">
                    <span class="text-xs uppercase font-extrabold text-ucb-gold tracking-widest block mb-2">Competencia General de la Asignatura</span>
                    <blockquote class="text-lg sm:text-xl font-semibold italic leading-relaxed text-slate-100">
                        "Diseña, aplica y gestiona sistemas de manufactura integrados por computadora, utilizando tecnologías emergentes y sistemas de comunicación industrial, para la automatización de procesos de fabricación."
                    </blockquote>
                </div>
            </div>

            <!-- TABS FOR SPECIFIC COMPETENCIES & INDICATORS -->
            <div class="bg-white rounded-2xl shadow-md border border-slate-200 overflow-hidden mb-12">
                <div class="border-b border-slate-200 bg-slate-50 p-4">
                    <h3 class="text-lg font-bold text-ucb-navy mb-3">Unidades de Aprendizaje y Competencias Específicas</h3>
                    
                    <div class="flex flex-wrap gap-2" id="comp-tabs-nav">
                        <button onclick="switchCompTab(1)" id="tab-btn-1" class="tab-btn active px-4 py-2 text-sm rounded-lg border border-slate-300 font-medium transition-all">
                            Unidad 1: Introducción
                        </button>
                        <button onclick="switchCompTab(2)" id="tab-btn-2" class="tab-btn px-4 py-2 text-sm rounded-lg border border-slate-300 font-medium transition-all text-slate-600 hover:text-ucb-navy">
                            Unidad 2: Procesos Fabricación
                        </button>
                        <button onclick="switchCompTab(3)" id="tab-btn-3" class="tab-btn px-4 py-2 text-sm rounded-lg border border-slate-300 font-medium transition-all text-slate-600 hover:text-ucb-navy">
                            Unidad 3: Programación CNC
                        </button>
                        <button onclick="switchCompTab(4)" id="tab-btn-4" class="tab-btn px-4 py-2 text-sm rounded-lg border border-slate-300 font-medium transition-all text-slate-600 hover:text-ucb-navy">
                            Unidad 4: Integración Tecnología
                        </button>
                    </div>
                </div>

                <div class="p-6">
                    <!-- Tab Content 1 -->
                    <div id="tab-content-1" class="tab-content">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-lg font-bold text-ucb-navy">Elemento de Competencia 1</h4>
                            <span class="text-xs font-semibold px-2.5 py-1 bg-amber-100 text-amber-800 rounded-full">Unidad 1</span>
                        </div>
                        <p class="text-sm font-medium text-slate-700 bg-slate-50 p-4 rounded-xl border-l-4 border-ucb-gold mb-6">
                            Identifica las bases de los procesos de manufactura moderna, con un enfoque de comparación respecto al entorno tecnológico actual del país.
                        </p>
                        <h5 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-3">Indicadores de logro de desempeño</h5>
                        <ul class="space-y-2 text-sm text-slate-600">
                            <li class="flex items-start space-x-2">
                                <span class="text-ucb-gold font-bold">a.</span>
                                <span>La importancia y evolución histórica de la manufactura es explicada relacionándola con el desarrollo tecnológico e industrial del país.</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <span class="text-ucb-gold font-bold">b.</span>
                                <span>El estado del arte de la manufactura y los niveles de automatización son clasificados de acuerdo con sus características técnicas.</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <span class="text-ucb-gold font-bold">c.</span>
                                <span>Las normas de seguridad industrial son aplicadas de manera rigurosa y sin excepción en el trabajo de taller.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Tab Content 2 -->
                    <div id="tab-content-2" class="tab-content hidden">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-lg font-bold text-ucb-navy">Elemento de Competencia 2</h4>
                            <span class="text-xs font-semibold px-2.5 py-1 bg-amber-100 text-amber-800 rounded-full">Unidad 2</span>
                        </div>
                        <p class="text-sm font-medium text-slate-700 bg-slate-50 p-4 rounded-xl border-l-4 border-ucb-gold mb-6">
                            Selecciona los procedimientos, máquinas y herramientas para la manufactura de piezas mecánicas, considerando criterios de productividad y calidad.
                        </p>
                        <h5 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-3">Indicadores de logro de desempeño</h5>
                        <ul class="space-y-2 text-sm text-slate-600">
                            <li class="flex items-start space-x-2">
                                <span class="text-ucb-gold font-bold">a.</span>
                                <span>Las máquinas, procesos y herramientas de manufactura son seleccionados de acuerdo con las características de la pieza a fabricar.</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <span class="text-ucb-gold font-bold">b.</span>
                                <span>Las operaciones de torneado y fresado son ordenadas y ejecutadas según parámetros técnicos de fabricación establecidos.</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <span class="text-ucb-gold font-bold">c.</span>
                                <span>Las piezas mecánicas fabricadas son calificadas utilizando instrumentos y conceptos de metrología con precisión y consistencia.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Tab Content 3 -->
                    <div id="tab-content-3" class="tab-content hidden">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-lg font-bold text-ucb-navy">Elemento de Competencia 3</h4>
                            <span class="text-xs font-semibold px-2.5 py-1 bg-amber-100 text-amber-800 rounded-full">Unidad 3</span>
                        </div>
                        <p class="text-sm font-medium text-slate-700 bg-slate-50 p-4 rounded-xl border-l-4 border-ucb-gold mb-6">
                            Programa máquinas de control numérico computarizado (CNC), para la fabricación de piezas mecánicas de torno y fresado de gran calidad.
                        </p>
                        <h5 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-3">Indicadores de logro de desempeño</h5>
                        <ul class="space-y-2 text-sm text-slate-600">
                            <li class="flex items-start space-x-2">
                                <span class="text-ucb-gold font-bold">a.</span>
                                <span>Los programas de control numérico son elaborados de forma manual y conversacional, respetando la sintaxis y estructura requeridas por el sistema.</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <span class="text-ucb-gold font-bold">b.</span>
                                <span>Los parámetros de corte (velocidad, avance, profundidad) son calculados adecuadamente según el material y la operación de mecanizado.</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <span class="text-ucb-gold font-bold">c.</span>
                                <span>Las piezas mecánicas de torno y de fresado son programadas mediante software CAD/CAM, verificando su simulación antes de la fabricación real.</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <span class="text-ucb-gold font-bold">d.</span>
                                <span>Las piezas fabricadas cumplen con las tolerancias dimensionales y el acabado superficial especificados en el plano.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Tab Content 4 -->
                    <div id="tab-content-4" class="tab-content hidden">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-lg font-bold text-ucb-navy">Elemento de Competencia 4</h4>
                            <span class="text-xs font-semibold px-2.5 py-1 bg-amber-100 text-amber-800 rounded-full">Unidad 4</span>
                        </div>
                        <p class="text-sm font-medium text-slate-700 bg-slate-50 p-4 rounded-xl border-l-4 border-ucb-gold mb-6">
                            Identifica los componentes de los sistemas modernos de manufactura integrada (CIM, FMS y robótica industrial), aplicando protocolos de comunicación industrial y criterios de seguridad en robótica.
                        </p>
                        <h5 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-3">Indicadores de logro de desempeño</h5>
                        <ul class="space-y-2 text-sm text-slate-600">
                            <li class="flex items-start space-x-2">
                                <span class="text-ucb-gold font-bold">a.</span>
                                <span>Los componentes y procesos necesarios para la integración de un sistema de manufactura (CIM/FMS) son identificados con precisión.</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <span class="text-ucb-gold font-bold">b.</span>
                                <span>Los protocolos de comunicación industrial son reconocidos y relacionados con el tipo de sistema de manufactura integrado correspondiente.</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <span class="text-ucb-gold font-bold">c.</span>
                                <span>Las condiciones de seguridad en la operación de robots industriales son aplicadas en todo momento durante las prácticas.</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <span class="text-ucb-gold font-bold">d.</span>
                                <span>El proyecto de asignatura demuestra la integración funcional de los sistemas y tecnologías desarrollados durante el curso, con relevancia para el ámbito industrial boliviano.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- METODOLOGÍA Y SABERES -->
            <div class="bg-slate-100 rounded-2xl p-8 border border-slate-200">
                <h3 class="text-xl font-bold text-ucb-navy mb-6">Estrategias Metodológicas y Dimensiones del Saber</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-200">
                        <div class="text-xs font-bold text-ucb-navy bg-slate-100 px-3 py-1 rounded-md inline-block mb-3 uppercase">Saber (Conceptual)</div>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Exposición dialogada con apoyo de diapositivas y recursos audiovisuales; preguntas mediadoras; análisis de casos de la industria de manufactura boliviana; foros de discusión.
                        </p>
                    </div>
                    <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-200">
                        <div class="text-xs font-bold text-ucb-navy bg-amber-50 text-amber-900 px-3 py-1 rounded-md inline-block mb-3 uppercase">Saber Hacer (Procedimental)</div>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Demostración por parte del docente; práctica guiada en taller y laboratorio de cómputo; práctica autónoma progresiva; resolución de problemas de cálculo de parámetros de mecanizado.
                        </p>
                    </div>
                    <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-200">
                        <div class="text-xs font-bold text-ucb-navy bg-blue-50 text-blue-900 px-3 py-1 rounded-md inline-block mb-3 uppercase">Saber Ser (Actitudinal)</div>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Inducción y aplicación estricta de normas de seguridad industrial; trabajo colaborativo en equipos; estudio y resolución de casos que exigen criterio, orden y responsabilidad.
                        </p>
                    </div>
                </div>

                <!-- Formas de Organización -->
                <div class="mt-6 pt-6 border-t border-slate-200">
                    <h4 class="text-sm font-bold text-ucb-navy mb-3">Formas de Organización del Trabajo Académico:</h4>
                    <div class="flex flex-wrap gap-2 text-xs">
                        <span class="px-3 py-1.5 rounded-lg bg-white border border-slate-200 font-medium">Clases teóricas dialogadas</span>
                        <span class="px-3 py-1.5 rounded-lg bg-white border border-slate-200 font-medium">Prácticas de taller CNC (EMCO CT105 / CM105)</span>
                        <span class="px-3 py-1.5 rounded-lg bg-white border border-slate-200 font-medium">Lab de Cómputo (EMCO WinNC, BobCAD-CAM, Walter Calculator)</span>
                        <span class="px-3 py-1.5 rounded-lg bg-white border border-slate-200 font-medium">Trabajo en Grupos</span>
                        <span class="px-3 py-1.5 rounded-lg bg-white border border-slate-200 font-medium">Proyecto Integrador de Asignatura</span>
                        <span class="px-3 py-1.5 rounded-lg bg-white border border-slate-200 font-medium">Tutorías Acompañadas</span>
                    </div>
                </div>
            </div>

        </section>

        <!-- CRONOGRAMA SECTION -->
        <section id="cronograma" class="py-16 bg-slate-100 border-t border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-8">
                    <div>
                        <span class="text-ucb-gold font-bold uppercase tracking-wider text-xs px-3 py-1 rounded-full bg-ucb-navy inline-block mb-2">Régimen Semestral Presencial</span>
                        <h2 class="text-3xl font-extrabold text-ucb-navy">Cronograma de Actividades (19 Semanas)</h2>
                        <p class="text-slate-500 text-sm mt-1">Gestión I/2026: Del 09/02/2026 al 23/06/2026</p>
                    </div>

                    <!-- Filter buttons -->
                    <div class="mt-4 md:mt-0 flex flex-wrap gap-2" id="unit-filters">
                        <button type="button" data-unidad="all" class="filter-btn active px-3 py-1.5 rounded-lg text-xs font-bold bg-ucb-navy text-white transition-all">
                            Todas
                        </button>
                        <button type="button" data-unidad="u1" class="filter-btn px-3 py-1.5 rounded-lg text-xs font-bold bg-white text-slate-700 hover:bg-slate-200 transition-all border border-slate-300">
                            Unidad 1
                        </button>
                        <button type="button" data-unidad="u2" class="filter-btn px-3 py-1.5 rounded-lg text-xs font-bold bg-white text-slate-700 hover:bg-slate-200 transition-all border border-slate-300">
                            Unidad 2
                        </button>
                        <button type="button" data-unidad="u3" class="filter-btn px-3 py-1.5 rounded-lg text-xs font-bold bg-white text-slate-700 hover:bg-slate-200 transition-all border border-slate-300">
                            Unidad 3
                        </button>
                        <button type="button" data-unidad="u4" class="filter-btn px-3 py-1.5 rounded-lg text-xs font-bold bg-white text-slate-700 hover:bg-slate-200 transition-all border border-slate-300">
                            Unidad 4
                        </button>
                        <button type="button" data-unidad="exam" class="filter-btn px-3 py-1.5 rounded-lg text-xs font-bold bg-amber-100 text-amber-900 border border-amber-300 hover:bg-amber-200 transition-all">
                            Evaluaciones
                        </button>
                    </div>
                </div>

                <!-- Schedule Grid Container -->
                <p id="cronograma-estado" class="text-xs text-slate-500 mb-3" role="status" aria-live="polite"></p>
                <div class="space-y-4" id="weeks-container" aria-busy="true">
                    <p class="text-sm text-slate-500">Cargando cronograma desde el servidor…</p>
                </div>
            </div>
        </section>

        <!-- RECURSOS Y BIBLIOGRAFÍA SECTION -->
        <section id="recursos" class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="text-ucb-gold font-bold uppercase tracking-wider text-xs px-3 py-1 rounded-full bg-ucb-navy inline-block mb-3">Materiales & Referencias</span>
                <h2 class="text-3xl font-extrabold text-ucb-navy">Recursos Didácticos y Bibliografía</h2>
                <div class="w-20 h-1 bg-ucb-gold mx-auto mt-3 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                
                <!-- Bibliografía Card -->
                <div class="lg:col-span-7 bg-white p-6 sm:p-8 rounded-2xl shadow-md border border-slate-200">
                    <h3 class="text-xl font-bold text-ucb-navy mb-6 flex items-center space-x-2">
                        <svg class="w-6 h-6 text-ucb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        <span>Referencias Bibliográficas</span>
                    </h3>

                    <!-- Libro base resaltado -->
                    <div class="bg-amber-50 p-4 rounded-xl border-l-4 border-ucb-gold mb-6">
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-900 block mb-1">Libro Base de la Asignatura</span>
                        <p class="text-sm font-semibold text-ucb-navy">
                            Kalpakjian, S., & Schmid, S. R. (2002). <em>Manufactura, ingeniería y tecnología</em> (4ª ed.). Pearson Educación.
                        </p>
                    </div>

                    <ul class="space-y-4 text-sm divide-y divide-slate-100">
                        <li class="pt-2">
                            <span class="font-semibold text-slate-800">Askeland, D. R., & Phulé, P. P. (2004).</span>
                            <span class="text-slate-600"> <em>Ciencia e ingeniería de los materiales.</em> Thomson.</span>
                        </li>
                        <li class="pt-3">
                            <span class="font-semibold text-slate-800">Ford, H. (1994).</span>
                            <span class="text-slate-600"> <em>Teoría del taller.</em> Gustavo Gili.</span>
                        </li>
                        <li class="pt-3">
                            <span class="font-semibold text-slate-800">Groover, M. P. (2010).</span>
                            <span class="text-slate-600"> <em>Fundamentals of Modern Manufacturing: Materials, Processes, and Systems.</em> John Wiley & Sons.</span>
                        </li>
                        <li class="pt-3">
                            <span class="font-semibold text-slate-800">Guerrero, V., Yuste, R. L., & Martínez, L. (2009).</span>
                            <span class="text-slate-600"> <em>Comunicaciones industriales.</em> Marcombo.</span>
                        </li>
                        <li class="pt-3">
                            <span class="font-semibold text-slate-800">IBNORCA. (2016).</span>
                            <span class="text-slate-600"> <em>Catálogo de normas bolivianas 2016.</em> Dirección Nacional de Normalización.</span>
                        </li>
                    </ul>
                </div>

                <!-- Enlaces de Internet -->
                <div class="lg:col-span-5 bg-white p-6 sm:p-8 rounded-2xl shadow-md border border-slate-200 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-bold text-ucb-navy mb-6 flex items-center space-x-2">
                            <svg class="w-6 h-6 text-ucb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                            <span>Enlaces de Internet Oficiales</span>
                        </h3>

                        <div class="space-y-4">
                            <!-- Link 1 -->
                            <a href="https://www.emco-world.com/en/products/industrial-training/softwarecontrols.html" target="_blank" rel="noopener noreferrer" class="block p-4 rounded-xl border border-slate-200 hover:border-ucb-gold hover:shadow-md transition-all bg-slate-50 group">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="font-bold text-xs text-ucb-navy group-hover:text-ucb-gold">EMCO – Software y controles WinNC</span>
                                    <svg class="w-4 h-4 text-slate-400 group-hover:text-ucb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                </div>
                                <p class="text-xs text-slate-600">Documentación y actualización del software WinNC usado en el Centro de torneado CT105 y Centro de mecanizado CM105.</p>
                            </a>

                            <!-- Link 2 -->
                            <a href="https://bobcad.com/" target="_blank" rel="noopener noreferrer" class="block p-4 rounded-xl border border-slate-200 hover:border-ucb-gold hover:shadow-md transition-all bg-slate-50 group">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="font-bold text-xs text-ucb-navy group-hover:text-ucb-gold">BobCAD-CAM</span>
                                    <svg class="w-4 h-4 text-slate-400 group-hover:text-ucb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                </div>
                                <p class="text-xs text-slate-600">Manuales, tutoriales y actualizaciones del software CAD/CAM utilizado en la Unidad 3.</p>
                            </a>

                            <!-- Link 3 -->
                            <a href="https://www.ibnorca.org/" target="_blank" rel="noopener noreferrer" class="block p-4 rounded-xl border border-slate-200 hover:border-ucb-gold hover:shadow-md transition-all bg-slate-50 group">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="font-bold text-xs text-ucb-navy group-hover:text-ucb-gold">IBNORCA</span>
                                    <svg class="w-4 h-4 text-slate-400 group-hover:text-ucb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                </div>
                                <p class="text-xs text-slate-600">Consulta de normas bolivianas de seguridad industrial y calidad aplicables en taller.</p>
                            </a>

                            <!-- Link 4 -->
                            <a href="https://www.ucb.edu.bo/" target="_blank" rel="noopener noreferrer" class="block p-4 rounded-xl border border-slate-200 hover:border-ucb-gold hover:shadow-md transition-all bg-slate-50 group">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="font-bold text-xs text-ucb-navy group-hover:text-ucb-gold">UCB San Pablo — Mecatrónica</span>
                                    <svg class="w-4 h-4 text-slate-400 group-hover:text-ucb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                </div>
                                <p class="text-xs text-slate-600">Información institucional, reglamento académico y calendario oficial de la Carrera.</p>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- EVALUACIÓN SECTION -->
        <section id="evaluacion" class="py-16 bg-slate-100 border-t border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-ucb-gold font-bold uppercase tracking-wider text-xs px-3 py-1 rounded-full bg-ucb-navy inline-block mb-3">Estructura de Calificación</span>
                    <h2 class="text-3xl font-extrabold text-ucb-navy">Sistema de Evaluación</h2>
                    <div class="w-20 h-1 bg-ucb-gold mx-auto mt-3 rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    
                    <!-- Table breakdown -->
                    <div class="lg:col-span-8 bg-white rounded-2xl shadow-md border border-slate-200 overflow-hidden">
                        <div class="p-6 bg-ucb-navy text-white">
                            <h3 class="text-lg font-bold">Desglose de Ponderaciones y Actividades</h3>
                            <p class="text-xs text-slate-300">Evaluación continua y sumativa de acuerdo al programa sílabo oficial</p>
                        </div>
                        
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse text-sm">
                                <thead>
                                    <tr class="bg-slate-50 text-slate-500 font-bold border-b border-slate-200 text-xs uppercase">
                                        <th class="p-4">N°</th>
                                        <th class="p-4">Fecha / Periodo</th>
                                        <th class="p-4">Estrategia - Descripción</th>
                                        <th class="p-4 text-right">Ponderado</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100">
                                    <tr class="hover:bg-slate-50/80 transition-colors">
                                        <td class="p-4 font-bold text-ucb-navy">1</td>
                                        <td class="p-4 font-semibold text-slate-700">09/03/2026</td>
                                        <td class="p-4">
                                            <span class="font-bold text-slate-800 block">1er Examen Parcial</span>
                                            <span class="text-xs text-slate-500">Evaluación teórico-práctica sobre Unidades 1 y 2 (bases, automatización, procesos, torneado, fresado, metrología).</span>
                                        </td>
                                        <td class="p-4 text-right font-bold text-ucb-navy text-base">25%</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/80 transition-colors">
                                        <td class="p-4 font-bold text-ucb-navy">2</td>
                                        <td class="p-4 font-semibold text-slate-700">23/03 al 20/05</td>
                                        <td class="p-4">
                                            <span class="font-bold text-slate-800 block">Prácticas y ejercicios CNC (Continua U3)</span>
                                            <span class="text-xs text-slate-500">Evaluados progresivamente en taller CNC y laboratorio de cómputo (Unidad 3).</span>
                                        </td>
                                        <td class="p-4 text-right font-bold text-ucb-navy text-base">20%</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/80 transition-colors">
                                        <td class="p-4 font-bold text-ucb-navy">3</td>
                                        <td class="p-4 font-semibold text-slate-700">08/05/2026</td>
                                        <td class="p-4">
                                            <span class="font-bold text-slate-800 block">2do Examen Parcial</span>
                                            <span class="text-xs text-slate-500">Evaluación práctica de programación y mecanizado en torno y centro CNC (Unidad 3).</span>
                                        </td>
                                        <td class="p-4 text-right font-bold text-ucb-navy text-base">25%</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/80 transition-colors">
                                        <td class="p-4 font-bold text-ucb-navy">4</td>
                                        <td class="p-4 font-semibold text-slate-700">17/06/2026</td>
                                        <td class="p-4">
                                            <span class="font-bold text-slate-800 block">Presentación Proyecto de Asignatura</span>
                                            <span class="text-xs text-slate-500">Diseño, programación y automatización de un sistema de manufactura integrado (Unidad 4).</span>
                                        </td>
                                        <td class="p-4 text-right font-bold text-ucb-navy text-base">20%</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/80 transition-colors">
                                        <td class="p-4 font-bold text-ucb-navy">5</td>
                                        <td class="p-4 font-semibold text-slate-700">25/05 al 15/06</td>
                                        <td class="p-4">
                                            <span class="font-bold text-slate-800 block">Participación y ejercicios (Continua U4)</span>
                                            <span class="text-xs text-slate-500">Ejercicios prácticos sobre robótica industrial, sistemas CIM/FMS y comunicaciones (Unidad 4).</span>
                                        </td>
                                        <td class="p-4 text-right font-bold text-ucb-navy text-base">5%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Visual Breakdown Summary Card -->
                    <div class="lg:col-span-4 bg-white p-6 rounded-2xl shadow-md border border-slate-200">
                        <h4 class="text-base font-bold text-ucb-navy mb-4 border-b border-slate-200 pb-2">Distribución Visual de Ponderación</h4>
                        
                        <div class="space-y-4 text-xs">
                            <div>
                                <div class="flex justify-between font-semibold mb-1">
                                    <span>Exámenes Parciales (1º + 2º)</span>
                                    <span class="text-ucb-navy font-bold">50%</span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-2.5 overflow-hidden">
                                    <div class="bg-ucb-navy h-2.5 rounded-full" style="width: 50%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between font-semibold mb-1">
                                    <span>Prácticas Continuas CNC (U3)</span>
                                    <span class="text-ucb-gold font-bold">20%</span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-2.5 overflow-hidden">
                                    <div class="bg-ucb-gold h-2.5 rounded-full" style="width: 20%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between font-semibold mb-1">
                                    <span>Proyecto Integrador (U4)</span>
                                    <span class="text-amber-600 font-bold">20%</span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-2.5 overflow-hidden">
                                    <div class="bg-amber-500 h-2.5 rounded-full" style="width: 20%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between font-semibold mb-1">
                                    <span>Participación & Ejercicios U4</span>
                                    <span class="text-blue-600 font-bold">5%</span>
                                </div>
                                <div class="w-full bg-slate-200 rounded-full h-2.5 overflow-hidden">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 5%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 pt-4 border-t border-slate-200">
                            <p class="text-xs text-slate-500 italic">
                                * Nota: El examen final evalúa la competencia completa de la asignatura e integra los resultados sumativos de los periodos evaluativos.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- POLITICA DE USO DE IA SECTION -->
        <section id="politica-ia" class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-3xl shadow-xl border border-slate-200 overflow-hidden">
                
                <div class="navy-gradient text-white p-8 sm:p-10 border-b-4 border-ucb-gold">
                    <div class="flex items-center space-x-3 mb-2">
                        <span class="bg-ucb-gold text-ucb-navy text-xs font-extrabold px-3 py-1 rounded-full uppercase">Marco Institucional & Ético</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-white">Política de Uso de Inteligencia Artificial (IA)</h2>
                    <p class="text-slate-300 text-sm mt-2 max-w-3xl">
                        Orientaciones sobre la integración crítica, ética e instrumental de la Inteligencia Artificial en el proceso de enseñanza-aprendizaje de IMT-312 Manufactura Integrada.
                    </p>
                </div>

                <div class="p-8 sm:p-10 space-y-8">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- AI Principle 1 -->
                        <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200">
                            <div class="flex items-center space-x-3 mb-3">
                                <div class="w-8 h-8 rounded-lg bg-ucb-navy text-ucb-gold flex items-center justify-center font-bold">1</div>
                                <h3 class="font-bold text-ucb-navy text-base">Herramienta Complementaria y Asistiva</h3>
                            </div>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                El uso de modelos de IA generativa e inteligencia computacional está permitido como soporte conceptual, revisión sintáctica de código G/M o consulta de documentación en simulación. No reemplaza el razonamiento crítico del estudiante ni la verificación física indispensable en el mecanizado real.
                            </p>
                        </div>

                        <!-- AI Principle 2 -->
                        <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200">
                            <div class="flex items-center space-x-3 mb-3">
                                <div class="w-8 h-8 rounded-lg bg-ucb-navy text-ucb-gold flex items-center justify-center font-bold">2</div>
                                <h3 class="font-bold text-ucb-navy text-base">Responsabilidad Técnica y Seguridad Industrial</h3>
                            </div>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                En las prácticas con el Centro de Torneado EMCO CT105 y Centro de Mecanizado EMCO CM105, la validación de parámetros de corte (Velocidad, Avance, Cero Pieza) y trayectorias generadas por software o asistidas por IA es responsabilidad exclusiva del alumno, debiendo acatar estrictamente las normas IBNORCA.
                            </p>
                        </div>

                        <!-- AI Principle 3 -->
                        <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200">
                            <div class="flex items-center space-x-3 mb-3">
                                <div class="w-8 h-8 rounded-lg bg-ucb-navy text-ucb-gold flex items-center justify-center font-bold">3</div>
                                <h3 class="font-bold text-ucb-navy text-base">Transparencia y Declaración de Autoría</h3>
                            </div>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                En la presentación del Proyecto de Asignatura (Unidad 4) y entregables escritos, se debe transparentar el uso de herramientas IA en la sección metodológica, garantizando la autoría original de los diseños CAD/CAM y las arquitecturas de automatización desarrolladas.
                            </p>
                        </div>

                        <!-- AI Principle 4 -->
                        <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200">
                            <div class="flex items-center space-x-3 mb-3">
                                <div class="w-8 h-8 rounded-lg bg-ucb-navy text-ucb-gold flex items-center justify-center font-bold">4</div>
                                <h3 class="font-bold text-ucb-navy text-base">Postura Crítica frente a la Fábrica del Futuro</h3>
                            </div>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                En coherencia con la Unidad 4.7 (Inteligencia artificial en manufactura), el estudiante debe analizar reflexivamente cómo la adopción de IA impacta en la competitividad de la industria boliviana de metales y responder con principios de responsabilidad social humanista-cristiana UCB.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- CONTACTO SECTION -->
        <section id="contacto" class="py-16 bg-ucb-navy text-white relative border-t-4 border-ucb-gold">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <div class="lg:col-span-6 space-y-6">
                        <span class="text-ucb-gold font-bold uppercase tracking-wider text-xs px-3 py-1 rounded-full bg-white/10 inline-block">Atención & Consultas</span>
                        <h2 class="text-3xl font-extrabold text-white">Información del Docente y Contacto</h2>
                        <p class="text-slate-300 text-sm leading-relaxed">
                            Para consultas académicas, tutorías sobre el proyecto integrador de asignatura o seguimiento de prácticas en laboratorio de mecatrónica:
                        </p>

                        <div class="space-y-4 pt-2">
                            
                            <div class="flex items-start space-x-4 bg-white/5 p-4 rounded-xl border border-white/10">
                                <div class="p-3 bg-ucb-gold text-ucb-navy rounded-lg font-bold">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
                                <div>
                                    <span class="text-xs text-slate-400 block uppercase font-medium">Docente Asignado</span>
                                    <h4 class="text-lg font-bold text-white">Ramón Herrera Peralta</h4>
                                    <p class="text-xs text-ucb-gold">Lic. en Ingeniería Mecatrónica</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4 bg-white/5 p-4 rounded-xl border border-white/10">
                                <div class="p-3 bg-ucb-gold text-ucb-navy rounded-lg font-bold">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div class="flex-1">
                                    <span class="text-xs text-slate-400 block uppercase font-medium">Correo Electrónico Institucional</span>
                                    <div class="flex items-center space-x-3 mt-1">
                                        <a href="mailto:ramon.herrera@ucb.edu.bo" class="text-base font-semibold text-white hover:text-ucb-gold transition-colors underline">ramon.herrera@ucb.edu.bo</a>
                                        <button onclick="copyEmail('ramon.herrera@ucb.edu.bo')" class="text-xs bg-white/10 hover:bg-white/20 px-2.5 py-1 rounded text-ucb-gold border border-ucb-gold/40">
                                            Copiar
                                        </button>
                                    </div>
                                    <span id="copy-status" class="text-xs text-green-400 opacity-0 transition-opacity block mt-1">¡Correo copiado al portapapeles!</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Location & Class Hours Info -->
                    <div class="lg:col-span-6 bg-white/10 backdrop-blur-md p-8 rounded-3xl border border-white/20 space-y-6">
                        <h3 class="text-xl font-bold text-ucb-gold border-b border-white/10 pb-3">Ubicación y Horarios de Clase</h3>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                            <div class="bg-white/5 p-4 rounded-xl">
                                <span class="text-xs text-slate-400 block font-medium">Horario Regular</span>
                                <p class="font-bold text-white mt-1">Lunes y Miércoles</p>
                                <p class="text-xs text-ucb-gold mt-0.5">07:30 – 09:00</p>
                            </div>
                            <div class="bg-white/5 p-4 rounded-xl">
                                <span class="text-xs text-slate-400 block font-medium">Sede Institucional</span>
                                <p class="font-bold text-white mt-1">UCB San Pablo</p>
                                <p class="text-xs text-slate-300 mt-0.5">Sede La Paz — Bolivia</p>
                            </div>
                        </div>

                        <div class="bg-white/5 p-4 rounded-xl text-xs space-y-2">
                            <span class="text-slate-400 uppercase font-medium block">Ambientes de Aprendizaje</span>
                            <div class="flex items-center space-x-2 text-slate-200">
                                <svg class="w-4 h-4 text-ucb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span>Taller CNC (Centros EMCO CT105 y EMCO CM105)</span>
                            </div>
                            <div class="flex items-center space-x-2 text-slate-200">
                                <svg class="w-4 h-4 text-ucb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span>Laboratorio de Cómputo (BobCAD-CAM & EMCO WinNC)</span>
                            </div>
                            <div class="flex items-center space-x-2 text-slate-200">
                                <svg class="w-4 h-4 text-ucb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span>Laboratorio de Metrología e Instrumentación Industrial</span>
                            </div>
                        </div>

                        <div class="text-center pt-2">
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=ramon.herrera@ucb.edu.bo&su=Consulta%20sobre%20IMT312" target="_blank" rel="noopener noreferrer" class="inline-block w-full py-3 rounded-xl bg-ucb-gold text-ucb-navy font-bold hover:bg-amber-400 transition-colors shadow-md text-center">
                                Enviar Mensaje al Docente
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-8 border-t border-slate-800 text-xs text-center">
        <div class="max-w-7xl mx-auto px-4">
            <p class="font-semibold text-slate-300">Universidad Católica Boliviana "San Pablo" – Sede La Paz</p>
            <p class="mt-1">Facultad de Ingeniería — Carrera de Ingeniería Mecatrónica</p>
            <p class="mt-2 text-slate-500">Programa Analítico IMT-312: Manufactura Integrada • Gestión I/2026</p>
        </div>
    </footer>

    <!-- INTERACTIVE JAVASCRIPT -->
    <script>
        // Mobile menu toggle
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu on link click
        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Tab Switcher for Competencies Section
        function switchCompTab(tabIndex) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });
            // Remove active class from buttons
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active', 'border-ucb-gold', 'text-ucb-navy', 'bg-white', 'font-bold');
                btn.classList.add('text-slate-600');
            });

            // Show current tab content & activate button
            document.getElementById(`tab-content-${tabIndex}`).classList.remove('hidden');
            const activeBtn = document.getElementById(`tab-btn-${tabIndex}`);
            activeBtn.classList.add('active', 'border-ucb-gold', 'text-ucb-navy', 'bg-white', 'font-bold');
            activeBtn.classList.remove('text-slate-600');
        }

        // Copy email function
        function copyEmail(text) {
            const input = document.createElement('input');
            input.setAttribute('value', text);
            document.body.appendChild(input);
            input.select();
            document.execCommand('copy');
            document.body.removeChild(input);

            const status = document.getElementById('copy-status');
            status.style.opacity = '1';
            setTimeout(() => {
                status.style.opacity = '0';
            }, 3000);
        }
    </script>
    <script src="assets/js/app.js" defer></script>
</body>
</html>