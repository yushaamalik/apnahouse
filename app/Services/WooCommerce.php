<?php

namespace App\Services;

use Automattic\WooCommerce\Client;

class WooCommerce
{

    public function woocommerce()
    {
        return new Client(
            env('WP_URL'),
            env('WP_CONSUMER_KEY'),
            env('WP_CONSUMER_SECRET'),
            [
                'wp_api' => true,
                'version' => 'wc/v3'
            ]
        );
    }

    // e.g.
    // return WooCommerce::woocommerce()->get('products');
    // return WooCommerce::woocommerce()->get('products/1984');

}
