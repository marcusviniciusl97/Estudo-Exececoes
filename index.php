<HTML>
    <head>
    </head>
    <body>
        <?php
            $string = "Curso na DIO!";
            $numeros = 50;
            $array = array("PHP", "HTML", "C", "JAVA");
            date_default_timezone_set('America/Sao_Paulo');
            $date = date("d/m/Y H:i:s");
        ?>  
        <h4>
            Essa é uma variavel do tipo string, 
            para implementar um variavél do tipo string 
            utilizamos aspas simples ('') ou duplas ("")
            => $string = "Curso na DIO"
            :
        </h4>
        <?php
            echo $string;
        ?>  
        
        <h4>Essa é uma variável do tipo número, 
            para implementar essa variável utilizamos
            somente os número dessa forma
            :
        </h4>    
        <?php
            echo $numeros;
        ?>
        <h4>
            Essa é uma variável do tipo array
            para implementar essa variável utilizamos
            dessa forma => array("PHP", "HTML", "C", "JAVA")
            :
        </h4>
        <?php
            print_r($array); 
        ?>
        <h4>
            Essa é uma variável do tipo datas
            para implementar essa variável utilizamos
            uma função própria do PHP dessa forma
            :
        </h4>
        <?php
            print $date;
        ?>
    </body>
</HTML>