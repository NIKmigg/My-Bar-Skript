<?php
    class Nutzer
    {
        private $nutzerID;
        private $name;
        private $email;
        private $passwort;

        public function getNutzerID()
        {
            return $this->nutzerID;
        }
        public function setNutzerID($nutzerID)
        {
            $this->nutzerID = $nutzerID;
        }

        public function getName()
        {
            return $this->name;
        }
        public function setName($name)
        {
            $this->name = $name;
        }

        public function getEmail()
        {
            return $this->email;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function getPasswort()
        {
            return $this->passwort;
        }
        public function setPasswort($passwort)
        {
            $this->passwort = $passwort;
        }
    }
?>