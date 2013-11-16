<?php 
$frases = array(
1 => "<p ALIGN=center><font size=3 color=#660000><em>Ríe, y el mundo reirá contigo. Llora, y llorarás solo.</em> </font></p> <br>
<p align=right> <font size=2 color=#660000><em>OldBoy</em> </font></p>",

 2 => "<p ALIGN=center><font size=3 color=#663300><em>El futuro tiene muchos nombres. Para los débiles es lo inalcanzable. Para los temerosos, lo desconocido. Para los valientes es la oportunidad.</em> </font></p> <br>
 
<p align=right> <font size=2 color=#663300><em>Victor Hugo</em> </font></p>
<p align=right> <font size=2 color=#663300><em>Novelista Francés.</em> </font></p>",
 
 3 => "<p ALIGN=center><font size=3 color=#cc6666><em>Donde hay educación no hay distinción de clases.</em> </font></p> <br>
 
<p align=right> <font size=2 color=#cc6666><em>Confucio</em> </font></p>
<p align=right> <font size=2 color=#cc6666><em>Filósofo chino.</em> </font></p>");
$numero = rand(1,3);
echo "$frases[$numero]";

?>

