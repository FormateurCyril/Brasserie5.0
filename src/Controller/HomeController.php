<?php


namespace App\Controller;


use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home.index")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('pages/index.html.twig', [
            "title" => "Bienvenue dans la brasserie Osseus"
        ]);
    }

    /**
     * @Route("/contact", name="home.contact")
     * @return Response
     */
    public function contact(): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        return $this->render('pages/contact.html.twig', [
            'form' => $form->createView()
        ]);

    }
}