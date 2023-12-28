<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Budget</title>
</head>
<body>

<h1> Index Budget Page </h1>

<ul>

    @foreach($budgets as $budget)

        <li>
            <h3> Client: {{$budget->client}}</h3>
           <a href="{{ route('budget.show', $budget->id)}}"> <p> Budget Number: {{ $budget->id }} </p> </a>
        </li>


    @endforeach

</ul>
<br>
<br>

<a href="{{route('budget.create')}}"> Cadastrar um orçamento </a>
<br>
<br>
<a href="/"> Home </a>

</body>
</html>
