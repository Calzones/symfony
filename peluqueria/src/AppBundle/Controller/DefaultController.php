<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {
	/**
	 * @Route("/", name="prueba")
	 */
	public function daIgualElNombreDeEstaFuncionPorqueNadieLaVaALlamarNuncaPeroSinEmbargoLaMuyPutaSeEjecutaCadaVez(Request $request) {
		$id = array ();
		$form = $this->createFormBuilder ( $id )->add ( 'Usuario', TextType::class )->add ( 'Contrasenia', PasswordType::class )->add ( 'enviar', SubmitType::class, array (
				'label' => 'Iniciar sesion' 
		) )->getForm ();
		
		$form->handleRequest ( $request );
		
		if ($form->isSubmitted () && $form->isValid ()) {
			
			$id = $form->getData (); // Obtenemos los datos del formulario
			$em = $this->getDoctrine ()->getManager ();
			
			$query = $em->createQuery ( 'SELECT p
					    FROM AppBundle:Usuario p
					    WHERE p.nombre = :nombre' )->setParameter ( 'nombre', $id ["Usuario"] );
			$products = $query->getResult ();
			
			if (isset($products[0])){
				return $this->render ( "default/cita.html.twig", array (
						"form" => "",
						"usuario" => $id ["Usuario"]
				));
			}else{
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
	
	function damePurpurina() {
		$id = array ();
		$form = $this->createFormBuilder ( $id )->add ( 'Usuario', TextType::class )->add ( 'Contrasenia', PasswordType::class )->add ( 'enviar', SubmitType::class, array (
				'label' => 'Iniciar sesion'
		) )->getForm ();
	
		$form->handleRequest ( $request );
	
		if ($form->isSubmitted () && $form->isValid ()) {
	
			$id = $form->getData (); // Obtenemos los datos del formulario
			$em = $this->getDoctrine ()->getManager ();
	
			$query = $em->createQuery ( 'SELECT p
					    FROM AppBundle:Citas p
					    WHERE p.fecha = :fecha' )->setParameter ( 'fecha', $id ["fecha"] );
			$products = $query->getResult ();
			$cosa = "";
			foreach ( $products as $clave => $valor ) {
				$cosa .= "$clave " . "Usuario: " . $valor->getUsuario () . " " . "Fecha: " . $valor->getFecha () . "<br>";
			}
			return new Response ( $cosa );
		}
	}
}





