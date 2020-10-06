<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Eleve as EntityEleve;

class EleveFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 10; $i++)
        {
            $day = rand(1, 28);
            $month = rand(1, 12);
            $years = rand(1990, 2002);
            $date = "{$day}-{$month}-{$years}";
            $eleve = new EntityEleve;
            
            $eleve->setPrenom("Prenom n°{$i}")
                ->setNom("Nom n°{$i}")
                ->setDateNaissance(\DateTime::createFromFormat('d-m-Y', $date));
            
            $manager->persist($eleve);
        }
        $manager->flush();
    }
}