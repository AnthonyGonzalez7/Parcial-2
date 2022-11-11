<?php 
foreach(automoviles_controllers::Mostrar() as $autos){  
    $id_comparacion = $autos->getid_producto()?>
    <?php if(seg::decodificar($id) == $id_comparacion){
    ?>




<header class="row">
  <div class="logoholder text-center" >
    <img src="resource\logonav.png" width="100" height="45">
  </div><!--.logoholder-->

  <div class="me">
    <p>
      <strong>Automoviles S.A.</strong><br>
      La Chorrera, Panamá Oeste<br>
      Panamá.<br>
      
    </p>
  </div><!--.me-->

  <div class="info">
    <p>
      Web: <a>www.parcial2.com</a><br>
      E-mail: <a>programador@automoviles.com</a><br>
      Tel: +507 255-5848<br>
      Twitter: @automoviles_parcial2
    </p>
  </div><!-- .info -->

  <div class="bank">
    <p>
      Datos bacarios: 4511545515 <br>
      Titular: Automoviles S.A.<br>
    </p>
  </div><!--.bank-->

</header>


<div class="row section">

	<div class="col-2">
    <h1>Factura</h1>
  </div><!--.col-->

  <div class="col-2 text-right details">
    <p>
      Fecha: <input  class="datePicker" readonly><br>
      Factura #: <input value="100" readonly><br>
      Vence: <input class="twoweeks" readonly>
    </p>
  </div><!--.col-->
  
  
  
  <div class="col-2">
    

    <p class="client">
      <strong>Facturar a</strong><br>
      <?php  echo $_SESSION["nombre"] ?><br>
      <?php  echo $_SESSION["correo"] ?><br>
	  Panamá, Panamá<br>
	  255-7878 
    </p>
  </div><!--.col-->
  
  
  <div class="col-2">
   

    <p class="client">
      <strong>Enviar a</strong><br>
      <?php  echo $_SESSION["nombre"] ?><br>
      <?php  echo $_SESSION["correo"] ?><br>
	  Panamá, Panamá<br>
	  255-7878 
    </p>
  </div><!--.col-->

  

</div><!--.row-->

<div class="row section" style="margin-top:-1rem">
<div class="col-1">
	<table style='width:100%'>
    <thead>
	<tr class="invoice_detail">
      <th width="25%" style="text-align">Vendedor</th>
       <th width="25%">Orden de compra </th>
      <th width="20%">Enviar por</th>
      <th width="30%">Términos y condiciones</th>
	 </tr> 
    </thead>
    <tbody>
	<tr class="invoice_detail">
      <td width="25%" style="text-align">Programador</td>
       <td width="25%">#PO-2022 </td>
      <td width="20%">Entrega a Domicilio</td>
      <td width="30%">Pago al contado</td>
	 </tr>
	</tbody>
	</table>
</div>

</div><!--.row-->

<div class="invoicelist-body">
  <table>
    <thead>
      <th width="5%">Código</th>
      <th width="60%">Descripción</th>
      
      <th width="10%">Cant.</th>
      <th width="15%">Precio</th>
      <th class="taxrelated">IVA</th>
      <th width="10%">Total</th>
    </thead>
    <tbody>
      <tr>
        <td width='5%'><?php echo $autos->getid_producto()?></td>
        <td width='60%'><?php echo $autos->getTitlecar()?></td>
        <td class="amount">1</td>
        <td class="rate"><?php echo $autos->getcosto_compra()?></td>
        <td>$<?php echo $autos->getprecio_venta()?></td>
      </tr>
    </tbody>
  </table>
</div><!--.invoice-body-->

<div class="invoicelist-footer">
  <table>
    <tr class="taxrelated">
      <td>IVA:</td>
      <td id="total_tax"></td>
    </tr>
    <tr>
      <td><strong>Total: </strong></td>
      <td><h1>$<?php echo $autos->getprecio_venta()?></h1></td>
    </tr>
  </table>
</div>

<div class="note">
  <h2>Nota:</h2>
</div><!--.note-->
<?php }}?>
