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
      					<input type="text" class="form-control">
    				</div>
    				<div class="form-group col-md-6">
      					<label>Last Name*</label>
      					<input type="text" class="form-control">
    				</div>
  				</div>

  				<div class="form-row">
    				<div class="form-group col-md-6">
      					<label>Email*</label>
      						<input type="text" class="form-control">
    				</div>
    				<div class="form-group col-md-6">
      					<label>Phone Number*</label>
      					<input type="text" class="form-control">
    				</div>
  				</div>

  				<div class="form-row">
    				<div class="form-group col-md-6">
      					<label>Company Name*</label>
      					<input type="text" class="form-control">
    				</div>
    				<div class="form-group col-md-6">
    					<div class="form-check">
      						<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
        					<label class="custom-control-label" for="customControlAutosizing">Text</label>
    					</div>
    				</div>
  				</div>

  				<div class="centrarthing">
  					<button class="btn btn-primary" type="submit">Siguente</button>
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
	</div>
</div>




<!--
d-none d-sm-block
-->
<?php 
	$UI->createFooter();
?>




