<html>
	<head>
		<meta charset="UTF-8"> 
		<title>Kanały</title>
	<style>
		table, th, td {
   				border: 1px solid gray;
				color: white;
				text-shadow: 0 0 3px #000000;
						}
		</style>
	</head>
	<body style="background-color: black;">
<center>
	<table>
	<tr>
		<th>Nazwa Kanału</th>
		<th>Ostatnio odwiedzany</th>
	</tr>
        <?php 
            $myfile = fopen("listed.txt", "r") or die("Unable to open file!");

            while(!feof($myfile)) {
	            $splited = split("\t", fgets($myfile));
	            if($splited[1]<14){
		            echo "<tr style=\"background-color: #70db70\" ><td >".$splited[0]."</td><td><b>".$splited[1]."</b> dni temu</td></tr>";
	            } else if($splited[1]>13 && $splited[1]<30){
		            echo "<tr style=\"background-color: #ffff4d\" ><td >".$splited[0]."</td><td><b>".$splited[1]."</b> dni temu</td></tr>";	
	            } else {
		            echo "<tr style=\"background-color: #ff3333\" ><td >".$splited[0]."</td><td><b>".$splited[1]."</b> dni temu</td></tr>";
	            }
	            //echo $splited[1] . "<br>";
	            //echo fgets($myfile) . "<br>";
            }
		            fclose($myfile);
        ?>
	</table></center>
	</body>
</html>

