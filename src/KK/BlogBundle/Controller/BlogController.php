<?php
// src/KK/BlogBundle/Controller/BlogController.php

namespace KK\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Blog Controller
 */
class BlogController extends Controller
{
    public function showAction($id, $slug)
    {
        $em = $this->getDoctrine()->getManager();

        $blog = $em->getRepository('KKBlogBundle:Blog')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post');
        }

        return $this->render('KKBlogBundle:Blog:show.html.twig', array(
            'blog' => $blog
        ));
    }
}