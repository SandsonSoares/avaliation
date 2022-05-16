<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend Mentor | Interactive rating component</title>
    <link rel="shortcut icon" href="./images/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
        div#content {
            position: relative;
        }

        div#image {
            position: absolute;
            top: 50px;
            left: 102px;
        }

        .enunciado {
            box-sizing: border-box;
            padding: 6px 12px 6px 13px;
            width: 188px;
            margin: 160px auto;
            border-radius: 26px;
            background: #262F38;
            /**/
            color: #FC7613;
            box-shadow: 0 0 3px rgba(0, 0, 0, .4);
        }

        div#texto {
            box-sizing: border-box;
            margin: 0;
            position: absolute;
            top: 250px;
            left: 15px;
        }

        div#texto h2 {
            text-align: center;
            margin: 0;
            color: white;
        }

        div#texto p {
            box-sizing: border-box;
            margin: 0;
            padding: 15px;
            color: #89909A;
            font-size: 14px;
        }

        a {
            text-align: center;
            color: white;
            text-decoration: none;
            transition: ease-in-out 777ms;
        }

        a:hover {
            text-decoration: underline;
            color: #FC7613;
        }
    </style>
</head>

<body>
    <section class="principal-body">
        <div id="content">
            <div id="image">
                <img src="./images/illustration-thank-you.svg" alt="Ilustração">
            </div>
            <div class="enunciado">
                You selected <?php $escolha = $_POST["radio"];
                                print $escolha ?> out of 5
            </div>
            <div id="texto">
                <h2>Thank you!</h2>
                <p>We appreciate you taking the time to give a rating. If you ever need more support,
                    don’t hesitate to get in touch!</p>
            </div>

        </div>
        <a href="javascript:history.go(-1)">Back</a>
    </section>

</body>

</html>