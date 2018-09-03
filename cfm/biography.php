<?php $lang = (isset($_GET['lang']))? $_GET['lang'] : ""; ?>

<?php if($lang == "fr" ){?>
<x><rs n="biography" c="title"><r><c n="title"><![CDATA[Biographie]]></c></r></rs></x>
<?php } elseif($lang == "es" ){?>
<x><rs n="biography" c="title"><r><c n="title"><![CDATA[Biografía]]></c></r></rs></x>
<?php } elseif($lang == "de" ){?>
<x><rs n="biography" c="title"><r><c n="title"><![CDATA[Biographie]]></c></r></rs></x>
<?php } elseif($lang == "it" ){?>
<x><rs n="biography" c="title"><r><c n="title"><![CDATA[Biografia]]></c></r></rs></x>
<?php } else {?>
<x><rs n="biography" c="title"><r><c n="title"><![CDATA[Biography]]></c></r></rs></x>
<?php } ?>
