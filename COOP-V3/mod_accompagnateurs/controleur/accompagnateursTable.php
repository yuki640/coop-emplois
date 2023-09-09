<?php
Class AccompagnateursTable{

    private $codel=""; //getCodec | setCodec
    private $nom=""; // getPrix_unitaire_HT
    private $adresse1="";
    private $adresse2="";
    private $adresse3="";
    private $adresse4="";
    private $codePostal="";
    private $ville="";
    private $telephoneS="";
    private $contact="";
    private $telephoneC="";
    private $capacite="";
    private $dateC="";
    private $dateM="";

    private $autorisationBD = true;
    private static $messageErreur = "";
    private static $messageSucces = "";

    public function __construct($data = null){
//$data est UN TABLEAU
        if($data !=null) {
            $this->hydrater($data);
        }
    }

    public function hydrater(array $row){
//$row est un TABLEAU
        foreach ($row as $k => $v){
            //concaténation du préfixe set et du nom de la propriété avec
            // La première lettre en majuscule
            $setter = 'set'.ucfirst($k);
            if(method_exists($this,$setter)){
                // On appelle la méthode
                //                   $this->setNom($nom);
                $this->$setter($v);
            }
        }
    }

// Getters
    /**
     * @return string
     */
    public function getCodel()
    {
        return $this->codel;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getAdresse1()
    {
        return $this->adresse1;
    }

    /**
     * @return string
     */
    public function getAdresse2()
    {
        return $this->adresse2;
    }

    /**
     * @return string
     */
    public function getAdresse3()
    {
        return $this->adresse3;
    }

    /**
     * @return string
     */
    public function getAdresse4()
    {
        return $this->adresse4;
    }

    /**
     * @return string
     */
    public function getCodepostal()
    {
        return $this->codePostal;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @return string
     */
    public function getTelephoneS()
    {
        return $this->telephoneS;
    }

    /**
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @return string
     */
    public function getTelephoneC()
    {
        return $this->telephoneC;
    }

    /**
     * @return string
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * @return string
     */
    public function getDateC()
    {
        return $this->dateC;
    }

    /**
     * @return string
     */
    public function getDateM()
    {
        return $this->dateM;
    }

    /**
     * @return bool
     */
    public function getAutorisationBD()
    {
        return $this->autorisationBD;
    }

    /**
     * @return string
     */
    public static function getMessageErreur()
    {
        return self::$messageErreur;
    }

    /**
     * @return string
     */
    public static function getMessageSucces()
    {
        return self::$messageSucces;
    }

 // Setters
    /**
     * @param mixed $codel
     */
    public function setCodeL($codel)
    {
        $this->codel = $codel;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        if(empty($nom) || ctype_space(strval($nom))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("Le nom est obligatoire. <br>");
        }
        $this->nom = $nom;
    }

    /**
     * @param string $adresse1
     */
    public function setAdresse1(string $adresse1)
    {
        $this->adresse1 = $adresse1;
    }



    /**
     * @param string $adresse2
     */
    public function setAdresse2(string $adresse2)
    {
        $this->adresse2 = $adresse2;
    }

    /**
     * @param string $adresse3
     */
    public function setAdresse3(string $adresse3)
    {
        $this->adresse3 = $adresse3;
    }

    /**
     * @param string $adresse4
     */
    public function setAdresse4(string $adresse4)
    {
        $this->adresse4 = $adresse4;
    }

    /**
     * @param mixed $codePostal
     */
    public function setCodePostal($codePostal)
    {
        if(empty($codePostal) || ctype_space(strval($codePostal))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("Le code postal est obligatoire. <br>");
        }
        $this->codePostal = $codePostal;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
        if(empty($ville) || ctype_space(strval($ville))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("La ville est obligatoire. <br>");
        }
    }

    /**
     * @param string $telephoneS
     */
    public function setTelephoneS(string $telephoneS)
    {
        $this->telephoneS = $telephoneS;
    }


    /**
     * @param string $contact
     */
    public function setContact(string $contact)
    {
        $this->contact = $contact;
        if(empty($contact) || ctype_space(strval($contact))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("Le contact est obligatoire. <br>");
        }
    }

    /**
     * @param mixed $telephoneC
     */
    public function setTelephoneC($telephoneC)
    {
        if(empty($telephoneC) || ctype_space(strval($telephoneC))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("Le téléphone du contact est obligatoire. <br>");
        }
        $this->telephoneC = $telephoneC;
    }

    /**
     * @param string $capacite
     */
    public function setCapacite(string $capacite)
    {
        $this->capacite = $capacite;
        if(empty($capacite) || ctype_space(strval($capacite))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("La ville est obligatoire. <br>");
        }
    }

    /**
     * @param string $dateC
     */
    public function setDateC(string $dateC)
    {
        $this->dateC = $dateC;
    }

    /**
     * @param string $dateM
     */
    public function setDateM(string $dateM)
    {
        $this->dateM = $dateM;
    }

    /**
     * @param bool $autorisationBD
     */
    public function setAutorisationBD(bool $autorisationBD)
    {
        $this->autorisationBD = $autorisationBD;
    }

    /**
     * @param string $messageErreur
     */
    public static function setMessageErreur(string $messageErreur)
    {
        self::$messageErreur = self::$messageErreur . $messageErreur;
    }

    /**
     * @param string $messageSucces
     */
    public static function setMessageSucces(string $messageSucces)
    {
        self::$messageSucces = self::$messageSucces . $messageSucces;
    }

}