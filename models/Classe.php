<?php
namespace App\Model;
use App\Core\Model;
use App\Core\DataBase;
class Classe extends Model{

    private string $id;
    private string $libelle;
    private string $filiere;
    private string $niveau;

    
    //fonctions navigationnels
    //mAnyToMany => Professeur
    public function professeurs():array{
        return[];
    }
    public function __construct(){
        
    }
    public function update(int $id):int{
        $db=self::database();
        $db->connexionBD();
        $sql="UPDATE classe SET libelle = ?, filiere =?, niveau = ? WHERE id = ?";
        //dd($sql);
        $result=$db->executeUpdate($sql,[$this->libelle,$this->filiere,$this->niveau,$this->id]);
        $db->closeConnexion();  
        return $result;
    }
    public static function delete(int $id):int{
        $db=self::database();
        $db->connexionBD();
        //requete non preparée la variable est injecté loes de lécriture de la requete
        $sql="delete from ".self::table(). " where id = $id";
            $result=$db->executeUpdate($sql);
        $db->closeConnexion();  
        return $result;
    }
    public static function findById(int $id){
        $db=self::database();
        $db->connexionBD();
        $sql="select * from " .self::table(). " where id=?";
        $result=$db->executeSelect($sql,[$id]);
        $db->closeConnexion();  
        return $result;
    }
    public function insert():int{
        $db=parent::database(); 
        $db->connexionBD();
        $sql= "INSERT INTO `classe` (`libelle`, `filiere`, `niveau`) VALUES (?,?,?)";
        $result=$db->executeUpdate($sql,[$this->libelle,$this->filiere,$this->niveau]);
        $db->closeConnexion();  
        return $result;  
    }

    public static function findAll(){
        $db=parent::database();
        $db->connexionBD();  
        $sql="select * from ".self::table();
            $results=$db->executeSelect($sql);
        $db->closeConnexion();  
        return $results;
    } 

    /**
     * Get the value of libelle
     *
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @param string $libelle
     *
     * @return self
     */
    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of filiere
     *
     * @return string
     */
    public function getFiliere(): string
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @param string $filiere
     *
     * @return self
     */
    public function setFiliere(string $filiere): self
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get the value of niveau
     *
     * @return string
     */
    public function getNiveau(): string
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @param string $niveau
     *
     * @return self
     */
    public function setNiveau(string $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }


    /**
     * Set the value of id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }
}