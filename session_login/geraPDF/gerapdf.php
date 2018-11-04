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

<style>

    td, th {
        text-align: left;
        padding: 8px;
    }

</style>


 <table style="width: 100%; margin-left:-8px;">
    <tr>
        <th style="font-size:10px; font-weight: bold; width:72%; ">Assinatura do Solictante:</th>
        <th style="font-size:10px; font-weight: bold; width:20%;">Data do Fechamento:</th>
    </tr>
    
    <tr>
       <td><sup>—————————————————————————————————————</sup></td>
       <td><sup>———<sup>/</sup>———<sup>/</sup>———</sup></td>
    </tr>
 </table>


 <table style="width: 100%; margin-left:-8px;">
    <tr>
        <th style="font-size:10px; font-weight: bold; width:100% ">Assinatura do Agente:</th>
    </tr>

    <tr>
       <td><hr style="width:100%; "></td>
    </tr>

 </table>


  <hr style="color:white; width:0.5px;"> 

  <form style="font-size:10px; font-weight: bold;" action="/action_page.php">
      <label>Autorizo fechar o chamado:</label>
      <input style="width: 11px;" type="checkbox" name="vehicle1" value="Bike"> sim
      <input style="width: 11px;" type="checkbox" name="vehicle2" value="Car"> não porque?
      <hr style="color:white; width:0.5px;"> 
      <div style="width:100%;height:1px;background:black "></div>
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