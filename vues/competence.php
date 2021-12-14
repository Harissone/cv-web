<!-- Debut des competences-->
<?php 

    class Competences
    {
        public function __construct(protected $groupeCompetences, protected $subCompetences, 
        protected $m1, protected $m2){

        }
       
        function getM1(){
            return $this->m1;
        }
        function getM2(){
            return $this->m2;
        }
        function set_groupeCompetence($groupeCompetences){
            $this->groupeCompetences = $groupeCompetences;
        }
        function get_groupeCompetence(){
            return $this->groupeCompetences;
        }

        function set_subCompetence($subCompetences){
            $this->subCompetences = $subCompetences;
        }
        function get_subCompetences(){
            return $this->subCompetences;
        }

        public function addGroupeCompetences(){

        }
        public function updateGroupeCompetences($id){

        }
        public function deleteGroupeCompetences($id){

        }
        public function deleteAllGroupeCompetences(){

        }
        public function getGroupeCompetences($id){

        }
        public function getAllGroupeCompetences(){

        }

        public function addSubCompetences(){

        }
        public function updateSubCompetences($id){

        }
        public function deleteSubCompetences($id){

        }
        public function deleteAllSubCompetences(){

        }
        public function getSubCompetences($id){

        }
        public function getAllSubCompetences(){

        }
        public function getHtmlOfCompetences(){

            echo ' <div class="skills">             
                    <input type="checkbox" checked="true" class="checkbox checkbox-mobile"/>
                    <div class="titre">
                        <div class="head-title-skills head-title-mobile"><b>'.$this->get_groupeCompetence().'</b></div>
                        <p class="sub-title sub-title-mobile">'.$this->get_subCompetences().'</p>
                    <div class="jauges">
                        <div class="m1" style="width: '.$this->getM1().'%;"></div>
                        <div class="m2" style="right: '.$this->getM2().'%;"></div>
                    </div>
                    </div>
                    <i class="fas fa-star"></i>                 
                    </div>
                    
                    
                ';
        }
    }
   
?>