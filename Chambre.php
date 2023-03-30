<?php
class Chambre
{
    private Hotel $hotel;
    private int $numChambre;
    private int $nbrLits;
    private float $prix;
    private bool $wifi;
    private bool $disponible;

    /*-------------- Méthode construct de la classe Chambre------------------- */
    public function __construct(Hotel $hotel, int $numChambre, int $nbrLits, int $prix, bool $wifi=false, bool $disponible=true)
    {
        $this->hotel = $hotel;
        $this->numChambre = $numChambre;
        $this->nbrLits = $nbrLits;
        $this->prix = $prix;
        $this->wifi = $wifi;
        $this->disponible = $disponible;
        $this->hotel->ajouterChambreHotel($this);
    }
      /*------------------- Getter et Setter l'hôtel--------- */
      public function getHotel(): Hotel
      {
          return $this->hotel;
      }
      public function setHotel(Hotel $hotel)
      {
          $this->hotel = $hotel;
      }
      /*------------------- Getter et Setter numero de la chambre--------- */
      public function getNumChambre(): int
      {
          return $this->numChambre;
      }
      public function setNumChambre(int $numChambre)
      {
          $this->numChambre = $numChambre;
      }
  
      /*------------------- Getter et Setter nombre de lits dans la chambre--------- */
      public function getnbrLits(): int
      {
          return $this->nbrLits;
      }
      public function setnbrLits(int $nbrLits)
      {
          $this->nbrLits = $nbrLits;
      }
      /*------------------- Getter et Setter prix de la chambre--------- */
      public function getPrix(): float
      {
          return $this->prix;
      }
      public function setprix(float $prix)
      {
          $this->prix = $prix;
      }
      /*------------------- Getter et Setter wifi dans la chambre--------- */
      public function getWifi(): bool
      {
          return $this->wifi;
      }
      public function setWifi(bool $wifi)
      {
          $this->wifi = $wifi;
      }
  
      /*------------------- Getter et Setter disponibilité de la chambre--------- */
      public function getDisponible(): bool
      {
          return $this->disponible;
      }
      public function setDisponible(bool $disponible)
      {
          $this->disponible = $disponible;
      }
      /*------------------------méthode tostring------------------------*/
      public function __toString()
      {
        return "La chambre numéro : $this->numChambre <bre> prix : $this->prix <br> Disponibilité : ".$this->disponible?"Disonible":"Reservee"; 
      }
  
}
