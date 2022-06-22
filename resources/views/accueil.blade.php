<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
    <script src="https://scrollmagic.io/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>
    <link href="{{asset('assets/css/cube.css')}}" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        main: '#020003',
                        violet: '#551A8B',
                        gris: '#0E0E0E',
                        vert: '#00ec00',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap');

        *
        {
            font-family: 'Kdam Thmor Pro', sans-serif;
            scroll-behavior: smooth;
        }

    </style>
</head>
<body class="overflow-x-hidden">
<div id="banner" class="relative bg-main w-full min-h-screen">
    <nav class="z-[1] absolute top-8 left-0 w-full flex justify-center items-center">
        <div class="w-full mx-20 rounded-full">
            <div class="float-left flex justify-center items-center mx-5 group">
                <a href="#" class="relative py-2 text-lg tracking-wider text-white uppercase">
                    TITRE
                    <div class="absolute left-0 top-full w-0 h-0.5 bg-white rounded-full group-hover:w-full duration-300 ease-in-out"></div>
                </a>
            </div>
            <div class="float-right py-2 mx-5 flex flex-row">
                <a href="#" class="relative text-xs text-white py-2 uppercase group">
                    équipes
                    <div class="absolute left-0 top-full w-0 h-0.5 bg-white rounded-full group-hover:w-full duration-300 ease-in-out"></div>
                </a>
                <a href="#" class="relative text-xs text-white py-2 ml-6 uppercase group">
                    En savoir plus
                    <div class="absolute left-0 top-full w-0 h-0.5 bg-white rounded-full group-hover:w-full duration-300 ease-in-out"></div>
                </a>
                <a href="#" class="relative ml-6 group flex justify-center items-center  py-2 px-4 border border-white bg-white rounded-lg group">
                    <div class="absolute left-0 top-0 rounded-lg w-0 h-full bg-black text-white flex justify-center items-center z-[1] invisible opacity-0 group-hover:w-full group-hover:visible group-hover:opacity-100 duration-300 ease-in-out"></div>
                    <div class="text-xs text-black uppercase group-hover:z-[2] group-hover:text-white">Se connecter</div>
                </a>
            </div>
        </div>
    </nav>
    <div class="absolute top-0 left-0 w-full h-full flex flex-row">
        <div class="w-1/2 h-full flex flex-col justify-center text-white pl-24">
            <p id="banner_text" class="text-7xl xl:text-9xl">Déménager</p>
            <p id="banner_text" class="text-4xl xl:text-6xl mt-12">Facilement & Rapidement</p>
            <p id="banner_text" class="text-lg xl:text-xl mt-12  text-[#9C9C9C]">We partner with scientists, engineers and operators to build deeptech
               startups that slash emissions, remove carbon, and cool the planet.</p>
        </div>
        <div class="w-1/2 h-full flex justify-center items-center">
            <iframe class="w-full h-full mt-32 xl:mt-16" src="{{asset('assets/iframes/iframe_piece.html')}}"></iframe>
        </div>
    </div>
    <div class="absolute bottom-16 xl:bottom-28 left-0 flex justify-center items-center w-full">
        <div class="flex flex-col justify-center items-center">
            <a href="#scan__">
                <button class="relative flex justify-center items-center group border border-white bg-black rounded-full group hover:bg-white duration-150 ease-in-out">
                    <ion-icon class="w-8 h-8 p-4 text-white group-hover:text-black rounded-full" name="chevron-down-outline"></ion-icon>
                </button>
            </a>
        </div>
    </div>
