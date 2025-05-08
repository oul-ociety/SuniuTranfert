<?php

return [
    'master_key' => env('PAYDUNYA_MASTER_KEY'),
    'private_key' => env('PAYDUNYA_PRIVATE_KEY'),
    'public_key' => env('PAYDUNYA_PUBLIC_KEY'),
    'token' => env('PAYDUNYA_TOKEN'),
    'mode' => env('PAYDUNYA_MODE', 'test'),
    'company_name' => env('PAYDUNYA_COMPANY_NAME', 'Mon Magasin'),
    'company_logo' => env('PAYDUNYA_COMPANY_LOGO', 'https://example.com/logo.png'),
    'company_website' => env('PAYDUNYA_COMPANY_WEBSITE', 'https://example.com'),
];
