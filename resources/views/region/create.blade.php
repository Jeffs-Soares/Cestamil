<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criando uma região</title>
</head>
<body>

<h1> Create Region Page </h1>

<form action="{{ route('region.store') }}" method="post">
    @csrf
    @method('post')

    <label for="name"> Nome da região </label>
    <input type="text" id="name" name="name"/>

    <label for="seller"> Nome do vendedor </label>
    <input type="text" id="seller" name="seller"/>

    <button type="submit"> Cadastrar </button>

</form>

<br>
<br>
<a href="{{route('region.index')}}"> Regions </a>


</body>
</html>
