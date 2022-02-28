<?php
class DataBaseConnectionManager{
    
    private $SERVERName = "localhost";
    private $userName = "root";
    private $password = "";
    private $dbName = "dataphp";
    private $conn;    
    
    public function getConnection (){
        try{
            $conn = new mysqli ("localhost", $this->userName, $this->password, $this->dbName);
            //$conn->set_charset("utf8");
            if($conn->connect_error){
                echo "erreur de connexion";                
            }
            
        }catch(Exception $e){
            
        }
        
        
        return $conn;           
    }
    
    function getInfoData($nom,$prenom,$email,$cell,$nomutilisateur,$motdepasse){
        
        $conn = $this->getConnection();

        $stmt = $conn->prepare("INSERT INTO client (nomFamille, prenom, courriel, cellulaire, nomUtilisateur, motPasse) VALUES (?, ?, ?, ?, ?, ?);");
        $stmt->bind_param("ssssss", $nom, $prenom, $email, $cell, $nomutilisateur,$motdepasse);
        $stmt->execute();
        $stmt->close();
       
       
       
     }
    function modifierData(){
        $conn = $this->getConnection();

        
    }

}   

?>
