<?php
    $path= dirname(dirname(__FILE__));
$path2 = dirname(__FILE__);
    require_once($path."/config/database.php");
    require_once($path2."./questionModel.php");
   
    // `idR`, `reponse`, `statut`, `idQ`, `justification
    class reponseModel 
    {
        private $idR;
        private $reponse;
        private questionModel $idQ;

        private $statut;
        private $justification;
        
        public function __construct(){
            $this->idQ = new questionModel();
        }

        

        /**
         * Get the value of idR
         */ 
        public function getIdR()
        {
                return $this->idR;
        }

        /**
         * Set the value of idR
         *
         * @return  self
         */ 
        public function setIdR($idR)
        {
                $this->idR = $idR;

                return $this;
        }

        /**
         * Get the value of reponse
         */ 
        public function getReponse()
        {
                return $this->reponse;
        }

        /**
         * Set the value of reponse
         *
         * @return  self
         */ 
        public function setReponse($reponse)
        {
                $this->reponse = $reponse;

                return $this;
        }

        /**
         * Get the value of idQ
         */ 
        public function getIdQ()
        {
                return $this->idQ;
        }

        /**
         * Get the value of justification
         */ 
        public function getJustification()
        {
                return $this->justification;
        }

        /**
         * Set the value of justification
         *
         * @return  self
         */ 
        public function setJustification($justification)
        {
                $this->justification = $justification;

                return $this;
        }

        /**
         * Get the value of statut
         */ 
        public function getStatut()
        {
                return $this->statut;
        }

        /**
         * Set the value of statut
         *
         * @return  self
         */ 
        public function setStatut($statut)
        {
                $this->statut = $statut;

                return $this;
        }
        }
        // function getAllReponseByIdQuestion($id_q) {
        //     $db = new database();
        //     $db->query("SELECT * FROM `reponse` WHERE `idQ` = :idQ");
        //     $db->bind(":idQ", $id_q);
        //     $reponse = $db->fetchAll();
        //     return $reponse;
        // }
    
  


