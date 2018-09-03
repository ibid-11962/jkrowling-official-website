<x><rs n="extrastuff" c="ID,t,sp,c">
<?php
$ref = (isset($_GET['ref']))? $_GET['ref'] : ""; 
$lang = (isset($_GET['lang']))? $_GET['lang'] : "";
$website_version = (file_exists("../config.ini"))?(parse_ini_file("../config.ini")["website_version"]):"4"; ?>

<?php if($lang == "fr" ){?>
	<?php if($ref == "characters" ){?>
	<r><c n="ID"><![CDATA[10]]></c><c n="t"><![CDATA[Pattenrond]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[9]]></c><c n="t"><![CDATA[Gilderoy Lockhart]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[26]]></c><c n="t"><![CDATA[Harry et Dudley : y a-t-il un espoir ?]]></c><c n="sp"><![CDATA[1]]></c></r><r><c n="ID"><![CDATA[8]]></c><c n="t"><![CDATA[Hermione Granger]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[11]]></c><c n="t"><![CDATA[Nick Quasi-Sans-Tête]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[7]]></c><c n="t"><![CDATA[Informations diverses sur la famille Weasley]]></c><c n="sp"><![CDATA[0]]></c></r>
	<?php } ?>
	<?php if($ref == "cutscenes" ){?>
	<r><c n="ID"><![CDATA[2]]></c><c n="t"><![CDATA[L'histoire de Dean Thomas (La chambre des secrets)]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[3]]></c><c n="t"><![CDATA[Mafalda (La coupe de feu)]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[5]]></c><c n="t"><![CDATA[Malfoy & Nott (Chamber of Secrets/Goblet of Fire)]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[4]]></c><c n="t"><![CDATA[Mopsy, l'amie des chiens (La coupe de feu)]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[1]]></c><c n="t"><![CDATA[Premiers chapitres de « L'école des sorciers »]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[6]]></c><c n="t"><![CDATA[Le premier chapitre du sixième roman]]></c><c n="sp"><![CDATA[0]]></c></r>
	<?php } ?>
	<?php if($ref == "miscellaneous" ){?>
	<r><c n="ID"><![CDATA[22]]></c><c n="t"><![CDATA[Cela n'intéressera probablement que les filles...]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[12]]></c><c n="t"><![CDATA[Les Harry Potter]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[21]]></c><c n="t"><![CDATA[Ma rencontre avec Melissa et Emerson]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[13]]></c><c n="t"><![CDATA[Démineur]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[17]]></c><c n="t"><![CDATA[Dernières nouvelles du Démineur]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[23]]></c><c n="t"><![CDATA[QJP]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[20]]></c><c n="t"><![CDATA[Hiboux et chouettes]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[14]]></c><c n="t"><![CDATA[Les endroits où écrire]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[24]]></c><c n="t"><![CDATA[Définitions de sorts]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[19]]></c><c n="t"><![CDATA[CRACMOLS]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[25]]></c><c n="t"><![CDATA[La Baguette de Sureau]]></c><c n="sp"><![CDATA[1]]></c></r><r><c n="ID"><![CDATA[15]]></c><c n="t"><![CDATA[L'équipe d'Irlande de Quidditch et le club de football de West Ham]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[18]]></c><c n="t"><![CDATA[BAGUETTES]]></c><c n="sp"><![CDATA[0]]></c></r>
	<?php } ?>

<?php } elseif($lang == "es" ){?>
	<?php if($ref == "characters" ){?>
	<r><c n="ID"><![CDATA[10]]></c><c n="t"><![CDATA[Crookshanks]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[9]]></c><c n="t"><![CDATA[Gilderoy Lockhart]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[26]]></c><c n="t"><![CDATA[Harry y Dudley: ¿hay esperanzas para el futuro?]]></c><c n="sp"><![CDATA[1]]></c></r><r><c n="ID"><![CDATA[8]]></c><c n="t"><![CDATA[Hermione Granger]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[11]]></c><c n="t"><![CDATA[Nick Casi Decapitado]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[7]]></c><c n="t"><![CDATA[Algunos datos sobre la familia Weasley]]></c><c n="sp"><![CDATA[0]]></c></r>
	<?php } ?>
	<?php if($ref == "cutscenes" ){?>
	<r><c n="ID"><![CDATA[2]]></c><c n="t"><![CDATA[El pasado de Dean Thomas ("La cámara secreta")]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[3]]></c><c n="t"><![CDATA[Mafalda ("El cáliz de fuego")]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[5]]></c><c n="t"><![CDATA[Malfoy y Nott ("La cámara secreta"/"El cáliz de fuego")]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[4]]></c><c n="t"><![CDATA[Mopsy, la amante de los perros ("El cáliz de fuego")]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[1]]></c><c n="t"><![CDATA[Los capítulos iniciales de "La piedra filosofal"]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[6]]></c><c n="t"><![CDATA[El capítulo inicial del sexto libro]]></c><c n="sp"><![CDATA[0]]></c></r>
	<?php } ?>
	<?php if($ref == "miscellaneous" ){?>
	<r><c n="ID"><![CDATA[22]]></c><c n="t"><![CDATA[Sólo para chicas, probablemente…]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[12]]></c><c n="t"><![CDATA[Otros Harry Potter]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[21]]></c><c n="t"><![CDATA[El encuentro con Melissa y Emerson]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[13]]></c><c n="t"><![CDATA[Buscaminas]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[17]]></c><c n="t"><![CDATA[Últimas noticias sobre Buscaminas]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[23]]></c><c n="t"><![CDATA[PNH]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[20]]></c><c n="t"><![CDATA[Lechuzas]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[14]]></c><c n="t"><![CDATA[Lugares para escribir]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[24]]></c><c n="t"><![CDATA[Definiciones de hechizos]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[19]]></c><c n="t"><![CDATA[SQUIBS]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[25]]></c><c n="t"><![CDATA[La varita Elder]]></c><c n="sp"><![CDATA[1]]></c></r><r><c n="ID"><![CDATA[15]]></c><c n="t"><![CDATA[El equipo irlandés de quidditch y el West Ham Fooball Club]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[18]]></c><c n="t"><![CDATA[VARITAS]]></c><c n="sp"><![CDATA[0]]></c></r>
	<?php } ?>

<?php } elseif($lang == "de" ){?>
	<?php if($ref == "characters" ){?>
	<r><c n="ID"><![CDATA[10]]></c><c n="t"><![CDATA[Krummbein]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[9]]></c><c n="t"><![CDATA[Gilderoy Lockhart]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[26]]></c><c n="t"><![CDATA[Harry und Dudley: Hoffnung für die Zukunft?]]></c><c n="sp"><![CDATA[1]]></c></r><r><c n="ID"><![CDATA[8]]></c><c n="t"><![CDATA[Hermine Granger]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[11]]></c><c n="t"><![CDATA[Der Fast Kopflose Nick]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[7]]></c><c n="t"><![CDATA[Allerlei Wissenswertes über die Familie Weasley]]></c><c n="sp"><![CDATA[0]]></c></r>
	<?php } ?>
	<?php if($ref == "cutscenes" ){?>
	<r><c n="ID"><![CDATA[2]]></c><c n="t"><![CDATA[Dean Thomas' Hintergrund (Kammer des Schreckens)]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[3]]></c><c n="t"><![CDATA[Mafalda (Feuerkelch)]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[5]]></c><c n="t"><![CDATA[Malfoy & Nott (Kammer des Schreckens/Feuerkelch)]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[4]]></c><c n="t"><![CDATA[Mopsy, die Hundeliebhaberin (Feuerkelch)]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[1]]></c><c n="t"><![CDATA[Anfangskapitel des Steins der Weisen]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[6]]></c><c n="t"><![CDATA[Das erste Kapitel von Buch sechs]]></c><c n="sp"><![CDATA[0]]></c></r>
	<?php } ?>
	<?php if($ref == "miscellaneous" ){?>
	<r><c n="ID"><![CDATA[22]]></c><c n="t"><![CDATA[Vermutlich nur für Mädchen…]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[12]]></c><c n="t"><![CDATA[Harry Potters]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[21]]></c><c n="t"><![CDATA[Das Treffen mit Melissa und Emerson]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[13]]></c><c n="t"><![CDATA[Minesweeper]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[17]]></c><c n="t"><![CDATA[Minesweeper: Neuester Stand]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[23]]></c><c n="t"><![CDATA[NAQ]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[20]]></c><c n="t"><![CDATA[Eulen]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[14]]></c><c n="t"><![CDATA[Orte zum Schreiben]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[24]]></c><c n="t"><![CDATA[Zauberdefinitionen]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[19]]></c><c n="t"><![CDATA[SQUIBS]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[25]]></c><c n="t"><![CDATA[Der Elderstab]]></c><c n="sp"><![CDATA[1]]></c></r><r><c n="ID"><![CDATA[15]]></c><c n="t"><![CDATA[Die irische Quidditch-Nationalmannschaft und der FC West Ham United]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[18]]></c><c n="t"><![CDATA[ZAUBERSTÄBE]]></c><c n="sp"><![CDATA[0]]></c></r>
	<?php } ?>

<?php } elseif($lang == "it" ){?>
	<?php if($ref == "characters" ){?>
	<r><c n="ID"><![CDATA[10]]></c><c n="t"><![CDATA[Grattastinchi]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[9]]></c><c n="t"><![CDATA[Gilderoy Allock]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[26]]></c><c n="t"><![CDATA[Harry e Dudley: speranza per il futuro?]]></c><c n="sp"><![CDATA[1]]></c></r><r><c n="ID"><![CDATA[8]]></c><c n="t"><![CDATA[Hermione Granger]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[11]]></c><c n="t"><![CDATA[Nick-Quasi-Senza-Testa]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[7]]></c><c n="t"><![CDATA[Notizie e curiosità sulla famiglia Weasley]]></c><c n="sp"><![CDATA[0]]></c></r>
	<?php } ?>
	<?php if($ref == "cutscenes" ){?>
	<r><c n="ID"><![CDATA[2]]></c><c n="t"><![CDATA[Le origini di Dean Thomas (La camera dei segreti)]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[3]]></c><c n="t"><![CDATA[Mafalda (Il calice di fuoco)]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[5]]></c><c n="t"><![CDATA[Malfoy e Nott (La camera dei segreti/Il calice di fuoco)]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[4]]></c><c n="t"><![CDATA[Mopsy, l'amante dei cani (Il calice di fuoco)]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[1]]></c><c n="t"><![CDATA[I numerosi capitoli iniziali della "Pietra filosofale"]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[6]]></c><c n="t"><![CDATA[Il capitolo iniziale del sesto libro]]></c><c n="sp"><![CDATA[0]]></c></r>
	<?php } ?>
	<?php if($ref == "miscellaneous" ){?>
	<r><c n="ID"><![CDATA[22]]></c><c n="t"><![CDATA[Solo per ragazze, probabilmente…]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[12]]></c><c n="t"><![CDATA[Gli Harry Potter]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[21]]></c><c n="t"><![CDATA[L’incontro con Melissa ed Emerson]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[13]]></c><c n="t"><![CDATA[Prato fiorito]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[17]]></c><c n="t"><![CDATA[Aggiornamento su Prato fiorito]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[23]]></c><c n="t"><![CDATA[NAQ]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[20]]></c><c n="t"><![CDATA[Gufi]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[14]]></c><c n="t"><![CDATA[Lo spazio della creazione]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[24]]></c><c n="t"><![CDATA[Definizioni delle magie]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[19]]></c><c n="t"><![CDATA[I MAGHINÒ]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[25]]></c><c n="t"><![CDATA[La bacchetta di sambuco]]></c><c n="sp"><![CDATA[1]]></c></r><r><c n="ID"><![CDATA[15]]></c><c n="t"><![CDATA[La squadra irlandese di Quidditch e il West Ham Football Club]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[18]]></c><c n="t"><![CDATA[BACCHETTE]]></c><c n="sp"><![CDATA[0]]></c></r>
	<?php } ?>

<?php } else {?>
	<?php if($ref == "characters" ){?>
	<r><c n="ID"><![CDATA[10]]></c><c n="t"><![CDATA[Crookshanks]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[9]]></c><c n="t"><![CDATA[Gilderoy Lockhart]]></c><c n="sp"><![CDATA[0]]></c></r>
		<?php if($website_version > 3 ){?>
	<r><c n="ID"><![CDATA[26]]></c><c n="t"><![CDATA[Harry and Dudley: Future Hope?]]></c><c n="sp"><![CDATA[1]]></c></r>
		<?php }?>
	<r><c n="ID"><![CDATA[8]]></c><c n="t"><![CDATA[Hermione Granger]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[11]]></c><c n="t"><![CDATA[Nearly Headless Nick]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[7]]></c><c n="t"><![CDATA[Some Random Facts About The Weasley Family]]></c><c n="sp"><![CDATA[0]]></c></r>
	<?php } ?>
	<?php if($ref == "cutscenes" ){?>
	<r><c n="ID"><![CDATA[2]]></c><c n="t"><![CDATA[Dean Thomas's background (Chamber of Secrets)]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[3]]></c><c n="t"><![CDATA[Mafalda (Goblet of Fire)]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[5]]></c><c n="t"><![CDATA[Malfoy & Nott (Chamber of Secrets/Goblet of Fire)]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[4]]></c><c n="t"><![CDATA[Mopsy the dog-lover (Goblet of Fire)]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[1]]></c><c n="t"><![CDATA[Opening Chapters of Philosopher's Stone]]></c><c n="sp"><![CDATA[0]]></c></r><r><c n="ID"><![CDATA[6]]></c><c n="t"><![CDATA[The Opening Chapter of Book Six]]></c><c n="sp"><![CDATA[0]]></c></r>
	<?php } ?>
	<?php if($ref == "miscellaneous" ){?>
		<?php if($website_version > 2 ){?>
	<r><c n="ID"><![CDATA[22]]></c><c n="t"><![CDATA[For Girls Only, Probably...]]></c><c n="sp"><![CDATA[0]]></c></r>
		<?php }?>
	<r><c n="ID"><![CDATA[12]]></c><c n="t"><![CDATA[Harry Potters]]></c><c n="sp"><![CDATA[0]]></c></r>
		<?php if($website_version > 1 ){?>
	<r><c n="ID"><![CDATA[21]]></c><c n="t"><![CDATA[Meeting Melissa and Emerson]]></c><c n="sp"><![CDATA[0]]></c></r>
		<?php }?>
	<r><c n="ID"><![CDATA[13]]></c><c n="t"><![CDATA[Minesweeper]]></c><c n="sp"><![CDATA[0]]></c></r>
		<?php if($website_version > 0 ){?>
	<r><c n="ID"><![CDATA[17]]></c><c n="t"><![CDATA[Minesweeper Update]]></c><c n="sp"><![CDATA[0]]></c></r>
		<?php } if($website_version > 2 ){?>
	<r><c n="ID"><![CDATA[23]]></c><c n="t"><![CDATA[NAQ]]></c><c n="sp"><![CDATA[0]]></c></r>
		<?php } if($website_version > 1 ){?>
	<r><c n="ID"><![CDATA[20]]></c><c n="t"><![CDATA[Owls]]></c><c n="sp"><![CDATA[0]]></c></r>
		<?php }?>
	<r><c n="ID"><![CDATA[14]]></c><c n="t"><![CDATA[Places to Write]]></c><c n="sp"><![CDATA[0]]></c></r>
		<?php if($website_version > 2 ){?>
	<r><c n="ID"><![CDATA[24]]></c><c n="t"><![CDATA[Spell Definitions]]></c><c n="sp"><![CDATA[0]]></c></r>
		<?php } if($website_version > 0 ){?>
	<r><c n="ID"><![CDATA[19]]></c><c n="t"><![CDATA[SQUIBS]]></c><c n="sp"><![CDATA[0]]></c></r>
		<?php } if($website_version > 3 ){?>
	<r><c n="ID"><![CDATA[25]]></c><c n="t"><![CDATA[The Elder Wand]]></c><c n="sp"><![CDATA[1]]></c></r>
		<?php }?>
	<r><c n="ID"><![CDATA[15]]></c><c n="t"><![CDATA[The Irish Quidditch team and West Ham Football Club]]></c><c n="sp"><![CDATA[0]]></c></r>
		<?php if($website_version > 0 ){?>
	<r><c n="ID"><![CDATA[18]]></c><c n="t"><![CDATA[WANDS]]></c><c n="sp"><![CDATA[0]]></c></r>
		<?php }?>
	<?php } ?>

<?php } ?>
</rs></x>