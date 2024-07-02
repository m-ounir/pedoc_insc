 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/pdf.css" rel="stylesheet">
    <style>
        * { font-family: DejaVu Sans, sans-serif; }
    </style>
    <title>desc</title>
</head>
<body style="margin: 0;padding: 0;">
    <header class="mb-5"  >
        <h2 style="text-align: center;">UNIVERSITÈ SULTAN MOULAY SLIMANE</h2>
        <h3 style="text-align: center;">FICHE DE PRE-CANDIDATURE AUX FORMATOINS DOCTORALES 2023-2024</h3>

        <br>
        {{-- <img classs="" src="{{ URL('/img/pedoc.png')}}" alt="">  --}}
    </header>
    <table style="padding: 4px;width: 100%;">
        <tbody>
            <tr style="vertical-align:middle;">
                <td style="text-align: left;width:140px">Nom et Prénom</td>
                <td style="text-align: center;width:20px">:</td>
                <td style="font-size:15;">{{ $etatcivil->nom_fr }} {{ $etatcivil->prenom_fr }}</td>
            </tr>
            <tr style="vertical-align:middle;">
                <td style="text-align: left;width:140px">CIN </td>
                <td style="text-align: center;width:20px">:</td>
                <td style="font-size:15;">{{ $etatcivil->cin }}</td>
            </tr>
            <tr style="vertical-align:middle;">
                <td style="text-align: left;width:140px">Tel </td>
                <td style="text-align: center;width:20px">:</td>
                <td style="font-size:15;">{{ $etatcivil->tel }}</td>
            </tr>
            <tr style="vertical-align:middle;">
                <td style="text-align: left;width:140px">Email </td>
                <td style="text-align: center;width:20px">:</td>
                <td style="font-size:15;">{{ $user->email }}</td>
            </tr>
            <tr style="vertical-align:middle;">
                <td style="text-align: left;width:140px">الإسم الشخصي والعائلي</td>
                <td style="text-align: center;width:20px">:</td>
                <td style="font-size:15;">{{ $etatcivil->nom_ar }} {{ $etatcivil->prenom_ar }}</td>
            </tr>
        </tbody>
    </table>

    <br>
    <br>
    <br>
    <br>

    <table style="padding: 4px;width: 100%;">
        <tbody>
            @foreach ($formation_axes as $item)
                <tr style="vertical-align:middle;line-height:25px">
                    <td style="font-size: 22px;text-align: center;width:10%;">{{ $item->nom_axe }}</td>
                    <td style="font-size:16;width:90%;color:#212529">{{ $item->formation_nom }}</td>
                    <td style="font-size:16;width:90%;color:#212529">{{ $item->etab }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="confimraion fs-5 fw-bold">
        <p>Je confirme la validité des informations fournies et porte l'entière responsabilité de l'authenticité de celles-ci.</p>
        <p>أؤكد صحة المعلومات المقدمة وأتحمل كامل المسؤولية عن  صحتها</p>
      </div>
    <br>
    <br>
    <br>
    <br>
    

    <div style="text-align:center">Fait à Béni Mellal le, {{ $date }}</div>

</body>
</html> 


{{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/pdf.css" rel="stylesheet">
    <style>
        * { font-family: DejaVu Sans, sans-serif; }
    </style>
    <title>desc</title>
</head>
<body style="margin: 0;padding: 0;">
    <header class="mb-5"  >
        <img class="" src="{{URL('/img/USMSlogo.png')}}" alt=""> 
        <h1 >UNIVERSITÈ SULTAN MOULAY SLIMANE</h1>
        <h5>FICHE DE PRE-CANDIDATURE AUX FORMATOINS DOCTORALES 2023-2024</h5>
        <h5>  إستمارة التسجيل التمهيدي في تكوينات الدكتوراه برسم السنة الدراسية :2023-2024</h5>

      <img classs="" src="{{ URL('/img/pedoc.png')}}" alt=""> 
    </header>
    <div >
        <div class=" row text-left info-perso ">
            <div class="info-fr col-6 col-sm-3 fs-5" >
                    <p><span class="fw-bold">Nom :</span>  {{$etatcivil->nom_fr}}</p>
                    <p><span class="fw-bold">Prénom :</span> {{$etatcivil->prenom_fr}}</p>
                    <p><span class="fw-bold">CIN :</span> {{$etatcivil->cin}}</p>
                    <p><span class="fw-bold">Tel :</span> {{$etatcivil->code_masar}}</p>
                    <p><span class="fw-bold">Email :</span> {{$user->email}}</p>      
            </div>
                    
            <div class="info-ar col-6 col-sm-3 fs-5" >
                        <p><span class="fw-bold"> الإسم الشخصي : </span>{{$etatcivil->nom_ar}}  </p>
                        <p> <span class="fw-bold">الإسم العائلي :</span> {{$etatcivil->prenom_ar}} </p>
            </div>
        </div>
        <div class=" info-axe row justify-content-center text-center d-block ">
            <div class="col-md-8">
                <table class=" table table-bordered border border-3 border-dark table-responsive fs-5">
                    <thead>
                    <tr class=" border border-3 border-dark ">
                        <td>Sujet</td>
                        <td>Formation doctorale</td>
                        <td>Etablisement</td>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($formation_axes as $item)
                            <tr class="border border-3 border-dark">
                                <td> {{ $item->nom_axe }}</td>
                                <td> {{ $item->formation_nom }}</td>
                                <td> Etab</td>
                            </tr>
                        @endforeach
    
                    </tbody>
                    
                </table>
            </div>
              <div class="confimraion fs-5 fw-bold">
                <p>Je confirme la validité des informations fournies et porte l'entière responsabilité de l'authenticité de celles-ci.</p>
                <p>أؤكد صحة المعلومات المقدمة وأتحمل كامل المسؤولية عن  صحتها</p>
              </div>
            
        </div>
        <div class="confirmation fw-bold row ">
            <p>Fait le : {{$date}}</p>
            <p class="">Signature du candidat : </p>
        </div>
        <button id="btn-print" class="btn btn-success btn-lg">
            Print & Generate PDF
        </button>

        <button id="btn-one" class="download btn btn-success btn-lg">
            Telecharger la fiche
        </button>
    </div>
</body>
</html> --}}
