<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View staff</title>
        <link rel="stylesheet" href="css/global.css" type="text/css" />

        <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 620px)" />

        <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 621px)" />

        
    </head>
    <body>

        <div class="">

            <div class="navbarContainer">
                <?php
                    include("php/includes/navbar.php");
                ?>
            </div>

            <div class="header">
                <?php
                    include("php/includes/header.php");
                ?>
            </div>

            <div class="container pb-5">
                <h2></h2><br>
            </div>

            <!-- I used the styling for the table here as i struggled to do so in css -->
            <style>
            table, th, td{
                border: 1px solid black;
            }
            </style>

            <table class="staffSchedule">
                
                <thead class="Schedule">
                    <th><br>Times</th>
                    <th><br>Monday</th>
                    <th><br>Tuesday</th>
                    <th><br>Wednesday</th>
                    <th><br>Thursday</th>
                    <th><br>Friday</th>
                </thead>
                <tr>
                    
                    <tr><td><br>9:00</td>
                    <!-- Monday -->
                    <td>Jack Bell<br>Injured knee</td>
                    <!-- Tuesday -->
                    <td> </td>
                    <!-- Wednesday -->
                    <td> </td>
                    <!-- Thursday -->
                    <td> </td>
                    <!-- Friday -->
                    <td> </td></tr>

                    <td><br>10:00</td>
                    <td> </td>
                    <td>Millie Sanchez<br>Constant headaches</td>
                    <td> </td>
                    <td> </td>
                    <td> </td></tr>

                    <tr><td><br>11:00</td>
                    <td> </td>
                    <td> </td>
                    <td>Ellie Hover<br>Sudden loss of sight</td>
                    <td> </td>
                    <td> </td></tr>

                    <tr><td><br>12:00</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>Sophie Carter<br>Temples hurting</td>
                    <td> </td></tr>

                    <tr><td><br>13:00</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>Helen Crind<br>Morning sickness</td></tr>

                    <tr><td><br>14:00</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td></tr>

                    <tr><td><Br>15:00</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td></tr>
                    
                    <tr><td><br>16:00</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td></tr>

                    
                </tr>
                

                    
            </table>




            
            
    
        <div class="footer">
            <?php
                include("php/includes/footer.php");
            ?>
        </div>
        
        <!-- scroll to top button -->
        <script>
        // Get button
        let mybutton = document.getElementById("myBtn");
        
        // When the user scrolls down by 20px from the top of the page, show 'scroll back to top' button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }
        
        // When user clicks on 'scroll back to top' button, scroll to top of the webpage
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
        </script>
        
    </body>
</html>



