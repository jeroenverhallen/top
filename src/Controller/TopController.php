<?php
// src/Controller/FizzBuzzController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class TopController extends Controller
{
    public function fizzBuzz(): Response
    {
        $array = [];
        for ($i=1; $i <= 100; $i ++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                $array[] = 'FizzBuzz';
            } else if ($i % 3 == 0) {
                $array[] = 'Fizz';
            } else if ($i % 5 == 0) {
                $array[] = 'Buzz';
            } else {
                $array[] = $i;
            }
        }

        return $this->render('assignments/one.html.twig', [
            'numbers' => $array,
        ]);
    }

    public function reverse(): Response
    {
        return $this->render('assignments/two.html.twig');
    }

    public function password(): Response
    {
        return $this->render('assignments/three.html.twig');
    }

    public function rotate($array): Response
    {
        $array = json_decode($array);
        if (! is_array($array)) {
            throw new BadRequestHttpException('Variabele moet een array zijn');
        }

        dump(count($array));die;

        return $this->render('assignments/four.html.twig', [
            'array' => $array,
        ]);
    }
}
