<?php

$app->group('/api/v1', function($app) {
$app->get('users', function ($request, $response,$id) {
    $users = App\Models\User::all();
    return $this->response->withJson($users);
});
})
?>

