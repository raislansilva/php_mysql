<?php

$nome = "raislan";
$sobrenome = "da silva";
$atendimento = "Concluido";
$cargo = "Desenvolvedor";



/* Carrega a classe DOMPdf */
require_once("dompdf/dompdf_config.inc.php");

/* Cria a instância */
$dompdf = new DOMPDF();

/* Carrega seu HTML */
$dompdf->load_html('

  <p style="font-size:13px; font-weight: bold;">Assinatura do Solictante:_________________________________________________________________________________</p>

  <p style="font-size:13px; font-weight: bold;">Data Fechamento:_______________________________________________________________________________________</p>

  <form style="font-size:13px; font-weight: bold;" action="/action_page.php">
      <label>Autorizo fechar o chamado:</label>
      <input style="width: 14px;" type="checkbox" name="vehicle1" value="Bike"> sim
      <input style="width: 14px;" type="checkbox" name="vehicle2" value="Car"> não porque?<labe>___________________________________________________________</label>
      <hr style="color:white; width:0.5px;"> 
      <label>_______________________________________________________________________________________________________ </label>
  </form>

');

/* Renderiza */
$dompdf->render();

/* Exibe */
$dompdf->stream(
    "saida.pdf", /* Nome do arquivo de saída */
    array(
        "Attachment" => false /* Para download, altere para true */
    )
);
?>