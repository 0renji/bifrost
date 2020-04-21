<?php

namespace App\Controller; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    # "/" is basically your home or index route
    # your index is always called automatically
    /**
     * @Route("/")
     */
	# can also be called action or ROUTE
	public function homepage()
	{
		return new Response('CONJURATION COMPLETE');
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
	    return new Response(sprintf('Future Page to show the question "%s"!', ucwords(str_replace('-', ' ', $slug))));
    }
}