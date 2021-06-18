<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
      <div class="max-width">
          <div class="row">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Lucas van der Donk</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="#">Hire me</a>
            </div>
          </div>
      </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profile-1.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Lucas and I'm a <span class="typing-2"></span></div>
                    <p>Hier die ik even alsof ik interessant ben zodat het wel lijkt alsof ik een heel verhaal heb verzonnen terwijl ik eingelijk maar gewoon opschrijf waar ik momenteel aan denk en dat is dus eigenlijk helemaal niks. U heeft zojuist 10 seconden van uw dag verspilt.</p>
                    <a href="#">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Projecten</h2>
            <div class="serv-content">
                <!-- <div class="card"> -->
                    <!-- <div class="box"> -->
                        <?php
                        $select = "SELECT * FROM werkervaring";
                        $connection = mysqli_connect("localhost", "root", "", "portfolio");
                        $results = mysqli_query($connection, $select);

                        while($row = mysqli_fetch_array($results)){
                            $logo = $row["logo"];
                            $titel = $row["titel"];
                            $tekst = $row["tekst"];

                            echo "<div class=\"card\">";
                            echo "<div class=\"box\">";

                            echo "<i class=\"$logo\"></i>";
                            echo "<div class=\"text\">$titel</div>";
                            echo "<p>$tekst</p>";

                            echo "</div>";
                            echo "</div>";
                        }
                        ?>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>Veel ervaring heb ik nog niet met programmeren. Ik zit nu in mijn eerste jaar en ben nog vrij nieuw met alles.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                <?php 
                    
                    $select = "SELECT * FROM skills";
                    $connection = mysqli_connect("localhost","root","","portfolio");
                    $results = mysqli_query($connection,$select);

                    while ($row = mysqli_fetch_array($results)){
                        $naam = $row["Naam"];
                        $percentage = $row["Percentage"];

                        echo "
                            <div class=\"bars\">
                                <div class=\"info\">
                                    <span>$naam</span>
                                    <span>$percentage%</span>
                                </div>
                                <div class=\"lightgrey\">
                                    <div class=\"line\" style=\"background-color: crimson;width: $percentage%;\"></div>
                                </div>
                            </div>
                        ";
                    }
                ?>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Werk ervaring</h2>
            <div class="carousel owl-carousel">
            <!-- <div class="card"> -->
            <!-- <div class="box"> -->
               <?php

                $select = "SELECT * FROM werkervaring";
                $connection = mysqli_connect("localhost", "root", "", "portfolio");
                $results = mysqli_query($connection, $select);

                while($row = mysqli_fetch_array($results)){
                    $logo = $row["logo"];
                    $titel = $row["titel"];
                    $tekst = $row["tekst"];

                    echo "<div class=\"card\">";
                    echo "<div class=\"box\">";

                echo "<i class=\"$logo\"></i>";
                echo "<div class=\"text\">$titel</div>";
                echo "<p>$tekst</p>";

                echo "</div>";
                echo "</div>";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Hier staan mijn contact gegevens voor het geval u interesse heeft in mij. Verder moet ik nu een verhaaltje verzinnen zodat t lijkt alsof ik weet wat ik doe.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="sub-title">Lucas van der Donk</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Zandvoort, Nederland</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">abc@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Stuur mij een bericht</div>
                    <form action="index.php#contact" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required name="name">
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required="email" name="email">
                            </div>
                        </div>
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Company name" name="company">
                            </div>
                            <div class="field email">
                                <input type="text" placeholder=" Company address" name="plaats">
                            </div>
                        </div>
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Address" name="address">
                            </div>
                            <div class="field email">
                                <input type="text" placeholder="Zipcode" name="zipcode">
                            </div>
                        </div>
                        <div class="field">
                            <input type="tel" placeholder="Phonenumber" name="phonenumber">
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required name="subject">
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Text.." required name="message"></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="submits">Send</button>
                        </div>
                    </form>

                    <?php 

                    $name = "";
                    $email = "";
                    $company = "";
                    $plaats = "";
                    $zipcode = "";
                    $phonenumber = "";
                    $subject = "";
                    $message = "";
                    $date = (new DateTime('Europe/Amsterdam'))->format('Y-m-d h:i:s');
                    $invoerfouten = array();
                    
                    if(isset($_POST['submits'])){
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        
                        $company = $_POST['company'];
                        if($company == ""){
                            $company = "niet aangegeven";
                        } 
                        
                        $plaats = $_POST['plaats'];
                        if(empty($plaats))
                            $plaats = "niet aangegeven";
                        $outputline;
                        preg_match('/^[a-zA-Z\s-]*/', $plaats, $outputline);
                        
                        if(isset($outputline) && ($outputline[0] !== $plaats)){
                            array_push($invoerfouten,' This is no existing place.<br>');
                        }
                        $adres = $_POST['address'];
                        if(empty($adres))
                            $adres = "niet aangegeven";

                        $zipcode = $_POST['zipcode'];    
                        if(empty($zipcode)){
                            $zipcode = "niet aangegeven";
                        }
                        if(preg_match('/^[0-9]{4} ?[A-z]{2}$/', $zipcode) == 0){
                            array_push($invoerfouten,' This is no existing Zipcode.<br>');
                        } 
                        $phonenumber = $_POST['phonenumber'];
                        if(empty($phonenumber))
                            $phonenumber = "niet aangegeven";
                        if(preg_match("/^\(?([+]31|0031|0)-?6(\s?|-)([0-9]\s{0,3}){8}$/", $phonenumber) == 0){
                            array_push($invoerfouten,' This is not a correct phone number.<br>');
                        }

                        $subject = $_POST['subject'];
                        $message = $_POST['message'];

                        if(count($invoerfouten) == 0){
                            $sql = "INSERT INTO contact(name, email, company, plaats, adress, postcode ,number, subject, message, datum) VALUES
                            ('$name', '$email', '$company', '$plaats', '$adres', '$zipcode' ,'$phonenumber', '$subject', '$message', '$date')";
                           
                           $connection = mysqli_connect("localhost","root","","portfolio");
                           mysqli_query($connection, $sql); 
                           echo "Uw bericht is verstuurd!";
                        } else {
                            foreach ($invoerfouten as $invoerfout){

                                echo $invoerfout;
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=SordiwaySordiway">Lucas van der Donk</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>