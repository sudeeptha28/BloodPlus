
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="registrationform1.css">

        <title>Registartion Form</title>
    </head>
    <body>
    <script>
        function btnclick(){
            window.location.href="homepage1.php" ; 
            }
     </script>
        <div class="container">
            <header>Registration for Blood Donation</header>

            <form action="register1.php" method="post" >
                <div class="form first">
                    <div class="details personal">
                        <span class="title">Personal Details</span>
                        
                        <div class="fields">
                            <div class="input-field">
                                <label >Full Name</label>
                                <input type="text"placeholder="Enter your name"name="name"required>

                            </div>
                            <div class="input-field">
                                <label >Age</label>
                                <input type="number"placeholder="Enter your age"name="dob"required>

                            </div>
                            <div class="input-field">
                                <label >email</label>
                                <input type="email"placeholder="Enter your email"name="mail"required>

                            </div>
                            
                            <div class="input-field">
                                <label > Mobile Number</label>
                                <input type="tel" pattern="[0-9]{10}"placeholder="Enter mobile number"name="number"required>
    
                            </div>
                            <div class="input-field">
                                <label >gender</label>
                                
                                <select name="gender" id="gender" style="height: 40px;border-radius: 5px; box-shadow: 0 3px 6px rgba(0,0,0,0.13);">
                                    <option value="*"></option>
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                    <option value="o">Other</option>
                                    
                                </select>
                            </div>
                            
                            <div class="input-field">
                                <label >occupation</label>
                                <input type="text"placeholder="Enter your occupation"name="occupation"required>
    
                             </div>
                             <div class="input-field">
                                <label >address</label>
                                <input type="text"placeholder="Enter your full address"name="address"required>
        
                            </div>
                           
                            <div class="input-field">
                                <label >location</label>
                                <input type="text"placeholder="enter your exact location"name="location"required>
        
                            </div>
                            <div class="input-field">
                                <label >Pincode</label>
                                <input type="text"placeholder="enter Pincode of your location"name="pin"required>
        
                            </div>
                    </div>        
                    
                    <div class="blood details">
                        <span class="title">blood Details</span>
                            <div class="fields">
                            
                            <div class="input-field">
                                <label >Blood group</label>
                                <input type="text" size="53" placeholder="enter your blood group"name="blood"required>
    
                            </div>
                            <div class="input-field">
                            <label>Have you ever tested positive for HIV?</label>
                                
                                <select name="yesno" id="yesno"style="height: 40px;border-radius: 5px; box-shadow: 0 3px 6px rgba(0,0,0,0.13);">
                                    <option value="*"></option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
    
                            </div>   
                                
                            <div class="input-field">
                                <label >Last donation Date:</label>
                                <input type="text"placeholder="Enter year" name="LDdate">
                            </div>
                    </div>
                         <button class="backBtn"name="bkbtn" onclick="btnclick()">Back</button>
                         <button class="nextBtn"name="nbtn">Next</button>
                    </div>
                    
                        
                    
                </div>


            </form>
        </div>

    </body>
</html>
