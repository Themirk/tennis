<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
</head>

<body>
<div id="paypal-button"></div>
<h1>Paga al campo</h1>

<script>
    paypal.Button.render({

        env: 'sandbox', // Or 'sandbox',

        commit: true, // Show a 'Pay Now' button
        client: {
            sandbox:    'AYjWKp0-0iCyKKjijw_HhtAAqanbzFWnUnV25NQEMLaR1EInygEyPEFIgahBqkTwbsokiEwTb_OCWFyt',
            production: ''
        },

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '10.00', currency: 'EUR' }
                        }
                    ]
                }
            });
        },

        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function(payment) {

                alert("bravo pesce");
            });
        }

    }, '#paypal-button');
</script>
</body>