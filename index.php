<!DOCTYPE html>
<html>
	<body>
	<script>
			let url = window.location.href;
			if (!url.includes("?")) {
				let text = prompt("Wie viele Spielschein möchten Sie ausgeben?", "1");
				if (text == null || text == "") {
					window.location = "?1";
				}
				else {
					window.location = "?"+text;
				}
			}
			else {
				splittet_url = url.split("/");
				splittet_url = splittet_url[splittet_url.length-1].split("?");
				
			}
	</script>
	<?php
	$splittet_url = basename($_SERVER['REQUEST_URI']);
	$splittet_url = explode('?', $splittet_url);
	$splittet_url = $splittet_url[1];
	include_once("./number.php");
	include_once("./printer.php");
	include_once("./ProbabilityCalculator.php");
	include_once("./PCVar.php");
	$print = new Printer();
	$numbers = Array();
	echo("<center>");
	echo("<h1>EuroJackpot Zahlen Generator</h1>");
	for ($run = 0; $run != $splittet_url; $run++) {
		echo("<h2>Spielschein: " . $run+1 . "</h2>");
		$pc = new ProbabilityCalculator();
        $variables = new PCVar();
		for ($i = 0; $i != 10000; $i++) {
			$numbers[$i] = new Number();
			$numbers[$i]->numberMain();
			$pc->probabilityCalculator_init($numbers[$i]->getLottoNumbers(), $variables);
			$pc->probabilityCalculator_init($numbers[$i]->getLottoSpecial(), $variables);
		}
		$variables->sortProbabilitys();
		$print->print($variables);
	}
	echo("</center>")
	?>
	</body>
</html>