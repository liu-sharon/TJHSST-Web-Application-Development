<?php
$db = new SQLite3('candidates.db');

/*
echo 'RepPresident' . $_POST["RepPresident"] . '!'; echo ('<br>');
echo 'DemPresident' . $_POST["DemPresident"] . '!'; echo ('<br>');
echo 'drop' . $_POST["drop"] . '!'; echo ('<br>');
echo 'winner' . $_POST["winner"] . '!'; echo ('<br>');
echo 'yourname' . $_POST["yourname"] . '!'; echo ('<br>');
echo 'yourcity' . $_POST["yourcity"] . '!'; echo ('<br>');
echo 'yourstate' . $_POST["yourstate"] . '!'; echo ('<br>');
echo 'yourzipcode' . $_POST["yourzipcode"] . '!'; echo ('<br>');
echo 'youremail' . $_POST["youremail"] . '!'; echo ('<br>');
echo 'yourdate' . $_POST["yourdate"] . '!'; echo ('<br>');
echo 'yourvotepri' . $_POST["yourvotepri"] . '!'; echo ('<br>');
echo 'yourvotegen' . $_POST["yourvotegen"] . '!'; echo ('<br>');
echo 'afraidyes' . $_POST["afraidyes"] . '!'; echo ('<br>');
echo 'afraidno' . $_POST["afraidno"] . '!'; echo ('<br>');
echo 'afraidwhat' . $_POST["afraidwhat"] . '!'; echo ('<br>');
echo 'additional' . $_POST["q7"] . '!'; echo ('<br>');*/

if (empty($_POST["RepPresident"])) $repub= "";
  else if( $_POST["RepPresident"] == 1 ) $repub= "Select";
  else if( $_POST["RepPresident"] == 2 ) $repub= "Donald Trump";
  else if( $_POST["RepPresident"] == 3 ) $repub= "Ted Cruz";
  else if( $_POST["RepPresident"] == 4 ) $repub= "Marco Rubio";
  else if( $_POST["RepPresident"] == 5 ) $repub= "John Kasich";
  else if( $_POST["RepPresident"] == 6 ) $repub= "Other";
/*echo 'repub'. $repub ; echo ('<br>');*/
if (empty($_POST["DemPresident"])) $dem= "";
  else if( $_POST["DemPresident"] == 7 ) $dem= "Select";
    else if( $_POST["DemPresident"] == 8 ) $dem= "Bernie Sanders";
      else if( $_POST["DemPresident"] == 9 ) $dem= "Hillary Clinton";
        else if( $_POST["DemPresident"] == 10 ) $dem= "Other";
	   /* echo 'dem'. $dem ; echo ('<br>');*/


if (empty($_POST["winner"])) $winner= "";
   else if( $_POST["winner"] == 11 ) $winner= "Select";
     else if( $_POST["winner"] == 12 ) $winner= "Independent";
       else if( $_POST["winner"] == 13 ) $winner= "Other";
         else if( $_POST["winner"] == 10 ) $winner= "Other";
	    else if( $_POST["winner"] == 1 ) $winner= "Select";
	     else if( $_POST["winner"] == 2 ) $winner= "Donald Trump";
	      else if( $_POST["winner"] == 3 ) $winner= "Ted Cruz";
	       else if( $_POST["winner"] == 4 ) $winner= "Marco Rubio";
	        else if( $_POST["winner"] == 5 ) $winner= "John Kasich";
		 else if( $_POST["winner"] == 6 ) $winner= "Bernie Sanders";
		  else if( $_POST["winner"] == 7 ) $winner= "Hillary Clinton";
		   else if( $_POST["winner"] == 9 ) $winner= "Independent";
                       else $winner =  $_POST["winner"];
/*  echo 'winner'. $winner ; echo ('<br>');*/

  $name =  $_POST["yourname"];
 /* echo 'name'. $name ; echo ('<br>');*/

  $city =  $_POST["yourcity"];
 /* echo 'city'. $city ; echo ('<br>');*/

  $state =  $_POST["yourstate"];
/*  echo 'state'. $state;  echo ('<br>');*/

  $zipcode =  $_POST["yourzipcode"]; 
/*  echo 'zipcode'. $zipcode;  echo ('<br>');*/

  $email = $_POST["youremail"];
 /* echo 'email'. $email;  echo ('<br>');*/

if (empty($_POST["yourvotepri"])) $selfprimary= "";
  else if($_POST["yourvotepri"] == 1 ) $selfprimary= "Select";
    else if(  $_POST["yourvotepri"] == 2 ) $selfprimary= "Donald Trump";
      else if(  $_POST["yourvotepri"] == 3 ) $selfprimary= "Ted Cruz";
        else if(  $_POST["yourvotepri"] == 4 ) $selfprimary= "Marco Rubio";
	  else if(  $_POST["yourvotepri"] == 5 ) $selfprimary= "John Kasich";
	    else if(  $_POST["yourvotepri"] == 6 ) $selfprimary= "Bernie Sanders";
	     else if(  $_POST["yourvotepri"] == 7 ) $selfprimary= "Hillary Clinton";
	      else if(  $_POST["yourvotepri"] == 8 ) $selfprimary= "Other";
	       else if(  $_POST["yourvotepri"] == 9 ) $selfprimary= "Not voting but I could";
	          else if (  $_POST["yourvotepri"] == 10 ) $selfprimary= "Can't vote";
		  /*  echo 'yourvotepri'. $selfprimary;  echo ('<br>');*/



