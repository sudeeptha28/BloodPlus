<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>blood donation</title>
        <link rel="stylesheet"href="homepage1.css">
    </head>
    <body>
        <script>
            function reg1(){
                window.location.href="registrationform1.php";
            }
            function reg2(){
                window.location.href="registrationform2.php";
            }
            function logout(){
                window.location.href="login.php";
                confirm("Are you sure to logout");
            }
            </script>
        <header id="header">
              <h1 style="color:whitesmoke;font-family:'Times New Roman', Times, serif;font-size: 50px ;">Blood+</h1>  
              <div class="info"style="color: white; margin-left:1300px;padding-bottom:20px;cursor:pointer;"onclick="logout()"> Logout
        </div>
            

        </header>
        <section class="one" id="home">
            <div class="banner">

            </div>

        <div class="content">
                <h1>Donate blood, Be a LifeLine </h1>
                <p> LET'S UNITE</p>
                <P style="text-align:center;color:red"> TO SAVE LIVES</P>
                <p>We are inviting 135 Core people to become Life Savers. Join us in this mission</p>
               
                <div>
                 
                  
                    
                 <button type="button" onclick="reg1()"><span></span> Donate</button>  
                <button type="button" onclick="reg2()"><span></span> Request</button>     

                </div>
        </div>
        </section>

        
        
        
    </body>
</html>