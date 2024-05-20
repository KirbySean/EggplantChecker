<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        footer {
            height: 50px;
            margin-top: 380px;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: red;
            color: white;
            text-align: center;
            background-color: #6CB3FF;
        }
        header {
            background-color: #6CB3FF;
            padding: 30px;
            text-align: none;
            font-size: 35px;
            color: white;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #3870C2;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #23559D;
        }

        .active {
            background-color: #2B60AE;
        }

        .column {
            float: left;
            padding: 10px;
        }

        nav {
            float: left;
            width: 15%;
            height: 800px; 
            background: #6D8DBD;
            padding: 20px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }

        article {
            float: left;
            padding: 100px;
            width: 85%;
            background-color: #DFEAFB;
            height: 800px; /* only for demonstration, should be removed */
        }

/* Clear floats after the columns */
        section::after {
            content: "";
            display: table;
            clear: both;
        }




    </style>
</head>
<body>
    <header>
        <h2>Eggplant Quality Checker™️</h2>
        <h6>For An Easier Management</h6>
    </header>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="/index.php">Database</a></li>
        <li style="float:right"><a class="active" href="#about">About</a></li>
    </ul>
    <section>
  <nav>
    <h5>Begin checking the database by clicking the 'Database' menu.</h5>
  </nav>
  
  <article>
    <h1>Welcome to the Quality Checker Dashboard!</h1>
    <h5>This page shall serve as your main home page where you can check all the database of all the produce.</h5>
    <h5>You can begin checking all the incoming eggplants that the Quality Checker device has recorded by clicking the "Database" menu.</h5>
  </article>
</section>

    <footer>
        <p>CCC151 © 2023-2024</p>
    </footer>
</body>
</html>