<?php
require 'vendor/autoload.php';


$app = new \Slim\App;
$app->get('/myroute', function($request, $response) {

// all the good stuff here (getting the data from the db and all that)

require_once('db_controller.php');
 $query = "select * from galcat";
 $result = $conn->query($query);
 while ($row = $result->fetch_assoc()){
$data[] = $row;
 }

return $response->withJson($data);

});	





$app->run();