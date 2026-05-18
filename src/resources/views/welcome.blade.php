<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Dika Aditia Fazrullillah</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#0f172a;
            color:white;
        }

        html{
            scroll-behavior:smooth;
        }

        a{
            text-decoration:none;
        }

        /* NAVBAR */

        nav{
            width:100%;
            padding:25px 8%;
            display:flex;
            justify-content:space-between;
            align-items:center;
            position:fixed;
            top:0;
            background:rgba(15,23,42,0.8);
            backdrop-filter:blur(10px);
            z-index:1000;
        }

        nav h1{
            font-size:28px;
            color:#38bdf8;
        }

        nav .menu{
            display:flex;
            gap:30px;
        }

        nav .menu a{
            color:white;
            transition:0.3s;
        }

        nav .menu a:hover{
            color:#38bdf8;
        }

        /* HERO */

        .hero{
            width:100%;
            min-height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            padding:120px 8%;
            text-align:center;
        }

        .hero-text{
            max-width:900px;
        }

        .hero-text h3{
            color:#38bdf8;
            margin-bottom:10px;
            font-size:22px;
        }

        .hero-text h1{
            font-size:70px;
            line-height:1.1;
            margin-bottom:20px;
        }

        .hero-text p{
            color:#cbd5e1;
            line-height:1.8;
            margin-bottom:30px;
            font-size:18px;
        }

        .btn{
            display:inline-block;
            padding:15px 35px;
            background:#38bdf8;
            color:#0f172a;
            border-radius:10px;
            font-weight:600;
            transition:0.3s;
        }

        .btn:hover{
            transform:translateY(-5px);
        }

        /* SOCIAL */

        .socials{
            margin-top:40px;
            display:flex;
            justify-content:center;
            gap:25px;
        }

        .socials a{
            width:60px;
            height:60px;
            background:#1e293b;
            display:flex;
            align-items:center;
            justify-content:center;
            border-radius:50%;
            color:white;
            font-size:26px;
            transition:0.3s;
        }

        .socials a:hover{
            background:#38bdf8;
            color:#0f172a;
            transform:translateY(-5px);
        }

        /* SECTION */

        section{
            padding:100px 8%;
        }

        .section-title{
            font-size:50px;
            margin-bottom:50px;
            text-align:center;
        }

        /* ABOUT */

        .about{
            display:grid;
            grid-template-columns:repeat(2,1fr);
            gap:50px;
            align-items:center;
        }

        .about-box{
            background:#1e293b;
            padding:50px;
            border-radius:20px;
        }

        .about-text p{
            color:#cbd5e1;
            line-height:1.9;
        }

        /* PROJECT */

        .projects{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
            gap:30px;
        }

        .project-card{
            background:#1e293b;
            border-radius:20px;
            overflow:hidden;
            transition:0.3s;
        }

        .project-card:hover{
            transform:translateY(-10px);
        }

        .project-content{
            padding:40px;
            text-align:center;
        }

        .project-content h3{
            margin-bottom:15px;
            font-size:25px;
        }

        .project-content p{
            color:#cbd5e1;
            line-height:1.7;
            margin-bottom:20px;
        }

        .github-btn{
            display:inline-flex;
            align-items:center;
            gap:10px;
            padding:15px 25px;
            background:#0f172a;
            border:2px solid #38bdf8;
            border-radius:12px;
            color:white;
            font-weight:600;
            transition:0.3s;
        }

        .github-btn:hover{
            background:#38bdf8;
            color:#0f172a;
        }

        /* SKILLS */

        .skills{
            display:flex;
            flex-wrap:wrap;
            gap:20px;
            justify-content:center;
        }

        .skill{
            padding:15px 30px;
            background:#1e293b;
            border-radius:10px;
            font-weight:500;
            transition:0.3s;
        }

        .skill:hover{
            background:#38bdf8;
            color:#0f172a;
        }

        /* CONTACT */

        .contact{
            text-align:center;
        }

        .contact-icons{
            display:flex;
            justify-content:center;
            gap:25px;
            flex-wrap:wrap;
            margin-top:40px;
        }

        .contact-icons a{
            display:flex;
            align-items:center;
            gap:10px;
            background:#1e293b;
            padding:15px 25px;
            border-radius:12px;
            color:white;
            transition:0.3s;
        }

        .contact-icons a:hover{
            transform:translateY(-5px);
            background:#38bdf8;
            color:#0f172a;
        }

        /* FOOTER */

        footer{
            text-align:center;
            padding:30px;
            border-top:1px solid #1e293b;
            color:#94a3b8;
        }

        @media(max-width:900px){

            .hero-text h1{
                font-size:45px;
            }

            .about{
                grid-template-columns:1fr;
            }

            nav{
                flex-direction:column;
                gap:20px;
            }

            nav .menu{
                flex-wrap:wrap;
                justify-content:center;
            }

        }

    </style>
