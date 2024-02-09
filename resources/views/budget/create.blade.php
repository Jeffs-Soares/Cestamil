<x-template>

    <h1> Create Budget Page </h1>


<form action="{{route('budget.store')}}" method="post">
    @csrf
    @method('post')

    <label for="client"> Client </label>
    <input type="text" id="client" name="client">

    <label for="date"> Date </label>
    <input type="date" id="date" name="date">

    <label for="product"> Select Product:
        <select name="product">

            @foreach($products as $product)

                <option value={{$product->id}}> {{$product->name}} </option>

            @endforeach

        </select>
    </label>

    <label for="additional"> Additional Value </label>
    <input type="number" id="additional" name="additional">

    <br>
    <br>
    <label for="additional_products"> Type all additional products: </label>
    <textarea id="additional_products" name="additional_products"></textarea>

    <label for="region"> Select Region:
        <select name="region">

            @foreach($regions as $region)

                <option value={{$region->id}}> {{$region->name}} </option>

            @endforeach

        </select>
    </label>

    <label for="quantity"> Quantity </label>
    <input type="number" id="quantity" name="quantity" min="1" step="1">

    <br>
    <br>

    <button type="submit"> Store </button>

</form>

</x-template>
