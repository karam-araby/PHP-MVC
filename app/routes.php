<?php

$app->group('/api/v1', function($app) {
$app->get('/store/user/{id}', function ($request, $response,$id) {
    $products = App\Models\Store::where('user_id',$id)->get();
    return $this->response->withJson($products);
});
})
?>

