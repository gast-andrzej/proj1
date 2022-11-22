<?php


namespace App\TestKernel;

use App\Entity\CAR;
use Doctrine\DBAL\Exception\DatabaseObjectExistsException;
use Doctrine\ORM\Mapping\Driver\DatabaseDriver;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class Test_one extends KernelTestCase
        {

            public function testWorks()
            {
                $this->assertTrue(True);
            }
            
        }

class Test extends WebTestCase
        {
            public function testClient()
            {
                $client = static::createClient();
                $crawler = $client->request('GET', '/');
                $this->assertResponseIsSuccessful();
                $this->assertSelectorTextContains('h1', 'small' ,'Welcome to');
            }

        }
?>