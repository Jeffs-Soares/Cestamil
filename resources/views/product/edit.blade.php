<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>

<h1> Edit Region Page </h1>

<form action="{{route('product.update', $product->id)}}" method="post">
    @csrf
    @method('put')

    <label for="name"> Nome do produto </label>
    <input type="text" id="name" name="name" value="{{$product->name}}"/>

    <label for="description"> Descrição </label>
    <input type="text" id="description" name="description" value="{{$product->description}}"/>

    <label for="value"> Valor do produto </label>
    <input type="text" id="value" name="value" value="{{$product->value}}" />

    <button type="submit"> Atualizar </button>

</form>

<br>
<a href="{{route('product.index')}}"> Cancelar </a>

</body>
</html>
