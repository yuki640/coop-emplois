<?php
Class UtilisateurTable{
    private $uti_ide="";
    private $uti_log="";
    private $uti_mdp = "";
    


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
//    /** TODO a faire plus tard pour comparer le mot de passe */
//     * Compare le mot de passe entré avec le hachage stocké
//     *
//     * @param string $password Le mot de passe entré par l'utilisateur
//     * @return bool Vrai si le mot de passe correspond, faux sinon
//     */
//    public function comparePassword($password)
//    {
//        return password_verify($password, $this->uti_mdp);
//    }
//geters////////////////////////////////////////////////////////////////////////////

/**
* @return string
*/
public function getIde()
{
    return $this->uti_ide;
}

/**
* @return string
*/
public function getLog()
{
    return $this->uti_log;
}

/**
* @return string
*/
public function getMdp()
{
    return $this->uti_mdp;
}

//seters////////////////////////////////////////////////////////////////////////////

/**
 * @param string $ide
 */
public function setUti_ide($ide)
{
    $this->uti_ide=$ide;
}

/**
 * @param string $log
 */
public function setUti_log($log)
{
    $this->uti_log=$log;
}

/**
* @param string $mdp
*/
public function setUti_mdp($mdp)
{
    $this->uti_mdp=password_hash($mdp,PASSWORD_BCRYPT);
}
}
