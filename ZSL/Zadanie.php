<html>

    <head>



    </head>

    <body>

    <?php

       
        //postinkrementacja $x++
        //preinkrementacja ++$x
        //postdekrementacja $x--
        //predekrementacja --$x


        $x=10;
        $x++;
        echo $x."<br>"; //11
        $x=$x++;
        echo $x."<br>"; //11
        $y=$x++;
        echo $x."<br>"; //12
        echo $y."<br><br><br>"; //11


        $x=1;
        echo $x."<br>"; //1
        
        $x=$x++;
        echo $x."<br>"; //1
        
        $x=++$x;
        echo $x."<br>"; //2
        
        $y=++$x;
        echo $x."<br>"; //3
        echo $y."<br>"; //3
        
        $y=$x++; 
        echo $x."<br>"; //4
        echo $y."<br>"; //3       



    ?>

    </body>

</html.

