<x-app-layout>
    <x-slot name="header">
        {{-- <h2 style="font-weight: bolder;color:rgb(248, 248, 248);padding:20px;background:  black;" class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome to eQuiz') }}
        </h2> --}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <div class="container">
                <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="breadcrums">
                <div class="row" style="margin-top: -257px; padding: 0% 0% 10% 0% ;    background: #ffffffb0; position: relative;">
                    <h1 style="text-align: center;font-weight: bolder;color:rgb(248, 248, 248);padding:20px;background:  black;">Click this button for test</h1>
                    <br>
                    <br>
                    <div style="text-align:center">
<a href="quiz" style="color:rgb(255, 255, 255);background: black;padding: 15px;border-radius: 20px; ">Start Quiz</a>

                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
</x-app-layout>
