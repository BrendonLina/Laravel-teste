<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frete</title>
</head>
<body>
    <h1>Calculo do frete</h1>
    <label> Entregue por :<b> {{ $response['ShippingSevicesArray'][0]['Carrier'] }} </b></label><br>
    <label> Método de envio : <b> {{ $response['ShippingSevicesArray'][0]['ServiceDescription'] }} </b></label><br>
    <label> Preço : <b>{{ $response['ShippingSevicesArray'][0]['ShippingPrice'] }}</b></label><br>
       
    <label> Método de envio : <b> {{ $response['ShippingSevicesArray'][1]['ServiceDescription'] }} </b></label><br>
    <label> Preço : <b> {{ $response['ShippingSevicesArray'][1]['ShippingPrice'] }} </b></label><br>
    
</body>
</html>