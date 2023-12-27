<?php
// require_once "./Config/database.php";
require_once "../models/reponseModel.php";

class ReponseDao{
    private $db;
    private reponseModel $reponse  ;
    public function __construct(){
        $this->db = new database();
        $this->reponse = new reponseModel();
    }
//     public function getReponseById($idQ){

// }
public function getReponse($id_q){
    $req = "SELECT idR, reponse, statut, justification,question FROM question, reponse WHERE question.idQ = reponse.idQ AND reponse.idQ = :idq";
  $this->db->query($req);
  $this->db ->bind(":idq", $id_q); 
  $this->db->execute();  
 $v= $this->db->fetchAll();
 $Qu=array();
 foreach($v as $row) {
   $q=new reponseModel();
   $q->setIdR($row->idR);
   $q->setReponse($row->reponse);
   $q->setStatut($row->statut);
   $q->setJustification($row->justification);
   $q->getIdQ()->setQuestion($row->question);
   $statut=$q->getStatut();
   $justification=$q->getJustification();
   $question=$q->getIdQ()->getQuestion();
   $idreponse=$q->getIdR();
   $reponse=$q->getReponse();
   $arrReponse=[
       "idR"=>$idreponse,
   "rep"=>$reponse,
   "statut"=>$statut,
   "justification"=>$justification,
   "question"=>$question
   ];
   array_push($Qu,$arrReponse);

 }
 
 



    return $v;
}




}
// $res=new reponseDao();
// $x=$res->getReponse(3);
// var_dump($x);

?>