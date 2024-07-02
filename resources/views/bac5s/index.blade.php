<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bac + 5') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="d-flex justify-content-center text-left bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="fw-bold mb-3">Informations du bac + 5</h1>
                    @if ($bac5)
                       
                        <div class="card mb-4" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"><span class="fw-bold">Année :</span> {{ $bac5->annee_bac5 }}</li>
                              <li class="list-group-item"><span class="fw-bold">Type de diplome : </span> {{ $bac5->type_dip }}</li>
                              <li class="list-group-item"><span class="fw-bold">Etablissement : </span> {{  $bac5->etab_bac5 }}</li>
                              <li class="list-group-item"><span class="fw-bold">Diplome : </span> {{ $bac5->diplome_bac5 }}</li>
                              <li class="list-group-item"><span class="fw-bold">Spécialité : </span>{{ $bac5->specialite_bac5 }}</li>
                              <li class="list-group-item"><span class="fw-bold">Moyenne diplome : </span>{{  $bac5->moyen_bac5 }}</li>
                              <li class="list-group-item"><span class="fw-bold">note s7 : </span>{{ $bac5->s7 }}</li>
                              <li class="list-group-item"><span class="fw-bold">note s8 : </span>{{ $bac5->s8 }}</li>
                              <li class="list-group-item"><span class="fw-bold">note s9 : </span>{{ $bac5->s9 }}</li>
                              <li class="list-group-item"><span class="fw-bold">note s10 : </span>{{  $bac5->s10 }}</li>
                            
                            </ul>
                          </div>
                    @else
                        <p>No bac + 5 data available for this user.</p>
                    @endif
                    <a class="btn btn-outline-dark" href="{{route('bac3s.create')}}">Précédent </a>
                    <a class="btn btn-outline-success" href="{{route('bac5s.edit',$bac5)}}">Modifier votre bac + 5  </a>
                    <a class="btn btn-outline-info" href="{{route('attatchements.create')}}">Suivant </a>
      
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