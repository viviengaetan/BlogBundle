<?php

namespace GGTeam\BlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render(
            'GGTeamBlogBundle:Front\Home:index.html.twig',
            array('title' => $this->get('translator')->trans('Home'))
        );
    }
}