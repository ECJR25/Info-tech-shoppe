<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../style/general.css">
    <link rel="stylesheet" href="../style/about.css">
    <link rel="stylesheet" href="../style/testimonials.css">
    <link rel="stylesheet" href="../style/indexx.css">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>About Us</title>
</head>
<body>
    
    <?php include("./header.php"); ?>

    <div class="bg-head">
        <img src="../images/bg3.jpg" alt="">
        <div class="absolute">
            <h2>About Us</h2>
            <div class="flex">
                <div>
                The onederers is a passionate and innovative team<br> that specialize in 
                Developing modern and responsive sites.
                </div>
            </div>
        </div>
    </div>

    <main>
        <div class="center">
            <div class="our-story-div">
                <div class="left-col">
                    <div class="title" style="color:white">CODE ONE IS THE WORLD'S LEADING LIFESTYLE BRAND FOR GAMERS.</div>
                    <h1>ABOUT CODE ONEDERES</h1>
                    <hr>
                </div>

                <div>
                    <p style="color:white">
                        Workspace furniture embodies the intersection of functionality, creativity, 
                        and comfort, weaving together a narrative of productivity and innovation. 
                        <br> <br>
                        The harmonious blend of textures, colors, and materials in furniture 
                        design whispers stories of sophistication and modernity, embracing 
                        contemporary trends while honoring timeless elegance
                    </p>
                </div>
            </div>
        </div>

        <div class="background">

        
        <div class="set-flex">
                <div class="set-div">
                    <div class="work-home" >People behind the site</div>
                    <div class="con">
                        <h1 style="color:darkgoldenrod">TEAM CODE ONE</h1>
                        <div class="img-con">
                            <h1>Lorelee P. Ortega – Project leader</h1>
                            <div class="details"> As the Project Leader, she is looking forward to her new adventure<br> with CodeOnederers with her new team.</div>
                        </div>

                        <div class="img-con">
                            <h1> Elmer P. Caburao – Frontend Developer</h1>
                            <div class="details">Elmer is no longer a new front-end developer in his team. In his<br> last team, which is Tritech he is the one who takes care of the<br> job as a web developer.</div>
                        </div>

                        <div class="img-con">
                            <h1>Ralph Lauren Jose – Backend Developer</h1>
                            <div class="details">Skilled in the key of Back-end Developer. Has experience in doing<br> HTML and CCS.</div>
                        </div>

                        <div class="img-con">
                            <h1>Clyde Marshall Alolor – UI/UX Designer</h1>
                            <div class="details">Clyde has analytical thinking that can solve complex design while<br> considering user technical </div>
                        </div>

                        <div class="img-con">
                            <h1>Bryan Albert C. Pepe – DevOps Engineer</h1>
                            <div class="details">Have a ability to deploy and automate secure cloud environments that<br> support the high availability or business systems and data.</div>
                        </div>

                     
                    </div>  
                </div>
            </div>
            </div>

        <div class="center">
           <div>
                <h1 class="testimonial-h1">Testimonials</h1>
                <div class="testimonial-div">
                <?php
                    $query = "SELECT * FROM tbl_reviews";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    while($data = $result->fetch_assoc())
                    {
                ?>
                    <div class="testimonial-con">
                        <div class="from">From: <?php echo $data["review_name"]; ?></div>
                        <div class="item-name-text">Item: <?php echo $data["review_item_name"]; ?></div>
                        <div class="date">Date: <?php echo $data["review_date"]; ?></div>
                        <div><i class="fa-solid fa-quote-left" style="color: #dee333;"></i></div>
                        <div class="message"><?php echo $data["review_message"]; ?></div>
                    </div>
                <?php } ?>
                </div>
           </div>
        </div>
                    

        

        <div class="center">
            <div class="form-div">
                <div>
                    <div class="title">Write your Testimonial here:</div>
                    <form action="">
                        <div class="con">
                            <label for=""><span>*</span>Name</label>
                            <input type="text" id="name">
                        </div>
                        <div class="con">
                            <label for=""><span>*</span>Item Name</label>
                            <input type="text" id="item-name">
                        </div>
                        <div class="con">
                            <label for=""><span>*</span>Message</label>
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="submit">Submit</button>
                    </form>
                </div>
                <div class="img-con">
                    <img src="../images/bg1.jpg" alt="">
                </div>
            </div>
        </div>

    </main>

    <?php include("./footer.php"); ?>
    <script src="../scripts/testimonial.js"></script>
</body>
</html>