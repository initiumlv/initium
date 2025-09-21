<section id="contact" class="py-24 bg-white bg-gradient-to-br from-blue-50 via-indigo-50/50 to-purple-50/30 dark:from-blue-950/20 dark:via-indigo-950/30 dark:to-purple-950/20 relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-blue-400/10 to-indigo-600/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-tl from-indigo-400/10 to-purple-600/10 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Contact Info -->
            <div>
                <!-- <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 dark:bg-blue-950/50 text-blue-700 dark:text-blue-300 text-sm font-medium mb-6">
                            <x-heroicon-o-chat-bubble-left-ellipsis class="w-4 h-4 mr-2" />
                            {{ __('Sāciet sadarbību') }}
                </div> -->

                <h2 class="text-4xl md:text-5xl font-bold text-zinc-900 dark:text-white mb-6">
                    {{ __('Sazinies ar mums') }}
                </h2>

                <p class="text-xl text-zinc-600 dark:text-zinc-300 mb-8 leading-relaxed">
                    <!-- {{ __('Sazinieties ar mums, lai apspriestu jūsu IT vajadzības. Mēs piedāvāsim labāko risinājumu jūsu biznesam.') }} -->
                </p>

                <!-- Contact Methods -->
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center">
                            <x-heroicon-o-envelope class="w-6 h-6 text-white" />
                        </div>
                        <div>
                            <div class="font-semibold text-zinc-900 dark:text-white">{{ __('E-pasts') }}</div>
                            <a href="mailto:{{ config('contact.email') }}" class="text-blue-600 dark:text-blue-400 hover:underline">{{ config('contact.email') }}</a>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center">
                            <x-heroicon-o-phone class="w-6 h-6 text-white" />
                        </div>
                        <div>
                            <div class="font-semibold text-zinc-900 dark:text-white">{{ __('Tālrunis') }}</div>
                            <a href="tel:{{ config('contact.phone') }}" class="text-blue-600 dark:text-blue-400 hover:underline">{{ config('contact.phone') }}</a>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center">
                            <x-heroicon-o-clock class="w-6 h-6 text-white" />
                        </div>
                        <div>
                            <div class="font-semibold text-zinc-900 dark:text-white">{{ __('Darba laiks') }}</div>
                            <div class="text-zinc-600 dark:text-zinc-300">{{ __('Pirmd. - Piekt.: 9:00 - 18:00') }}</div>
                        </div>
                    </div>
                </div>

                <!-- Response Time Promise -->
                <div class="mt-8 p-6 bg-white/50 dark:bg-zinc-800/50 backdrop-blur-sm rounded-2xl border border-zinc-200/50 dark:border-zinc-700/50">
                    <div class="flex items-center gap-3 text-green-700 dark:text-green-300">
                        <x-heroicon-o-bolt class="w-5 h-5" />
                        <span class="font-semibold">{{ __('Garantējam atbildi 24 stundu laikā') }}</span>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <flux:card class="border border-zinc-200/50 dark:border-zinc-800/50 bg-white/90 dark:bg-zinc-900/90 backdrop-blur-sm shadow-2xl shadow-blue-500/5">
                    <form wire:submit.prevent="submit" class="space-y-6">
                        <div class="mb-6">
                            <h3 class="text-2xl font-bold text-zinc-900 dark:text-white mb-2">{{ __('Bezmaksas konsultācija') }}</h3>
                            <p class="text-zinc-600 dark:text-zinc-300">{{ __('Aizpildiet formu un mēs sazināsimies ar jums') }}</p>
                        </div>

                        <flux:field>
                            <flux:label for="name" class="text-zinc-700 dark:text-zinc-300 font-medium">{{ __('Jūsu vārds') }}</flux:label>
                            <flux:input
                                id="name"
                                wire:model.defer="name"
                                required
                                class="border-zinc-200 dark:border-zinc-700 focus:border-blue-500 focus:ring-blue-500/20"
                                placeholder="{{ __('Ievadiet savu vārdu') }}"
                            />
                            @error('name') <flux:error>{{ $message }}</flux:error> @enderror
                        </flux:field>

                        <flux:field>
                            <flux:label for="email" class="text-zinc-700 dark:text-zinc-300 font-medium">{{ __('E-pasta adrese') }}</flux:label>
                            <flux:input
                                id="email"
                                type="email"
                                wire:model.defer="email"
                                required
                                class="border-zinc-200 dark:border-zinc-700 focus:border-blue-500 focus:ring-blue-500/20"
                                placeholder="{{ __('jusu@epasts.lv') }}"
                            />
                            @error('email') <flux:error>{{ $message }}</flux:error> @enderror
                        </flux:field>

                        <flux:field>
                            <flux:label for="question" class="text-zinc-700 dark:text-zinc-300 font-medium">{{ __('Jautājums vai projekta apraksts') }}</flux:label>
                            <flux:textarea
                                id="question"
                                wire:model.defer="question"
                                rows="4"
                                required
                                class="border-zinc-200 dark:border-zinc-700 focus:border-blue-500 focus:ring-blue-500/20"
                                placeholder="{{ __('Aprakstiet savu projektu vai uzdodiet jautājumu...') }}"
                            />
                            @error('question') <flux:error>{{ $message }}</flux:error> @enderror
                        </flux:field>

                        <flux:button type="submit" variant="primary" size="base" class="w-full shadow-lg shadow-blue-500/25 py-3 text-lg">
                            <div class=" flex flex-row">
                                <x-heroicon-o-paper-airplane class="w-5 h-5 mr-2" />
                                {{ __('Nosūtīt ziņojumu') }}
                            </div>

                        </flux:button>

                        @if(isset($sent) && $sent)
                            <flux:callout variant="success" icon="check-circle" class="text-center">
                                <strong>{{ __('Paldies!') }}</strong> {{ __('Jūsu ziņa ir saņemta. Sazināsimies ar jums 24 stundu laikā.') }}
                            </flux:callout>
                        @endif
                    </form>
                </flux:card>
            </div>
        </div>
    </div>
</section>
