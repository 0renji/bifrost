<?php

namespace App\Controller; 
use Symfony\Component\HttpFoundation\Response;

class QuestionController
{
	# can also be called action
	public function homepage()
	{
		return new Response('CONJURATION COMPLETE');
	}
}