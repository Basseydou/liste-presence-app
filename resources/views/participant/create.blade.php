<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter un participant') }}
        </h2>
    </x-slot>

    

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

 <div class="my-5">

    @foreach ($errors->all() as $error)
<span class="block text-red-500">{{ $error }}</span>
    @endforeach

    </div>



    <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">

    <form action="{{ route('participants.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-4 grid grid-cols-2 gap-4">
      <div class="flex flex-col">
        <label for="nom" value="nom du participant" class="mb-2 font-semibold">NOM</label>
        <input type="text" id="nom" name="nom" class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40" />
      </div>
      <div class="flex flex-col">
        <label for="prenom" value="Prenom du participant" class="mb-2 font-semibold">PRENOM</label>
        <input type="text"  id="prenom" name="prenom" class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40" />
      </div>
    </div>

    <div class="mb-4 flex flex-col">
      <label for="email" value="E-mail du participant" class="mb-2 font-semibold">Email address</label>
      <div class="relative">
        <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-2 top-2 h-5 w-5 text-slate-400" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
        </svg>
        <input type="email" id="email" name="email" class="w-full rounded-lg border border-slate-200 px-2 py-1 pl-8 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40" />
      </div>
    </div>
    <div class="mb-4 flex flex-col">
      <label for="numero" value="Numero du participant" class="mb-2 font-semibold">NUMERO</label>
      <input type="text" id="numero" name="numero" class="w-full max-w-[200px] rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40" />
    </div>
    <div class="flex">

      
      <x-button style="display: bolck ! important;" class="mt-5">Ajouter</x-button>

      </form>
       
    </div>
    </div>
  </div>

  @include('partials.footer')
</x-app-layout>