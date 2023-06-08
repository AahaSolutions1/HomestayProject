<!DOCTYPE html>
<html>
<?php include 'nav.php'; ?>

<head>
    <style>
        .pr {

            text-align: center;
            justify-content: center;
            font-size: 18px;
        }

        .price {
            text-align: center;
            font-size: xx-large;
            color: palevioletred;
        }

        button {
            background-color: palevioletred;
            border-radius: 4px;
            width: 250px;
        }

        a {
            text-decoration: none;
            color: black;
        }

        hr {
            border-top: 1px solid black;
        }

        .pricebox {
            border: 2px solid;
            border-radius: 5%;
            background-color: #c8d6e5;
            margin: auto;
            width: 30%;
            height: 30%;
            padding: 10px;
            text-align: center;
        }

        @media screen and (max-width:768px) {
            button {
                width: 100px;
            }

            .pr {
                font-size: smaller;
            }

        }
    </style>
</head>

<body>

    <p class="price">OUR PRICES</p>
    <div class="pr">
        We charge for the entire property and not by rooms. <br>
        Our maximum occupancy for the entire property is 6-12 members.
    </div>
    <div class="pricebox">

        <b> Off Peak Season: Rs.8,000/night</b> <br>
        Off peak season <br>
        Rest of the year. <br>
        <hr>
        <b> Peak Season: Rs.12,000/night </b><br>
        Peak Season <br>
        May 01 - June 05 and Dec 15 - Jan 05 <br>
        <button><a href="bookform.php">BOOK NOW</a></button>
    </div>

</body>
<?php include 'footer.php'; ?>

</html>