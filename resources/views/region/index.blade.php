<x-app.template>

<h1 class="text-center text-4xl py-14"> Region </h1>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Region Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Region ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>

    @foreach($regions as $region)

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{ route('region.show', $region->id) }}">{{ $region->name }}</a>
                        </th>
                        <td class="px-6 py-4">
                            {{$region->id}}
                        </td>

                        <td class="px-6 py-4 flex gap-4">
                            <a href="{{ route('region.edit', $region->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                            <form action="{{ route('region.destroy', $region->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="font-medium text-red-600 dark:text-red-500 hover:underline" type="submit"> Delete </button>
                            </form>
                        </td>
                    </tr>
    @endforeach
            </tbody>
        </table>
    </div>




    <a href="{{ route('region.create') }}" class=" inline-block mt-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Store</a>

    <a href="{{route('dashboard')}}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Home</a>

</x-app.template>
