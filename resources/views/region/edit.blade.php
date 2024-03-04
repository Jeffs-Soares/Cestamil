<x-template>

<h1 class="text-center text-4xl py-14"> Edit Region Page </h1>

<form action="{{route('region.update', $region->id)}}" method="post">
    @csrf
    @method('put')

    <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Region Name </label>
        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$region->name}}" required>
    </div>


    <div class="mb-5">
        <label for="seller" class="block mb-2 text-sm font-medium text-gray-900"> Seller </label>
        <input type="text" id="seller" name="seller" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$region->seller}}" required>
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Update</button>

    <a href="{{ route('region.index') }}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Cancel</a>

</form>


</x-template>
