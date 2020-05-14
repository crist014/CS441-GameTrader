<!-- 
    AUTHOR: Collin deKorne
 -->
<?php
    include 'header.php';
?>
<header>
    <nav>
        <ul>
            <li class="logo"><a href="member.php">Game Trader Logo</a></li>
            <li class="search">
                <form action="search.php" method="POST">
                    <input class="search-text w3-text-blue-grey" type="text" name="search" placeholder="Search...">
                    <button class="button w3-button w3-blue-grey " type="search" name="submit-search">Search</button>
                </form>
            </li>
            <li class="button signout w3-button w3-blue-grey"><a href="logout.php">Sign out</a></li>
            <li class="button profile w3-button w3-blue-grey"><a href="profile.php">Profile</a></li>
            <!-- POST BUTTON -->
            <li class="post">
                <div class="w3-container">
                    <button onclick="document.getElementById('id01').style.display='block'" class="button w3-button w3-blue-grey">Post</button>
                    <div id="id01" class="w3-modal">
                        <div class="w3-modal-content w3-card-4 w3-animate-top" style="max-width:600px">
                            <div class="w3-center"><br>
                                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                                <form class ="w3-container" action="addlisting.php" method="POST">
                                    <div class="w3-section">
                                        <ul>
                                            <li><b>Name of Item</b></li>
                                            <li><input class="w3-input w3-border w3-margin-bottom" type="text" name="item_name" placeholder="Enter Item" required></li>
                                            <li><b>Item Description</b></li>
                                            <li><input class="w3-input w3-border w3-margin-bottom" type="text" name="item_description" placeholder="Enter Description" required></li>
                                            <li><b>Selling Price</b></li>
                                            <li class="dollar-sign"><input class="w3-input w3-border w3-margin-bottom" type="text" name="item_price" placeholder="0.00" required><i>$</i></li>
                                            <li><b>Item to Trade With</b></li>
                                            <li><input class="w3-input w3-border w3-margin-bottom" type="text" name="item_propose" placeholder="Enter Item" ></li>
                                            <li><input type="file" name="img" id="img"></li>
                                            <!--TODO: ADD TOGGLE SWITCH-->
                                            <li><button class="w3-button w3-block w3-blue-grey w3-section w3-padding" type="submit" name="post-submit">Post Item</button></li>
                                        </ul>
                                    </div>
                                </form>
                                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                                    <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li> <!-- END OF POST BUTTON -->
        </ul>
    </nav>
</header>