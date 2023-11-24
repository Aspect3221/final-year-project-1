<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Here you can see your history
        </h2>
    </x-slot>

    @php
        $donations = auth()->user()->donation;
    @endphp
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-center w-full p-8 text-gray-900">
                    <table class="table-auto">
                        <thead>
                        <tr>
                            <th class="pr-14">Amount</th>
                            <th class="pr-14">Time</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($donations->isNotEmpty())
                            @foreach($donations->sortByDesc('created_at') as $donation)
                        <tr>
                            <td class="pr-14">{{$donation->amount}}</td>
                            <td class="pr-14">{{\Carbon\Carbon::parse($donation->created_at)->format('H:i a')}}</td>
                            <td>{{\Carbon\Carbon::parse($donation->created_at)->format('d-m-y')}}</td>
                        </tr>
                            @endforeach
                        @else
                            You currently have not donated
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
