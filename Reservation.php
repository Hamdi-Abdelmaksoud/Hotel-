<?php
class Reservation{
private Client $client;
private Chambre $chambre;
private DateTime $dateEntree;
private DateTime $dateSortie;


/*----------------------------Méthode construct de la classe Reservation------------------------------------------ */
public function __construct(Client $client, Chambre $chambre, string $dateEntree, string $dateSortie){
    $this->client = $client;
    $this->chambre = $chambre;
    $this->dateEntree = new DateTime($dateEntree);
    $this->dateSortie = new DateTime($dateSortie);
    $this->client->ajouterReservationClient($this);
    $this->chambre->getHotel()->ajouterReservationsHotel($this);
    $this->chambre->setDisponible(False);

}
/**---------------------------------GET&SET client---------------------------------------------------- */
public function getClient(): Client
    {
        return $this->client;
    }
    public function setClient(Client $client)
    {
        $this->client = $client;
    }
    /**---------------------------------GET&SET chambre---------------------------------------------------- */
    public function getChambre(): Chambre
        {
            return $this->chambre;
        }
        public function setChambre(Chambre $chambre)
        {
            $this->chambre = $chambre;
        }
        /**---------------------------------GET&SET date d'entree---------------------------------------------------- */
        public function getDateEntree(): DateTime
            {
                return $this->dateEntree;
            }
            public function setDateEntree(DateTime $dateEntree)
            {
                $this->dateEntree = $dateEntree;
            }
            /**---------------------------------GET&SET date de sortie---------------------------------------------------- */
            public function getDateSortie(): DateTime
                {
                    return $this->dateSortie;
                }
            public function setDateSortie(DateTime $dateSortie)
            {
                $this->dateSortie = $dateSortie;
            }

        //*******************Methode tostirng ---------------------- ----------*/
        public function __toString()
        {
            return $this->client." ".$this->chambre." ".$this->dateEntree." ".$this->dateSortie;
        }


}
?>