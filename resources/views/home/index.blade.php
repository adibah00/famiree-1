<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>HOMEPAGE</title>
    </head>

    <style>

        *{
            padding: 0;
            margin: 0;
        }

        .wrapper{
            background: url(bg.jpg) no-repeat;
            background-size: cover;
            background-attachment: fixed;
            height: 100vh;
        }

        .wrapper .welcome-sign {
            background-color: rgba(81, 4, 0, 0.7);
            -webkit-backdrop-filter: sepia(100%);
            backdrop-filter: sepia(100%);
            padding: 20px;
            margin: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: sans-serif;
            user-select: none;
        }

        .welcome-sign h1 {
            font-size: 180px;
            color: #FFF3C6;
            font-weight: bold;
            width: 1000px;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .navbar ul li{
            margin: 0 8px;
        }

        .navbar ul li a{
            text-decoration: none;
            color: #FFFDD0;
            padding: 6px 13px;
            transition: .4s;
        }

        .navbar ul li a.active,
        .navbar ul li a:hover{
            background: maroon;
            border-radius: 2px;
        }
      
    </style>

    <body>
          
        <div class="wrapper">
            <nav class="navbar">
                <label class="logo">FAMIREE</label>
                <ul>
                    @if (Route::has('login'))
                    @auth
                    <li><a href="{{ url('/dashboard') }}" class="btn btn-success">{{ Auth::user()->name }}</a></li>
                    @else
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    @endauth
                    @endif
                </ul>
            </nav>

            <div class="welcome-sign">
                <!-- <img src="{{ asset('LOGO/FAMIREE.png') }}" alt="Image"> -->
                <h1>Welcome to FAMIREE</h1>
            </div>

            <!-- <div class="container">
                <p>
                    <h1>Tentang Kami</h1> <br>   
                    Najib Omar & Co. adalah sebuah firma guaman yang berdaftar dengan Majlis Peguam Malaysia, iaitu sebuah badan profesional yang mengawal selia profesion peguam di Semenanjung Malaysia.
                    Bagi memenuhi syarat kemasukan Majlis Peguam Malaysia, firma guaman Najib Omar & Co. dan para peguamnya telah memenuhi kelayakan akademik, praktikal, dan formal yang telah ditetapkan oleh Akta Profesion Undang-Undang 1976, iaitu sebuah akta yang berkaitan dengan profesion peguam Malaysia.
                </p>
                
                <p> 
                    <h2>Maklumat Firma Guaman</h2><br>
                    <img src="{{ asset('location.png') }}" alt="Image"> <br>
                    Alamat: No. 67-02, 2nd Floor, Susur Larkin Perdana 1, Larkin Perdana, 80350 Johor Bahru, Johor
                    <br>
                    E-mel: najibomar1310@yahoo.com
                    <br>
                    Phone: 07-2374886
                    <br>
                    Faks: 07-2374090
                </p>
                
                <p>
                    <h2>Maklumat Peguam</h2><br>
                    <h3>Haffisza Binti Ahmad</h3>
                    <br>
                    Tarikh Kemasukan: 29-03-2003 <br>
                    Kelayakan: Universiti Malaya (UM) <br>
                    <h3>Mohd Najib B Omar</h3>
                    Tarikh Kemasukan: 18-03-1993 <br>
                    Kelayakan: International Islamic University (IIU)
                </p>
                
            </div> -->

        </div>

    </body>
</html>