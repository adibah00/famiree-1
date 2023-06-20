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
        <title></title>
    </head>

    <style>
        .container {
            width:100%;
            margin: 0 auto;
            padding: 20px;
        }
        
        h1, h2 {
            color: #333;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        p {
            color: #666;
            line-height: 1.5;
            text-align: justify;
        }
        
        ul {
            margin-top: 10px;
            margin-bottom: 20px;
        }
        
        li {
            color: #666;
        }

        .image-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            margin-top:20px;
        }
        
        .image-container img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .welcome-sign {
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .welcome-sign img{
            width: 50px;
            height: 50px;
            margin-left:20px;
        }

        .welcome-sign h1 {
            font-size: 36px;
            color: #333;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .center-container {
            display: flex;
            align-items: center;
        }
    </style>

    <body>
        <nav>
            <label class="logo">FAMIREE</label>
            <ul>
                @if (Route::has('login'))
                @auth
                <li><a href="{{ url('/dashboard') }}" class="btn btn-success">{{ Auth::user()->name }}</a></li>
                @else
                <!-- <li><a href="{{ route('register') }}" class="btn btn-success">Register</a></li> -->
                <li><a href="{{ route('login') }}" class="btn btn-primary">Login</a></li>
                @endauth
                @endif
            </ul>
        </nav>

        <div class="welcome-sign">
            <div class="center-container">
                <h1>Welcome to FAMIREE</h1>
                <img src="{{ asset('LOGO/FAMIREE.png') }}" alt="Image">
            </div>
        </div>
       
        <div class="container">
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
            
        </div>
    </body>
</html>