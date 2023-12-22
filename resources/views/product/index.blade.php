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

<h1> Index Product Page </h1>

<ul>

    @foreach($products as $product)
        <li>

            Região:  <a href="{{route('product.show', $product->id)}}">{{$product->name }}</a>

            <a href="{{route('product.edit', $product->id)}}"> Edit </a>

            <form action="{{route('product.destroy', $product->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit"> Delete </button>
            </form>

        </li>
    @endforeach

</ul>

<a href="{{route('product.create')}}"> Cadastrar um produto </a>
<br>
<br>
<a href="/"> Home </a>

</body>
</html>
