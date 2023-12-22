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
<h1> Show Region Page </h1>

<p> id: {{$product->id}}</p>
<p> Product Name: {{$product->name}}</p>
<p> Description: {{$product->description}}</p>
<p> Value: {{$product->value}}</p>

<a href="{{route('product.index')}}"> Voltar </a>

</body>
</html>
