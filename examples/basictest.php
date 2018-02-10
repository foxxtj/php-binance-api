<?php
/**
 * Created by PhpStorm.
 * User: tomvoss
 * Date: 10-02-18
 * Time: 13:05
 */

require '../vendor/autoload.php';
$api = new Binance\API("YzToo8s8ZPsmoXAPFMuubyiBRcLh4Bc0iupGsu5oC9VbfpCL0rb2qjYNbS9J5s2E","EVLRZeYzhrGS4PkcL4QaT5xHQcntV16BfPlfuHUiqPwmnoqTmXWx5ZxHYA2v9Fge");


// Get latest price of a symbol
$ticker = $api->prices();
print_r($ticker); // List prices of all symbols
echo "Price of BNB: {$ticker['BNBBTC']} BTC.\n";

// Get all of your positions, including estimated BTC value
$balances = $api->balances($ticker);
print_r($balances);
