<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\BlogPost;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/blog-post/{id}/show", name="blog_post_show")
     */
    public function number($id)
    {
        $blogPost = $this->getDoctrine()->getRepository(BlogPost::class)->find($id);

        if (!$blogPost) {
            throw $this->createNotFoundException('The blog post does not exist');
        }

        return $this->render(
            'default/blog_page.html.twig',
            [
                'blogPost' => $blogPost
            ]
        );
    }
}
