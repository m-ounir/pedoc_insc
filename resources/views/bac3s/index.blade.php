<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bac + 3 ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" d-flex justify-content-center text-left bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="fw-bold mb-3">Informations du bac + 3</h1>
                    @if ($bac3)
                        <div class="card mb-4" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"><span class="fw-bold">Année :</span> {{ $bac3->annee_bac3 }}</li>
                              <li class="list-group-item"><span class="fw-bold">nombre d'années écoulées pour l'obtention du bac + 3 : </span> {{ $bac3->nombre_insc }}</li>
                              <li class="list-group-item"><span class="fw-bold">Etablisement : </span> {{ $bac3->etab_bac3 }}</li>
                              <li class="list-group-item"><span class="fw-bold">Diplome : </span>{{ $bac3->diplome_bac3 }}</li>
                              <li class="list-group-item"><span class="fw-bold">Spécialité : </span>{{ $bac3->specialite_bac3 }}</li>
                              <li class="list-group-item"><span class="fw-bold">Type diplome : </span> {{ $bac3->type_dip }}</li>
                              <li class="list-group-item"><span class="fw-bold">Moyenne diplome : </span>{{ $bac3->moyen_bac3 }}</li>
                              <li class="list-group-item"><span class="fw-bold">note s1 : </span>{{ $bac3->s1 }}</li>
                              <li class="list-group-item"><span class="fw-bold">note s2 : </span>{{ $bac3->s2 }}</li>
                              <li class="list-group-item"><span class="fw-bold">note s3 : </span>{{ $bac3->s3 }}</li>
                              <li class="list-group-item"><span class="fw-bold">note s4 : </span>{{ $bac3->s4 }}</li>
                              <li class="list-group-item"><span class="fw-bold">note s5 : </span>{{ $bac3->s5 }}</li>
                              <li class="list-group-item"><span class="fw-bold">note s6 : </span>{{ $bac3->s6 }}</li>
                            </ul>
                          </div>

                    @else
                        <p>No bac + 3 data available for this user.</p>
                    @endif
                    <a class="btn btn-outline-dark" href="{{route('bacs.create')}}">Précédent </a>
                      
                    <a class="btn btn-outline-success" href="{{route('bac3s.edit',$bac3)}}">Modifier votre bac + 3  </a>
                    <a class="btn btn-outline-info" href="{{route('bac5s.create')}}">Suivant </a>
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