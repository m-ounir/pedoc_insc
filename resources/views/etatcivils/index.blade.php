<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Etat civil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="d-flex justify-content-center text-left bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-3 fw-bold"> Etatcivil :</h1>
                    @if ($etatcivil)
                        
                        <div class="card mb-4" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"><span class="fw-bold">Cin :</span> {{ $etatcivil->cin }}</li>
                              <li class="list-group-item"><span class="fw-bold">Nom :</span> {{ $etatcivil->nom_fr }}</li>
                              <li class="list-group-item"><span class="fw-bold">Prénom :</span>{{ $etatcivil->prenom_fr }}</li>
                              <li class="list-group-item"><span class="fw-bold">Nom arabe  :</span>{{ $etatcivil->nom_ar }}</li>
                              <li class="list-group-item"><span class="fw-bold">Prénom arabe  :</span>{{ $etatcivil->prenom_ar }}</li>
                              <!-- <li class="list-group-item"><span class="fw-bold">Nom arabe  :</span>{{ $etatcivil->nom_ar }}</li> -->
                              <li class="list-group-item"><span class="fw-bold">Lieu de naissance  :</span>{{ $etatcivil->lieu_nais_fr }}</li>
                              <li class="list-group-item"><span class="fw-bold">Lieu de naissance arabe  :</span>{{ $etatcivil->lieu_nais_ar }}</li>
                              <li class="list-group-item"><span class="fw-bold">Pays de naissance :</span>{{ $etatcivil->pays_nais }}</li>
                              <li class="list-group-item"><span class="fw-bold">Adresse :</span>{{ $etatcivil->adress }}</li>
                              <li class="list-group-item"><span class="fw-bold">Ville :</span>{{ $etatcivil->ville }}</li>
                              <li class="list-group-item"><span class="fw-bold">Tel :</span>{{ $etatcivil->tel }}</li>
                              <li class="list-group-item"><span class="fw-bold">Fonction :</span>{{ $etatcivil->fonction }}</li>
                              <li class="list-group-item"><span class="fw-bold">Situation familiale :</span>{{ $etatcivil->situation_f }}</li>
                              <li class="list-group-item"><span class="fw-bold">Genre :</span>{{ $etatcivil->sexe }}</li>
                            </ul>
                          </div>
                    @else
                        <p>No Etatcivil data available for the authenticated user.</p>
                    @endif

                    <a class="btn btn-outline-success" href="{{route('etatcivils.edit',$etatcivil)}}">Modifier votre etat civil </a>
                    <a class="btn btn-outline-info" href="{{route('bacs.create')}}">Suivant </a>
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