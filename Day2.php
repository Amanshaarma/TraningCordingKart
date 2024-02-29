<?php include 'Day1.php';
    $str = "Aman";
    $str1 = 'Sharma';

    echo $str." ". $str1."\n";
    $length = strlen($str1);
    for($i = 0; $i < $length; $i++)
    {
        if($str1[$i] == 'a')
        {
            $str1[$i]='A';
        }
    }
    echo $str1;
    // Heredoc
$heredocString = <<<EOD
This is a heredoc $str.
It can span multiple lines.
EOD;
 echo $heredocString;
// Nowdoc
$nowdocString = <<<'EOD'
This is a nowdoc $str.
It behaves like single quotes.
EOD;
echo $nowdocString;
$originalString = "Hello, World!";
$replacement = "PHP";
$index = 7; // Index where replacement should start

$newString = substr_replace($originalString, $replacement, $index, strlen($replacement));

echo $newString."\n";
$count =readfile("C:\aman\NoMain.java");
echo "\n".$count; 
$arr = array("Volvo", "BMW", "Toyota");
$arr += ["Aman"];
array_push($arr,2);
print_r($arr);
echo $arr[1];
$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;
print_r($myCar);
echo $myCar["brand"];
$hashmap=array("name"=>"aman","age"=>"25");
$hashmap+=["color" => "brown", "year" => 1964];
print_r($hashmap);
$date = date("d-m-y  ");
echo $date;


?>