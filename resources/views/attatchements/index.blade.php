<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Pièces jointes ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="d-flex justify-content-center text-left bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-3 fw-bold">Votre documents :</h1>
                    @if ($attatchement)
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
                        <div class="card mb-4" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"><span class="fw-bold">CIN : </span> {{  pathinfo($attatchement->cin, PATHINFO_FILENAME) }}</li>
                              <li class="list-group-item"><span class="fw-bold">CV :</span>{{  pathinfo($attatchement->cv, PATHINFO_FILENAME) }}</li>
                              <li class="list-group-item"><span class="fw-bold">Bac :</span>{{  pathinfo($attatchement->bac, PATHINFO_FILENAME) }}</li>
                              <li class="list-group-item"><span class="fw-bold">Bac + 3 :</span> {{  pathinfo($attatchement->bac3, PATHINFO_FILENAME) }}</li>
                              <li class="list-group-item"><span class="fw-bold">Note Bac + 3 :</span> {{  pathinfo($attatchement->note_bac3, PATHINFO_FILENAME) }}</li>
                              <li class="list-group-item"><span class="fw-bold">Bac + 5 :</span> {{  pathinfo($attatchement->bac5, PATHINFO_FILENAME) }}</li>
                              <li class="list-group-item"><span class="fw-bold">Note Bac + 5 :</span>{{  pathinfo($attatchement->note_bac5, PATHINFO_FILENAME) }}</li>
                            </ul>
                          </div>
                        
                    @else
                        <p>No attatchement data available for this user.</p>
                    @endif
                    <form method="POST" action="{{ route('attatchements.destroy') }}">
                        @csrf
                        @method('DELETE')
                        <!-- Other form inputs and submit button -->
                        <a class="btn btn-outline-dark" href="{{route('bac5s.create')}}">Précédent </a>
                        <button class="btn btn-outline-success" type="submit">Ajouter les documents a nouveau</button>
                            <a class="btn btn-outline-info" href="{{route('choixes.create')}}">Suivant </a>   
      
                        {{-- <a href="{{route('choixes.destroy')}}"></a> --}}
                    </form>
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