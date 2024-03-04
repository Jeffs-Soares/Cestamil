<x-template>

    <h1 class="text-center text-4xl py-14"> Products </h1>

    <form class="max-w-sm mx-auto" action="{{ route('product.store') }}" method="post">
        @csrf
        @method('post')

        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Product Name </label>
            <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>


        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900"> Product Description </label>
            <input type="text" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>

        <div class="mb-5">
            <label for="value" class="block mb-2 text-sm font-medium text-gray-900"> Product Value </label>
            <input type="number" id="value" name="value" step="0.01" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Store</button>

        <a href="{{route('product.index')}}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Cancel</a>

    </form>



</x-template>
