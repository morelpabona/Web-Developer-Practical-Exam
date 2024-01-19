
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Paint Job Manager</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<center> <h1>AUTO PAINT</h1>
                <div class ="maindiv">
                <nav id= "navi">
                <ul style="list-style: none; padding: 0; display: flex; justify-content: center; align-items: center;">
                            <li style="margin-right: 20px;"><a href="#" onclick="showAddPaintForm()">New Paint Job</a></li>
                            <li><a href="#" onclick="showPaintJobs()">Paint Jobs</a></li>
                        </ul>  
                    </nav> 
                

<div id="addPaintFormContainer" style="display:none;">
       <center><h1>
            NewPaint Job
        </h1> 
         
                <form id="addPaintForm">       
    <form action="" id="colorForm" method = "POST">
        <div id= "imgcon">
            <div
                id="imageContainer">
                <img src="./img/nocolor.jpg" alt="">
            </div>
        </div>
        <label for="targetColor">Plate number:</label>
        <input type="text" name="" id=""> <Br>

                <label for="currentColor">Current Color:</label>
                <select id="currentColor" name="targetColor" onchange="displayColorfulImage()">
                    <option value="nocolor2">--Select Color--</option>
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="green">Green</option>
                </select><br>
            <label for="targetColor">Target Color:</label>
                <select id="targetColor" name="targetColor" onchange="displayColorfulImage()">
                    <option value="nocolor2">--Select Color--</option>
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="green">Green</option>
                </select><br>
    </form>

      <button id="button" type="submit" name="submit">SUBMIT</button>
</div>

        <div id="paintJobsContainer" style="display:none;">
            <h3>Paint Jobs in Process</h3>
            <div class= "paint">
                
                <ul id="activePaintJobsList">
                    <li>Plate no.</li>
                    <li>Current Color</li>
                    <li>Target Color</li>
                    <li>Action</li>
                </ul>              
            </div>
<!-- ---------------                     ------------------------------- -->
            <div id= "paint1list">
                    <li>Plate no.</li>
                    <li>Current Color</li>
                    <li>Target Color</li>
                    <li>Mark as Completed</li>
            </div>  
            <div id= "paint1list">
                    <li>Plate no.</li>
                    <li>Current Color</li>
                    <li>Target Color</li>
                    <li>Mark as Completed</li>
            </div>  
            <div id= "paint1list">
                    <li>Plate no.</li>
                    <li>Current Color</li>
                    <li>Target Color</li>
                    <li>Mark as Completed</li>
            </div>  
<!-- -------------------------------------------------------------------->
            <div class= "paint">
                <ul id="activePaintJobsList">
                    <li>Plate no.</li>
                    <li>Current Color</li>
                    <li>Target Color</li>
                </ul>              
            </div>
<!-- ---------------                     ------------------------------- -->
        <div id= "paint1list">
                    <li>Plate no.</li>
                    <li>Current Color</li>
                    <li>Target Color</li>
                    <li>Mark as Completed</li>
        </div>  
        <div id= "paint1list">
                    <li>Plate no.</li>
                    <li>Current Color</li>
                    <li>Target Color</li>
                    <li>Mark as Completed</li>
        </div>  
        <div id= "paint1list">
                    <li>Plate no.</li>
                    <li>Current Color</li>
                    <li>Target Color</li>
                    <li>Mark as Completed</li>
        </div>            
<!-- -------------------------------------------------------------------->
            <div id= "paint3">

                <h3>Shop Performance</h3>
                    <ul id="orangecol">
                        <li>Total Cars Painted:</li>
                        <li>Breakdown:</li>
                        <li>Blue: </li>
                        <li>Red:</li>
                        <li>Green:</li>
                    </ul>  
            </div>

        </div> 
        
    </div>
    </center> 

    <script>
        function showAddPaintForm() {
            document.getElementById('addPaintFormContainer').style.display = 'block';
            document.getElementById('paintJobsContainer').style.display = 'none';
        }
        function showPaintJobs() {
            document.getElementById('addPaintFormContainer').style.display = 'none';
            document.getElementById('paintJobsContainer').style.display = 'block';
            displayActivePaintJobs();
        }
    </script>
    <script>    
        function displayColorfulImage() {
                var selectedColor = document.getElementById("targetColor").value;
                var imageContainer = document.getElementById("imageContainer");

                if (selectedColor === "red") {
                  
                    imageContainer.innerHTML = "</p>";
                    var img = document.createElement("img");
                    img.src = "./img/red1.jpg";  
                    img.alt = "Red Image";
                    imageContainer.appendChild(img);
                } else if (selectedColor === "blue") {
                   
                    imageContainer.innerHTML = "</p>";
                    var img = document.createElement("img");
                    img.src = "./img/blue2.jpg";  
                    img.alt = "Blue Image";
                    imageContainer.appendChild(img);
                } else if (selectedColor === "green") {
                 
                    imageContainer.innerHTML = "</p>";
                    var img = document.createElement("img");
                    img.src = "./img/green1.jpg"; 
                    imageContainer.appendChild(img);
                } else if (selectedColor === "nocolor2") {
                   
                    var img = document.createElement("img");
                    imageContainer.innerHTML = "</p>";
                    img.src  = "./img/nocolor.jpg";    
                    imageContainer.appendChild(img);
                }
        }
    </script>


  
   

</body>

</html>