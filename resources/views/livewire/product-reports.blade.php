<div>

    <!-- Navigation -->
    <nav class="bg-white backdrop-blur-md border-b border-gray-200 sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <a href="/" class="flex items-center gap-3 group">
                    <div class="w-8 h-8 bg-gradient-to-br from-blue-600 to-indigo-700 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-sm">I</span>
                    </div>
                    <span class="font-bold text-xl text-gray-900">Initium</span>
                </a>

                <!-- Back to Home -->
                <a href="/" class="flex items-center gap-2 text-gray-600 hover:text-blue-600 transition-colors">
                    <x-heroicon-o-arrow-left class="w-4 h-4" />
                    <span>{{ __('Atpakaļ uz sākumu') }}</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Decorative Lines -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 left-1/4 w-px h-full bg-gradient-to-b from-blue-200 via-blue-100 to-transparent opacity-50"></div>
            <div class="absolute top-0 right-1/3 w-px h-full bg-gradient-to-b from-indigo-200 via-indigo-100 to-transparent opacity-30"></div>
            <div class="absolute top-1/4 left-0 w-full h-px bg-gradient-to-r from-transparent via-blue-100 to-transparent opacity-30"></div>
            <div class="absolute bottom-1/3 left-0 w-full h-px bg-gradient-to-r from-transparent via-indigo-100 to-transparent opacity-50"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Column - Content -->
                <div>

                    <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                        {{ __('Biznesa vadības centrs') }}
                    </h1>

                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        {{ __('Profesionāls risinājums uzņēmuma datu analizēšanai,atskaišu veidošanai un datu importam ar 80% ātrāku atskaišu un importa izveidi.') }}
                    </p>

                    <!-- Key Benefits -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                        <div class="text-center p-4 border border-gray-200 rounded-lg bg-gray-50">
                            <div class="text-3xl font-bold text-green-600 mb-2">80%</div>
                            <div class="text-sm text-gray-600">{{ __('Darba efektivitātes pieaugums') }}</div>
                        </div>
                        <div class="text-center p-4 border border-gray-200 rounded-lg bg-gray-50">
                            <div class="text-3xl font-bold text-blue-600 mb-2">10+</div>
                            <div class="text-sm text-gray-600">{{ __('Stundu ietaupījums nedēļā') }}</div>
                        </div>
                {{--        <div class="text-center p-4 border border-gray-200 rounded-lg bg-gray-50">
                            <div class="text-3xl font-bold text-purple-600 mb-2">3-6</div>
                            <div class="text-sm text-gray-600">{{ __('Mēneši atmaksāšanās') }}</div>
                        </div>--}}
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <flux:button
                            @click="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})"
                            variant="primary"
                            size="base"
                            class="shadow-lg shadow-blue-500/25 px-8 py-4"
                        >
                            {{ __('Pieteikties konsultācijai') }}
                            <x-heroicon-o-arrow-right class="w-5 h-5 ml-2" />
                        </flux:button>

                        <flux:button
                            @click="document.getElementById('pricing').scrollIntoView({behavior: 'smooth'})"
                            variant="outline"
                            size="base"
                            class="px-8 py-4"
                        >
                            {{ __('Skatīt cenas') }}
                        </flux:button>
                    </div>
                </div>

                <!-- Right Column - Image/Demo -->
                <div>
                     <div class="aspect-video border rounded border-gray-200">
                                <img src="{{ asset('reports.png') }}" class="max-w-full max-h-full object-contain rounded-lg" alt="Reports Dashboard Preview" />
                            </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-24 bg-white relative">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center">
                <flux:heading size="xl" class="text-gray-900 mb-6">
                    {{ __('Galvenās funkcijas') }}
                </flux:heading>
                <flux:subheading class="text-gray-600">
                    {{ __('Pilnvērtīgs risinājums uzņēmuma datu analizēšanai un atskaišu veidošanai') }}
                </flux:subheading>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                <!-- Report Generation -->
                <flux:card class="group transition-all duration-300 border-0!">
                    <div class="p-8">
                        <div class="relative">
                            <!-- Decorative line -->
                            <div class="absolute -top-4 -left-4 w-12 h-px bg-gradient-to-r from-blue-500 to-transparent opacity-60"></div>

                            <flux:icon.document-chart-bar class="w-12 h-12 text-blue-600 mb-6 p-2 bg-blue-100 rounded-xl group-hover:scale-110 transition-transform" />

                            <flux:heading size="lg" class="text-gray-900 mb-4">
                                {{ __('Atskaišu izveide') }}
                            </flux:heading>

                            <div class="space-y-3">
                                     <div class="text-black flex gap-2">
                                         <flux:icon.check class="w-4 h-4 text-green-600" />
                                          {{ __('Individuālas atskaites katram uzņēmumam') }}
                                    </div>

                                    <div class="text-black flex gap-2">
                                         <flux:icon.check class="w-4 h-4 text-green-600" />
                                        {{ __('Daudzveidīgi datu avoti, uzskaites sistēmas (Jumis, Horizon, u.c.), interneta veikali, api savienojumi') }}
                                    </div>

                                    <div class="text-black flex gap-2">
                                         <flux:icon.check class="w-4 h-4 text-green-600" />
                                        {{ __('Datu apvienošana no vairākiem avotiem, piemēram uzskaites sistēma + interneta veikals') }}
                                    </div>

                                    <div class="text-black flex gap-2">
                                         <flux:icon.check class="w-4 h-4 text-green-600" />
                                          {{ __('Elastīga filtrēšana') }}
                                    </div>

                                    <div class="text-black flex gap-2">
                                         <flux:icon.check class="w-4 h-4 text-green-600" />
                                          {{ __('Reāllaika datu apstrāde') }}
                                    </div>

                            </div>
                        </div>`
                    </div>
                </flux:card>

                <!-- Multi-format Export -->
                <flux:card class="group transition-all duration-300 border-0!">
                    <div class="p-8">
                        <div class="relative">
                            <!-- Decorative line -->
                            <div class="absolute -top-4 -left-4 w-12 h-px bg-gradient-to-r from-green-500 to-transparent opacity-60"></div>

                            <flux:icon.arrow-down-tray class="w-12 h-12 text-green-600 mb-6 p-2 bg-green-100 rounded-xl group-hover:scale-110 transition-transform" />

                            <flux:heading size="lg" class="text-gray-900 mb-4">
                                {{ __('Atskaišu eksports') }}
                            </flux:heading>

                            <div class="space-y-3">
                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Excel') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('JSON, savienojumam ar Excel vai kā api') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Automātiska datu atsvaidzināšana, pēc noteikta grafika') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Atskaišu datu vēsture - tiek saglabāti iepriekšējie dati pirms atskaites datu atsvaidzināšanas') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Failu piekļuves vēsture') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </flux:card>

                <flux:card class="group transition-all duration-300 border-0!">
                    <div class="p-8">
                        <div class="relative">
                            <!-- Decorative line -->
                            <div class="absolute -top-4 -left-4 w-12 h-px bg-gradient-to-r from-blue-500 to-transparent opacity-60"></div>

                            <flux:icon.document-plus class="w-12 h-12 text-blue-600 mb-6 p-2 bg-blue-100 rounded-xl group-hover:scale-110 transition-transform" />

                            <flux:heading size="lg" class="text-gray-900 mb-4">
                                {{ __('Datu imports') }}
                            </flux:heading>

                            <div class="space-y-3">
                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Individuālas importi katram uzņēmumam') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Datu import uzjebkādu sistēmu - uzskaites sistēmas (Jumis, Horizon, u.c.), interneta veikali, api savienojumi') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Datu imports uz vairākiem avotiem vienlaicīgi, piemēram uzskaites sistēma + interneta veikals') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Elastīga filtrēšana') }}
                                </div>

                            </div>
                        </div>`
                    </div>
                </flux:card>

                <!-- Team Collaboration -->
                <flux:card class="group transition-all duration-300 border-0!">
                    <div class="p-8">
                        <div class="relative">
                            <!-- Decorative line -->
                            <div class="absolute -top-4 -left-4 w-12 h-px bg-gradient-to-r from-purple-500 to-transparent opacity-60"></div>

                            <flux:icon.users class="w-12 h-12 text-purple-600 mb-6 p-2 bg-purple-100 rounded-xl group-hover:scale-110 transition-transform" />

                            <flux:heading size="lg" class="text-gray-900 mb-4">
                                {{ __('Sadarbība') }}
                            </flux:heading>

                            <div class="space-y-3">
                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Atskaišu koplietošana ar kolēģiem vai citiem uzņēmumiem') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Drošas publiskās saites') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Ierobežota piekļuve ar derīguma termiņiem') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Datu atjaunināšanas biežuma pārvaldība') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </flux:card>

                <!-- Email Automation -->
                <flux:card class="group transition-all duration-300 border-0!">
                    <div class="p-8">
                        <div class="relative">
                            <!-- Decorative line -->
                            <div class="absolute -top-4 -left-4 w-12 h-px bg-gradient-to-r from-orange-500 to-transparent opacity-60"></div>

                            <flux:icon.envelope class="w-12 h-12 text-orange-600 mb-6 p-2 bg-orange-100 rounded-xl group-hover:scale-110 transition-transform" />

                            <flux:heading size="lg" class="text-gray-900 mb-4">
                                {{ __('Automātiskā atskaišu piegāde e-pastā') }}
                            </flux:heading>

                            <div class="space-y-3">
                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Izveido elastīgu grafiku kurās dienās un laikos velies saņemt atskaiti') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Pievieno vienu vai vairākus saņēmējus kam tiks nosūtīta atskaite') }}
                                </div>

                            </div>
                        </div>
                    </div>
                </flux:card>

                <!-- Report Management -->
                <flux:card class="group transition-all duration-300 border-0!">
                    <div class="p-8">
                        <div class="relative">
                            <!-- Decorative line -->
                            <div class="absolute -top-4 -left-4 w-12 h-px bg-gradient-to-r from-teal-500 to-transparent opacity-60"></div>

                            <flux:icon.folder class="w-12 h-12 text-teal-600 mb-6 p-2 bg-teal-100 rounded-xl group-hover:scale-110 transition-transform" />

                            <flux:heading size="lg" class="text-gray-900 mb-4">
                                {{ __('Atskaišu pārvaldība') }}
                            </flux:heading>

                            <div class="space-y-3">
                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Centralizēta atskaišu bibliotēka') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Ātras meklēšanas funkcijas') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Filtrēšana pēc tipa, datuma u.c parametriem') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Versiju kontrole un izmaiņu izsekošana') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </flux:card>

            </div>
        </div>
    </section>



    <!-- Section Border Decoration -->
    <div class="relative bg-white py-8">
        <div class="absolute inset-0 flex items-center">
            <div class="w-full">
                <div class="flex items-center">
                    <div class="flex-grow border-t border-gray-200"></div>
                    <div class="flex-shrink-0 px-6">
                        <div class="w-12 h-px bg-gradient-to-r from-blue-500 to-indigo-500"></div>
                    </div>
                    <div class="flex-grow border-t border-gray-200"></div>
                </div>
            </div>
        </div>
        <div class="relative flex justify-center">
            <div class="bg-white px-4">
                <div class="flex items-center space-x-2">
                    <div class="w-1 h-1 bg-blue-400 rounded-full opacity-60"></div>
                    <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                    <div class="w-1 h-1 bg-blue-400 rounded-full opacity-60"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deployment Options Section -->
    <section class="py-24 bg-white" id="pricing">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">


                      <flux:heading size="xl" class="text-gray-900 mb-6">
                   {{ __('Cenas') }}
                </flux:heading>
                <flux:subheading class="text-gray-600">
                    {{ __('Izvēlieties risinājumu, kas vislabāk atbilst jūsu uzņēmuma vajadzībām') }}
                </flux:subheading>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Cloud Version -->
                <flux:card class="group transition-all duration-300 border-0!">
                    <div class="p-8">
                        <div class="relative">
                            <!-- Decorative line -->
                            <div class="absolute -top-4 -left-4 w-12 h-px bg-gradient-to-r from-blue-500 to-transparent opacity-60"></div>

                            <flux:icon.cloud class="w-12 h-12 text-blue-600 mb-6 p-2 bg-blue-100 rounded-xl group-hover:scale-110 transition-transform" />

                            <flux:heading size="lg" class=" mb-2 text-gray-900">
                                {{ __('Mākoņa versija') }}
                            </flux:heading>

                            <flux:badge variant="filled" color="blue" class="mb-6 text-dark!">
                                {{ __('Ideāli komandām') }}
                            </flux:badge>

                            <div class="text-center mb-6">
                                <span class="text-3xl font-bold text-gray-900">€29</span>
                                <span class="text-gray-600">/mēnesī</span>
                            </div>

                            <div class="space-y-3 mb-8">
                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Nav nepieciešama tehniskā uzturēšana') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Automātiski atjauninājumi') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Piekļuve no jebkuras vietas') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Datu aizsardzība') }}
                                </div>
                            </div>

                        </div>
                    </div>
                </flux:card>

                <!-- Windows App -->
                <flux:card class="group transition-all duration-300 border-0!">
                    <div class="p-8">
                        <div class="relative">
                            <!-- Decorative line -->
                            <div class="absolute -top-4 -left-4 w-12 h-px bg-gradient-to-r from-green-500 to-transparent opacity-60"></div>

                            <flux:icon.computer-desktop class="w-12 h-12 text-green-600 mb-6 p-2 bg-green-100 rounded-xl group-hover:scale-110 transition-transform" />

                            <flux:heading size="lg" class="text-gray-900 mb-2">
                                {{ __('Windows lietotne') }}
                            </flux:heading>

                            <flux:badge variant="filled" color="green" class="mb-6 text-dark!">
                                {{ __('Ideāli individuāliem lietotājiem') }}
                            </flux:badge>

                            <div class="text-center mb-6">
                                <span class="text-3xl font-bold text-gray-900">€199</span>
                                <span class="text-gray-600">{{ __(' vienreiz') }}</span>
                            </div>

                            <div class="space-y-3 mb-8">
                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Windows 10/11 atbalsts') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Pilna kontrole pār datiem') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Darbojas bez interneta') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Bezmaksas atjauninājumi 1 gadu') }}
                                </div>
                            </div>

                        </div>
                    </div>
                </flux:card>

                <!-- On-Premise -->
                <flux:card class="group transition-all duration-300 border-0!">
                    <div class="p-8">
                        <div class="relative">
                            <!-- Decorative line -->
                            <div class="absolute -top-4 -left-4 w-12 h-px bg-gradient-to-r from-purple-500 to-transparent opacity-60"></div>

                            <flux:icon.server class="w-12 h-12 text-purple-600 mb-6 p-2 bg-purple-100 rounded-xl group-hover:scale-110 transition-transform" />

                            <flux:heading size="lg" class="text-gray-900 mb-2">
                                {{ __('Lokāli izvietotā') }}
                            </flux:heading>

                            <flux:badge variant="outline" color="purple" class="mb-6">
                                {{ __('Maksimāla kontrole') }}
                            </flux:badge>

                            <div class="text-center mb-6">
                                <span class="text-3xl font-bold text-gray-900">€399</span>
                                <span class="text-gray-600">{{ __(' vienreiz') }}</span>
                            </div>

                            <div class="space-y-3 mb-8">
                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Pilna kontrole pār sistēmu') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Pielāgojamas drošības politikas') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Aplikācija atrodas uz jūsu servera') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Bezmaksas atjauninājumi 1 gadu') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </flux:card>
            </div>


            <div class="mt-4 text-sm text-gray-500">
                * {{ __('Visas cenas ir norādītas bez PVN. Papildu izmaksas var rasties atkarībā no izvēlētajām funkcijām un integrācijām.') }}
            </div>

            <!-- Custom Reports Pricing -->
            <div class="mt-16 text-center">
                <flux:card class="p-8 max-w-2xl mx-auto border-0!">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Pielāgoto atskaišu/importu sagatavošanas izmaksas') }}</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-600 text-blue-600 mb-2">€40/h</div>
                            <div class="text-sm text-gray-600">{{ __('Izveide') }}</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-green-600 text-green-600 mb-2">{{ __('Bezmaksas') }}</div>
                            <div class="text-sm text-gray-600">{{ __('Novērtējums') }}</div>
                        </div>
                    </div>
                </flux:card>
            </div>
        </div>
    </section>

    <!-- Section Border Decoration -->
    <div class="relative bg-white py-8">
        <div class="absolute inset-0 flex items-center">
            <div class="w-full">
                <div class="flex items-center">
                    <div class="flex-grow border-t border-gray-200"></div>
                    <div class="flex-shrink-0 px-6">
                        <div class="w-12 h-px bg-gradient-to-r from-blue-500 to-indigo-500"></div>
                    </div>
                    <div class="flex-grow border-t border-gray-200"></div>
                </div>
            </div>
        </div>
        <div class="relative flex justify-center">
            <div class="bg-white px-4">
                <div class="flex items-center space-x-2">
                    <div class="w-1 h-1 bg-blue-400 rounded-full opacity-60"></div>
                    <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                    <div class="w-1 h-1 bg-blue-400 rounded-full opacity-60"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Target Audience Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">


                           <flux:heading size="xl" class="text-gray-900 mb-6">
                     {{ __('Kam sistēma ir piemērota?') }}
                </flux:heading>
                <flux:subheading class="text-gray-600">
                   {{ __('Risinājums dažādām lomām un vajadzībām uzņēmumā') }}
                </flux:subheading>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Business Managers -->
                <flux:card class="group transition-all duration-300 border-0!">
                    <div class="p-8">
                        <div class="relative">
                            <!-- Decorative line -->
                            <div class="absolute -top-4 -left-4 w-12 h-px bg-gradient-to-r from-blue-500 to-transparent opacity-60"></div>

                            <flux:icon.briefcase class="w-12 h-12 text-blue-600 mb-6 p-2 bg-blue-100 rounded-xl group-hover:scale-110 transition-transform" />

                            <flux:heading size="lg" class="text-gray-900 mb-4">
                                {{ __('Vadītājiem') }}
                            </flux:heading>

                            <div class="space-y-3">
                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Detalizēts pārskats par uzņēmuma veiktspēju') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Pārdošanas tendenču analīze') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Izdevumu un ienākumu analīze') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </flux:card>

                <!-- Accountants -->
                <flux:card class="group transition-all duration-300 border-0!">
                    <div class="p-8">
                        <div class="relative">
                            <!-- Decorative line -->
                            <div class="absolute -top-4 -left-4 w-12 h-px bg-gradient-to-r from-green-500 to-transparent opacity-60"></div>

                            <flux:icon.calculator class="w-12 h-12 text-green-600 mb-6 p-2 bg-green-100 rounded-xl group-hover:scale-110 transition-transform" />

                            <flux:heading size="lg" class="text-gray-900 mb-4">
                                {{ __('Datu ievades operātoriem') }}
                            </flux:heading>

                            <div class="space-y-3">
                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Savienojums ar jebkādu grāmatvedības programmatūru, e-komercijas sistēmu vai datubāzi') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Izveidojams jebkāds datu imports uz sistēmu - Piemēram prece, cenas, dokumenti, atlaides, u.c') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </flux:card>



                <!-- Team Leaders -->
                <flux:card class="group transition-all duration-300 border-0!">
                    <div class="p-8">
                        <div class="relative">
                            <!-- Decorative line -->
                            <div class="absolute -top-4 -left-4 w-12 h-px bg-gradient-to-r from-orange-500 to-transparent opacity-60"></div>

                            <flux:icon.user-group class="w-12 h-12 text-orange-600 mb-6 p-2 bg-orange-100 rounded-xl group-hover:scale-110 transition-transform" />

                            <flux:heading size="lg" class="text-gray-900 mb-4">
                                {{ __('Komandu vadītājiem') }}
                            </flux:heading>

                            <div class="space-y-3">
                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Komandas darba organizācija') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Automātiska atskaišu sūtīšana') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Datu importam - preču kartiņas, cenas, u.c') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </flux:card>
            </div>
        </div>
    </section>

    <!-- Section Border Decoration -->
    <div class="relative bg-white py-8">
        <div class="absolute inset-0 flex items-center">
            <div class="w-full">
                <div class="flex items-center">
                    <div class="flex-grow border-t border-gray-200"></div>
                    <div class="flex-shrink-0 px-6">
                        <div class="w-12 h-px bg-gradient-to-r from-blue-500 to-indigo-500"></div>
                    </div>
                    <div class="flex-grow border-t border-gray-200"></div>
                </div>
            </div>
        </div>
        <div class="relative flex justify-center">
            <div class="bg-white px-4">
                <div class="flex items-center space-x-2">
                    <div class="w-1 h-1 bg-blue-400 rounded-full opacity-60"></div>
                    <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                    <div class="w-1 h-1 bg-blue-400 rounded-full opacity-60"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <flux:heading size="xl" class="text-gray-900 mb-6">
                       {{ __('Kāpēc izvēlēties mūsu sistēmu?') }}
                </flux:heading>
                <flux:subheading class="text-gray-600">
                {{ __('Modernas tehnoloģijas un lietotāju orientēts dizains') }}
                </flux:subheading>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Easy to Use -->
                <flux:card class="group transition-all duration-300 border-0!">
                    <div class="p-8">
                        <div class="relative">
                            <!-- Decorative line -->
                            <div class="absolute -top-4 -left-4 w-12 h-px bg-gradient-to-r from-green-500 to-transparent opacity-60"></div>

                            <flux:icon.hand-thumb-up class="w-12 h-12 text-green-600 mb-6 p-2 bg-green-100 rounded-xl group-hover:scale-110 transition-transform" />

                            <flux:heading size="lg" class="text-gray-900 mb-4">
                                {{ __('Viegli lietojama') }}
                            </flux:heading>

                            <div class="space-y-3">
                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Viegli lietojams un saprotams interfeiss') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Nav nepieciešama apmācība') }}
                                </div>

                                  <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Regulāri atjauninājumi') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </flux:card>


                <!-- Available Anywhere -->
                <flux:card class="group transition-all duration-300 border-0!">
                    <div class="p-8">
                        <div class="relative">
                            <!-- Decorative line -->
                            <div class="absolute -top-4 -left-4 w-12 h-px bg-gradient-to-r from-teal-500 to-transparent opacity-60"></div>

                            <flux:icon.globe-alt class="w-12 h-12 text-teal-600 mb-6 p-2 bg-teal-100 rounded-xl group-hover:scale-110 transition-transform" />

                            <flux:heading size="lg" class="text-gray-900 mb-4">
                                {{ __('Pieejama jebkur') }}
                            </flux:heading>

                            <div class="space-y-3">
                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Piekļuve no jebkuras vietas ar interneta savienojumu') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Pieejams no jebkuras ierīces - datori, telefoni, planšetes') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Saderīga ar windows, linux, ios, andriod, macos operētajsistēmām') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </flux:card>

                <!-- Integrations -->
                <flux:card class="group transition-all duration-300 border-0!">
                    <div class="p-8">
                        <div class="relative">
                            <!-- Decorative line -->
                            <div class="absolute -top-4 -left-4 w-12 h-px bg-gradient-to-r from-gray-500 to-transparent opacity-60"></div>

                            <flux:icon.puzzle-piece class="w-12 h-12 text-gray-600 mb-6 p-2 bg-gray-100 rounded-xl group-hover:scale-110 transition-transform" />

                            <flux:heading size="lg" class="text-gray-900 mb-4">
                                {{ __('Integrācijas') }}
                            </flux:heading>

                            <div class="space-y-3">
                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Jumis grāmatvedības sistēma') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Citas populāras grāmatvedības sistēmas') }}
                                </div>

                                    <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('Interneta veikali') }}
                                </div>

                                <div class="text-black flex gap-2">
                                    <flux:icon.check class="w-4 h-4 text-green-600" />
                                    {{ __('API integrācijas') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </flux:card>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <livewire:contact />

    <livewire:footer />
</div>
