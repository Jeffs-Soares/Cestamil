<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1> Edit Budget Page </h1>


<form action="{{route('budget.update', $budget->id)}}" method="post">
@csrf
@method('put')

    <label for="client"> Client </label>
    <input type="text" id="client" name="client" value="{{$budget->client}}">

    <label for="date"> Date </label>
    <input type="date" id="date" name="date" value="{{$budget->date}}">


    <label for="product"> Select Product:
        <select name="product">

            <option value={{$budget->product}}> {{$budget->hasProduct->name}} </option>

            @foreach($products as $product)

                @if($product->id !== $budget->product)
                    <option value={{$product->id}}>
                        {{$product->name}}
                    </option>
                @endif

            @endforeach
        </select>
    </label>

    <label for="additional"> Additional Value </label>
    <input type="number" id="additional" name="additional" min=0 value="{{$budget->additional}}">

    <br>
    <br>
    <label for="additional_products"> Type all additional products: </label>
    <textarea id="additional_products" name="additional_products" > {{$budget->additional_products}} </textarea>


    <label for="region"> Select Region:
        <select name="region">

            <option value={{$budget->region}}> {{$budget->hasRegion->name}} </option>

            @foreach($regions as $region)

                @if($region->id !== $budget->region)
                    <option value={{$region->id}}> {{$region->name}} </option>
                @endif

            @endforeach

        </select>
    </label>

    <label for="quantity"> Quantity </label>
    <input type="number" id="quantity" name="quantity" min="1" step="1" value="{{$budget->quantity}}">
    <br>
    <br>
    <label for="total_value"> Total Value </label>
    <input type="number" id="total_value" name="total_value" value="{{$budget->total_value}}" disabled>

    <label for="pay"> Pay: </label>
    <input type="number" id="pay" name="pay" value="{{$budget->pay}}" disabled>

    <label for="remnant"> Remnant: </label>
    <input type="number" id="remnant" name="remnant" value="{{$budget->remnant}}" disabled>


    <button type="submit"> Atualizar </button>

    <br>
    <br>
    <br>
    <a href="{{route('budget.index')}}"> Voltar </a>



</form>







</body>
</html>
