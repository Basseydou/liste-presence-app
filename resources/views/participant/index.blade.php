<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('la liste des participants à simplon CI') }}
        </h2>
    </x-slot>

    

    <div class="h-full bg-gray-200 p-8">
        <div class="bg-white rounded-lg shadow-xl pb-8">
            <div x-data="{ openSettings: false }" class="absolute right-12 mt-4 rounded">
                <button @click="openSettings = !openSettings" class="border border-gray-400 p-2 rounded text-gray-300 hover:text-gray-300 bg-gray-100 bg-opacity-10 hover:bg-opacity-20" title="Settings">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                    </svg>
                </button>
                <div x-show="openSettings" @click.away="openSettings = false" class="bg-white absolute right-0 w-40 py-2 mt-1 border border-gray-200 shadow-2xl" style="display: none;">
                   
                    <div class="py-2">
                        <p class="text-gray-400 text-xs px-6 uppercase mb-1">Feedback</p>
                        <button class="w-full flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                            <span class="text-sm text-gray-700">Report</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full h-[250px]">
                <img src="https://vojislavd.com/ta-template-demo/assets/img/profile-background.jpg" class="w-full h-full rounded-tl-lg rounded-tr-lg">
            </div>
            <div class="flex flex-col items-center -mt-20">
                <img src="#" class="w-40 border-4 border-white rounded-full">
                <div class="flex items-center space-x-2 mt-2">
                    <p class="text-2xl">Page liste</p>
                    <span class="bg-blue-500 rounded-full p-1" title="Verified">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-100 h-2.5 w-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </span>
                </div>
                
            </div>
            <div class="flex-1 flex flex-col items-center lg:items-end justify-end px-8 mt-2">
                <div class="flex items-center space-x-4 mt-2">
                   
                </div>
            </div>
        </div>

        <div class="my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">
            <div class="w-full flex flex-col 2xl:w-1/3">
                <h4 class="text-xl text-gray-900 font-bold">Information des participants</h4>
                @foreach($participants as $participant)
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    
                    <ul class="mt-2 text-gray-700">
                        <li class="flex border-y py-2">
                            <span class="font-bold w-24">La date</span>
                            <span class="text-gray-700">{{$participant->created_at->format('d M Y')}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Le Nom du participant</span>
                            <span class="text-gray-700">{{$participant->nom}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Le prenom du participant</span>
                            <span class="text-gray-700">{{$participant->prenom}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Numero du participant</span>
                            <span class="text-gray-700">{{$participant->numero}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Email du participant</span>
                            <span class="text-gray-700">{{$participant->email}}</span>
                        </li>
                    </ul>
                </div>
                    @endforeach

                
                
            </div>
             @include('partials.footer')
        </div>
        
       
    </div>


</x-app-layout>