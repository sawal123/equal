<x-filament::page>

    {{-- <h1 class="text-2xl font-bold mb-6">Dashboard Admin</h1> --}}

    {{-- CARD STAT --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

        {{-- Total Visit --}}
        <div class="bg-gray-800/70 backdrop-blur rounded-xl p-6 border border-gray-700">
            <div class="flex items-center gap-4">
                <div class="p-3 rounded-full bg-yellow-500/20 text-yellow-400">
                    <x-heroicon-o-users class="w-6 h-6" />
                </div>
                <div>
                    <p class="text-sm text-gray-400">Total Visits</p>
                    <p class="text-2xl font-bold">
                        {{ \App\Models\Visit::count() }}
                    </p>
                </div>
            </div>
        </div>

        {{-- Today Visit --}}
        <div class="bg-gray-800/70 backdrop-blur rounded-xl p-6 border border-gray-700">
            <div class="flex items-center gap-4">
                <div class="p-3 rounded-full bg-blue-500/20 text-blue-400">
                    <x-heroicon-o-calendar-days class="w-6 h-6" />
                </div>
                <div>
                    <p class="text-sm text-gray-400">Today</p>
                    <p class="text-2xl font-bold">
                        {{ \App\Models\Visit::whereDate('created_at', today())->count() }}
                    </p>
                </div>
            </div>
        </div>

        {{-- Unique IP (Simple) --}}
        <div class="bg-gray-800/70 backdrop-blur rounded-xl p-6 border border-gray-700">
            <div class="flex items-center gap-4">
                <div class="p-3 rounded-full bg-green-500/20 text-green-400">
                    <x-heroicon-o-finger-print class="w-6 h-6" />
                </div>
                <div>
                    <p class="text-sm text-gray-400">Unique Visitor</p>
                    <p class="text-2xl font-bold">
                        {{ \App\Models\Visit::distinct('ip')->count('ip') }}
                    </p>
                </div>
            </div>
        </div>

    </div>

    {{-- CHART + INFO --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        {{-- Chart --}}
        <div class="lg:col-span-2 bg-gray-800/70 rounded-xl p-6 border border-gray-700">
            <h3 class="font-semibold mb-4">Website Visits</h3>
            @livewire(\App\Filament\Widgets\VisitChart::class)
        </div>

        {{-- Info --}}
        <div class="bg-gray-800/70 rounded-xl p-6 border border-gray-700">
            <h3 class="font-semibold mb-2">Info</h3>
            <p class="text-sm text-gray-400 leading-relaxed">
                Statistik pengunjung website dalam 7 hari terakhir.
                Data ini membantu memantau aktivitas dan performa website.
            </p>
        </div>

    </div>

</x-filament::page>
