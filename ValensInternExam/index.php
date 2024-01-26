<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Color Selector</title>
  <link rel="stylesheet" href="style.css">

  <style>
   
  </style>
</head>

<body>

<form action="addpaintcon.php" method="POST"> 
        <div class="label">  
        <div class="comparison">
                <p class="displayCar"> </p>
                <p class="displayCar2"> </p>
        </div>
        <label for="">Plate Number</label>  
        <input type="text">
        </div>

        </p><label for="">Current Color</label>
            <select class="mySelect" onchange="updateColor1()" name="currentColor"> 
                        <option value="option1">Default</option>
                        <option value="option2">Red</option>
                        <option value="option3">Green</option>
                        <option value="option4">Blue</option>
            </select>
         </p>
        <p><label for="">Target Color</label>
                <select class="mySelect2" onchange="updateColor2()" name="targetColor"> <
                    <option value="option1">Default</option>
                    <option value="option2">Red</option>
                    <option value="option3">Green</option>
                    <option value="option4">Blue</option>
        </select>
        </p>
        <button type="submit">Submit</button>

</form>

    <script src="valens.js"> </script>

</body>
</html>
