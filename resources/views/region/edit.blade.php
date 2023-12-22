<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Region</title>
</head>
<body>

<h1> Edit Region Page </h1>

<form action="{{route('region.update', $region->id)}}" method="post">
    @csrf
    @method('put')

    <label for="name"> Nome da região </label>
    <input type="text" id="name" name="name" value="{{$region->name}}"/>

    <label for="seller"> Nome do vendedor </label>
    <input type="text" id="seller" name="seller" value="{{$region->seller}}" />

    <button type="submit"> Atualizar </button>

</form>

<br>
<a href="{{route('region.index')}}"> Cancelar </a>

</body>
</html>
