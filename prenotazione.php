<?php
include ('header.php');
?>
<title>Prenotazione</title>
<script type="text/javascript">
$(document).ready(function() {
  $("#bottone").click(function(){
    var cardNumber = $("#cardNumber").val();
    var cf = $("#cf").val();
    $.ajax({
      type: "POST",
      url: "login.php",
      data: "cardNumber=" + cardNumber + "&cf=" + cf,
      dataType: "html",
      success: function(msg)
      {
        $("#risultato").html(msg);
      },
      error: function()
      {
        alert("Chiamata fallita, si prega di riprovare...");
      }
    });
  });
});
</script>
</head>
<body>

    <div id ="risultato"></div>


<!--------- NAVBAR_------>
<div class="navbar">
    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">Tennis club Angera</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="regolamento.php">Regolamento</a></li>
                <li><a href="prices.php">Tariffe</a></li>
                <li class="active"><a href="prenotazione.php">Prenotazioni</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4"">
            <!-- LOGIN FORM -->
            <div class="text-center" style="padding:50px 0">
                <div class="logo">login</div>
                <!-- Main Form -->
                <div class="login-form-1">
                    <form id="login-form">
                        <div class="login-form-main-message"></div>
                        <div class="main-login-form">
                            <div class="login-group">
                                <div class="form-group">
                                    <label for="cardNumber" class="sr-only">cardNumber</label>
                                    <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="Inserire numero tessera">
                                </div>
                                <div class="form-group">
                                    <label for="cf" class="sr-only">cf</label>
                                    <input type="text" class="form-control" id="cf" name="cf" placeholder="Inserire codice fiscale">
                                </div>
                            </div>
                            <button id="bottone" class="btn btn-primary margin-left">Invio</button>
                        </div>

                        </div>
                    </form>
                </div>
                <!-- end:Main Form -->
            </div>
        </div>
    </div>
</div>

</body>

<?php include 'footer.php'?>

</html>