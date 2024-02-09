<x-template>

    <h1> Create Product Page </h1>

    <form action="{{ route('product.store') }}" method="post">
        @csrf
        @method('post')

        <label for="name"> Product Name </label>
        <input type="text" id="name" name="name" />

        <label for="description"> Product Description </label>
        <input type="text" id="description" name="description" />

        <label for="value"> Product Value </label>
        <input type="number" id="value" name="value" />

        <button type="submit"> Store </button>

    </form>

    <br>
    <br>
    <a href="{{ route('product.index') }}"> Back </a>

</x-template>
