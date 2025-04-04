<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Otros elementos del head -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;family=Raleway:ital,wght@0,100..900;1,100..900&amp;display=swap">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    @livewireStyles
</head>

<body class="lg:h-screen bg-secondary lg:overflow-hidden">
    <div class="lg:h-screen grid grid-cols-1 lg:grid-cols-12 gap-4 py-4 md:p-8">
        <!-- Left Column -->
        <div class="lg:col-span-8 flex flex-col gap-4 p-4 py-6 md:p-8 bg-background rounded-2xl lg:overflow-y-auto">
            <h1 class="text-4xl font-title font-bold text-highlight">Modelo {{ $casa->name }}</h1>
            <div class="relative">
                <i class="bx bxs-chevron-left bx-lg text-secondary/70 absolute top-1/2 -translate-y-1/2 left-2"></i>
                <img class="rounded-2xl" src="/images/model-placeholder.jpg" alt="">
                <i class="bx bxs-chevron-right bx-lg text-secondary/70 absolute top-1/2 -translate-y-1/2 right-2"></i>
            </div>
            <div class="flex gap-4 justify-center">
                <div class="w-20 h-20 flex justify-center items-center rounded-2xl bg-secondary">
                    <span class="text-tertiary">+9</span>
                </div>
                <div class="w-20 h-20 flex justify-center items-center rounded-2xl bg-secondary">
                    <span class="text-tertiary">+9</span>
                </div>
                <div class="w-20 h-20 flex justify-center items-center rounded-2xl bg-secondary">
                    <span class="text-tertiary">+9</span>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <div>
                    <h2 class="text-lg text-foreground-secondary">El refugio cálido y acogedor para reconectar con lo esencia</h2>
                    <h1 class="text-4xl text-highlight font-title font-bold">Descripción del Modelo</h1>
                </div>
                <p>El Nido representa el hogar como un refugio cálido y acogedor, donde todo está diseñado para brindar comodidad y seguridad. Inspirado en la simplicidad de los nidos de pájaros, este modelo es perfecto para quienes buscan un espacio íntimo y funcional, donde cada detalle está pensado para maximizar el espacio sin sacrificar la elegancia. Es el lugar ideal para reconectar con uno mismo y con lo esencial.</p>
            </div>
            <div>
                <div>
                    <h4 class="text-foreground-secondary">4x6 metros</h4>
                    <h3 class="text-3xl text-highlight font-title font-bold">Básica</h3>
                </div>
                <div class="grid grid-cols-2">
                    <div>
                        <span class="font-bold">Distribución:</span>
                        <ul>
                            <li>2 habitaciones</li>
                            <li>Cocina</li>
                            <li>Sala</li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-2">
                        <div>
                            <span class="font-bold">Área construida:</span>
                            <ul>
                                <li>24 m²</li>
                            </ul>
                        </div>
                        <div>
                            <span class="font-bold">Características:</span>
                            <ul>
                                <li>100% funcional</li>
                                <li>Completamente habitable</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <h4 class="text-foreground-secondary">4x6 metros</h4>
                    <h3 class="text-3xl text-highlight font-title font-bold">Intermedia</h3>
                </div>
                <div class="grid grid-cols-2">
                    <div>
                        <span class="font-bold">Distribución:</span>
                        <ul>
                            <li>1 habitación</li>
                            <li>1 baño</li>
                            <li>Cocina</li>
                            <li>Sala</li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-2">
                        <div>
                            <span class="font-bold">Área construida:</span>
                            <ul>
                                <li>24 m²</li>
                            </ul>
                        </div>
                        <div>
                            <span class="font-bold">Características:</span>
                            <ul>
                                <li>100% funcional</li>
                                <li>Completamente habitable</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <h4 class="text-foreground-secondary">4x7 metros</h4>
                    <h3 class="text-3xl text-highlight font-title font-bold">Lujo</h3>
                </div>
                <div class="grid grid-cols-2">
                    <div>
                        <span class="font-bold">Distribución:</span>
                        <ul>
                            <li>1 habitación</li>
                            <li>1 baño</li>
                            <li>Cocina</li>
                            <li>Sala</li>
                            <li>Terraza con pérgola</li>
                            <li>2 closets</li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-2">
                        <div>
                            <span class="font-bold">Área construida:</span>
                            <ul>
                                <li>28 m²</li>
                            </ul>
                        </div>
                        <div>
                            <span class="font-bold">Características:</span>
                            <ul>
                                <li>100% funcional</li>
                                <li>Completamente habitable</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="lg:col-span-4 flex flex-col p-4 md:px-8 md:py-6 bg-background rounded-2xl lg:overflow-y-auto">
            @livewire('cotizador', [
                'precioBase' => $casa->price,
                'accesorios' => $accesorios,
                'lenguaje' => 'esp',
            ])
        </div>
    </div>
    @livewireScripts
</body>

</html>
