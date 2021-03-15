<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $category = new Category();
        $category->setCategory("Client project");
        $manager->persist($category);
        $this->addReference('category_1', $category);

        $category = new Category();
        $category->setCategory("Hackathon");
        $manager->persist($category);
        $this->addReference('category_2', $category);

        $category = new Category();
        $category->setCategory("Student project");
        $manager->persist($category);
        $this->addReference('category_3', $category);

        $category = new Category();
        $category->setCategory("Personnal project");
        $manager->persist($category);
        $this->addReference('category_4', $category);

        $manager->flush();
    }
}
