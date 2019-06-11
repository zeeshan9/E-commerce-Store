<!DOCTYPE html>
<html>
<head>
    <title>E-Commerce Store</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">    

</head>
<body>

<div class="container-fluid" id="outer-nav">
        <div class="row-2">
            <div class="col-sm-2 row-1">
            <div class="nav bar-header">
            <img src="../../images/logo.jpg" margin-top="15px" alt="image logo" height="35px">
                <!-- <img class="navbar-brand" src="../images/add.svg" alt="image logo"> -->
        </div>
         </div>
         <div class="col-sm-9 row-1">
        <!-- <form class="navbar-form navbar-left" > -->
        <div class="navbar-form navbar-left" >
        <div class="input-group">
          <input type="text" class="form-control" id="inputsearch" placeholder="Search" name="search" >
          <div class="input-group-btn">
            <button class="btn btn-default" onclick="itemSearch()">
              <i class="glyphicon glyphicon-search" ></i>
            </button>
            </div>
          </div>
</div>
        <!-- </form> -->
        </div>


            <div id="userImage" class="col-sm-1 row-1">
              <img class="" src="../../images/orangecart.png" alt="cart img" style="height: 50px; width: 50px;"> 
            </div>
      </div>
      </div>

      <div class="container-fluid" >
          <div class="row" id="top_row" >
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <div class="inline" style="color: slateblue">
                  <a class="anchor" style="color: #ec830be8;" id="home" onmouseover="mouseover(this)" onmouseout="mouseout(this)">
                  <strong>Home</strong>
                </a>
              </div>
              <div class="inline" >
                  <div class="dropdown">
                      <a  class="anchor" style="color: #ec830be8;" id="category" onmouseover="mouseover(this)" onmouseout="mouseout(this)">
                      <span><strong>Categories</strong></span>
                      </a>
                      <div class="dropdown-content">
                        <?php
                            require_once("../../database/database_connections/Product_TypeClass.php");
                            $product_TypeTabel = new Product_Type();
                            $result = $product_TypeTabel->GetAllRecords();

                            while($row = $result->fetch())
                            {
                                echo "<a href='../../rootfolder2/fiter-all-products.php?id=" . $row["id"] ."'>" . $row["name"] . "</a>";
                             } 
                        ?>
                    
                      </div>
                    </div>
              </div>
              <div class="inline">
                  <div class="dropdown">
                      <a class="anchor" style="color: #ec830be8;" id="deals" onmouseover="mouseover(this)" onmouseout="mouseout(this)">
                      <strong>Brand</strong></a>
                      <div class="dropdown-content">
                      <?php
                            require_once("../../database/database_connections/Product_TypeClass.php");
                            $product_TypeTabel = new Product_Type();
                            $result = $product_TypeTabel->GetAllRecordsFromBrand();

                            while($row = $result->fetch())
                            {
                                echo "<a href='../../rootfolder2/fiter-all-products.php?id=" . $row["id"] ."'>" . $row["name"] . "</a>";
                             } 
                        ?>
                      </div>
                    </div>
              </div>
              <div class="inline" style="color: slateblue">
                  <a class="anchor"  href="fiter-all-products.php" style="color: #ec830be8;" id="todaydeal" onmouseover="mouseover(this)" onmouseout="mouseout(this)">
                  <strong>Today's Deal</strong>
                </a>
              </div>
              
              
              <div class=""></div>
            </div>
            <div class="col-md-1">
              <div class="col-md-1" >
                    <a class="register" href="../../rootfolder2/Signup-Account.html" style="color: #ec830be8;" id="signup" onmouseover="mouseover(this)" onmouseout="mouseout(this)" >
                        <strong>Signup</strong>
                    </a>
                </div>
                <div class="col-md-0" id="register1">
                    <p><a class="register1" style="color: #ec830be8;" id="login" onmouseover="mouseover(this)" onmouseout="mouseout(this)"  data-toggle="modal" data-target="#myModal">
                        <strong>Login</strong>
                </a></p>
                </div>
            </div>
          
           </div> 

            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-sm">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form name="loginModal">
                            <div  class="input-group1">
                                <h5 ><strong>Email</strong></h5>
                              <input id="email2" type="text" class="form-control" name="Email" placeholder="Email">
                            </div>
                            <div class="input-group1">
                                <h5 ><strong>Password</strong></h5>
                              <input id="password2" type="password" class="form-control" name="password" 
                              placeholder="Password">
                              
                            </div>
                           
                        </form>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="loginButton" type="button" class="btn btn-secondary" data-dismiss="modal" >Login</button>

                    </div>

                    <script> 

                        var mail = getCookie("email");
                        if(mail != ""){
                          document.forms["loginModal"]["Email"].value = mail;
                        }

                        function getCookie(cname) {
                          var name = cname + "=";
                          var ca = document.cookie.split(';');
                          for(var i = 0; i < ca.length; i++) {
                            var c = ca[i];
                            while (c.charAt(0) == ' ') {
                              c = c.substring(1);
                            }
                            if (c.indexOf(name) == 0) {
                              return c.substring(name.length, c.length);
                            }
                          }
                          return "";
                        }

                        $(document).ready(function() {
                          $("#loginButton").click(function() {

                              var userMail = $("#brandName").val();
                              var userPass = $("#brandName").val();
                              document.cookie = "email=" + userMail;

                              $("#userImage").load("../../database/controller/validateUser.php", {email: userMail, password: userPass});
            
                          });

                        });
                    </script>
                    
                </div>
                </div>
            
            </div>

            <!-- <script src="ShowSearchProduct.js"></script> -->
            <script>
                  function itemSearch() 
                    {
                        // var result = document.getElementById("inputsearch").value();
                        var result = $("#inputsearch").val();
                        alert("search "+ result);
                        window.location.href ="itemNameCheck.php?name="+result;

                    }
            </script>


     </body>
</html>










