<!-- Debut Div interet et langue-->
<?php 

    class Interets
    {
        public function __construct(protected $interet)
        {
            
        }
        public function setInteret($interet)
        {
            $this->interet = $interet;
        }
        public function getInteret()
        {
            return $this->interet;
        }

        function getHtmlOfInteret(){
            echo '
                    <div class="interet">
                        <h1 class="head-title-interet head-title-mobile">Point d\'intérets</h1>
                        <p class="sub-title-interet sub-title-mobile"><i>Simple passe-temps pour se faire un peu plaisir</i></p>
                        <img src='.$this->getInteret().' class="interet-icon" />
                    </div>
                    <div class="espace"></div>       
                    <!-- Fin Div interet et langue-->

                ';
        }
    }

    $inter = new Interets("../assets/img/interet.PNG");

    $inter->getHtmlOfInteret();
    
?>