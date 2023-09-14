<x-app-layout>
    {{-- @auth --}}
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Etablisement') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <a class="btn btn-success" href="{{route('etablisements.create')}}">Ajouter nouveau etablisement</a> <br>
                        <table>
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
                                        {{-- <td><a href="">Modifier</a></td> --}}
                                        <td><a href="{{route('etablisements.edit',$etab)}}">Modifier</a></td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    {{-- @else
        <div>You are not authenticated. Please log in.</div>
    @endauth --}}
</x-app-layout>


