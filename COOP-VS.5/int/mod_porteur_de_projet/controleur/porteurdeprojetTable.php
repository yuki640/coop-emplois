<?php
Class PorteurdeprojetTable{

    private $pdp_ide=""; //getCodec | setCodec
    private $pdp_nom=""; //
    private $pdp_npre=""; //
    private $pdp_ad1="";
    private $pdp_ad2="";
    private $pdp_ad3="";
    private $pdp_ad4="";
    private $pdp_cpo="";
    private $pdp_vil="";
    private $pdp_tel="";
    private $pdp_por="";
    private $pdp_mai="";
    private $pdp_dna="";
    private $pdp_pri="";
    private $pdp_een="";
    private $pdp_sor="";
    private $pdp_reu="";
    private $pdp_vit="";
    private $pdp_dcr="";
    private $pdp_dmo="";

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

    public function getIde(): string
    {
        return $this->pdp_ide;
    }

    public function getNom(): string
    {
        return $this->pdp_nom;
    }

    public function getNpre(): string
    {
        return $this->pdp_npre;
    }

    public function getAd1(): string
    {
        return $this->pdp_ad1;
    }

    public function getAd2(): string
    {
        return $this->pdp_ad2;
    }

    public function getAd3(): string
    {
        return $this->pdp_ad3;
    }

    public function getAd4(): string
    {
        return $this->pdp_ad4;
    }

    public function getCpo(): string
    {
        return $this->pdp_cpo;
    }

    public function getVil(): string
    {
        return $this->pdp_vil;
    }

    public function getTel(): string
    {
        return $this->pdp_tel;
    }

    public function getPor(): string
    {
        return $this->pdp_por;
    }

    public function getMai(): string
    {
        return $this->pdp_mai;
    }

    public function getDna(): string
    {
        return $this->pdp_dna;
    }

    public function getPri(): string
    {
        return $this->pdp_pri;
    }

    public function getEen(): string
    {
        return $this->pdp_een;
    }

    public function getSor(): string
    {
        return $this->pdp_sor;
    }

    public function getReu(): string
    {
        return $this->pdp_reu;
    }

    public function getVit(): string
    {
        return $this->pdp_vit;
    }

    public function getDcr(): string
    {
        return $this->pdp_dcr;
    }

    public function getDmo(): string
    {
        return $this->pdp_dmo;
    }

    /**
     * @return bool
     */
    public function getAutorisationBD(): bool
    {
        return $this->autorisationBD;
    }

    /**
     * @return string
     */
    public static function getMessageErreur(): string
    {
        return self::$messageErreur;
    }

    /**
     * @return string
     */
    public static function getMessageSucces(): string
    {
        return self::$messageSucces;
    }

 // Setters
    /**
     * @param mixed $pdp_ide
     */
    public function setPdP_ide(mixed² $pdp_ide): void
    {
        $this->pdp_ide = $pdp_ide;
    }

    /**
     * @param mixed $pdp_nom
     */
    public function setPdP_nom(string $pdp_nom): void
    {
        if (empty($pdp_nom) || ctype_space(strval($pdp_nom))) {
            $this->setAutorisationBD(false);
            self::setMessageErreur("Le nom est obligatoire. <br>");
        } else {
            $nomLength = mb_strlen($pdp_nom);
            if ($nomLength > 38) {
                $this->setAutorisationBD(false);
                self::setMessageErreur("Le nom ne peut pas dépasser 38 caractères. Actuellement, il contient $nomLength caractères. <br>");
            }
        }

        $this->pdp_nom = $pdp_nom;
    }
    /**
     * @param mixed $pdp_npre
     */
    public function setPdp_Npre(string $pdp_npre): void
    {
        $this->pdp_npre = $pdp_npre;
    }

    /**
     * @param string $pdp_ad1
     */
    public function setPdP_ad1(string $pdp_ad1): void
    {
        $ad1Length = mb_strlen($pdp_ad1);
        if ($ad1Length >= 38) {
            $this->setAutorisationBD(false);
            self::setMessageErreur("La première adresse ne peut pas dépasser 38 caractères. Actuellement, elle contient $ad1Length caractères. <br>");
        }

        $this->pdp_ad1 = $pdp_ad1;
    }

    /**
     * @param string $pdp_ad2
     */
    public function setPdP_ad2(string $pdp_ad2): void
    {
        $ad2Length = mb_strlen($pdp_ad2);
        if ($ad2Length >= 38) {
            $this->setAutorisationBD(false);
            self::setMessageErreur("La première adresse ne peut pas dépasser 38 caractères. Actuellement, elle contient $ad2Length caractères. <br>");
        }

        $this->pdp_ad2 = $pdp_ad2;
    }

    /**
     * @param string $pdp_ad3
     */
    public function setPdP_ad3(string $pdp_ad3): void
    {
        $ad3Length = mb_strlen($pdp_ad3);
        if ($ad3Length >= 38) {
            $this->setAutorisationBD(false);
            self::setMessageErreur("La première adresse ne peut pas dépasser 38 caractères. Actuellement, elle contient $ad3Length caractères. <br>");
        }

        $this->pdp_ad3 = $pdp_ad3;
    }

    /**
     * @param string $pdp_ad4
     */
    public function setPdP_ad4(string $pdp_ad4): void
    {
        $ad4Length = mb_strlen($pdp_ad4);
        if ($ad4Length >= 38) {
            $this->setAutorisationBD(false);
            self::setMessageErreur("La première adresse ne peut pas dépasser 38 caractères. Actuellement, elle contient $ad4Length caractères. <br>");
        }

        $this->pdp_ad4 = $pdp_ad4;
    }

    /**
     * @param mixed $pdp_cpo
     */
    public function setPdP_cpo(mixed $pdp_cpo): void
    {
        if (empty($pdp_cpo) || ctype_space(strval($pdp_cpo))) {
            $this->setAutorisationBD(false);
            self::setMessageErreur("Le code postal est obligatoire. <br>");
        } elseif (strlen($pdp_cpo) !== 5 || !ctype_digit($pdp_cpo)) {
            $this->setAutorisationBD(false);
            self::setMessageErreur("Le code postal doit comporter exactement 5 chiffres. <br>");
        }

        $this->pdp_cpo = $pdp_cpo;
    }

    /**
     * @param mixed $pdp_vil
     */
    public function setPdP_vil(string $pdp_vil): void
    {
        if (empty($pdp_vil) || ctype_space(strval($pdp_vil))) {
            $this->setAutorisationBD(false);
            self::setMessageErreur("La ville est obligatoire. <br>");
        } else {
            $villeLength = strlen($pdp_vil);
            if ($villeLength > 32) {
                $this->setAutorisationBD(false);
                self::setMessageErreur("La ville ne peut pas dépasser 32 caractères. Actuellement, elle contient $villeLength caractères. <br>");
            }
        }

        $this->pdp_vil = $pdp_vil;
    }

    /**
     * @param string $pdp_tel
     */
    public function setPdP_tel(string $pdp_tel): void
    {

        $this->pdp_tel = $pdp_tel;
    }

    public function setPdpPor(string $pdp_por): void
    {
        $this->pdp_por = $pdp_por;
    }

    public function setPdp_Mai(string $pdp_mai): void
    {
        $this->pdp_mai = $pdp_mai;
    }

    public function setPdp_Dna(string $pdp_dna): void
    {
        $this->pdp_dna = $pdp_dna;
    }

    public function setPdp_Pri(string $pdp_pri): void
    {
        $this->pdp_pri = $pdp_pri;
    }

    public function setPdp_Een(string $pdp_een): void
    {
        $this->pdp_een = $pdp_een;
    }

    public function setPdp_Sor(string $pdp_sor): void
    {
        $this->pdp_sor = $pdp_sor;
    }

    public function setPdp_Reu(string $pdp_reu): void
    {
        $this->pdp_reu = $pdp_reu;
    }

    public function setPdp_Vit(string $pdp_vit): void
    {
        $this->pdp_vit = $pdp_vit;
    }

    public function setPdp_Dcr(string $pdp_dcr): void
    {
        $this->pdp_dcr = $pdp_dcr;
    }

    public function setPdp_Dmo(string $pdp_dmo): void
    {
        $this->pdp_dmo = $pdp_dmo;
    }

    /**
     * @param bool $autorisationBD
     */
    public function setAutorisationBD(bool $autorisationBD): void
    {
        $this->autorisationBD = $autorisationBD;
    }

    /**
     * @param string $messageErreur
     */
    public static function setMessageErreur(string $messageErreur): void
    {
        self::$messageErreur = self::$messageErreur . $messageErreur;
    }

    /**
     * @param string $messageSucces
     */
    public static function setMessageSucces(string $messageSucces): void
    {
        self::$messageSucces = self::$messageSucces . $messageSucces;
    }

}