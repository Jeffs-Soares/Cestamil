<x-template>

    <h1> Index Budget Page </h1>
    
    <ul>

        @foreach($budgets as $budget)

        <li>
            <h3> Client: {{$budget->client}}</h3>
            <a href={{ route('budget.show', $budget->id)}}> <p> Budget Number: {{ $budget->id }} </p> </a>

            <a href={{route('budget.edit', $budget->id)}}> Edit </a>

            <form action={{route('budget.destroy', $budget->id)}} method="post">
                @csrf
                @method('delete')
                <button type="submit"> Delete </button>
            </form>

            <a href={{route('payCreate', $budget->id)}}> <button> Pay </button> </a>

        </li>


        @endforeach

    </ul>
    <br>
    <br>

<a href="{{route('budget.create')}}"> Cadastrar um orçamento </a>
<br>
<br>
<a href="/"> Home </a>

</x-template>
