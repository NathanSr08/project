<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\InfoClient;
use Faker\Factory;
use Faker\Provider\fr_FR\Company;
use Faker\Provider\Address;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        $faker->addProvider(new Company($faker));
        $cp = $faker->postcode;
        print($faker->numberBetween(1, 2));
        
        $auteurs = Array();
        for ($i = 0; $i < 4; $i++) {
            $auteurs[$i] = new InfoClient();
            $auteurs[$i]->setNom($faker->lastName);
            $auteurs[$i]->setPrenom($faker->firstName);
            $auteurs[$i]->setMail($faker->email);
            $auteurs[$i]->setAdresse($faker->address);
            $auteurs[$i]->setCp(intval($faker->postcode));
            $auteurs[$i]->setNomSociete($faker->company);
            $auteurs[$i]->setVille($faker->city);
            $format = '06 ## ## ## ##'; // format du numéro de téléphone
           
            $auteurs[$i]->setNumPro($faker->numerify($format));

            $auteurs[$i]->setNumSiret(rand(1000000000,9999999999));
            $auteurs[$i]->setIdAdm($faker->numberBetween(1, 1));
            $auteurs[$i]->setCountFile($faker->numberBetween(0, 0));
            
            $manager->persist($auteurs[$i]);
        }
        $manager->flush();
    }
}
