<!-- Debut Div experiences personnelles-->
<?php

    class Experiences{

        public function __construct(protected $poste, protected $instagramEntreprise, protected $periodeDebut, protected $periodeFin, protected $lienEntreprise, protected $accomplissement){
            
        }

        function set_poste($poste){
            $this->poste = $poste;
        }
        function get_poste(){
            return $this->poste ;
        }

        function set_instagramEntreprise($instagramEntreprise){
            $this->instagramEntreprise = $instagramEntreprise;
        }
        function get_instagramEntreprise(){
            return $this->instagramEntreprise;
        }

        function set_periodeDebut($periodeDebut){
            $this->periode = $periodeDebut;
        }
        function set_periodeFin($periodeFin){
            $this->periode = $periodeFin;
        }
        function get_periodeDebut(){
            return $this->periodeDebut ;
        }
        function get_periodeFin(){
            return $this->periodeFin ;
        }

        function set_lienEntreprise($lienEntreprise){
            $this->lienEntreprise = $lienEntreprise;
        }
        function get_lienEntreprise(){
            return $this->lienEntreprise;
        }

        function set_accomplissement($accomplissement){
            $this->accomplissement = $accomplissement;
        }
        function get_accomplissement(){
            return $this->accomplissement ;
        }

        public function addExperiences(){

        }
        public function deleteExperiences($id){
            
        }
        public function deleteAllExperiences(){
            
        }
        public function updateExperiences($id){
            
        }
        public function getExperiences($id){
            
        }
        public function getAllExperiences(){
            
        }

        public static function nbreAnneeExperience(){
            $enseignant_debut = new DateTime("2011-10-00");
            $enseignant_fin = new DateTime(Date('Y-m-d'));
            $enseignant_exp = $enseignant_fin->diff($enseignant_debut)->format("%y");
            $exp = $enseignant_exp;
            return $exp;
        }
        
        public function getHtmlOfExperiences(){
            
             echo  '                                    
                    <p class="sub-title sub-title-mobile">'.$this->get_poste().' - <b>'.$this->get_instagramEntreprise().'</b></p>
                    <p class="sub-title-blue sub-title-blue-mobile"> De '.$this->get_periodeDebut().' à '.$this->get_periodeFin().' - '.$this->get_lienEntreprise().'</p>
                    <p class="sub-title sub-title-mobile">'.$this->get_accomplissement().'</p>
                    <div class="divider-black divider-black-mobile"></div>                    
                    <!-- Fin Div experiences personnelles-->

                ';    
        }
        public static function getHeadHtmlOfExperiences(){
            echo '<div class="header-experience header-experience-mobile"> 
                    <img src="../assets/img/company.png" class="company-icon" />               
                    <div class="title-experience title-experience-mobile">                                  
                        <h1 class="head-title-experience head-title-mobile">Expérience proféssionnelle ('.Experiences::nbreAnneeExperience().' ans d\'expériences)</h1>
                        <label class="sub-title sub-title-mobile"><i>Expertise en entreprise</i></label>                   
                    </div>
                    <img src="../assets/img/menu_pointiller.png" class="menu_pointiller-icon-experience" />
                </div>  

                ';
        }
    }
    
    
   
 ?>