<?php
class Client{
private string $nom;
private string $prenom;
private array $reservations=[];
public function __construct(string $nom,string $prenom)
{
    $this->nom=$nom;
$this->prenom=$prenom;
}
/*------------------------------Get&Set nom---------------------------------- */
public function getNom():string{
    return $this->nom;
}
public function setNom(string $nom)

{
    $this->nom=$nom;
}
/*------------------------------Get&Set prenom---------------------------------- */
public function getPrenom():string{
    return $this->prenom;
}
public function setPrenom(string $prenom)

{
    $this->prenom=$prenom;
}
/*------------------------------Get&Set reservation---------------------------------- */
public function getReservations():array{
    return $this->reservations;
}
public function ajouterReservationClient(Reservation $reservation)
{
    $this->reservations[]=$reservation;
}
/*-------------------tostring----------------------*/
public function __toString()
{
    return "$this->nom   $this->prenom ";
}

}
?>