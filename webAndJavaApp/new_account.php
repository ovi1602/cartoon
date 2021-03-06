<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/css_style_new_account.css">

  </head>
      <body>
      
      <!-- the jumbotron -->
      
      <div id="cust-jumbotron" class="jumbotron">
         <div class="container">
          <h2 class="text-center">Make a new account&nbsp;<span class="glyphicon glyphicon-user" aria-hidden="true"></span></h2>
              <p class="text-center">
                  Here you can make your new account for  complete full access at all our services!
              </p>
              
        </div>
      </div>
      
      
      <!-- thumbnails -where all the magic happens -->
      
      
      <div class="resize" >
          
          <div class="row">
  <div class=" col-md-8">
    <div class="thumbnail">
      <!--<img src="..." alt="...">-->
      <div class="caption">
        <h2 class="alligning-text">Create account</h2>
        
        <!--starts the slist -->
        <form action="new_account_2.php" method="post">
        <ul   class="list-group">
          <li class="color-cust list-group-item">
              <div class="form-group" style="margin:-20px;">
    <label class="alligning-text" for="exampleInputEmail1"><h3>Email address</h3></label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="newEmail">
  </div>
          </li>
          <li class="color-cust list-group-item">
              <div class="form-group">
    <label class="alligning-text"  for="exampleInputEmail1"><h3>Password</h3></label>
    <input type="password" class="form-control" id="examplePassword1" name="newPwd" placeholder="Password...">
  </div>
          </li>
          <li class="color-cust list-group-item">
              <div class="form-group">
    <label class="alligning-text"  for="exampleInputEmail1"><h3>Confirm password</h3></label>
    <input type="password" class="form-control" id="exampleCpassword1" name="newPwdConf" placeholder="Confirm password...">
  </div>
          </li>
          <div style="text-align:center;">
          <button type="submit" class="btn btn-lg" >Submit</button>
            </div>
        </ul>
        </form>
     <!-- ends the list-->
     
      </div>
    </div>
  </div>
  
  
  <div class=" col-md-4">
  
    <div class="thumbnail">
      <h2>Why recycle?</h2>
        <ul id="rec-ul"class="list-group ">
  <li class="list-group-item"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> &nbsp;&nbsp;  Recycling conserves resources</li>
  <li class="list-group-item"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> &nbsp;&nbsp;  Recycling saves energy</li>
  <li class="list-group-item"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> &nbsp;&nbsp;  Recycling helps protect the environment</li>
  <li class="list-group-item"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> &nbsp;&nbsp;  Recycling reduces landfill</li>
 
</ul>
     
      
    </div>
  </div>
    
    <hr>
       
</div>
         
         
        
          
      </div>
        
      


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
      </body>
</html>