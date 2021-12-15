<?php

    class Langues extends Competences
    {
        public function __construct(protected $langue)
        {
           
        }

        function setLangue($langue){
            $this->langue = $langue;
        }
        function getLangue()
        {      
            return $this->langue;
        }

        public static function getHeadHtmlOfLangue(){
            echo '
                    <div class="head">
                    <h1 class="head-title-langue head-title-mobile">Langues</h1>
                    <label class="sub-title-langue sub-title-mobile"><i>Pratiquées en entreprise</i></label><br>
                    </div>        
            ';
        }

        function getHtmlOfLangue(){
            echo '   
                    <input type="checkbox" checked="true" class="checkbox checkbox-mobile"/>
                    <p class="sub-title-langue sub-title-mobile">'.$this->getLangue().'</p>     
            ';
        }
    }
            
?>