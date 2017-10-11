
<div class="row">
    <div class="jumbotron center" style="margin-bottom: 0px;"><h1>Tennis Angera</h1></div>              <!-- jumbotron tennis -->
    <div class="navbar">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Tennis club Angera</a>
            </div>
            <!-- Collection of nav links and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li id ="home" onclick="selected();"><a href="index.php">Home</a></li>
                    <li id="regolamento"><a href="regolamento.php">Regolamento</a></li>
                    <li id="tariffe"><a href="tariffe.php">Tariffe</a></li>
                    <li id="prenotazione"><a href="prenotazione.php">Prenotazioni</a></li>
                    <li id="contatti"><a href="contact.php">Contatti</a></li>

                </ul>
            </div>
        </nav>
    </div>
</div>

<script type="text/javascript">

    function selected(){

        var id = $(this).attr('id');
        id.addClass("active");
    }
</script>

