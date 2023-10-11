<?php

class ReunionTable
{

    private $reu_ide = ""; //getCodec | setCodec
    private $reu_dat = ""; // getPrix_unitaire_HT
    private $reu_heu = "";
    private $reu_dur = "";
    private $reu_lie = "";
    private $reu_cap = "";
    private $reu_pre = "";
    private $reu_acc = "";
    private $reu_pub = "";
    private $reu_dcr = "";
    private $reu_dmo = "";
    private $autorisationBD = true;
    private static $messageErreur = "";
    private static $messageSucces = "";

    public function __construct($data = null)
    {
//$data est UN TABLEAU
        if ($data != null) {
            $this->hydrater($data);
        }
    }

    public function hydrater(array $row)
    {
//$row est un TABLEAU
        foreach ($row as $k => $v) {
            //concaténation du préfixe set et du nom de la propriété avec
            // La première lettre en majuscule
            $setter = 'set' . ucfirst($k);
            if (method_exists($this, $setter)) {
                // On appelle la méthode
                //                   $this->setNom($nom);
                $this->$setter($v);
            }
        }
    }

// Getters
    public function getReuIde(): string
    {
        return $this->reu_ide;
    }

    public function getReuDat(): string
    {
        return $this->reu_dat;
    }

    public function getReuHeu(): string
    {
        return $this->reu_heu;
    }

    public function getReuDur(): string
    {
        return $this->reu_dur;
    }

    public function getReuLie(): string
    {
        return $this->reu_lie;
    }

    public function getReuCap(): string
    {
        return $this->reu_cap;
    }

    public function getReuPre(): string
    {
        return $this->reu_pre;
    }

    public function getReuAcc(): string
    {
        return $this->reu_acc;
    }

    public function getReuPub(): string
    {
        return $this->reu_pub;
    }

    public function getReuDcr(): string
    {
        return $this->reu_dcr;
    }

    public function getReuDmo(): string
    {
        return $this->reu_dmo;
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
     * @param mixed $reu_ide
     */
    public function setReu_ide($reu_ide)
    {
        $this->reu_ide = $reu_ide;
    }

    /**
     * @param mixed $reu_dat
     */
    public function setReu_dat($reu_dat)
    {
        if (empty($reu_dat) || ctype_space(strval($reu_dat))) {
            $this->setAutorisationBD(false);
            self:: setMessageErreur("La date est obligatoire. <br>");
        }
        $this->reu_dat = $reu_dat;
    }

    /**
     * @param string $reu_heu
     */
    public function setReu_heu(string $reu_heu)
    {
        $this->reu_heu = $reu_heu;
    }

    /**
     * @param string $reu_dur
     */

    public function setReu_dur(string $reu_dur)
    {
        $this->reu_dur = $reu_dur;
    }

    public function setReu_Lie(string $reu_lie): void
    {
        $this->reu_lie = $reu_lie;
    }

    public function setReu_Cap(string $reu_cap): void
    {
        $this->reu_cap = $reu_cap;
    }

    public function setReu_Pre(string $reu_pre): void
    {
        $this->reu_pre = $reu_pre;
    }

    public function setReu_Acc(string $reu_acc): void
    {
        $this->reu_acc = $reu_acc;
    }

    public function setReu_Pub(string $reu_pub): void
    {
        $this->reu_pub = $reu_pub;
    }

    public function setReu_Dcr(string $reu_dcr): void
    {
        $this->reu_dcr = $reu_dcr;
    }

    public function setReu_Dmo(string $reu_dmo): void
    {
        $this->reu_dmo = $reu_dmo;
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