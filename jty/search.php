

<?php

include("backsearch.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *{
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
        }
        
        body{
              background-color: rgb(240, 240, 240);
        }
        
        .firest-section{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
          
        }
        
        .outter{
        width: 500px;
        display: flex;
        align-items: center;
        background-color: #fff;
        border-radius: 10px;
        justify-content: space-evenly;
        width: 40%;
        margin-top: 50px;
        }
        .outter:hover{
            box-shadow: 0px 0px 10px  5px #dcdcdc;
            cursor: pointer;
        }
        
        .log{
            max-width: 150px;
         
        }
        .firest-section .logo{
            display: flex;
            align-items: center;
        
        }
        .firest-section .logo img{
           max-width: 100px; 
        
        }
        
        .tikit{
            text-align: center;
        }
        
        #departure{
            background-color: aqua;
            color: blue;
        }
    </style>
</head>

<body>

    <div class="firest-section">
        <div class="outter" onclick="window.location.href = 'indigo-e.php';">
            <div class="lgo">
                <div class="airline-name">
                    <h5>Indi GO</h5>
                    <div class="logo"><img src="https://i.pinimg.com/originals/03/f4/8a/03f48a399a46bf0e00fc279dcc3ba608.png" alt="lgo" >
                        <div class="title">
                        <h2>19:52</h2>
                        <p>Del</p>
                    </div>
                    </div>
                </div>
            </div>

            <div class="time">
                <p>2h 5m</p>
                <p>Non stop</p>
            </div>

         <div class="des-time">
            <h1>01:00</h1>
        <?php echo "$destination";?>

         </div>

         <div class="price">
            <h2>₹3,943</h2>
            <p>Economi</p>
         </div>
              <div class="tikit">
            <p>Tikit</p>
            <?php echo "$Tikit_no";?>
         </div>

        </div>


        <div class="outter"onclick="window.location.href = 'indigo-f.php';">
            <div class="lgo">
                <div class="airline-name">
                    <h5>Indi GO</h5>
                    <div class="logo"><img src="https://i.pinimg.com/originals/03/f4/8a/03f48a399a46bf0e00fc279dcc3ba608.png" alt="lgo">
                        <h2>19:52</h2>
                    </div>
                </div>
            </div>

            <div class="time">
                <p>2h 5m</p>
                <p>Non stop</p>
            </div>

         <div class="des-time">
            <h1>22:00</h1>
            <?php echo "$destination";?>

         </div>

         <div class="price">
            <h2>₹4,499</h2>
            <p>First-class</p>
         </div>

         <div class="tikit">
            <p>Tikit</p>
            <?php echo "$Tikit_no";?>
         </div>
        </div>


    

        <div class="outter"onclick="window.location.href = 'india.php';">
            <div class="lgo">
                <div class="airline-name">
                    <h5>Indi GO</h5>
                    <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWllbI6QQdgR5TX8a6S28JOoD3srnf0eq2YQ&s" alt="lgo">
                        <h2>19:52</h2>
                    </div>
                </div>
            </div>

            <div class="time">
                <p>2h 5m</p>
                <p>Non stop</p>
            </div>

         <div class="des-time">
            <h1>12:30</h1>
            <?php echo "$destination";?>

         </div>

         <div class="price">
            <h2>₹7,863</h2>
            <p>Bisnus-class</p>
         </div>
         <div class="tikit">
            <p>Tikit</p>
            <?php echo "$Tikit_no";?>
         </div>

        </div>

        
        <div class="outter" onclick="window.location.href = 'akash.php';">
            <div class="lgo">
                <div class="airline-name">
                    <h5>Indi GO</h5>
                    <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeCfQJPdJE09j8ZfJXsdEoCE73K4yIjsIPsA&s" alt="lgo">
                        <h2>19:52</h2>
                    </div>
                </div>
            </div>

            <div class="time">
                <p>2h 5m</p>
                <p>Non stop</p>
            </div>

         <div class="des-time">
            <h1>11:00</h1>
            <?php echo "$destination";?>

         </div>

         <div class="price">
            <h2>₹3,863</h2>
            <p>Economi</p>
         </div>
         <div class="tikit">
            <p>Tikit</p>
            <?php echo "$Tikit_no";?>
         </div>
        </div>



        <div class="outter">
            <div class="lgo">
                <div class="airline-name">
                    <h5>Indi GO</h5>
                    <div class="logo"><img src="https://i.pinimg.com/originals/03/f4/8a/03f48a399a46bf0e00fc279dcc3ba608.png" alt="lgo">
                        <h2>19:52</h2>
                    </div>
                </div>
            </div>

            <div class="time">
                <p>2h 5m</p>
                <p>Non stop</p>
            </div>

         <div class="des-time">
            <h1>22:00</h1>
            <?php echo "$destination";?>

         </div>

         <div class="price">
            <h2>₹4,499</h2>
            <p>First-class</p>
         </div>

         <div class="tikit">
            <p>Tikit</p>
            <?php echo "$Tikit_no";?>
         </div>
        </div>


        
        <div class="outter">
            <div class="lgo">
                <div class="airline-name">
                    <h5>Indi GO</h5>
                    <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeCfQJPdJE09j8ZfJXsdEoCE73K4yIjsIPsA&s" alt="lgo">
                        <h2>19:52</h2>
                    </div>
                </div>
            </div>

            <div class="time">
                <p>2h 5m</p>
                <p>Non stop</p>
            </div>

         <div class="des-time">
            <h1>22:00</h1>
            <?php echo "$destination";?>

         </div>

         <div class="price">
            <h2>₹4,499</h2>
            <p>First-class</p>
         </div>

         <div class="tikit">
            <p>Tikit</p>
            <?php echo "$Tikit_no";?>
         </div>
        </div>




        
        <div class="outter">
            <div class="lgo">
                <div class="airline-name">
                    <h5>Indi GO</h5>
                    <div class="logo"><img src="https://i.pinimg.com/originals/03/f4/8a/03f48a399a46bf0e00fc279dcc3ba608.png" alt="lgo">
                        <h2>19:52</h2>
                    </div>
                </div>
            </div>

            <div class="time">
                <p>2h 5m</p>
                <p>Non stop</p>
            </div>

         <div class="des-time">
            <h1>22:00</h1>
            <?php echo "$destination";?>

         </div>

         <div class="price">
            <h2>₹4,499</h2>
            <p>First-class</p>
         </div>

         <div class="tikit">
            <p>Tikit</p>
            <?php echo "$Tikit_no";?>
         </div>
        </div>




        
        <div class="outter">
            <div class="lgo">
                <div class="airline-name">
                    <h5>Indi GO</h5>
                    <div class="logo"><img src="https://i.pinimg.com/originals/03/f4/8a/03f48a399a46bf0e00fc279dcc3ba608.png" alt="lgo">
                        <h2>19:52</h2>
                    </div>
                </div>
            </div>

            <div class="time">
                <p>2h 5m</p>
                <p>Non stop</p>
            </div>

         <div class="des-time">
            <h1>22:00</h1>
            <?php echo "$destination";?>

         </div>

         <div class="price">
            <h2>₹4,499</h2>
            <p>First-class</p>
         </div>

         <div class="tikit">
            <p>Tikit</p>
            <?php echo "$Tikit_no";?>
         </div>
        </div>



        
        <div class="outter">
            <div class="lgo">
                <div class="airline-name">
                    <h5>Indi GO</h5>
                    <div class="logo"><img src="data:image/png;base64,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" alt="lgo">
                        <h2>19:52</h2>
                    </div>
                </div>
            </div>

            <div class="time">
                <p>2h 5m</p>
                <p>Non stop</p>
            </div>

         <div class="des-time">
            <h1>22:00</h1>
            <?php echo "$destination";?>

         </div>

         <div class="price">
            <h2>₹4,499</h2>
            <p>First-class</p>
         </div>

         <div class="tikit">
            <p>Tikit</p>
            <?php echo "$Tikit_no";?>
         </div>
        </div>

        
        <div class="outter">
            <div class="lgo">
                <div class="airline-name">
                    <h5>Indi GO</h5>
                    <div class="logo"><img src="https://i.pinimg.com/originals/03/f4/8a/03f48a399a46bf0e00fc279dcc3ba608.png" alt="lgo">
                        <h2>19:52</h2>
                    </div>
                </div>
            </div>

            <div class="time">
                <p>2h 5m</p>
                <p>Non stop</p>
            </div>

         <div class="des-time">
            <h1>22:00</h1>
            <?php echo "$destination";?>

         </div>

         <div class="price">
            <h2>₹4,499</h2>
            <p>First-class</p>
         </div>

         <div class="tikit">
            <p>Tikit</p>
            <?php echo "$Tikit_no";?>
         </div>
        </div>




    </div>

    

</body>

</html>