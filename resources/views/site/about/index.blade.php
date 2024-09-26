@extends('layout.site')
@section('content')
    <div class=" hero min-h-screen bg-base-300">
        <div class="flex justify-center py-16">
            <div class="card bg-base-100 w-96 shadow-xl join">
                <figure class="relative">
                    <!-- Avatar em primeiro plano -->
                    <div class="avatar absolute z-10">
                        <div class="ring-primary ring-offset-base-100 w-12 rounded-full">
                            <img
                                src="https://media.licdn.com/dms/image/v2/D4D03AQGmfTkU4md-6Q/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1665329427323?e=1732752000&v=beta&t=6CXJdd9nnMf8DWXtIlaioVT4oEccyO2AJ4QpAsajoGo" />
                        </div>
                    </div>

                    <!-- Canvas com o efeito Matrix em segundo plano -->
                    <canvas id="matrix" class="h-16 w-96 bg-cover bg-center join-item z-0"></canvas>
                </figure>

                <div class="card-body join-item p-4">
                    <p class="text-1xl text-danger">Olá, me chamo</p>
                    <h1 class="text-3xl font-bold text-white">Bernardo Nogueira</h1>
                    <p>Atualmente, atuo como Tecnólogo em Gestão de Sistema de Informação na FESF/SESAB.</p>
                    <p>Estou cursando Licenciatura em Matemática pelo IFBA e uma pós-graduação em Ciência de Dados pela PUC
                        Minas.
                    </p>
                </div>
                <div class="divider m-0"></div>

                <div class="justify-items-center join-item p-4 mx-auto">
                    <a class="btn btn-square" href="https://www.instagram.com/bernardo.nogueira8/">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                            viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(5.12,5.12)">
                                    <path
                                        d="M16,3c-7.16752,0 -13,5.83248 -13,13v18c0,7.16752 5.83248,13 13,13h18c7.16752,0 13,-5.83248 13,-13v-18c0,-7.16752 -5.83248,-13 -13,-13zM16,5h18c6.08648,0 11,4.91352 11,11v18c0,6.08648 -4.91352,11 -11,11h-18c-6.08648,0 -11,-4.91352 -11,-11v-18c0,-6.08648 4.91352,-11 11,-11zM37,11c-1.10457,0 -2,0.89543 -2,2c0,1.10457 0.89543,2 2,2c1.10457,0 2,-0.89543 2,-2c0,-1.10457 -0.89543,-2 -2,-2zM25,14c-6.06329,0 -11,4.93671 -11,11c0,6.06329 4.93671,11 11,11c6.06329,0 11,-4.93671 11,-11c0,-6.06329 -4.93671,-11 -11,-11zM25,16c4.98241,0 9,4.01759 9,9c0,4.98241 -4.01759,9 -9,9c-4.98241,0 -9,-4.01759 -9,-9c0,-4.98241 4.01759,-9 9,-9z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a class="btn btn-square" href="https://www.linkedin.com/in/bernardo-nogueira8/">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                            viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8.53333,8.53333)">
                                    <path
                                        d="M9,25h-5v-15h5zM6.501,8c-1.383,0 -2.501,-1.121 -2.501,-2.501c0,-1.38 1.12,-2.499 2.501,-2.499c1.378,0 2.499,1.121 2.499,2.499c0,1.38 -1.121,2.501 -2.499,2.501zM27,25h-4.807v-7.3c0,-1.741 -0.033,-3.98 -2.499,-3.98c-2.503,0 -2.888,1.896 -2.888,3.854v7.426h-4.806v-15.011h4.614v2.051h0.065c0.642,-1.18 2.211,-2.424 4.551,-2.424c4.87,0 5.77,3.109 5.77,7.151c0,0 0,8.233 0,8.233z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a class="btn btn-square" href="https://github.com/Samuraiflamesf/">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                            viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8.53333,8.53333)">
                                    <path
                                        d="M15,3c-6.627,0 -12,5.373 -12,12c0,5.623 3.872,10.328 9.092,11.63c-0.056,-0.162 -0.092,-0.35 -0.092,-0.583v-2.051c-0.487,0 -1.303,0 -1.508,0c-0.821,0 -1.551,-0.353 -1.905,-1.009c-0.393,-0.729 -0.461,-1.844 -1.435,-2.526c-0.289,-0.227 -0.069,-0.486 0.264,-0.451c0.615,0.174 1.125,0.596 1.605,1.222c0.478,0.627 0.703,0.769 1.596,0.769c0.433,0 1.081,-0.025 1.691,-0.121c0.328,-0.833 0.895,-1.6 1.588,-1.962c-3.996,-0.411 -5.903,-2.399 -5.903,-5.098c0,-1.162 0.495,-2.286 1.336,-3.233c-0.276,-0.94 -0.623,-2.857 0.106,-3.587c1.798,0 2.885,1.166 3.146,1.481c0.896,-0.307 1.88,-0.481 2.914,-0.481c1.036,0 2.024,0.174 2.922,0.483c0.258,-0.313 1.346,-1.483 3.148,-1.483c0.732,0.731 0.381,2.656 0.102,3.594c0.836,0.945 1.328,2.066 1.328,3.226c0,2.697 -1.904,4.684 -5.894,5.097c1.098,0.573 1.899,2.183 1.899,3.396v2.734c0,0.104 -0.023,0.179 -0.035,0.268c4.676,-1.639 8.035,-6.079 8.035,-11.315c0,-6.627 -5.373,-12 -12,-12z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a class="btn btn-square" href="https://www.youtube.com/@QuaseUmDev">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                            viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(5.12,5.12)">
                                    <path
                                        d="M44.89844,14.5c-0.39844,-2.19922 -2.29687,-3.80078 -4.5,-4.30078c-3.29687,-0.69922 -9.39844,-1.19922 -16,-1.19922c-6.59766,0 -12.79687,0.5 -16.09766,1.19922c-2.19922,0.5 -4.10156,2 -4.5,4.30078c-0.40234,2.5 -0.80078,6 -0.80078,10.5c0,4.5 0.39844,8 0.89844,10.5c0.40234,2.19922 2.30078,3.80078 4.5,4.30078c3.5,0.69922 9.5,1.19922 16.10156,1.19922c6.60156,0 12.60156,-0.5 16.10156,-1.19922c2.19922,-0.5 4.09766,-2 4.5,-4.30078c0.39844,-2.5 0.89844,-6.10156 1,-10.5c-0.20312,-4.5 -0.70312,-8 -1.20312,-10.5zM19,32v-14l12.19922,7z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Pegando o elemento do Canvas
        const c = document.getElementById("matrix");

        // Definindo o seu contexto
        const ctx = c.getContext("2d");

        // definindo o canvas com tamanho máximo da tela
        c.height = window.innerHeight;
        c.width = window.innerWidth;

        // letras do Matrix Rain
        // ver mais em: https://bit.ly/3yFJoU3
        const letters = ["日", "ﾊ", "ﾐ", "ﾋ", "ｰ", "ｳ", "ｼ", "ﾅ", "ﾓ", "ﾆ", "ｻ", "ﾜ", "ﾂ", "ｵ", "ﾘ", "ｱ", "ﾎ", "ﾃ", "ﾏ", "ｹ",
            "ﾒ", "ｴ", "ｶ", "ｷ", "ﾑ", "ﾕ", "ﾗ", "ｾ", "ﾈ", "ｽ", "ﾀ", "ﾇ", "ﾍ", ":", "・", ".", "=", "*", "+", "-", "<",
            ">", "¦", "｜", "ﾘ"
        ];

        const fontSize = 12;

        // definindo quantas colunas serão necessárias pelo tamanho da tela e fonte
        const columns = c.width / fontSize;

        // criando um array para cada gota, sempre iniciando na posição do y=1
        const drops = new Array(Math.floor(columns)).fill(1);

        function draw() {
            // preenchendo a tela toda de preto com opacidade
            // esse truque da opacidade será útil para o efeito
            // das letras sumindo aos poucos
            ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
            ctx.fillRect(0, 0, c.width, c.height);

            // definindo a cor e estilo da fonte
            ctx.fillStyle = "#0F0";
            ctx.font = `${fontSize}px arial`;

            for (let i = 0; i < drops.length; i++) {
                // pegando uma letra randomicamente no nosso array
                const text = letters[Math.floor(Math.random() * letters.length)];

                // escrevendo na tela
                ctx.fillText(text, i * fontSize, drops[i] * fontSize);

                // resetando a posição da gota ao chegar no fim
                if (drops[i] * fontSize > c.height && Math.random() > 0.95) {
                    drops[i] = 0;
                }

                // movendo as gotas no eixo y
                drops[i]++;
            }

            // chamada recursiva para animar quadro a quadro
            window.requestAnimationFrame(draw);
        }

        // chamando a função criada
        draw()
    </script>
@endsection
