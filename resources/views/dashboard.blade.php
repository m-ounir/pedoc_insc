<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accueil') }}
        </h2>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('+212 523480218 -- pedoc23@usms.ma') }}
      </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}
                      <div class="alert alert-light d-flex justify-content-center" role="alert" >
                          <a class="btn btn-outline-danger fw-bold fs-4" href="{{route('etatcivils.create')}}">Si vous avez lu les remarques ci-dessous, commencez l'inscription ici</a>
                      </div>
                    </div>
                    <div class="card text-center ">
                        <div class="card-header bg-danger ">
                            La plateforme
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text fs-5">Les réclamations reçues après la date limite de pré-candidature ne seront pas prises en considération.</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                        {{-- <div class="card-footer text-muted">
                          2 days ago
                        </div> --}}
                      </div>
                    <div class="card text-center mt-10">
                        <div class="card-header bg-danger ">
                            Informations personnelles
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text fs-5">Avant de postuler à une formation doctorale, le candidat est invité à remplir avec soin un formulaire contenant des informations personnelles essentielles,
                             qui permettront d'évaluer leur admissibilité et de faciliter le processus de candidature.</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                        {{-- <div class="card-footer text-muted">
                          2 days ago
                        </div> --}}
                      </div>
                    <div class="card text-center mt-10">
                        <div class="card-header bg-danger ">
                            Cursus universitaire
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text fs-5">Dans la section réservée aux pièces jointes de la candidature, il est impératif que le candidat Transmet 
                            des copies électroniques de ses diplômes, de son Curriculum Vitae (CV) ainsi que de sa Carte Nationale d'Identité Electronique , ses relevés de notes . Pour garantir une compatibilité avec notre système, ces documents doivent être enregistrés au format PDF. 
                            Il est essentiel de noter que la numérisation de la Carte Nationale d'Identité Electronique doit inclure les deux faces (recto et verso). Pour optimiser la lisibilité 
                            tout en minimisant la taille du fichier, il est recommandé d'utiliser une résolution moyenne lors de la numérisation.</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                        {{-- <div class="card-footer text-muted">
                          2 days ago
                        </div> --}}
                      </div>
                    <div class="card text-center mt-10">
                        <div class="card-header bg-danger ">
                            Diplômes étrangers
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text fs-5">En ce qui concerne les diplômes délivrés à l'étranger, il est essentiel que le candidat inclue une attestation d'équivalence officielle,
                             telle que publiée dans le bulletin officiel, au sein du même fichier PDF que celui contenant le diplôme concerné. Cette attestation d'équivalence est requise pour la validation de la candidature.</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                        {{-- <div class="card-footer text-muted">
                          2 days ago
                        </div> --}}
                      </div>
                    <div class="card text-center mt-10">
                        <div class="card-header bg-danger ">
                            Important
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text fs-5">1- Chaque candidat a la possibilité de sélectionner un maximum de trois sujets, et il est impératif de noter que toute modification ultérieure ne sera pas autorisée.</p>
                           <p class="card-text fs-5">  2- Il est primordial que tous les documents soumis soient parfaitement lisibles, correctement orientés et numérisés à l'aide d'un scanner, excluant ainsi toute possibilité d'acceptation de documents capturés à l'aide d'un appareil photo, tel qu'un téléphone.</p>
                           <p class="card-text fs-5"> 3- Conservez en mémoire que, lors de l'entretien oral, vous devrez présenter une version papier complète de votre dossier de candidature.</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                        {{-- <div class="card-footer text-muted">
                          2 days ago
                        </div> --}}
                      </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
