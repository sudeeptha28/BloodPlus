<!DOCTYPE html>
<html>
    <style>
        form{
            margin: 0px,auto;
            width:700px;
            padding:20px;
            display:block;
            color:black;
            box-sizing: border-box;
            word-wrap: break-word;
            font-family: 'Times New Roman', Times, serif;
            border-radius:20px;
            box-shadow: rgba(0,0,0,0.8)0 0 10px;
            background-color: rgb(255, 255, 255);
            margin-left: 400px;
            justify-content:center;
        }
        .button:hover{
            background-color:rgb(240, 130, 130);
            cursor:pointer;

        }
        p{
            font-weight: bolder;
        }
        .input-field{
            outline:none;
            font-size: 14px;
            font-weight: 400;
            color: #333;
            border-radius: 5px;
            padding: 1px solid#aaa;
            padding: 0 15px;
            height: 35px;
            margin: 8px 0;
        } 
        .button{
            height: 40px;
            width:100px;
            font-weight: bolder;
            border-radius: 10px;
        }  
        
    </style>
    <body style="background-color:rgb(199, 48, 48);">
        <form action="display.php" method="post">
            <h1 style="text-align: center;color: black; ">Registration for Blood Request</h1>
            <h2>Personal Details</h2>
            <p>
                Name:<br/>
                <input type="text"size="65"class="input-field"name="name"required placeholder="Enter your name"/>
            </p>
            
            <p>
                email:<br/>
                <input type="email"size="65"class="input-field"name="mail"required placeholder="Enter your email"/>
            </p>
            <p>
                Mobile Number:<br/>
                <input type="tel"size="65"class="input-field"name="mob"pattern="[0-9]{10px}"placeholder="Enter your Mobile number"/>
            </p>
            <p>
                Gender:<br/>
                <select name="gender"id="gender" style="height: 40px;width:530px;border-radius: 5px; box-shadow: 0 3px 6px rgba(0,0,0,0.13);">
                                    <option value="*"></option>
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                    <option value="o">Other</option>
                                    
                                </select>
            </p>
            <p>
                blood group:<br/>
                <input type="text"size="65"class="input-field"name="blood"required placeholder="Enter blood group you want to request"/>
            </p>
            
            <p>
                location:<br/>
                <input type="text"size="65"class="input-field"name="location"required placeholder="Enter your adress"/>
            </p>
            <input type="submit"class="button"/>
            <input type="reset"class="button"/>


        </form>
    </body>
</html>