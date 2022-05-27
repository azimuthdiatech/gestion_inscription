<?php
namespace App\Model;
use App\Core\Model;
use App\Core\DataBase;
class Demande extends Model{
    private string $motif;
    private string $etat;
    private string $inscription_id;
    private string $etudiant_id;

    public function __construct(){
    }

    public function insert():int{
        $db=parent::database(); 
        $db->connexionBD();
        $sql= "INSERT INTO `demande` (`motif`, `etat`, `inscription_id`, `etudiant_id`) VALUES (?,?,?,?)";
        $result=$db->executeUpdate($sql,[$this->motif,$this->etat,$this->inscription_id,$this->etudiant_id]);
        $db->closeConnexion();  
        return $result;  
    }

    public static function findAll(){
        
        $db=parent::database();
        $db->connexionBD();  
        $sql="select * from ".self::table();
        
            $results=$db->executeSelect($sql,[]);
        $db->closeConnexion();  
        
        return $results;
    } 
    

    /**
     * Get the value of motif
     *
     * @return string
     */
    public function getMotif(): string
    {
        return $this->motif;
    }

    /**
     * Set the value of motif
     *
     * @param string $motif
     *
     * @return self
     */
    public function setMotif(string $motif): self
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get the value of etat
     *
     * @return string
     */
    public function getEtat(): string
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @param string $etat
     *
     * @return self
     */
    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get the value of inscription_id
     *
     * @return string
     */
    public function getInscriptionId(): string
    {
        return $this->inscription_id;
    }

    /**
     * Set the value of inscription_id
     *
     * @param string $inscription_id
     *
     * @return self
     */
    public function setInscriptionId(string $inscription_id): self
    {
        $this->inscription_id = $inscription_id;

        return $this;
    }

    /**
     * Get the value of etudiant_id
     *
     * @return string
     */
    public function getEtudiantId(): string
    {
        return $this->etudiant_id;
    }

    /**
     * Set the value of etudiant_id
     *
     * @param string $etudiant_id
     *
     * @return self
     */
    public function setEtudiantId(string $etudiant_id): self
    {
        $this->etudiant_id = $etudiant_id;

        return $this;
    }
}
    



