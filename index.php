<!--
Author: Ashish Patel
Full Stack Web Developer & MCA Student
National Institute of Technology, Agartala

Mockup Generator app for software developer challenge as aspiring intern at AppLaunchpad.

Template from my github account - https://github.com/ashishpatelcs/boilerplate
-->

<!doctype html>

<!-- HTML tag -->
<html lang="en">

    <!-- Let's get started -->
    <head>

        <!-- Document settings and metadata -->
        <title>Mockup Generator - Software Developer Challenge @ AppLaunchpad</title>
        <meta charset="UTF-8" />
        <meta name="description" content="Mockup Generator app for software developer challenge as aspiring intern at AppLaunchpad." />
        <meta name="author" content="Ashish Patel" />
        <meta name="designer" content="Ashish Patel" />
        <meta name="rating" content="" />
        <meta name="keywords" content="applaunchpad, software developer challenge, mockup generator" />

        <!-- iOS, Android and Windows stuff -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=yes" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="msapplication-TileImage" content="" />
        <meta name="msapplication-TileColor" content="" />

        <!-- Robots and Viewport -->
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- OpenGraph for Facebook -->
        <meta property="og:type" content="" />
        <meta property="og:title" content="" />
        <meta property="og:url" content="" />
        <meta property="og:description" content="" />
        <meta property="og:image" content="" />
        <meta property="og:locale" content="" />

        <!-- Twitter Card -->
        <meta property="twitter:card" content="" />
        <meta property="twitter:site" content="" />
        <meta property="twitter:title" content="" />
        <meta property="twitter:description" content="" />
        <meta property="twitter:image" content="" />

        <!-- Icons -->
        <link rel="icon" href="" />
        <link rel="icon" sizes="196x196" href="" />
        <link rel="apple-touch-icon" href="" />

        <!-- Prerendering and Prefetching -->
        <link rel="prerender" href="" />
        <link rel="prefetch" href="" />
        <link rel="dns-prefetch" href="" />

        <!-- Miscellaneous and SEO stuff -->
        <link rel="author" href="humans.txt" />
        <link rel="canonical" href="" />
        <link rel="sitemap" href="" />
        <link rel="next" href="" />
        <link rel="prev" href="" />

        <!-- Stylesheets go here (all the css and js files can be minified and compressed in actual production server :) -->
        <link rel="stylesheet" href="custom.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/basics/1.2.2/basics.css" />

        <!-- Header scripts go here -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>

    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
           <img src="https://d3nm0oeg13p33h.cloudfront.net/assets/website/logo_white.png" class="nav-brandlogo"/>
            </a>    </div>
            <div class="collapse navbar-collapse" id="main-nav-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="/about">About</a></li>
                <li><a href="/">Github</a></li>
                <li><a href="/">LinkedIn</a></li>
                <li><a href="/">Facebook</a></li>
              </ul>
            </div> <!-- /.navbar-collapse -->
          </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                <span id="fileselector">
                <label class="btn btn-success btn-lg btn-block" for="upload-file-selector">
                    <input id="upload-file-selector" type="file">
                    <i class="fa fa_icon icon-upload-alt margin-correction"></i>Upload Image
                </label>
                </span>
                <a id="dl" download="Canvas.jpeg" href="#" class="btn btn-danger btn-lg btn-block">
                    Download Image
                </a>
                </div>
                <div class="col-md-9">
                    <h1>Mockup Generator</h1>
                    <canvas id="mainCanvas" width="850" height="650" style="width:100%;height:auto;"></canvas>
                </div>
            </div>
        </div>

        <!-- Footer scripts go here -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/retina.js/1.3.0/retina.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
        <script>
            /*$(document).ready(function() {
                var canvas = document.getElementById("mainCanvas");
                var ctx = canvas.getContext("2d");
                var background = new Image();
                var photo = new Image();
                //ctx.drawImage(background,10,10); 
                //ctx.drawImage(photo,258,283, 385, 238);
                background.src = "background.png";
                background.onload = function() {
                    ctx.drawImage(background, 0, 0);
                    photo.src = "a.gif";
                }
                photo.onload = function() {
                    ctx.drawImage(photo, 247, 272, 385, 238);
                }
            });*/
            
            var canvas = document.getElementById('mainCanvas'),
            ctx = canvas.getContext('2d');
            
            function doCanvas() {
                var background = new Image();
                var photo = new Image();
                //ctx.drawImage(background,10,10); 
                //ctx.drawImage(photo,258,283, 385, 238);
                background.src = "background.png";
                background.onload = function() {
                    ctx.drawImage(background, 0, 0);
                    photo.src = "a.gif";
                }
                photo.onload = function() {
                    ctx.drawImage(photo, 247, 272, 385, 238);
                }
            }
            
            function download() {
            var dt = canvas.toDataURL();
            this.href = dt; //this may not work in the future..
            }
            document.getElementById('dl').addEventListener('click', download, false);
            
            doCanvas();
            
        </script>

    </body>
</html>