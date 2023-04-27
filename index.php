<!DOCTYPE>
<html>
    <head>
        <title>
        Insert CIS 245 SITE
        </title>
        <script src='jquery-3.2.1.js'></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            #pad {
                background:#000;
                border :1px solid #fff;
                color: blue;
            }
        </style>

    </head>

    <body>


        <!--This is the top menu-->
        <div class="w3-top">
            <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
                <a href="#home" class="w3-bar-item w3-button">COVID - 19 INFORMATION PAGE</a>
                
                <div class="w3-right w3-hide-small">
                    <a href="#about" class="w3-bar-item w3-button">About this page</a>
                    <a href="#menu" class="w3-bar-item w3-button">Information</a>
                    <a href="#form" class="w3-bar-item w3-button">Form</a>
                </div>
            </div>
        </div>

        <header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
            <img class="w3-image" src="header.jpg"  width="1600" height="800">
            
            <div class="w3-display-bottomleft w3-padding-large w3-opacity">
                <h1 class="w3-xxlarge">Learn how to curb the spread on the <a href="https://www.canada.ca/en/public-health/services/diseases/2019-novel-coronavirus-infection/symptoms.html">Official Canadian Government webpage</a></h1>
            </div>
        </header>



        <div class="w3-content" style="max-width:1100px">

            <!--About section-->  
            <div class="w3-row w3-padding-64" id="about">
                <!-- first image -->
                <div class="w3-col m6 w3-padding-large w3-hide-small">
                    <img src="orange_mask.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600;" style="height: 80%;">
                </div>

                <div class="w3-col m6 w3-padding-large">
                    <h1 class="w3-center">Wear a Mask</h1><br>
                    <p class="w3-large">Wearing a mask is one is one of the most common and accessible ways of curbing the spread of corona virus. People are adviced to use face masks when going into public places. The corona virus is a contact disease, and it can also be transmitted from one person to another through air medium. That is why people are adviced to use facial masks to protect themselves from the virus and to avoid the transfer of the virus.</p>
                
                </div>

                <hr>

                <!--2nd picture-->
                <div class="w3-row w3-padding-64">
                    <div class="w3-col l6 w3-padding-large">
                    <h1 class="w3-center">Avoid Touching Your Face</h2>
                    <p class = "w3-large"> As you go about your daily lives, you never know what kinds of germs you come across.  Coming in contact with germs and diseases in our environment is inevitable. In case you happen to come in contact with the corona virus, you should avoid touching your face to prevent transfer of the virus to any of your body openings.</p>
                    
                    </div>
                    
                    <div class="w3-col l6 w3-padding-large">
                        <img src="touch.jpg" class="w3-round w3-image " alt="Menu" style="width:95%; height:70%">
                    </div>

                    
                </div>

                <hr>

                <!-- 3rd picture -->

                <div class="w3-col m6 w3-padding-large w3-hide-small">
                    <img src="wash.jpg" class="w3-round w3-image " alt="Table Setting" width="600;" style="height: 80%;">
                </div>

                <div class="w3-col m6 w3-padding-large">
                    <h1 class="w3-center">Wash your Hands</h1><br>
                    <p class="w3-large">It is really important for people to wash their hands properly, regularly. As often as you can, wash your hands ensuring you go through all the nooks and cranies of your fingers. Washing your hands properly is just as effective as using a hand disinfectant or sanitizer. By doing so, you are able to get rid of germs and diseases that you may have picked up from surfaces in your surroundings that you have come in contact with.</p>
                
                </div>

                <hr>

                <!--4th picture-->
                <div class="w3-row w3-padding-64">
                    <div class="w3-col l6 w3-padding-large">
                    <h1 class="w3-center">Social Distance</h2>
                    <p class = "w3-large"> It can be really tough to have to stay away from people, but in order to curb the spread of COVID-19, people have in make conscious effort to keep at least 6 ft away from others, especially if these other people are people that you do not share the same living space with. By doing so, you are making an impactful contribution to curbing the spread of the coronavirus. <b>Protect each other by staying apart.</b></p>
                    
                    </div>
                    
                    <div class="w3-col l6 w3-padding-large">
                        <img src="quarantine.jpg" class="w3-round w3-image " alt="Menu" style="width:90%; height:70%">
                    </div>

                    
                </div>
            </div>


            <hr>

            <!-- Menu Section -->
            <div class="w3-row w3-padding-64" id="menu">
                <div class="w3-col l6 w3-padding-large">
                <h2>PHP Select</h2>
                <div id="phpselect">
                    
                    
                    <?php
                        
                        $connection = new mysqli('localhost', 'test', '12345', "test");
                        if( !$connection->connect_errno ) {
                            $sql = "SELECT * FROM COVID_19";
                            if( $rs = $connection->query($sql) ){
                            while( $r = $rs->fetch_assoc() ){
                                echo "<p>${r['Name_of_protection']} : ${r['Protection_cost']} : ${r['UPC_code']} : ${r['Manufacturing_country']}</p>";
                            }
                            $rs->free();
                            }
                            $connection->close();
                        }
                        
                    ?>
                </div>    
                </div>
                
                <div class="w3-col l6 w3-padding-large">
                    <img src="header.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
                </div>

                
            </div>

            <hr>

            <!-- Input Section -->
            <div class="w3-container w3-padding-64" id="form">

                <h1>Ways you protect yourself against COVID-19</h1><br>
                <p>Below, please enter details about common methods or mediums you and people you know use to prevent the spread of COVID-19.</p>
                <hr>

                <form id='form' action="insert.php" method="POST">
                    
                    <p>Name of protection: <input class="w3-input w3-padding-16" id='Name_of_protection' type="text" name='Name_of_protection' placeholder='eg. wearing a mask'></p>
                    <p>Protection Cost: <input class="w3-input w3-padding-16" id='Protection_cost' type='number' name='Protection_cost ' placeholder='eg. 3.50'></p>
                    <p>UPC Code: <input class="w3-input w3-padding-16" id='UPC_code' type='number' name='UPC_code' placeholder='eg. 1234567890'></p>
                    <p>Manufacturing Country: <input class="w3-input w3-padding-16" id='Manufacturing_country' type='varchar(500)' name='Manufacturing_country' placeholder='eg. Canada'></p>

                    <!-- Submit button -->
                    
                    <p><input class= "w3-button w3-light-grey w3-section" type='submit' value="Insert"></p>
                </form>




            </div>




        </div>


        <script>
            $('#form').submit(function()
            {
                if ($('#Name_of_protection').val() == '' ||
                $('#Protection_cost').val() == ''))
                {
                    alert('Fill in all empty spaces')
                    return false
                }
            })
        </script>
            


        <footer class="w3-center w3-light-grey w3-padding-32">
            <p>Name: Ugwuoke Naomi</p>
            <p>Student ID: 300177027</p>
        </footer>

    </body>
</html>