<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>
    
    @foreach ($package as $singlePackage)
        <ul>
            <li>Destinazione: {{$singlePackage->destination}}</li>
            <li>Durata soggiorno: {{$singlePackage->duration}} giorni</li>
            <li>Sistemazione in: {{$singlePackage->accomodation}}</li>
            <li>Mezzo di trasporto: {{$singlePackage->means_of_transport}}</li>
            <li>Compagnia di viaggio: {{$singlePackage->company_transport}}</li>
            <li>Prezzo tutto incluso: {{$singlePackage->price}},00 &euro;</li>
        </ul>
    @endforeach

</body>
</html>