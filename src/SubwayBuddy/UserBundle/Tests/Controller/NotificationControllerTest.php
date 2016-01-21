<?php

namespace SubwayBuddy\UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Soccer\UtilBundle\Tests\Controller\BaseControllerTest;

class NotificationControllerTest extends BaseControllerTest
{
    
    
    
    public function testGetNotifications()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/notifications');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 200);
       // $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
    
     public function testGetNotification()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/notifications/106');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 200);
        
        
        //on test le cas ou il n'existe pas
        $crawler = $client->request('GET', '/api/notifications/0');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 404);
        
       // $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
    
   
    
    
    
}
