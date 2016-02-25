<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;

class DefaultController extends Controller {
	/**
	 * @Route("/", name="inicio")
	 */
	public function daIgualElNombreDeEstaFuncionPorqueNadieLaVaALlamarNuncaPeroSinEmbargoLaMuyPutaSeEjecutaCadaVez(Request $request) {
		$id = array ();
		$form = $this->createFormBuilder ( $id )
											->setMethod("POST")
											// ->setAction("")
											->add ( 'Usuario', TextType::class )
											->add( 'Contrasenia', PasswordType::class )
											->add( 'enviar', SubmitType::class, array ('label' => 'Iniciar sesion') )->getForm();
		
		$form->handleRequest( $request );
		
		if ($form->isSubmitted() && $form->isValid()) {
			
			$id = $form->getData(); // Obtenemos los datos del formulario
			$em = $this->getDoctrine()->getManager();
			
			$query = $em->createQuery ( 'SELECT p FROM AppBundle:Usuario p WHERE p.nombre = :nombre' )->setParameter ( 'nombre', $id ["Usuario"] );
			$products = $query->getResult ();
			
			if (isset ($products [0])) {
				return $this->redirect ( $this->generateUrl ( "citas", array (
						"usuario" => $id ["Usuario"] 
				) ) );
			} else {
				return $this->render ( "default/inicio.html.twig", array (
						
						"form" => $form->createView (),
						"mensajito" => "Usuario o contrasenia incorrecto",
						"footer" => "Hola Ana" 
				) );
			}
		}
		
		return $this->render ( "default/inicio.html.twig", array (
				
				"form" => $form->createView (),
				"footer" => "Hola Ana" 
		) );
	}
	/**
	 * @Route("/citas/{usuario}", name="citas")
	 */
	public function damePurpurina(Request $request, $usuario) {
		$id = array();
		$fecah = Date("d-m-Y");
		list($dia, $mes, $anio) = split('[/.-]', $fecah);
		
		$form = $this->createFormBuilder ( $id )
												->add('dueDate', DateType::class, 
 														array(
															'label' => ' ',
 															'widget' => 'choice',
 															'format' => 'ddMMyyyy',
 															'days' => range($dia , $dia + 7),
 															'years' => range($anio, $anio),
 															'months' => range($mes, $mes),
 															)
													)
												->add('reservar', SubmitType::class, array ('label' => 'Reservar'))->getForm ();
		$form->handleRequest ( $request );
		
		if ($form->isSubmitted() && $form->isValid()) {

			$id = $form->getData(); // Obtenemos los datos del formulario
			$em = $this->getDoctrine()->getManager();
			
			list($diaf, $mesf, $aniof) = split("[/.-]", $id["dueDate"]->format("d-m-Y"));
			$fecha = "$diaf $mesf $aniof";
			
			$query = $em->createQuery ( 'SELECT p FROM AppBundle:Citas p WHERE p.fecha = :fecha' )->setParameter ("fecha", "$fecha");
			$products = $query->getResult();
						
			return $this->render ( "default/cita.html.twig", array (
					"usuario" => $usuario,
					"form" => $form->createView(),
					"footer" => "Hola as",
					"tabla" => $products 
			) );
		}
		return $this->render ( "default/cita.html.twig", array (
				"usuario" => $usuario,
				"form" => $form->createView(),
				"footer" => "Hola Ana",
				"tabla" => ""
		) );
	}
}





