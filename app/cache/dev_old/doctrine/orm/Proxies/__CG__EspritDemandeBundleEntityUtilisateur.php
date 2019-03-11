<?php

namespace Proxies\__CG__\Esprit\DemandeBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Utilisateur extends \Esprit\DemandeBundle\Entity\Utilisateur implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'idUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'nomUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'prenomUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'adresseUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'emailUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'telUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'statutUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'loginUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'pwdUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'sexeUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'photoUser');
        }

        return array('__isInitialized__', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'idUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'nomUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'prenomUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'adresseUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'emailUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'telUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'statutUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'loginUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'pwdUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'sexeUser', '' . "\0" . 'Esprit\\DemandeBundle\\Entity\\Utilisateur' . "\0" . 'photoUser');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Utilisateur $proxy) {
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
    public function getIdUser()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdUser();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUser', array());

        return parent::getIdUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getNomUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomUser', array());

        return parent::getNomUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomUser', array());

        return parent::getPrenomUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresseUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresseUser', array());

        return parent::getAdresseUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailUser', array());

        return parent::getEmailUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getTelUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelUser', array());

        return parent::getTelUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getStatutUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatutUser', array());

        return parent::getStatutUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getLoginUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoginUser', array());

        return parent::getLoginUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getPwdUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPwdUser', array());

        return parent::getPwdUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getSexeUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexeUser', array());

        return parent::getSexeUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getPhotoUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhotoUser', array());

        return parent::getPhotoUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUser($idUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUser', array($idUser));

        return parent::setIdUser($idUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setNomUser($nomUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomUser', array($nomUser));

        return parent::setNomUser($nomUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomUser($prenomUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomUser', array($prenomUser));

        return parent::setPrenomUser($prenomUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresseUser($adresseUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresseUser', array($adresseUser));

        return parent::setAdresseUser($adresseUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailUser($emailUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailUser', array($emailUser));

        return parent::setEmailUser($emailUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setTelUser($telUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelUser', array($telUser));

        return parent::setTelUser($telUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setStatutUser($statutUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatutUser', array($statutUser));

        return parent::setStatutUser($statutUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setLoginUser($loginUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoginUser', array($loginUser));

        return parent::setLoginUser($loginUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setPwdUser($pwdUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPwdUser', array($pwdUser));

        return parent::setPwdUser($pwdUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setSexeUser($sexeUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexeUser', array($sexeUser));

        return parent::setSexeUser($sexeUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setPhotoUser($photoUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhotoUser', array($photoUser));

        return parent::setPhotoUser($photoUser);
    }

}