</div>
<div class="relative w-full flex flex-col bg-gris">
    <div id="scan__" class="w-full flex flex-row">
        <div class="w-1/2 flex flex-col justify-center items-center min-h-screen">
            <div class="cube">
                <div class="top"></div>
                <div>
                    <span style="--i:0;"></span>
                    <span style="--i:1;"></span>
                    <span style="--i:2;"></span>
                    <span style="--i:3;"></span>
                </div>
            </div>
        </div>
        <div class="w-1/2 flex flex-col justify-center min-h-screen px-24">
            <div class="px-2 py-4 flex flex-row">
                <div class="w-4 h-4 rounded-full bg-violet"></div>
                <div class="w-4 h-4 rounded-full bg-white ml-3"></div>
                <div class="w-4 h-4 rounded-full bg-white ml-3"></div>
            </div>
            <p id="scan_meuble_text" class="text-4xl xl:text-7xl text-white mt-6">Scanne Tes Meubles</p>
            <p id="scan_meuble_text" class="text-lg xl:text-xl text-[#9C9C9C] mt-12">Over 9 months, you will work with us to uncover high-impact opportunities and shape the most promising idea into a new venture.</p>
            <p id="scan_meuble_text" class="text-lg xl:text-xl text-[#9C9C9C] mt-12">Receive funding, mentorship, hands-on support, access to an unparalleled pool of experts, potential co-founders and advisors.</p>
            <p id="scan_meuble_text" class="text-lg xl:text-xl text-[#9C9C9C] mt-12">If you succeed, we become your first investor and help you raise a seed round.</p>
            <!--<div class="flex flex-col justify-center items-center mt-12">
                <button class="relative flex justify-center items-center group border border-white bg-black rounded-full group hover:bg-white duration-150 ease-in-out">
                    <ion-icon class="w-8 h-8 p-4 text-white group-hover:text-black rounded-full" name="chevron-down-outline"></ion-icon>
                </button>
            </div>-->
        </div>
    </div>
    <div id="visualisation__" class="w-full flex flex-row">
        <div class="w-1/2 flex flex-col justify-center min-h-screen px-24">
            <div class="px-2 py-4 flex flex-row">
                <div class="w-4 h-4 rounded-full bg-white"></div>
                <div class="w-4 h-4 rounded-full bg-violet ml-3"></div>
                <div class="w-4 h-4 rounded-full bg-white ml-3"></div>
            </div>
            <p id="visualisation_3d_text" class="text-4xl xl:text-7xl text-white mt-6">Visualisation 3D</p>
            <p id="visualisation_3d_text" class="text-lg xl:text-xl text-[#9C9C9C] mt-12">Over 9 months, you will work with us to uncover high-impact opportunities and shape the most promising idea into a new venture.</p>
            <p id="visualisation_3d_text" class="text-lg xl:text-xl text-[#9C9C9C] mt-12">Receive funding, mentorship, hands-on support, access to an unparalleled pool of experts, potential co-founders and advisors.</p>
            <p id="visualisation_3d_text" class="text-lg xl:text-xl text-[#9C9C9C] mt-12">If you succeed, we become your first investor and help you raise a seed round.</p>
            <!--<div class="flex flex-col justify-center items-center mt-12">
                <button class="relative flex justify-center items-center group border border-white bg-black rounded-full group hover:bg-white duration-150 ease-in-out">
                    <ion-icon class="w-8 h-8 p-4 text-white group-hover:text-black rounded-full" name="chevron-down-outline"></ion-icon>
                </button>
            </div>-->
        </div>
        <div class="w-1/2 flex flex-col justify-center items-center min-h-screen">
            <div class="cube">
                <div class="top"></div>
                <div>
                    <span style="--i:0;"></span>
                    <span style="--i:1;"></span>
                    <span style="--i:2;"></span>
                    <span style="--i:3;"></span>
                </div>
            </div>
        </div>
    </div>
    <div id="deplacement__" class="w-full flex flex-row">
        <div class="w-1/2 flex flex-col justify-center items-center min-h-screen">
            <div class="cube">
                <div class="top"></div>
                <div>
                    <span style="--i:0;"></span>
                    <span style="--i:1;"></span>
                    <span style="--i:2;"></span>
                    <span style="--i:3;"></span>
                </div>
            </div>
        </div>
        <div class="w-1/2 flex flex-col justify-center min-h-screen px-24">
            <div class="px-2 py-4 flex flex-row">
                <div class="w-4 h-4 rounded-full bg-white"></div>
                <div class="w-4 h-4 rounded-full bg-white ml-3"></div>
                <div class="w-4 h-4 rounded-full bg-violet ml-3"></div>
            </div>
            <p id="deplacement_text" class="text-4xl xl:text-7xl text-white mt-6">Déplacement dans la pièce</p>
            <p id="deplacement_text" class="text-lg xl:text-xl text-[#9C9C9C] mt-12">Over 9 months, you will work with us to uncover high-impact opportunities and shape the most promising idea into a new venture.</p>
            <p id="deplacement_text" class="text-lg xl:text-xl text-[#9C9C9C] mt-12">Receive funding, mentorship, hands-on support, access to an unparalleled pool of experts, potential co-founders and advisors.</p>
            <p id="deplacement_text" class="text-lg xl:text-xl text-[#9C9C9C] mt-12">If you succeed, we become your first investor and help you raise a seed round.</p>
            <!--<div class="flex flex-col justify-center items-center mt-12">
                <button class="relative flex justify-center items-center group border border-white bg-black rounded-full group hover:bg-white duration-150 ease-in-out">
                    <ion-icon class="w-8 h-8 p-4 text-white group-hover:text-black rounded-full" name="chevron-down-outline"></ion-icon>
                </button>
            </div>-->
        </div>
    </div>
