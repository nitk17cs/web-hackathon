<!DOCTYPE html>
<html>
<head>
<title>home</title>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- tab img -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/portfolio/nk.jpg">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Student Dashboard</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
        @media only screen and (max-width: 600px) {
            html, body, nav {
                width: 360px;
            }
        }
    </style>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
    
</head>

<body class="js-focus-visible">
<nav class="navbar navbar-expand-lg" style="background-color: #250352; color: #fff">
    <a class="navbar-brand" href="#">
        <img src="assets/img/portfolio/nk.jpg" width="50px" height="50px"> Static Startup</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <li><a class="smoth-scroll" href="index.php">Logout</a></li>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar"style="width: 100px; height: 600px; background-color: #fff; border-right: 1px solid #f3f3f3">
            <div class="sidebar-sticky">
                <ul class="nav flex-column" style="padding-top: 20px;">
                    <li class="nav-item">
                        <a class="nav-link active" href="" style="text-decoration: none; color:#000000">
                            </i>&nbsp;Project <span class="sr-only"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" style="text-decoration: none; color:#000000">
                           </i>&nbsp;Status
                        </a>
                    </li>

                   
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        
                    </div>

                </div>
            </div>
            <div class="container">
            
                <button class="open-button" onclick="openForm()">Chat</button>

                <div class="chat-popup" id="myForm">
                <form action="/action_page.php" class="form-container">
                    <h1>Chat</h1>

                    <label for="msg"><b>Message</b></label>
                    <textarea placeholder="Type message.." name="msg" required></textarea>

                    <button type="submit" class="btn">Send</button>
                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                </form>
                </div>

                <script>
                function openForm() {
                document.getElementById("myForm").style.display = "block";
                }

                function closeForm() {
                document.getElementById("myForm").style.display = "none";
                }
                </script>
            </div>

        </main>
    </div>
   
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="">
                            Dashboard <span class="sr-only"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            
                        </a>
                    </li>
                   
                </ul>
            </div>
        </nav>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/de5a2d2c68.js" crossorigin="anonymous"></script>

</body>
</html>
