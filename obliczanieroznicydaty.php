<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <label for="od">Od: </label>
        <input name="od" id="od" type="date">

        <!-- <label for="do">Do: </label>
        <input name="do" id="do" type="date"> -->
        <button type="submit">Submit</button>
    </form>

    <?php
        //mytime mktime
        // $miespl= array('l' => 'stycznia' ,'lutego','marca', 'kwietnia', 'maja', 'czerwca', 'lipca', 'sierpnia', 'wrzesnia', 'pazdziernika','listopada','grudnia' );
        // $dzientygpl = array('Monday' =>'poniedziałek' ,'Monday' =>'poniedziałek' ,'Tuesday' =>'wtorek' ,'Wendsday' =>'środa' ,'Thursday' =>'czwartek' ,'Friday' =>'piątek' ,'saturday' =>'sobota' ,'sunday' =>'niedziela' , );

        // $dzisiaj = date("m.d.y");

        // echo($dzisiaj."<br>");

       

        // echo date("l",mktime(0,0,0,$data['miesiac'],$data['dzien'],$data['rok']))
    
        // $uro=$_POST["uro"];
        // $tyg = array('Niedziela','Poniedziałek','Wtorek','Środa','Czwartek','Piątek','Sobota', );
        // $c=strtotime($uro);
        
        // $dzien=date('w',$c);
        // echo("Urodziłeś się w ".$tyg[$dzien]);
        $od=$_POST["od"];
       
        $c=strtotime($od);
        
        $tyg = array('Niedziela','Poniedziałek','Wtorek','Środa','Czwartek','Piątek','Sobota', );
        
        
        // $dzien=date('w',$c);
        // echo("Urodziłeś się w ".$tyg[$dzien]);

        $mktime = mktime (23,59,59,12,31,2024);
     
        $roznica =$mktime  - $c  ;
         
        $day = floor($roznica / (60*60*24));
        $year = floor($roznica / (365 * 24 * 60 * 60));
         
        echo 'Minęło Dni: '. $day . ' Lat: ' . $year;
        

        // $data = array();
        // echo date("l",mktime(0,0,0,$uro['dzien'],$uro['mies'],$uro['rok']));
        // echo ($data);
        // echo (date("l", mktime(0, 0, 0, $mies, $dzien, $rok)));
        // echo($dzien)
    ?>
    
    
</body>
</html>
