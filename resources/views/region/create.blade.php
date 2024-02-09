<x-template>

<h1> Create Region Page </h1>

<form action="{{ route('region.store') }}" method="post">
    @csrf
    @method('post')

    <label for="name"> Region Name </label>
    <input type="text" id="name" name="name"/>

    <label for="seller"> Seller Name </label>
    <input type="text" id="seller" name="seller"/>

    <button type="submit"> Store </button>

</form>

<br>
<br>
<a href="{{route('region.index')}}"> Back </a>

</x-template>
