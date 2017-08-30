<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dynamic text on image</title>
</head>
<body>

    <div class="setting-image">
        <label for="imagetext">Text for assign</label> <br/>
        <input type="text"  id="imagetext" name="imagetext"/>
        <input type="button" value="assign text into image" onclick="generateText()" />
    </div>


    <br/>
    <div class="image">
        <img  id="default-image" src="createImage.php" alt="noimage"  onclik="generateText()">
    </div>

    <!--Cargamos el javascript-->
    <script>
        function generateText(){
        var currentText = document.getElementById("imagetext").value;
        var textLen = currentText.length;
        var imgchanged = document.getElementById("default-image");

        if(textLen>0){

            var fontsize = 40;
            if(textLen>10) fontsize = 30;
            if(textLen>20) fontsize = 20;

            imgchanged.src = 'createImage.php?fontsize='+fontsize+'&text='+currentText;
        }
        else imgchanged.src = 'createImage.php?';
    }
    </script>
</body>
</html>