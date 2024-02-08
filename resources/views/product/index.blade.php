<x-template>

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

</x-template>
