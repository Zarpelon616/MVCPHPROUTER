<?php
require __DIR__.'/includes/app.php'; 


use \App\Http\Router;



//INCIAR O ROUTER
$obRouter=new Router(URL);
//INCLUI AS ROTAS DE PAGINAS
include  __DIR__.'/routes/pages.php';
//IMPRIME O RESPONSE DA RORA.
$obRouter->run()->sendResponse();
