<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Choix des axes-sujets') }}
        </h2>
    </x-slot>
    {{-- <a href="{{ route('etatcivils.edit',$etatcivil) }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent 
                    text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none
                     focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">Edit</a> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 justify-center row">
                    {{-- <form method="POST" action="{{ route('choixes.store')}}" class="row">
                       
                        @csrf  
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        @csrf 
                        @foreach ($formations as $frm)
                            <details class="mt-2 text-center row justify-content-center">

                                <input type="hidden" name="formation_id" value="{{$frm->id}}">

                                <summary class="fs-4">{{$frm->formation_nom}}</summary>
                                    <table class="table table-bordered .table-responsive-sm table-sm">
                                        <thead>
                                          <tr>
                                            <th scope="col">Axes/sujet</th>
                                            <th scope="col">Encadrant</th>
                                            <th scope="col">Etab</th>
                                            <th scope="col">votre choix</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($frm->axes_sujet as $axe)
                                                <tr>
                                                    <input type="hidden" name="axe_id" value="{{$axe->id}}">
                                                    <th scope="row">{{$axe->nom_axe}}</th>
                                                    <td>{{$axe->encadrant}}</td>
                                                    <td>Otto</td>
                                                    <td><input class="selection" type="checkbox" 
                                                        ></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                            </details>
                        @endforeach
                       <br> 
                </form>  --}}
                   {{-- <form method="POST" id="choix-form" action="{{ route('choixes.store')}}" class="row">
                        @csrf 
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" id="selected-axes" name="selected_axes">
                        @foreach ($formations as $frm)
                            <details class="mt-2 text-center row justify-content-center">
                                <input type="hidden" name="formation_id[]" value="{{ $frm->id }}">
                                
                                <summary class="fs-4">{{ $frm->formation_nom }}</summary>
                                <table class="table table-bordered .table-responsive-sm table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">Axes/sujet</th>
                                            <th scope="col">Encadrant</th>
                                            <th scope="col">Etab</th>
                                            <th scope="col">votre choix</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($frm->axes_sujet as $axe)
                                            <tr>
                                                <input type="hidden" name="axe_id[{{ $frm->id }}][]" value="{{ $axe->id }}">
                                                <th scope="row">{{ $axe->nom_axe }}</th>
                                                <td>{{ $axe->encadrant }}</td>
                                                <td>Otto</td>
                                                <td>
                                                    <input class="selection" type="checkbox" 
                                                    data-nom-axe="{{ $axe->id }}" name="selected_axes[{{ $frm->id }}][]">
                                                    <input class="selection" type="checkbox" 
                                                    data-nom-axe="{{ $axe->id }}" >
                                                    <input type="hidden" name="" value="selected_axes[{{ $frm->id }}][]">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </details>
                        @endforeach  --}}
                        <form method="POST" id="choix-form" action="{{ route('choixes.store')}}" class="row">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        @foreach ($formations as $frm)
                        <details class="mt-2 text-center row justify-content-center">
                            <input type="hidden" name="formation_id[]" value="{{ $frm->id }}">
                            <summary class="fs-4">{{ $frm->formation_nom }}</summary>
                            <table class="table table-bordered .table-responsive-sm table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Axes/sujet</th>
                                        <th scope="col">Encadrant</th>
                                        <th scope="col">Etab</th>
                                        <th scope="col">votre choix</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($frm->axes_sujet as $axe)
                                    <tr>
                                        <input type="hidden" name="axe_id[]" value="{{ $axe->id }}">
                                        <th scope="row">{{ $axe->nom_axe }}</th>
                                        <td>{{ $axe->encadrant }}</td>
                                        <td>Otto</td>
                                        <td>
                                            <input class="selection" type="checkbox" name="selected_choices[{{ $frm->id }}][{{ $axe->id }}]">
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </details>
                        @endforeach
                        
                    
                
                        <br> 
                        <br> 
                        <br> 

                        <a class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md 
                            font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700
                            active:bg-gray-900 focus:outline-none focus:ring-2
                            focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" href="{{route('attatchements.index')}}">Précédent </a>

                            <button class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md 
                                font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700
                                active:bg-gray-900 focus:outline-none focus:ring-2
                                focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                id="submit-form" type="submit">Suivant </button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        const selectedAxes = [];

        // Get all checkboxes with the 'checkbox' class
        const checkboxes = document.querySelectorAll(".selection");

        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener("change", function () {
                const nomAxe = this.getAttribute("data-nom-axe");
                console.log(nomAxe);
                if (this.checked) {
                    // If the checkbox is checked, add the nomAxe to the array
                    selectedAxes.push(nomAxe);
                } else {
                    // If the checkbox is unchecked, remove the nomAxe from the array
                    const index = selectedAxes.indexOf(nomAxe);
                    if (index !== -1) {
                        selectedAxes.splice(index, 1);
                    }
                }

                // You can display or manipulate the selectedAxes array as needed
                console.log(selectedAxes);
            });
        });
    </script> --}}
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
