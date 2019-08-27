<?php include ("componente/footer.php"); ?>   
<body>
    <div class="row">
        <div class="demo-heading col-md-12">
            <h2 class="text-center"></h2>
        </div>
        <div class="login-form col-md-4 offset-md-4">
            <h4>Logare aplicatie FACTURA MEA:</h4>
            <form method="post" action="">
                <div class="form-group">
                    <?php //if ($loginError ) { ?>
                    <div class="alert alert-warning"><?php //echo $loginError; ?></div>
                    <?php //} ?>
                </div>
                <div class="form-group">
                    <input name="email" id="email" type="email" class="form-control" placeholder="Email address" autofocus="" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="login" class="btn btn-info">Logare</button>
                </div>
            </form>
        </div>
    </div>
<?php include ("componente/footer.php"); ?>            