<!DOCTYPE html>
<html>
    <meta name="viewport" content="width-device-width",initial-scale="1.0"> 
    <title>ADMIN</title>
    <style>
         .box{
             margin: 30px;
             background-color: #c8d6e5;
 
             text-align: center;
             margin-left:550px;
             margin-right:550px;
             margin-top:200px;
             border-radius: 10px;
             padding-bottom: 20px;
             border:4px solid rgb(16, 16, 16)
         }
         h1{
           font-weight: bolder;
           font-family:sans-serif;
         }
         h4{
            color:rgb(9, 9, 9)
         }
         div input{
            font-size: 23px;
            border-radius: 5px;
            /* background-color: blue; */

         }
         button{
            background-color: palevioletred;
            font-size: 23px;
            width: 281px;
            border-radius: 5px;
         }
         @media screen and (max-width:1300px) {
            .box{
             margin-left:200px;
             margin-right:200px;
             margin-top:300px;
            }
         }
    </style>
    <body>
        <div class="box">
            <h1>ADMIN LOGIN</h1>
             <h4>Enter your details to get sign in to your account</h4>
             <input type="email" placeholder="Email-d">
             <br></br>
             <input type="password" placeholder="Password">
             <br></br>
             <button >login</button>
            </div>
    </body>
</html>