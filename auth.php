<?php
    require_once("templates/header.php");
?>



    <div id="main-container" class="container-fluid">
        <div class="col-md-12">
            <div class="row" id="auth-row">
                <div class="col-md-4" id="login-container">
                    <h2>Entrar</h2>
                    <form action="<?=$URL_BASE?>" method="post">
                        <input type="hidden" name="login" value="login">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" placeholder="Digite seu email" id="email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" class="form-control" placeholder="Digite seu password" id="password" name="password">                          
                        </div>

                        <input type="submit" class="btn card-btn" value="Entrar">
                    </form>
                </div>


                <!-- REGISTRO -->
                <div class="col-md-4" id="register-container ">
                    <h2>Criar Conta</h2>
                    <form action="<?=$URL_BASE?>auth_process.php" method="post">

                        <input type="hidden" name="register" value="register">

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
                        </div>

                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu Nome">
                        </div>


                        <div class="form-group">
                            <label for="lastname">Sobrenomel</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Digite seu Sobrenome">
                        </div>


                           <div class="form-group">
                            <label for="password">senha</label>
                            <input type="password" class="form-control" placeholder="Digite seu password" id="password" name="password">                          
                        </div>

                           <div class="form-group">
                            <label for="password">Confirmação</label>
                            <input type="password" class="form-control" placeholder="Digite seu password" id="confirmpassword" name="password">                          
                        </div>
                        <input type="submit" class="btn card-btn" value="Entrar">
                    </form>
                </div>
            </div>
        </div>
    </div>



<?php
    require_once("templates/footer.php");
?>

   