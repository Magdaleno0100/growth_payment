<?php 


	class Order{

		private $conector;


		public function __construct(){
			try {
				$this->conector = ConnectDb::Conector();
			} catch (Exception $e) {
				die();
			}

		}


		public function InsertaOrder($data_array){

			//Limpiar data
		//$data_array = explode(",",$data);
		//print_r($data_array);
		$FnameOrder = $data_array[0];
		$LnameOrder = $data_array[1];
		$emailOrder = $data_array[2];
		$phoneOrder = $data_array[3];
		$companyOrder = $data_array[4];
		$numberCartOrder = $data_array[5];
		$dateCart = $data_array[6];
		$cvcOrder = $data_array[7];
		$countOrder = $data_array[8];
		$productoOrder = $data_array[9];


		//echo $FnameOrder."-".$LnameOrder."-".$emailOrder."-".$phoneOrder."-".$companyOrder."-".$numberCartOrder."-".$dateCart."-".$cvcOrder."-".$countOrder."-".$productoOrder;
		


			try {

					$sql = "INSERT INTO tblOrder (idOrder, FnameOrder, LnameOrder, emailOrder, phoneOrder, comoanyOrder, numberCartOrder, dateCart, cvcOrder, countOrder, productoOrder) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

					$result = $this->conector->prepare($sql)->execute(
						array(
							0, $FnameOrder, $LnameOrder, $emailOrder, $phoneOrder, $companyOrder, $numberCartOrder, $dateCart, $cvcOrder, $countOrder, $productoOrder
						));

					if ($result) {
						echo 1;
					}else{
						echo 0;
					}

        			


				
			} catch (Exception $e) {
				//die(0);

				echo $e;
				
			}
	

		}//end InsertaOrder

	}


?>