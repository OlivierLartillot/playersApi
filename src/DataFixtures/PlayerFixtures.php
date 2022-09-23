<?php

namespace App\DataFixtures;

use App\Entity\Player;
use App\Repository\TeamRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;

/**
* Classe Faker qui permet d'insérer des joueurs en bdd
* Pour une vrai utilisation, nous pourrions créer des commandes avec ou sans / option 
*/
class PlayerFixtures extends Fixture
{


    public function load(ObjectManager $manager): void
    {

        for ($i=0; $i<20; $i++) {
            //https://fakerphp.github.io/#create-fake-data
            switch ($i) {
                case $i<5:
                    $country = "us_US";
                    break;
                case $i<15:
                    $country = "fr_FR";
                    break;
                default:
                    $country = "es_ES";
                    break;
            }
            $generator = Factory::create($country);
            /** random sur les caractéristiques */
            $de_age=mt_rand(17,22);
            $de_resistance_blessures = mt_rand(50,70);
            $de_pourc_max_dom = mt_rand(25,75);
            $valeur = mt_rand(5000,6000);
            $case_Max=mt_rand(0,1);
  
            /** Hydratation de l'objet */
            $player = new Player();
            $player->setFirstName($generator->firstNameMale());
            $player->setLastName($generator->LastName());
            $player->setAge($de_age);
            $player->setResistanceAuxBlessures($de_resistance_blessures);
            $player->setPourcMaxDomicile($de_pourc_max_dom);
            $player->setCaseDomMax($case_Max);
            $player->setValeur($valeur);
            $player->setValeurRevente($valeur);
            $manager->persist($player);
        }




        $manager->flush();
    }
}
