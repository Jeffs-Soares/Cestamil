<x-template>

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

</x-template>
