<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'produits'=>$produitRepository->findAll(),
        ]);
    }

    #[Route('/produit/detail/{id}', name: 'produit_detail')]
    public function DetailProduit(Produit $produit): Response
    {
        return $this->render('home/detail.html.twig', [
            'produit' => $produit,
        ]);
    }

    /**
     * @Route("/panier/add/{id}", name="ajout_panier")
     */
    public function addpanier($id, SessionInterface $session)
    {
        $panier = $session->get('panier',[]);
        if(!empty($panier[$id])){
            $panier[$id]++;
        }
        else{
            $panier[$id]=1;
        }
        $session->set('panier', $panier);
       // dd($session->get('panier'));
       return $this->redirectToRoute('home');;
    }

    /**
     * @Route("/produit/panier", name="consulter_pannier")
     */
    public function Pannier(SessionInterface $session, ProduitRepository $prod )
    {
        $panier = $session->get('panier',[]);

        $panierdonner=[];

        foreach ($panier as $id=> $quantite){
            $panierdonner[]=[
                'produit'=>  $prod->find($id),
                'quantite'=> $quantite
            ];
        }
        $total=0;

        foreach($panierdonner as $item)
        {
            // calculer le montant de chaque produit
            $totalitem = $item['produit']->getPrix() * $item['quantite'];
            // clacule de monatant total de tt les produits
            $total+=$totalitem;
        }
        return $this->render('home/panier.html.twig', [
            'paniers'=>$panierdonner,
            'total'=> $total
        ]);
    }

    /**
     * @Route("/add/{id}", name="prod_add")
     */
    public function add(Produit $product, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id = $product->getId();

        if(!empty($panier[$id])){
            $panier[$id]++;
        }else{
            $panier[$id] = 1;
        }

        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return $this->redirectToRoute("consulter_pannier");
    }

     /**
     * @Route("/remove/{id}", name="prod_remove")
     */
    public function remove(Produit $product, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id = $product->getId();

        if(!empty($panier[$id])){
            if($panier[$id] > 1){
                $panier[$id]--;
            }else{
                unset($panier[$id]);
            }
        }

        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return $this->redirectToRoute("consulter_pannier");
    }



    /**
     * @Route("/panier/delete/{id}",name="delete_prod")
     */
    public function delete($id, SessionInterface $session)
    {
       $panier= $session->get('panier',[]);
       if (!empty($panier[$id])){
           unset($panier[$id]);
       }
       $session->set('panier',$panier);
       return $this->redirectToRoute('consulter_pannier');
    }

   
}
