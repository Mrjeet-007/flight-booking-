<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js">
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        .tikit-section {
            justify-content: center;
            padding: 50px;
            flex-wrap: wrap;
        }

        .tikit-outter {
            width: 100%;
            background-color: #fff;
            border-radius: 35px;
            font-family: "Roboto", sans-serif;

        }

        .desti {
            padding: 30px;


        }

        .desti i {
            font-size: 17px;
            font-style: normal;
            padding: 0 10px 0px 10px;


        }

        .desti h4 {
            font-family: "Roboto", sans-serif;
            display: flex;
        }

        .desti p {
            margin-left: 15px;
            color: darkgray;
            font-family: "Roboto", sans-serif;
        }

        .traval {
            max-width: 350px;
            margin-left: 30px;
        }

        .traval .traval-logo {
            max-width: 300px;
            display: flex;
            align-items: center;
        }

        .traval .traval-logo img {
            max-width: 70px;
        }

        .trevalouter {
            display: flex;

            

        }

        .treval-inner {
            width: 50%;
            display: flex;
        padding: 15px 50px 30px 45px;

        
        }
        .traval-center{
            align-items: end;
            justify-content: center;
            padding: 50px;
        }
        .traval-center p{
            border-bottom: 1px solid gray;
            padding: 0 0 10px 0;
        }

        .main-bag{
            width: 600px;
            display: flex;
            justify-content:space-between ;
        }
        .save{
            padding: 15px;
            background-color: blue;
            color: #fff;
            width: 150px;
            border-radius: 15px;
            text-align: center;
margin-left: 80px;
cursor: pointer;
        }
        .save a{
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>

<body onload = "autoClick();">
<div id = "htmlContent">
                   
    <div class="tikit-section">
        <div class="tikit-outter">
            <div class="desti">

                <h1> <?php echo $_SESSION['departure']; ?> <i class="fa fa-arrow-right"></i>
                    <?php echo $_SESSION['destination']; ?> </h1>
                <h4> <?php echo $_SESSION['date']; ?>
                    <p> Non-stippe 2h 20m Economi </p>
                </h4>
            </div>
            <div class="traval">
                <div class="traval-logo">
                    <img src="https://i.pinimg.com/originals/03/f4/8a/03f48a399a46bf0e00fc279dcc3ba608.png" alt="logo">
                    <h3>Indi-go</h3>
                </div>
            </div>


            <div class="trevalouter">
                <div class="treval-inner">
                    <div class="travl-left">
                        <?php echo $_SESSION['date']; ?>
                        <h1>16:00</h1>
                        <h5><?php echo $_SESSION['departure']; ?></h5>
                        <p>adani airport</p>

                    </div>
                    <div class="traval-center"><p>2h 20m</p></div>
                    <div class="traval-right">

                        <?php echo $_SESSION['date']; ?>
                        <h1>16:00</h1>
                        <h5><?php echo $_SESSION['destination']; ?></h5>
                        <p>adani airport</p>

                    </div>
                  </div>
          
                  <div class="main-bag">
                    <div class="BAG">
                        <h4>Baggage</h4>
                        <p>Pre Traveller</p>
                    </div>

                    <div class="BAG">
                        <h4>Cabin</h4>
                        <p>7 kg (1 piece pre pax)</p>
                    </div>

                    <div class="BAG">
                        <h4>Chekin</h4>
                        <p>15kg (1 piece pre pax)</p>
                    </div>
                </div>

            </div>
         
        </div>

    </div>
            </div>
        </div>
    </div>
    </div>
    <div class="save"><a id="download">Download</a></div>

    <script type="text/javascript">
      function autoClick(){
        $("#download").click();
      }

      $(document).ready(function(){
        var element = $("#htmlContent");

        $("#download").on('click', function(){

          html2canvas(element, {
            onrendered: function(canvas) {
              var imageData = canvas.toDataURL("image/jpg");
              var newData = imageData.replace(/^data:image\/jpg/, "data:application/octet-stream");
              $("#download").attr("download", "image.jpg").attr("href", newData);
            }
          });

        });
      });
    </script>
    
</body>

</html>