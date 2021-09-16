<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-BDEVLCQ6TF"></script>
            <script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag('js', new Date());
                  gtag('config', 'G-BDEVLCQ6TF');
            </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= esc($title)?> </title>
        <meta name="description" content="<?= esc($description)?>">
        <meta property="og:title" content="<?= esc($title)?>" />
        <meta property="og:site_name" content="GovtIndJobs" />
        <meta property="og:description" content="<?= esc($description)?>" />
        <meta property="og:url" content="https://www.govtindjobs.com/" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="https://www.govtindjobs.com/images/android-chrome-512x512.png" />
        <meta property="twitter:title" content="<?= esc($title)?>" />
        <meta name="twitter:site" content="@GovtIndJ" />
        <meta property="twitter:creator" content="@GovtIndJ" />
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:description" content="<?= esc($description)?>"/>
        <meta property="twitter:image" content="https://www.govtindjobs.com/images/android-chrome-512x512.png" /> 
        <meta name="p:domain_verify" content="e5b7c9a5a04ceda057b3a1077e8fa496"/>
        <link rel="canonical" href="<?= esc($url)?>" />
   
        
        <link rel="stylesheet" href="/style.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
        <link rel="manifest" href="/images/site.webmanifest">


        <style>
                      .social-icons a:hover
            {
                text-decoration: none;
            }
            .fab {
                padding: 5px;
                font-size: 30px;
                width: 40px;
                text-align: center;
                text-decoration: none;
                margin: 5px 2px;
                border-radius: 5px;
              }
              
              .fab a:hover
              {
                  text-decoration: none;
              }
              
              .fab:hover {
                  opacity: 0.9;
              }
              
              .fa-facebook {
                color: white;
                background: #55ACEE;
              }
              .fa-youtube {
                color: #bb0000;
                background: white;
              }
              .fa-twitter {
                color: white;
                background: #55ACEE;
              }
              .fa-linkedin {
                color: #007bb5;
                background: white;
              }
              .fa-pinterest {
                color: #cb2027;
                background: white;
              }
             
              .fa-whatsapp{
                  color: white;
                  background: forestgreen;
              }
              
            
            .color
            {
                background-color: darkgreen;
                color: black;
                border-radius: 3px;
            }
           
            .container-fluid-left{
              width: 80%;
              float: left;

            }
            .container-fluid-right{
              width: 20%;
              float: right;

            }
            
            
            .border{
                height: 33px;
                background-color: darkgreen;
                border: 2px solid darkgreen;
                border-radius: 3px;
            }   
            .heading{
              padding-top: 3px;
              padding-bottom: 3px;
              border-radius: 3px;
            }  
            .fb-button{
              height: 70px;
              background-color: cadetblue;
          
            }
            .fb-button-left{
              float: left;
              padding-left: 5px;
            }
            
            .fb-like{
              padding-top: 14px;
            }
            .top{
              padding-top: 12px;
            }
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap');
           .bwidth{
               width: 85%;
               margin: auto;
           }
           
           .footer{
             height: 200px;
             padding-top: 60px;
             padding-left: 40px;

           }
           @media(max-width:600px){
               .bwidth{
                   width: 100%;
               }
               .footer{
                 height: 240px;
               }
           }

                   .line-1{
            position: relative;
            top: 50%;  
            width: 24em;
            margin: 0 auto;
            border-right: 2px solid rgba(255,255,255,.75);
            font-size: 180%;
            color: forestgreen;
            font-weight: bolder;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            transform: translateY(-50%);    
        }
        
        
        /* Animation */
        .anim-typewriter{
          animation: typewriter 2s steps(20) 1s 1 normal both,
                     blinkTextCursor 500ms steps(44) infinite normal;
                     animation-iteration-count: infinite;
        }
        @keyframes typewriter{
          from{width: 0;}
          to{width: 9em;}
        }
        @keyframes blinkTextCursor{
          from{border-right-color: rgba(255,255,255,.75);}
          to{border-right-color: black;}
        }
     </style>
    </head>
    <body class="bwidth bg-light">
        <div class="container-fluid pt-3 pb-3">
            <div class="row">
              <div class="col-sm-4 d-sm-block d-none pt-3">
                <p class="line-1 anim-typewriter"><a class="text-decoration-none text-success" href="/" alt="Govt Jobs Exams Vaccancy Recruitment ">GovtIndJobs.com</a></p>
              
              </div>
              <div class="col-sm-8 d-sm-block d-none"><heading><h1 class="text-right"><strong>No. 1 Govt. Job search Platform</strong></h1></heading><p class="text-right text-danger h5">Stay updated</p> </div>
              
              <div class="col-sm-6 d-sm-none pt-2 d-block"><p class="line-1 anim-typewriter"><a class="text-decoration-none text-success" href="/" alt="Govt Jobs Exams Vaccancy Recruitment ">GovtIndJobs.com</a></p></div>
              <div class="col-sm-6 d-sm-none d-block"><heading><h5 class="text-center"><strong>No. 1 Govt. Job search Platform</strong></h5></heading></div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark text-white pl-4 bg-success rounded">
            <a class="navbar-brand fas fa-home" alt="govt ind jobs" href="/"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse pl-3" id="navbarTogglerDemo02">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link" alt ="diploma jobs" href="/">Diploma Jobs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" alt="iti jobs" href="/">ITI Jobs</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" alt="medical jobs" href="/">Medical Jobs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" alt="btech jobs" href="/">BTech Jobs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" alt="10/ +2 jobs" href="/">10/+2 Jobs</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      GK
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" alt="Govt teacher Jobs" href="/gk/science/">Science</a>
                      <a class="dropdown-item" alt="Indian Forest services" href="/gk/history/">History</a>
                      <a class="dropdown-item" alt="Banking Jobs" href="/gk/geography/">Geography</a>
                    </div>
                  </li>
                
              </ul>
              <form class="form-inline my-2 my-lg-0" >
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success text-white my-2 my-sm-0" type="submit">Search</button>
               
              </form>
            </div>
        </nav>
        <div class="container-fluid pt-2 pb-5">
          <div class="row pb-lg-5">