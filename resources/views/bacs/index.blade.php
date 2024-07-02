<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bac') }}
        </h2>
    </x-slot>

    <div class="py-12  ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="d-flex justify-content-center text-left bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-3 fw-bold">Informations du bac :</h1>
                    @if ($bac)
                        {{-- <p>Annee : {{ $bac->annee_bac }}</p>
                        <p>type : {{ $bac->type_bac }}</p>
                        <p>moyen : {{ $bac->moyen }}</p>
                        <p>montion : {{ $bac->mention }}</p> --}}

                        <div class="card mb-4" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"><span class="fw-bold">Année :</span> {{ $bac->annee_bac }}</li>
                              <li class="list-group-item"><span class="fw-bold">Type :</span> {{ $bac->type_bac }}</li>
                              <li class="list-group-item"><span class="fw-bold">Moyenne :</span> {{ $bac->moyen }}</li>
                              <li class="list-group-item"><span class="fw-bold">Mention :</span> {{ $bac->mention }}</li>
                            </ul>
                          </div>
                    @else
                        <p class="mb-4">No bac data available for this user.</p>
                    @endif
                    <a class="btn btn-outline-dark" href="{{route('etatcivils.create')}}">Précédent </a>   
                    <a class="btn btn-outline-success" href="{{route('bacs.edit',$bac)}}">Modifier votre bac </a>
                    <a class="btn btn-outline-info" href="{{route('bac3s.create')}}">Suivant </a>
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