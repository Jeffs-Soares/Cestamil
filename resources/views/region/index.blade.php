<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Region Page </title>
</head>
<body>

<h1> Region Page </h1>

<ul>

    @foreach($regions as $region)
        <li> Nome: {{$region->name }}</li>
    @endforeach

</ul>

</body>
</html>
