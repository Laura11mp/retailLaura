<?php
/*els subespais es separen amb \ 
tots els espais de noms pengen d'una arrel App
*/
namespace App\Controller; // perteneix al espai de noms Controller ( cada carpeta dins de src es un espai de noms )
use Symfony\Component\HttpFoundation\Response; ///var/www/html/symfony/retailPaula/vendor/symfony/http-foundation/Response.php
//use Symfony\Component\HttpFoundation\Response as Res; per a cridar a la clase de forma abreujada
use Symfony\Component\Routing\Annotation\Route;
class IniciController {
    #[Route('/' ,name:'inici')]

    public function inici(){
        return new Response("Projecte Gestió Retail de 2n Daw");
    }
}
?>
