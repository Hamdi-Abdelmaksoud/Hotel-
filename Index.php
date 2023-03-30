<?php
 require_once 'Hotel.php';
 require_once 'Reservation.php';
 require_once 'Chambre.php';
 require_once 'Client.php';


 $h1=new hotel('Hilton',3,'rue rohone',5000,'Strasbourg');
 $h2=new hotel('IBIS',3,'rue rohone',7500,'Paris');
 $h3=new hotel('Hilton',5,'rue rohone',3000,'lyon');
 $ch1=new Chambre($h1,1,20,200,false,true);
 $ch2=new Chambre($h2,1,20,200,true,true);
 $ch3=new Chambre($h3,1,20,200,false,true);
 $ch5=new Chambre($h2,3,20,200,true,false);
 $ch6=new Chambre($h3,2,20,200,false,true);
 $ch7=new Chambre($h1,4,20,200,false,true);
 $ch8=new Chambre($h1,5,20,200,false,false);
 $ch9=new Chambre($h2,2,20,200,false,false);
 $ch10=new Chambre($h1,6,20,200,true,false);
 $ch11=new Chambre($h3,3,20,200,false,true);
 $client=new Client("Jean",'Marie');
 $client2=new Client("Marie",'ADi');
 $client3=new Client("yyyy",'xxx');
 $client4=new Client("Meee",' zi');
 $client5=new Client("eeee",'Ai');
 $client6=new Client("Me",'ADi');
 $res=new Reservation($client2,$ch1,"5-10-2023","7-10-2023");
 $res=new Reservation($client,$ch3,"8-12-2023","7-01-2024");
 $res=new Reservation($client,$ch8,"5-05-2023","5-06-2023");
 $res=new Reservation($client,$ch5,"5-01-2023","7-01-2023");
 $res=new Reservation($client,$ch2,"5-10-2023","7-10-2023");
echo $h1->informationsHotel();
echo $h1->reservations();
echo $h2->informationsHotel();
echo $h3->statusDesChambres();









?>