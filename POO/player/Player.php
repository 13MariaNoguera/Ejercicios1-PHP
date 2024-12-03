<?php

    class Player {

        public $name;
        public $lastName;
        public $birthday;
        public $country;
        public $dorsal;
        public $position;
        public $goals;
        public $matches;
        public $minutes;
        public $yellowCard;
        public $redCard;

        // Constructor
        public function __construct($name, $lastName, $birthday, $country, $dorsal, $position, $goals, $matches, $minutes, $yellowCard, $redCard) {
            $this->name = $name;
            $this->lastName = $lastName;
            $this->birthday = $birthday;
            $this->country = $country;
            $this->dorsal = $dorsal;
            $this->position = $position;
            $this->goals = $goals;
            $this->matches = $matches;
            $this->minutes = $minutes;
            $this->yellowCard = $yellowCard;
            $this->redCard = $redCard;
        }

        // Método Age
        public function Age() {
            $birthDate = DateTime::createFromFormat('d/m/Y', $this->birthday);
            $today = new DateTime();
            return $today->diff($birthDate)->y;  
        }

        // Método Score
        public function Score() {
            $this->goals++;
        }

        // Método AddCard
        public function AddCard(string $color) {
            if ($color === "yellow") {
                $this->yellowCard++;
            } elseif ($color === "red") {
                $this->redCard++;
            }
        }

        // Método PlayMinutes
        public function PlayMinutes(int $min) {
            $this->minutes += $min;
        }

        // Método Render (para mostrar la ficha del jugador)
        public function Render() {
            echo "<tr>";
            echo "<td>{$this->name} {$this->lastName}</td>";
            echo "<td>{$this->Age()}</td>";
            echo "<td>{$this->country}</td>";
            echo "<td>{$this->dorsal}</td>";
            echo "<td>{$this->position}</td>";
            echo "<td>{$this->goals}</td>";
            echo "<td>{$this->matches}</td>";
            echo "<td>{$this->minutes}</td>";
            echo "<td>{$this->yellowCard}</td>";
            echo "<td>{$this->redCard}</td>";
            echo "</tr>";
        }
    }

?>