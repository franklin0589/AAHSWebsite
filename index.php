<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AAHS Student Gov</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="media/favicon.ico" />
    <link rel="stylesheet" type="text/css" media="screen" href="lib/css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="lib/css/responsiveStyle.css" />
    <link rel="stylesheet" type="text/css" href="lib/css/admin.css">
    <script src="https://www.gstatic.com/firebasejs/5.4.0/firebase.js"></script>
    <script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyB79L1djDDb05wsXBXZgBr-2y111WJwFO0",
        authDomain: "aahswebsite.firebaseapp.com",
        databaseURL: "https://aahswebsite.firebaseio.com",
        projectId: "aahswebsite",
        storageBucket: "aahswebsite.appspot.com",
        messagingSenderId: "1085954050091"
    };
    firebase.initializeApp(config);
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.css" />
    <script src="lib/js/main.js" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
</head>
<body>
    <div id="header">
        <div id="headerTitle">
        <img src="media/School profile.jpg">
        <h1>AAHS Student Gov.</h1>
        <a class="link" href="Admin"><img id="logo" src="media/AAHSlogo.jpeg"></a>
        
    </div>
        <div id="navbar">
            <a class="link" href="Main">Home</a>
            <a class="link" href="Events">Events</a>
            <a class="link" href="Newsletter">Newsletter</a>
            <a class="link" href="Gallery">Gallery</a>
            <a class="link" href="Volunteer">Voluteer</a>
            <a class="link" href="Contact">Advice</a>
        </div>
    </div>
    <div id="main-container">

    </div>
</body>
</html>