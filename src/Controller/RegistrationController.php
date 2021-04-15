<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Form\ModifyUserFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/admin/adduser", name="admin_add_user")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           
           // dd($form);
            // encode the plain password    
            $user->setPassword(
                $form->get('password')->getData()
                /*
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
               */
            );
             
            // $roles = $form->get('roles')->getData();
            // $roles = ["ROLE_ADMIN"];
            // $user->setRoles($roles);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('settings_menu');
        }

        return $this->render('admin/settings/users_add.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/modifyuser/{id}", name="admin_modify_user")
     */
    public function modify(Request $request, User $user): Response
    {

        $form = $this->createForm(ModifyUserFormType::class, $user);
        $form->handleRequest($request);
      

        if ($form->isSubmitted() && $form->isValid()) {
 
           
            $user->setPassword(
                $form->get('password')->getData()
           );
           // $role = $form->get('roles')->getData();
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('settings_menu');
        }
       
        return $this->render('admin/settings/users_add.html.twig', [
            'registrationForm' => $form->createView(),
            'currentpass' => $user->getPassword(),
        ]);
    }


    /**
     * @Route("/admin/deleteuser/{id}", name="admin_delete_user")
     */
    public function delete(Request $request, User $user): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute('settings_menu');
    

        return new JsonResponse(array(
            'status' => 'success'
        ));
    }

}
