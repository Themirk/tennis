<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>
<title> Prenotazione</title>
<body>
<div class="container-fluid">
    <?php include('navbar-title.php'); ?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4"">
        <!-- LOGIN FORM -->
        <div class="text-center" style="padding:50px 0">
            <div class="logo">login</div>
            <!-- Main Form -->
            <div class="login-form-1">
                <form id="login-form" action="login.php" method="POST">
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
                        <button type="submit" class="btn btn-primary margin-left">Invio</button>
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