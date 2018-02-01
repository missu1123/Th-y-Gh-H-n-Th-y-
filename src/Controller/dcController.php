<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class dcController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $rq)
    {
        $text = "Hello World";
        $action = $rq->query->get('action');
        if (isset($action)) {
            $text = "Thấy Ghê Hôn Thầy???????????????????????????????????????????";
        }
        return $this->render('mypage/mypage.html.twig', ['txt' => $text]);
    }
}