<?php
namespace Yoda\EventBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Yoda\EventBundle\Entity\Event;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $event = new Event;
        $event->setName('Event One');
        $event->setLocation('Deathstar');
        $event->setTime(new \DateTime('tomorrow noon'));
        $event->setDetails('Gay gay gay gay gay');
        $manager->persist($event);
        
        $event2 = new Event;
        $event2->setName('Event Two');
        $event2->setLocation('Deathstar');
        $event2->setTime(new \DateTime('tomorrow noon'));
        $event2->setDetails('This is test 2');
        $manager->persist($event2);
        
        $event3 = new Event;
        $event3->setName('Event Three');
        $event3->setLocation('Deathstar');
        $event3->setTime(new \DateTime('tomorrow noon'));
        $event3->setDetails('This is test 3');
        $manager->persist($event3);
        
        $manager->flush();
    }
}
