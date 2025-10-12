<?php
$CONFIG = array (
    'trusted_domains' => 
    array (
    0 => 'localhost',
    1 => 'nextcloud.csnguyen.de',
    2 => 'office.csnguyen.de',
    3 => 'son-server.tail1334c6.ts.net',
    ),
    'trusted_proxies' => 
    array (
    0 => '10.0.0.0/0',
    ),
    'overwriteprotocol' => 'https',
    'overwritehost' => 'nextcloud.csnguyen.de',
    'overwrite.cli.url' => 'https://nextcloud.csnguyen.de',
    'enable_previews' => true,
    'enabledPreviewProviders' => array (
    'OC\Preview\Imaginary',
    'OC\Preview\HEIC',
    'OC\Preview\Movie',
    'OC\Preview\PNG',
    'OC\Preview\JPEG',
    'OC\Preview\GIF',
    'OC\Preview\BMP',
    'OC\Preview\XBitmap',
    'OC\Preview\MP3',
    'OC\Preview\MP4',
    'OC\Preview\TXT',
    'OC\Preview\MarkDown',
    'OC\Preview\PDF'
    ),
    'preview_imaginary_url' => 'nextcloud-imaginary.prod.svc.cluster.local',
    'custom_worker_domain' => 'office.csnguyen.de', 
    'default_phone_region' => 'DE',
);