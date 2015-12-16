<?php

namespace Proxies\__CG__\Soccer\TeamBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Match extends \Soccer\TeamBundle\Entity\Match implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', '' . "\0" . 'Soccer\\TeamBundle\\Entity\\Match' . "\0" . 'scoreTeam1', '' . "\0" . 'Soccer\\TeamBundle\\Entity\\Match' . "\0" . 'scoreTeam2', '' . "\0" . 'Soccer\\TeamBundle\\Entity\\Match' . "\0" . 'date', '' . "\0" . 'Soccer\\TeamBundle\\Entity\\Match' . "\0" . 'isFinished', '' . "\0" . 'Soccer\\TeamBundle\\Entity\\Match' . "\0" . 'isStarted', '' . "\0" . 'Soccer\\TeamBundle\\Entity\\Match' . "\0" . 'team1', '' . "\0" . 'Soccer\\TeamBundle\\Entity\\Match' . "\0" . 'team2', '' . "\0" . 'Soccer\\TeamBundle\\Entity\\Match' . "\0" . 'joueurs');
        }

        return array('__isInitialized__', 'id', '' . "\0" . 'Soccer\\TeamBundle\\Entity\\Match' . "\0" . 'scoreTeam1', '' . "\0" . 'Soccer\\TeamBundle\\Entity\\Match' . "\0" . 'scoreTeam2', '' . "\0" . 'Soccer\\TeamBundle\\Entity\\Match' . "\0" . 'date', '' . "\0" . 'Soccer\\TeamBundle\\Entity\\Match' . "\0" . 'isFinished', '' . "\0" . 'Soccer\\TeamBundle\\Entity\\Match' . "\0" . 'isStarted', '' . "\0" . 'Soccer\\TeamBundle\\Entity\\Match' . "\0" . 'team1', '' . "\0" . 'Soccer\\TeamBundle\\Entity\\Match' . "\0" . 'team2', '' . "\0" . 'Soccer\\TeamBundle\\Entity\\Match' . "\0" . 'joueurs');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Match $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsFinished($finish)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsFinished', array($finish));

        return parent::setIsFinished($finish);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsFinished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsFinished', array());

        return parent::getIsFinished();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsStarted($start)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsStarted', array($start));

        return parent::setIsStarted($start);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsStarted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsStarted', array());

        return parent::getIsStarted();
    }

    /**
     * {@inheritDoc}
     */
    public function getScore()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScore', array());

        return parent::getScore();
    }

    /**
     * {@inheritDoc}
     */
    public function setScoreTeam1($scoreTeam1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScoreTeam1', array($scoreTeam1));

        return parent::setScoreTeam1($scoreTeam1);
    }

    /**
     * {@inheritDoc}
     */
    public function getScoreTeam1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScoreTeam1', array());

        return parent::getScoreTeam1();
    }

    /**
     * {@inheritDoc}
     */
    public function setScoreTeam2($scoreTeam2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScoreTeam2', array($scoreTeam2));

        return parent::setScoreTeam2($scoreTeam2);
    }

    /**
     * {@inheritDoc}
     */
    public function getScoreTeam2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScoreTeam2', array());

        return parent::getScoreTeam2();
    }

    /**
     * {@inheritDoc}
     */
    public function setTeam1(\Soccer\TeamBundle\Entity\Team $team1 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTeam1', array($team1));

        return parent::setTeam1($team1);
    }

    /**
     * {@inheritDoc}
     */
    public function getTeam1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTeam1', array());

        return parent::getTeam1();
    }

    /**
     * {@inheritDoc}
     */
    public function setTeam2(\Soccer\TeamBundle\Entity\Team $team2 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTeam2', array($team2));

        return parent::setTeam2($team2);
    }

    /**
     * {@inheritDoc}
     */
    public function getTeam2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTeam2', array());

        return parent::getTeam2();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', array($date));

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', array());

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function addJoueur(\Soccer\TeamBundle\Entity\UserMatch $joueur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addJoueur', array($joueur));

        return parent::addJoueur($joueur);
    }

    /**
     * {@inheritDoc}
     */
    public function removeJoueur(\Soccer\TeamBundle\Entity\UserMatch $joueur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeJoueur', array($joueur));

        return parent::removeJoueur($joueur);
    }

    /**
     * {@inheritDoc}
     */
    public function getJoueurs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJoueurs', array());

        return parent::getJoueurs();
    }

}
