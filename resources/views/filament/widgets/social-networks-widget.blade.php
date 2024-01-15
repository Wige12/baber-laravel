<x-filament::widget>
    <x-filament::card>
        <div class="relative h-12 flex flex-col justify-center items-center space-y-2">
            <div class="space-y-1">
                <h2 class="text-lg sm:text-xl font-bold tracking-tight italic dark:text-primary-500">
                    {{ __('Suporte') }}
                </h2>
            </div>

            <div class="text-sm flex space-x-2 rtl:space-x-reverse">
                <a
                    href="https://api.whatsapp.com/send?phone=5585997101058"
                    target="_blank"
                    rel="noopener noreferrer"
                    @class([
                        'text-gray-600 hover:text-primary-500 focus:outline-none focus:underline',
                        'dark:text-gray-300 dark:hover:text-primary-500' => config('filament.dark_mode'),
                    ])
                >
                    <button>{{ __('Suporte whatsapp') }}</button>
                </a>
            </div>
        </div>
    </x-filament::card>
</x-filament::widget>
