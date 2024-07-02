<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Remplire l\'etat civil') }}
        </h2>
    </x-slot>
    {{-- <a href="{{ route('etatcivils.edit',$etatcivil) }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent 
                    text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none
                     focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">Edit</a> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="alert alert-info " role="alert">
                {{-- <h3 class="fs-4 align-self-center">Pôle doctoral de l’université Sultan Moulay Slimane.</h3> --}}
                <p>Les informations recueillies sur le site Pré-candidature Pedoc font l’objet d’un traitement destiné à la gestion du doctorat. 
                    Les destinataires des données sont la présidence de l'université USMS, le ministère de tutelle, ONOUSC , CNRST
                     conformément à la loi n° 09-08 promulguée par le Dahir 1-09-15 du 18 février 2009, 
                     relative à la protection des personnes physiques à l'égard du traitement des données à caractère personnel,
                      vous bénéficiez d’un droit d’accès, de rectification et d’opposition aux informations qui vous concernent, 
                      que vous pouvez exercer en vous adressant au service de doctorat <strong>(  fixe : +212 523480218, mail : pedoc23@usms.ma)</strong>.
                       Vous pouvez également, pour des motifs légitimes,
                        vous opposer à ce que les données qui vous concernent fassent l’objet d’un traitement. 
                       Ce traitement a été notifié et autorisé par la CNDP au titre de l'autorisation " A-558/2022 du  20/07/2022 "</p>
              </div>
            <div class=" d-flex justify-content-center text-center bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('etatcivils.store')}}" class="justify-content-center row  text-center">
                        {{-- @method('PUT')  define that we have update methos not insert  --}}
    
                        {{-- @csrf  generate token for the form o prevent multi submition  --}}
                        @csrf 
                        <div class="col-md-6">
                            <label class="block font-medium text-sm text-gray-700 mt-3" for="cin">CIN  : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="cin"  />
                            @error('cin')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-3" for="code_masar">CNE : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="code_masar"  />
                            @error('code_masar')
                            <span class="text-danger">{{ $message }}</span>
                             @enderror 
                        
                            <label class="block font-medium text-sm text-gray-700 mt-3" for="date_naissance">Date naissance :  </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="date" name="date_naissance"  />
                            @error('date_naissance')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-3" for="nom_fr">Nom  : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="nom_fr"  />
                            @error('nom_fr')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-3" for="prenom_fr">Prénom  : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="prenom_fr"  />
                            @error('prenom_fr')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror    

                            <label class="block font-medium text-sm text-gray-700 mt-3" for="nom_ar">Nom en arabe : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="nom_ar"  />
                            @error('nom_ar')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-3" for="prenom_ar">Prénom en arabe : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="prenom_ar"  />
                            @error('prenom_ar')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-3" for="lieu_nais_fr">Lieu de naissance : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="lieu_nais_fr"  />
                            @error('lieu_nais_fr')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="col-md-6">
                            <label class="block font-medium text-sm text-gray-700 mt-3" for="lieu_nais_ar">Lieu de naissance en arabe : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="lieu_nais_ar"  />
                            @error('lieu_nais_ar')
                                <span class="text-danger">{{ $message }}</span>
                             @enderror


                            <label class="block font-medium text-sm text-gray-700 mt-3" for="pays_nais">Pays naissance : </label> 
                            {{-- <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="pays_nais"  /> --}} 

                            <select name="pays_nais" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">

                                <option value="France" >France </option>
                                <option value="Afghanistan">Afghanistan </option>
                                <option value="Afrique_Centrale">Afrique_Centrale </option>
                                <option value="Afrique_du_sud">Afrique_du_Sud </option>
                                <option value="Albanie">Albanie </option>
                                <option value="Algerie">Algerie </option>
                                <option value="Allemagne">Allemagne </option>
                                <option value="Andorre">Andorre </option>
                                <option value="Angola">Angola </option>
                                <option value="Anguilla">Anguilla </option>
                                <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                                <option value="Argentine">Argentine </option>
                                <option value="Armenie">Armenie </option>
                                <option value="Australie">Australie </option>
                                <option value="Autriche">Autriche </option>
                                <option value="Azerbaidjan">Azerbaidjan </option>
                                
                                <option value="Bahamas">Bahamas </option>
                                <option value="Bangladesh">Bangladesh </option>
                                <option value="Barbade">Barbade </option>
                                <option value="Bahrein">Bahrein </option>
                                <option value="Belgique">Belgique </option>
                                <option value="Belize">Belize </option>
                                <option value="Benin">Benin </option>
                                <option value="Bermudes">Bermudes </option>
                                <option value="Bielorussie">Bielorussie </option>
                                <option value="Bolivie">Bolivie </option>
                                <option value="Botswana">Botswana </option>
                                <option value="Bhoutan">Bhoutan </option>
                                <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                                <option value="Bresil">Bresil </option>
                                <option value="Brunei">Brunei </option>
                                <option value="Bulgarie">Bulgarie </option>
                                <option value="Burkina_Faso">Burkina_Faso </option>
                                <option value="Burundi">Burundi </option>
                                
                                <option value="Caiman">Caiman </option>
                                <option value="Cambodge">Cambodge </option>
                                <option value="Cameroun">Cameroun </option>
                                <option value="Canada">Canada </option>
                                <option value="Canaries">Canaries </option>
                                <option value="Cap_vert">Cap_Vert </option>
                                <option value="Chili">Chili </option>
                                <option value="Chine">Chine </option>
                                <option value="Chypre">Chypre </option>
                                <option value="Colombie">Colombie </option>
                                <option value="Comores">Colombie </option>
                                <option value="Congo">Congo </option>
                                <option value="Congo_democratique">Congo_democratique </option>
                                <option value="Cook">Cook </option>
                                <option value="Coree_du_Nord">Coree_du_Nord </option>
                                <option value="Coree_du_Sud">Coree_du_Sud </option>
                                <option value="Costa_Rica">Costa_Rica </option>
                                <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                                <option value="Croatie">Croatie </option>
                                <option value="Cuba">Cuba </option>
                                
                                <option value="Danemark">Danemark </option>
                                <option value="Djibouti">Djibouti </option>
                                <option value="Dominique">Dominique </option>
                                
                                <option value="Egypte">Egypte </option>
                                <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                                <option value="Equateur">Equateur </option>
                                <option value="Erythree">Erythree </option>
                                <option value="Espagne">Espagne </option>
                                <option value="Estonie">Estonie </option>
                                <option value="Etats_Unis">Etats_Unis </option>
                                <option value="Ethiopie">Ethiopie </option>
                                
                                <option value="Falkland">Falkland </option>
                                <option value="Feroe">Feroe </option>
                                <option value="Fidji">Fidji </option>
                                <option value="Finlande">Finlande </option>
                                <option value="France">France </option>
                                
                                <option value="Gabon">Gabon </option>
                                <option value="Gambie">Gambie </option>
                                <option value="Georgie">Georgie </option>
                                <option value="Ghana">Ghana </option>
                                <option value="Gibraltar">Gibraltar </option>
                                <option value="Grece">Grece </option>
                                <option value="Grenade">Grenade </option>
                                <option value="Groenland">Groenland </option>
                                <option value="Guadeloupe">Guadeloupe </option>
                                <option value="Guam">Guam </option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernesey">Guernesey </option>
                                <option value="Guinee">Guinee </option>
                                <option value="Guinee_Bissau">Guinee_Bissau </option>
                                <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                                <option value="Guyana">Guyana </option>
                                <option value="Guyane_Francaise ">Guyane_Francaise </option>
                                
                                <option value="Haiti">Haiti </option>
                                <option value="Hawaii">Hawaii </option>
                                <option value="Honduras">Honduras </option>
                                <option value="Hong_Kong">Hong_Kong </option>
                                <option value="Hongrie">Hongrie </option>
                                
                                <option value="Inde">Inde </option>
                                <option value="Indonesie">Indonesie </option>
                                <option value="Iran">Iran </option>
                                <option value="Iraq">Iraq </option>
                                <option value="Irlande">Irlande </option>
                                <option value="Islande">Islande </option>
                                <option value="Israel">Israel </option>
                                <option value="Italie">italie </option>
                                
                                <option value="Jamaique">Jamaique </option>
                                <option value="Jan Mayen">Jan Mayen </option>
                                <option value="Japon">Japon </option>
                                <option value="Jersey">Jersey </option>
                                <option value="Jordanie">Jordanie </option>
                                
                                <option value="Kazakhstan">Kazakhstan </option>
                                <option value="Kenya">Kenya </option>
                                <option value="Kirghizstan">Kirghizistan </option>
                                <option value="Kiribati">Kiribati </option>
                                <option value="Koweit">Koweit </option>
                                
                                <option value="Laos">Laos </option>
                                <option value="Lesotho">Lesotho </option>
                                <option value="Lettonie">Lettonie </option>
                                <option value="Liban">Liban </option>
                                <option value="Liberia">Liberia </option>
                                <option value="Liechtenstein">Liechtenstein </option>
                                <option value="Lituanie">Lituanie </option>
                                <option value="Luxembourg">Luxembourg </option>
                                <option value="Lybie">Lybie </option>
                                
                                <option value="Macao">Macao </option>
                                <option value="Macedoine">Macedoine </option>
                                <option value="Madagascar">Madagascar </option>
                                <option value="Madère">Madère </option>
                                <option value="Malaisie">Malaisie </option>
                                <option value="Malawi">Malawi </option>
                                <option value="Maldives">Maldives </option>
                                <option value="Mali">Mali </option>
                                <option value="Malte">Malte </option>
                                <option value="Man">Man </option>
                                <option value="Mariannes du Nord">Mariannes du Nord </option>
                                <option value="Maroc" selected="selected">Maroc </option>
                                <option value="Marshall">Marshall </option>
                                <option value="Martinique">Martinique </option>
                                <option value="Maurice">Maurice </option>
                                <option value="Mauritanie">Mauritanie </option>
                                <option value="Mayotte">Mayotte </option>
                                <option value="Mexique">Mexique </option>
                                <option value="Micronesie">Micronesie </option>
                                <option value="Midway">Midway </option>
                                <option value="Moldavie">Moldavie </option>
                                <option value="Monaco">Monaco </option>
                                <option value="Mongolie">Mongolie </option>
                                <option value="Montserrat">Montserrat </option>
                                <option value="Mozambique">Mozambique </option>
                                
                                <option value="Namibie">Namibie </option>
                                <option value="Nauru">Nauru </option>
                                <option value="Nepal">Nepal </option>
                                <option value="Nicaragua">Nicaragua </option>
                                <option value="Niger">Niger </option>
                                <option value="Nigeria">Nigeria </option>
                                <option value="Niue">Niue </option>
                                <option value="Norfolk">Norfolk </option>
                                <option value="Norvege">Norvege </option>
                                <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                                <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>
                                
                                <option value="Oman">Oman </option>
                                <option value="Ouganda">Ouganda </option>
                                <option value="Ouzbekistan">Ouzbekistan </option>
                                
                                <option value="Pakistan">Pakistan </option>
                                <option value="Palau">Palau </option>
                                <option value="Palestine">Palestine </option>
                                <option value="Panama">Panama </option>
                                <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                                <option value="Paraguay">Paraguay </option>
                                <option value="Pays_Bas">Pays_Bas </option>
                                <option value="Perou">Perou </option>
                                <option value="Philippines">Philippines </option>
                                <option value="Pologne">Pologne </option>
                                <option value="Polynesie">Polynesie </option>
                                <option value="Porto_Rico">Porto_Rico </option>
                                <option value="Portugal">Portugal </option>
                                
                                <option value="Qatar">Qatar </option>
                                
                                <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                                <option value="Republique_Tcheque">Republique_Tcheque </option>
                                <option value="Reunion">Reunion </option>
                                <option value="Roumanie">Roumanie </option>
                                <option value="Royaume_Uni">Royaume_Uni </option>
                                <option value="Russie">Russie </option>
                                <option value="Rwanda">Rwanda </option>
                                
                                <option value="Sahara Occidental">Sahara Occidental </option>
                                <option value="Sainte_Lucie">Sainte_Lucie </option>
                                <option value="Saint_Marin">Saint_Marin </option>
                                <option value="Salomon">Salomon </option>
                                <option value="Salvador">Salvador </option>
                                <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                                <option value="Samoa_Americaine">Samoa_Americaine </option>
                                <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                                <option value="Senegal">Senegal </option>
                                <option value="Seychelles">Seychelles </option>
                                <option value="Sierra Leone">Sierra Leone </option>
                                <option value="Singapour">Singapour </option>
                                <option value="Slovaquie">Slovaquie </option>
                                <option value="Slovenie">Slovenie</option>
                                <option value="Somalie">Somalie </option>
                                <option value="Soudan">Soudan </option>
                                <option value="Sri_Lanka">Sri_Lanka </option>
                                <option value="Suede">Suede </option>
                                <option value="Suisse">Suisse </option>
                                <option value="Surinam">Surinam </option>
                                <option value="Swaziland">Swaziland </option>
                                <option value="Syrie">Syrie </option>
                                
                                <option value="Tadjikistan">Tadjikistan </option>
                                <option value="Taiwan">Taiwan </option>
                                <option value="Tonga">Tonga </option>
                                <option value="Tanzanie">Tanzanie </option>
                                <option value="Tchad">Tchad </option>
                                <option value="Thailande">Thailande </option>
                                <option value="Tibet">Tibet </option>
                                <option value="Timor_Oriental">Timor_Oriental </option>
                                <option value="Togo">Togo </option>
                                <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                                <option value="Tristan da cunha">Tristan de cuncha </option>
                                <option value="Tunisie">Tunisie </option>
                                <option value="Turkmenistan">Turmenistan </option>
                                <option value="Turquie">Turquie </option>
                                
                                <option value="Ukraine">Ukraine </option>
                                <option value="Uruguay">Uruguay </option>
                                
                                <option value="Vanuatu">Vanuatu </option>
                                <option value="Vatican">Vatican </option>
                                <option value="Venezuela">Venezuela </option>
                                <option value="Vierges_Americaines">Vierges_Americaines </option>
                                <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                                <option value="Vietnam">Vietnam </option>
                                
                                <option value="Wake">Wake </option>
                                <option value="Wallis et Futuma">Wallis et Futuma </option>
                                
                                <option value="Yemen">Yemen </option>
                                <option value="Yougoslavie">Yougoslavie </option>
                                
                                <option value="Zambie">Zambie </option>
                                <option value="Zimbabwe">Zimbabwe </option>
                                
                            </select>
                            @error('pays_nais')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                            <label class="block font-medium text-sm text-gray-700 mt-3" for="adress">Adresse : </label>
                            <textarea class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"  name="adress"  ></textarea>
                            @error('adress')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-3" for="ville">Ville  : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="ville"  />
                            @error('ville')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-3" for="tel">Tel : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="tel"  />
                            @error('tel')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="block font-medium text-sm text-gray-700 mt-3" for="fonction">Fonction : </label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="fonction"  />
                            @error('fonction')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            {{-- <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="sitation_f"  /> --}}
                            <label class="block font-medium text-sm text-gray-700 mt-3" for="sexe">Genre : </label>
                            <select name="sexe" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option value="Masculin" selected >Masculin </option>
                                <option value="Féminin">Féminin </option>
                            </select>
                            @error('sexe')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            {{-- <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="sexe"  /> --}}
                            
                            <label class="block font-medium text-sm text-gray-700 mt-3" for="situation_f">Situation familiale : </label>
                            <select name="situation_f" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mb-3">
                                <option value="Célibataire" selected >Célibataire </option>
                                <option value="Marié">Marié(e) </option>
                            </select>
                            @error('situation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <input type="text" name="user_id" id="user_id" hidden="hidden" value="{{Auth::user()->id}}">
                        {{-- Auth::user()->name auth()->id() --}}
                        <br>
                        <div>
                            <a class="btn btn-outline-info" href="{{route('dashboard')}}">Précédent </a>
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
