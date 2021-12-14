<!-- Debut Div cursus academique-->   
<?php

    class Cursus
    {

        public function __construct(protected $diplome, protected $institutObtention, protected $periode, protected $specialite){
            
        }

        function set_diplome($diplome){
            $this->diplome = $diplome;
        }
        function get_diplome(){
            return $this->diplome;
        }

        function set_institutObtention($institutObtention){
            $this->institutObtention = $institutObtention;
        }
        function get_institutObtention(){
            return $this->institutObtention;
        }

        function set_periode($periode){
            $this->periode = $periode;
        }
        function get_periode(){
            return $this->periode;
        }

        function set_specialite($specialite){
            $this->specialite = $specialite;
        }
        function get_specialite(){
            return $this->specialite;
        }

        public function addCursus(){

        }
        public function deleteCursus($id){
            
        }
        public function deleteAllCursus(){
            
        }
        public function updateCursus($id){
            
        }
        public function getCursus($id){
            
        }
        public function getAllCursus(){
            
        }

        public static function getHeadHtmlOfCursus(){
            echo '
                    <div class="header-cursus header-cursus-mobile">
                    <img src="../assets/img/student.png" class="student-icon" />
                    <div class="title-cursus title-cursus-mobile">
                        <h1 class="head-title-cursus head-title-mobile">Cursus academique</h1>
                        <label class="sub-title-cursus sub-title-mobile"><i>Diplome et formation certifiantes</i></label>
                    </div> 
                    <img src="../assets/img/menu_pointiller.png" class="menu_pointiller-icon-cursus" />
                    </div>
            ';
        }

        public function getHtmlOfCursus(){

            echo '           
                    <p class="sub-title sub-title-mobile">'.$this->get_diplome().' - <b>'.$this->get_institutObtention().'</b></p>
                    <p class="sub-title-blue sub-title-blue-mobile">'.$this->get_periode().' - <i>'.$this->get_specialite().'</i></p>
                    <div class="divider-black divider-black-mobile"></div>

                    <!-- Fin Div cursus academique-->

                ';
        }

    }
    
    
?>