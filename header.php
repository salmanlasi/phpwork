<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<!-- all links -->
	<link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- second google font links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
</head>

<style>
    
    .custom-navbar {
    background-color: #ff1493; /* Dark pink background */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.custom-navbar .navbar-brand {
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
}

.custom-navbar .nav-link {
    color: white;
    font-size: 1.1rem;
    padding: 10px 15px;
    transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out;
}

.custom-navbar .nav-link:hover {
    color: #ff69b4; /* Lighter pink for hover */
    background-color: rgba(255, 255, 255, 0.1); /* Slight background change on hover */
    border-radius: 4px;
}

.custom-navbar .nav-item.active .nav-link {
    color: #ff69b4; /* Lighter pink for active link */
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 4px;
}

.custom-navbar .dropdown-menu {
    background-color: #ff69b4; /* Light pink for dropdown */
    border-radius: 5px;
}

.custom-navbar .dropdown-item {
    color: white;
    padding: 10px;
    transition: background-color 0.3s ease;
}

.custom-navbar .dropdown-item:hover {
    background-color: #ff1493; /* Dark pink on hover */
    color: white;
}

.custom-navbar .navbar-toggler-icon {
    background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"%3E%3Cpath stroke="rgba%28255,255,255,0.5%29" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');
}

.custom-navbar .navbar-toggler {
    border: none;
    outline: none;
}

.custom-navbar .navbar-toggler:hover {
    background-color: #ff69b4; /* Light pink on hover for toggle button */
}


</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
  <a class="navbar-brand" href="#">Frenzy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">HomePage <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">AboutPage</a>
      </li>
    </ul>
  </div>
</nav>
