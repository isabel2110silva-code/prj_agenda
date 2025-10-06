<!--INÍCIO DO CABEÇALHO-->
<?php
//INCLUINDO A CHAMADA DO ARQUIVO HEADER.PHP QUE CONTÉM O PADRÃO DO CABEÇALHO

include_once("templates/header.php");

?>
<!--FIM DO CABEÇALHO-->

<!--INÍCIO DO CORPO DA HOME-->
<div id="link-voltar-container">
    <a id="link-voltar" href="<?= $Base_url ?>index.php">Voltar</a></p>
</div>

<div class="container" id="view-contato-container">

    <h1 id="main-title"><?= $contatos["nome"] ?></h1>
    <p class="negrito">Telefone:</p>
    <p><?= $contatos["tel"] ?></p>

    <p class="negrito">Observação:</p>
    <p><?= $contatos["obs"] ?></p></p>

</div>

<!--FIM DO CORPO DA HOME-->

<!--INÍCIO DO RODAPÉ-->
<?php
//INCLUINDO A CHAMADA DO ARQUIVO FOOTER.PHP QUE CONTÉM O PADRÃO DO RODAPÉ

include_once("templates/footer.php");

?>
<!--FIM DO RODAPÉ-->