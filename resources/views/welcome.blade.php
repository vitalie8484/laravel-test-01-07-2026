<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Personal Homepage</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-zinc-950 text-zinc-50 selection:bg-indigo-500 selection:text-white antialiased font-['Plus_Jakarta_Sans',sans-serif]">
    <main class="max-w-3xl mx-auto px-6 py-24 sm:py-32 space-y-16">

        <section class="space-y-6">
            <div class="inline-flex items-center space-x-3 bg-zinc-900 border border-zinc-800 px-3 py-1 rounded-full text-xs text-zinc-400">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                <span>Available for new opportunities</span>
            </div>

            <div class="space-y-2">
                <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl bg-gradient-to-r from-zinc-50 via-zinc-200 to-zinc-400 bg-clip-text text-transparent">
                    Alex Morgan
                </h1>
                <p class="text-lg font-medium text-indigo-400">
                    Full Stack Engineer & Designer
                </p>
            </div>

            <p class="text-base text-zinc-400 leading-relaxed max-w-2xl">
                Building elegant web experiences using Laravel, Livewire, and Tailwind CSS. Focused on clean architecture, high performance, and minimal user interfaces.
            </p>

            <div class="flex items-center space-x-4 text-sm text-zinc-500">
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-1.5 text-zinc-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Montreal, QC
                </span>
                <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="hover:text-zinc-300 transition-colors">GitHub</a>
                <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="hover:text-zinc-300 transition-colors">Twitter</a>
            </div>
        </section>

        <hr class="border-zinc-900" />

        <section class="space-y-6">
            <h2 class="text-xs font-semibold tracking-widest uppercase text-zinc-500">Selected Projects</h2>

            <div class="grid gap-4 sm:grid-cols-2">
                <a href="#" class="group block p-6 bg-zinc-900/40 border border-zinc-900 rounded-2xl hover:bg-zinc-900/80 hover:border-zinc-800 transition-all duration-200">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="font-medium text-zinc-200 group-hover:text-indigo-400 transition-colors">
                            SaaS Analytics Dashboard
                        </h3>
                        <svg class="w-4 h-4 text-zinc-600 group-hover:text-zinc-400 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </div>
                    <p class="text-sm text-zinc-400 leading-relaxed">
                        Real-time financial metrics dashboard built with Laravel v13 and Livewire v4 ecosystems.
                    </p>
                </a>

                <a href="#" class="group block p-6 bg-zinc-900/40 border border-zinc-900 rounded-2xl hover:bg-zinc-900/80 hover:border-zinc-800 transition-all duration-200">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="font-medium text-zinc-200 group-hover:text-indigo-400 transition-colors">
                            Open Source Toolkit
                        </h3>
                        <svg class="w-4 h-4 text-zinc-600 group-hover:text-zinc-400 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </div>
                    <p class="text-sm text-zinc-400 leading-relaxed">
                        A lightweight set of design tokens and utility presets tailored specifically for Tailwind v4 layouts.
                    </p>
                </a>
            </div>
        </section>

    </main>
</body>

</html>
