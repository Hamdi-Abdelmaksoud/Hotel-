<?php
class hotel
{
    private string $nom;
    private int $nbrEtoiles;
    private string $adresse;
    private int $codePostal;
    private string $ville;
    private array $chambres = [];
    private array $reservations = [];



    /*------------- Méthode construct de la classe Chambre------------- */
    public function __construct(string $nom, int $nbrEtoiles, string $adresse, int $codePostal, string $ville)
    {
        $this->nom = $nom;
        $this->nbrEtoiles = $nbrEtoiles;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
    }
    /*------------------ Getter et Setter pour le nom de l'hôtel ------------------------*/
    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }
    /*---------------- Getter et Setter pour le nombre d'étoiles de l'hôtel--------------------- */
    public function getNombreEtoiles(): int
    {
        return $this->nbrEtoiles;
    }
    public function setNombreEtoiles(int $nbrEtoiles)
    {
        $this->nbrEtoiles = $nbrEtoiles;
    }
    /*------------------ Getter et Setter pour l'adresse de l'hôtel------------ */
    public function getAdresse(): string
    {
        return $this->adresse;
    }
    public function setAdresse(string $adresse)
    {
        $this->adresse = $adresse;
    }
    /*------------------- Getter et Setter code postal de l'adresse de l'hôtel--------- */
    public function getcodePostal(): int
    {
        return $this->codePostal;
    }
    public function setcodePostal(int $codePostal)
    {
        $this->codePostal = $codePostal;
    }

    /*-------------- Getter et Setter  la ville de l'hôtel -------------*/
    public function getVille(): string
    {
        return $this->ville;
    }
    public function setVille(string $ville)
    {
        $this->ville = $ville;
    }
    /*-------------------Ajouter une chambre à l'hotel---------------------  */
    public function ajouterChambreHotel(Chambre $chambre)
    {
        $this->chambres[] = $chambre;
    }
    public function getchambres(): array
    {
        return $this->chambres;
    }
    /*-----------------------Ajouter les reservations ----------------------------------*/
    public function ajouterReservationsHotel(Reservation $reservation)
    {
        $this->reservations[] = $reservation;
    }
    public function getReservation(): array
    {
        return $this->reservations;
    }
    /*-------------------afficher les informations d'un hotel---------------------------------------------------------- */
    public function informationsHotel()
    {
        $resultat = "<h1>" . $this->getNom() . " " . str_repeat("*", $this->getNombreEtoiles()) . " " . $this->getVille() . "</h1>";
        $resultat .= "<br>" . $this->getAdresse() . " " . $this->getcodePostal() . " " . $this->getVille() . ">br>";
        $resultat .= "Nombre de chambres : " . count($this->chambres) . "<br>";
        $resultat .= "Nombre de chambres reservées : " . count($this->reservations) . "<br>";
        $resultat .= "Nombre de chambre disponibles : " . count($this->chambres) - count($this->reservations);
        return $resultat;
    }
    //----------------------------afficher les reservations d'un hotel-----------
    public function reservations()
    {
        $resultat = "<h1>" . $this->getNom() . " " . str_repeat("*", $this->getNombreEtoiles()) . " " . $this->getVille() . "</h1> <br>";
        $a = count($this->reservations);
        if ($a = 0) {
            $resultat .= "Acune réservaton !";
        } else {
            $resultat .= "<div style='color:white; background-color=green;'>$a Réservations </div>";
            foreach ($this->reservations as $reservation) {
                $resultat .= $reservation->getClient() . "- Chambre" . $reservation->getChambre() . "+ du" . $reservation->getDateEntree() . " -" . $reservation->getDateSortie()."<br> Total : ".$reservation->getPrix();
            }
        }
    }
    //-----------------------------------------------afficher status des chambres-------------------------------
    public function statusDesChambres()
    {
        $resultat = "Status des chambre de <b>" ."<h1>" . $this->getNom() . " " . str_repeat("*", $this->getNombreEtoiles()) . " " . $this->getVille() . "</h1>". " :</b><br>";
           echo "<style>th:nth-child(off){background-color=#ffff;}
           th:nth-child(even){background-color=#eee;}</style>";
        
                $resultat .= "<table border=1>
                            <thead>
                                <tr>
                                    <td><b>CHAMBRE</b></td>
                                    <td><b>PRIX</b></td>
                                    <td><b>WIFI</b></td>
                                    <td><b>ETAT</b></td>
                                </tr>
                            </thead>
                            <tbody>";
                           
        foreach($this->chambres as $chambre)
        {
            $resultat.="<tr ><td> Chambre ".$chambre->getNumChambre()."</td><td>".$chambre->getPrix().'£ </td>';
            if($chambre->getWifi)
            {
                $resultat.="<td>oui</td>";
            }
            else
            {
                $resultat.="<td>non</td>";
            }
            if($chambre->getDisponible)
            {
                $resultat.="<td><div style='color:white; background-color=green;'>Disponible </div></td></tr>";
            }
            else
             {
                 $resultat.="<td><div style='color:white;background-color=red;'>Disponible </div></td></tr>";
            }
        }
    }
    //--------------------------------------------------------Methode tostring---------------------------
     public function __toString()
     {
         return $this->nom." ".$this->nbrEtoiles.' '.$this->ville." ".$this->adresse; 
     }

}
?>