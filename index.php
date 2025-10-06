<?php
//INCLUINDO A CHAMADA DO ARQUIVO HEADER.PHP QUE CONTÉM O PADRÃO DO CABEÇALHO

include_once("templates/header.php");

?>

<!--Corpo da home-->
<!--Checar se existe mensagem na session. Sempre que acontecer alguma operação de CRUD, deverá aparecer uma mensagem na área da SESSION-->


<?php if(isset($printMsg) && $printMsg != ''): ?>

    <p id="msg"><?= $printMsg ?></p>

<?php endif; ?>

<h1 id="main-title">
</h1>

<?php if(count($contatos) > 0): ?>
    
    <table class="table" id="contatos-tabela">
        <thead>
            <tr>
            <th scope="col">#</th>
            </tr>

        </thead>
    </table>

    <?php else: ?>
    <?php endif; ?>

<!--chamada do rodapé-->

<?php
//INCLUINDO A CHAMADA DO ARQUIVO FOOTER.PHP QUE CONTÉM O PADRÃO DO RODAPÉ

include_once("templates/footer.php");

?>