<?php

namespace alat\fs\commands;

class UpdateCommand extends \alat\fs\commands\Command {
   private $fields;
   private $type;
   private $id;

   public function __construct($path, $type, $id, $fields) {
      parent::__construct($path);
      $this->type = $type;
      $this->id = $id;
      $this->fields = $fields;
   }

   public function execute() {
      ksort($this->fields);
      $this->command = 'u/' . $this->type . '/' . $this->id . '/' . json_encode($this->fields);
      parent::execute();
   }

   public function getId() {
      return $this->id;
   }
}