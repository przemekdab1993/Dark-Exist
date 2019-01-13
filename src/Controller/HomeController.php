<?php

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\SubmitButtonBuilder;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'the_username' => 'Przemek',
        ]);
    }

    /**
     * @Route("login", name="login")
     *
     * Logowanie do serwisu
     */
    public function login()
    {
        $form = $this->createFormBuilder()
            ->setAction('/setlogin')
            ->add('username')
            ->add('password')
            ->add('teeee', SubmitType::class)
            ->getForm();
        return $this->render('home/login.html.twig', [
            'the_form' => $form->createView()
        ]);
    }

    /**
     * @Route("setlogin", name="setlogin")
     */
    public function setlogin(Request $request)
    {
        return $this->render( 'home/log.html.twig', [

        ]);
    }
}
