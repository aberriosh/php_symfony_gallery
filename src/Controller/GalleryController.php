<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    

    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\TextArea;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    

    class GalleryController extends AbstractController{
        /**
        *@Route("/", name="index")
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