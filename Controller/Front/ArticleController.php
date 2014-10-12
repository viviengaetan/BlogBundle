<?php

namespace GGTeam\BlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
class ArticleController extends Controller
{
    public function showAction($title)
    {
        return $this->render('GGTeamBlogBundle:Front/Article:show.html.twig');
    }

    public function searchAction($pattern)
    {
        return $this->render('GGTeamBlogBundle:Front/Article:search.html.twig');
    }

    public function searchByTagAction($tag)
    {
        return $this->render('GGTeamBlogBundle:Front/Article:search.html.twig');
    }
}