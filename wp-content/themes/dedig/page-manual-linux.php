<?php 
    get_header();
    ?>
<style>
#manual img {
    margin-bottom: 20px;
}
</style>
<div class="container" id="manual">
    <h1>Manual de Instalação do Dedig para Linux</h1>

    <ul class="nav nav-tabs" role='tablist'>
        <li role="presentation" class="active"><a href="#modo-grafico" aria-controls="grafico" role="tab" data-toggle="tab">Instalação em modo gráfico</a></li>
        <li role="presentation"><a href="#modo-terminal" aria-controls="terminal" role="tab" data-toggle="tab">Instalação via terminal</a></li>
    </ul>

    <div class="tab-content" id="manual-content">
    <?
        include 'manual-files/manual-grafico.php';
        include 'manual-files/manual-terminal.php';
    ?>
    </div>
</div>

<?
    get_footer();
?>