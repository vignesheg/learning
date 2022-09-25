<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstr.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>

        iframe{
            height: 81%;
            width: 100%;;
            margin-top: 2px;
        }
        body {
            background-color: blueviolet;
        }

        .container {
            margin-top: 200px;
            border-radius: 10px;
            box-shadow: 0 5px 35px rgba(0,0,0,.2);
            border: 2px solid white;
            background-color: #ffffff;
            max-width: 450px;
            height: 500px;

        }

        .logbt {
            margin-top: 20px;
            border-radius: 15px;
            margin-top: 50px;
            box-shadow: 2px 2px 5px #888888;
            width: 290px;
            margin-left: 70px;
            padding-top: 8px;
            padding-bottom: 10px;
            
        }

        .a {
            padding-left: 50px;
            padding-right: 50px;
        }

        .link {
            text-decoration: none;
            padding-top: 10px;
            padding-bottom: 10px;
            
            
            width: 100px;
            border-radius: 10px;
        }

        .a2{
            padding-left: 30px;
            margin-left: 4px;
            padding-right: 50px;
        }

        .link:hover{
            background-color:#ff56ff;
            color:white;
             box-shadow: 2px 5px 10px rgb(183, 178, 178);
       
        }



    </style>
</head>

<body>
    <div class="container">
        <div class="logbt">
            
                <a class="a link" href="loginform.php" target="iframe">log In</a>
                <a href="#" class="a2 link">Register</a>



        </div>
        <iframe src="" name="iframe"></iframe>
    </div>

</body>

</html>