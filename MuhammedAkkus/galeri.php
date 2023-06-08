<!DOCTYPE html>
<html>
<head>
    <title>Galeri Web Sayfası</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        h1 {
            /*padding: 20px 0px;*/
            text-align: center;
            margin-top: 40px;
            margin-bottom: 10px;
            /*margin: 20px 0px;*/
            color: #333;
        }

        .menu {
            display: flex;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
            border-radius: 5px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1;
        }

        .menu a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            transition: background-color 0.3s ease;
        }

        .menu a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .galeri {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 20px;
            justify-items: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-top: 60px;
        }

        .galeri .resim {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .galeri .resim img {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .galeri .resim:hover img {
            transform: scale(1.1);
        }

        .galeri .resim .aciklama {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            font-size: 14px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .galeri .resim:hover .aciklama {
            opacity: 1;
        }

        @keyframes scrollDown {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <h1>Galeri</h1>

    <div class="menu">
        <a href="#resim1">Resim 1</a>
        <a href="#resim2">Resim 2</a>
        <a href="#resim3">Resim 3</a>
        <a href="#resim4">Resim 4</a>
        <a href="#resim5">Resim 5</a>
    </div>

    <div class="galeri">
        <div class="resim" id="resim1">
            <img src="img/AI.jpg" alt="Resim 1">
            <div class="aciklama">Resim 1</div>
        </div>

        <div class="resim" id="resim1">
            <img src="img/AI.jpg" alt="Resim 1">
            <div class="aciklama">Resim 1</div>
        </div>

        <div class="resim" id="resim1">
            <img src="img/AI.jpg" alt="Resim 1">
            <div class="aciklama">Resim 1</div>
        </div>

        <div class="resim" id="resim1">
            <img src="img/AI.jpg" alt="Resim 1">
            <div class="aciklama">Resim 1</div>
        </div>

        <div class="resim" id="resim1">
            <img src="img/AI.jpg" alt="Resim 1">
            <div class="aciklama">Resim 1</div>
        </div>
        
        <div class="resim" id="resim1">
            <img src="img/AI.jpg" alt="Resim 1">
            <div class="aciklama">Resim 1</div>
        </div>

        <div class="resim" id="resim1">
            <img src="img/AI.jpg" alt="Resim 1">
            <div class="aciklama">Resim 1</div>
        </div>

        <div class="resim" id="resim1">
            <img src="img/AI.jpg" alt="Resim 1">
            <div class="aciklama">Resim 1</div>
        </div>

        <div class="resim" id="resim1">
            <img src="img/AI.jpg" alt="Resim 1">
            <div class="aciklama">Resim 1</div>
        </div>

        <div class="resim" id="resim1">
            <img src="img/AI.jpg" alt="Resim 1">
            <div class="aciklama">Resim 1</div>
        </div>
        
        <div class="resim" id="resim1">
            <img src="img/AI.jpg" alt="Resim 1">
            <div class="aciklama">Resim 1</div>
        </div>

        <div class="resim" id="resim1">
            <img src="img/AI.jpg" alt="Resim 1">
            <div class="aciklama">Resim 1</div>
        </div>
                
        <div class="resim" id="resim2">
            <img src="img/analist.jpg" alt="Resim 2">
            <div class="aciklama">Resim 2</div>
        </div>

        <div class="resim" id="resim2">
            <img src="img/analist.jpg" alt="Resim 2">
            <div class="aciklama">Resim 2</div>
        </div>

        
        <div class="resim" id="resim2">
            <img src="img/analist.jpg" alt="Resim 2">
            <div class="aciklama">Resim 2</div>
        </div>

        <div class="resim" id="resim2">
            <img src="img/analist.jpg" alt="Resim 2">
            <div class="aciklama">Resim 2</div>
        </div>

        <div class="resim" id="resim2">
            <img src="img/analist.jpg" alt="Resim 2">
            <div class="aciklama">Resim 2</div>
        </div>

        <div class="resim" id="resim2">
            <img src="img/analist.jpg" alt="Resim 2">
            <div class="aciklama">Resim 2</div>
        </div>

        <div class="resim" id="resim2">
            <img src="img/analist.jpg" alt="Resim 2">
            <div class="aciklama">Resim 2</div>
        </div>
        
        <div class="resim" id="resim2">
            <img src="img/analist.jpg" alt="Resim 2">
            <div class="aciklama">Resim 2</div>
        </div>

        <div class="resim" id="resim2">
            <img src="img/analist.jpg" alt="Resim 2">
            <div class="aciklama">Resim 2</div>
        </div>

        <div class="resim" id="resim2">
            <img src="img/analist.jpg" alt="Resim 2">
            <div class="aciklama">Resim 2</div>
        </div>

        <div class="resim" id="resim2">
            <img src="img/analist.jpg" alt="Resim 2">
            <div class="aciklama">Resim 2</div>
        </div>

        <div class="resim" id="resim2">
            <img src="img/analist.jpg" alt="Resim 2">
            <div class="aciklama">Resim 2</div>
        </div>
        
        <div class="resim" id="resim3">
            <img src="img/bilgisayar.jpg" alt="Resim 3">
            <div class="aciklama">Resim 3</div>
        </div>

        <div class="resim" id="resim3">
            <img src="img/bilgisayar.jpg" alt="Resim 3">
            <div class="aciklama">Resim 3</div>
        </div>
        
        <div class="resim" id="resim3">
            <img src="img/bilgisayar.jpg" alt="Resim 3">
            <div class="aciklama">Resim 3</div>
        </div>

        <div class="resim" id="resim3">
            <img src="img/bilgisayar.jpg" alt="Resim 3">
            <div class="aciklama">Resim 3</div>
        </div>

        <div class="resim" id="resim3">
            <img src="img/bilgisayar.jpg" alt="Resim 3">
            <div class="aciklama">Resim 3</div>
        </div>

        <div class="resim" id="resim3">
            <img src="img/bilgisayar.jpg" alt="Resim 3">
            <div class="aciklama">Resim 3</div>
        </div>

        <div class="resim" id="resim3">
            <img src="img/bilgisayar.jpg" alt="Resim 3">
            <div class="aciklama">Resim 3</div>
        </div>
        
        <div class="resim" id="resim3">
            <img src="img/bilgisayar.jpg" alt="Resim 3">
            <div class="aciklama">Resim 3</div>
        </div>

        <div class="resim" id="resim3">
            <img src="img/bilgisayar.jpg" alt="Resim 3">
            <div class="aciklama">Resim 3</div>
        </div>

        <div class="resim" id="resim3">
            <img src="img/bilgisayar.jpg" alt="Resim 3">
            <div class="aciklama">Resim 3</div>
        </div>

        <div class="resim" id="resim3">
            <img src="img/bilgisayar.jpg" alt="Resim 3">
            <div class="aciklama">Resim 3</div>
        </div>

        <div class="resim" id="resim3">
            <img src="img/bilgisayar.jpg" alt="Resim 3">
            <div class="aciklama">Resim 3</div>
        </div>
        
        <div class="resim" id="resim4">
            <img src="img/yonetim.jpg" alt="Resim 4">
            <div class="aciklama">Resim 4</div>
        </div>

        <div class="resim" id="resim4">
            <img src="img/yonetim.jpg" alt="Resim 4">
            <div class="aciklama">Resim 4</div>
        </div>

        <div class="resim" id="resim4">
            <img src="img/yonetim.jpg" alt="Resim 4">
            <div class="aciklama">Resim 4</div>
        </div>

        <div class="resim" id="resim4">
            <img src="img/yonetim.jpg" alt="Resim 4">
            <div class="aciklama">Resim 4</div>
        </div>

        <div class="resim" id="resim4">
            <img src="img/yonetim.jpg" alt="Resim 4">
            <div class="aciklama">Resim 4</div>
        </div>

        <div class="resim" id="resim4">
            <img src="img/yonetim.jpg" alt="Resim 4">
            <div class="aciklama">Resim 4</div>
        </div>

        <div class="resim" id="resim4">
            <img src="img/yonetim.jpg" alt="Resim 4">
            <div class="aciklama">Resim 4</div>
        </div>
        
        <div class="resim" id="resim4">
            <img src="img/yonetim.jpg" alt="Resim 4">
            <div class="aciklama">Resim 4</div>
        </div>

        <div class="resim" id="resim4">
            <img src="img/yonetim.jpg" alt="Resim 4">
            <div class="aciklama">Resim 4</div>
        </div>

        <div class="resim" id="resim4">
            <img src="img/yonetim.jpg" alt="Resim 4">
            <div class="aciklama">Resim 4</div>
        </div>

        <div class="resim" id="resim4">
            <img src="img/yonetim.jpg" alt="Resim 4">
            <div class="aciklama">Resim 4</div>
        </div>

        <div class="resim" id="resim4">
            <img src="img/yonetim.jpg" alt="Resim 4">
            <div class="aciklama">Resim 4</div>
        </div>
        
        <div class="resim" id="resim5">
            <img src="img/veri.jpg" alt="Resim 5">
            <div class="aciklama">Resim 5</div>
        </div>

        <div class="resim" id="resim5">
            <img src="img/veri.jpg" alt="Resim 5">
            <div class="aciklama">Resim 5</div>
        </div>

        <div class="resim" id="resim5">
            <img src="img/veri.jpg" alt="Resim 5">
            <div class="aciklama">Resim 5</div>
        </div>

        <div class="resim" id="resim5">
            <img src="img/veri.jpg" alt="Resim 5">
            <div class="aciklama">Resim 5</div>
        </div>

        <div class="resim" id="resim5">
            <img src="img/veri.jpg" alt="Resim 5">
            <div class="aciklama">Resim 5</div>
        </div>

        <div class="resim" id="resim5">
            <img src="img/veri.jpg" alt="Resim 5">
            <div class="aciklama">Resim 5</div>
        </div>

        <div class="resim" id="resim5">
            <img src="img/veri.jpg" alt="Resim 5">
            <div class="aciklama">Resim 5</div>
        </div>
        
        <div class="resim" id="resim5">
            <img src="img/veri.jpg" alt="Resim 5">
            <div class="aciklama">Resim 5</div>
        </div>

        <div class="resim" id="resim5">
            <img src="img/veri.jpg" alt="Resim 5">
            <div class="aciklama">Resim 5</div>
        </div>

        <div class="resim" id="resim5">
            <img src="img/veri.jpg" alt="Resim 5">
            <div class="aciklama">Resim 5</div>
        </div>

        <div class="resim" id="resim5">
            <img src="img/veri.jpg" alt="Resim 5">
            <div class="aciklama">Resim 5</div>
        </div>

        <div class="resim" id="resim5">
            <img src="img/veri.jpg" alt="Resim 5">
            <div class="aciklama">Resim 5</div>
        </div>

    </div>

        <script>
        document.querySelectorAll('.menu a').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const target = document.querySelector(link.getAttribute('href'));
                const targetTop = target.getBoundingClientRect().top;
                const scrollOffset = window.pageYOffset || document.documentElement.scrollTop;
                const targetPosition = targetTop + scrollOffset;
                const duration = 1000; // ms
                const startTime = performance.now();

                const scroll = () => {
                    const elapsed = performance.now() - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    const easeProgress = 0.5 - 0.5 * Math.cos(Math.PI * progress);
                    const currentPosition = scrollOffset + (targetPosition - scrollOffset) * easeProgress;
                    window.scrollTo(0, currentPosition);

                    if (progress < 1) {
                        requestAnimationFrame(scroll);
                    }
                };

                requestAnimationFrame(scroll);
            });
        });
    </script>
</body>
</html>