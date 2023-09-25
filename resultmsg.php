<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');


        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            border: 0;
            outline: 0;
            text-decoration: none;
            list-style: none;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <!-- STYLING HAS TO BE INLINE OR INTERNAL FOR IT TO WORK -->
    <div class="wrapper">
        <h1>Online Examination System</h1>
        <h3>here are your results!</h3>

        <p style="color: blue;">The total questions answered were: {qa}</p><br>
        <p style="color: green;">The total number of correct answers were: {r}</p><br>
        <p style="color: red;">The total number of wrong answers were: {w}</p><br>
        <p style="color: blue;">Your overall score is: {s}</p>


    </div>
</body>
</html>