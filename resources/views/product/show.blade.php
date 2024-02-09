
<x-template>

<h1> Show Region Page </h1>

<p> id: {{$product->id}}</p>
<p> Product Name: {{$product->name}}</p>
<p> Description: {{$product->description}}</p>
<p> Value: {{$product->value}}</p>

<a href="{{route('product.index')}}"> Back </a>

</x-template>
