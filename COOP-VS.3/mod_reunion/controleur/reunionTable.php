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
    private $reu_lie_nom = "";
    private $reu_acc_nom = "";
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
    public function getReuDatFormatted()
    {
        $timestamp = strtotime($this->reu_dat);
        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
        $dateFormatted = $formatter->format($timestamp);
        return $dateFormatted;
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

    /**
     * @return string
     */
    public function getReuLieNom(): string
    {
        return $this->reu_lie_nom;
    }

    /**
     * @return string
     */
    public function getReuAccNom(): string
    {
        return $this->reu_acc_nom;
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
        // Vérifier si la valeur est vide ou composée uniquement d'espaces
        if (empty($reu_dat) || ctype_space(strval($reu_dat))) {
            $this->setAutorisationBD(false);
            self::setMessageErreur("La date est obligatoire et ne peut pas être vide. <br>");
        } else {
            // Vérifier si la date est au format 'Y-m-d' (AAAA-MM-JJ)
            $dateObj = DateTime::createFromFormat('Y-m-d', $reu_dat);

            if ($dateObj === false || $dateObj->format('Y-m-d') !== $reu_dat) {
                $this->setAutorisationBD(false);
                self::setMessageErreur("Le format de la date est incorrect. Utilisez le format JJ-MM-AAAA. <br>");
            } else {
                // Vérifier si la date est postérieure à la date actuelle
                $dateActuelle = new DateTime();
                if ($dateObj < $dateActuelle) {
                    $this->setAutorisationBD(false);
                    self::setMessageErreur("La date ne peut pas être antérieure à la date actuelle. <br>");
                } else {
                    $this->reu_dat = $reu_dat;
                }
            }
        }
    }

    /**
     * @param string $reu_heu
     */
    public function setReu_heu(string $reu_heu)
    {
        // Vérifier si la valeur est vide ou composée uniquement d'espaces
        if (empty($reu_heu) || ctype_space($reu_heu)) {
            $this->setAutorisationBD(false);
            self::setMessageErreur("L'heure de la réunion est obligatoire. <br>");
        } else {
            // Séparer l'heure en heures et minutes
            list($heures, $minutes) = explode(":", $reu_heu);

            // Vérifier si les heures et les minutes sont des nombres valides
            if (!is_numeric($heures) || !is_numeric($minutes)) {
                $this->setAutorisationBD(false);
                self::setMessageErreur("L'heure de la réunion est au format incorrect. Utilisez HH:MM. <br>");
            } else {
                // Convertir l'heure en minutes depuis minuit
                $heureEnMinutes = $heures * 60 + $minutes;

                // Vérifier si l'heure est entre 9h (540 minutes) et 20h (1200 minutes)
                if ($heureEnMinutes < 540 || $heureEnMinutes > 1200) {
                    $this->setAutorisationBD(false);
                    self::setMessageErreur("L'heure de la réunion doit être entre 9h et 20h. <br>");
                } else {
                    // Si l'heure est valide, stocker la valeur
                    $this->reu_heu = $reu_heu;
                }
            }
        }
    }

    /**
     * @param string $reu_dur
     */

    public function setReu_dur(string $reu_dur)
    {
        // Vérifier si la valeur est vide ou composée uniquement d'espaces
        if (empty($reu_dur) || ctype_space($reu_dur)) {
            $this->setAutorisationBD(false);
            self::setMessageErreur("La durée de la réunion est obligatoire. <br>");
        } else {
            // Séparer la durée en heures et minutes
            list($heures, $minutes) = explode(":", $reu_dur);

            // Vérifier si les heures et les minutes sont des nombres valides
            if (!is_numeric($heures) || !is_numeric($minutes)) {
                $this->setAutorisationBD(false);
                self::setMessageErreur("La durée de la réunion est au format incorrect. Utilisez HH:MM. <br>");
            } else {
                // Convertir la durée en minutes
                $dureeEnMinutes = $heures * 60 + $minutes;

                // Vérifier si la durée est d'au moins 1h30 (90 minutes) et au maximum de 6 heures (360 minutes)
                if ($dureeEnMinutes < 90 || $dureeEnMinutes > 360) {
                    $this->setAutorisationBD(false);
                    self::setMessageErreur("La réunion doit durer au moins 1h30 (90 minutes) et au maximum 6 heures (360 minutes). <br>");
                } else {
                    // Si la durée est valide, stocker la valeur
                    $this->reu_dur = $reu_dur;
                }
            }
        }
    }

    public function setReu_Lie(string $reu_lie): void
    {
        if (empty($reu_lie) || ctype_space($reu_lie)) {
            $this->setAutorisationBD(false);
            self::setMessageErreur("Un lieu pour la réunion est obligatoire. <br>");
        }
        $this->reu_lie = $reu_lie;
    }

    public function setReu_Cap(string $reu_cap): void
    {
        $this->reu_cap = $reu_cap;
    }

    public function setReu_Pre(string $reu_pre): void
    {
        if (empty($reu_pre) || ctype_space($reu_pre)) {
            $this->setAutorisationBD(false);
            self::setMessageErreur("Un intitulé pour la réunion est obligatoire. <br>");
        }
        $this->reu_pre = $reu_pre;
    }

    public function setReu_Acc(string $reu_acc): void
    {
        if (empty($reu_acc) || ctype_space($reu_acc)) {
            $this->setAutorisationBD(false);
            self::setMessageErreur("Un accompagnateur pour la réunion est obligatoire. <br>");
        }
        $this->reu_acc = $reu_acc;
    }

    public function setReu_Pub(string $reu_pub): void
    {
        $this->reu_pub = $reu_pub;
    }

    /**
     * @param string $reu_lie_nom
     */
    public function setReu_Lie_Nom(string $reu_lie_nom): void
    {
        $this->reu_lie_nom = $reu_lie_nom;
    }

    /**
     * @param string $reu_acc_nom
     */
    public function setReu_Acc_Nom(string $reu_acc_nom): void
    {
        $this->reu_acc_nom = $reu_acc_nom;
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