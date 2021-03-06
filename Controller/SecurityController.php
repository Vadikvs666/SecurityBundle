<?php

namespace VVS\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller {

    public function loginAction(Request $request) {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        $way = $request->getPathInfo();
        return $this->render(
                        'VVSSecurityBundle:Security:login.html.twig', array(
                    'last_username' => $lastUsername,
                    'error' => $error,
                    'way' => $way,
                    'page_title' => 'Вход',
                        )
        );
    }

}
