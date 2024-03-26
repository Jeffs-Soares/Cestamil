<x-app.template>

    <h1 class="text-center text-4xl py-14"> Edit Product </h1>

    <form action="{{ route('product.update', $product->id) }}" method="post">
        @csrf
        @method('put')

        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Product Name </label>
            <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $product->name }}">
        </div>


        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900"> Product Description </label>
            <input type="text" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $product->description }}">
        </div>

        <div class="mb-5">
            <label for="value" class="block mb-2 text-sm font-medium text-gray-900"> Product Value </label>
            <input type="number" id="value" name="value" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $product->value }}" >
        </div>


        {{--       Show Validation  --}}

        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-red-400" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                </ul>
            </div>
        @endif



        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update</button>

        <a href="{{ route('product.index') }}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Cancel</a>

    </form>

</x-app.template>
