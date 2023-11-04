  
<?php 
    

class Connection
{
    public function connect()
    {

        $conect = new mysqli($_ENV['SERVER'], $_ENV['USER'], $_ENV['PASS'], $_ENV['BD'] );
        if ($conect ->connect_errno) {
            echo "Fallo al conectar a MySQL : (" . $conect ->connect_errno." )".$conect->connect_error ;
        }
        
        return $conect;
    }
}
   
    
    
?>
