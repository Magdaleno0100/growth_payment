<?php 

//require_once $_SERVER["DOCUMENT_ROOT"] . "/core/auto_loader.php";
require_once dirname(__FILE__) . "/core/auto_loader.php";

$archivos_js[] = "Valida_data";
$archivos_js[] = "bootstrap.min";

$archivos_css[] = "payment_style";
$archivos_css[] = "bootstrap.min";

$UI = new ViewPrincipal(
	"Principal", 
	"Subtitle", 
	$archivos_js, 
	$archivos_css
);

$UI->createHead();
$UI->createBody();

?>

<div class="container">
	<div class="row test">
		<p>Información -- Logo</p>
	</div>

	<div class="row">
		<div id="step1" class="col-md-6 test cursorP">Step 1</div>
		<div id="step2" class="col-md-6 test cursorP">Step 2</div>
	</div>

	<div class="row">
		<div class="col-md-8 test">
			<div id="data_step_one">

				<div class="form-row">
    				<div class="form-group col-md-6">
      					<label>First Name*</label>
      					<input type="text" class="form-control" id="fName" required>
    				</div>
    				<div class="form-group col-md-6">
      					<label>Last Name*</label>
      					<input type="text" class="form-control" id="lName" required>
    				</div>
  			</div>

  				<div class="form-row">
    				<div class="form-group col-md-6">
      					<label>Email*</label>
      						<input type="text" class="form-control" id="email" required>
    				</div>
    				<div class="form-group col-md-6">
      					<label>Phone Number*</label>
      					<input type="text" class="form-control" id="pNumber" required>
    				</div>
  				</div>

  				<div class="form-row">
    				<div class="form-group col-md-6">
      					<label>Company Name*</label>
      					<input type="text" class="form-control" id="cName">
    				</div>
    				<div class="form-group col-md-6">
    					<div class="form-check margtop">
      						  <input class="form-check-input" type="checkbox" value="" id="checkT">
        					<label class="tamtwelve">
                    I would like to receive an invoice (after you submit payment out team member will reach out to you gather invoice data)
                </label>
    					</div>
    				</div>
  				</div>

          <div class="form-row">
            <div class="form-group col-md-12" id="resultado" style=""></div>
          </div>



  				<div class="centrarthing">
  					<button class="btn btn-primary" type="button" onclick="chechForm()">Siguente</button>
  				</div>

			</div>

			<div id="data_step_two">

				<div class="form-group">
    				<label for="inputAddress">Credit Card</label>
    				<input type="text" class="form-control" id="inputAddress">
  				</div>

			</div>

		</div>
		<div class="col-md-4 test">
			<p>Infor</p>
		</div>
	</div><!--End Row-->
  <div class="row separeSection">

      <div class="col-md-8 centrarthing">
          <img src="img/logos_tarjetascredito1.jpg" alt="" class="forma_img">
          <p><span></span>For your security, all orders are processed on a secured server.</p>
          <img src="img/Certificados-SSL.jpg" alt="" class="forma_img_ssl">
      </div>

      <div class="col-md-4"></div>

  </div><!--End Row-->
</div><!--End container-->




<!--
d-none d-sm-block
-->
<?php 
	$UI->createFooter();
?>




