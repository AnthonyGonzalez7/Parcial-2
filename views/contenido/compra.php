<?php foreach(automoviles_controllers::Mostrar() as $autos){  
    $id_comparacion = $autos->getid_producto()?>
    <?php if(seg::decodificar($id) == $id_comparacion){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Factura | <?php echo $autos->getTitlecar()?></title>
    <link rel="stylesheet" href="resource/assets/css/main.css">
</head>
<body>
<div class="control-bar">
  <div class="container">
    <div class="row">
      <div class="col-2-4">
        <div class="slogan">Facturación </div>    
      </div>
      <div class="col-4 text-right">
        <a href="javascript:window.print()">Imprimir</a>
      </div><!--.col-->
    </div><!--.row-->
  </div><!--.container-->
</div><!--.control-bar-->



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
      Fecha: <input type="text" class="datePicker" /><br>
      Factura #: <input type="text" value="100" /><br>
      Vence: <input class="twoweeks" type="text"/>
    </p>
  </div><!--.col-->
  
  
  
  <div class="col-2">
    

    <p class="client">
      <strong>Facturar a</strong><br>
      [Nombre cliente]<br>
	  Panamá, Panamá<br>
	  255-7878 
    </p>
  </div><!--.col-->
  
  
  <div class="col-2">
   

    <p class="client">
      <strong>Enviar a</strong><br>
      [Nombre cliente]<br>
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
      <td width="25%" style="text-align">John Doe</td>
       <td width="25%">#PO-2022 </td>
      <td width="20%">DHL</td>
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
        <td width='5%'><a class="control removeRow" href="#">x</a> <span>12345</span></td>
        <td width='60%'><?php echo $autos->getTitlecar()?></td>
        <td class="amount"><input type="text" value="1"/></td>
        <td class="rate"><input type="text" value="<?php echo $autos->getcosto_compra()?>" /></td>
        <td><?php echo $autos->getprecio_venta()?></td>
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
      <td><h1><?php echo $autos->getprecio_venta()?></h1></td>
    </tr>
  </table>
</div>

<div class="note">
  <h2>Nota:</h2>
</div><!--.note-->

<footer class="row">
  <div class="col-1 text-center">
    <p class="notaxrelated">El monto de la factura no incluye el impuesto sobre las ventas.</p>
    
  </div>
</footer>
<?php }}?>
<br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/bower_components/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="resource/assets/js/main.js"></script>
</body>
</html>