

<div x-data="{
    mobileMenuOpen: false,
    scrollToSection(section) {
        document.getElementById(section).scrollIntoView({ behavior: 'smooth', block: 'start' });
        this.mobileMenuOpen = false;
    }
}" class="bg-white dark:bg-zinc-900 text-zinc-900 dark:text-white">

    <!-- Modern Navigation Header -->
    <nav class="fixed top-0 w-full z-50 backdrop-blur-sm bg-white/90 dark:bg-zinc-900/90 border-b border-zinc-200/50 dark:border-zinc-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <flux:brand href="#" name="Initium" class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent" />
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#hero" @click.prevent="scrollToSection('hero')" class="text-sm font-medium text-zinc-600 dark:text-zinc-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">{{ __('Sākums') }}</a>
                    <a href="#services" @click.prevent="scrollToSection('services')" class="text-sm font-medium text-zinc-600 dark:text-zinc-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">{{ __('Pakalpojumi') }}</a>
                    <a href="#solutions" @click.prevent="scrollToSection('solutions')" class="text-sm font-medium text-zinc-600 dark:text-zinc-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">{{ __('Risinājumi') }}</a>
                    <a href="#industries" @click.prevent="scrollToSection('industries')" class="text-sm font-medium text-zinc-600 dark:text-zinc-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">{{ __('Nozares') }}</a>
                    <a href="#technologies" @click.prevent="scrollToSection('technologies')" class="text-sm font-medium text-zinc-600 dark:text-zinc-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">{{ __('Tehnoloģijas') }}</a>
                    <a href="#contact" @click.prevent="scrollToSection('contact')" class="text-sm font-medium text-zinc-600 dark:text-zinc-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">{{ __('Kontakti') }}</a>
                </div>

                <!-- Contact Info & Theme Toggle -->
                <div class="hidden lg:flex items-center space-x-4">
                    <div class="text-right text-sm">
                        <div class="font-medium">{{ config('contact.email') }}</div>
                        <div class="text-zinc-500 dark:text-zinc-400">{{ config('contact.phone') }}</div>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center space-x-2">
                    <flux:button variant="ghost" size="sm" icon="bars-3" x-on:click="mobileMenuOpen = !mobileMenuOpen" aria-label="Toggle menu" />
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div x-show="mobileMenuOpen" x-transition class="md:hidden py-4 border-t border-zinc-200 dark:border-zinc-800">
                <div class="flex flex-col space-y-4">
                    <a href="#hero" @click.prevent="scrollToSection('hero')" class="text-sm font-medium text-zinc-600 dark:text-zinc-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">{{ __('Sākums') }}</a>
                    <a href="#services" @click.prevent="scrollToSection('services')" class="text-sm font-medium text-zinc-600 dark:text-zinc-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">{{ __('Pakalpojumi') }}</a>
                    <a href="#solutions" @click.prevent="scrollToSection('solutions')" class="text-sm font-medium text-zinc-600 dark:text-zinc-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">{{ __('Risinājumi') }}</a>
                    <a href="#industries" @click.prevent="scrollToSection('industries')" class="text-sm font-medium text-zinc-600 dark:text-zinc-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">{{ __('Nozares') }}</a>
                    <a href="#technologies" @click.prevent="scrollToSection('technologies')" class="text-sm font-medium text-zinc-600 dark:text-zinc-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">{{ __('Tehnoloģijas') }}</a>
                    <a href="#contact" @click.prevent="scrollToSection('contact')" class="text-sm font-medium text-zinc-600 dark:text-zinc-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">{{ __('Kontakti') }}</a>
                    <div class="pt-4 border-t border-zinc-200 dark:border-zinc-800 text-sm">
                        <div class="font-medium">{{ config('contact.email') }}</div>
                        <div class="text-zinc-500 dark:text-zinc-400">{{ config('contact.phone') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="pt-16">
        <!-- Hero Section -->
        <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
            <!-- Background gradient -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-indigo-50 dark:from-zinc-900 dark:via-zinc-900 dark:to-blue-950/20"></div>

            <!-- Decorative elements -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute -top-40 -right-32 w-80 h-80 bg-gradient-to-br from-blue-400/20 to-indigo-600/20 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-gradient-to-tr from-indigo-400/20 to-blue-600/20 rounded-full blur-3xl"></div>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="max-w-4xl mx-auto">
                    <!-- Badge
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-50 dark:bg-blue-950/50 border border-blue-200 dark:border-blue-800/50 text-blue-700 dark:text-blue-300 text-sm font-medium mb-8">
                        <x-heroicon-o-sparkles class="w-4 h-4 mr-2" />
                        {{ __('Profesionāli IT pakalpojumi uzņēmumiem') }}
                    </div> -->

                    <!-- Main heading -->
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-6">
                        <span class="bg-gradient-to-r from-zinc-900 via-zinc-800 to-zinc-900 dark:from-white dark:via-zinc-100 dark:to-white bg-clip-text text-transparent">
                            Initium
                        </span>
                    </h1>

                    <!-- Subheading -->
                    <p class="text-xl md:text-2xl lg:text-3xl text-zinc-600 dark:text-zinc-300 mb-8 leading-relaxed max-w-3xl mx-auto">
                        {{ __('Mūsdienīgi IT risinājumi mazumtirdzniecības, vairumtirdzniecības un loģistikas nozarēm.') }}
                    </p>

                    <!-- Feature highlights -->
                    <div class="flex flex-wrap justify-center gap-6 mb-12">
                        <div class="flex items-center text-zinc-600 dark:text-zinc-400">
                            <x-heroicon-o-shopping-cart class="w-5 h-5 text-blue-600 mr-2" />
                            <span class="font-medium">{{ __('Mazumtirdzniecība') }}</span>
                        </div>
                        <div class="flex items-center text-zinc-600 dark:text-zinc-400">
                            <x-heroicon-o-users class="w-5 h-5 text-green-600 mr-2" />
                            <span class="font-medium">{{ __('Vairumtirdzniecība') }}</span>
                        </div>
                        <div class="flex items-center text-zinc-600 dark:text-zinc-400">
                            <x-heroicon-o-truck class="w-5 h-5 text-indigo-600 mr-2" />
                            <span class="font-medium">{{ __('Loģistika') }}</span>
                        </div>
                    </div>

                    <!-- CTA buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">

                        <flux:button variant="ghost" size="base" @click="scrollToSection('services')" class="px-8 py-3 text-lg">
                            {{ __('Uzzināt vairāk') }}
                            <x-heroicon-o-chevron-down class="w-4 h-4 ml-2" />
                        </flux:button>
                    </div>
                </div>
            </div>

            <!-- Scroll indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                <x-heroicon-o-chevron-down class="w-6 h-6 text-zinc-400" />
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-24 bg-gradient-to-br from-zinc-50 via-blue-50/30 to-indigo-50/50 dark:from-zinc-800 dark:via-blue-950/20 dark:to-indigo-950/30 relative overflow-hidden">
            <!-- Decorative background elements -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-bl from-blue-400/10 to-indigo-600/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-indigo-400/10 to-blue-600/10 rounded-full blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-zinc-900 dark:text-white mb-6">
                        {{ __('Pakalpojumi') }}
                    </h2>
                    <!--<p class="text-xl text-zinc-600 dark:text-zinc-300 max-w-3xl mx-auto leading-relaxed">
                        {{ __('Piedāvājam pilnu IT risinājumu spektru, lai padarītu tavu biznesu efektīvāku un konkurētspējīgāku') }}
                    </p> -->
                </div>

                <!-- Services Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    @foreach($services as $service)
                        <flux:card class="group hover:shadow-xl hover:shadow-blue-500/5 transition-all duration-300 border border-zinc-200/50 dark:border-zinc-800/50 bg-white/80 dark:bg-zinc-900/80 backdrop-blur-sm hover:-translate-y-1">
                            <div class="flex items-start space-x-6">
                                <!-- Icon Section -->
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl blur-xl opacity-15 group-hover:opacity-25 transition-opacity"></div>
                                        <div class="relative w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-blue-500/20">
                                            <x-dynamic-component :component="'heroicon-o-' . $service['icon']" class="w-8 h-8 text-white" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Content Section -->
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-xl font-bold text-zinc-900 dark:text-white mb-3">{{ $service['title'] }}</h3>
                                     <!--<p class="text-zinc-600 dark:text-zinc-300 mb-3 leading-relaxed">{{ $service['description'] }}</p>  -->
                                     <!-- <p class="text-sm text-zinc-500 dark:text-zinc-400 mb-6 leading-relaxed">{{ $service['details'] }}</p>  -->

                                    <div class="space-y-2">
                                        @foreach($service['features'] as $feature)
                                            <div class="flex items-center gap-3 text-sm text-zinc-600 dark:text-zinc-300">
                                                <div class="w-5 h-5 bg-green-100 dark:bg-green-950/50 rounded-full flex items-center justify-center flex-shrink-0">
                                                    <x-heroicon-o-check class="w-3 h-3 text-green-600" />
                                                </div>
                                                <span>{{ $feature }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </flux:card>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Solutions Section -->
        <section id="solutions" class="py-24 bg-white dark:bg-zinc-900 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">

                    <h2 class="text-4xl md:text-5xl font-bold text-zinc-900 dark:text-white mb-6">
                        {{ __('Mūsu risinājumi') }}
                    </h2>
                </div>

                <!-- Solutions Grid -->
                <div class="grid grid-cols-1 {{ count($solutions) > 2 ? 'lg:grid-cols-2' : '' }} gap-8">
                    @foreach($solutions as $solution)
                        <flux:card class="group hover:shadow-xl hover:shadow-green-500/5 transition-all duration-300 border border-zinc-200/50 dark:border-zinc-800/50 bg-white/80 dark:bg-zinc-900/80 backdrop-blur-sm hover:-translate-y-1 p-8">
                            <div class="flex items-start gap-6">
                                <!-- Icon -->
                                <div class="flex-shrink-0">
                                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform duration-300 shadow-lg shadow-green-500/20">
                                        <x-dynamic-component :component="'heroicon-o-' . $solution['icon']" class="w-10 h-10 text-white" />
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-start justify-between gap-4 mb-3">
                                        <h3 class="text-2xl font-bold text-zinc-900 dark:text-white">{{ $solution['name'] }}</h3>
                                       {{--  <span class="flex-shrink-0 inline-block px-3 py-1 bg-green-100 dark:bg-green-950/50 text-green-700 dark:text-green-300 text-sm font-medium rounded-full">
                                            {{ $solution['pricing'] }}
                                        </span> --}}
                                    </div>

                                    <p class="text-zinc-600 dark:text-zinc-300 mb-4 leading-relaxed">{{ $solution['description'] }}</p>

                                    <!-- Key Features -->
                                    <div class="mb-6">
                                        <ul class="space-y-1">
                                            @foreach($solution['features'] as $feature)
                                                <li class="flex items-center gap-2 text-sm text-zinc-600 dark:text-zinc-300">
                                                    <div class="w-4 h-4 bg-green-100 dark:bg-green-950/50 rounded-full flex items-center justify-center flex-shrink-0">
                                                        <x-heroicon-o-check class="w-2.5 h-2.5 text-green-600" />
                                                    </div>
                                                    <span>{{ $feature }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <!-- Technologies -->
                                    <div class="mb-6">
                                        <div class="flex flex-wrap gap-1.5">
                                            @foreach($solution['technologies'] as $tech)
                                                <span class="inline-flex items-center px-2.5 py-1 bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 text-xs rounded-md">
                                                    {{ $tech }}
                                                </span>
                                            @endforeach

                                        </div>
                                    </div>

                                    <!-- Implementation Time -->
                                    <div class="mb-6">
                                        <div class="flex items-center gap-2 text-sm text-zinc-600 dark:text-zinc-300">
                                            <x-heroicon-o-clock class="w-4 h-4 text-green-600" />
                                            <span><strong>Ieviešanas laiks:</strong> {{ $solution['implementationTime'] }}</span>
                                        </div>
                                    </div>

                                    <a href="{{ route('product.reports') }}" class="inline-flex items-center justify-center px-4 py-2 bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 text-white text-sm font-medium rounded-lg transition-colors duration-200 group-hover:shadow-lg group-hover:shadow-green-500/25">
                                        {{ __('Pilna informācija') }}
                                        <x-heroicon-o-arrow-right class="w-4 h-4 ml-2" />
                                    </a>
                                </div>
                            </div>
                        </flux:card>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Industries Section -->
        <section id="industries" class="py-24 bg-gradient-to-br from-zinc-50 via-blue-50/30 to-indigo-50/50 dark:from-zinc-800 dark:via-blue-950/20 dark:to-indigo-950/30 relative overflow-hidden">
            <!-- Decorative background elements -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-bl from-blue-400/10 to-indigo-600/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-indigo-400/10 to-blue-600/10 rounded-full blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="text-center mb-20">
                   <!-- <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 dark:bg-blue-950/50 text-blue-700 dark:text-blue-300 text-sm font-medium mb-6">
                        <x-heroicon-o-building-office class="w-4 h-4 mr-2" />
                        {{ __('Mūsu specializācija') }}
                    </div>-->
                    <h2 class="text-4xl md:text-5xl font-bold text-zinc-900 dark:text-white mb-6">
                        {{ __('Specializācija') }}
                    </h2>
                  <!--  <p class="text-xl text-zinc-600 dark:text-zinc-300 max-w-3xl mx-auto leading-relaxed">
                        {{ __('Specializējamies mazumtirdzniecībā, vairumtirdzniecībā un loģistikas risinājumos ar dziļu izpratni par katras nozares specifiku') }}
                    </p>-->
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    @foreach($specializations as $index => $specialization)
                        <div class="relative group">
                            <flux:card class="h-full border border-zinc-200/50 dark:border-zinc-800/50 bg-white/80 dark:bg-zinc-900/80 backdrop-blur-sm hover:shadow-2xl hover:shadow-{{ $index === 0 ? 'emerald' : ($index === 1 ? 'blue' : 'purple') }}-500/10 transition-all duration-500 hover:-translate-y-2">
                                <!-- Industry Icon & Header -->
                                <div class="relative mb-8">
                                    <div class="absolute inset-0 bg-gradient-to-br {{ $index === 0 ? 'from-emerald-500 to-teal-600' : ($index === 1 ? 'from-blue-500 to-indigo-600' : 'from-purple-500 to-pink-600') }} rounded-2xl blur-xl opacity-15 group-hover:opacity-25 transition-opacity"></div>
                                    <div class="relative w-20 h-20 mx-auto bg-gradient-to-br {{ $index === 0 ? 'from-emerald-500 to-teal-600' : ($index === 1 ? 'from-blue-500 to-indigo-600' : 'from-purple-500 to-pink-600') }} rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-{{ $index === 0 ? 'emerald' : ($index === 1 ? 'blue' : 'purple') }}-500/20">
                                        <x-dynamic-component :component="'heroicon-o-' . $specialization['icon']" class="w-10 h-10 text-white" />
                                    </div>
                                </div>

                                <div class="text-center mb-6">
                                    <h3 class="text-2xl font-bold text-zinc-900 dark:text-white mb-4">{{ $specialization['title'] }}</h3>
                                    <p class="text-zinc-600 dark:text-zinc-300 leading-relaxed">{{ $specialization['description'] }}</p>
                                </div>

                                <!-- Features List -->
                                <div class="space-y-3">
                                    @foreach($specialization['features'] as $feature)
                                        <div class="flex items-center gap-3 text-zinc-700 dark:text-zinc-300">
                                            <div class="w-6 h-6 {{ $index === 0 ? 'bg-emerald-100 dark:bg-emerald-950/50' : ($index === 1 ? 'bg-blue-100 dark:bg-blue-950/50' : 'bg-purple-100 dark:bg-purple-950/50') }} rounded-full flex items-center justify-center flex-shrink-0">
                                                <x-heroicon-o-check class="w-4 h-4 {{ $index === 0 ? 'text-emerald-600' : ($index === 1 ? 'text-blue-600' : 'text-purple-600') }}" />
                                            </div>
                                            <span class="font-medium">{{ $feature }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </flux:card>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section id="technologies" class="py-24 bg-white dark:bg-zinc-900 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                   <!--  <div class="inline-flex items-center px-4 py-2 rounded-full bg-indigo-50 dark:bg-indigo-950/50 text-indigo-700 dark:text-indigo-300 text-sm font-medium mb-6">
                        <x-heroicon-o-cpu-chip class="w-4 h-4 mr-2" />
                        {{ __('Mūsu tehnoloģiju steks') }}
                    </div>-->
                    <h2 class="text-4xl md:text-5xl font-bold text-zinc-900 dark:text-white mb-6">
                        {{ __('Izmantotās tehnoloģijas') }}
                    </h2>
                    <!--<p class="text-xl text-zinc-600 dark:text-zinc-300 max-w-3xl mx-auto leading-relaxed">
                        {{ __('Izmantojam jaunākās un uzticamākās tehnoloģijas, lai radītu mūsdienīgus un ilgtspējīgus risinājumus') }}
                    </p>-->
                </div>

                <!-- Technology Grid -->
                @php
                    $categoryColors = [
                        'Aizmugure' => ['bg' => 'from-red-500 to-orange-600', 'badge' => 'bg-red-50 dark:bg-red-950/50 text-red-600'],
                        'Saskarne' => ['bg' => 'from-blue-500 to-cyan-600', 'badge' => 'bg-blue-50 dark:bg-blue-950/50 text-blue-600'],
                        'Datu bāzes' => ['bg' => 'from-green-500 to-emerald-600', 'badge' => 'bg-green-50 dark:bg-green-950/50 text-green-600'],
                        'Mobilās' => ['bg' => 'from-purple-500 to-pink-600', 'badge' => 'bg-purple-50 dark:bg-purple-950/50 text-purple-600'],
                        'Mākonis' => ['bg' => 'from-sky-500 to-blue-600', 'badge' => 'bg-sky-50 dark:bg-sky-950/50 text-sky-600'],
                        'Administrācija' => ['bg' => 'from-amber-500 to-yellow-600', 'badge' => 'bg-amber-50 dark:bg-amber-950/50 text-amber-600'],
                    ];
                @endphp

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-6">
                    @foreach($technologies as $tech)
                        <flux:card class="text-center group hover:shadow-lg hover:shadow-blue-500/10 transition-all duration-300 border border-zinc-200/50 dark:border-zinc-800/50 bg-white/80 dark:bg-zinc-900/80 backdrop-blur-sm hover:-translate-y-1">
                            <div class="mb-4">
                                <div class="w-12 h-12 mx-auto rounded-xl bg-gradient-to-br {{ $categoryColors[$tech['category']]['bg'] ?? 'from-zinc-500 to-zinc-600' }} flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-blue-500/20">
                                    <x-dynamic-component :component="'heroicon-o-' . $tech['icon']" class="w-6 h-6 text-white" />
                                </div>
                            </div>
                            <h4 class="font-semibold text-zinc-900 dark:text-white mb-2">{{ $tech['name'] }}</h4>
                            <!-- <p class="text-xs text-zinc-500 dark:text-zinc-400 leading-relaxed mb-3">{{ $tech['description'] }}</p>-->
                           <!--  <flux:badge size="sm" class="{{ $categoryColors[$tech['category']]['badge'] ?? 'bg-zinc-50 dark:bg-zinc-950/50 text-zinc-600' }} border border-zinc-200/50 dark:border-zinc-800/50">{{ $tech['category'] }}</flux:badge>-->
                        </flux:card>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <livewire:contact />
    </main>
    <livewire:footer />
</div>
