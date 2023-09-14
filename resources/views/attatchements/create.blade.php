<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Remplire les info bacalauriat') }}
        </h2>
    </x-slot>
    {{-- <a href="{{ route('etatcivils.edit',$etatcivil) }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent 
                    text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none
                     focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">Edit</a> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 justify-center row">
                    <form method="POST" action="{{ route('attatchements.store')}}" class="justify-content-center col-md-6 text-center">
                        {{-- @method('PUT')  define that we have update methos not insert  --}}
    
                        {{-- @csrf  generate token for the form o prevent multi submition  --}}
                        @csrf 

                        <input type="text" name="user_id" id="user_id" hidden="hidden" value="{{Auth::user()->id}}">
                        
                        <label class="block font-medium text-sm text-gray-700 mt-2" for="cin">Fichier CIN (recto/verso pdf) :  </label>
                        <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm " type="file" name="cin"  />
                        
                        <label class="block font-medium text-sm text-gray-700 mt-2" for="cv">Fichier CV (pdf) :  </label>
                        <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm " type="file" name="cv"  />
                        
                        <label class="block font-medium text-sm text-gray-700 mt-2" for="bac">Fichier BAC (pdf) :  </label>
                        <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm " type="file" name="bac"  />
                        
                        <label class="block font-medium text-sm text-gray-700 mt-2" for="bac3">Fichier BAC + 3 (pdf) :  </label>
                        <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm " type="file" name="bac3"  />
                        
                        <label class="block font-medium text-sm text-gray-700 mt-2" for="note_bac3">Fichier relevées des notes de S1 à S6 (pdf) :  </label>
                        <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm " type="file" name="note_bac3"  />
                        
                        <label class="block font-medium text-sm text-gray-700 mt-2" for="bac5">Fichier BAC + 5 (pdf) :  </label>
                        <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm " type="file" name="bac5"  />

                        <label class="block font-medium text-sm text-gray-700 mt-2" for="note_bac5">Fichier relevées des notes de S7 à S10 (pdf) : </label>
                        <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm " type="file" name="note_bac5"  />


                        
                        {{-- <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="sexe"  /> --}} 
                        
                        {{-- <label class="block font-medium text-sm text-gray-700 mt-2" for="mention">montion : </label>
                        <select name="situation_f" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mb-3">
                            <option value="Trés Bien" selected >Trés Bien </option>
                            <option value="Bien">Bien </option>
                            <option value="Marié">Assez Bien </option>
                            <option value="Marié">Passable </option>
                        </select> --}}

                        {{-- Auth::user()->name auth()->id() --}}
                       <br>

                       
                        <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md 
                            font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700
                            active:bg-gray-900 focus:outline-none focus:ring-2
                            focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-2" type="submit">ajouter </button>
                    </form>

                   {{-- <form action="{{ route('etat-civils.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="cin">CIN:</label>
                        <input type="text" name="cin" id="cin" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="code_masar">Code Masar:</label>
                        <input type="text" name="code_masar" id="code_masar" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

{{-- @extends('layouts.app')

@section('content')
    <h1>Add New Etat Civil</h1>
    
    <form action="{{ route('etat-civils.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cin">CIN:</label>
            <input type="text" name="cin" id="cin" class="form-control">
        </div>
        <div class="form-group">
            <label for="code_masar">Code Masar:</label>
            <input type="text" name="code_masar" id="code_masar" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection --}}
