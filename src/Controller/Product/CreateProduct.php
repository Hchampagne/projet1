<?php

namespace  App\Controller\Product;

use App\Entity\Produit;
use App\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreateProduct extends AbstractController
{

    /**
     * @Route("/admin/product/create", name="create_product")
     */
    public function createProduct()
    {

        $product = new Produit;

        $form = $this->createForm(ProductType::class, $product);

        $formView = $form->createView();

        return $this->render("product/createProduct.html.twig", [
            'formView' => $formView
        ]);
    }
}
