<?php

namespace App\Controller;

use App\Entity\PurchaseOrder;
use App\Entity\ProgrammingLanguage;
use App\Repository\ProgrammingLanguageRepository;
use App\Repository\PurchaseOrderRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    
    
    /**
     * @Route("/test/known", name="test_known")
     */
    public function known(ProgrammingLanguageRepository $programmingLanguageRepository): Response
    {
        return $this->render('programming_language/known.html.twig', 
        ['programming_language' => $programmingLanguageRepository->findKnown()]);
    }
    
    /**
     * @Route("/test/list", name="test_list")
     */
    public function list(ProgrammingLanguageRepository $programmingLanguageRepository): Response
    {
        return $this->render('programming_language/index.html.twig', 
        ['programming_language' => $programmingLanguageRepository->findAll()]);
    }
    
    /**
     * @Route("/test/{id}", name="test_show")
     */
    public function show(PurchaseOrder $purchaseOrder): Response
    {
    return $this->render('test/detail.html.twig', ['purchaseOrder' => $purchaseOrder]);
    }   
}
