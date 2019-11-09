<?php

$app->group('/api/v1', function($app) {
$app->get('/store/user/{id}', function ($request, $response,$id) {
    $products = App\Models\Store::where('user_id',$id)->get();
    return $this->response->withJson($products);
});
$app->get('/math/u/{id}', function ($request, $response,$id) {
    $total = 0 ;
    $total2 = 0 ;
    $data= App\Models\Store::where('user_id',$id)->get();
   foreach ($data as $item ) {
       $math =  $item->trade * $item->q; 
       $math2 =  $item->sell * $item->q; 
         $res = $math2 - $math;
       $total+=$res;
       $total2+=$math;
        }
   $t = $total + $total2;
   $productsCount = App\Models\Store::where('user_id',$id)->count();
   $QuantityCount = App\Models\Store::where('user_id',$id)->sum('q');
   $arr = array ( 
    array( 
    "profit" => $total,
    "original_money" => $total2,
    "total" => $t,
    "productsCount" => $productsCount,
    "QuantityCount" => $QuantityCount,
    ), 
); 
return $this->response->withJson($arr);
});

$app->post('/store/create', function ($request, $response,$id) {
    $user=  App\Models\Store::create([
        'title' => $request->getParam('title'),
        'q' => $request->getParam('q'),
        'trade' => $request->getParam('trade'),
        'sell' => $request->getParam('sell'),
        'user_id' => $request->getParam('user_id'),
    ]);
    return $this->response->withJson($user,200);
});

$app->patch('/store/{id}', function ($request, $response,$id) {
    $update = App\Models\Store::whereId($id)->update([  
             'title' => $request->getParam('title'),
             'q' => $request->getParam('q'),
             'trade' => $request->getParam('trade'),
             'sell' => $request->getParam('sell'),
             'user_id' => $request->getParam('user_id'),
        ]);
    $data = array('updated' => true);
    return $this->response->withJson($data,200);
});
$app->delete('/store/{id}', function ($request, $response,$id) {
    $update = App\Models\Store::whereId($id)->delete();
    $data = array('deleted' => true);
    return $this->response->withJson($data,200);
});
})
?>

