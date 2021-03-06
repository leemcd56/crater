@if($invoice->user->shippingaddress)
    @if($invoice->user->shippingaddress->name || $invoice->user->shippingaddress->address_street_1 || $invoice->user->shippingaddress->address_street_2 || $invoice->user->shippingaddress->country || $invoice->user->shippingaddress->state || $invoice->user->shippingaddress->city || $invoice->user->shippingaddress->zip || $invoice->user->phone)
        <p class="ship-to">Ship To,</p>
    @endif
    @if($invoice->user->shippingaddress->name)
        <p class="ship-user-name">
            {{$invoice->user->shippingaddress->name}}
        </p>
    @endif
    <p class="ship-user-address">
        @if($invoice->user->shippingaddress->address_street_1)
            {{$invoice->user->shippingaddress->address_street_1}}<br>
        @endif

        @if($invoice->user->shippingaddress->address_street_2)
            {{$invoice->user->shippingaddress->address_street_2}}<br>
        @endif

        @if($invoice->user->shippingaddress->city && $invoice->user->shippingaddress->city->name)
            {{$invoice->user->shippingaddress->city->name}},
        @endif

        @if($invoice->user->shippingaddress->state && $invoice->user->shippingaddress->state->name)
            {{$invoice->user->shippingaddress->state->name}}.
        @endif

        @if($invoice->user->shippingaddress->zip)
            {{$invoice->user->shippingaddress->zip}}<br>
        @endif

        @if($invoice->user->shippingaddress->country && $invoice->user->shippingaddress->country->name)
            {{$invoice->user->shippingaddress->country->name}}<br>
        @endif

        @if($invoice->user->phone)
            <p class="ship-user-phone">
                Phone :{{$invoice->user->shippingaddress->phone}}
            </p>
        @endif

    </p>
@endif
