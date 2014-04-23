<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $request = $this->getRequest();
	//echo $request->query->get('str');
	$string = $request->query->get('str');
 	$length = strlen($string);
	
	$invertida = '';
	for($i = $length-1; $i >= 0; $i--){
    	    $invertida.= $string[$i];
	}

        return $this->render('BloggerBlogBundle:Default:index.html.twig', array('invertida' => $invertida));
    }
}
