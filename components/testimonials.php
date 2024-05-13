<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/testimonials.css">
    <link rel="stylesheet" href="../style/gen.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Testimonials</title>
</head>
<body>
    <?php include("./header.php"); ?>
        <main>
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