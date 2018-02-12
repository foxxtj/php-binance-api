<?php
/**
 * Created by PhpStorm.
 * User: tomvoss
 * Date: 10-02-18
 * Time: 13:05
 */

require '../vendor/autoload.php';
$api = new Binance\API();

$trades = $api->tradesV1('EVXBTC', 5);

