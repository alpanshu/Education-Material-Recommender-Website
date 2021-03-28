<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <link rel="stylesheet" href="style2.css">
            <style>
                  .main-nav
        {
            float:middle;
            list-style:none;
            margin-top: 30px;
            padding-top:10px;
            background:linear-gradient(to left,pink,rgb(0, 183, 255));
        }
        .main-nav li{
             display: inline-block;
         }
        .main-nav li a{
             color:black;
             text-decoration: none;
             padding: 5px 20px;
             font-family: "Robota",sans-serif;
             font-size: 15px;
             text-transform:uppercase;
             padding-bottom:30px;
         }
        .main-nav li.active a{
             border: 1px solid white;
         }
        .main-nav li a:hover{
             border: 1px solid white;
         }
         .tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
  }
  
  /* Style the buttons that are used to open the tab content */
  .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
  }
  
  /* Change background color of buttons on hover */
  .tab button:hover {
    background-color: #ddd;
  }
  
  /* Create an active/current tablink class */
  .tab button.active {
    background-color: #ccc;
  }
  
  /* Style the tab content */
  .tabPanel {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
  }
  .tab1 {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
  }
  
  /* Style the buttons that are used to open the tab content */
  .tab1 button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
  }
  
  /* Change background color of buttons on hover */
  .tab1 button:hover {
    background-color: #ddd;
  }
  
  /* Create an active/current tablink class */
  .tab1 button.active {
    background-color: #ccc;
  }
  
  /* Style the tab content */
  .tab1Panel {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
  }
  .recom{
    font-size:30px;
    margin-left:20px;
    width:100px;
    padding:20px;
    background-color:blue;
    color:black;
    text-decoration:none;
    border:1px solid blue;
    border-radius:5px;
  }
  .recom:hover{
    text-decoration:none;
    background-color:cyan;
    color:white;
  }
                </style>
</head>
<body>
    <div id="top_bar">
        <div class="row" style="background:linear-gradient(to left,pink,rgb(0, 183, 255));">
            <div class="container-fluid">
               
                <ul class="main-nav" style="padding-left:450px;padding-top:10px;">
         
                          <li ><a style="color:whitesmoke;"href="">Home</a></li>
                          <li ><a style="color:whitesmoke;"href="#resources">Resources</a></li>
                          <li ><a style="color:whitesmoke;"href="#tutorials">Tutorials</a></li>
                          <li ><a style="color:whitesmoke;"href="#recommendation">Suggestion</a></li>
                      </ul>
                 <div id="user">

                   <?php
                         session_start();
                         $name=$_SESSION['name'];
                         echo "Welcome";
                         echo "<br>";
                         echo $name;
                     ?>
                  </div>
           </div>
           </div>
