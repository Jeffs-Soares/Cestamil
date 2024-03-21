<x-app.template>

    <h1 class="text-center text-4xl py-14"> Show Budget Page </h1>

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

    <a href="{{route('budget.index')}}" class=" inline-block mt-2 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Cancel</a>

</x-app.template>
