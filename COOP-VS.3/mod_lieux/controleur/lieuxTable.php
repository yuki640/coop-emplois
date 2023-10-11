<?php
Class LieuxTable{

    private $lie_ide=""; //getCodec | setCodec
    private $lie_nom=""; // getPrix_unitaire_HT
    private $lie_ad1="";
    private $lie_ad2="";
    private $lie_ad3="";
    private $lie_ad4="";
    private $lie_cpo="";
    private $lie_ville="";
    private $lie_tel="";
    private $lie_con="";
    private $lie_tco="";
    private $lie_cap="";
    private $lie_dcr="";
    private $lie_dmo="";

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
    public function getIde()
    {
        return $this->lie_ide;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->lie_nom;
    }

    /**
     * @return string
     */
    public function getAdresse1()
    {
        return $this->lie_ad1;
    }

    /**
     * @return string
     */
    public function getAdresse2()
    {
        return $this->lie_ad2;
    }

    /**
     * @return string
     */
    public function getAdresse3()
    {
        return $this->lie_ad3;
    }

    /**
     * @return string
     */
    public function getAdresse4()
    {
        return $this->lie_ad4;
    }

    /**
     * @return string
     */
    public function getCodepostal()
    {
        return $this->lie_cpo;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->lie_ville;
    }

    /**
     * @return string
     */
    public function getTelephoneS()
    {
        return $this->lie_tel;
    }

    /**
     * @return string
     */
    public function getContact()
    {
        return $this->lie_con;
    }

    /**
     * @return string
     */
    public function getTelephoneC()
    {
        return $this->lie_tco;
    }

    /**
     * @return string
     */
    public function getCapacite()
    {
        return $this->lie_cap;
    }

    /**
     * @return string
     */
    public function getDateC()
    {
        return $this->lie_dcr;
    }

    /**
     * @return string
     */
    public function getDateM()
    {
        return $this->lie_dmo;
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
     * @param mixed $lie_ide
     */
    public function setLie_ide($lie_ide)
    {
        $this->lie_ide = $lie_ide;
    }

    /**
     * @param mixed $lie_nom
     */
    public function setLie_nom($lie_nom)
    {
        if(empty($lie_nom) || ctype_space(strval($lie_nom))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("Le nom est obligatoire. <br>");
        }
        $this->lie_nom = $lie_nom;
    }

    /**
     * @param string $lie_ad1
     */
    public function setLie_ad1(string $lie_ad1)
    {
        $this->lie_ad1 = $lie_ad1;
    }

    /**
     * @param string $lie_ad2
     */

    public function setLie_ad2(string $lie_ad2)
    {
        $this->lie_ad2 = $lie_ad2;
    }

    /**
     * @param string $lie_ad3
     */
    public function setLie_ad3(string $lie_ad3)
    {
        $this->lie_ad3 = $lie_ad3;
    }

    /**
     * @param string $lie_ad4
     */
    public function setLie_ad4(string $lie_ad4)
    {
        $this->lie_ad4 = $lie_ad4;
    }

    /**
     * @param mixed $lie_cpo
     */
    public function setLie_cpo($lie_cpo)
    {
        if(empty($lie_cpo) || ctype_space(strval($lie_cpo))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("Le code postal est obligatoire. <br>");
        }
        $this->lie_cpo = $lie_cpo;
    }

    /**
     * @param mixed $lie_ville
     */
    public function setLie_ville($lie_ville)
    {
        if(empty($lie_ville) || ctype_space(strval($lie_ville))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("La ville est obligatoire. <br>");
        }
        $this->lie_ville = $lie_ville;
    }

    /**
     * @param string $lie_tel
     */
    public function setlie_tel(string $lie_tel)
    {
        $this->lie_tel = $lie_tel;
    }


    /**
     * @param string $lie_con
     */
    public function setLie_con(string $lie_con)
    {
        if(empty($lie_con) || ctype_space(strval($lie_con))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("Le contact est obligatoire. <br>");
        }
        $this->lie_con = $lie_con;
    }

    /**
     * @param mixed $lie_tco
     */
    public function setLie_tco($lie_tco)
    {
        if(empty($lie_tco) || ctype_space(strval($lie_tco))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("Le téléphone du contact est obligatoire. <br>");
        }
        $this->lie_tco = $lie_tco;
    }

    /**
     * @param string $lie_cap
     */
    public function setLie_cap(string $lie_cap)
    {
        if(empty($lie_cap) || ctype_space(strval($lie_cap))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("La ville est obligatoire. <br>");
        }
        $this->lie_cap = $lie_cap;
    }

    /**
     * @param string $lie_dcr
     */
    public function setLie_dcr(string $lie_dcr)
    {
        $this->lie_dcr = $lie_dcr;
    }

    /**
     * @param string $lie_dmo
     */
    public function setLie_dmo(string $lie_dmo)
    {
        $this->lie_dmo = $lie_dmo;
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