<x-template>

<h1> Index Region Page </h1>

<ul>

    @foreach($regions as $region)
        <li>

            Região:  <a href="{{route('region.show', $region->id)}}">{{$region->name }}</a>

            <a href="{{route('region.edit', $region->id)}}"> Edit </a>

            <form action="{{route('region.destroy', $region->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit"> Delete </button>
            </form>

        </li>
    @endforeach

</ul>

<a href="{{route('region.create')}}"> Cadastrar uma região </a>
<br>
<br>
<a href="/"> Home </a>

</x-template>
