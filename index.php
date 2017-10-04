<?php

  $obj = new main();
  class main

{
  public function __construct()
{

  echo '<h1>Week4 Assignment by Sanchit Gupta</h1>'.'<br>'.'<hr>';
  echo '<h1>Initially Provided Code</h1>'.'<br>';
  
  $date = date('Y-m-d', time());
  echo "The value of \$date: ".$date."<br>";

  $tar = "2017/05/24";
  echo "The value of \$tar: ".$tar."<br>";

  $year = array("2012", "396", "300","2000", "1100", "1089");
  echo "The value of \$year: ";
  print_r($year);								
  echo'<hr>'.'<br>';


  obj::replacing_char($date);
  obj::comparing_string($date,$tar);
  obj::fin_position(str_replace("-","/",$date));
  obj::count_number($date);
  obj::length_string($date);
  obj::ascii_sum($date);
  obj::return_last($date);
  obj::sep_array(str_replace("-","/",$date));
  obj::leap($year);
}

}

  class obj
{

  /* changing the '-' to '/' */
  public function replacing_char($date)
  {
    echo '<h1>Changing of the date symbols</h1>';
    echo str_replace("-","/",$date);
    echo '<hr>'.'<br>';
   }


  /* comparing two strings */
  public function comparing_string($date,$tar)
  {
   echo '<h1>Comparing two strings</h1>';
   $output=strcmp($date,$tar);

    if($output<0){
      echo "The Past ";
      }
    else if($output==0){
      echo "Oops";
      }
    else{
      echo "The Future";
      }
    echo'<hr>'.'<br>';
  }
    
   
  /*finding '/' Position */
  public function fin_position($date)
  {
   echo '<h1>Finding the "/" Position</h1>';
   for ($i=0;$i<substr_count($date,"/");$i++)
   {
   $a=$a+1;
   $a=stripos ($date,"/",$a);
   echo ' The Position is: '. $a.'';
   }
   echo'<hr>'.'<br>';
  }

  
  /*counting the number of words*/
  public function count_number($date)
  {
  echo '<h1>Counting the Number of Word </h1>';
  $strc=str_word_count($date);
  echo 'The total number of words are:' .$strc;
  echo'<hr>'.'<br>';
  }
  

  /*finding the length of the strings*/
  public function length_string($date)
  {
  echo '<h1>Finding the length of the string</h1>';
  $b1=strlen($date);
  echo'length is: ' .$b1;
  echo'<hr>'.'<br>';
  }


  /*returning the ascii value of the first character of a string*/
  public function ascii_sum($date)
  {
  echo'<h1>The ASCII value of the first character</h1>';
  echo'It is: ' . ord($date);
  echo'<hr>'.'<br>';
  }


  /*returning last 2 characters of the date*/
  public function return_last($date)
  {
  echo'<h1>Returning last two characters</h1>';
  $lst=str_split($date);
  $ast=count($lst);
  for($i=0;$i<2;$i++)
    {
    $ast=$ast-1;
    echo $lst[$ast];
    echo' ';
    }
  echo'<hr>'.'<br>';
  }


  /*breaking the date into an array*/
  public function sep_array($date)
  {
  echo'<h1>Breaking into array</h1>';
  echo'After seperating the date: ';
  $c1=(explode("/",($date)));
  $d1=count($c1);
  for ($i=0;$i<$d1;$i++)
     {
      echo $c1[$i].' ';
     }
  echo'<hr>'.'<br>';
  }


  /*Finding the whether it is a leap year or not*/
  public function leap($year)
  {
  echo'<h1>Finding whether it is a leapyear</h1>';
  foreach($year as $output)
    {
     for($i=0;$i<1;$i++)
      {
       switch(output)
        {
	 case(($output%4)==0 and ($output%100)!=0 or ($output%400)==0);
	 echo $output . ' ' . 'True'.'<br>';
	 break;

	 default:
	 echo $output . ' ' . 'False'.'<br>';
	 }
       }
     } 
   }
}
?>
