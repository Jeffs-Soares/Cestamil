
<x-template>

    <h1 class="text-center text-4xl py-14"> Products </h1>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Product Name
                </th>

                <th scope="col" class="px-6 py-3">
                    Description
                </th>

                <th scope="col" class="px-6 py-3">
                    Value
                </th>

            </tr>
            </thead>
            <tbody>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                <td class="px-6 py-4">
                    {{$product->id}}
                </td>

                <td class="px-6 py-4">
                    {{$product->name}}
                </td>

                <td class="px-6 py-4">
                    {{$product->description}}
                </td>

                <td class="px-6 py-4">
                    {{$product->value}}
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <a href="{{route('product.index')}}" class=" inline-block mt-2 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Back</a>

</x-template>
