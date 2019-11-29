<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

/**
 * Post controller.
 * @Rest\Route("/api",name="api_")
 */
class PostController extends AbstractFOSRestController
{
    /**
     * All posts
     * @Rest\Get("/posts")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getPostsAction()
    {
        $data = [
            ['title' => 'First post', 'description' => 'Description 1'],
            ['title' => 'Second post', 'description' => 'Description 2'],
            ['title' => 'Third post', 'description' => 'Description 3']
        ];
        $view = $this->view($data, 200)
            ->setTemplate("App:Posts:getPosts.html.twig")
            ->setTemplateVar('posts');

        return $this->handleView($view);
    }
}