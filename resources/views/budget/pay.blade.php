<x-template>
    <h1> Pay </h1>

    <p> id: {{$budget->id}}</p>
<p> Client: {{$budget->client}}</p>
<p> Date: {{$budget->date}}</p>
<p> Product: {{$budget->hasProduct->name ." - " .  "R$ " . $budget->hasProduct->value}}</p>
<p> Additional: {{$budget->additional}}</p>
<p> Additional Products: {{$budget->additional_products}}</p>
<p> Region: {{$budget->hasRegion->name}}</p>
<p> Seller: {{$budget->hasRegion->seller}}</p>
<p> Quantity: {{$budget->quantity}}</p>
<p> Total Value: {{$budget->total_value}}</p>
<p> Pay: {{$budget->pay}}</p>
<p> Remnant: {{$budget->remnant}}</p>

<form action="{{route('payStore', $budget->id)}}" method="post">
    @csrf
    @method('put')

    <label for="pay"> Value to pay</label>
    <input type="number" name="pay" id="pay">

    <button type="submit"> Pay </button>

</form>

</x-template>
