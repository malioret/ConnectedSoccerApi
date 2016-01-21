<?php

namespace Soccer\TeamBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Soccer\UtilBundle\Tests\Controller\BaseControllerTest;

class TeamControllerTest extends BaseControllerTest
{
    
    
    
    public function testGetTeams()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/teams');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 200);
       // $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
    
     public function testGetTeam()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/teams/99');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 200);
        
        
        //on test le cas ou il n'existe pas
        $crawler = $client->request('GET', '/api/teams/0');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 404);
        
       // $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
    
   
    
    
    
}
