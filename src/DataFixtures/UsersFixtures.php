<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Admin;
use Faker\Factory;
use Faker\Provider\fr_FR\Company;
use Faker\Provider\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UsersFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $hasher
){

}
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        $faker->addProvider(new Company($faker));
        $cp = $faker->postcode;
        print($faker->numberBetween(1, 2));
        
        $auteurs = Array();
        for ($i = 0; $i < 1; $i++) {
            $auteurs[$i] = new Admin();
            $auteurs[$i]->setEmail("admin@admin.com");
            $auteurs[$i]->setRoles(["ROLE_ADMIN"]);
            $auteurs[$i]->setPassword($this->hasher->hashPassword($auteurs[$i],'Nathan55'));

            
            $manager->persist($auteurs[$i]);
        }
        $manager->flush();
    }
}
