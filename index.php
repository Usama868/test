<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
          <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <meta charset="UTF-8">
         <title>Usama's Made</title>
       
       
         <script src="script/script.js" type="text/javascript"></script>
         <script src = "script/jquery-min-js.js"></script>
         <script src = "script/bootstap-min-js.js"></script>
        <link href = "bootstrap/bootstrapCSS.css" rel = "stylesheet">
        <link rel="stylesheet" type="text/css" href="Css/style.css">
        <link rel="stylesheet" type="text/css" href="Css/colors.css">
        <link rel="stylesheet" type="text/css" href="Css/w3.css">
    
    
    
    
    <div class="head img-responsive">
           
            <img src="images/photog1.png" width="150px" height="auto"  style="max-width: 100%">
         
        </div>
    </head>
    <body class="container background" background="images/fabric1.png">
        <div>
            <nav class="navmargin col-md-2">
                <div>
            <ul class="nav nav-tabs nav-pills nav-stacked">
                <li class="active"><a href="index.php" target="_self">Home</a></li>
                <li><a href="about.php" target="_self">About</a></li>
                <li class="dropdown">
                    <a  class="dropdown-toggle" data-toggle="dropdown">
                     Project's 1
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="24-7-19bootstrap.php" target="_blank">24-7-19</a></li>
                        <li><a href="25-7-19.php" target="_blank">25-7-19</a></li>
                        <li><a href="bootstrap.php" target="_blank">Facebook</a></li>
                        <li><a href="facebookmain.php" target="_blank">facebook main</a></li>
                          
                    </ul>
                </li>
                  <li class="dropdown">
                    <a  class="dropdown-toggle" data-toggle="dropdown">
                     php
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="fbmain.php" target="_blank">fbmain</a></li>
                        <li><a href="Php/php.php" target="blank">PHP</a></li>
                        <li><a href="php/testphp.php" target="_self">testphp</a></li>
                        <li><a href="testphp.php" target="blank">file handling</a></li>
                          
                    </ul>
                </li>
            </ul>
        </div>
        </nav>
        </div>
        
           

        <div>
            <form  action="action.php" method="POST"  name="myform" onsubmit="return(validation());">
          
            
            
            <br/>
            
         
            <table align="center"  class="table table-responsive" background="images/fabric.png ">
                
                <tr class="darkcyan">
                
                    <th class="impact" background="images/fabric.png "  rowspan="1" colspan="4"><big>
                        <marquee  hspace="40%" behavior="slide" >
                        
                        Registration - Form</marquee></big></th>
                
                </tr>
                
              
                    
                <tr>
                    <td class="my"> Name:</td>
                    <td> <input class="td" type = " text" name="Name" placeholder="Enter Name here"/></td>
                    
                </tr>
               
                <tr>
                    <td class="my">
                        Father Name :
                    </td>
                    <td>
                        <input  class="td" type="text" name="fname" placeholder="Father name" />
                    </td>
                </tr>
                <tr>
                    <td class="my">
                        User Name :
                    </td>
                    <td class="blue">
                        <input class="td" type="text" name="user_id" placeholder="User name" maxlength="15" />
                    </td>
                <tr>
                    <td class="my">
                        Password :
                    </td>
                    <td>
                        <input class="td" type="password" name="id_password" placeholder="Password" maxlength="20" />
                    </td>
                </tr>
                <tr class="white">
                    <td class="my">
                        Confirm Password :
                    </td>
                    <td>
                        <input class="td" type="password" name="con_password" placeholder="Confirm Password" maxlength="20" />
                    </td>
                </tr>
                <tr class="white">
                    <td class="my">
                        Email :
                    </td>
                    <td>
                        <input class="td" type="text" name="email_id" placeholder="Enter your Email" />
                    </td>
                </tr>
                </tr>
                </tr>
                </tr>
                <tr class="white">
                    <td class="my"> Address:</td>
                    <td> <textarea class="td" cols="50" rows="3" style="color: red" type="text" name="Address" maxlength="40" placeholder="Type your Address"  /></textarea> </td> 
                </tr>
                <tr class="white">
                    <td class="my"> Contact No:</td> <td> <input class="td" type="text" name="contact_no" placeholder="+9212345678910" maxlength="11"  /> </td>
                </tr>
                <tr class="white">
                    <td class="my">
                        Country:
                    </td>
                    <td> <select class="td" id="country"     name="dropdown" >
                            <option value="Select country" >Please select your country</option> 
                            <option value="pakistan">Pakistan</option>
                            <option value="india">India</option>
                            <option value="england">England</option>
                          
                            <option value="australia" s>Australia</option>
                            <option value="africa">AFRICA</option>
                        </select> </td>
                            
                        </select> </td>
                    </td>
                </tr>
                
                <tr class="white">
                    <td class="my"> Gender:</td><td> <select class="td" id="gender" name="dropdown" >
                            <option value="Select gender">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select> </td>  
                   
                
                
                
               
                        
            
                
                        </table> 
            
                       
                        <br/>
                                <div align="center" class="button">
                            
                            <input class="buttoni" type = "submit" name = "submit" value = "Submit" />
                            
                            <input class="buttoni" type="reset" name="Reset" value="Reset"/> 
                            
                            
                        </div>
        </form>
        </div>
        
        <div class="img-responsive" align="center">
             
             <img src="images/copyright.png" class="copyright">
                        </div>
        
        
        
     
        
            
      
       
        
       
       
        
        
       
        
        
        
        
        
        
      
      
    
    </body>
</html>

