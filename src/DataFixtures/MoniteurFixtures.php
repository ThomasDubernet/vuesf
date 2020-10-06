<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Moniteur as EntityMoniteur;

class MoniteurFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 10; $i++)
        {
            $moniteur = new EntityMoniteur;
            
            $moniteur->setPrenom("Prenom moniteur n°{$i}")
                ->setNom("Nom moniteur n°{$i}")
                ->setExperience( strval(rand(1, 5)) );
            
            $manager->persist($moniteur);
        }
        $manager->flush();
    }
}