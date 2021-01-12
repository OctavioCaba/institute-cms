<?php
    class User {
        private $id;
        private $name;
        private $surname;
        private $email;
        private $password;
        private $gender;
        private $rol;
        private $resgister_date;
        private $db;

        public function __construct() {
            $this->db = $db = Database::connect();
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;

            return $this;
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $this->db->real_escape_string($name);

            return $this;
        }

        public function getSurname() {
            return $this->surname;
        }

        public function setSurname($surname) {
            $this->surname = $this->db->real_escape_string($surname);

            return $this;
        }

        public function getEmail() {
            return $this->email;
        }
    
        public function setEmail($email) {
            $this->email = $this->db->real_escape_string($email);
    
            return $this;
        }

        public function getPassword() {
            return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
        }

        public function setPassword($password) {
            $this->password = $password;

            return $this;
        }

        public function getRol() {
            return $this->rol;
        }

        public function setRol($rol) {
            $this->rol = $this->db->real_escape_string($rol);

            return $this;
        }

        public function getGender() {
            return $this->gender;
        }

        public function setGender($gender) {
            $this->gender = $this->db->real_escape_string($gender);

            return $this;
        }

        public function getRegisterDate() {
            return $this->register_date;
        }

        public function setRegisterDate($resgister_date) {
            $this->register_date = $resgister_date;

            return $this;
        }

        public function save() {
            $sql = " INSERT INTO users VALUES(NULL, '{$this->getName()}', '{$this->getSurname()}', '{$this->getEmail()}', '{$this->getPassword()}', '{$this->getGender()}', '{$this->getRol()}', CURDATE()) ";
            $save = $this->db->query($sql);

            $result = false;
            if ($save) {
                $result = true;
            }

            return $result;
        }

        public function login() {
            $result = false;
            $email = $this->email;
            $password = $this->password;

            $sql = " SELECT * FROM users WHERE email = '$email' ";
            $login = $this->db->query($sql);

            if ($login && $login->num_rows == 1) {
                $user = $login->fetch_object();

                $verify = password_verify($password, $user->password);

                if ($verify) {
                    $result = $user;
                }

                return $result;
            }
        }
    }
?>
