


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <link href = "jqueryUi/jquery-ui-lightness.css" type="text/css" rel = "stylesheet">
        <script src = "jqueryUi/jquery1.10.2-js.js" type="text/javascript"></script>
        <script src = "jqueryUi/jquery-ui-js.js" type="text/javascript"></script>
          <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <title>25-7-19</title>
        <script src = "script/jquery-min-js.js"></script>
        <script src = "script/bootstap-min-js.js"></script>
                  <link href = "bootstrap/bootstrapCSS.css" rel = "stylesheet" type="text/css">
                  <link href = "Css/style.css" rel = "stylesheet" type="text/css">
                  <link rel="stylesheet" type="text/css" href="Css/w3.css">
                  <link rel="stylesheet" type="text/css" href="Css/colors.css">
            <div class="head img-responsive">
           
            <img src="images/photog1.png" width="150px" height="auto"  style="max-width: 100%">
         
        </div>
    
    </head>
    <body class="background container" background="images/fabric1.png">
        
        <nav class="col-md-2 navmargin">
            
            <div class="">
            <ul class="nav nav-tabs nav-stacked nav-pills">
                <li class="active"><a href="index.php" target="_self">Home</a></li>
                <li><a href="about.php" target="_self">About</a></li>
                <li class="dropdown">
                    <a  class="dropdown-toggle" data-toggle="dropdown">
                     Project's 1
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="24-7-19bootstrap.php" target="_blank">24-7-19</a></li>
                        <li><a href="25-7-19.php" target="_blank">25-7-19</a></li>
                        <li><a href="bootstrap.php" target="_self">26-7-19</a></li>
                        <li><a href="#" target="_blank">232131</a></li>
                          
                    </ul>
                </li>
                  <li class="dropdown">
                    <a  class="dropdown-toggle" data-toggle="dropdown">
                     Project's 2
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="24-7-19bootstrap.php" target="_blank">24-7-19</a></li>
                        <li><a href="25-7-19.php" target="blank">25-7-19</a></li>
                        <li><a href="bootstrap.php" target="_self">26-7-19</a></li>
                        <li><a href="#" target="blank">232131</a></li>
                          
                    </ul>
                </li>
            </ul>
        </div>
        </nav>
       
       
        
    
     
      
        <div class="col-md-12">
        <form  class="form-horizontal" role="form">
            
            
            <div class="form-group">
                <label class="col-md-2" for=nName">Name</label>
                <div class="col-md-4">
                    <input name="Name" type="text" id="focusedInput" class="form-control"   placeholder="enter name">
                </div>
                <label class="col-md-2" for="fname">Father Name</label>
                <div class="col-md-4">
                    <input name="fname" type="text" id="focusedInput" class="form-control"  placeholder="enter father name">
                </div>
                <label class="col-md-2" for="contact">Contact</label>
                <div class="col-md-4">
                    <input name="contact_no" type="text" id="focusedInput" class="form-control"  placeholder="enter name">
                </div>
                  <label class="col-md-2" for="cnic">CNIC No</label>
                <div class="col-md-4">
                    <input type="text" id="focusedInput" name="cnic" placeholder="enter cnic no" class="form-control">
                    
                 </div>
                <label class="col-md-2" for="session">Session</label>
                <div class="col-md-4 ">
                   <select class="form-control">
                       
                       <option value="select">Select session</option>
                       <option value="2016">2016</option>
                       <option value="2017">2017</option>
                       <option value="2018">2018</option>
                       <option value="2019">2019</option>
                       <option value="2020">2020</option>
                        </select>
                </div>
                <label class="col-md-2" for="country">Country</label>
                <div class="col-md-4 ">
                    <select class="form-control">
                       
                       <option value="select">Select Country</option>
                       <option value="pakistan">Pakistan</option>
                       <option value="india">India</option>
                       <option value="uk">UK</option>
                       <option value="usa">USA</option>
                       <option value="south africa">South Africa</option>
                        </select>
                </div>
                <label class="col-md-2" for="country">City</label>
                <div class="col-md-4 ">
                    <select class="form-control">
                       
                       <option value="select">Select City</option>
                       <option value="pakistan">Bahawalpur</option>
                       <option value="india">Bahawalnagar</option>
                       <option value="uk">Yazman</option>
                       <option value="usa">Lodhran</option>
                       <option value="south africa">Khairpur </option>
                        </select>
                </div>
              
                
                    <label class="col-md-2">Course's</label>
                    <div class="col-md-4 ">
                        <label class="checkbox-inline checkbox"><input type="checkbox" name="A">MAtric</label>
                    <label class="checkbox-inline checkbox"><input type="checkbox" name="B">B.A</label>
                    <label class="checkbox-inline checkbox"><input type="checkbox" name="C">CS</label>
                    <label class="checkbox-inline checkbox"><input type="checkbox" name="D">Diploma </label>
                </div>
                
           <label class="col-sm-2">Gender </label> 
                
                <div class="col-sm-2">
                    <lable class="radio-inline">
                        <input   type="radio" name="gender" value="Male">
                    MALE
                    </lable>
                    
               
              
                <label class="radio-inline" >
                    <input  type="radio" name="gender" value="Female">
                    Female
                    </label>
                
              
                </div>
                
           
                   
        </div>
            <div class="btn-group btnm">
                <diV>
                 <button type="submit" class="btn btn-primary btnm">Submit   </button>
          
             
      
                    <button type="reset" class="btn btn-primary btn-danger btnm   "> Reset  </button> 
                </div> 
            </div>
        </form> 
       
        </div>
          
          
      
                    
     
             
        <div class="img-responsive" align="center">
             
             <img src="images/copyright.png" class="copyright">
                        </div>
    </body>
</html>
 
