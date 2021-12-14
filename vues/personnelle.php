<?php 
    
    class Profil{

        public function __construct(protected $photoProfil, protected $nomUtilisateur, protected $fonctionEntreprise, 
        protected $anneeNaissance, protected $origine, protected $matrimonial, protected $sante, protected $residences, protected $residenceVille, 
        protected $map, protected $numeroTelephone, protected $reseauSociaux, protected $addresseMail, protected $reseauMail, 
        protected $nbreProjet, protected $nbreContrat, protected $nbreAnneeExperience){

        }

        //Debut fonction pour profil utilisateur
        function set_photoProfil($photo) {
            $this->photoProfil = $photo;
        }
        function get_photoProfil(){
            return $this->photoProfil;
        }
        function set_nomUtilisateur($nom) {
            $this->nomUtilisateur = $nom;
        }
        function get_nomUtilisateur(){
            return $this->nomUtilisateur;
        }
        function set_fonctionEntreprise($fonction) {
            $this->fonctionEntreprise = $fonction;
        }
        function get_fonctionEntreprise(){
            return $this->fonctionEntreprise;
        }
        /*Fin fonction pour profil utilisateur*/

        //Debut fonction pour residence utilisateur
        function set_residences($residences) {
            $this->residences = $residences;
        }
        function get_residences(){
            return $this->residences;
        }
        function set_residenceVille($residenceVille) {
            $this->residenceVille = $residenceVille;
        }
        function get_residenceVille(){
            return $this->residenceVille;
        }
        function set_map($map) {
            $this->map = $map;
        }
        function get_map(){
            return $this->map;
        }
        //Fin fonction pour reseidence utilisateur

        //Debut fonction pour naissance utilisateur
        function set_anneeNaissance($annee) {
            $this->anneeNaissance = $annee;
        }
        function get_anneeNaissance(){
            return $this->anneeNaissance;
        }
        function set_origine($origine) {
            $this->origine = $origine;
        }
        function get_origine(){
            return $this->origine;
        }
        function set_matrimonial($matrimonial) {
            $this->matrimonial = $matrimonial;
        }
        function get_matrimonial(){
            return $this->matrimonial;
        }
        //Fin fonction pour residence utilisateur

        //Debut fonction pour contact utilisateur
        function set_numeroTelephone($numeroTelephone) {
            $this->numeroTelephone = $numeroTelephone;
        }
        function get_numeroTelephone(){
            return $this->numeroTelephone;
        }
        function set_reseauSociaux($reseauSociaux) {
            $this->reseauSociaux = $reseauSociaux;
        }
        function get_reseauSociaux(){
            return $this->reseauSociaux;
        }
        //Fin fonction pour contact utilisateur

         //Debut fonction pour email utilisateur
        function set_addresseMail($addresseMail) {
            $this->addresseMail = $addresseMail;
        }
        function get_addresseMaile(){
            return $this->addresseMail;
        }
        function set_reseauMail($reseauMail) {
            $this->reseauMail = $reseauMail;
        }
        function get_reseauMail(){
            return $this->reseauMail;
        }
        //Fin fonction pour email utilisateur

        //Debut fonction pour projet utilisateur
        function set_nbreProjet($nbreProjet) {
            $this->nbreProjet = $nbreProjet;
        }
        function get_nbreProjet(){
            return $this->nbreProjet;
        }
        function set_nbreContrat($nbreContrat) {
            $this->nbreContrat = $nbreContrat;
        }
        function get_nbreContrat(){
            return $this->nbreContrat;
        }
        function set_nbreAnneeExperience($nbreAnneeExperience) {
            $this->nbreAnneeExperience = $nbreAnneeExperience;
        }
        function get_nbreAnneeExperience(){
            return $this->nbreAnneeExperience;
        }
        //Fin fonction pour projet utilisateur

        public function convertHtmlToPdf(){

        }

        public function addProfil(){

        }
        public function deleteProfil($id){
            
        }
        public function updateProfil($id){
            
        }
        public function deleteAllProfil(){
            
        }
        public function getAnyProfil($id){
            
        }

        public function getHtmlOfProfil(){    

            echo ' <div class="image-background">           
            <!-- Div de la barre de recherche -->
            <div class="container-search container-search-mobile">    
                <div class="menu menu-mobile" id="menu-mobile">
                    <img src="../assets/img/menu.png"  width="30px" height="30px"/>
                </div>
                <div class="input-search input-search-mobile">
                    <input type="text" placeholder="Besoin d\'un chef de projet ? "/>
                </div>
                <div class="search-icon search-icon-mobile">
                    <img src="../assets/img/search.png" width="30px" height="30px"/>
                </div>
                <div class="thick_vertical-icon thick_vertical-icon-mobile">
                    <img src="../assets/img/thick_vertical.png" width="30px" height="30px" />
                </div>
                <div class="close-icon close-icon-mobile">
                    <img src="../assets/img/close.png" width="50px" height="50px"/>
                </div>                       
            </div>
            <!-- Fin Div de la barre de recherche -->

            <!-- Div du profil -->
            <div class="profil profil-mobile">
                
                <div class="profil-picture profil-picture-mobile">
                    <img src='.$this->get_photoProfil().' class="haris-picture" />
                </div>
                <div class="profil-name profil-name-mobile">
                    <h1 class="name name-mobile">'.$this->nomUtilisateur.'</h1>
                    <p class="jobs jobs-mobile">'.$this->fonctionEntreprise.'</p>
                </div>
            </div> 
            <!-- Fin Container du profil -->               
            </div>

            <!-- Div des informations personnelles-->
            <div class="personal-info personal-info-mobile">
                <!-- Div du boutton Add-->
                <div class="buttom-add buttom-add-mobile">
                    <button class="btn" onclick="toggleClock();" id="btn">+</button>
                </div>
                <div class="subButton" id="divButton">
                    <button class="btn-pdf" name="btnpdf" id="btn-pdf"><img src="../assets/img/export_pdf.png" /></button>
                    <a href="vues/sendmail.php"><button class="btn-mail" id="btn-mail"><img src="../assets/img/composing_mail.png" /></button></a>
                </div>
                <div class="birthday birthday-mobile">
                    <div class="birth birth-mobile">
                        <p class="birth birth-mobile">'.$this->anneeNaissance.'</p>
                        <p class="birth birth-mobile">'.$this->origine.'</p>
                        <p class="birth birth-mobile">'.$this->matrimonial.'-'.$this->sante.'</p>
                    </div>            
                    <img src="../assets/img/birthday.png" class="birthday-icon birthday-icon-mobile" />
                </div>
                <div class="divider divider-mobile"></div>
                <div class="birthday residence-mobile">
                    <div class="birth birth-mobile">
                        <p class="birth birth-mobile">'.$this->residences.'</p>
                        <p class="birth birth-mobile">'.$this->residenceVille.'</p>
                        <p class="birth birth-mobile">'.$this->map.'</p>
                    </div> 
                        <img src="../assets/img/location.png" class="location-icon" />
                </div>
                <div class="divider divider-mobile"></div>
                <div class="birth phone-mobile">
                    <div class="call call-mobile">
                    <p class="birth birth-mobile">'.$this->numeroTelephone.'</p>
                    <p class="birth media-mobile">'.$this->reseauSociaux.'</p>
                    </div>    
                        <img src="../assets/img/phone.png" class="phone-icon" />
                </div>
                <div class="divider divider-mobile"></div>
                <div class="birth mail-mobile">
                    <div class="couriel couriel-mobile">
                    <p class="birth birth-mobile">'.$this->addresseMail.'</p>
                    <p class="birth birth-mobile">'.$this->reseauMail.'</p>
                    </div>
                        <img src="../assets/img/message.png" class="message-icon" />
                </div>
                
                <div class="navigation-projet">
                    <p>'.$this->nbreProjet.'</p>
                    <p>'.$this->nbreContrat.'</p>
                    <p>'.$this->nbreAnneeExperience.'</p>
                </div>
                <div class="slide-rouge"></div>      
            </div>
            <!-- Fin Div des informations personnelles-->

            ';
        }   
    }

  echo '

        <script type="text/javascript">
            function toggleClock() {
                var madiv = document.getElementById(\'divButton\');
                var settingDisplay = madiv.style.display;
                var shareButton = document.getElementById(\'btn\');
            
                if (settingDisplay == \'none\') {
                    madiv.style.display = \'block\';
                    shareButton.innerHTML = \'x\';
                }
                else {         
                    madiv.style.display = \'none\';
                    shareButton.innerHTML = \'+\';
                }           
                
            }
        </script>
    ';
?>
