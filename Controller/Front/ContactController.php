<?php

namespace GGTeam\BlogBundle\Controller\Front;

use GGTeam\BlogBundle\Model\Contact;
use GGTeam\BlogBundle\Form\Type\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    public function indexAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(new ContactType(), $contact);

        $form->handleRequest($request);

        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                // Perform some action, such as sending an email

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('gg_team_blog_contact_home'));
            }
        }

        return $this->render(
            'GGTeamBlogBundle:Front\Contact:index.html.twig',
            array(
                'form' => $form->createView(),
                'title' => $this->get('translator')->trans('Contact')
            )
        );
    }
}