Hi beste lezer, omdat ik wat problemen tegen kawm in laravel heb tijdelijk deze opdracht in php-pdo en oop + css.
---------------------------------------------------------------------------------------------------------------------------

Er waren wat problemen bij eigenlijk bij database:
---------------------------------------------------------------------------------------------------------------------------
1- categorie.php -- voor catagorie was er gegeven zoek rokbier op alleen krijg ik geen resultaten als ik dat opzoek, dat komt door de structuur van database die zo was.
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------
2-merken-met-submerken.php --In mijn database de `valt_onder_id` van submerken is moet op hetzelfde ID als het hoofdmerk. Bijvoorbeeld, voor "Grolsch Radler" moet het `valt_onder_id` hetzelfde zijn als dat van "Grolsch". Maar dit was niet het geval bij de aangegeven database daarom krijg ik de uitslag zo:
-------------------------------------------------------
Bieren met een of meerdere submerken:
Heineken (3)
Grolsch (4)
Grolsch Radler (2)
Bavaria (1)
------------------------------------------------------
in plaats van:
Heineken (3)
Grolsch (6)
Bavaria (1)
