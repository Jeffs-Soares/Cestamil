<x-template>

<h1> Show Budget Page </h1>

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

<a href="{{route('budget.index')}}"> Voltar </a>

</x-template>
