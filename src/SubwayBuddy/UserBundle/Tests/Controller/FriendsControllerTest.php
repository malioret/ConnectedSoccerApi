<?php

namespace SubwayBuddy\UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Soccer\UtilBundle\Tests\Controller\BaseControllerTest;

class FriendsControllerTest extends BaseControllerTest
{
    
    
    
    public function testGetFriends()
    {
        
        /*
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/friends');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 404);*/
       // $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
       
       $client = static::createClient();

        $crawler = $client->request('GET', '/api/friends/1');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 200);
       // $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
    
  
    
    
    
}
