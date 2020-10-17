<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    private $CV = true;

    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $education = $this->getEducation();
        $skills = $this->getSkills();

        if ($this->CV === true && $education && $skills) {
            $this->getEducation();
        }
        return $this->render('base.html.twig', [
            'education' => $education,
            'skills' => $skills,
        ]);
    }

    private function getEducation() {
        return array(
            'Elementary school' => 'Ion Bancila, Braila',
            'High School' => 'Natural Sciences',
            'Bachelor degree' => 'Food Science and Engineering, Galati',
        );
    }

    private function getSkills() {
        return array(
            'Python', 'Linux', 'Symfony', 'MySql', 'Apache', 'golang', 'PHP'
        );
    }
}
