
<x-template>

    <h1 class="text-center text-4xl py-14"> Products </h1>

<p> id: {{$product->id}}</p>
<p> Product Name: {{$product->name}}</p>
<p> Description: {{$product->description}}</p>
<p> Value: {{$product->value}}</p>

<a href="{{route('product.index')}}"> Back </a>

</x-template>
