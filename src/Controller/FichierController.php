<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\AjoutFichierType;
use App\Entity\Fichier;
use Symfony\Component\HttpFoundation\Request;

class FichierController extends AbstractController
{
    
    /**
     * @Route("/ajoutFichier", name="ajoutFichier")
     */
    public function ajoutFichier(Request $request)
    {
        $fichier = new Fichier();
        $form = $this->createForm(AjoutFichierType::class,$fichier);

        if ($request->isMethod('POST')) {            
            $form->handleRequest($request);            
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $file = $fichier->getNom();
                $fichier->setDate(new \DateTime()); //récupère la date du jour
                $fichier->setExtension($file->guessExtension()); // Récupère l’extension du fichier
                $fichier->setTaille($file->getSize()); // getSize contient la taille du fichier envoyé
                $fichier->setVraiNom($file->getClientOriginalName()); 
                $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
                $fichier->setNom($fileName);
                $em->persist($fichier);
                $em->flush();    
                try{    
                    $file->move($this->getParameter('file_directory'),$fileName); // Nous déplaçons lefichier dans le répertoire configuré dans services.yaml
                    $this->addFlash('notice', 'Fichier inséré');

                } catch (FileException $e) {                // erreur durant l’upload            }
                    $this->addFlash('notice', 'Problème fichier inséré');
                }
            return $this->redirectToRoute('ajoutFichier');
        }        
    }

        return $this->render('fichier/ajoutFichier.html.twig', [
           'form'=>$form->createView()
        ]);
    }

    /**     
     * * @return string     
     * 
     * */    
    private function generateUniqueFileName()    
    {        
        return md5(uniqid());    
    }
}
