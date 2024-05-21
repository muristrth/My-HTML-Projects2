<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIE - Thank You Page</title>
</head>
<body>
    <?php 
        echo 'Thanks for signing up to our HIE program';//Displaying a string
        echo '<br>';//Using the html break line tag
        $fname = "firstname";
        echo "You have enrolled to <span style = 'color:red;'> Hustler Income Expert</span>";//Using css in a sentence
        echo '<br>';//Using the html be=reak line tag
        echo Ksh. 50,000;//This is an integer
        echo '<br>';//using html break line tag
        echo 4+8;
        echo '<br>';
        echo "8+6";//This is a string
        echo '<br>';
        echo date('Y');
        echo '<br>';
        echo date('l');
        echo '<br>';
        echo date('l',strtotime('+5 months'));
        echo '<br>';
        echo date('l, d-m-y');
        echo date('l, jS F Y', strtotime('+3days'));
        date_default_timezone_set("Africa/Nairobi");
        $fname=" Firstname";
        echo '<br>';
        $yob = 2024;
        echo '<br>';
        $current_year = date('Y');//Declaring the current year
        echo $current_year;
        echo '<br>';
        //Using the subtraction operator to find the user's age
        $age = $current_year - $yob;
        echo $age;
        $user_dob ="2024-05-27";
        echo $user_dob;
        $birthday = new DateTime($user_dob);
        $today = new DateTime('today');
        $interval = $birthday->diff($today);
        echo '<br>';
        echo '<pre>';
        print_r($interval);
        echo '</pre>';
        echo $fname. " is ". $age. " Years old";
  ?>
</body>
</html>