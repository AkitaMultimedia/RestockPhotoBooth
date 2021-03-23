<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\DataBaseHelper;
use App\Repository\LotRepository;
use App\Repository\BoxSizePresetsRepository;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        // Check if a user is connected
        $userName = "";
        $userIsAdmin = "";

        if ($this->getUser()) {
            $userRole = $this->getUser()->getRoles();
            if (in_array("ROLE_ADMIN", $userRole)) {
                $userIsAdmin = 1;
            }
        }

        return $this->render('main/main_menu.html.twig', [
            'user_is_admin' =>$userIsAdmin
        ]);
    }

    /**
     * @Route("/booth/scan/{scan}", defaults={"scan"="null"}, name="booth_start")
     */
    public function booth_start($scan): Response
    {
        return $this->render('main/booth.html.twig', [
            'controller_name' => 'MainController',
            'scan' => $scan
        ]);
    }

    /**
     * @Route("/verifyLotExist/{lot}", name="verifyLotExist")
     */
    public function verifyLotExist($lot, LotRepository $LotRepo, DataBaseHelper $helper): Response
    {
        $exist = $LotRepo->findBy(
            ['lot' => $lot]
        );

        if ($exist) {
            return new Response("yes");
        } else {
            return new Response("no");
        }
    }

    /**
     * @Route("/scan/{s}", name="code_return")
     */
    public function code_return(string $s): Response
    {
        return $this->render('main/scan_retour.html.twig', [
            'code' => $s,
        ]);
    }

    /**
     * @Route("/user_settings", name="user_settings")
     */
    public function user_settings(BoxSizePresetsRepository $BoxPresets): Response
    {
        return $this->render('main/user_settings.html.twig', [
            "box_presets" => $BoxPresets->findAll()
        ]);
    }

}
