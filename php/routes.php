<?php // Routing for links relative to the '/nodes' directory.

  require_once '../vendor/autoload.php';

  $app = new \Slim\App();
  $app->get('/', function($request, $response, $arguments){
    echo 'OK :D';
  });
  
  $app->get('/{node}', function($request, $response, $arguments){
    
    $node = $request->getAttribute('node');
    
    session_start();
    $_SESSION['node'] = $node;
    
    echo "<script>window.location.href = '/node.php'</script>";

  });

?>
