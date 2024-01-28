<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date with me</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/7292/7292483.png" type="">

    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=r4oxd3cwgpQhhKn3snjkUl38L3TUPpXiK7BO0qRzPA91uxHubly8g5VUAMTbrHgEF0c6nQGCvm02Q2xIh2Of0an5VMpXndFzJc_QrWBk6PZARP4Q_UZSl2v3JU8DkyZqIGAMz0XeSKL5-gmjC45_XQsTpS-Dw4vsITaExXDolqiAoIjGRls6Tsn7FRaEOG4D" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9penp5cHVueWEueHl6OjIwODMvY3BzZXNzNDcwNDE0NDIyMS9kb3dubG9hZD9za2lwZW5jb2RlPTEmZmlsZT0lMmZob21lNyUyZml6enlwdW55JTJmcHVibGljX2h0bWwlMmZ5b3VybWFpbC5odG1s"/><style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
            background-color: #E53F71;
        }

        .wrapper {
            height: 200px;
            width: 300px;
            background-color: #410179;
            position: relative;
            display: flex;
            justify-content: center;
            z-index: 0;
        }

        .lid {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            border-right: 150px solid transparent;
            border-bottom: 100px solid transparent;
            border-left: 150px solid transparent;
            transform-origin: top;
            transition: transform 0.25s linear;
        }

        /* Lid when closed */
        .lid.one {
            border-top: 100px solid #7C5295;
            transform: rotateX(0deg);
            z-index: 3;
            transition-delay: 0.75s;
        }

        /* Lid when opened */
        .lid.two {
            border-top: 100px solid #BCA0DC;
            transform: rotateX(90deg);
            z-index: 1;
            transition-delay: 0.5s;
        }

        .envelope {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            border-top: 100px solid transparent;
            border-right: 150px solid #C4DFF0;
            border-bottom: 100px solid #C4DFF0;
            border-left: 150px solid #a4d4f2;
            z-index: 3;
        }

        .letter {
            position: absolute;
            top: 0;
            width: 80%;
            height: 100%;
            background-color: white;
            border-radius: 15px;
            z-index: 2;
            transition: 0.5s;
        }

        .letter p {
            text-align: center;
            font-size: 15px;
            margin: 15px;
            color: #3B4049;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .letter h1 {
            text-align: center;
            font-size: 20px;
            margin: 10px;
            color: #3B4049;
        }

        .wrapper:hover .lid.one {
            transform: rotateX(90deg);
            transition-delay: 0s;
        }

        .wrapper:hover .lid.two {
            transform: rotateX(180deg);
            transition-delay: 0.25s;
        }

        .wrapper:hover .letter {
            transform: translateY(-80px);
            transition-delay: 0.5s;
        }

        .hearts {
            position: absolute;
            top: 90px;
            left: 0;
            right: 0;
            z-index: 2;
        }

        .heart {
            position: absolute;
            bottom: 0;
            right: 40%;
        }

        .heart:before,
        .heart:after {
            position: absolute;
            content: '';
            left: 50px;
            top: 0;
            width: 50px;
            height: 80px;
            background: #d00000;
            border-radius: 50px 50px 0 0;
            transform: rotate(-45deg);
            transform-origin: 0 100%;
        }

        .heart:after {
            left: 0;
            transform: rotate(45deg);
            transform-origin: 100% 100%;
        }

        .close .heart {
            opacity: 0;
            animation: none;
        }

        .wrapper:hover .a1 {
            left: 20%;
            transform: scale(0.6);
            animation: slideUp 6s linear 3, sideSway 3s ease-in-out 2 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a2 {
            left: 55%;
            transform: scale(1);
            animation: slideUp 5s linear 3, sideSway 4s ease-in-out 2 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a3 {
            left: 10%;
            transform: scale(0.8);
            animation: slideUp 7s linear 3, sideSway 2s ease-in-out 6 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a4 {
            left: 0%;
            transform: scale(0.4);
            animation: slideUp 4s linear 3, sideSway 1s ease-in-out 0 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a5 {
            left: 70%;
            transform: scale(0.2);
            animation: slideUp 7s linear 3, sideSway 4s ease-in-out 6 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a6 {
            left: 60%;
            transform: scale(0.2);
            animation: slideUp 8s linear 3, sideSway 4s ease-in-out 6 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a7 {
            left: 30%;
            transform: scale(0.5);
            animation: slideUp 6s linear 3, sideSway 3s ease-in-out 2 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a8 {
            left: 45%;
            transform: scale(0.3);
            animation: slideUp 5s linear 3, sideSway 2s ease-in-out 4 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a9 {
            left: 20%;
            transform: scale(0.6);
            animation: slideUp 6s linear 3, sideSway 3s ease-in-out 2 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a10 {
            left: 40%;
            transform: scale(0.9);
            animation: slideUp 6s linear 3, sideSway 3s ease-in-out 2 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a11 {
            left: 15%;
            transform: scale(0.7);
            animation: slideUp 5s linear 3, sideSway 2s ease-in-out 4 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a12 {
            left: 25%;
            transform: scale(0.4);
            animation: slideUp 4s linear 3, sideSway 1s ease-in-out 3 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a13 {
            left: 50%;
            transform: scale(0.6);
            animation: slideUp 6s linear 3, sideSway 3s ease-in-out 2 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a14 {
            left: 53%;
            transform: scale(0.8);
            animation: slideUp 5s linear 3, sideSway 2s ease-in-out 4 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a15 {
            left: 24%;
            transform: scale(0.7);
            animation: slideUp 4s linear 3, sideSway 1s ease-in-out 3 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a16 {
            left: 75%;
            transform: scale(0.5);
            animation: slideUp 6s linear 3, sideSway 3s ease-in-out 2 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a17 {
            left: 64%;
            transform: scale(0.6);
            animation: slideUp 5s linear 3, sideSway 4s ease-in-out 4 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a18 {
            left: 72%;
            transform: scale(0.7);
            animation: slideUp 6s linear 3, sideSway 3s ease-in-out 2 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a19 {
            left: 24%;
            transform: scale(0.8);
            animation: slideUp 5s linear 3, sideSway 2s ease-in-out 4 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        .wrapper:hover .a20 {
            left: 60%;
            transform: scale(0.3);
            animation: slideUp 4s linear 3, sideSway 1s ease-in-out 3 alternate;
            animation-fill-mode: forwards;
            animation-delay: 0.7s;
        }

        @keyframes slideUp {
            0% {
                top: 0;
            }
            100% {
                top: -600px;
            }
        }

        @keyframes sideSway {
            0% {
                margin-left: 0px;
            }
            100% {
                margin-left: 50px;
            }
        }

        .human {
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 189px;
            height: 143px;
            align-items: center;
            justify-content: center;
        }

        .human .left-hand,
        .human .right-hand {
            width: 42px;
            height: 11px;
            border: 3px solid #414141;
            border-right: none;
            border-top-left-radius: 15px 8px;
            border-bottom-left-radius: 15px 8px;
            position: absolute;
        }

        .human .left-hand {
            transform: translate(18px, 84px) rotate(31deg);
        }

        .human .right-hand {
            transform: translate(119px, 82px) rotate(142deg);
        }

        .human .face {
            position: absolute;
            width: 83px;
            height: 86px;
            border: 3px solid #414141;
            border-radius: 43px;
            transform: translate(48px, 18px);
        }

        .human .face::after {
            content: "❤";
            font-size: 35px;
            height: 18px;
            width: 16px;
            color: red;
            position: absolute;
            top: 73px;
            left: 20px;
        }

        .human .left-eye,
        .human .right-eye {
            position: absolute;
            width: 8px;
            height: 8px;
            background: #414141;
            border-bottom: 2px solid #999;
            border-radius: 100%;
            animation: 6s blink linear infinite;
        }

        .human .left-eye::before,
        .human .right-eye::before {
            content: "";
            position: absolute;
            left: 4px;
            top: 2px;
            width: 2px;
            height: 2px;
            border-radius: 2px;
            background-color: white;
        }

        .human .left-eye {
            top: 31px;
            left: 15px;
        }

        .human .right-eye {
            top: 28px;
            left: 52px;
        }

        .human .nose {
            position: absolute;
            top: 35px;
            left: 33px;
            width: 5px;
            height: 6px;
            border-radius: 100%;
            border: 3px solid #414141;
            border-top-color: transparent;
        }

        .clicked .lid.one {
            transform: rotateX(90deg);
            transition-delay: 0s;
        }

        .clicked .lid.two {
            transform: rotateX(180deg);
            transition-delay: 0.25s;
        }

        .clicked .letter {
            transform: translateY(-80px);
            transition-delay: 0.5s;
        }

        .button-container {
            position: fixed;
            bottom: 150px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
        }

        .button {
            padding: 10px 20px;
            background-color: #fff;
            color: #000;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Hover effect */
        .button:hover {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="lid one"></div>
        <div class="lid two"></div>
        <div class="envelope" onclick="openEnvelope()"></div>
        <div class="letter">
            <p>Let's go on date with me!!</p>
            <div class="human">
                <div class="left-hand"></div>
                <div class="right-hand"></div>
                <div class="face">
                    <div class="left-eye"></div>
                    <div class="right-eye"></div>
                    <div class="nose"></div>
                </div>
            </div>
        </div>
        <div class="hearts">
            <div class="heart a1"></div>
            <div class="heart a2"></div>
            <div class="heart a3"></div>
            <div class="heart a4"></div>
            <div class="heart a5"></div>
            <div class="heart a6"></div>
            <div class="heart a7"></div>
            <div class="heart a8"></div>
            <div class="heart a9"></div>
            <div class="heart a10"></div>
            <div class="heart a11"></div>
            <div class="heart a12"></div>
            <div class="heart a13"></div>
            <div class="heart a14"></div>
            <div class="heart a15"></div>
            <div class="heart a16"></div>
            <div class="heart a17"></div>
            <div class="heart a18"></div>
            <div class="heart a19"></div>
            <div class="heart a20"></div>
        </div>
    </div>

    <div class="button-container">
        <a href="http://tinyurl.com/bdhebxmb" class="button">Our Tentative</a>
    </div>
    
    <script>
        let isClicked = false;

        function openEnvelope() {
            if (!isClicked) {
                document.querySelector('.wrapper').classList.add('clicked');
                isClicked = true;
            }
        }
    </script>
</body>

</html>