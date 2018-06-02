<head>
<title>Mohammad khaled Abou El Sherbini</title>
</head>
<body>
	<h1>Mohammad khaled hr</h1>
	<pre>
     *   *
    *  *  *
   *        *
</pre>
	<p>
<?php
// echo hash('sha256', 'Mohammad Khaled');echo "<p></p>\n";
// $bla=array();
// $bla["ali"]=1;
// $bla[]=0;
// asort($bla);
// $bla[]=array("b1","b2");
// var_dump($_GET);
// echo "\n",$bla[11]==1??" ";
// var_dump( isset($bla[11]));
$guess = isset($_GET["guess"]) ? $_GET["guess"] : "wtf?";

if ($guess == "wtf?")
    echo "Missing guess parameter";
elseif ($guess == NULL)
    echo "Your guess is too short";
elseif (! is_numeric($guess))
    echo "Your guess is not a number";
elseif ($guess < 64)
    echo "Your guess is too low";
elseif ($guess > 64)
    echo "Your guess is too high";
elseif ($guess == 64)
    echo "Congratulations - You are right";

?>

		</p>
	<p>
	
	
	<form>
		<label for="bla">Enter Guess</label> <input type="text" name="guess"
			id="bla"><br /> <input type="submit" value="submit" />
	</form>
	</p>
</body>






