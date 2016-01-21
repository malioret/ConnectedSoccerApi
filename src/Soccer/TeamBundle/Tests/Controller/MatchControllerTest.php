<?php

namespace Soccer\TeamBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Soccer\UtilBundle\Tests\Controller\BaseControllerTest;

class MatchControllerTest extends BaseControllerTest
{
    
    
    
    public function testGetMatchs()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/matchs');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 200);
       // $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
    
     public function testGetMatch()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/matches/23');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 200);
        
        
        //on test le cas ou il n'existe pas
        $crawler = $client->request('GET', '/api/matches/0');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 404);
        
       // $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
    
    public function testGetMatchuser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/matchusers/23');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 200);
        
        
        //on test le cas ou il n'existe pas
        $crawler = $client->request('GET', '/api/matchusers/0');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 404);
        
       // $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
    
    
    
      public function testGetMatchevent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/matchevents/1');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 200);
        
        
        //on test le cas ou il n'existe pas
        $crawler = $client->request('GET', '/api/matchevents/0');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 404);
        
       // $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
    
    
    
    
    
    public function testPostMatch()
    {
         $client = static::createClient();

        //aucun paramètre 
        $crawler = $client->request('POST', '/api/matches');
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
        
       
        $param=array();
        $param["id"]=1;
     
          $crawler = $client->request('POST', '/api/matches',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
       
        
        
    }
    
    
    
}
