<?php
 /**
  *
  */
 class Swift
 {

   private $version;
   private $output;

   function __construct(){

   }

   public function getVersion()
   {
     if(!isset($this->version)) {
       exec("swift -version", $this->version);
       $this->version = $this->version[0];
     }
     return $this->version;
   }

   // FIXME: this is not working yet due to permissions (consider alt method)
   public function run($code)
   {
     $this->output = [];
     var_dump(exec("2>&1 swift <(echo '$code')", $this->output));
     var_dump($this->output);
     return $this->output;
   }

 }
