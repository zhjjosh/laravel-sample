<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            <a href="{{ url('/car') }}">CRUD Example</a>
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <main role="main" class="inner cover">
            <h1 class="cover-heading">Josh Zhu</h1>
            <p class="lead"><b>Mobile: 0469695234</b></p>
            <p class="lead"><b>Email: zhjjosh@hotmail.com</b></p>
            <p class="lead"><b>Organisational Experience</b></p>
            <ul>
                <li>Web Developer/IT Manager - Bellbird Kidz Educational Resources - Melbourne - Dec 2017 - current</li>
                <li>Web Developer/IT Manager - 24x7 Direct - Melbourne - Jan 2015 – Dec 2017</li>
            </ul>
            <p class="lead"><b>Shill Set</b></p>
            <ul>
                <li>PHP Frameworks: CodeIgniter, Laravel, Symfony</li>
                <li>Front end: HTML, CSS, JavaScript (Bootstrap, W3.css, React.js, SASS)</li>
                <li>Database: MySQL, MariaDB</li>
                <li>System Administration: Centos, Ubuntu, Cron, Networking)</li>
                <li>Web Server: Apache</li>
                <li>Digital Marketing: SEO, Google AdWords, Facebook, Bing Ad</li>
                <li>API Design and Development: RESTful</li>
                <li>Cloud Project Deployment: AWS (EC2, RDS, S3, Auto Scalling, PHP SDK)</li>
                <li>CI/CD: Jenkins</li>
                <li>CRM Integration and Development: ZOHO, Neto, Dear Inventory</li>
                <li>CMS: WordPress, Moodle, Joomla</li>
                <li>VOIP: Asterisk, SIP, Vicidial</li>
            </ul>
            <p class="lead"><b>Education Qualification</b></p>
            <ul>
                <li>Master of Applied Information Technology from Monash University, Canfield Campus, VIC, Australia – 2014</li>
                <li>Bachelor of Commerce from the University of Melbourne, Parkville Campus, VIC, Australia - 2012</li>
            </ul>

        </main>

    </div>
</body>
</html>
