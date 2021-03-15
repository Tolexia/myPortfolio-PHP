<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Project;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ProjectFixtures extends Fixture implements DependentFixtureInterface
{
    public function getDependencies()
    {
        return [UsedTechnologyFixtures::class];
    }
    public function load(ObjectManager $manager)
    {
        $project = new Project();
        $project->setName('Safe Night');
        $project->setDescription("Last bootcamp group project, in partnership with NEOMA Business School, which students had to create the concept of an app.
        Our job, was to make it live.
        The idea of the app is kind of a social network based upon night parties which the participants could leave saffer than usual thanks to an emergency alert system.");
        $project->setFromDate(new \DateTime('2020-11-30'));
        $project->setToDate(new \DateTime('2021-01-29')); 
        $project->setCategory($this->getReference('category_1'));
        $project->addUsedTechnology($this->getReference('HTML5'));
        $project->addUsedTechnology($this->getReference('CSS'));
        $project->addUsedTechnology($this->getReference('JavaScript'));
        $project->addUsedTechnology($this->getReference('PHP'));
        $project->addUsedTechnology($this->getReference('Composer'));
        $project->addUsedTechnology($this->getReference('Yarn'));
        $project->addUsedTechnology($this->getReference('Symfony'));
        $project->addUsedTechnology($this->getReference('mySQL'));
        $manager->persist($project);
        $this->addReference('project_1', $project);

        $project = new Project();
        $project->setName('WiziCost');
        $project->setDescription("52hours-hackathon project in partnership with WiziFarm company.
        It consists in an interactive form to simulate a using price (false one for development) of an agricultural resource that could propose a farmer to another one, in a spirit of mutual aid.
        We were a team of 4, and we received the prices of Front-End Quality & Back-End Quality for this project.");
        $project->setFromDate(new \DateTime('2021-01-13'));
        $project->setToDate(new \DateTime('2021-01-15')); 
        $project->setCategory($this->getReference('category_2'));
        $project->addUsedTechnology($this->getReference('HTML5'));
        $project->addUsedTechnology($this->getReference('CSS'));
        $project->addUsedTechnology($this->getReference('JavaScript'));
        $project->addUsedTechnology($this->getReference('PHP'));
        $project->addUsedTechnology($this->getReference('Composer'));
        $project->addUsedTechnology($this->getReference('Yarn'));
        $project->addUsedTechnology($this->getReference('Symfony'));
        $project->addUsedTechnology($this->getReference('mySQL'));      
        $manager->persist($project);
        $this->addReference('project_2', $project);
        
        $project = new Project();
        $project->setName('FeminiVision');
        $project->setDescription('2nd bootcamp group project, first in partnership with a real company, the cinematographic cultural association "La Pellicule Ensorcelée".
        The idea was to honor female directors proposing a website which displays movies directed only by women or by women and men.');
        $project->setFromDate(new \DateTime('2020-10-21'));
        $project->setToDate(new \DateTime('2020-11-27')); 
        $project->setCategory($this->getReference('category_1'));
        $project->addUsedTechnology($this->getReference('HTML5'));
        $project->addUsedTechnology($this->getReference('CSS'));
        $project->addUsedTechnology($this->getReference('JavaScript'));
        $project->addUsedTechnology($this->getReference('JQuery'));
        $project->addUsedTechnology($this->getReference('PHP'));
        $project->addUsedTechnology($this->getReference('Composer'));
        $project->addUsedTechnology($this->getReference('TWIG'));
        $project->addUsedTechnology($this->getReference('mySQL'));
        $manager->persist($project);
        $this->addReference('project_3', $project);

        $project = new Project();
        $project->setName('Prince de St-Tech');
        $project->setDescription('32hours-Hackathon project in partnership with the numeric cultural association "St-Ex".
        The idea was to promote the association by a funny and smooth approach.');
        $project->setFromDate(new \DateTime('2020-11-18'));
        $project->setToDate(new \DateTime('2020-11-20')); 
        $project->setCategory($this->getReference('category_2'));
        $project->addUsedTechnology($this->getReference('HTML5'));
        $project->addUsedTechnology($this->getReference('CSS'));
        $project->addUsedTechnology($this->getReference('JavaScript'));
        $project->addUsedTechnology($this->getReference('PHP'));
        $project->addUsedTechnology($this->getReference('Composer'));
        $project->addUsedTechnology($this->getReference('TWIG'));
        $project->addUsedTechnology($this->getReference('mySQL'));
        $manager->persist($project);
        $this->addReference('project_4', $project);

        $project = new Project();
        $project->setName('Wilder Survival Guide');
        $project->setDescription('First bootcamp project, after 4 weeks of Coding discovery.
        The bootcamp name is "Wild Code School", so this is basically a guide for "wilders" to find an internship.');
        $project->setFromDate(new \DateTime('2020-09-29'));
        $project->setToDate(new \DateTime('2020-10-09')); 
        $project->setCategory($this->getReference('category_3'));
        $project->addUsedTechnology($this->getReference('HTML5'));
        $project->addUsedTechnology($this->getReference('CSS'));
        $project->addUsedTechnology($this->getReference('JavaScript'));
        $manager->persist($project);
        $this->addReference('project_5', $project);

        $project = new Project();
        $project->setName('My Portfolio');
        $project->setDescription("Personnal project made to gather every project I have been working on.");
        $project->setFromDate(new \DateTime('2020-02-05'));
        $project->setToDate(new \DateTime('2021-03-15')); 
        $project->setCategory($this->getReference('category_4'));
        $project->addUsedTechnology($this->getReference('HTML5'));
        $project->addUsedTechnology($this->getReference('CSS'));
        $project->addUsedTechnology($this->getReference('JavaScript'));
        $project->addUsedTechnology($this->getReference('JQuery'));
        $project->addUsedTechnology($this->getReference('PHP'));
        $project->addUsedTechnology($this->getReference('Composer'));
        $project->addUsedTechnology($this->getReference('Yarn'));
        $project->addUsedTechnology($this->getReference('Symfony'));
        $project->addUsedTechnology($this->getReference('mySQL'));
        $manager->persist($project);
        $this->addReference('project_6', $project);
        
        $manager->flush();
    }
}
