<div class="min-h-screen w-full bg-black text-white relative overflow-hidden flex items-center justify-center" 
    x-data="{ sidebarOpen: false }"
    x-init="sidebarOpen = false">

    <button @click="sidebarOpen = !sidebarOpen" 
            x-show="!sidebarOpen"
            x-cloak
            class="fixed top-4 left-4 z-50 bg-gray-800/50 backdrop-blur-sm rounded-xl p-2 opacity-70 hover:opacity-100 transition-all duration-300 animate-border-flow border-2 border-purple-500/30">
        <div class="relative z-10">
            <x-heroicon-o-bars-3 class="w-6 h-6 text-white" />
        </div>
    </button>

    {{-- Sidebar --}}

    <div x-cloak
         class="fixed left-0 top-0 h-full w-64 md:w-80 backdrop-blur-xl border-r border-gray-800/30 z-40 overflow-hidden transition-transform duration-300"
         :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}">
        <div class="relative z-10 h-full flex flex-col">
            <div class="p-4 md:p-6">
                <div class="mb-6 md:mb-8 flex items-center justify-between">
                    <h1 class="text-xl md:text-2xl font-bold bg-clip-text text-transparent uppercase bg-gradient-to-r from-purple-400 to-pink-600">
                        Initium
                    </h1>
                    <button @click="sidebarOpen = false" 
                            class="bg-gray-800/30 backdrop-blur-sm rounded-xl p-1.5 opacity-70 hover:opacity-100 transition-all duration-300 animate-border-flow border-2 border-purple-500/20">
                        <x-heroicon-o-x-mark class="w-5 h-5 text-white" />
                    </button>
                </div>
                <nav class="space-y-4 md:space-y-6">
                    <div class="space-y-2">
                        @foreach($menu as $item)
                            <a href="{{ $item['url'] }}" 
                               class="flex items-center space-x-2 px-4 md:px-6 py-3 md:py-4 text-sm md:text-base text-gray-300 hover:text-white hover:bg-white/10 rounded-lg transition-colors duration-200"
                               @if($item['url'] !== '#') target="_blank" rel="noopener noreferrer" @endif>
                                <x-dynamic-component :component="'heroicon-o-' . $item['icon']" class="w-5 h-5 md:w-6 md:h-6" />
                                <span>{{ $item['title'] }}</span>
                            </a>
                        @endforeach
                    </div>
                </nav>
            </div>

            {{-- Language Switcher --}}
            <div class="mt-auto p-4 md:p-6 border-t border-gray-800/30 relative" x-data="{ open: false }">
                <button @click="open = !open" class="w-full group relative bg-gray-800/30 backdrop-blur-sm rounded-xl p-3 opacity-70 hover:opacity-100 transition-all duration-300 animate-border-flow border-2 border-purple-500/20">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/5 to-pink-500/5 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <x-heroicon-o-language class="w-5 h-5 text-purple-400" />
                            <span class="text-sm md:text-base text-white">{{ strtoupper(app()->getLocale()) }}</span>
                        </div>
                        <x-heroicon-o-chevron-down class="w-4 h-4 text-purple-400 transition-transform duration-300" x-bind:class="open ? 'rotate-180' : ''" />
                    </div>
                </button>
                
                <div x-show="open" 
                     @click.away="open = false"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="absolute bottom-full left-4 right-4 mb-2 z-50">
                    <div class="w-full group relative bg-gray-800/30 backdrop-blur-sm rounded-xl p-2 opacity-70 hover:opacity-100 transition-all duration-300 animate-border-flow border-2 border-purple-500/20">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-500/5 to-pink-500/5 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative z-10 flex flex-col gap-2">
                            <a href="{{ route('language.switch', 'en') }}" class="text-white hover:text-purple-400 transition-colors px-3 py-2 rounded-lg hover:bg-purple-500/10">
                                {{ __('English') }}
                            </a>
                            <a href="{{ route('language.switch', 'lv') }}" class="text-white hover:text-purple-400 transition-colors px-3 py-2 rounded-lg hover:bg-purple-500/10">
                                {{ __('Latvian') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Overlay --}}
    <div x-show="sidebarOpen" 
         @click="sidebarOpen = false"
         class="fixed inset-0 bg-black/50 backdrop-blur-sm z-30"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
    </div>

    {{-- Animated background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-black via-gray-900 to-black overflow-hidden animate-gradient-bg">
        <div class="absolute inset-0 bg-[url('/grid.svg')] bg-repeat opacity-20"></div>
    </div>

    {{-- Content container --}}
    <div class="relative z-10 w-full max-w-7xl px-4 py-16 flex flex-col items-center justify-center">
        {{-- Hero section --}}
        <div class="text-center mb-16">
            <div class="relative inline-block">
       
                <h1 class="relative text-4xl md:text-6xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-pink-600 animate-gradient uppercase filter drop-shadow-[0_0_0.5rem_#000000]">
                    Initium
                </h1>
            </div>
            <p class="text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto">
                {{ __('Transforming ideas into innovative digital solutions') }}
            </p>
        </div>

        {{-- Services grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            @foreach($services as $service)
                <div class="group relative bg-gray-800/50 backdrop-blur-sm rounded-xl p-6 opacity-70 group-hover:opacity-100 transition-opacity duration-300 hover:bg-gray-800/70 hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-pink-500/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-purple-500/10 rounded-lg flex items-center justify-center mb-4">
                            <x-dynamic-component :component="'heroicon-o-' . $service['icon']" class="w-6 h-6 text-purple-400" />
                        </div>
                        <h3 class="text-xl font-semibold mb-2 text-white">
                            {{ $service['title'] }}
                        </h3>
                        <p class="text-gray-400">
                            {{ $service['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach

            {{-- Contact Info Box --}}
            <div class="md:col-span-2 w-full">
                <div class="group relative bg-gray-800/50 backdrop-blur-sm rounded-xl p-4 sm:p-8 opacity-70 group-hover:opacity-100 transition-all duration-300 animate-border-flow border-2 border-purple-500/30">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-pink-500/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10 flex flex-col md:flex-row gap-6 md:gap-8 items-center justify-between">
                        <div class="flex-1 md:pr-8 text-left">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 bg-purple-500/10 rounded-lg flex items-center justify-center">
                                    <x-heroicon-o-phone class="w-6 h-6 text-purple-400" />
                                </div>
                                <h3 class="text-2xl font-semibold text-white">{{ __('Get in Touch') }}</h3>
                            </div>
                            <p class="text-gray-400 text-base sm:text-lg">{{ __('Ready to transform your ideas into reality? Contact us for a free consultation and let\'s discuss how we can help your business grow.') }}</p>
                        </div>
                        <div class="flex-1 flex flex-col items-center justify-center gap-4 sm:gap-6 w-full md:w-auto md:text-right">
                            <div class="flex items-center">
                                <x-heroicon-o-envelope class="w-6 h-6 text-purple-400 mr-3" />
                                <a href="mailto:{{ config('contact.email') }}" class="text-lg sm:text-xl text-white hover:text-purple-400 transition-colors break-all mr-3">{{ config('contact.email') }}</a>
                            </div>
                            <div class="flex items-center">
                                <x-heroicon-o-phone class="w-6 h-6 text-purple-400 mr-3" />
                                <a href="tel:{{ config('contact.phone') }}" class="text-lg sm:text-xl text-white hover:text-purple-400 transition-colors mr-3">{{ config('contact.phone') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Solutions Section --}}
        <div class="w-full max-w-7xl mx-auto mt-10">
  
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($solutions as $solution)
                    <div class="group relative bg-gray-800/50 backdrop-blur-sm rounded-xl p-8 opacity-70 group-hover:opacity-100 transition-all duration-300 hover:bg-gray-800/70 hover:scale-[1.02]">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-pink-500/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative z-10">
                            <div class="w-14 h-14 bg-purple-500/10 rounded-lg flex items-center justify-center mb-6">
                                <x-dynamic-component :component="'heroicon-o-' . $solution['icon']" class="w-7 h-7 text-purple-400" />
                            </div>
                            <h3 class="text-2xl font-semibold mb-3 text-white">
                                {{ $solution['title'] }}
                            </h3>
                            <p class="text-gray-400 mb-6">
                                {{ $solution['description'] }}
                            </p>
                            <div class="grid grid-cols-2 gap-3">
                                @foreach($solution['features'] as $feature)
                                    <div class="flex items-center gap-2 text-sm text-gray-300">
                                        <x-heroicon-s-check-circle class="w-5 h-5 text-purple-400" />
                                        {{ $feature }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Footer --}}
        <footer class="w-full max-w-7xl mx-auto mt-20 mb-10">
            <div class="border-t border-gray-800 pt-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center md:text-left">
                        <h3 class="text-lg font-semibold text-white mb-4">{{ __('Company') }}</h3>
                        <p class="text-gray-400">{{ config('contact.company.name') }}</p>
                        <p class="text-gray-400">{{ __('Reg. No.') }} {{ config('contact.company.reg_number') }}</p>
                        @if(!empty(config('contact.company.vat_number')))
                            <p class="text-gray-400">{{ __('VAT No.') }} {{ config('contact.company.vat_number') }}</p>
                        @endif
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-semibold text-white mb-4">{{ __('Contact') }}</h3>
                        <p class="text-gray-400">{{ config('contact.email') }}</p>
                        <p class="text-gray-400">{{ config('contact.phone') }}</p>
                    </div>
                    <div class="text-center md:text-right">
                        <h3 class="text-lg font-semibold text-white mb-4">{{ __('Legal') }}</h3>
                        <p class="text-gray-400">© {{ date('Y') }} SIA Aetherium</p>
                        <p class="text-gray-400">{{ __('All rights reserved') }}</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

@push('styles')
<style>
    @keyframes gradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    .animate-gradient {
        background-size: 200% auto;
        animation: gradient 8s linear infinite;
    }

    @keyframes gradient-bg {
        0% {
            background: linear-gradient(45deg, #000000, #1a1a1a, #000000);
            background-size: 200% 200%;
            background-position: 0% 50%;
        }
        50% {
            background: linear-gradient(45deg, #000000, #1f1f1f, #000000);
            background-size: 200% 200%;
            background-position: 100% 50%;
        }
        100% {
            background: linear-gradient(45deg, #000000, #1a1a1a, #000000);
            background-size: 200% 200%;
            background-position: 0% 50%;
        }
    }
    .animate-gradient-bg {
        animation: gradient-bg 30s ease infinite;
    }

    @keyframes border-flow {
        0% { border-color: rgba(139, 92, 246, 0.3); }
        50% { border-color: rgba(236, 72, 153, 0.3); }
        100% { border-color: rgba(139, 92, 246, 0.3); }
    }
    .animate-border-flow {
        animation: border-flow 3s linear infinite;
    }
</style>
@endpush