</div>
<div id="qui__" class="w-full flex flex-col bg-white pb-16">
    <div class="w-full py-16 flex justify-center items-center text-4xl xl:text-7xl">
        Pour qui ?
    </div>
    <div class="flex flex-row">
        <div class="w-1/3 flex justify-center items-center h-64">
            <div id="box_qui" class="group relative flex flex-col justify-center items-center border-2 border-violet rounded-lg px-16 py-8">
                <div class="absolute left-0 top-0 rounded-lg border w-full h-0 bg-black z-[0] invisible opacity-0 group-hover:h-full group-hover:visible group-hover:opacity-100 duration-300 ease-in-out"></div>
                <img class="w-32 h-32 group-hover:invert z-[1]" src="{{asset('assets/images/people.png')}}"/>
                <div class="mt-6 text-lg xl:text-xl font-bold group-hover:text-white z-[1]">Particulier</div>
            </div>
        </div>
        <div class="w-1/3 flex justify-center items-center h-64">
            <div id="box_qui" class="group relative flex flex-col justify-center items-center border-2 border-violet rounded-lg px-16 py-8">
                <div class="absolute left-0 top-0 rounded-lg border w-full h-0 bg-black z-[0] invisible opacity-0 group-hover:h-full group-hover:visible group-hover:opacity-100 duration-300 ease-in-out"></div>
                <img class="w-32 h-32 group-hover:invert z-[1]" src="{{asset('assets/images/office-building.png')}}"/>
                <div class="mt-6 text-lg xl:text-xl font-bold group-hover:text-white z-[1]">Entreprise</div>
            </div>
        </div>
        <div class="w-1/3 flex justify-center items-center h-64">
            <div id="box_qui" class="group relative flex flex-col justify-center items-center border-2 border-violet rounded-lg px-16 py-8">
                <div class="absolute left-0 top-0 rounded-lg border w-full h-0 bg-black z-[0] invisible opacity-0 group-hover:h-full group-hover:visible group-hover:opacity-100 duration-300 ease-in-out"></div>
                <img class="w-32 h-32 group-hover:invert z-[1]" src="{{asset('assets/images/mover-truck.png')}}"/>
                <div class="mt-6 text-lg xl:text-xl font-bold group-hover:text-white z-[1]">Déménageur</div>
            </div>
        </div>
    </div>
