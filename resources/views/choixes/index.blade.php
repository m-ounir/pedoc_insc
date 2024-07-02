<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Les choix :  ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-4 fw-bolder">Votre Choix :</h1>
                    @if ($data)
                    {{-- <embed src="data:{{ $mimeType }};base64,{{ $encodedData }}" type="{{ $mimeType }}" width="100%" height="600px" /> --}}
                        {{-- @foreach ($attatchement as $item)
                            <p hidden>{{ $deletedId = $item['id']}}</p>
                            <p>CIN : {{ $item['cin']  }}</p>
                            <p>CV : {{  $item['cv'] }}</p>
                            <p>BAC : {{  $item['bac'] }}</p>
                            <p>BAC + 3 : {{  $item['bac3'] }}</p>
                            <p>Notes BAC + 3 : {{  $item['note_bac3'] }}</p>
                            <p>BAC + 5 : {{  $item['bac5'] }}</p>
                            <p>Note BAC + 5 : {{  $item['note_bac5'] }}</p>
                        @endforeach --}}
                        
                        {{-- <p>$formation</p> --}}
                        <table class=" table table-bordered border border-3 border-dark table-responsive fs-5">
                            <thead>
                            <tr class=" border border-3 border-dark ">
                                <td>Sujets / axes</td>
                                <td>Formation doctorale</td>
                                <td>Etablisement</td>
                            </tr>
                            </thead>
                            <tbody>
                                {{-- <div>{{$data}}</div> --}}
                                @foreach ($data as $item)
                                    <tr class=" border-dark">
                                        <td> {{ $item->nom_axe }}</td>
                                        <td> {{ $item->formation_nom }}</td>
                                        <td> {{ $item->etab }}</td>
                                    </tr>
                                @endforeach
            
                            </tbody>
                            
                        </table>
                        {{-- @foreach ($data as $item)
                            <div>
                                <p>Formation Name: {{ $item->formation_nom }}</p>
                                <p>Selected Axis: {{ $item->nom_axe }}</p>
                                <p>Selected Axis: {{ $item->id }}</p>

                                <div class="card mb-4" style="width: 18rem;">
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item"><span class="fw-bold"></span> {{ $bac->annee_bac }}</li>
                                      <li class="list-group-item"><span class="fw-bold">Type :</span> {{ $bac->type_bac }}</li>
                                      <li class="list-group-item"><span class="fw-bold">Moyen :</span> {{ $bac->moyen }}</li>
                                      <li class="list-group-item"><span class="fw-bold">Montion :</span> {{ $bac->mention }}</li>
                                    </ul>
                                  </div>

                            </div>
                        @endforeach --}}
                        {{-- <p>$axes_sujet</p> --}}
                        
                    @else
                        <p>No choix data available for this user.</p>
                    @endif
                    <a class="btn btn-outline-dark" href="{{route('attatchements.create')}}">Précédent </a>
                    
                    <a href="{{URL('/pagetoprint')}}" class="btn btn-outline-success" type="submit">Imprimer votre fiche d'inscription</a> 
                    {{-- <a class="btn btn-outline-info" href="{{route('bac3s.create')}}">Suivant </a> --}}
                    {{-- <form method="POST" action="{{ route('choixes.destroy') }}">
                        @csrf
                        @method('DELETE')
                        <!-- Other form inputs and submit button -->
                        <button class="btn btn-outline-black" type="submit">choix a nouveau</button> --}}
                    {{-- </form> --}}
                    {{-- <form method="DELETE" action="{{route('attatchements.destroy' , $deletedId)}}" >
                        @csrf
                        @method('DELETE')
                        <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md 
                        font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700
                        active:bg-gray-900 focus:outline-none focus:ring-2
                        focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-2" type="submit"
                        onclick="alert('es-tu sûr de télécharger à nouveau les fichiers')"
                        >Ajouter les fichier à nouveau </button>
                    </form> --}}
                    {{-- <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500
                     hover:text-gray-700 hover:border-gray-300 focus:outline-none
                      focus:text-gray-700 focus:border-gray-300
                       transition duration-150 ease-in-out"  
                       href="{{route('attatchements.edit',$deletedId)}}">Ajouter les fichier à nouveau </a> --}}
                    {{-- <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                    </div> --}}
                    
                    {{-- <a class="btn btn-success" href="{{route('etablisements.create')}}">Ajouter nouveau etablisement</a> <br> --}}
                    {{-- <table>
                        <thead>
                            <tr>
                                <th>Etablisement </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($etablisements  as $etab)
                                <tr>
                                    <td>{{$etab->etab_nom}} </td>
                                    <td><a href="">Modifier</a></td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>