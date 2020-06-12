<?php

return [

  'baseUri'   => '/',
  'logging'   => [
    'enabled' => true,
    'path'    => __DIR__ . '/../logs'
  ],
  'rateLimit' => [ 'enabled' => false ],
  'storage'   => [ 'path'    => __DIR__ . '/../database' ]

];
