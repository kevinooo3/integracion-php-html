<?php   
    interface StoreInterface
    {
        public function get();
            // solo declaramos la funcion para que cuando alguna clase quiera usar esta interface le pidamos que incluya el metodo get pero con logica ddentro de su cuerpo.
            // esto sirve como una plantilla simplemente.
    }