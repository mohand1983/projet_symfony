<?php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function indexAction()
    { 
    
				$id = 5;
				// On veut avoir l'URL de l'article d'id $id.
				$url = $this->generateUrl('sdzblog_voir', array('id' => $id));
				// $url vaut « /blog/article/5 »
				// On redirige vers cette URL (ça ne sert à rien, on est d'accord, c'est pour l'exemple !)
				return $this->redirect($url); 
    		//return $this->render('SdzBlogBundle:Blog:index.html.twig');
    }
    
		public function voirAction($id)
		{
		 
      // Créons nous-mêmes la réponse en JSON, grâce à la fonction json_encode()
    $response = new Response(json_encode(array('id' => $id)));
    // Ici, nous définissons le Content-type pour dire que l'on renvoie du JSON et non du HTML
    $response->headers->set('Content-Type', 'application/json');
    return $response;
		}
		
		  public function voirSlugAction($slug, $annee, $format)
			{
				// Ici le contenu de la méthode
				return new Response("On pourrait afficher l'article correspondant au slug '".$slug."', créé en ".$annee." et au format ".$format.".");
			}
		
}
