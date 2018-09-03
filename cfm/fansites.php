<?php $lang = (isset($_GET['lang']))? $_GET['lang'] : ""; 
$website_version = (file_exists("../config.ini"))?(parse_ini_file("../config.ini")["website_version"]):"4"; ?>

<?php if($lang == "fr" ){?>
<x><rs n="fansites" c="winner,archive,abouttitle,aboutcontent"><r><c n="winner"><![CDATA[Vainqueur le plus récent]]></c><c n="archive"><![CDATA[Archives]]></c><c n="abouttitle"><![CDATA[À propos de...]]></c><c n="aboutcontent"><![CDATA[Je me suis sentie toute petite devant le temps et les efforts consacrés par tant de fans pour créer des sites dédiés à Harry Potter. C'est la raison pour laquelle j'ai décidé de créer un prix des sites de fans, c'est-à-dire un trophée qui sera remis au titre de l'intérêt porté à Harry Potter et de l'étendue des connaissances sur son univers, mais aussi de l'ingéniosité et de la créativité qui sont la marque des meilleurs sites.]]></c></r></rs><rs n="winner" c="ID,m,t,c,i,url,sp"><r><c n="ID"><![CDATA[3]]></c><c n="m"><![CDATA[12]]></c><c n="t"><![CDATA[Leaky Cauldron]]></c></r></rs></x>
<?php } elseif($lang == "es" ){?>
<x><rs n="fansites" c="winner,archive,abouttitle,aboutcontent"><r><c n="winner"><![CDATA[Último ganador]]></c><c n="archive"><![CDATA[Archivo]]></c><c n="abouttitle"><![CDATA[Acerca de]]></c><c n="aboutcontent"><![CDATA[Es verdaderamente conmovedor ver cuantos fanáticos se han tomado el tiempo y la preocupación de crear sitios fan dedicados a Harry Potter. Esta es la razón por la cual he creado el Premio a Sitios de los Fans, un trofeo dado por tener una devoción y conocimiento sobresaliente relacionado con Harry Potter, por no mencionar la imaginación y creatividad que hacen que un sitio sea realmente memorable.]]></c></r></rs><rs n="winner" c="ID,m,t,c,i,url,sp"><r><c n="ID"><![CDATA[3]]></c><c n="m"><![CDATA[12]]></c><c n="t"><![CDATA[El Caldero Chorreante]]></c></r></rs></x>
<?php } elseif($lang == "de" ){?>
<x><rs n="fansites" c="winner,archive,abouttitle,aboutcontent"><r><c n="winner"><![CDATA[Der aktuelle Gewinner]]></c><c n="archive"><![CDATA[Archiv]]></c><c n="abouttitle"><![CDATA[Info]]></c><c n="aboutcontent"><![CDATA[It is truly humbling to see how many fans have taken the time and trouble to create fan sites dedicated to Harry Potter.  This is why I have created the Fan Site Award, a trophy given for outstanding devotion to, and knowledge about, Harry Potter, not to mention the ingenuity and creativity that make a really memorable site.]]></c></r></rs><rs n="winner" c="ID,m,t,c,i,url,sp"><r><c n="ID"><![CDATA[3]]></c><c n="m"><![CDATA[12]]></c><c n="t"><![CDATA[The Leaky Cauldron]]></c></r></rs></x>
<?php } elseif($lang == "it" ){?>
<x><rs n="fansites" c="winner,archive,abouttitle,aboutcontent"><r><c n="winner"><![CDATA[Ultimo vincitore]]></c><c n="archive"><![CDATA[Archivio]]></c><c n="abouttitle"><![CDATA[Info]]></c><c n="aboutcontent"><![CDATA[It is truly humbling to see how many fans have taken the time and trouble to create fan sites dedicated to Harry Potter.  This is why I have created the Fan Site Award, a trophy given for outstanding devotion to, and knowledge about, Harry Potter, not to mention the ingenuity and creativity that make a really memorable site.]]></c></r></rs><rs n="winner" c="ID,m,t,c,i,url,sp"><r><c n="ID"><![CDATA[3]]></c><c n="m"><![CDATA[12]]></c><c n="t"><![CDATA[Leaky Cauldron]]></c></r></rs></x>
<?php } else {?>
<x><rs n="fansites" c="winner,archive,abouttitle,aboutcontent"><r><c n="winner"><![CDATA[Latest Winner]]></c><c n="archive"><![CDATA[Archive]]></c><c n="abouttitle"><![CDATA[About]]></c><c n="aboutcontent"><![CDATA[It is truly humbling to see how many fans have taken the time and trouble to create fan sites dedicated to Harry Potter.  This is why I have created the Fan Site Award, a trophy given for outstanding devotion to, and knowledge about, Harry Potter, not to mention the ingenuity and creativity that make a really memorable site.]]></c></r></rs>
	<?php if($website_version == 0 ){?>
<rs n="winner" c="ID,m,t,c,i,url,sp"><r><c n="ID"><![CDATA[3]]></c><c n="m"><![CDATA[12]]></c><c n="t"><![CDATA[The Leaky Cauldron]]></c></r></rs>
	<?php } elseif($website_version == 1 ){?>
<rs n="winner" c="ID,m,t,c,i,url,sp"><r><c n="ID"><![CDATA[14]]></c><c n="m"><![CDATA[6]]></c><c n="t"><![CDATA[The Harry Potter Lexicon]]></c></r></rs>
	<?php } elseif($website_version == 2 ){?>
<rs n="winner" c="ID,m,t,c,i,url,sp"><r><c n="ID"><![CDATA[17]]></c><c n="m"><![CDATA[5]]></c><c n="t"><![CDATA[The Leaky Cauldron]]></c></r></rs>
	<?php } elseif($website_version == 3 ){?>
<rs n="winner" c="ID,m,t,c,i,url,sp"><r><c n="ID"><![CDATA[18]]></c><c n="m"><![CDATA[9]]></c><c n="t"><![CDATA[Potterish.com]]></c></r></rs>
	<?php } else{?>
<rs n="winner" c="ID,m,t,c,i,url,sp"><r><c n="ID"><![CDATA[3]]></c><c n="m"><![CDATA[12]]></c><c n="t"><![CDATA[The Leaky Cauldron]]></c></r></rs>
</x>
	<?php }?>
<?php } ?>