</div>
           <div id="resources">
               <div class="row">
                   <div class="container-fluid">
                   <h1 style="font-family:'Robota',sans-serif;font-size:30px;border:solid purple 5px;padding-left:620px;"> 
                       QUESTION BANK
                     </h1>
                     <div class="tab">
                           <button class="tablinks" onclick="openCity(event, 'A')">MAT2001</button>
                           <button class="tablinks" onclick="openCity(event, 'B')">PHY1701</button>
                           <button class="tablinks" onclick="openCity(event, 'C')">CSE1003</button>
                           <button class="tablinks" onclick="openCity(event, 'D')">CSE2001</button>
                           <button class="tablinks" onclick="openCity(event, 'E')">CSE2003</button>
                           <button class="tablinks" onclick="openCity(event, 'F')">ECE1004</button>

                     </div>
                     <div id="A" class="tabPanel"><a href="https://imgur.com/a/k7TPmxb"><img src="paper.png" width=400 height=200></a>
                     <form action="form_script.php" method="post">
                       <input type="text" name="item" value="MAT2001CAT1 Q" readonly size="40"><br>
                       <input type="number" name="rating"><br>
                       <input type="submit" value="Submit">
                       </form></div>
                     <div id="B"class="tabPanel"><p>gi</p></div>
                     <div id="C"class="tabPanel"><p>ni</p></div>
                     <div id="D"class="tabPanel"><p>pi</p></div>
                     <div id="E"class="tabPanel"><p><div class="row">
                     <div class="col-sm-4">
                     <a href="https://imgur.com/a/xwZiXye"><img src="paper.png" width=400 height=200></a>
                     <form action="form_script.php" method="post">
                       <input type="text" name="item" value="CSE2002CAT1 Q" readonly size="40"><br>
                       <input type="number" name="rating"><br>
                       <input type="submit" value="Submit">
                       </form>
                     </div>
                     <div class="col-sm-4"><a href="https://imgur.com/a/nwcWYs0"><img src="paper.png" width=400 height=200></a>
                     <form action="form_script.php" method="post">
                       <input type="text" name="item" value="CSE2003CAT2 Q" readonly size="40"><br>
                       <input type="number" name="rating"><br>
                       <input type="submit" value="Submit">
                       </form>
                     </div>
                     </div></div>
                     <div id="F"class="tabPanel"><p>qi</p></div>
                     <script>
                         function openCity(evt, Name) {
  // Declare all variables
  var i, tabPanel, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabPanel = document.getElementsByClassName("tabPanel");
  for (i = 0; i < tabPanel.length; i++) {
    tabPanel[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(Name).style.display = "block";
  evt.currentTarget.className += " active";
}
                         </script>
                   </div>
                     </div>
                 </div>
                 <div id="tutorials">
                 <div class="row" style="background:linear-gradient(to left,purple,blue);">
                   <div class="container-fluid">
                   <h1 style="font-family:'Robota',sans-serif;font-size:30px;border:solid blue 5px;padding-left:650px;"> 
                       TUTORIALS
                     </h1>
                     <div class="tab1">
                           <button class="tab1links" onclick="openCity1(event, 'A1')">MAT2001</button>
                           <button class="tab1links" onclick="openCity1(event, 'B1')">PHY1701</button>
                           <button class="tab1links" onclick="openCity1(event, 'C1')">CSE1003</button>
                           <button class="tab1links" onclick="openCity1(event, 'D1')">CSE2001</button>
                           <button class="tab1links" onclick="openCity1(event, 'E1')">CSE2003</button>
                           <button class="tab1links" onclick="openCity1(event, 'F1')">ECE1004</button>

                     </div>
                     <div id="A1" class="tab1Panel">
                       <iframe width="420" height="315"
                       src="https://www.youtube.com/embed/watch?v=V3iEsLPAD68&list=PLU6SqdYcYsfLRq3tu-g_hvkHDcorrtcBK" allowfullscreen>
                       </iframe>
                       <form action="form_script.php" method="post">
                       <input type="text" name="item" value="Probability and Random Variable" readonly size="40"><br>
                       <input type="number" name="rating"><br>
                       <input type="submit" value="Submit">
                       </form>
                       <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnx3d3dpbW1vcnRhbHM5NWNvbXxneDo2MGJjOWQxNWE5NWYwZGUx"><img src="book.png"></a>
                       <form action="form_script.php" method="post">
                       <input type="text" name="item" value="Thomas Calculus" readonly size="40"><br>
                       <input type="number" name="rating"><br>
                       <input type="submit" value="Submit">
                       </form>
                     </div>
                     <div id="B1"class="tab1Panel"><p>gi</p></div>
                     <div id="C1"class="tab1Panel">
                     <a href="http://american.cs.ucdavis.edu/academic/ecs154a.sum14/postscript/cosc205.pdf"><img src="book.png"></a>
                       <form action="form_script.php" method="post">
                       <input type="text" name="item" value="Digital Logic" readonly size="40"><br>
                       <input type="number" name="rating"><br>
                       <input type="submit" value="Submit">
                       </form>
                     </div>
                     <div id="D1"class="tab1Panel"><p>pi</p></div>
                     <div id="E1"class="tab1Panel">
                     <a href="http://enos.itcollege.ee/~jpoial/algorithms/GT/Data%20Structures%20and%20Algorithms%20in%20Java%20Fourth%20Edition.pdf"><img src="book.png"></a>
                       <form action="form_script.php" method="post">
                       <input type="text" name="item" value="Data Structures" readonly size="40"><br>
                       <input type="number" name="rating"><br>
                       <input type="submit" value="Submit">
                       </form>
                     </div>
                     <div id="F1"class="tab1Panel"><p>qi</p></div>
                     <script>
                         function openCity1(evt, Name1) {
  // Declare all variables
  var i, tab1Panel, tab1links;

  // Get all elements with class="tabcontent" and hide them
  tab1Panel = document.getElementsByClassName("tab1Panel");
  for (i = 0; i < tab1Panel.length; i++) {
    tab1Panel[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tab1links = document.getElementsByClassName("tab1links");
  for (i = 0; i < tab1links.length; i++) {
    tab1links[i].className = tab1links[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(Name1).style.display = "block";
  evt.currentTarget.className += " active";
}
                         </script>
                   </div>
                     </div>
                     
                     <div id="recommendation">
                     <div class="row" >
                     <div class="container-fluid">
                     <h1 style="font-family:'Robota',sans-serif;font-size:30px;border:solid green 5px;padding-left:700px;"> 
                       RECOMMENDATION
                     </h1>
                     <div class="col-sm-6">
                         <form action="send.php" method="post">
                         <h3>Enter a item you liked today</h3>
                         <input type='text' name="recom">
                         <input type='submit' value='Submit'>
                         </form>
                         
                     </div>
                     <div class="col-sm-6" style="margin-top:20px;">
                        <a class='recom' href="test3.php">Get Recommendation</a>
                       
                     </div>
                     </div>
                     </div>
                     </div>
                 </div>
           

</body>
</html>