</div>
<div id="roadmap" class="relative bg-gris w-full pb-32">
    <div class="text-center p-16 text-4xl xl:text-7xl text-white">RoadMap</div>
    <div class="w-full flex flex-col text-white">
        <div class="flex flex-row justify-center items-center mt-16">
            <div class="w-5/12 h-28 flex flex-row justify-end items-center">
                <div id="roadmap_right_1" class="w-4/5 xl:w-3/5 px-6 py-4 border-2 border-white text-white rounded-xl text-lg">
                    Adventure Coast Punks will only be sold on Solsea. For a fair distribution, multiple sale rounds will be held for the NFT participants.
                </div>
            </div>
            <div class="w-1/12 h-28 flex flex-row justify-center items-center">
                <div id="roadmap_cube_1" class="w-12 h-12 rounded-lg bg-vert border border-white z-[1]"></div>
            </div>
            <div class="w-5/12 h-28 flex flex-col justify-center items-start px-8">
                <div id="roadmap_left_1" class="text-2xl">Phase 1</div>
                <div id="roadmap_left_1" class="mt-2">Website launch 1.0 and initial sale.</div>
            </div>
        </div>
        <div class="flex flex-row justify-center items-center mt-16">
            <div class="w-5/12 h-28 flex flex-col justify-center items-end px-8">
                <div id="roadmap_right_2" class="text-2xl">Phase 2</div>
                <div id="roadmap_right_2" class="mt-2">Subsequent NFT drops.</div>
            </div>
            <div class="w-1/12 h-28 flex flex-row justify-center items-center">
                <div id="roadmap_cube_2" class="w-12 h-12 rounded-lg bg-gris border border-white z-[1]"></div>
            </div>
            <div class="w-5/12 h-28 flex flex-row justify-start items-center">
                <div id="roadmap_left_2" class="w-4/5 xl:w-3/5 px-6 py-4 border-2 border-white text-white rounded-xl text-lg">
                    Adventure Coast Punks will only be sold on Solsea. For a fair distribution, multiple sale rounds will be held for the NFT participants.
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-center items-center mt-16">
            <div class="w-5/12 h-28 flex flex-row justify-end items-center">
                <div id="roadmap_right_3" class="w-4/5 xl:w-3/5 px-6 py-4 border-2 border-white text-white rounded-xl text-lg">
                    Adventure Coast Punks will only be sold on Solsea. For a fair distribution, multiple sale rounds will be held for the NFT participants.
                </div>
            </div>
            <div class="w-1/12 h-28 flex flex-row justify-center items-center">
                <div id="roadmap_cube_3" class="w-12 h-12 rounded-lg bg-vert border border-white z-[1]"></div>
            </div>
            <div class="w-5/12 h-28 flex flex-col justify-center items-start px-8">
                <div id="roadmap_left_3" class="text-2xl">Phase 3</div>
                <div id="roadmap_left_3" class="mt-2">Website launch 1.0 and initial sale.</div>
            </div>
        </div>
        <div class="flex flex-row justify-center items-center mt-16">
            <div class="w-5/12 h-28 flex flex-col justify-center items-end px-8">
                <div id="roadmap_right_4" class="text-2xl">Phase 4</div>
                <div id="roadmap_right_4" class="mt-2">Subsequent NFT drops.</div>
            </div>
            <div class="w-1/12 h-28 flex flex-row justify-center items-center">
                <div id="roadmap_cube_4" class="w-12 h-12 rounded-lg bg-gris border border-white z-[1]"></div>
            </div>
            <div class="w-5/12 h-28 flex flex-row justify-start items-center">
                <div id="roadmap_left_4" class="w-4/5 xl:w-3/5 px-6 py-4 border-2 border-white text-white rounded-xl text-lg">
                    Adventure Coast Punks will only be sold on Solsea. For a fair distribution, multiple sale rounds will be held for the NFT participants.
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-center items-center mt-16">
            <div class="w-5/12 h-28 flex flex-row justify-end items-center">
                <div id="roadmap_right_5" class="w-4/5 xl:w-3/5 px-6 py-4 border-2 border-white text-white rounded-xl text-lg">
                    Adventure Coast Punks will only be sold on Solsea. For a fair distribution, multiple sale rounds will be held for the NFT participants.
                </div>
            </div>
            <div class="w-1/12 h-28 flex flex-row justify-center items-center">
                <div id="roadmap_cube_5" class="w-12 h-12 rounded-lg bg-vert border border-white z-[1]"></div>
            </div>
            <div class="w-5/12 h-28 flex flex-col justify-center items-start px-8">
                <div id="roadmap_left_5" class="text-2xl">Phase 5</div>
                <div id="roadmap_left_5" class="mt-2">Website launch 1.0 and initial sale.</div>
            </div>
        </div>
    </div>
    <div class="absolute left-0 top-0 w-full h-full flex justify-center items-center">
        <div class="w-0.5 h-[60%] mt-40 bg-white"></div>
    </div>
    
