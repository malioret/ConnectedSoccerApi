<?php

namespace Proxies\__CG__\Soccer\UserBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \Soccer\UserBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'nom', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'profils', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'niveau', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'events', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'matchs', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'amis', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'postes', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'teams', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'buts', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'passeDecisives', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'cartonsRouge', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'cartonsJaune', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'plainPassword', 'lastLogin', 'confirmationToken', 'passwordRequestedAt', 'groups', 'locked', 'expired', 'expiresAt', 'roles', 'credentialsExpired', 'credentialsExpireAt');
        }

        return array('__isInitialized__', 'id', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'nom', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'profils', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'niveau', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'events', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'matchs', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'amis', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'postes', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'teams', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'buts', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'passeDecisives', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'cartonsRouge', '' . "\0" . 'Soccer\\UserBundle\\Entity\\User' . "\0" . 'cartonsJaune', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'plainPassword', 'lastLogin', 'confirmationToken', 'passwordRequestedAt', 'groups', 'locked', 'expired', 'expiresAt', 'roles', 'credentialsExpired', 'credentialsExpireAt');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNiveau($niveau)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNiveau', array($niveau));

        return parent::setNiveau($niveau);
    }

    /**
     * {@inheritDoc}
     */
    public function getNiveau()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNiveau', array());

        return parent::getNiveau();
    }

    /**
     * {@inheritDoc}
     */
    public function setButs($buts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setButs', array($buts));

        return parent::setButs($buts);
    }

    /**
     * {@inheritDoc}
     */
    public function getButs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getButs', array());

        return parent::getButs();
    }

    /**
     * {@inheritDoc}
     */
    public function addBut($nb)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBut', array($nb));

        return parent::addBut($nb);
    }

    /**
     * {@inheritDoc}
     */
    public function setPasseDecisives($passes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasseDecisives', array($passes));

        return parent::setPasseDecisives($passes);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasseDecisives()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasseDecisives', array());

        return parent::getPasseDecisives();
    }

    /**
     * {@inheritDoc}
     */
    public function addPasseDecisives($nb)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPasseDecisives', array($nb));

        return parent::addPasseDecisives($nb);
    }

    /**
     * {@inheritDoc}
     */
    public function setCartonsRouge($carton)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCartonsRouge', array($carton));

        return parent::setCartonsRouge($carton);
    }

    /**
     * {@inheritDoc}
     */
    public function getCartonsRouge()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCartonsRouge', array());

        return parent::getCartonsRouge();
    }

    /**
     * {@inheritDoc}
     */
    public function addCartonsRouge($nb)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCartonsRouge', array($nb));

        return parent::addCartonsRouge($nb);
    }

    /**
     * {@inheritDoc}
     */
    public function setCartonsJaune($carton)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCartonsJaune', array($carton));

        return parent::setCartonsJaune($carton);
    }

    /**
     * {@inheritDoc}
     */
    public function getCartonsJaune()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCartonsJaune', array());

        return parent::getCartonsJaune();
    }

    /**
     * {@inheritDoc}
     */
    public function addCartonsJaune($nb)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCartonsJaune', array($nb));

        return parent::addCartonsJaune($nb);
    }

    /**
     * {@inheritDoc}
     */
    public function addEvent(\Soccer\EventBundle\Entity\UserEvent $event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEvent', array($event));

        return parent::addEvent($event);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEvent(\Soccer\EventBundle\Entity\UserEvent $event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEvent', array($event));

        return parent::removeEvent($event);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvents', array());

        return parent::getEvents();
    }

    /**
     * {@inheritDoc}
     */
    public function addMatch(\Soccer\TeamBundle\Entity\UserMatch $match)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMatch', array($match));

        return parent::addMatch($match);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMatch(\Soccer\TeamBundle\Entity\UserMatch $match)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMatch', array($match));

        return parent::removeMatch($match);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatchs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatchs', array());

        return parent::getMatchs();
    }

    /**
     * {@inheritDoc}
     */
    public function addPoste(\Soccer\TeamBundle\Entity\Poste $poste)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPoste', array($poste));

        return parent::addPoste($poste);
    }

    /**
     * {@inheritDoc}
     */
    public function removePoste(\Soccer\TeamBundle\Entity\Poste $poste)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePoste', array($poste));

        return parent::removePoste($poste);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostes', array());

        return parent::getPostes();
    }

    /**
     * {@inheritDoc}
     */
    public function addProfil(\Soccer\UserBundle\Entity\Profil $profil)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProfil', array($profil));

        return parent::addProfil($profil);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProfil(\Soccer\UserBundle\Entity\Profil $profil)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProfil', array($profil));

        return parent::removeProfil($profil);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfils()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfils', array());

        return parent::getProfils();
    }

    /**
     * {@inheritDoc}
     */
    public function addAmi(\Soccer\UserBundle\Entity\User $ami)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAmi', array($ami));

        return parent::addAmi($ami);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAmi(\Soccer\UserBundle\Entity\User $ami)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAmi', array($ami));

        return parent::removeAmi($ami);
    }

    /**
     * {@inheritDoc}
     */
    public function getAmis()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAmis', array());

        return parent::getAmis();
    }

    /**
     * {@inheritDoc}
     */
    public function addTeam(\Soccer\TeamBundle\Entity\Team $team)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTeam', array($team));

        return parent::addTeam($team);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTeam(\Soccer\TeamBundle\Entity\Team $team)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTeam', array($team));

        return parent::removeTeam($team);
    }

    /**
     * {@inheritDoc}
     */
    public function getTeams()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTeams', array());

        return parent::getTeams();
    }

    /**
     * {@inheritDoc}
     */
    public function addRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRole', array($role));

        return parent::addRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', array());

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', array($serialized));

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', array());

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', array());

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsernameCanonical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsernameCanonical', array());

        return parent::getUsernameCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', array());

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailCanonical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailCanonical', array());

        return parent::getEmailCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlainPassword', array());

        return parent::getPlainPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastLogin', array());

        return parent::getLastLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmationToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmationToken', array());

        return parent::getConfirmationToken();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', array());

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function hasRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasRole', array($role));

        return parent::hasRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonExpired', array());

        return parent::isAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonLocked', array());

        return parent::isAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsNonExpired', array());

        return parent::isCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsExpired', array());

        return parent::isCredentialsExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', array());

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function isExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isExpired', array());

        return parent::isExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isLocked', array());

        return parent::isLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isSuperAdmin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSuperAdmin', array());

        return parent::isSuperAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function removeRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRole', array($role));

        return parent::removeRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', array($username));

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsernameCanonical($usernameCanonical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsernameCanonical', array($usernameCanonical));

        return parent::setUsernameCanonical($usernameCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function setCredentialsExpireAt(\DateTime $date = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCredentialsExpireAt', array($date));

        return parent::setCredentialsExpireAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function setCredentialsExpired($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCredentialsExpired', array($boolean));

        return parent::setCredentialsExpired($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailCanonical($emailCanonical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailCanonical', array($emailCanonical));

        return parent::setEmailCanonical($emailCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', array($boolean));

        return parent::setEnabled($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setExpired($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpired', array($boolean));

        return parent::setExpired($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setExpiresAt(\DateTime $date = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpiresAt', array($date));

        return parent::setExpiresAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setSuperAdmin($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuperAdmin', array($boolean));

        return parent::setSuperAdmin($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setPlainPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlainPassword', array($password));

        return parent::setPlainPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setLastLogin(\DateTime $time = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastLogin', array($time));

        return parent::setLastLogin($time);
    }

    /**
     * {@inheritDoc}
     */
    public function setLocked($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocked', array($boolean));

        return parent::setLocked($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmationToken($confirmationToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmationToken', array($confirmationToken));

        return parent::setConfirmationToken($confirmationToken);
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordRequestedAt(\DateTime $date = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswordRequestedAt', array($date));

        return parent::setPasswordRequestedAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswordRequestedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswordRequestedAt', array());

        return parent::getPasswordRequestedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function isPasswordRequestNonExpired($ttl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPasswordRequestNonExpired', array($ttl));

        return parent::isPasswordRequestNonExpired($ttl);
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', array($roles));

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroups', array());

        return parent::getGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupNames()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupNames', array());

        return parent::getGroupNames();
    }

    /**
     * {@inheritDoc}
     */
    public function hasGroup($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasGroup', array($name));

        return parent::hasGroup($name);
    }

    /**
     * {@inheritDoc}
     */
    public function addGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroup', array($group));

        return parent::addGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroup', array($group));

        return parent::removeGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
