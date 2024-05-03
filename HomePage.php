<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staybnb/Home Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/7d9564bbf7.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="header">
        <nav id="navBar">
            <img src="Images/logo.png" class="logo">
            <ul class="nav-links">
                <li><a href="HomePage.php" class="active">Popular Places</a></li>
                <li><a href="HousePage.html">Travel Outside</a></li>
                <li><a href="ListingPage.html">Online Packages</a></li>
                <li><a href="ContactUs.html">Contact Us</a></li>
            </ul>
            <a href="index.php" class="Signin-btn">Logout</a>
            <i class="fa-solid fa-bars" onclick="togglebtn()"></i>
        </nav>
        <div class="container">
            <h1>Find Your Next Destination</h1>
            <div class="search-bar">
                <form>
                    <div class="location-input">
                        <label>Location</label>
                        <input type="text" placeholder="Where are you going?">
                    </div>
                    <div>
                        <label>Check-in</label>
                        <input type="text" placeholder="Add Date">
                    </div>
                    <div>
                        <label>Check out</label>
                        <input type="text" placeholder="Add Date">
                    </div>
                    <div>
                        <label>Guest</label>
                        <input type="text" placeholder="Add Guest">
                    </div>
                <button type="submit"><img src="Images/search.png"></button>
                </form>
            </div>
        </div>
        <video autoplay loop muted plays-inline class="back-video">
                <source src="PHVideo.mp4" type="video/mp4">
            </video>
    </div>
    <div class="container">
        <h2 class="sub-title">Exclusives</h2>
        <div class="exclusives">
            <div>
                <img src="Images/image-1.png">
                <span>
                    <h3>London</h3>
                    <p>Starts at ₱14,513</p>
                </span>
            </div>
            <div>
                <img src="Images/image-2.png">
                <span>
                    <h3>Switzerland</h3>
                    <p>Starts at ₱20,518</p>
                </span>
            </div>
            <div>
                <img src="Images/image-3.png">
                <span>
                    <h3>Austrilia</h3>
                    <p>Starts at ₱7,102</p>
                </span>
            </div>
            <div>
                <img src="Images/image-4.png">
                <span>
                    <h3>France</h3>
                    <p>Starts at ₱30,382</p>
                </span>
            </div>
            <div>
                <img src="Images/image-5.png">
                <span>
                    <h3>Amsterdam</h3>
                    <p>Starts at ₱14,374</p>
                </span>
            </div>
            <div>
                <img src="Images/image-6.png">
                <span>
                    <h3>Netherlands</h3>
                    <p>Starts at ₱14,738</p>
                </span>
            </div>
            <div>
                <img src="Images/image-7.png">
                <span>
                    <h3>New York</h3>
                    <p>Starts at ₱29,198</p>
                </span>
            </div>
            <div>
                <img src="Images/image-8.png">
                <span>
                    <h3>Chicago</h3>
                    <p>Starts at ₱31,227</p>
                </span>
            </div>
            <div>
                <img src="Images/image-9.png">
                <span>
                    <h3>San Francisco</h3>
                    <p>Starts at ₱42,321</p>
                </span>
            </div>
            <div>
                <img src="Images/image-10.png">
                <span>
                    <h3>Shanghai</h3>
                    <p>Starts at ₱4,453</p>
                </span>
            </div>
        </div>

        <h2 class="sub-title">Trending Places</h2>
        <div class="trending">
            <div>
                <img src="Images/dubai.png">
                <h3>Dubai</h3>
            </div>
            <div>
                <img src="Images/new-york.png">
                <h3>New York</h3>
            </div>
            <div>
                <img src="Images/paris.png">
                <h3>Paris</h3>
            </div>
            <div>
                <img src="Images/new-delhi.png">
                <h3>New Delhi</h3>
            </div>
        </div>

        <div class="cta">
            <h3>Sharing <br>Is Earning Now</h3>
            <p>Great opportunity to make money by <br>sharing your extra space</p>
            <a href="#" class="cta-btn">Know More</a>
        </div>

        <h2 class="sub-title">Travellers Stories</h2>
        <div class="stories">
            <div>
                <img src="Images/story-1.png">
                <p>Popular European countries with a budget of just $10,000</p>
            </div>
            <div>
                <img src="Images/story-2.png">
                <p>Traveled more than 100 Countries in less than a year</p>
            </div>
            <div>
                <img src="Images/story-3.png">
                <p>Best experience you get while traveling to Thailand</p>
            </div>
        </div>
        <a href="HousePage.html" class="start-btn">Book Now!</a>

        <div class="pagination">
        <img src="Images/arrow.png">
        <span class="current">1</span>
        <span><a href="HousePage.html">2</a></span>
        <span><a href="ListingPage.html">3</a></span>
        <img src="Images/arrow.png" class="right-arrow">
        </div>

        <div class="footer">
            <hr>
            <div class="about-msg">
            <h2>About Us</h2>
            <p>This website is for School Purposes only and it was created by Jefferson Palecso, student of
                Arellano University Juan Sumulong Campus. This website is only imitated from airbnb 
                where they also offer houses, travel guides, and can be booked online.
                It was started on January 24, 2024 and is currently running in this industry 
                to continue to help many people not only in the same country but around the world.</p>
        </div>
            <br>
                <a href="https:facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https:instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https:twitter.com/"><i class="fa-brands fa-twitter"></i></a>
            <br>
            <br>
            <br>
            <p>Copyright © 2024, Staybnb.com</p>
        </div>
    </div>

    <script>
        var navBar = document.getElementById("navBar");
        function togglebtn(){
            navBar.classList.toggle("hidemenu");
        }
    </script>

</body>
</html>