<!DOCTYPE html>
<html>
<?php include 'nav.php'; ?>

<head>
    <title>GALLERY</title>
    <style>
        .photo img {
            transition: transform .3s;
            height: 300px;
            width: 300px;
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .photo img:hover {
            transform: scale(2.5);
        }

        .photo {
            margin-left: 55px;
            margin-right: 10px;
        }

        h1 {
            text-align: center;
            font-weight: bolder;
        }


        @media screen and (max-width:768px) {
            body {
                margin-left: 50px;
            }

            .photo {
                margin-left: 40px;
                margin-right: 30px;
            }
        }

        @media screen and (max-width:375px) {

            .photo {
                margin-left: 0px;
                margin-right: 0px;
            }
        }
    </style>
</head>

<body>
    <h1>GALLERY</h1>
    <div class="photo">
        <img src="images\ac.png">
        <img src="images\home.png">
        <img src="images\home1.png">
        <img src="images\home2.png">
        <img src="images\home3.png">
        <img src="images\food.png">
        <img src="images\kitchen.png">
        <img src="images\bicyle.png">
        <img src="images\family.png">
        <img src="images\airport.png">
    </div>
</body>
<?php include 'footer.php'; ?>

</html>