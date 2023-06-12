<!DOCTYPE html>
<html>
<?php include 'nav.php';?>
    <head>
        <style>
            button
            {
                background-color:palevioletred;
                border: 1px;
                border-color: none;
                border-radius: 10px;
                width:10%;
                padding: 14px 40px;
                margin-top: 2%;
                text-align: center;
            }
            
            .contact
            {   
                /* border:1px solid;
               margin:auto;
                width:50%; */
                text-align: center;
                
            } 
         .con{
            font-size: xx-large;
            color: palevioletred;
        }  

       form input{
        
        margin-left: auto;
        margin-right: auto;
        border:1px;
        border-radius: 10px;
        background-color: #c8d6e5;
        border-color: none;
            width: 20%;
            font-size:larger;
            padding: 10px;
            display: flex;
        }
       form textarea
        {
            resize: vertical;
            margin-left: auto;
        margin-right: auto;
        border:1px;
        border-radius: 10px;
        background-color: #c8d6e5;
        border-color: none;
            width: 20%;
            font-size:x-large;
            padding: 10px;
            display: flex;
        }
        @media  screen and (max-width:768px) {
            button{
                    font-size:xx-small;
                    text-align: center;
                    padding: 5px;
            }
        }
        </style>

    </head>
    <body>
       <div class="contact"> 
        <p class=con>CONTACT US </p>
        <p>Please fill in the details below,submit the form <br>
             and we will process your enquiry as quickly as possible. <br></p>
        
        <form action="condet.php" method="$_POST">
        
            <input type="text" name="Full_name" placeholder="Full Name" required> <br>
            <input type="text" name="Email" placeholder="Email address" required> <br>
            <input type="text" name="Phone" placeholder="Phone Number" pattern="[0-9]{10}" required> <br>
            <textarea placeholder="Message"  name="Message" required></textarea>
             <button> SUBMIT </button>
        </form>
       </div>
    </body>
    <?php include 'footer.php';?>
</html>