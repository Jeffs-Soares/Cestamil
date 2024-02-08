
<x-template>

<h1> Show Region Page </h1>

<p> id: {{$region->id}}</p>
<p> Region Name: {{$region->name}}</p>
<p> Seller Name: {{$region->seller}}</p>

<a href="{{route('region.index')}}"> Voltar </a>

</x-template>
