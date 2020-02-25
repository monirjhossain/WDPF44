<?php

	$customers = array();

	$customers[] = array("Rahim", "rahim@gmail.com ", "01948283811");
	$customers[] = array("Karim", "kahim@gmail.com ", "01948225633");
	$customers[] = array("Rasel", "rasel@gmail.com ", "01865325831");
	$customers[] = array("Atik", "atik@gmail.com ", "01948693251");


	echo "<pre>";
	/*print_r($customers);

	foreach ($customers as $customer) {
		vprintf("Name: %s Email: %s Number: %s <br>", $customer );
	}*/

	foreach ($customers as $customer) {
		echo "Name: " . $customer[0]. "Email: " . $customer[1]."Phone: " . $customer[2]."<br>";
	}


?>