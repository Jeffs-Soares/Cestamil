
<x-app.template>

<h1 class="text-center text-4xl py-14"> Show Region Page </h1>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Region ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Region Name
                </th>

                <th scope="col" class="px-6 py-3">
                    Seller
                </th>


            </tr>
            </thead>
            <tbody>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td class="px-6 py-4">
                    {{$region->id}}
                </td>

                <td class="px-6 py-4">
                    {{$region->name}}
                </td>

                <td class="px-6 py-4">
                    {{$region->seller}}
                </td>

            </tr>
            </tbody>
        </table>
    </div>

    <a href="{{route('region.index')}}" class=" inline-block mt-2 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Back</a>

</x-app.template>
