<?php
    include ('header.php');


?>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
    $(document).ready(function () {
       $("#niente").trigger('click');
    });
</script>
<div class="container-fluid">
    <div class="row">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" id="niente"data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Gentil, <?= $_GET['nome'];?> <?= $_GET['cognome'];?> la sua prenotazione è quasi completata.<br>
                        Riepilogo:
                        <br>Data e ora di inizio: <?= $_GET['start'];?>
                        Data e ora di inizio: <?= $_GET['end'];?>
                        Campo scelto: <?= $_GET['campo'];?>
                        TEMPO <div id="tempo"><?= $hourdiff = round((strtotime($_GET['end']) - strtotime($_GET['start']))/3600, 1);?></div>
                    </div>
                    <div class="modal-footer">
                        <div></div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="">Paga al campo</button>
                        <div id="paypal-button"class="float_left"></div>


                        <script>
                            var data2 = $("#tempo").text();
                            var dataParsed = parseFloat(data2) * 10;
                            var data2=dataParsed+".00";
                            console.log(data2);
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
                                                    amount: { total: data2, currency: 'EUR' }
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
