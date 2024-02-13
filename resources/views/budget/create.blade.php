<x-template>

    <h1 class="text-center text-4xl py-14"> Create Budget Page </h1>


<form class="max-w-sm mx-auto" action="{{route('budget.store')}}" method="post">
    @csrf
    @method('post')

    <div class="mb-5">
        <label for="client" class="block mb-2 text-sm font-medium text-gray-900">Client Name </label>
        <input type="text" id="client" name="client" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>


    <label class="block mb-2 text-sm font-medium text-gray-900" for="date"> Date </label>
    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" id="date" name="date">

    <label for="product" class="block mb-2 text-sm font-medium text-gray-900"> Select Product:
        <select  name="product" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            @foreach($products as $product)

                <option value={{$product->id}}> {{$product->name}} </option>

            @endforeach

        </select>
    </label>

    <label for="additional" class="block mb-2 text-sm font-medium text-gray-900"> Additional Value </label>
    <input type="number" id="additional" name="additional" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    <label for="additional_products" class="block mb-2 text-sm font-medium text-gray-900"> Type all additional products: </label>
    <textarea id="additional_products" name="additional_products" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>

    <label for="region" class="block mb-2 text-sm font-medium text-gray-900"> Select Region:
        <select name="region" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            @foreach($regions as $region)

                <option value={{$region->id}}> {{$region->name}} </option>

            @endforeach

        </select>
    </label>

    <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900"> Quantity </label>
    <input type="number" id="quantity" name="quantity" min="1" step="1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mt-2">Store</button>

    <a href="{{route('budget.index')}}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Cancel</a>

</form>

</x-template>
