<?php

namespace GGTeam\BlogBundle\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
    public function indexAction()
    {
        return $this->render('GGTeamBlogBundle:Home:index.html.twig');
    }
}