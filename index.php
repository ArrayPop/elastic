<?php

use Elastic\Elasticsearch\ClientBuilder;

require 'vendor/autoload.php';

$client = ClientBuilder::create()
    ->setHosts(['http://localhost:9200'])
    ->setBasicAuthentication('elastic', 'root')
    ->build();
