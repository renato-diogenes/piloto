<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('resources/views/livewire/pilot/index.title') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($pilots)
                        <table class="table-fixed w-full">
                            <thead>
                                <tr>
                                    <td class="w-1/2">{{ __('resources/views/livewire/pilot/index.image') }}</td>
                                    <td class="w-1/4">{{ __('resources/views/livewire/pilot/index.seal') }}</td>
                                    <td class="w-1/4">{{ __('resources/views/livewire/pilot/index.machine') }}</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pilots as $pilot)
                                    <tr>
                                        <td><img src="{{ $pilot->image }}"></td>
                                        <td>{{ $pilot->seal }}</td>
                                        <td>{{ $pilot->machine }}"</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
