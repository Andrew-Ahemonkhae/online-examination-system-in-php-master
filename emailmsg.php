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

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #43affc;
        }

        .wrapper {
            width: 400px;
            border-radius: 7px;
            background: #fff;
            padding: 1rem;
        }
    </style>
</head>
<body>
    <!-- STYLING HAS TO BE INLINE OR INTERNAL FOR IT TO WORK -->
    <div class="wrapper">
        <h3>Online Examination System</h3>
        <p>Thanks for registering with us!</p>

        <small>Your Email-Id is : {email}</small>
        <small>Your Password is : {password}</small>

    </div>
</body>
</html>