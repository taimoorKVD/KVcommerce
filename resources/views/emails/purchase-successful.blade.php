@component('mail::message')
# Hello {{ $email }},

<h1 style="text-align: center;">
    Your Order Details
</h1>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $product)
        <tr>
            <td>{{ $product->rowId }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->qty }}</td>
            <td>${{ $product->price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<hr>
<h4 style="text-align: right">
    <strong>Total:</strong> 
    ${{ Cart::total() }}
</h4>


<p style="text-align: center">Thank you for your purchase.</p>
<p style="text-align: center">See you again.</p>
<p style="text-align: center">Regards, <strong>{{ config('app.name') }}</strong></p>
@endcomponent
