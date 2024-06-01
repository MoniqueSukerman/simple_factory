<?php

require 'vendor/autoload.php';

use Monique\SimpleFactory\NotasFiscaisFactory;

$simpleFactory = new NotasFiscaisFactory();

$simpleFactory->create(NotasFiscaisFactory::NFSE, '106');
$simpleFactory->create(NotasFiscaisFactory::NFE, '109');
$simpleFactory->create('Recibo', '49');