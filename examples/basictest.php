<?php
/**
 * Created by PhpStorm.
 * User: tomvoss
 * Date: 10-02-18
 * Time: 13:05
 */

require '../vendor/autoload.php';
$api = new Binance\API();

// Grab realtime updated depth cache via WebSockets
$api->depthCache(["XVGBTC"], function($api, $symbol, $depth) {
    echo "{$symbol} depth cache update\n";
    $limit = 11; // Show only the closest asks/bids
    $sorted = $api->sortDepth($symbol, $limit);
    $bid = $api->first($sorted['bids']);
    $ask = $api->first($sorted['asks']);
    echo $api->displayDepth($sorted);
    echo "ask: {$ask}\n";
    echo "bid: {$bid}\n";
});
