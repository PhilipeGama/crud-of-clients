<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Ciente</h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input  id="nome" type="text" name="nome">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="idade" id="idade">
                <label for="idade">Idade</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn" >Cadastrar</button>
            <a href="index.php" class="btn green" >Lista de clientes</a>
        </form>
    </div>

    
    
<div>


<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<?php
// Footer
include_once 'includes/footer.php';
?>