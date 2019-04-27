
<?php
   

    $bottles = $_GET["bottle"];
    if ($bottles==0){
        $bottles=99;
    }
    $k=0;
    $finalString = '<br /> <span style="color:blue">1 bottle of beer on the wall, 1 bottle of beer.Take it down and pass it around, no more bottles of beer on the wall. <br />
    
    </span> <span style="color:red">No more bottles of beer on the wall, no more bottles of beer. Go to the store and buy some more, 99 bottles of beer on the wall.</span>';
    
    for ($j=$bottles; $j>2; $j--){
        echo '<br />';
        $k=$j-1;
      
        if ($j%2==0){
            echo  '<p  style="color: blue"> '.  $j.' bottles of beer on the wall, ' .$j. ' 
             bottles of beer. Take one down and pass it around, ' .$k. ' bottles of beer on the wall.</p>'; 
        }else{
            echo  '<p style="color: red"> '.  $j. ' bottles of beer on the wall, ' .$j. ' 
            bottles of beer. Take one down and pass it around, ' .$k. ' bottles of beer on the wall.</p>'; 
        }

        if ($k==2){
            echo $finalString;
        }
        
    }


