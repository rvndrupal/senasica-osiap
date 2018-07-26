<?php
$divshtml         = "";
$classactivoprev  = "";
$classactivonow   = "";
$classactivonext  = "";
$classactivoafter = "";
$url              = strtoupper(arg(1));

if ($url == $prevmonth) {
	$classactivoprev = "activo";
}
if ($url == $nowmonth) {
	$classactivonow = "activo";
}
if ($url == $nextmonth) {
	$classactivonext = "activo";
}
if ($url == $afternextmonth) {
	$classactivoafter = "activo";
}

echo '
	<div class="calendarioWrapper">
		<div class="calendarioMain">
			<div class="calendarioPrevMonth '.$classactivoprev.'">
				<a href="'.ucfirst(strtolower($prevmonth)).'">
					<p>'.$prevmonth.'</p>
				</a>
			</div>
			<div class="calendarioNowMonth '.$classactivonow.'">
				<a href="'.ucfirst(strtolower($nowmonth)).'">
					<p>'.$nowmonth.'</p>
				</a>
			</div>
			<div class="calendarNextMonth '.$classactivonext.'">
				<a href="'.ucfirst(strtolower($nextmonth)).'">
					<p>'.$nextmonth.'</p>
				</a>
			</div>
			<div class="calendarAfterNextMonth '.$classactivoafter.'">
				<a href="'.ucfirst(strtolower($afternextmonth)).'">
					<p>'.$afternextmonth.'</p>
				</a>
			</div>
		</div>
	</div>';

?>
