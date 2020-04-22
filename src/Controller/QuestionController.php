<?php

namespace App\Controller; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

# one rule of a controller is to always return a Response
# technically you can return everything but that is advanced

class QuestionController extends AbstractController
{
    # "/" is basically your home or index route
    # your index is always called automatically
    /**
     * @Route("/", name="app_homepage")
     */
	# can also be called action or ROUTE
	public function homepage()
	{
		return $this->render('question/homepage.html.twig', []);
	}

	# {x} is a wildcard whats written inside doesnt matter
    # what is inside the wildcard will be transmitted to the func
    # the content of the wildcard is set through the called route
    # so if you call questions/whyAreYouRunning
    # the slug will be whyAreYouRunning
    /**
     * @Route("/questions/{slug}")
     */
	public function show($slug) {
        $answers = [
            'Do something',
            'Maybe this helps',
            'I have this problem too'
        ];

        dump($this);
	    return $this->render('question/show.html.twig', [
	        'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers
        ]);
    }
}