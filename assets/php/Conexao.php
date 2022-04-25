<?php
    class Conexao{
        private $PDO;

        public function __construct(){
            try{
                $this->PDO = new PDO('mysql:dbname=simplificaeventos;host=localhost', 'root', '');
            }catch(PDOException $e){
                echo "Erro de conexão com a base de dado: ". $e->getMessage();
            }catch(Exception $e){
                echo "Erro: ". $e->getMessage();
            }
        }
        
        public function getPDO(){
            return $this->PDO;
        }
    } 
?>