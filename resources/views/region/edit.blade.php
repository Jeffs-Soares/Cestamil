<x-template>

<h1> Edit Region Page </h1>

<form action="{{route('region.update', $region->id)}}" method="post">
    @csrf
    @method('put')

    <label for="name"> Region Name </label>
    <input type="text" id="name" name="name" value="{{$region->name}}"/>

    <label for="seller"> Seller Name </label>
    <input type="text" id="seller" name="seller" value="{{$region->seller}}" />

    <button type="submit"> Update </button>

</form>

<br>
<a href="{{route('region.index')}}"> Cancel </a>

</x-template>
