<?php

namespace GoVoyageFinale\GoVoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GoVoyageFinale\GoVoyageBundle\Entity\Hotel;
use GoVoyageFinale\GoVoyageBundle\Entity\OffreHotel;

use GoVoyageFinale\GoVoyageBundle\Form\HotelType;
use GoVoyageFinale\GoVoyageBundle\Form\OffreCroisiereType;

use GoVoyageFinale\GoVoyageBundle\Entity\Vol;
use GoVoyageFinale\GoVoyageBundle\Entity\OffreVol;

use GoVoyageFinale\GoVoyageBundle\Entity\Croisiere;
use GoVoyageFinale\GoVoyageBundle\Entity\OffreCroisiere;

class DefaultController extends Controller
{
    public function liste_hotelAction()
    {
        $em2 = $this->getDoctrine()->getManager();
        $Hotel = $em2->getRepository("GoVoyageBundle:Hotel")->findAll();
        
         $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
        $Hotel, /* query NOT result */
        $this->get('request')->query->getInt('page', 1)/*page number*/,
        2/*limit per page*/
    );
        return $this->render('GoVoyageBundle:Default:liste_hotel.html.twig',array ('hotel'=>$pagination));
    }
    
        public function liste_hotel2Action()
    {
        $em2 = $this->getDoctrine()->getManager();
        $Hotel = $em2->getRepository("GoVoyageBundle:Hotel")->findAll();
        return $this->render('GoVoyageBundle:Default:listhot2.html.twig',array ('hotel'=>$Hotel));
    }
    
     public function liste_offre_hotelAction()
    {
        $em2 = $this->getDoctrine()->getManager();
        $OffreHotel = $em2->getRepository("GoVoyageBundle:OffreHotel")->findAll();
     $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
        $OffreHotel, /* query NOT result */
        $this->get('request')->query->getInt('page', 1)/*page number*/,
        2/*limit per page*/
    );
        
        return $this->render('GoVoyageBundle:Default:liste_offre_hotel.html.twig',array ('offre_hotel'=>$pagination));
    }
    
     public function liste_volAction()
    {
        $em2 = $this->getDoctrine()->getManager();
        $Vol = $em2->getRepository("GoVoyageBundle:Vol")->findAll();
        return $this->render('GoVoyageBundle:Default:liste_vol.html.twig',array ('vol'=>$Vol));
    }
    
      public function liste_vol2Action()
    {
        $em2 = $this->getDoctrine()->getManager();
        $Vol = $em2->getRepository("GoVoyageBundle:Vol")->findAll();
        return $this->render('GoVoyageBundle:Default:listvol2.html.twig',array ('vol'=>$Vol));
    }
    
     public function liste_offre_volAction()
    {
        $em2 = $this->getDoctrine()->getManager();
        $OffreVol = $em2->getRepository("GoVoyageBundle:OffreVol")->findAll();
         $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
        $OffreVol, /* query NOT result */
        $this->get('request')->query->getInt('page', 1)/*page number*/,
        2/*limit per page*/
    );
        return $this->render('GoVoyageBundle:Default:liste_offre_vol.html.twig',array ('offre_vol'=>$pagination));
    }
    
      public function liste_croisiereAction()
    {
        $em2 = $this->getDoctrine()->getManager();
        $Croisiere = $em2->getRepository("GoVoyageBundle:Croisiere")->findAll();
        return $this->render('GoVoyageBundle:Default:liste_croisiere.html.twig',array ('croisiere'=>$Croisiere));
    }
    
     public function liste_croisiere2Action()
    {
        $em2 = $this->getDoctrine()->getManager();
        $Croisiere = $em2->getRepository("GoVoyageBundle:Croisiere")->findAll();
        return $this->render('GoVoyageBundle:Default:listcrois2.html.twig',array ('croisiere'=>$Croisiere));
    }
    
      public function liste_offre_croisiereAction()
    {
        $em2 = $this->getDoctrine()->getManager();
        $OffreCroisiere = $em2->getRepository("GoVoyageBundle:OffreCroisiere")->findAll();
             $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
        $OffreCroisiere, /* query NOT result */
        $this->get('request')->query->getInt('page', 1)/*page number*/,
        2/*limit per page*/
    );
        return $this->render('GoVoyageBundle:Default:liste_offre_croisiere.html.twig',array ('offre_croisiere'=>$pagination));
    }
    
    
    
      public function ajout_hotelAction() 
    {
        $Hotel = new Hotel();
        $form = $this->createFormBuilder($Hotel)
                ->add('nomhotel')
                ->add('nbetoile')
                ->add('description')
                ->add('chambretype')
                ->add('ville')
                ->add('nombreplace')
                
                ->add('prixpc')
                ->add('prixdp')
                ->add('prixlpd')
                ->add('photo')
                
                ->add('Ajouter','submit')
                ->getForm();
        $request = $this->getRequest();
        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Hotel);
            $em->flush();
            return $this->redirect($this->generateUrl('go_voyage_ajouthotel'));
        }
        
        return $this->render('GoVoyageBundle:Default:ajout_hotel.html.twig',array ('form'=>$form->createView()));
    }
    
     public function ajout_volAction() 
    {
        $Vol = new Vol();
        $form = $this->createFormBuilder($Vol)
                ->add('prix')
                ->add('nombreplace')
                ->add('datevol')
                ->add('paysdestination')
                ->add('paysdepart')
                ->add('description')
                
                ->add('nomvol')
              
                
                ->add('Ajouter','submit')
                ->getForm();
        $request = $this->getRequest();
        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Vol);
            $em->flush();
            return $this->redirect($this->generateUrl('go_voyage_ajoutvol'));
        }
        
        return $this->render('GoVoyageBundle:Default:ajout_vol.html.twig',array ('form'=>$form->createView()));
    }
    
      public function ajout_croisAction() 
    {
        $Croisiere = new Croisiere();
        $form = $this->createFormBuilder($Croisiere)
                ->add('nomcrois')
                ->add('prix')
                ->add('nombreplace')
                ->add('datedepart')
                ->add('nbjour')
                ->add('villedepart')
                ->add('villedestination')
                ->add('description')
                
                
              
                
                ->add('Ajouter','submit')
                ->getForm();
        $request = $this->getRequest();
        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Croisiere);
            $em->flush();
            return $this->redirect($this->generateUrl('go_voyage_liste_croisiere'));
        }
        
        return $this->render('GoVoyageBundle:Default:ajout_croisiere.html.twig',array ('form'=>$form->createView()));
    }
    
    
      public function ajout_offre_volAction($idvol) 
    {
          $em2 = $this->getDoctrine()->getManager();

          $Vol = $em2->getRepository("GoVoyageBundle:Vol")->find($idvol);
          
       
          
        $OffreVol = new OffreVol();
        
        $OffreVol->setPrix($Vol->getPrix());
        $OffreVol->setNombreplace($Vol->getNombreplace());
        $OffreVol->setDatevol($Vol->getDatevol());
        $OffreVol->setPaysdestination($Vol->getPaysdestination());
        $OffreVol->setPaysdepart($Vol->getPaysdepart());
        $OffreVol->setDescription($Vol->getDescription());
        $OffreVol->setNomvol($Vol->getNomvol());
        
        $form = $this->createFormBuilder($OffreVol)
                ->add('reduction')
                ->add('prix')
                ->add('dateDebut')
                 ->add('dateFin')
                ->add('nombreplace')
                ->add('datevol')
                ->add('paysdestination')
                ->add('paysdepart')
                ->add('description')
                ->add('nomvol')
                ->add('Ajouter','submit')
                ->getForm();
        $request = $this->getRequest();
        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($OffreVol);
            $em->flush();
            return $this->redirect($this->generateUrl('go_voyage_liste_offre_vol'));
        }
        
        return $this->render('GoVoyageBundle:Default:ajout_offre_vol.html.twig',array ('form'=>$form->createView(),'vol'=>$Vol));
    }
    
    
     public function ajout_offre_croisAction($idcroisiere) 
    {
          $em2 = $this->getDoctrine()->getManager();
         
          $Croisiere = $em2->getRepository("GoVoyageBundle:Croisiere")->find($idcroisiere);
          
       
          
        $OffreCroisiere = new OffreCroisiere();
        
        $OffreCroisiere->setNomcrois($Croisiere->getNomcrois());
        $OffreCroisiere->setPrix($Croisiere->getPrix());
        $OffreCroisiere->setNombreplace($Croisiere->getNombreplace());
        $OffreCroisiere->setDatedepart($Croisiere->getDatedepart());
        $OffreCroisiere->setNbjour($Croisiere->getNbjour());
        $OffreCroisiere->setVilledepart($Croisiere->getVilledepart());
        $OffreCroisiere->setVilledestination($Croisiere->getVilledestination());
        $OffreCroisiere->setDescription($Croisiere->getDescription());
        
        
        
        $form = $this->createFormBuilder($OffreCroisiere)
                ->add('reduction')
                ->add('nomcrois')
                ->add('prix')
                ->add('dateDebut')
                ->add('dateFin')
                ->add('nombreplace')
                ->add('datedepart')
                ->add('nbjour')
                ->add('villedepart')
                ->add('villedestination')
                ->add('description')
                
                ->add('Ajouter','submit')
                ->getForm();
        $request = $this->getRequest();
        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($OffreCroisiere);
            $em->flush();
            return $this->redirect($this->generateUrl('go_voyage_liste_offre_croisiere'));
        }
        
        return $this->render('GoVoyageBundle:Default:ajout_offre_croisiere.html.twig',array ('form'=>$form->createView(),'croisiere'=>$Croisiere));
    }
   
    

    
      public function ajout_offre_hotelAction($idhotel)
    {
             
           $em=$this->getDoctrine()->getManager();
           $Hotel=$em->getRepository('GoVoyageBundle:Hotel')->find($idhotel);
           
        $OffreHotel = new OffreHotel();   
       
        $OffreHotel->setNomhotel($Hotel->getNomhotel());
        $OffreHotel->setVille($Hotel->getVille());
        $OffreHotel->setDescription($Hotel->getDescription());
        $OffreHotel->setPrixpc($Hotel->getPrixpc());
        $OffreHotel->setPrixdp($Hotel->getPrixdp());
        $OffreHotel->setPrixlpd($Hotel->getPrixlpd());
        $OffreHotel->setChambretype($Hotel->getChambretype());
        $OffreHotel->setNbetoiles($Hotel->getNbetoile());
        $OffreHotel->setDisponibiliter($Hotel->getNombreplace());

       $form = $this->createFormBuilder($OffreHotel)
               
              ->add('reduction')
               
                ->add('nomhotel')
 
                ->add('ville')
                ->add('description')
                 ->add('dateDebut')
                ->add('dateFin')
                ->add('prixpc')
                ->add('prixdp')
                ->add('prixlpd')
                ->add('chambretype')
               ->add('nbetoiles')
                ->add('disponibiliter')
                
                ->add('Ajouter','submit')
                ->getForm();
           $requete=$this->get('request');
           if($requete->getMethod()=='POST'){
              $form->bind($requete);
                  if($form->isValid()){
                     
                      $em->persist($OffreHotel);
                      $em->flush();
                 return $this->redirect($this->generateUrl("go_voyage_liste_offre_hotel"));
            }
        }
        return $this->render("GoVoyageBundle:Default:ajout_offre_hotel.html.twig",array('form'=>$form->createView(),'hotel'=>$Hotel));
         
     }
     
      public function supp_croisAction($idcroisiere)
        {
         $em2 = $this->getDoctrine()->getManager();
        $Croisiere = $em2->getRepository("GoVoyageBundle:Croisiere")->find($idcroisiere);
        $em2->remove($Croisiere);
        $em2->flush();
         return $this->redirect($this->generateUrl('go_voyage_liste_croisiere'));
        }  
     
      public function supp_volAction($idvol)
        {
         $em2 = $this->getDoctrine()->getManager();
        $Vol = $em2->getRepository("GoVoyageBundle:Vol")->find($idvol);
        $em2->remove($Vol);
        $em2->flush();
         return $this->redirect($this->generateUrl('go_voyage_liste_vol'));
        } 
      
      public function supp_hotelAction($idhotel)
        {
         $em2 = $this->getDoctrine()->getManager();
        $Hotel = $em2->getRepository("GoVoyageBundle:Hotel")->find($idhotel);
        $em2->remove($Hotel);
        $em2->flush();
         return $this->redirect($this->generateUrl('go_voyage_listehotel'));
        }
        
        public function supp_off_hotelAction($idhotel)
        {
         $em2 = $this->getDoctrine()->getManager();
        $OffreHotel = $em2->getRepository("GoVoyageBundle:OffreHotel")->find($idhotel);
        $em2->remove($OffreHotel);
        $em2->flush();
         return $this->redirect($this->generateUrl('go_voyage_liste_offre_hotel'));
        }
    
        public function supp_off_volAction($idvol)
        {
         $em2 = $this->getDoctrine()->getManager();
        $OffreVol = $em2->getRepository("GoVoyageBundle:OffreVol")->find($idvol);
        $em2->remove($OffreVol);
        $em2->flush();
         return $this->redirect($this->generateUrl('go_voyage_liste_offre_vol'));
        } 
        
        
         public function supp_off_croisAction($idcroisiere)
        {
         $em2 = $this->getDoctrine()->getManager();
        $OffreCroisiere = $em2->getRepository("GoVoyageBundle:OffreCroisiere")->find($idcroisiere);
        $em2->remove($OffreCroisiere);
        $em2->flush();
         return $this->redirect($this->generateUrl('go_voyage_liste_offre_croisiere'));
        } 
        
        
        
          public function modif_hotelAction($idhotel) 
       {
               $em=$this->getDoctrine()->getManager();
           $Hotel=$em->getRepository('GoVoyageBundle:Hotel')->find($idhotel);
           
                   
        $form = $this->createFormBuilder($Hotel)
                ->add('nomhotel')
                ->add('nbetoile')
                ->add('description')
                ->add('chambretype')
                ->add('ville')
                ->add('nombreplace')
                
                ->add('prixpc')
                ->add('prixdp')
                ->add('prixlpd')
                ->add('photo')
                
                ->add('Ajouter','submit')
                ->getForm();
        $request = $this->getRequest();
        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Hotel);
            $em->flush();
            return $this->redirect($this->generateUrl('go_voyage_ajouthotel'));
        }
        
        return $this->render('GoVoyageBundle:Default:ajout_hotel.html.twig',array ('form'=>$form->createView()));
       }
        
        
       
          public function modif_volAction($idvol) 
    {
         $em2 = $this->getDoctrine()->getManager();

          $Vol = $em2->getRepository("GoVoyageBundle:Vol")->find($idvol);
          
        $form = $this->createFormBuilder($Vol)
                ->add('prix')
                ->add('nombreplace')
                ->add('datevol')
                ->add('paysdestination')
                ->add('paysdepart')
                ->add('description')
                
                ->add('nomvol')
              
                
                ->add('Ajouter','submit')
                ->getForm();
        $request = $this->getRequest();
        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Vol);
            $em->flush();
            return $this->redirect($this->generateUrl('go_voyage_ajoutvol'));
        }
        
        return $this->render('GoVoyageBundle:Default:ajout_vol.html.twig',array ('form'=>$form->createView()));
    }
    
    
          public function modif_croisAction($idcroisiere) 
    {
          $em2 = $this->getDoctrine()->getManager();
         
          $Croisiere = $em2->getRepository("GoVoyageBundle:Croisiere")->find($idcroisiere);
          
        $form = $this->createFormBuilder($Croisiere)
                ->add('nomcrois')
                ->add('prix')
                ->add('nombreplace')
                ->add('datedepart')
                ->add('nbjour')
                ->add('villedepart')
                ->add('villedestination')
                ->add('description')
                
                
              
                
                ->add('Ajouter','submit')
                ->getForm();
        $request = $this->getRequest();
        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Croisiere);
            $em->flush();
            return $this->redirect($this->generateUrl('go_voyage_liste_croisiere'));
        }
        
        return $this->render('GoVoyageBundle:Default:ajout_croisiere.html.twig',array ('form'=>$form->createView()));
    }
    
    
     public function modif_off_croisAction($idcroisiere) 
    {
          $em2 = $this->getDoctrine()->getManager();
         
          $OffreCroisiere = $em2->getRepository("GoVoyageBundle:OffreCroisiere")->find($idcroisiere);

        
         $form = $this->createFormBuilder($OffreCroisiere)
                ->add('reduction')
                ->add('nomcrois')
                ->add('prix')
                ->add('dateDebut')
                ->add('dateFin')
                ->add('nombreplace')
                ->add('datedepart')
                ->add('nbjour')
                ->add('villedepart')
                ->add('villedestination')
                ->add('description')
                
                ->add('Ajouter','submit')
                ->getForm();
        $request = $this->getRequest();
     if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($OffreCroisiere);
            $em->flush();
            return $this->redirect($this->generateUrl('go_voyage_liste_offre_croisiere'));
        }
        
        return $this->render('GoVoyageBundle:Default:modif_off_crois.html.twig',array ('form'=>$form->createView(),'offre_croisiere'=>$OffreCroisiere));
    }
    
     public function modif_off_hotelAction($idhotel)
    {
             
           $em=$this->getDoctrine()->getManager();
           $OffreHotel=$em->getRepository('GoVoyageBundle:OffreHotel')->find($idhotel);  

       $form = $this->createFormBuilder($OffreHotel)
               
              ->add('reduction')
               
                ->add('nomhotel')
 
                ->add('ville')
                ->add('description')
                 ->add('dateDebut')
                ->add('dateFin')
                ->add('prixpc')
                ->add('prixdp')
                ->add('prixlpd')
                ->add('chambretype')
               ->add('nbetoiles')
                ->add('disponibiliter')
                
                ->add('Ajouter','submit')
                ->getForm();
           $requete=$this->get('request');
           if($requete->getMethod()=='POST'){
              $form->bind($requete);
                  if($form->isValid()){
                     
                      $em->persist($OffreHotel);
                      $em->flush();
                 return $this->redirect($this->generateUrl("go_voyage_liste_offre_hotel"));
            }
        }
        return $this->render("GoVoyageBundle:Default:modif_off_hotel.html.twig",array('form'=>$form->createView(),'offre_hotel'=>$OffreHotel));
         
     }
     
     
           public function modif_off_volAction($idvol) 
    {
          $em2 = $this->getDoctrine()->getManager();

          $OffreVol = $em2->getRepository("GoVoyageBundle:OffreVol")->find($idvol);
          
       
          
    
        
        $form = $this->createFormBuilder($OffreVol)
                ->add('reduction')
                ->add('prix')
                ->add('dateDebut')
                 ->add('dateFin')
                ->add('nombreplace')
                ->add('datevol')
                ->add('paysdestination')
                ->add('paysdepart')
                ->add('description')
                ->add('nomvol')
                ->add('Ajouter','submit')
                ->getForm();
        $request = $this->getRequest();
        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($OffreVol);
            $em->flush();
            return $this->redirect($this->generateUrl('go_voyage_liste_offre_vol'));
        }
        
        return $this->render('GoVoyageBundle:Default:modif_off_vol.html.twig',array ('form'=>$form->createView(),'offre_vol'=>$OffreVol));
    }
    
    
    
    public function bcfAction()
    {
        return $this->render('GoVoyageBundle:Default:backoffice.html.twig');
    }
   
    
     public function mapAction()
    {
        return $this->render('GoVoyageBundle:Default:map.html.twig');
    }
    
    
      public function fofAction()
    {
        return $this->render('GoVoyageBundle::frontoffice.html.twig');
    }
}
