<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\UsedTechnology;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class UsedTechnologyFixtures extends Fixture implements DependentFixtureInterface
{
    public function getDependencies()
    {
        return [CategoryFixtures::class];
    }

    public function load(ObjectManager $manager)
    {
        $usedTechnology = new UsedTechnology();
        $usedTechnology->setTechnology('HTML5');
        $manager->persist($usedTechnology);
        $this->addReference("HTML5", $usedTechnology);

        $usedTechnology = new UsedTechnology();
        $usedTechnology->setTechnology('CSS');
        $manager->persist($usedTechnology);
        $this->addReference("CSS", $usedTechnology);

        $usedTechnology = new UsedTechnology();
        $usedTechnology->setTechnology('JavaScript');
        $manager->persist($usedTechnology);
        $this->addReference("JavaScript", $usedTechnology);

        $usedTechnology = new UsedTechnology();
        $usedTechnology->setTechnology('PHP');
        $usedTechnology->setType("Main language");
        $manager->persist($usedTechnology);
        $this->addReference("PHP", $usedTechnology);

        $usedTechnology = new UsedTechnology();
        $usedTechnology->setTechnology('Symfony');
        $usedTechnology->setType("Framework");
        $manager->persist($usedTechnology);
        $this->addReference("Symfony", $usedTechnology);

        $usedTechnology = new UsedTechnology();
        $usedTechnology->setTechnology('mySQL');
        $usedTechnology->setType("DataBase");
        $manager->persist($usedTechnology);
        $this->addReference("mySQL", $usedTechnology);

        $usedTechnology = new UsedTechnology();
        $usedTechnology->setTechnology('TWIG');
        $usedTechnology->setType("Component");
        $manager->persist($usedTechnology);
        $this->addReference("TWIG", $usedTechnology);

        $usedTechnology = new UsedTechnology();
        $usedTechnology->setTechnology('JQuery');
        $usedTechnology->setType("Component");
        $manager->persist($usedTechnology);
        $this->addReference("JQuery", $usedTechnology);

        $usedTechnology = new UsedTechnology();
        $usedTechnology->setTechnology('Composer');
        $usedTechnology->setType("Library");
        $manager->persist($usedTechnology);
        $this->addReference("Composer", $usedTechnology);

        $usedTechnology = new UsedTechnology();
        $usedTechnology->setTechnology('Yarn');
        $usedTechnology->setType("Library");
        $manager->persist($usedTechnology);
        $this->addReference("Yarn", $usedTechnology);

        $manager->flush();
    }
}
