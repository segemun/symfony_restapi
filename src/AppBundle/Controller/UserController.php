<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class UserController extends Controller
{
    /**
     * @Rest\View()
     */
    public function getCurrentUserAction()
    {
        return [
            'user' => $this->getUser()
        ];
    }
}