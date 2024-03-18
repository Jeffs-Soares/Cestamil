<x-template>
    <h1 class="text-center text-4xl py-14"> Pay </h1>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Client Name
                </th>

                <th scope="col" class="px-6 py-3">
                    Date
                </th>

                <th scope="col" class="px-6 py-3">
                    Product
                </th>

                <th scope="col" class="px-6 py-3">
                    Additional Value
                </th>

                <th scope="col" class="px-6 py-3">
                    Additional Products
                </th>

                <th scope="col" class="px-6 py-3">
                    Region
                </th>

                <th scope="col" class="px-6 py-3">
                    Seller
                </th>

                <th scope="col" class="px-6 py-3">
                    Quantity
                </th>

                <th scope="col" class="px-6 py-3">
                    Total Value
                </th>

                <th scope="col" class="px-6 py-3">
                    Pay
                </th>

                <th scope="col" class="px-6 py-3">
                    Remnant
                </th>


            </tr>
            </thead>
            <tbody>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td class="px-6 py-4">
                    {{$budget->id}}
                </td>

                <td class="px-6 py-4">
                    {{$budget->client}}
                </td>

                <td class="px-6 py-4">
                    {{$budget->date}}
                </td>

                <td class="px-6 py-4">
                    {{$budget->hasProduct->name . ' - ' . "R$ " . $budget->hasProduct->value }}
                </td>

                <td class="px-6 py-4">
                    {{$budget->additional}}
                </td>

                <td class="px-6 py-4">
                    {{$budget->additional_products}}
                </td>

                <td class="px-6 py-4">
                    {{$budget->hasRegion->name}}
                </td>

                <td class="px-6 py-4">
                    {{ $budget->hasRegion->seller}}
                </td>



                <td class="px-6 py-4">
                    {{$budget->quantity}}
                </td>

                <td class="px-6 py-4">
                    {{$budget->total_value}}
                </td>

                <td class="px-6 py-4">
                    {{$budget->pay}}
                </td>

                <td class="px-6 py-4">
                    {{$budget->remnant}}
                </td>




            </tr>
            </tbody>
        </table>
    </div>

<form action="{{route('payStore', $budget->id)}}" method="post" class="max-w-sm mx-auto">
    @csrf
    @method('put')

    <label for="pay" class="block mb-2 text-sm font-medium text-gray-900 mt-4"> Value to pay</label>
    <input type="number" name="pay" id="pay" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">

    <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800 mt-2"> Pay </button>

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif

    <a href="{{route('budget.index')}}" class=" inline-block mt-2 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Cancel</a>

</form>

</x-template>
