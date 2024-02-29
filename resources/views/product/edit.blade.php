<x-template>

    <h1 class="text-center text-4xl py-14"> Products </h1>

    <form action="{{ route('product.update', $product->id) }}" method="post">
        @csrf
        @method('put')

        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Product Name </label>
            <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ $product->name }}" required>
        </div>


        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900"> Product Description </label>
            <input type="text" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ $product->description }}" required>
        </div>

        <div class="mb-5">
            <label for="value" class="block mb-2 text-sm font-medium text-gray-900"> Product Value </label>
            <input type="number" id="value" name="value" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ $product->value }}" required>
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Update</button>

        <a href="{{ route('product.index') }}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Cancel</a>

    </form>

</x-template>