</div>
<div class="relative bg-main w-full pb-16">
    <div class="w-full py-16 flex justify-center items-center text-4xl xl:text-7xl z-[1] text-white">
         Technos
    </div>
    <div class="flex flex-row justify-center items-center">
        <div class="w-2/12 p-6 flex flex-col justify-center items-center">
            <img class="w-32 h-32" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"/>
            <div class="text-xl xl:text-2xl text-white mt-6">Laravel</div>
        </div>
        <div class="w-2/12 p-6 flex flex-col justify-center items-center">
            <img class="w-32 h-32" src="https://github.com/symfony.png"/>
            <div class="text-xl xl:text-2xl text-white mt-6">symfony</div>
        </div>
        <div class="w-2/12 p-6 flex flex-col justify-center items-center">
            <img class="w-32 h-32" src="https://aws1.discourse-cdn.com/standard17/uploads/threejs/original/2X/e/e4f86d2200d2d35c30f7b1494e96b9595ebc2751.png"/>
            <div class="text-xl xl:text-2xl text-white mt-6">ThreeJS</div>
        </div>
        <div class="w-2/12 p-6 flex flex-col justify-center items-center">
            <img class="w-36 h-32" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/539px-React-icon.svg.png"/>
            <div class="text-xl xl:text-2xl text-white mt-6">React Native</div>
        </div>

    </div>


</div>
<div class="relative bg-gris w-full min-h-screen pb-16 2xl:pb-0">
    <div class="w-full py-16 flex justify-center items-center text-4xl xl:text-7xl z-[1] text-white">
         Question Fréquente
    </div>
    <div class="flex flex-col justify-center items-center px-32 xl:px-48 2xl:px-64 cursor-default">
        <div class="flex flex-col justify-center p-6 border-2 border-violet rounded-lg hover:bg-violet">
            <div class="relative text-white text-xl font-bold">
                How to buy?
            </div>
            <div class="mt-4 text-white text-lg">Adventure Coast Punks will only be sold on Solsea. For a fair distribution, multiple sale rounds will be held for the NFT participants. You can buy ACP NFT for SOL (Solana coin). We recommend using a Phantom wallet for purchase.</div>
        </div>
        <div class="flex flex-col justify-center p-6 border-2 border-violet rounded-lg mt-8 hover:bg-violet">
            <div class="text-white text-xl font-bold">How to buy?</div>
            <div class="mt-4 text-white text-lg">Adventure Coast Punks will only be sold on Solsea. For a fair distribution, multiple sale rounds will be held for the NFT participants. You can buy ACP NFT for SOL (Solana coin). We recommend using a Phantom wallet for purchase.</div>
        </div>
        <div class="flex flex-col justify-center p-6 border-2 border-violet rounded-lg mt-8 hover:bg-violet">
            <div class="text-white text-xl font-bold">How to buy?</div>
            <div class="mt-4 text-white text-lg">Adventure Coast Punks will only be sold on Solsea. For a fair distribution, multiple sale rounds will be held for the NFT participants. You can buy ACP NFT for SOL (Solana coin). We recommend using a Phantom wallet for purchase.</div>
        </div>
        <div class="flex flex-col justify-center p-6 border-2 border-violet rounded-lg mt-8 hover:bg-violet">
            <div class="text-white text-xl font-bold">How to buy?</div>
            <div class="mt-4 text-white text-lg">Adventure Coast Punks will only be sold on Solsea. For a fair distribution, multiple sale rounds will be held for the NFT participants. You can buy ACP NFT for SOL (Solana coin). We recommend using a Phantom wallet for purchase.</div>
        </div>
    </div>
    
</div>

<div class="relative bg-main w-full p-16">
    <div class="w-full py-16 flex justify-center items-center text-4xl xl:text-7xl z-[1] text-white">
         FOOTER
    </div>
