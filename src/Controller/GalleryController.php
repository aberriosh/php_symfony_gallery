<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class GalleryController extends AbstractController{
        /**
        *@Route("/")
        *@Method({"GET"})
        */
        public function index(){

            $img= ['Img 1','Img 2'];
            return $this->render('gallery/gallery.html.twig',
                                    array('name'=>'Brad',
                                        'imgs'=>$img)
            );
        }
    }