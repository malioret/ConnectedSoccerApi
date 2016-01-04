<?php

namespace Soccer\EventBundle\Controller;


use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\View\View as Vieww;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\FOSRestController;
use Soccer\EventBundle\Entity\Terrain;
use Soccer\EventBundle\Entity\UserEvent;
use Soccer\TeamBundle\Entity\Team;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class TerrainController extends FOSRestController
{
    /**
     * @Get
     * @return array
     * @View()
     */
    public function getTerrainsAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        // Va récupérer toutes les lignes de la table 'event'.
        $terrains = $em->getRepository('SoccerEventBundle:Terrain')->findAll();

        
        return array('terrains' => $terrains);
        
        
    }

    
    
    /**
     * @param Terrain $terrain
     * @return array
     * @View()
     * @ParamConverter("terrain", class="SoccerEventBundle:Terrain")
     */
    public function getTerrainAction(Terrain $terrain)
    {
        return array('terrain' => $terrain);
    }
    
    
    
    
    /** @param ParamFetcher $paramFetcher Paramfetcher
     *
     * @RequestParam(name="adresse", nullable=false, strict=true, description="adresse.")
     * @RequestParam(name="longitude", nullable=false, strict=true, description="lieu.")
     * @RequestParam(name="latitude", nullable=false, strict=true, description="date.")
     * 
     *
     * @return View
     */
    public function postTerrainAction(ParamFetcher $paramFetcher)
    {
        
        
        $em = $this->getDoctrine()->getManager();

        
        $repositoryTerrain = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerEventBundle:Terrain')
        ;   
    
        
        $adresse=$paramFetcher->get('adresse');
        $longitude=$paramFetcher->get('longitude');
        $latitude=$paramFetcher->get('latitude');
        
        //verification si le trrain existe deja.
        $terrain=$repositoryTerrain->findByLongitudeLatitudeOrAdresse($longitude,$latitude,$adresse);
        if($terrain==null)
        {
             $terrain=new Terrain();
        
             $em = $this->getDoctrine()->getManager();
    
            
            $terrain->setAdresse($adresse);
            $terrain->setLongitude($longitude);
            $terrain->setLatitude($latitude);
             $em->persist($terrain);
            $em->flush();
        }
       

        $view = Vieww::create();

            $view->setData($terrain)->setStatusCode(200);
            return $view;
        
    }




    
    
    
    


    
}
