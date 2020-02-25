<?php


namespace App\Controller;


use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{

    /**
     * @var ProductRepository
     */
    private $repository;

    public function __construct(ProductRepository $repo)
    {
        $this->repository = $repo;
    }

    /**
     * @Route("/products", name="product.index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        $products = $this->repository->findAll();
        return $this->render('product/index.html.twig', [
            'products' => $products
        ]);
    }

    /**
     * @Route("/{slug}-{id}", name="product.show", requirements={"slug"="[a-z0-9\-]*"} )
     */
    public function show(Product $product, string $slug, Request $request)
    {

        if($slug !== $product->getSlug()){
            return $this->redirectToRoute('product.show', [
                'id' => $product->getId(),
                'slug' => $product->getSlug()
            ], 301);
        }

        return $this->render('product/show.html.twig', [
            "product" => $product
        ]);
    }
}