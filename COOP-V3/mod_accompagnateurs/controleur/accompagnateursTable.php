<?php
Class AccompagnateursTable{

    private $codea=""; //getCodec | setCodec
    private $nom=""; // getPrix_unitaire_HT
    private $prenom="";
    private $telephone="";
    private $email="";
    private $specialisation="";
    private $date_C="";
    private $date_M="";

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
    public function getCodea()
    {
        return $this->codea;
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
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getSpecialisation()
    {
        return $this->specialisation;
    }

    /**
     * @return string
     */
    public function getDate_C()
    {
        return $this->date_C;
    }

    /**
     * @return string
     */
    public function getDate_M()
    {
        return $this->date_M;
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
     * @param string $codea
     */
    public function setCodea(string $codea)
    {
        $this->codea = $codea;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone(string $telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @param string $specialisation
     */
    public function setSpecialisation(string $specialisation)
    {
        $this->specialisation = $specialisation;
    }

    /**
     * @param string $date_C
     */
    public function setDateC(string $date_C)
    {
        $this->dateC = $date_C;
    }

    /**
     * @param string $date_M
     */
    public function setDateM(string $date_M)
    {
        $this->dateM = $date_M;
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