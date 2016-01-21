<?php

namespace Soccer\EventBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Soccer\UtilBundle\Tests\Controller\BaseControllerTest;

class AssignerEventControllerTest extends BaseControllerTest
{
    
    
    
    
    public function testPutAssignerEvent()
    {
         $client = static::createClient();

        //aucun paramètre 
        $crawler = $client->request('PUT', '/api/assigner/event');
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
        
        //param : adresse, longitude, latitude
        $param=array();
        $param["id"]=1;
        $param["id_user"]=2;
        $param["id_user_owner"]=1;
          $crawler = $client->request('PUT', '/api/assigner/event',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
          $param=array();
        $param["id"]=1;
        $param["id_user"]=2;
        $param["id_user_owner"]=1;
          $crawler = $client->request('PUT', '/api/assigner/event',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
        
        
        
    }
    
    
    public function testPutUpdateAssignerEvent()
    {
         $client = static::createClient();

        //aucun paramètre 
        $crawler = $client->request('PUT', '/api/update/assigner/event');
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
        
        //en cas de non affectation du user
        $param=array();
        $param["id"]=1;
        $param["id_user"]=0;
        $param["id_status"]=1;
          $crawler = $client->request('PUT', '/api/update/assigner/event',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
        
        //en cas d'affectation
        $param=array();
        $param["id"]=1;
        $param["id_user"]=2;
        $param["id_status"]=1;
          $crawler = $client->request('PUT', '/api/update/assigner/event',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
        
        
        
        
    }
    
 
 
    /**
     * Update a User from the submitted data by ID.<br/>
     *
     *
     * 
     * @param ParamFetcher $paramFetcher Paramfetcher
     *
     * @RequestParam(name="id", nullable=false, strict=true, description="id.")
     * @RequestParam(array=true, name="ids", nullable=false, strict=true, description="list ids.")
     * @RequestParam(name="id_user_owner", nullable=true, description="id_user_owner.")
     *
     * @return View
     */
    
 
 
    
    public function testPutAssignerEventList()
    {
         $client = static::createClient();

        //aucun paramètre 
        $crawler = $client->request('PUT', '/api/assigner/event/list');
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
        
        //param : adresse, longitude, latitude
        $param=array();
        $param["id"]=1;
        
        $ids=array();
        $ids[]=16;
        $ids[]=17;
        $param["ids"]=$ids;
        $param["id_user_owner"]=1;
          $crawler = $client->request('PUT', '/api/assigner/event/list',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
        
         $param=array();
        $param["id"]=1;
        
        $ids=array();
        $ids[]=14;
       
        $param["ids"]=$ids;
        
          $crawler = $client->request('PUT', '/api/assigner/event/list',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
        
        
    }
    
 
 
 
      public function testDeleteAssignerEvent()
    {
         $client = static::createClient();

        //aucun paramètre 
        $crawler = $client->request('DELETE', '/api/assigner/event');
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
        
    
        $param=array();
        $param["id"]=1;
        $param["id_user"]=2;
      
          $crawler = $client->request('DELETE', '/api/assigner/event',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
        $param=array();
        $param["id"]=1;
        $param["id_user"]=16;
      
          $crawler = $client->request('DELETE', '/api/assigner/event',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
        $param=array();
        $param["id"]=1;
        $param["id_user"]=17;
      
          $crawler = $client->request('DELETE', '/api/assigner/event',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
          $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
        $param=array();
        $param["id"]=1;
        $param["id_user"]=14;
      
          $crawler = $client->request('DELETE', '/api/assigner/event',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 200);
        
        //existe pas
        $param=array();
        $param["id"]=1;
        $param["id_user"]=14;
      
          $crawler = $client->request('DELETE', '/api/assigner/event',$param);
        
        $response = $client->getResponse();
        $this->assertJsonResponse($response, 400);
    
    }
    
    
    /**
     * Update a User from the submitted data by ID.<br/>
     *
     *
     * 
     * @param ParamFetcher $paramFetcher Paramfetcher
     *
     * @RequestParam(name="id", nullable=false, strict=true, description="id.")
     * @RequestParam(name="id_user", nullable=false, strict=true, description="id_user.")
     * @RequestParam(name="id_status", nullable=false, strict=true, description="reponse.")
     * 
     *
     * @return View
     */
  
    
    
}
