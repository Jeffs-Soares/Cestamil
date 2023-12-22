<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Region</title>
</head>
<body>
<h1> Show Region Page </h1>

<p> id: {{$region->id}}</p>
<p> Region Name: {{$region->name}}</p>
<p> Seller Name: {{$region->seller}}</p>

<a href="{{route('region.index')}}"> Regions </a>

</body>
</html>
