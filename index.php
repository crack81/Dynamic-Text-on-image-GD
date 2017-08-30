    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

       <div class="setting-image">
            <label for="imagetext">Titulo de la imagen</label> <br/>
            <input type="text"  id="imagetext" name="imagetext"/>
            <input type="button" value="asginar mensaje"/>
       </div>


       <br/>
       <div class="image" id="default-image">
            <img src="createImage.php" alt="tigerimage"  onclik="generateText()">
       </div>
       <div class="image" id="custome-image"> </div>

       <script src="script.js">
       </script>
    </body>
    </html>