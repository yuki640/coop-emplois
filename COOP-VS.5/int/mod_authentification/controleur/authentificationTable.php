<?php

class AuthentificationTable
{

    private string $login = "";
    private string $motdepasse = "";

    private bool $autorisationSession = true;

    private static string $messageErreur = "";

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
// $this->setNom($nom);
                $this->$setter($v);
            }
        }
    }


// Getters

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getMotdepasse(): string
    {
        return $this->motdepasse;
    }

    /**
     * @return bool
     */
    public function getAutorisationSession(): bool
    {
        return $this->autorisationSession;
    }

    /**
     * @return string
     */
    public static function getMessageErreur()
    {
        return self::$messageErreur;
    }


// Setters


    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        if (ctype_space(strval($login)) || empty($login)) {
            self::setMessageErreur("Vous devez saisir un login<br>");
            $this->setAutorisationSession(false);
        }
        $this->login = $login;
    }

    /**
     * @param string $motdepasse
     */
    public function setMotdepasse(string $motdepasse): void
    {
        if (!ctype_space(strval($motdepasse)) && !empty($motdepasse)) {
//salage
            $gauche = "ar30&y%";
            $droite = "tk!@";
            $this->motdepasse = hash('ripemd128', "$gauche$motdepasse$droite");

        } else {
            self::setMessageErreur("Vous devez saisir un mot de passe");
            $this->setAutorisationSession(false);
            $this->motdepasse = "";
        }
    }

    /**
     * @param bool $autorisationSession
     */
    public function setAutorisationSession(bool $autorisationSession): void
    {
        $this->autorisationSession = $autorisationSession;
    }

    /**
     * @param string $messageErreur
     */
    public static function setMessageErreur(string $messageErreur): void
    {
        self::$messageErreur = self::$messageErreur . $messageErreur;
    }
}