<?php

namespace Soccer\EventBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Soccer\UtilBundle\Tests\Controller\BaseControllerTest;

class TerrainControllerTest extends BaseControllerTest
{
    
    
    
    public function testGetTerrains()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/terrains');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 200);
       // $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
    
     public function testGetTerrain()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/terrains/3');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 200);
        
        
        //on test le cas ou il n'existe pas
        $crawler = $client->request('GET', '/api/terrains/1');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 404);
        
       // $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
    
    
    public function testPostTerrain()
    {
         $client = static::createClient();

        //aucun paramètre 
        $crawler = $client->request('POST', '/api/terrains');
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
        
        //param : adresse, longitude, latitude
        $param=array();
        $param["adresse"]="test2";
        $param["latitude"]=100;
        $param["longitude"]=200;
          $crawler = $client->request('POST', '/api/terrains',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
        
          //param : adresse, latitude (manque un param)
        $param=array();
        $param["adresse"]="test2";
        $param["latitude"]=100;
       
          $crawler = $client->request('POST', '/api/terrains',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
        
        
    }
    
}
