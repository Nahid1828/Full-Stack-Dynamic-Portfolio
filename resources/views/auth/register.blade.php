<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Portfolio Admin</title>
    <style>
        /* General body styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form container */
        form {
            background: #fff;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            width: 350px;
            text-align: center;
        }

        /* Form title */
        form h2 {
            margin-bottom: 30px;
            color: #333;
            font-size: 24px;
        }

        /* Input fields */
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            transition: 0.3s;
            font-size: 16px;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #28a745;
            outline: none;
            box-shadow: 0 0 5px rgba(40,167,69,0.5);
        }

        /* Register button */
        button {
            width: 100%;
            padding: 12px;
            background: #28a745;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #218838;
        }

        /* Responsive */
        @media (max-width: 400px) {
            form {
                width: 90%;
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <form action="{{ route('register')}}" method="POST">
        @csrf
        <h2>Register</h2>
        <input type="text" placeholder="Enter Name" name="name" required>
        <input type="email" placeholder="Enter Email" name="email" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <button>Register</button>
    </form>
</body>
</html>
