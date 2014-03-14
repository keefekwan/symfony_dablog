<?php
// src/KK/BlogBundle/Controller/PageController.php

namespace KK\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $blogs = $em->getRepository('KKBlogBundle:Blog')
            ->getLatestBlogs();

        return $this->render('KKBlogBundle:Page:index.html.twig', array(
            'blogs' => $blogs
        ));
    }

    public function aboutAction()
    {
        return $this->render('KKBlogBundle:Page:about.html.twig');
    }

    public function sidebarAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tags = $em->getRepository('KKBlogBundle:Blog')
            ->getTags();

        $tagWeights = $em->getRepository('KKBlogBundle:Blog')
            ->getTagWeights($tags);

        return $this->render('KKBlogBundle:Page:sidebar.html.twig', array(
            'tags' => $tagWeights
        ));
    }

}