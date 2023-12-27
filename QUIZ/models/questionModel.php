<?php
$path= dirname(dirname(__FILE__));
$path2 = dirname(__FILE__);
    require_once($path."/config/database.php");
    require_once($path2."/themeModel.php");
   
    class questionModel 
    {
        private $idQ;
        private $question;
        private Theme $idTh;
        public function __construct(){
            $this->idTh = new Theme();

        }
        






        /**
         * Get the value of question
         */ 
        public function getQuestion()
        {
                return $this->question;
        }

        /**
         * Set the value of question
         *
         * @return  self
         */ 
        public function setQuestion($question)
        {
                $this->question = $question;

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
         * Set the value of idQ
         *
         * @return  self
         */ 
        public function setIdQ($idQ)
        {
                $this->idQ = $idQ;

                return $this;
        }

        /**
         * Get the value of idTh
         */ 
        public function getIdTh()
        {
                return $this->idTh;
        }
    }
    
?>