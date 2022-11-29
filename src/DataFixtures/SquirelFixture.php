<?php

namespace App\DataFixtures;

use App\Entity\Squirel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SquirelFixture extends Fixture
{
    public function load(ObjectManager $manager)
{
	for ($i = 0; $i < 5; $i++) {
		$squirel = new Squirel();
		$squirel->setName('name' . $i);
		$manager->persist($squirel);
	}
	$manager->flush();
}
}
