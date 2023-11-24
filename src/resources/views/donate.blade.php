<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Fill the form and submit to donate
            </h2>
            <div class="flex flex-col">
                <a href="{{route('dashboard.faq.nisab-rate')}}" class="bg-blue-500 p-2 text-center rounded-lg">Get Nisab
                    Rates</a>

                @if ($gold = Session::get('gold'))
                    <div class="alert alert-success alert-block text-green-500">
                        <strong>Gold: {{ round($gold, 2) }} MVR</strong>
                    </div>
                @endif
                @if ($silver = Session::get('silver'))
                    <div class="alert alert-success alert-block text-green-500">
                        <strong>Silver: {{ round($silver, 2) }} MVR</strong>
                    </div>
                @endif
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block text-green-500">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
    </x-slot>

    <form action="{{route('dashboard.donate.submit')}}" method="POST">
        @csrf
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex flex-col justify-center w-full p-8 text-gray-900">
                        <x-input name="amount" type="number" icon="currency-dollar" label="Amount"
                                 placeholder="Enter the amount to donate"/>
                        <button class="bg-lime-400 text-white rounded-lg w-20 mt-3 h-9" type="submit">Donate</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
