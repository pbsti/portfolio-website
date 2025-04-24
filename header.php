<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php bloginfo('name')?> </title>
    <?php wp_head()?>
</head>
<body <?php body_class()?>>
  <nav class="navbar navbar-expand-lg navigation">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="#about"><p>ABOUT</p></a>
          <a class="nav-link" href="#work"><p>WORK</p></a>
          <a class="nav-link" href="#contact"><p>CONTACT</p></a>
        </div>
      </div>
    </div>
  </nav>
