<x-template>

    <h1 class="text-center text-4xl py-14"> Edit Budget Page </h1>


    <form action="{{ route('budget.update', $budget->id) }}" method="post" class="max-w-sm mx-auto">
        @csrf
        @method('put')

        <div class="mb-5">
            <label for="client" class="block mb-2 text-sm font-medium text-gray-900">Client Name </label>
            <input type="text" id="client" name="client" value="{{ $budget->client }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>

        <label class="block mb-2 text-sm font-medium text-gray-900" for="date"> Date </label>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="date" id="date" name="date" value="{{ $budget->date }}" required>

        <label for="product" class="block mb-2 text-sm font-medium text-gray-900"> Select Product:
            <select  name="product" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

                @foreach($products as $product)
                        <option value={{ $product->id }}>
                            {{ $product->name }}
                        </option>
                @endforeach

            </select>

        </label>


        <label for="additional" class="block mb-2 text-sm font-medium text-gray-900"> Additional Value </label>
        <input type="number" id="additional" name="additional" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ $budget->additional }}" required>

        <label for="additional_products" class="block mb-2 text-sm font-medium text-gray-900"> Type all additional products: </label>
        <textarea id="additional_products" name="additional_products" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"> {{ $budget->additional_products }}</textarea>


        <label for="region" class="block mb-2 text-sm font-medium text-gray-900"> Select Region:
            <select name="region" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

                <option value={{ $budget->region }}> {{ $budget->hasRegion->name }} </option>

                @foreach ($regions as $region)
                    @if ($region->id !== $budget->region)
                        <option value={{ $region->id }}> {{ $region->name }} </option>
                    @endif
                @endforeach

            </select>
        </label>


        <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900"> Quantity </label>
        <input type="number" id="quantity" name="quantity" min="1" step="1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  value="{{ $budget->quantity }}" required>
        <br>

        <label class="block mb-2 text-sm font-medium text-gray-900" for="total_value"> Total Value </label>
        <input type="number" id="total_value" name="total_value" value="{{ $budget->total_value }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" disabled>

        <label class="block mb-2 text-sm font-medium text-gray-900" for="pay"> Pay: </label>
        <input type="number" id="pay" name="pay" value="{{ $budget->pay }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" disabled>

        <label class="block mb-2 text-sm font-medium text-gray-900" for="remnant"> Remnant: </label>
        <input type="number" id="remnant" name="remnant" value="{{ $budget->remnant }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" disabled>


        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none mt-2"> Update </button>

        <a href="{{route('budget.index')}}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Cancel</a>

    </form>

</x-template>
