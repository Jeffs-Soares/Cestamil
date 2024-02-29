<x-template>

    <h1 class="text-center text-4xl py-14"> Index Budget Page </h1>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>

                <th scope="col" class="px-6 py-3">
                    Budget ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Client Name
                </th>

                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>

        @foreach($budgets as $budget)

            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">

                <td class="px-6 py-4">
                    {{$budget->id}}
                </td>

                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    <a href="{{ route('budget.show', $budget->id) }}">{{ $budget->client }}</a>
                </td>


                <td class="px-6 py-4 flex gap-4">
                    <a href="{{ route('budget.edit', $budget->id) }}" class="font-medium text-blue-600 hover:underline">Edit</a>

                    <form action="{{ route('budget.destroy', $budget->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="font-medium text-red-600 hover:underline" type="submit"> Delete </button>
                    </form>

                    <a class="font-medium text-green-600 hover:underline" href={{route('payCreate', $budget->id)}}> <button> Pay </button> </a>
                </td>
            </tr>

        @endforeach


            </tbody>
        </table>

    </div>

    <a class=" inline-block mt-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none" href="{{route('budget.create')}}"> Store </a>

    <a href="/" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Home</a>

</x-template>
