<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Asset;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AssetFixtures extends Fixture implements DependentFixtureInterface
{
    public function getDependencies()
    {
        return [ProjectFixtures::class];
    }
    
    public function load(ObjectManager $manager)
    {
        $asset = new Asset();
        $asset->setImage('Welcome.png');
        $asset->setProject($this->getReference('project_1'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('My Friends.png');
        $asset->setProject($this->getReference('project_1'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('Soiree Plage.png');
        $asset->setProject($this->getReference('project_1'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('profile.png');
        $asset->setProject($this->getReference('project_1'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('Home.png');
        $asset->setProject($this->getReference('project_1'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('Nouvel événement.png');
        $asset->setProject($this->getReference('project_1'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('Inscription.png');
        $asset->setProject($this->getReference('project_1'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('Modification profil.png');
        $asset->setProject($this->getReference('project_1'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('party-adress.png');
        $asset->setProject($this->getReference('project_1'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('MonAdresse.png');
        $asset->setProject($this->getReference('project_1'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('friend.png');
        $asset->setProject($this->getReference('project_1'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('Mes-évènements.png');
        $asset->setProject($this->getReference('project_1'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('Connexion.png');
        $asset->setProject($this->getReference('project_1'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('Accueil.png');
        $asset->setProject($this->getReference('project_2'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('Catégories.png');
        $asset->setProject($this->getReference('project_2'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('type de machine.png');
        $asset->setProject($this->getReference('project_2'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('Ressource.png');
        $asset->setProject($this->getReference('project_2'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('Nouvelle simulation.png');
        $asset->setProject($this->getReference('project_2'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('marque.png');
        $asset->setProject($this->getReference('project_2'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('model.png');
        $asset->setProject($this->getReference('project_2'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('option.png');
        $asset->setProject($this->getReference('project_2'));
        $manager->persist($asset);
        
        $asset = new Asset();
        $asset->setImage('Liste_des_ressources.png');
        $asset->setProject($this->getReference('project_2'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('01-FéminiVision.jpg');
        $asset->setProject($this->getReference('project_3'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('02-FéminiVision.png');
        $asset->setProject($this->getReference('project_3'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('03-FéminiVision.png');
        $asset->setProject($this->getReference('project_3'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('04-FéminiVision.png');
        $asset->setProject($this->getReference('project_3'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('accueil.jpg');
        $asset->setProject($this->getReference('project_4'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('artfabrique.jpg');
        $asset->setProject($this->getReference('project_4'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('atelierscientifique.jpg');
        $asset->setProject($this->getReference('project_4'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('formulaire.png');
        $asset->setProject($this->getReference('project_4'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('Wilder Survival Guide.jpg');
        $asset->setProject($this->getReference('project_5'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('My_Portfolio-01.png');
        $asset->setProject($this->getReference('project_6'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('My_Portfolio-02.png');
        $asset->setProject($this->getReference('project_6'));
        $manager->persist($asset);

        $asset = new Asset();
        $asset->setImage('My_Portfolio-03.png');
        $asset->setProject($this->getReference('project_6'));
        $manager->persist($asset);

        $manager->flush();
    }
}
