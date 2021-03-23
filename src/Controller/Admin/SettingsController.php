<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UsersRepository;
use App\Repository\BoxSizePresetsRepository;
use App\Repository\EmailsForDataRepository;
use App\Entity\BoxSizePresets;
use App\Entity\Configuration;
use App\Entity\EmailsForData;
use App\Form\BoxSizePresetsFormType;
use App\Form\ConfigurationTypeFormType;
use App\Form\EmailsForDataFormType;
use App\Repository\ConfigurationRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * @Route("admin/settings", name="settings_")
 */

class SettingsController extends AbstractController
{
    /**
     * @Route("/", name="menu")
     */
    public function settings(UsersRepository $UserRepository, BoxSizePresetsRepository $BoxRepo, EmailsForDataRepository $EmailsRepo, ConfigurationRepository $ConfigurationRepo): Response
    {
        $dav_user_name = $ConfigurationRepo->findOneBy([
            'name' => 'dav_user_name'
        ]);
        $dav_password = $ConfigurationRepo->findOneBy([
            'name' => 'dav_password'
        ]);        

        return $this->render('admin/settings.html.twig', [
            'users' => $UserRepository->findAll(),
            'box_presets' => $BoxRepo->findAll(),
            'emails' => $EmailsRepo->findAll(),
            'dav_user_name' => $dav_user_name->getValue(),
            'dav_password' => $dav_password->getValue()
        ]);
    }   
    
    /**
     * @Route("/add_box", name="add_box")
     */
    public function add_box(Request $request ): Response
    {
        $BoxPresets = new BoxSizePresets();
        $form = $this->createForm(BoxSizePresetsFormType::class, $BoxPresets);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($BoxPresets);
            $entityManager->flush();

            return $this->redirectToRoute('settings_menu');
        }

        return $this->render('admin/settings/boxpresets_add.html.twig', [
            'boxForm' => $form->createView(),        
        ]);
    }

     /**
     * @Route("/modify_box/{id}", name="modify_box")
     */
    public function modify_box(Request $request, BoxSizePresets $BoxPresets): Response
    {
        $form = $this->createForm(BoxSizePresetsFormType::class, $BoxPresets);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
 
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($BoxPresets);
            $entityManager->flush();

            return $this->redirectToRoute('settings_menu');
        }

        return $this->render('admin/settings/boxpresets_add.html.twig', [
            'boxForm' => $form->createView(),        
        ]);
    }   

     /**
     * @Route("/delete_box/{id}", name="delete_box")
     */
    public function delete_box(BoxSizePresets $BoxPresets): RedirectResponse
    {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($BoxPresets);
            $entityManager->flush();

            return $this->redirectToRoute('settings_menu');
    }   

    /**
     * @Route("/add_email", name="add_email")
     */
    public function add_email(Request $request ): Response
    {
        $EmailsForData = new EmailsForData();
        $form = $this->createForm(EmailsForDataFormType::class, $EmailsForData);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($EmailsForData);
            $entityManager->flush();

            return $this->redirectToRoute('settings_menu');
        }

        return $this->render('admin/settings/emails_add.html.twig', [
            'emailsForm' => $form->createView(),        
        ]);
    }

     /**
     * @Route("/modify_email/{id}", name="modify_email")
     */
    public function modify_email(Request $request, EmailsForData $EmailsForData): Response
    {
        $form = $this->createForm(EmailsForDataFormType::class, $EmailsForData);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
 
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($EmailsForData);
            $entityManager->flush();

            return $this->redirectToRoute('settings_menu');
        }

        return $this->render('admin/settings/emails_add.html.twig', [
            'emailsForm' => $form->createView(),
        ]);
    }   

     /**
     * @Route("/delete_email{id}", name="delete_email")
     */
    public function delete_email(Request $request, EmailsForData $EmailsForData): RedirectResponse
    {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($EmailsForData);
            $entityManager->flush();

            return $this->redirectToRoute('settings_menu');
    }   
     /**
     * @Route("/dav_change_configuration/{name}", name="dav_change_configuration")
     */
    public function dav_change_configuration(Request $request, Configuration $config, $name='null'): Response
    { 
        $form = $this->createForm(ConfigurationTypeFormType::class, $config);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($config);
            $entityManager->flush();

            return $this->redirectToRoute('settings_menu');
        }

        return $this->render('admin/settings/dav_settings_change.html.twig', [
            'configForm' => $form->createView(),
        ]);
    }
}
