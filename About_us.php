<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet The Team & Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: white;
            margin: 0;
            padding: 0;
        }

        .container {
            text-align: center;
            padding: 50px 20px;
        }

        h1 {
            font-size: 40px;
            color: #00ffb7;
        }

        h2 {
            font-size: 24px;
            color: #00ffb7;
            margin-bottom: 50px;
        }

        .team {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            max-width: 1000px;
            margin: 0 auto;
            gap: 30px;
        }

        .member {
            background: rgb(38,40,39);
            background: linear-gradient(90deg, rgba(38,40,39,1) 0%, rgba(222,237,233,0) 73%, rgba(64,199,158,0.29698375870069604) 100%);
            border-radius: 15px;
            padding: 20px;
            width: 200px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        }

        .member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .member h3 {
            margin: 10px 0;
            color: #00ffb7;
            font-size: 18px;
        }

        .member p {
            color: #9e9e9e;
        }

        .divider {
            border-top: 2px solid #00ffb7;
            width: 350px;
            margin: 20px auto;
        }

        /* Documentation */
        .gallery {
            padding: 50px 20px;
        }

        h2.gallery-title {
            font-size: 40px;
            color: #00ffb7;
            margin-bottom: 30px;
            text-align: center;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1000px;
            margin: 0 auto;
        }
        .gallery-grid img:first-child {
            grid-column: span 3;
            height: 250px; 
            object-fit: cover;
            width: 100%;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            border-color: white;
        }

        .gallery-grid img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s;
        }

        .gallery-grid img:hover {
            transform: scale(1.05);
        }

        .background-section {
            background-color: #00ffb7;
            height: 30px;
            margin-top: 50px;
        }

        @media (max-width: 768px) {
            .team {
                flex-direction: column;
            }

            .member {
                width: 80%;
            }
        }

        /* Centering the Button */
        .button-container {
            display: flex;
            justify-content: center;
            padding: 20px; /* Adds some padding */
        }

        .animated-button {
            position: relative;
            display: flex;
            align-items: center;
            gap: 4px;
            padding: 16px 36px;
            border: 4px solid;
            border-color: transparent;
            font-size: 16px;
            border-radius: 100px;
            font-weight: 600;
            color: #1f387e;
            box-shadow: 0 0 0 2px #ffffff;
            cursor: pointer;
            overflow: hidden;
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .animated-button svg {
            position: absolute;
            width: 24px;
            fill: #1f387e;
            z-index: 9;
            transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .animated-button .arr-1 {
            right: 16px;
        }

        .animated-button .arr-2 {
            left: -25%;
        }

        .animated-button .circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
            background-color: #c5e5e4;
            border-radius: 50%;
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .animated-button .text {
            position: relative;
            z-index: 1;
            transform: translateX(-12px);
            transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .animated-button:hover {
            box-shadow: 0 0 0 12px transparent;
            color: #212121;
            border-radius: 12px;
        }

        .animated-button:hover .arr-1 {
            right: -25%;
        }

        .animated-button:hover .arr-2 {
            left: 16px;
        }

        .animated-button:hover .text {
            transform: translateX(12px);
        }

        .animated-button:hover svg {
            fill: #1f387e;
        }

        .animated-button:active {
            scale: 0.95;
            box-shadow: 0 0 0 4px greenyellow;
        }

        .animated-button:hover .circle {
            width: 220px;
            height: 220px;
            opacity: 1;
        }

    </style>
</head>
<body>

    <!-- Meet the Team Section -->
    <div class="container">
        <h2>ABOUT US</h2>
        <h1>MEET THE TEAM</h1>

        <div class="divider"></div>

        <div class="team">
            <div class="member">
                <img src="img/TEAM/Neo.jpg" alt="Neo Marinas">
                <h3>Neo Marinas</h3>
                <p>UI Designer</p>
            </div>

            <div class="member">
                <img src="img/TEAM/Patrick.jpg" alt="Patrick Despieda">
                <h3>Patrick Despieda</h3>
                <p>Lead Programmer</p>
            </div>

            <div class="member">
                <img src="img/TEAM/John.jpg" alt="John Andrew Dimana">
                <h3>John Andrew Dimana</h3>
                <p>Programmer</p>
            </div>

            <div class="member">
                <img src="img/TEAM/Hannah.jpg" alt="Ma. Hannah Mae Paulino">
                <h3>Hannah Mae Paulino</h3>
                <p>UI Designer</p>
            </div>

            <div class="member">
                <img src="img/TEAM/Noel.jpg" alt="Noel Daniel Villamayor">
                <h3>Noel Daniel Villamayor</h3>
                <p>Lead Programmer</p>
            </div>

            <div class="member">
                <img src="img/TEAM/Kenneth.jpg" alt="Kenneth Eroll Almuete">
                <h3>Kenneth Eroll Almuete</h3>
                <p>Programmer</p>
            </div>
        </div>
    </div>

    <!-- Gallery Section -->
    <div class="gallery">
        <h2 class="gallery-title">Documentation</h2>
        <div class="gallery-grid">
            <img src="img/Gallery/picture1.jpg" alt="Gallery Image 1">
            <img src="img/Gallery/picture2.jpg" alt="Gallery Image 2">
            <img src="img/Gallery/picture3.jpg" alt="Gallery Image 3">
            <img src="img/Gallery/picture4.jpg" alt="Gallery Image 4">
        </div>

        <!-- Button Seemore centered -->
        <div class="button-container">
            <button class="animated-button">
                <svg xmlns="http://www.w3.org/2000/svg" class="arr-2" viewBox="0 0 24 24">
                    <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
                </svg>
                <span class="text">S E E M O R E</span>
                <span class="circle"></span>
                <svg xmlns="http://www.w3.org/2000/svg" class="arr-1" viewBox="0 0 24 24">
                    <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
                </svg>
            </button>
        </div>
    </div>

    <div class="background-section"></div>

</body>
</html>
