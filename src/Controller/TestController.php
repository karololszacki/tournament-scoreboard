<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 03.01.19
 * Time: 10:43
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    /**
     * @Route("/lucky/number/{max}", name="app_lucky_number")
     */
    public function number()
    {
        $number = random_int(0, 10);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}