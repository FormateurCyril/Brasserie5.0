<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory as Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $femoris = new Product();
        $femoris
            ->setName("Femoris")
            ->setTitle("Bière cuivrée de fermantation haute")
            ->setDescription("Cuivrée et douce, s'y dégage des parfums de caramel gourmand et une lègére amertume")
            ->setPrice(3.80)
            ->setStyle(1)
            ->setColor(4)
            ->setDegree(6)
            ->setIBU(0.6);

        $mandibule = new Product();
        $mandibule
            ->setName("Mandubule")
            ->setTitle("Bière black IPA de fermantation haute")
            ->setDescription("Notre surprise d'hiver. Une belle couleur noire qui cache en faite une IPA chargée en houblons. Légère saveurs torréfiées dù a l'utilisation de malts spéciaux. Dans tes dents !")
            ->setPrice(3.8)
            ->setStyle(0)
            ->setColor(2)
            ->setDegree(6)
            ->setIBU(0.6);

        $radius = new Product();
        $radius
            ->setName("Radius")
            ->setTitle("Bière dorée de fermantation haute")
            ->setDescription("Dorée avec une belle mousse généreuse, cette bière de style pale ale est légère et houblonné. On y retrouve 3 grians et 3 houblons Américains utilisés pour leurs saveurs d'agrumes et de fruits tropicaux")
            ->setPrice(3.80)
            ->setStyle(0)
            ->setColor(0)
            ->setDegree(6)
            ->setIBU(0.6);

        $manager->persist($femoris);
        $manager->persist($mandibule);
        $manager->persist($radius);




        $manager->flush();
    }
}
