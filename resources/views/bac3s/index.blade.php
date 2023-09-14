<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bac') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Information du bac + 3</h1>
                    @if ($bac3)
                        <p>Annee : {{ $bac3->annee_bac3 }}</p>
                        <p>nombre d'inscription : {{ $bac3->nombre_insc }}</p>
                        <p>etablisement  : {{ $bac3->etab_bac3 }}</p>
                        <p>diplome : {{ $bac3->diplome_bac3 }}</p>
                        <p>specialite : {{ $bac3->specialite_bac3 }}</p>
                        <p>type diplome : {{ $bac3->type_dip }}</p>
                        <p>moyen diplome : {{ $bac3->moyen_bac3 }}</p>
                        <p>note s1 : {{ $bac3->s1 }}</p>
                        <p>note s2 : {{ $bac3->s2 }}</p>
                        <p>note s3 : {{ $bac3->s3 }}</p>
                        <p>note s4 : {{ $bac3->s5 }}</p>
                        <p>note s5 : {{ $bac3->s5 }}</p>
                        <p>note s6 : {{ $bac3->s6 }}</p>
                    @else
                        <p>No bac + 3 data available for this user.</p>
                    @endif

                    <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500
                     hover:text-gray-700 hover:border-gray-300 focus:outline-none
                      focus:text-gray-700 focus:border-gray-300
                       transition duration-150 ease-in-out" href="{{route('bac3s.edit',$bac3)}}">Modifier votre bac + 3  </a>
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