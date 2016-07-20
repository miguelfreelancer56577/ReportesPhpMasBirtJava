<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP + Java(Birt)</title>
        <script type="text/javascript" src="js/pdfobject.min.js"></script>
        <style type="text/css">
            .pdfobject-container{
                -moz-box-shadow: 7px 6px 5px #6b696b;
                -webkit-box-shadow: 7px 6px 5px #6b696b;
                box-shadow: 7px 6px 5px #6b696b;
                height: 500px;
                width: 100%;
            }
            .pdfobject{
                border: 1px solid #666;
            }
            
            #reporte{
                width: 100%;
                height: 500px;
            }
        </style>
    </head>
    <body>
        <center>
            <h1>Como embeber un reporte con Birt(Java) en PHP</h1>
        </center>
        <?php
//            $fp = fopen("http://localhost:8080/birt/frameset?__report=test.rptdesign&sample=my+parameter", "r");
//            while(!feof($fp)) {
//                $linea = fgets($fp);
//                echo $linea;
//            }
//            fclose($fp); 
        ?>
        
        <h3>Reporte en PDF con birt</h3>
        <div id="showReport" ></div>
        <script type="text/javascript">
            PDFObject.embed("http://localhost:8080/birt/frameset?__report=test.rptdesign&sample=my+parameter&__format=pdf", "#showReport");
        </script>
        <h3>Como embeber Birt en un iframe</h3>
        <FRAMESET rows="*">
            <iframe name="central" src="http://localhost:8080/birt/frameset?__report=test.rptdesign&sample=my+parameter" id="reporte">
        </FRAMESET>
    </body>
</html>
