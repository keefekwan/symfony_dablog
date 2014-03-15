<?php
// src/KK/BlogBundle/DataFixtures/ORM/BlogFixtures.php

namespace KK\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use KK\BlogBundle\Entity\Blog;

class BlogFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $blog1 = new Blog();
        $blog1->setTitle('The long road ahead');
        $blog1->setBlog('It\'s been a long journey from the beginning knowing nothing and to this point having a better understanding of coding and PHP a whole. Still in the ranks of a noephyte but every day is a blessing and allows the opportunity to practice and learn more before working in the field which I forward to immensely. The road is long and I embrace it fully. . .');
        $blog1->setImage('long-road.jpg');
        $blog1->setAuthor('KK');
        $blog1->setTags('symfony2, php, beginner, journey, coding, neophyte, self-taught, loving it');
        $blog1->setCreated(new \DateTime());
        $blog1->setUpdated($blog1->getCreated());
        $em->persist($blog1);
        
        $blog2 = new Blog();
        $blog2->setTitle('A day with Symfony2');
        $blog2->setBlog('A day with Symfony2 is like mastering a musical piece, there is so much robust methods at your finger tips just itching to be used. A great deal of time will be needed in order to fully master it or at least get a working understanding of the framework. All in all my experience with Symfony2 has been utterly fantastic and it requires more up time to get a handle on it, that is all worthwhile.');
        $blog2->setImage('beach.jpg');
        $blog2->setAuthor('KK');
        $blog2->setTags('symfony2, php, paradise, dablog');
        $blog2->setCreated(new \DateTime());
        $blog2->setUpdated($blog2->getCreated());
        $em->persist($blog2);

        $blog3 = new Blog();
        $blog3->setTitle('The pool on the roof must have a leak');
        $blog3->setBlog('Give me a swamp, a deep dark bog. Where I can lose my way in pools of slippery mud. Give me cold, cold rain; a cloud of stinging bugs. Deadly nightshade, poison oak; give me the wild, wild wood. The wild, the wild, wild, wild wood');
        $blog3->setImage('pool_leak.jpg');
        $blog3->setAuthor('KK');
        $blog3->setTags('pool, leaky, hacked, movie, hacking, dablog');
        $blog3->setCreated(new \DateTime("2013-07-24 06:12:44"));
        $blog3->setUpdated($blog3->getCreated());
        $em->persist($blog3);

        $blog4 = new Blog();
        $blog4->setTitle('Misdirection. What the eyes see and the ears hear, the mind believes');
        $blog4->setBlog('You know what the problem with Hollywood is? They make shit. Unbelievable, unremarkable shit. Now I\'m not some grungy wannabe filmmaker that\'s searching for existentialism through a haze of bong smoke or something. No, it\'s easy to pick apart bad acting, short-sighted directing, and a purely moronic stringing together of words that many of the studios term as "prose". No, I\'m talking about the lack of realism.');
        $blog4->setImage('misdirection.jpg');
        $blog4->setAuthor('KK');
        $blog4->setTags('misdirection, magic, movie, hacking, dablog');
        $blog4->setCreated(new \DateTime("2013-07-16 16:15:06"));
        $blog4->setUpdated($blog4->getCreated());
        $em->persist($blog4);

        $blog5 = new Blog();
        $blog5->setTitle('The grid - A digital frontier');
        $blog5->setBlog('Greetings, programs! Together we have achieved a great many things. We have created a vast, complex system. We\'ve maintained it; we\'ve improved it. We\'ve rid it of its imperfection. Not to mention, rid it of the false deity who sought to enslave us! Kevin Flynn!! Where are you now?! My fellow programs, let there be no doubt that our world is a cage no more. For at this moment, the key to the next frontier is finally in our possession! And unlike our selfish creator, who reserved the privilege of our world only for himself, I will make their world open and available to all of us. Yes, to all of us! And whatever we find there, our system will grow. Our system will blossom! Do this, prove yourself to me, be loyal to me, and I will never betray you! - Maximize efficiency, rid the new world of its imperfection! My vision is clear, fellow programs. Out there is a new world! Out there is our victory! Out there...is our destiny.');
        $blog5->setImage('the_grid.jpg');
        $blog5->setAuthor('KK');
        $blog5->setTags('grid, daftpunk, movie, dablog, digital, frontier');
        $blog5->setCreated(new \DateTime("2013-06-16 10:15:06"));
        $blog5->setUpdated($blog5->getCreated());
        $em->persist($blog5);

        $blog6 = new Blog();
        $blog6->setTitle('You\'re either a zero or a hero.');
        $blog6->setBlog('I remember standing in the mirror, searching for a winner but I didnt see it in her. Now Ive gone from a zero to a super-hero-oh-oh.');
        $blog6->setImage('one_or_zero.jpg');
        $blog6->setAuthor('KK');
        $blog6->setTags('binary, one, zero, alive, dead, !trusting, movie, dablog, hero');
        $blog6->setCreated(new \DateTime("2012-05-26 16:45:18"));
        $blog6->setUpdated($blog6->getCreated());
        $em->persist($blog6);

        $blog7 = new Blog();
        $blog7->setTitle('Tears in the rain');
        $blog7->setBlog('I\'ve seen things you people wouldn\'t believe. Attack ships on fire off the shoulder of Orion. I\'ve watched C-beams glitter in the dark near the Tannhauser Gate. All those moments will be lost in time, like tears in rain. Time to die.');
        $blog7->setImage('532241bb274ea.jpeg');
        $blog7->setAuthor('KK');
        $blog7->setTags('bladerunner, runner, Tannhauser, Gate, replicant, nexus 6, rain, tears, retirement, lifespan, combat model, memories, Voigt-Kampff');
        $blog7->setCreated(new \DateTime("2014-03-13 16:38:01"));
        $blog7->setUpdated($blog7->getCreated());
        $em->persist($blog7);

        $blog8 = new Blog();
        $blog8->setTitle('In the Mind\'s Eye');
        $blog8->setBlog('The computer-generated information superhighway could launch a new renaissance of creativity for millions of visual thinkers! Some of the greatest minds in politics, science, literature, and the arts experienced undetected learning disabilities that stopped them from assimilating information the same way as their peers. Some of our most original intellects Albert Einstein, Thomas Edison, Lewis Carroll, and Winston Churchill relied heavily on visual modes of thought, processing information in terms of images instead of words or numbers.');
        $blog8->setImage('53224271d4e29.jpeg');
        $blog8->setAuthor('KK');
        $blog8->setTags('minds, eye, thinkers, fortune teller, seeing, dablog');
        $blog8->setCreated(new \DateTime("2014-01-05 04:25:12"));
        $blog8->setUpdated($blog8->getCreated());
        $em->persist($blog8);

        $em->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}