if (empty($_POST["yourvotegen"])) $selfgeneral= "";
  else if($_POST["yourvotegen"] == 1 ) $selfgeneral= "Select";
      else if(  $_POST["yourvotegen"] == 2 ) $selfgeneral= "Donald Trump";
            else if(  $_POST["yourvotegen"] == 3 ) $selfgeneral= "Ted Cruz";
	            else if(  $_POST["yourvotegen"] == 4 ) $selfgeneral= "Marco Rubio";
		              else if(  $_POST["yourvotegen"] == 5 ) $selfgeneral= "John Kasich";
			                  else if(  $_POST["yourvotegen"] == 6 ) $selfgeneral= "Bernie Sanders";
					               else if(  $_POST["yourvotegen"] == 7 ) $selfgeneral= "Hillary Clinton";
						                     else if(  $_POST["yourvotegen"] == 8 ) $selfgeneral= "Other";
								                    else if(  $_POST["yourvotegen"] == 9 ) $selfgeneral= "Not voting but I could";
										                      else if (  $_POST["yourvotegen"] == 10 ) $selfgeneral= "Can't vote";
												                         // echo 'yourvotegen'. $selfgeneral;  echo ('<br>');
        $afraid ="";
	if ( empty($_POST["afraidyes"])=="on")$afraid.= "Yes,";
	if ( empty($_POST["afraidno"])=="on")$afraid.= "No,";
	if ( empty($_POST["afraidwhat"])=="on")$afraid.= "What";
	  /* echo 'afraid'. $afraid;  echo ('<br>');*/


	$additional = empty($_POST["q7"]) ;
	/*echo 'additional'. $additional;  echo ('<br>');*/




#$db->exec('INSERT INTO candidate (repub,dem,winner,name,city,state,zipcode,email,selfprimary,selfgeneral,afraid,additional) VALUES (`$repub`,`$dem`,`$winner`,`$name`,`$city`,`$state`,`$zipcode`,`$email`,`$selfprimary`,`$selfgeneral`,`$afraid`,`$additional`)');
$stmt=$db->prepare('INSERT INTO candidate (repub,dem,winner,name,city,state,zipcode,email,selfprimary,selfgeneral,afraid,additional) VALUES (:repub,:dem,:winner,:name,:city,:state,:zipcode,:email,:selfprimary,:selfgeneral,:afraid,:additional)');
$stmt  -> bindValue(':repub', $repub);
$stmt  -> bindValue(':dem', $dem);
$stmt  -> bindValue(':winner', $winner);
$stmt  -> bindValue(':name', $name);
$stmt  -> bindValue(':city', $city);
$stmt  -> bindValue(':state', $state);
$stmt  -> bindValue(':zipcode', $zipcode);
$stmt  -> bindValue(':email', $email);
$stmt  -> bindValue(':selfprimary', $selfprimary);
$stmt  -> bindValue(':selfgeneral', $selfgeneral);
$stmt  -> bindValue(':afraid', $afraid);
$stmt  -> bindValue(':additional', $additional);

if( $stmt -> execute() ){
			//echo "Candidate 1   | Candidate 2   | Candidate 3   | Name        | City         | State        | Zip Code   | Email         | Candidate 4    | Candidate 5    | Message";
		//	 echo ('<br>');

			}
#$db->exec('INSERT INTO candidate VALUES (:repub,:dem,:winner,:name,:city,:state,:zipcode,:email,:selfprimary,:selfgeneral,:afraid,:additional)');

$results = $db->query('SELECT * FROM candidate');
	while ($row=$results->fetchArray()){

echo '<table style="width:100%" border="1">';
echo '<tr>';
echo '<td WIDTH=100 bgcolor="#3399ff">';
	echo $row['repub'];
	echo '</td>';
	echo '<td WIDTH=100 bgcolor="#66ccff">';
	echo $row['dem'];
echo '</td>';
	echo '<td WIDTH=100 bgcolor="#99ccff">';
	echo $row['winner'];
		echo '</td>';
	echo '<td WIDTH=100 bgcolor="#ff6666">';
    echo $row['name'];
    	echo '</td>';
	echo '<td WIDTH=100 bgcolor="#ff6600">';
    echo $row['city'];
    	echo '</td>';
	echo '<td WIDTH=100 bgcolor="#66ccff">';
	echo $row['state'];
		echo '</td>';
	echo '<td WIDTH=100 bgcolor="#66ccff">';
	echo $row['zipcode'];
		echo '</td>';
	echo '<td WIDTH=150 bgcolor="#66ccff">';
	echo $row['email'];
		echo '</td>';
	echo '<td WIDTH=100 bgcolor="#66ccff">';
    echo $row['selfprimary'];
    	echo '</td>';
	echo '<td WIDTH=100 bgcolor="#66ccff">';
	echo $row['selfgeneral'];
		echo '</td>';
	//echo '<td WIDTH=100>';
//	echo $row['additional'];
	//	echo '</td>';
		echo '</tr>';
//echo '</table>';

#		var_dump($row);
        echo ('<br>');
        echo ('<br>');
	}

	 $db = null;
?>

