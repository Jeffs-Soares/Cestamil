
<x-template>

<h1> Create Product Page </h1>

<form action="{{ route('product.store') }}" method="post">
    @csrf
    @method('post')

    <label for="name"> Nome do produto </label>
    <input type="text" id="name" name="name"/>

    <label for="description"> Descrição do produto </label>
    <input type="text" id="description" name="description"/>

    <label for="value"> Valor do produto </label>
    <input type="number" id="value" name="value"/>

    <button type="submit"> Cadastrar </button>

</form>

<br>
<br>
<a href="{{route('product.index')}}"> Voltar </a>

</x-template>
