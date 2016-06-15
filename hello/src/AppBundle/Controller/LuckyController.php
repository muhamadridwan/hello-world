<?php 
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
	/**
	 * @Route("/lucky/number",name="number")
	 */
	public function numberAction()
	{
		$number = rand(0,100);
		return new Response('<html><body>Lucky number: '.$number.'</body></html>');
	}

	/**
	 * @Route("/lucky/api/number")
	 */
	public function apiNumberAction()
	{
		return new JsonResponse(array('lucky_number'=>rand(0,100)));
		//return new Response(json_encode(array('lucky_number'=>rand(0,100))),200, array('Content-Type'=>'application/json'));
	}

	/**
	 * @Route("/lucky/numbers/{count}")
	 */
	public function numbersAction($count)
	{
		$numbers = array();
		for($i=0; $i<$count; $i++)
		{
			$numbers[] = rand(0,100);
		}

		$numberList = implode(', ',$numbers);
		return $this->render('lucky/number.html.twig',array('luckyNumberList'=>$numberList));
		/*
		$html = $this->container->get('templating')->render('lucky/number.html.twig',array('luckyNumberList'=> $numberList));
		return new Response($html);*/

	}	

	/**
	* @Route("lucky/tes/")
	*/
	public function tesAction()
	{
		return $this->redirectToRoute("hellohello");
		//return $this->redirect('http://symfony.com/doc');
	}
}
?>