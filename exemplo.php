<?php 

require "vendor/autoload.php";

use \Axitech\Digitalcep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipCode("88132600");

echo "<pre>"; print_r($resultado);