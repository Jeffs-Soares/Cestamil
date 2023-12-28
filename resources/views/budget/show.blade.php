<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Budget</title>
</head>
<body>

<h1> Show Budget Page </h1>

<p> id: {{$budget->id}}</p>
<p> Client: {{$budget->client}}</p>
<p> Date: {{$budget->date}}</p>
<p> Product: {{$budget->hasProduct->name}}</p>
<p> Additional: {{$budget->additional}}</p>
<p> Additional Products: {{$budget->additional_products}}</p>
<p> Region: {{$budget->hasRegion->name}}</p>
<p> Seller: {{$budget->hasRegion->seller}}</p>
<p> Quantity: {{$budget->quantity}}</p>
<p> Total Value: {{$budget->total_value}}</p>
<p> Pay: {{$budget->pay}}</p>
<p> Remnant: {{$budget->remnant}}</p>

<a href="{{route('budget.index')}}"> Voltar </a>



</body>
</html>
