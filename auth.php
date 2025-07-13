<?php
    require_once("templates/header.php");
?>



    <div id="main-container" class="container-fluid">
        <div class="col-md-12">
            <div class="row" id="auth-row">
                <div class="col-md-4" id="register-container">
                    <h2>Entrar</h2>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" placeholder="Digite seu email" id="email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="text" class="form-control" placeholder="Digite seu password" id="password" name="password">                          
                        </div>

                        <input type="submit" class="btn card-btn" value="Entrar">
                    </form>
                </div>
                <div class="col-md-4" id="register-container">
                    <h2>Criar Conta</h2>
                </div>
            </div>
        </div>
    </div>



<?php
    require_once("templates/footer.php");
?>

   