
 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>desc</title>
    <style> 
        * { font-family: DejaVu Sans, sans-serif; 
        font-size: 1rem; }
        body{height: 100vh;
        font-size: 1rem;}
        header{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-size: 2rem;
        }
        img{
            width: 6%;
            margin: 2rem 0rem;
        }
        header{
            text-align: center;
        }
        .info-ar{
            float: right;
        }
        .info-fr{
            float: left;
        }
       
    </style>
</head>
<body id="content" class="" >
    
        <header class="mb-5"  >
            {{-- <img class="" src="{{URL('/img/USMSlogo.png')}}" alt="">  --}}
            <h1 >UNIVERSITÈ SULTAN MOULAY SLIMANE</h1>
            <h5>FICHE DE PRE-CANDIDATURE AUX FORMATOINS DOCTORALES 2023-2024</h5>
            <h5>  إستمارة التسجيل التمهيدي في تكوينات الدكتوراه برسم السنة الدراسية :2023-2024</h5>
    
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
                                    <td> {{ $item->formation_nom }}</td>
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
        
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" 
    integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" 
    integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <script src="{{ asset('js/savepdf.js') }}"></script>
    
</body>

</html> 
