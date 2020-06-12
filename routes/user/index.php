<?php

/**
 * Example data method that returns
 * user data.
 */
$data = function ($req, $res) {
  $id = $req->param('id');

  $res->output([
    'id' => $id,
    'username' => 'test',
    'email'    => 'test@test.com',
    'fullName' => 'Test McGee'
  ]);
};

return [
  '/:id/data' => [ 'handler' => $data ]
];
