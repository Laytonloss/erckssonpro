<?php

	namespace App\Controller;

	use App\Entity\Iteminfo;

	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Routing\Annotation\Route;
	//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\Form\Extension\Core\Type\TextType;
	use Symfony\Component\Form\Extension\Core\Type\TextareaType;
	use Symfony\Component\Form\Extension\Core\Type\SubmitType;

	class itemController extends Controller {

		/**
		* @Route("/", name="item_list", methods={"GET"})
		* 
		**/

		public function index() {
			

			$items = $this->getDoctrine()->getRepository(Iteminfo::class)->findAll();

			return $this->render('item/index.html.twig', array('items' => $items ));

			
		}

		

		/**
		* @Route("/item/new", name="new_item", methods={"GET", "POST"})
		* 
		*/

		public function new(Request $request) {
				$item = new iteminfo();

				$form = $this->createFormBuilder($item)->add('Item_Name', TextType::class, array('attr' => array('class' => 'form-control')))->add('type', TextType::class, array('attr' => array('class' => 'form-control')))->add('description', TextareaType::class, array('required' => false, 'attr' => array('class' => 'form-control')))->add('Price', TextType::class, array('attr' => array('class' => 'form-control')))->add('save', SubmitType::class, array('label' => 'Create', 'attr' => array('class' => 'btn btn-primary mt-3')))->getForm();

				$form->handleRequest($request);

				if($form->isSubmitted() && $form->isValid()) {
					$item = $form->getData();

					$entityManager = $this->getDoctrine()->getManager();
					$entityManager->persist($item);
					$entityManager->flush();

					return $this->redirectToRoute('item_list');
				}

				return $this->render('item/new.html.twig', array('form' => $form->createView()));
		}


		/**
		* @Route("/item/edit/{id}", name="edit_item", methods={"GET", "POST"})
		* 
		*/

		public function edit(Request $request, $id) {
				$item = new iteminfo();
				$item = $this->getDoctrine()->getRepository(Iteminfo::class)->find($id);

				$form = $this->createFormBuilder($item)->add('Item_name', TextType::class, array('attr' => array('class' => 'form-control')))->add('type', TextType::class, array('attr' => array('class' => 'form-control')))->add('description', TextareaType::class, array('required' => false, 'attr' => array('class' => 'form-control')))->add('Price', TextType::class, array( 'attr' => array('class' => 'form-control')))->add('save', SubmitType::class, array('label' => 'Edit', 'attr' => array('class' => 'btn btn-primary mt-3')))->getForm();

				$form->handleRequest($request);

				if($form->isSubmitted() && $form->isValid()) {
					
					$entityManager = $this->getDoctrine()->getManager();
					$entityManager->flush();

					return $this->redirectToRoute('item_list');
				}

				return $this->render('item/edit.html.twig', array('form' => $form->createView()));
		}


		/**
		* @Route("/item/{id}", name="item_show")
		*/

		public function show($id) {
			$item = $this->getDoctrine()->getRepository(Iteminfo::class)->find($id);
			return $this->render('item/show.html.twig', array('item' => $item));
		}


		/**
		*	@Route("/item/category/{type}", name="item_category")
		*/

		public function category($type) {
			$item = $this->getDoctrine()->getRepository(Iteminfo::class)->fcat($type);
			return $this->render('item/category.html.twig', array('item' => $item));
		}


		/**
  	   *  @Route("/item/delete/{id}", methods={"DELETE"}, name="delete")
   	   *  
   	 	 */
   		 public function delete(Request $request, $id) {

    	  $item = $this->getDoctrine()->getRepository(Iteminfo::class)->find($id);
      	
    	  $entityManager = $this->getDoctrine()->getManager();
					$entityManager->remove($item);
					$entityManager->flush();

   	 	  $response = new Response();
   	 	  $response->send();
   		 }

		/**
		*	@Route("/iteminfo/save")
		*/

		/*
		public function save() {
			$entityManager = $this->getDoctrine()->getManager();

			$item = new iteminfo();
			$item->setItemname('Pen Drive');
			$item->setType('Dispositivo de almacenamiento');
			$item->setDescription('Pen Drive 32Gb');

			$entityManager->persist($item);

			$entityManager->flush();

			return new Response('Item salvado con el siguiente id '.$item->getId());
		}*/
	}

 ?>