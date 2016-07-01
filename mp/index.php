<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>


<script>

Mercadopago.setPublishableKey("TEST-bd9f2717-15fe-4e77-b106-00eb20a7d193");
Mercadopago.createToken(form, tokenHandler);


function minhaFuncao({
    "id": "ff8080814cbd77a8014cc",
    "public_key": "TEST-bd9f2717-15fe-4e77-b106-00eb20a7d193",
    "card_id": null,
    "luhn_validation": true,
    "status": "active",
    "date_used": null,
    "card_number_length": 16,
    "date_created": "2015-04-16T13:06:25.525-04:00",
    "first_six_digits": "450995",
    "last_four_digits": "3704",
    "security_code_length": 3,
    "expiration_month": 6,
    "expiration_year": 2017,
    "date_last_updated": "2015-04-16T13:06:25.525-04:00",
    "date_due": "2015-04-24T13:06:25.531-04:00",
    "live_mode": false,
    "cardholder": {
        "identification": {
            "number": "23456789",
            "type": "type"
        },
        "name": "name"
    }
});

Mercadopago.getPaymentMethod(object, paymentMethodHandler);

</script>



