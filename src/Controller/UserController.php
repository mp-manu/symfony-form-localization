<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Form\UserFormType;

class UserController extends AbstractController
{
    public function index(Request $request): Response
    {
        // Получаем параметр из .env
        $locale = $_ENV['APP_LOCALE'];

        // Создаем форму
        $form = $this->createForm(UserFormType::class);

        return $this->render('user/index.html.twig', [
            'form' => $form->createView(),
            'locale' => $locale, // Передаем текущий язык в шаблон
        ]);
    }
}
