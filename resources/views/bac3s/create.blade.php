<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Remplire les info licence ') }}
        </h2>
    </x-slot>
    {{-- <a href="{{ route('etatcivils.edit',$etatcivil) }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent 
                    text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none
                     focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">Edit</a> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="alert alert-danger text-center" role="alert">
                <h4 class="fw-bold fs-5 mb-2"> : الإجازة 4 سنوات </h4>
                <p>S1 = المعدل المحصل عليه في السنة الأولى</p>
                <p>S2 = المعدل المحصل عليه في السنة الأولى</p>
                <p>S3 = المعدل المحصل عليه في السنة الثانية</p>
                <p>S4 = المعدل المحصل عليه في السنة الثانية</p>
                <p>S5 = (3éme année  + 4éme année  / 2) جمع المعدل المحصل عليه في السنة الثالثة و الرابعة مقسوم على اثنان</p>
                <p>S6 =  (3éme année  + 4éme année / 2)جمع المعدل المحصل عليه في السنة الثالثة و الرابعة مقسوم على اثنان</p>
                <h4 class="fw-bold fs-5 mb-2"> : سلك المهندسين  </h4>
                <p>S1 = المعدل المحصل عليه في السنة الأولى</p>
                <p>S2 = المعدل المحصل عليه في السنة الأولى</p>
                <p>S3 = المعدل المحصل عليه في السنة الثانية</p>
                <p>S4 = المعدل المحصل عليه في السنة الثانية</p>
                <p>S5 = المعدل المحصل عليه في السنة الثالثة </p>
                <p>S6 = المعدل المحصل عليه في السنة الثالثة </p>
              </div>
            <div class="d-flex justify-content-center text-left bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-6 text-gray-900 justify-center row">
                    <form method="POST" action="{{ route('bac3s.store')}}" class="justify-content-center row  text-center">
                        {{-- @method('PUT')  define that we have update methos not insert  --}}
    
                        {{-- @csrf  generate token for the form o prevent multi submition  --}}
                        @csrf 
                        <div class="col-md-6">
                            <input type="text" name="user_id" id="user_id" hidden="hidden" value="{{Auth::user()->id}}">
                            
                            <label class="block font-medium text-sm text-gray-700 mt-2" for="annee_bac3">Date d'obtention bac + 3  :  </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm " type="date" name="annee_bac3"  />
                            @error('annee_bac3')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="nombre_insc">nombre d'années écoulées pour l'obtention du bac + 3 : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="number" name="nombre_insc"  />
                            @error('nombre_insc')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="etab_bac3">Etablissement bac + 3  : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="etab_bac3"  />
                            @error('etab_bac3')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="diplome_bac3">diplome bac + 3  : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="diplome_bac3"  />
                            @error('diplome_bac3')
                            <span class="text-danger">{{ $message }}</span>
                             @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="specialite_bac3">Spécialité bac + 3  : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="specialite_bac3"  />
                            @error('specialite_bac3')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="type_dip">Type de diplome  : </label>
                        <select name="type_dip" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mb-2">
                            <option value="Marocain" selected >Marocain </option>
                            <option value="Etranger">Etranger </option>
                            
                        </select>
                            @error('type_dip')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="moyen_bac3">Moyenne  bac + 3 : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="moyen_bac3"  />
                            @error('moyen_bac3')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="s1"> Note S1 : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="s1"  />
                            @error('s1')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="s2"> Note S2 : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="s2"  />
                            @error('s2')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="s3"> Note S3 : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="s3"  />
                            @error('s3')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="s4"> Note S4 : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="s4"  />
                            @error('s4')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="s5"> Note S5 : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="s5"  />
                            @error('s5')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="s6"> Note S6 : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="s6"  />
                            @error('s6')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror    

                            
                            {{-- <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="sexe"  /> --}} 
                            
                            <label class="block font-medium text-sm text-gray-700 mt-2" for="montion">mention : </label>
                            <select name="montion" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mb-3">
                                <option value="Trés Bien" selected >Trés Bien </option>
                                <option value="Bien">Bien </option>
                                <option value="Assez Bien">Assez Bien </option>
                                <option value="Passable">Passable </option>
                            </select>
                            @error('montion')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            {{-- Auth::user()->name auth()->id() --}}
                            <br>

                        </div>
                        <div class="mt-3">
                            <a class="btn btn-outline-info" href="{{route('bacs.index')}}">Précédent </a>

                            <button class="btn btn-outline-success" type="submit">Suivant </button>

                        </div>
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
