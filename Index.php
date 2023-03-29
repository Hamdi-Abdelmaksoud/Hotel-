<?php
 require_once 'Hotel.php';
 require_once 'Rservation.php';
 require_once 'Chambre.php';
 require_once 'Client.php';


 $h1=new hotel('Hilton',3,'rue rohone',5000,'Strasbourg');
 $h2=new hotel('IBIs',31,'rue rohone',7500,'Paris');
 $h3=new hotel('Hilton',8,'rue rohone',3000,'lyon');
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
 $res=new Reservation($client,$ch1,"5-10-2023","7-10-2023");









?>