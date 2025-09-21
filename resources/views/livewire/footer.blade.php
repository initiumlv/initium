<footer class="bg-zinc-900 dark:bg-zinc-950 text-white relative overflow-hidden">
    <!-- Background decoration -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-gradient-to-br from-blue-600/10 to-indigo-600/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-gradient-to-tl from-indigo-600/10 to-purple-600/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Main Footer Content -->
        <div class="py-16 border-b border-zinc-800">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <flux:text href="#"  class="text-2xl font-bold text-white mb-4">
                        {{ config('contact.company.name') }}
                    </flux:text>
                    <p class="text-zinc-400 mb-6 leading-relaxed max-w-md">
                        {{ __('Profesionāli IT risinājumi mazumtirdzniecības, vairumtirdzniecības un loģistikai. Mūsdienīgas tehnoloģijas biznesa izaugsmei.') }}
                    </p>

                    <!-- Social Links / GitHub -->
                    <div class="flex items-center gap-4">
                        <a href="https://github.com/initiumlv" target="_blank" class="flex items-center gap-2 text-zinc-400 hover:text-white transition-colors group">
                            <div class="w-10 h-10 bg-zinc-800 hover:bg-zinc-700 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                <x-heroicon-o-code-bracket-square class="w-5 h-5" />
                            </div>
                            <span class="text-sm font-medium">{{ __('Open Source') }}</span>
                        </a>
                    </div>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">{{ __('Pakalpojumi') }}</h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#services" @click.prevent="scrollToSection('services')" class="text-zinc-400 hover:text-white transition-colors">{{ __('Web programmēšana') }}</a></li>
                        <li><a href="#services" @click.prevent="scrollToSection('services')" class="text-zinc-400 hover:text-white transition-colors">{{ __('Mobīlās aplikācijas') }}</a></li>
                        <li><a href="#services" @click.prevent="scrollToSection('services')" class="text-zinc-400 hover:text-white transition-colors">{{ __('E-commerce risinājumi') }}</a></li>
                        <li><a href="#services" @click.prevent="scrollToSection('services')" class="text-zinc-400 hover:text-white transition-colors">{{ __('AI integrācijas') }}</a></li>
                        <li><a href="#services" @click.prevent="scrollToSection('services')" class="text-zinc-400 hover:text-white transition-colors">{{ __('IT atbalsts') }}</a></li>
                    </ul>
                </div>

                <!-- Industries -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">{{ __('Nozares') }}</h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#industries" @click.prevent="scrollToSection('industries')" class="text-zinc-400 hover:text-white transition-colors">{{ __('Mazumtirdzniecība') }}</a></li>
                        <li><a href="#industries" @click.prevent="scrollToSection('industries')" class="text-zinc-400 hover:text-white transition-colors">{{ __('Vairumtirdzniecība') }}</a></li>
                        <li><a href="#industries" @click.prevent="scrollToSection('industries')" class="text-zinc-400 hover:text-white transition-colors">{{ __('Loģistika') }}</a></li>
                        <li><a href="#technologies" @click.prevent="scrollToSection('technologies')" class="text-zinc-400 hover:text-white transition-colors">{{ __('Tehnoloģijas') }}</a></li>
                        <li><a href="#contact" @click.prevent="scrollToSection('contact')" class="text-zinc-400 hover:text-white transition-colors">{{ __('Konsultācijas') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="py-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <!-- Company Details -->
                <div class="text-center md:text-left">
                    <div class="text-sm">
                        <span class="font-medium text-white!">{{ config('contact.company.name') }}</span>
                        @if(config('contact.company.reg_number'))
                            • {{ __('Reģ. Nr.') }} {{ config('contact.company.reg_number') }}
                        @endif
                        @if(config('contact.company.vat_number'))
                            • {{ __('PVN Nr.') }} {{ config('contact.company.vat_number') }}
                        @endif
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="flex flex-col md:flex-row items-center gap-4 text-sm text-zinc-400">
                    <a href="mailto:{{ config('contact.email') }}" class="hover:text-white transition-colors">{{ config('contact.email') }}</a>
                    <span class="hidden md:block">•</span>
                    <a href="tel:{{ config('contact.phone') }}" class="hover:text-white transition-colors">{{ config('contact.phone') }}</a>
                </div>
            </div>

            <!-- Copyright -->
            <div class="mt-8 pt-8 border-t border-zinc-800 text-center">
                <p class="text-sm text-zinc-500">
                    © {{ date('Y') }} {{ config('contact.company.name') }}. {{ __('Visas tiesības aizsargātas.') }}
                </p>
            </div>
        </div>
    </div>
</footer>