</div>

<script>
    // controller 
    var controller = new ScrollMagic.Controller();

    // Tween
    var tween_banner_text = TweenMax.staggerFromTo('#banner_text', 1,
            {opacity: 0, y: 100},
            {opacity: 1, y: 0}, 0.1);


    var tween_scan_text = TweenMax.staggerFromTo('#scan_meuble_text', 1,
            {opacity: 0, x: 100},
            {opacity: 1, x: 0}, 0.1);

    var tween_visu_text = TweenMax.staggerFromTo('#visualisation_3d_text', 1,
            {opacity: 0, x: -100},
            {opacity: 1, x: 0}, 0.1);

    var tween_depla = TweenMax.staggerFromTo('#deplacement_text', 1,
            {opacity: 0, x: 100},
            {opacity: 1, x: 0}, 0.1);

    var tween_box_qui = TweenMax.staggerFromTo('#box_qui', 1,
            {opacity: 0, y: 100},
            {opacity: 1, y: 0}, 0.1);

    // phase 1
    var tween_roadmap_left_1 = TweenMax.staggerFromTo('#roadmap_left_1', 0.5,
            {opacity: 0, x: 50},
            {opacity: 1, x: 0}, 0.1);

    var tween_roadmap_right_1 = TweenMax.staggerFromTo('#roadmap_right_1', 0.5,
            {opacity: 0, x: -50},
            {opacity: 1, x: 0}, 0.1);

    // phase 2
    var tween_roadmap_left_2 = TweenMax.staggerFromTo('#roadmap_left_2', 0.5,
            {opacity: 0, x: 50},
            {opacity: 1, x: 0}, 0.1);

    var tween_roadmap_right_2 = TweenMax.staggerFromTo('#roadmap_right_2', 0.5,
            {opacity: 0, x: -50},
            {opacity: 1, x: 0}, 0.1);

    // phase 3
    var tween_roadmap_left_3 = TweenMax.staggerFromTo('#roadmap_left_3', 0.5,
            {opacity: 0, x: 50},
            {opacity: 1, x: 0}, 0.1);

    var tween_roadmap_right_3 = TweenMax.staggerFromTo('#roadmap_right_3', 0.5,
            {opacity: 0, x: -50},
            {opacity: 1, x: 0}, 0.1);

    // phase 4
    var tween_roadmap_left_4 = TweenMax.staggerFromTo('#roadmap_left_4', 0.5,
            {opacity: 0, x: 50},
            {opacity: 1, x: 0}, 0.1);

    var tween_roadmap_right_4 = TweenMax.staggerFromTo('#roadmap_right_4', 0.5,
            {opacity: 0, x: -50},
            {opacity: 1, x: 0}, 0.1);

    // phase 5
    var tween_roadmap_left_5 = TweenMax.staggerFromTo('#roadmap_left_5', 0.5,
            {opacity: 0, x: 50},
            {opacity: 1, x: 0}, 0.1);

    var tween_roadmap_right_5 = TweenMax.staggerFromTo('#roadmap_right_5', 0.5,
            {opacity: 0, x: -50},
            {opacity: 1, x: 0}, 0.1);


    var tween_roadmap_cube_1 = TweenMax.staggerFromTo('#roadmap_cube_1', 0.5,
            {opacity: 0, scale: 0},
            {opacity: 1, scale: 1}, 0.1);

    var tween_roadmap_cube_2 = TweenMax.staggerFromTo('#roadmap_cube_2', 0.5,
            {opacity: 0, scale: 0},
            {opacity: 1, scale: 1}, 0.1);

    var tween_roadmap_cube_3 = TweenMax.staggerFromTo('#roadmap_cube_3', 0.5,
            {opacity: 0, scale: 0},
            {opacity: 1, scale: 1}, 0.1);

    var tween_roadmap_cube_4 = TweenMax.staggerFromTo('#roadmap_cube_4', 0.5,
            {opacity: 0, scale: 0},
            {opacity: 1, scale: 1}, 0.1);

    var tween_roadmap_cube_5 = TweenMax.staggerFromTo('#roadmap_cube_5', 0.5,
            {opacity: 0, scale: 0},
            {opacity: 1, scale: 1}, 0.1);
            


   // Scene ScrollMagic
    var scene = new ScrollMagic.Scene({triggerElement: "#scan__", offset: -100})
                                     .triggerHook(0.4)
                                     //.addIndicators({name: "scan", colorTrigger: "red", indent:200})
                                     .setTween(tween_scan_text)
                                     .reverse(false)
                                     .addTo(controller)

    var scene2 = new ScrollMagic.Scene({triggerElement: "#visualisation__", offset: -100})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "visu", colorTrigger: "blue", indent:300})
                                    .setTween(tween_visu_text)
                                    .reverse(false)
                                    .addTo(controller)

    var scene3 = new ScrollMagic.Scene({triggerElement: "#deplacement__", offset: -200})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_depla)
                                    .reverse(false)
                                    .addTo(controller)

    var scene4 = new ScrollMagic.Scene({triggerElement: "#qui__", offset: -200})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_box_qui)
                                    .reverse(false)
                                    .addTo(controller)

    //Phase 1
    var scene5 = new ScrollMagic.Scene({triggerElement: "#roadmap", offset: -150})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_left_1)
                                    .reverse(true)
                                    .addTo(controller)

    var scene6 = new ScrollMagic.Scene({triggerElement: "#roadmap", offset: -150})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_right_1)
                                    .reverse(true)
                                    .addTo(controller)

    var scenecube1 = new ScrollMagic.Scene({triggerElement: "#roadmap", offset: -150})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_cube_1)
                                    .reverse(true)
                                    .addTo(controller)

    //phase 2
    var scene7 = new ScrollMagic.Scene({triggerElement: "#roadmap_right_1", offset: -250})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_left_2)
                                    .reverse(true)
                                    .addTo(controller)

    var scene8 = new ScrollMagic.Scene({triggerElement: "#roadmap_right_1", offset: -250})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:600})
                                    .setTween(tween_roadmap_right_2)
                                    .reverse(true)
                                    .addTo(controller)

    var scenecube2 = new ScrollMagic.Scene({triggerElement: "#roadmap_right_1", offset: -250})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_cube_2)
                                    .reverse(true)
                                    .addTo(controller)

    //phase 3
    var scene9 = new ScrollMagic.Scene({triggerElement: "#roadmap_left_2", offset: -260})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_left_3)
                                    .reverse(true)
                                    .addTo(controller)

    var scene10 = new ScrollMagic.Scene({triggerElement: "#roadmap_left_2", offset: -260})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_right_3)
                                    .reverse(true)
                                    .addTo(controller)

    var scenecube3 = new ScrollMagic.Scene({triggerElement: "#roadmap_left_2", offset: -260})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_cube_3)
                                    .reverse(true)
                                    .addTo(controller)

    //phase 4
    var scene11 = new ScrollMagic.Scene({triggerElement: "#roadmap_right_3", offset: -280})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_left_4)
                                    .reverse(true)
                                    .addTo(controller)

    var scene12 = new ScrollMagic.Scene({triggerElement: "#roadmap_right_3", offset: -280})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_right_4)
                                    .reverse(true)
                                    .addTo(controller)

    var scenecube4 = new ScrollMagic.Scene({triggerElement: "#roadmap_right_3", offset: -280})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_cube_4)
                                    .reverse(true)
                                    .addTo(controller)

    //phase 6
    var scene13 = new ScrollMagic.Scene({triggerElement: "#roadmap_left_4", offset: -280})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla_1", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_left_5)
                                    .reverse(true)
                                    .addTo(controller)

    var scene14 = new ScrollMagic.Scene({triggerElement: "#roadmap_left_4", offset: -280})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_right_5)
                                    .reverse(true)
                                    .addTo(controller)

    var scenecube5 = new ScrollMagic.Scene({triggerElement: "#roadmap_left_4", offset: -280})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_cube_5)
                                    .reverse(true)
                                    .addTo(controller)

   </script>

</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>