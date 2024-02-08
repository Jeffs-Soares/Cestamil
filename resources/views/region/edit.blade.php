<x-template>

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

</x-template>
