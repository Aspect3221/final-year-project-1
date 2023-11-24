<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                View the answers to common questions here
            </h2>
            <div class="flex flex-col">
            <a href="{{route('dashboard.faq.nisab-rate')}}" class="bg-blue-500 p-2 text-center rounded-lg">Get Nisab Rates</a>

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
    </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex flex-col justify-center w-full p-8 text-gray-900 divide-y">
                        <div>
                            <h2>What is Zakat?</h2>
                            <div >
                                <p>Zakat is a form of almsgiving treated in Islam as a religious obligation or tax, which, by Quranic ranking, is next to prayer (Salah) in importance.</p>
                            </div>
                        </div>

                        <div class="mt-2">
                            <h2 class="mt-2">How can I donate?</h2>
                            <div >
                                <p>To donate zakat, you can use the websites donation feature over at the donation tab.</p>
                            </div>
                        </div>

                        <div class="mt-2">
                            <h2 class="mt-2">Is my financial information and user data secure with ZakatEase?</h2>
                            <div>
                                <p>Yes, we prioritize the security of your financial information. Our app uses encryption and follows industry best practices to ensure your data is safe.</p>
                            </div>
                        </div>

                        <div class="mt-2">
                            <h2 class="mt-2">Can I view the current nisaab rates before donating?</h2>
                            <div>
                                <p>Yes, our app allows you to view the current nisaab rates for gold and silver in terms of modern currency.</p>
                            </div>
                        </div>

                        <div class="mt-2">
                            <h2 class="mt-2">Can I change my biodata?</h2>
                            <div>
                                <p>Yes. head over to your profile at the top right to change your personal details.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