</head>
<body>

    <!-- NAVBAR -->

    <nav>

        <h1>Dika.</h1>

        <div class="menu">
            <a href="#">Home</a>
            <a href="#about">About</a>
            <a href="#project">Projects</a>
            <a href="#contact">Contact</a>
            <a href="/admin">Admin</a>
        </div>

    </nav>

    <!-- HERO -->

    <section class="hero">

        <div class="hero-text">

            <h3>Hello, I'm</h3>

            <h1>Muhammad Dika Aditia Fazrullillah</h1>

            <p>
                Web Developer yang fokus membuat website modern,
                responsive, clean UI, dan user friendly menggunakan
                Laravel, PHP, JavaScript, dan teknologi terbaru.
            </p>

            <a href="#project" class="btn">
                View Projects
            </a>

            <div class="socials">

                <a href="https://www.instagram.com/mddikaaa__?igsh=OW56NTZxcGJncmxo" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="https://github.com/muhammaddikaaditiafazrullillah17" target="_blank">
                    <i class="fa-brands fa-github"></i>
                </a>

            </div>

        </div>

    </section>

    <!-- ABOUT -->

    <section id="about">

        <h2 class="section-title">
            About Me
        </h2>

        <div class="about">

            <div class="about-box">

                <div class="about-text">

                    <p>
                        Saya seorang Web Developer yang memiliki pengalaman
                        membangun website portfolio, dashboard admin,
                        company profile, dan sistem berbasis Laravel.
                    </p>

                </div>

            </div>

            <div class="about-box">

                <div class="about-text">

                    <p>
                        Saya juga tertarik dalam pengembangan backend,
                        frontend modern, database management,
                        serta integrasi admin panel menggunakan Filament.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- PROJECT -->

    <section id="project">

        <h2 class="section-title">
            My Projects
        </h2>

        <div class="projects">

            @foreach ($projects as $project)

                <div class="project-card">

                    <div class="project-content">

                        <h3>
                            {{ $project->title }}
                        </h3>

                        <p>
                            {{ $project->description }}
                        </p>

                        <a
                            href="https://github.com/muhammaddikaaditiafazrullillah17"
                            target="_blank"
                            class="github-btn"
                        >

                            <i class="fa-brands fa-github"></i>

                            View GitHub

                        </a>

                    </div>

                </div>

            @endforeach

        </div>

    </section>

    <!-- SKILLS -->

    <section>

        <h2 class="section-title">
            Skills
        </h2>

        <div class="skills">

            <div class="skill">HTML</div>
            <div class="skill">CSS</div>
            <div class="skill">JavaScript</div>
            <div class="skill">PHP</div>
            <div class="skill">Laravel</div>
            <div class="skill">MySQL</div>
            <div class="skill">Filament</div>
            <div class="skill">Tailwind</div>

        </div>

    </section>

    <!-- CONTACT -->

    <section id="contact" class="contact">

        <h2 class="section-title">
            Contact Me
        </h2>

        <div class="contact-icons">

            <a href="mailto:dikaaditia17@gmail.com">

                <i class="fa-solid fa-envelope"></i>

                dikaaditia17@gmail.com

            </a>

            <a href="https://www.instagram.com/mddikaaa__?igsh=OW56NTZxcGJncmxo" target="_blank">

                <i class="fa-brands fa-instagram"></i>

                @mddikaaa__

            </a>

        </div>

    </section>

    <!-- FOOTER -->

    <footer>
        © 2026 Muhammad Dika Aditia Fazrullillah. All Rights Reserved.
    </footer>

</body>
</html>