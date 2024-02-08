<x-template>

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
<a href="{{route('region.index')}}"> Voltar </a>

</x-template>
