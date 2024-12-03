<?php
echo htmlentities('<!DOCTYPE html>');
echo htmlentities('<html lang="en">');
echo htmlentities('');
echo htmlentities('<head>');
echo htmlentities('<title>Veillax Docs</title>');
echo htmlentities('<meta charset="utf-8">');
echo htmlentities('<meta name="description" content="docs">');
echo htmlentities('<meta property="og:title" content="Veillax Docs">');
echo htmlentities('<meta name="viewport" content="width=device-width, initial-scale=1">');
echo htmlentities('</head>');   
echo htmlentities('');
echo htmlentities('<body data-bs-theme="dark">');
echo htmlentities('<div id="navbar-div">');
echo htmlentities('<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">');
echo htmlentities('<div class="container-fluid">');
echo htmlentities('<a class="navbar-brand" href="/" rel="preload"><img alt="Logo"');
echo htmlentities('src="https://raw.githubusercontent.com/Veillax/veillax.github.io/main/img/1683420300-32.ico"></a>');
echo htmlentities('<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"');
echo htmlentities('aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">');
echo htmlentities('<span class="navbar-toggler-icon"></span>');
echo htmlentities('</button>');
echo htmlentities('<div class="collapse navbar-collapse" id="navbarColor01">');
echo htmlentities('<ul class="navbar-nav me-auto">');
echo htmlentities('<li class="nav-item">');
echo htmlentities('<a class="nav-link" href="https://www.veillax.com" rel="preload">Home');
echo htmlentities('</a>');
echo htmlentities('</li>');
echo htmlentities('<li class="nav-item">');
echo htmlentities('<a class="nav-link" href="https://docs.veillax.com" rel="preload">Docs</a>');
echo htmlentities('</li>');
echo htmlentities('<li class="nav-item">');
echo htmlentities('<a class="nav-link" href="https://www.veillax.com/mc" rel="preload">Minecraft');
echo htmlentities('Tools</a>');
echo htmlentities('</li>');
echo htmlentities('');
echo htmlentities('<li class="nav-item">');
echo htmlentities('<a class="nav-link" href="about.html" rel="preload">About</a>');
echo htmlentities('</li>');
echo htmlentities('</ul>');
echo htmlentities('</div>');
echo htmlentities('</div>');
echo htmlentities('</nav>');
echo htmlentities('</div>');
echo htmlentities('<div id="contents" class="container align-items-center justify-content-center">');
echo htmlentities('<br>');
echo htmlentities('<center>');
echo htmlentities('<h1>3D Printing</h1>');
echo htmlentities('<h3>Service - Shipping</h3>');
echo htmlentities('<p>Thank you for choosing the 3D Printing service! To continue, please complete the form below</p>');
echo htmlentities('<hr>');
echo htmlentities('</center>');
echo htmlentities('<form>');
echo htmlentities('<div>');
echo htmlentities('<label for="email" class="form-label mt-4">Information</label>');
echo htmlentities('<input type="email" class="form-control" id="email" aria-describedby="emailHelp"');
echo htmlentities('placeholder="Enter email">');
echo htmlentities('<input type="text" class="form-control" id="firstName" aria-describedby="firstNameHelp"');
echo htmlentities('placeholder="Enter first name">');
echo htmlentities('<input type="text" class="form-control" id="lastName" aria-describedby="lastNameHelp"');
echo htmlentities('placeholder="Enter last name">');
echo htmlentities('<small id="emailHelp" class="form-text text-muted">We\'ll never share your information with anyone');
echo htmlentities('else.</small>');
echo htmlentities('</div>');
echo htmlentities('<div>');
echo htmlentities('<label for="formFile" class="form-label mt-4">.STL file</label>');
echo htmlentities('<input class="form-control" type="file" id="formFile">');
echo htmlentities('</div>');
echo htmlentities('<fieldset>');
echo htmlentities('<legend class="mt-4">Supports</legend>');
echo htmlentities('<div class="form-check form-switch">');
echo htmlentities('<input class="form-check-input" type="checkbox" id="enable-supports">');
echo htmlentities('<label class="form-check-label" for="enable-supports">Enable supports?</label>');
echo htmlentities('</div>');
echo htmlentities('<div id="supports-radio" style="margin-left: 10px;"></div>');
echo htmlentities('</fieldset>');
echo htmlentities('<fieldset>');
echo htmlentities('<legend class="mt-4">Infill</legend>');
echo htmlentities('<div class="form-check">');
echo htmlentities('<input class="form-check-input" type="radio" name="infill" id="15-percent" value="infill.15"');
echo htmlentities('checked="">');
echo htmlentities('<label class="form-check-label" for="15-percent">');
echo htmlentities('15%');
echo htmlentities('</label>');
echo htmlentities('</div>');
echo htmlentities('<div class="form-check">');
echo htmlentities('<input class="form-check-input" type="radio" name="infill" id="30-percent" value="infill.30">');
echo htmlentities('<label class="form-check-label" for="30-percent">');
echo htmlentities('30%');
echo htmlentities('</label>');
echo htmlentities('</div>');
echo htmlentities('<div class="form-check">');
echo htmlentities('<input class="form-check-input" type="radio" name="infill" id="50-percent" value="infill.50">');
echo htmlentities('<label class="form-check-label" for="50-percent">');
echo htmlentities('50%');
echo htmlentities('</label>');
echo htmlentities('</div>');
echo htmlentities('</fieldset>');
echo htmlentities('<fieldset>');
echo htmlentities('<legend class="mt-4">Bed Adhesion</legend>');
echo htmlentities('<div class="form-check">');
echo htmlentities('<input class="form-check-input" type="radio" name="adhesion" id="none" value="adhesion.none"');
echo htmlentities('checked="">');
echo htmlentities('<label class="form-check-label" for="none">');
echo htmlentities('None');
echo htmlentities('</label>');
echo htmlentities('</div>');
echo htmlentities('<div class="form-check">');
echo htmlentities('<input class="form-check-input" type="radio" name="adhesion" id="brim" value="adhesion.brim">');
echo htmlentities('<label class="form-check-label" for="brim">');
echo htmlentities('Brim - two-layer platform to help model with bed adhesion');
echo htmlentities('</label>');
echo htmlentities('</div>');
echo htmlentities('<div class="form-check">');
echo htmlentities('<input class="form-check-input" type="radio" name="adhesion" id="raft" value="adhesion.raft">');
echo htmlentities('<label class="form-check-label" for="raft">');
echo htmlentities('Raft - 10-layer platform to lifr model and help with bed adhesion');
echo htmlentities('</label>');
echo htmlentities('</div>');
echo htmlentities('</fieldset>');
echo htmlentities('<br>');
echo htmlentities('<button type="submit" class="btn btn-primary">Submit</button>');
echo htmlentities('</form>');
echo htmlentities('</div>');
echo htmlentities('<script type="text/javascript" src="https://www.veillax.com/js/inject.js"></script>');
echo htmlentities('<script type="text/javascript" src="js/3d.js"></script>');
echo htmlentities('<div id="footer-div"></div>');
echo htmlentities('<script type="text/javascript" src="https://www.veillax.com/js/inject.js"></script>');
echo htmlentities('</body>');
echo htmlentities('');
echo htmlentities('</html>');
?>