<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Created By : Ria Setiaji -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <Style>
    html,
    body {
        min-height: 100%;
    }

    body {
        background: linear-gradient(#1dc9f8, #2a0158);
    }

    h1 {
        text-align: center;
        color: white;
    }

    h2 {
        text-align: center;
    }

    img {
        border-radius: 100%;
        border-width: 8px;
        border-style: dotted dotted solid dashed;
        border-color: blueviolet;
        margin-left: 10px;
        margin-top: 10px;
        margin-right: 10px;
    }

    div.container {
        margin-left: 23%;
    }

    div.left {
        background-color: whitesmoke;
        padding: 10px;
        height: fit-content;
        width: fit-content;
        border-radius: 15px;
        float: left;
    }

    div.right {
        background-color: lightcyan;
        padding: 10px;
        padding-bottom: 15px;
        height: fit-content;
        width: fit-content;
        border-radius: 15px;
        float: left;
        margin-left: 10px;
    }

    div.socialmedia {
        background-color: lightcyan;
        padding: 10px;
        padding-bottom: 15px;
        height: fit-content;
        width: fit-content;
        border-radius: 15px;
        float: left;
        margin-left: 10px;
    }

    ul {
        list-style: square;
    }
    </Style>
</head>

<body>
    <h1>Welcome to My Portfolio Website</h1>
    <div class="container">
        <div class="left">
            <img src="foto.jpg" height="150px" alt="Foto Profil">
            <br>
            <h2>Ria Setiaji</h2>
        </div>
        <div class="right">
            <h2 style="text-align: justify;">From : Bootcamp IT Batch 6</h2>
            <h2 style="text-align: justify;">Learn :</h2>
            <H3 style="text-align: justify;">
                <ul>
                    <li>HTML CSS</li>
                    <li>Bootstrap & jQuery</li>
                    <li>Database MySQL</li>
                    <li>PHP Laravel</li>
                    <li>GIT</li>
                </ul>
            </H3>
        </div>
        <div class="socialmedia">
            <h2 style="text-align: justify;">Social Media :</h2>
            <a class="social-media-icon" href="https://www.facebook.com"><span class="fab fa-facebook"></span>&nbsp;
                BlueLotus</a><br>
            <a class="social-media-icon" href="https://www.instagram.com"><span class="fab fa-instagram"></span>&nbsp;
                BlueLotus_07</a><br>
            <a class="social-media-icon" href="https://www.twitter.com"><span class="fab fa-twitter"></span>&nbsp;
                BlueLotus_07</a><br>
            <a class="social-media-icon" href="https://www.pinterest.com"><span class="fab fa-pinterest"></span>&nbsp;
                BlueLotus_07</a>
        </div>
    </div>
</body>

</html>
