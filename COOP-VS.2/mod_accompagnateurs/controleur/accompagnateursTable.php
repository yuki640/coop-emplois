<?php
Class AccompagnateursTable{

    private $acc_ide=""; //getCodec | setCodec
    private $acc_nom=""; // getPrix_unitaire_HT
    private $acc_pre="";
    private $acc_tel="";
    private $acc_mail="";
    private $acc_fon="";
    private $acc_dcr="";
    private $acc_dmo="";
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

    /**
     * @return string
     */
    public function getIde()
    {
        return $this->acc_ide;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->acc_nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->acc_pre;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->acc_tel;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->acc_mail;
    }

    /**
     * @return string
     */
    public function getFonction()
    {
        return $this->acc_fon;
    }

    /**
     * @return string
     */
    public function getDateC()
    {
        return $this->acc_dcr;
    }

    /**
     * @return string
     */
    public function getDateM()
    {
        return $this->acc_dmo;
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
     * @param string $acc_ide
     */
    public function setAcc_ide(string $acc_ide)
    {
        $this->acc_ide = $acc_ide;
    }

    /**
     * @param string $acc_nom
     */
    public function setAcc_nom(string $acc_nom)
    {
        if(empty($acc_nom) || ctype_space(strval($acc_nom))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("Le nom est obligatoire. <br>");
        }
        $this->acc_nom = $acc_nom;
    }

    /**
     * @param string $acc_pre
     */
    public function setAcc_pre(string $acc_pre)
    {
        if(empty($acc_pre) || ctype_space(strval($acc_pre))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("Le prenom est obligatoire. <br>");
        }
        $this->acc_pre = $acc_pre;
    }

    /**
     * @param string $acc_tel
     */
    public function setAcc_tel(string $acc_tel)
    {
        if(empty($acc_tel) || ctype_space(strval($acc_tel))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("Le telephone est obligatoire. <br>");
        }
        $this->acc_tel = $acc_tel;
    }

    /**
     * @param string $acc_mail
     */
    public function setAcc_mail(string $acc_mail)
    {
        if(empty($acc_mail) || ctype_space(strval($acc_mail))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("Le email est obligatoire. <br>");
        }
        $this->acc_mail = $acc_mail;
    }

    /**
     * @param string $acc_fon
     */
    public function setAcc_fon(string $acc_fon)
    {
        $this->acc_fon = $acc_fon;
    }

    /**
     * @param string $acc_dcr
     */
    public function setAcc_dcr(string $acc_dcr)
    {
        $this->acc_dcr = $acc_dcr;
    }

    /**
     * @param string $acc_dmo
     */
    public function setAcc_dmo(string $acc_dmo)
    {
        $this->acc_dmo = $acc_dmo;
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