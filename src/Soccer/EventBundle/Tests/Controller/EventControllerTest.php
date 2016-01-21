<?php

namespace Soccer\EventBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Soccer\UtilBundle\Tests\Controller\BaseControllerTest;
use FOS\RestBundle\Request\ParamFetcher;
class EventControllerTest extends BaseControllerTest
{
    
    
    
    public function testGetEvents()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/events');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 200);
       // $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
    
     public function testGetEvent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/events/1');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 200);
        
        
        //on test le cas ou il n'existe pas
        $crawler = $client->request('GET', '/api/events/0');

       
       $response = $client->getResponse();

        $this->assertJsonResponse($response, 404);
        
       // $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
    
    
    public function testPostEventCreated()
    {
        
         $client = static::createClient();

        //aucun paramètre 
        $crawler = $client->request('POST', '/api/events/createds');
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
        
        //param : id
        /*
        $id=1;
        $dynamicRequestParam = new RequestParam();
        $dynamicRequestParam->name = "id";
       
       
       $param=new ParamFetcher();
      $paramFetcher->addParam($dynamicRequestParam);
       */
       
       $param["id"]=1;
          $crawler = $client->request('POST', '/api/events/createds',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
        
    }
    
    
    
    
     public function testPostEventParticipate()
    {
        
         $client = static::createClient();

        //aucun paramètre 
        $crawler = $client->request('POST', '/api/events/participates');
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
        
        //param : id
        /*
        $id=1;
        $dynamicRequestParam = new RequestParam();
        $dynamicRequestParam->name = "id";
       
       
       $param=new ParamFetcher();
      $paramFetcher->addParam($dynamicRequestParam);
       */
       
       $param["id"]=1;
          $crawler = $client->request('POST', '/api/events/participates',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
        
    }
   
     public function testPostEvent()
    {
        
         $client = static::createClient();

        //aucun paramètre 
        $crawler = $client->request('POST', '/api/events');
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
        
        
        //avec les params
        $param["type"]="T";
        $param["longitude"]=100;
        $param["latitude"]=100;
        $param["adresse"]="testF";
        $param["id"]=1;
      $param["nombreJoueurs"]=20;
       $param["date"]="testF";
       $param["nom"]="testF";
        $crawler = $client->request('POST', '/api/events',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
        
    }
    
    
    
    
    
      public function testPutEvent()
    {
        
         $client = static::createClient();

        //aucun paramètre 
        $crawler = $client->request('PUT', '/api/event');
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
        
        
        //avec les params
        $param["type"]="T";
        $param["longitude"]=100;
        $param["latitude"]=100;
        $param["adresse"]="testF";
        $param["id_user"]=1;
        $param["id_event"]=1;
      $param["nombreJoueurs"]=20;
       $param["date"]="testF";
       $param["nom"]="testF";
        $crawler = $client->request('PUT', '/api/event',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
        
          //avec les params mais pas les drois
        $param["type"]="T";
        $param["longitude"]=100;
        $param["latitude"]=100;
        $param["adresse"]="testF";
        $param["id_user"]=4;
        $param["id_event"]=1;
      $param["nombreJoueurs"]=20;
       $param["date"]="testF";
       $param["nom"]="testF";
        $crawler = $client->request('PUT', '/api/event',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
        
        
    }
    
    
      public function testPostEventUser()
    {
        
         $client = static::createClient();

        //aucun paramètre 
        $crawler = $client->request('POST', '/api/events/users');
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
        
   
       $param["id"]=1;
          $crawler = $client->request('POST', '/api/events/users',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
        
    }
    
    
    
     public function testPostEventUserAttente()
    {
        
         $client = static::createClient();

        //aucun paramètre 
        $crawler = $client->request('POST', '/api/events/users/attentes');
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
        
   
       $param["id"]=1;
          $crawler = $client->request('POST', '/api/events/users/attentes',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
        
    }
    
    
 
  
    
    
      public function testPostEventTeam()
    {
        
         $client = static::createClient();

        //aucun paramètre 
        $crawler = $client->request('POST', '/api/events/teams');
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
        
        
        //avec les params
        $ids=array();
        $ids[]=1;
        $ids[]=2;
        $ids[]=3;
        $ids[]=8;
        $ids[]=5;
        $ids[]=9;
        $ids[]=10;
        $param["type"]="T";
        $param["longitude"]=100;
        $param["latitude"]=100;
        $param["adresse"]="testF";
        $param["ids"]=$ids;
      $param["nombreJoueurs"]=20;
       $param["date"]="testF";
       $param["nom"]="testF";
        $crawler = $client->request('POST', '/api/events/teams',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
        
        
        
        
    }
    
}
