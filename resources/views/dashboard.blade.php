<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" style="height: 600px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-body text-gray-900">
                            Hello {{ auth()->user()->name }}! {{ __("You're logged in!") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
