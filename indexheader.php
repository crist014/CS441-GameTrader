<!-- 
    AUTHOR: Collin deKorne
 -->
<?php
    include 'header.php';
?>
<header>
    <nav>
        <ul> 
            <li class="logo"><a href="index.php">Game Trader Logo</a></li>
            <li class="search">
                <form action="search.php" method="POST">
                    <input class="search-text" type="text" name="search" placeholder="Search...">
                    <button class="button w3-button w3-blue-grey" type="search" name="submit-search">Search</button></li>
                </form>
            </li>
            <!-- SIGN UP BOTTON -->
            <li class="signup">
                <div class="w3-container">
                    <button onclick="document.getElementById('id02').style.display='block'" class="button w3-button w3-blue-grey">Sign Up</button>
                    <div id="id02" class="w3-modal">
                        <div class="w3-modal-content w3-card-4 w3-animate-top" style="max-width:600px">
                            <div class="w3-center"><br>
                                <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                                <form class ="w3-container" action="signup.php" method="POST">
                                    <div class="w3-section">
                                        <ul>
                                            <li><b>Username</b></li>
                                            <li><input class="w3-input w3-border w3-margin-bottom" type="text" name="uid" placeholder="Enter Username" required></li>
                                            <li><b>Email</b></li>
                                            <li><input class="w3-input w3-border w3-margin-bottom" type="text" name="mail" placeholder="Enter Email" required></li>
                                            <li><b>Password</b></li>
                                            <li><input class="w3-input w3-border w3-margin-bottom" type="password" name="pwd" placeholder="Enter Password" required></li>
                                            <li><b>Confirm Password</b></li>
                                            <li><input class="w3-input w3-border" type="password" name="pwd-repeat" placeholder="Re-enter Password" required></li>
                                            <li><button class="w3-button w3-block w3-blue-grey w3-section w3-padding" type="submit" name="signup-submit">Sign Up</button></li>
                                        </ul>
                                    </div>
                                </form>
                                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                                    <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li> <!-- END OF SIGN UP BUTTON -->
            <!-- LOGIN BUTTON -->
            <li class="login">
                <div class="w3-container">
                    <button onclick="document.getElementById('id01').style.display='block'" class="button w3-button w3-blue-grey">Login</button>
                    <div id="id01" class="w3-modal">
                        <div class="w3-modal-content w3-card-4 w3-animate-top" style="max-width:600px">
                            <div class="w3-center"><br>
                                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                                <form class="w3-container" action="login.php" method="POST">
                                    <div class="w3-section">
                                        <label><b>Username</b></label>
                                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username..." name="mailuid" required>
                                        <label><b>Password</b></label>
                                        <input class="w3-input w3-border" type="password" placeholder="Enter Password..." name="pwd" required>
                                        <button class="w3-button w3-block w3-blue-grey w3-section w3-padding" type="submit">Login</button>
                                    </div>
                                </form>
                                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                                    <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </li> <!-- END OF LOGIN BUTTON -->
        </ul>
    </nav>
</header>