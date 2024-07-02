<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Remplire les info master ') }}
        </h2>
    </x-slot>
    {{-- <a href="{{ route('etatcivils.edit',$etatcivil) }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent 
                    text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none
                     focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">Edit</a> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="alert alert-danger text-center" role="alert">
                <h4 class="fw-bold fs-5 mb-2 mt-2"> : CEA بالنسبة لحاملي شهادة استكمال الدروس   </h4>
                <p>S7 = المعدل المحصل عليه في شهادة استكمال  الدروس </p>
                <p>S8 = المعدل المحصل عليه في شهادة استكمال  الدروس </p>
                <p>S9 = المعدل المحصل عليه في شهادة استكمال  الدروس </p>
                <p>S10 = المعدل المحصل عليه في شهادة استكمال  الدروس </p>
                <h4 class="fw-bold fs-5 mb-2 mt-2"> : DESA  بالنسبة لحاملي شهادةالدراسات العليا المعمقة     </h4>
                <p>S7 = المعدل المحصل عليه في السنة الأولى</p>
                <p>S8 = المعدل المحصل عليه في السنة الأولى</p>
                <p>S9 = المعدل المحصل عليه في السنة الثانية</p>
                <p>S10 = المعدل المحصل عليه في السنة الثانية</p>
                {{-- <p>S2 = المعدل المحصل عليه في السنة الأولى</p>
                <p>S3 = المعدل المحصل عليه في السنة الثانية</p>
                <p>S4 = المعدل المحصل عليه في السنة الثانية</p>
                <p>S5 = (année 3  + année 4 / 2) جمع المعدل المحصل عليه في السنة الثالثة و الرابعة مقسوم على اثنان</p>
                <p>S6 =  (année 3  + année 4 / 2)جمع المعدل المحصل عليه في السنة الثالثة و الرابعة مقسوم على اثنان</p> --}}
                <h4 class="fw-bold fs-5 mb-2 mt-2"> : سلك المهندسين  </h4>
                <p>S7 = المعدل المحصل عليه في السنة الرابعة</p>
                <p>S8 = المعدل المحصل عليه في السنة الرابعة</p>
                <p>S9 = المعدل المحصل عليه في السنة الخامسة</p>
                <p>S10 = المعدل المحصل عليه في السنة الخامسة</p>
              </div>
            <div class=" d-flex justify-content-center text-left bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 justify-center row">
                    <form method="POST" action="{{ route('bac5s.store')}}" class="justify-content-center row  text-center">
                        {{-- @method('PUT')  define that we have update methos not insert  --}}
    
                        {{-- @csrf  generate token for the form o prevent multi submition  --}}
                        @csrf 
                        <div class="col-md-6">
                            <input type="text" name="user_id" id="user_id" hidden="hidden" value="{{Auth::user()->id}}">
                            
                            <label class="block font-medium text-sm text-gray-700 mt-2" for="annee_bac5">Date d'obtention bac + 5  :  </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm " type="date" name="annee_bac5"  />
                            @error('annee_bac5')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="type_dip">Type de diplome  : </label>
                            <select name="type_dip" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm ">
                                <option value="Marocain" selected >Marocain </option>
                                <option value="Etranger">Etranger </option>
                                
                            </select>
                            @error('type_dip')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="etab_bac5">Etablissement bac + 5  : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="etab_bac5"  />
                            @error('etab_bac5')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="diplome_bac5">diplome bac + 5  : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="diplome_bac5"  />
                            @error('diplome_bac5')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="specialite_bac5">Spécialité bac + 5  : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="specialite_bac5"  />
                            @error('specialite_bac5')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="moyen_bac5">Moyenne bac + 5 : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="moyen_bac5"  />
                            @error('moyen_bac5')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="s7">S7 : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="s7"  />
                            @error('s7')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="s8">S8 : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="s8"  />
                            @error('s8')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="s9">S9 : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="s9"  />
                            @error('s9')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-2" for="s10">S10 : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="s10"  />
                            @error('s10')
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
                            
                            <a class="btn btn-outline-info" href="{{route('bac3s.index')}}">Précédent </a>

                            {{-- <a class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md 
                            font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700
                            active:bg-gray-900 focus:outline-none focus:ring-2
                            focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" href="{{route('bac3s.index')}}">Précédent </a> --}}

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
