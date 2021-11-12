<?php


    if ( $text == "" )
        {
            $response  = "Welcome to Asha\n";
            $response .= "1. Enter 1 to continue";
        }



// when 1 is selectd following screen shows
    else if ($text == "1")
        {
            $response  = "AshaCredit, VillageBanking you can rely on\n";
            $response .= "1. AshaStarter - Register \n";
            $response .= "2. Check Balance \n";
            $response .= "3. Deposit into account \n";
            $response .= "4. Invest \n";
        }



    else if ($text == "1*1")
        {
            $response = "AshaStarter - Registration \n";
            $a = readline('Enter a string: ');
            echo $a;
        }

  else if ($text == "1*2")
        {
            $response = "Check Balance \n";
            $a = readline('Enter a string: ');
            echo $a;
        }


          else if ($text == "1*3")
        {
            $response = "Deposit into account \n";
            $a = readline('Enter a string: ');
            echo $a;
        }


          else if ($text == "1*4")
        {
            $response = "Invest \n";
            $a = readline('Enter a string: ');
            echo $a;
        }

?>
