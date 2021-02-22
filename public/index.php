<!DOCTYPE html>
<html lang="fr"  class="h-full bg-fixed">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind CSS Website Template</title>
    <link rel="stylesheet" type="text/css" href="../output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body class="bg-gray-100">
<!--Classe utilitaire-->
<!--DOCS https://nerdcave.com/tailwind-cheat-sheet-->
<!-- npm install tailwindcss-->
<!--LE CSS-->
<!--npx tailwind init -->
<!-- npx tailwind build styles.css -o output.css-->
<!--Appel de outpout.css-->


<!--RESOURCES : https://tailwindcomponents.com/component/stripe-partner-form-->
<header class="md:container md:mx-auto shadow-lg">
    <nav class="bg-white text-green-400 px-20 pt-5 shadow-md">
        <div class="-mb-px flex justify-center">
            <a class="hover:text-blue-500 text-base md:text-lg   font-semibold no-underline text-teal-dark border-b-2 border-teal-dark uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
                ACCUEIL
            </a>
            <a class="hover:text-blue-500 text-base md:text-lg  font-semibold no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
                PRODUITS
            </a>
            <a class="hover:text-blue-500 text-base md:text-lg font-semibold no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
                OFFRES PROMOS
            </a>
            <a class="hover:text-blue-500 text-base md:text-lg  font-semibold no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3" href="#">
                MEMBRES
            </a>
        </div>
    </nav>
</header>

<div class="md:container md:mx-auto mt-5 shadow-lg">
    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block text-yellow-300">QIWOGAMES</span>
                <span class="block text-green-400">Un site de jeuw vidéo indé ! </span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md hover:text-red-600 text-white bg-red-600 hover:bg-blue-200">
                        Visitez
                    </a>
                </div>
                <div class="ml-3 inline-flex rounded-md shadow">
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-yellow-600 bg-white hover:bg-green-300">
                        En savoir plus
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="md:container md:mx-auto mt-5 bg-white">

        <div class="flex">
            <div class="bg-green-200 p-5 rounded m-5 w-2/5">
                <h2 class="text-red-300 font-extra-bold tracking-tight sm:text-4xl">Tester Unity 2020</h2>
                <h3 class="text-blue-300 text-2xl font-extra-bold tracking-tight sm:text-4xl">Un moteur de jeux gratuit</h3>
                <div class="flex justify- max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">

                    <div class="block">
                        <img src="https://picsum.photos/800" class="rounded object-fill h-48 w-full  h-auto">
                    </div>
                    <div class="block ml-5">
                        <h4 class="text-red-900 text-2xl">Juste incroyable</h4>
                        <p>Il est l'un des plus répandus dans l'industrie du jeu vidéo,
                        aussi bien pour les grands studios que pour les indépendants du
                        fait de sa rapidité aux prototypages et qu'il permet de sortir les
                            jeux sur tous les supports.
                        </p>
                    </div>
                </div>
                <div class="block flex justify-end">
                    <a href="#" class="border border-transparent text-base font-medium rounded-md text-yellow-100 bg-red-600 hover:bg-blue-300 p-5">
                        En savoir plus
                    </a>
                </div>
            </div>

            <div class="bg-red-200 p-5 rounded m-5 w-2/5">

            </div>

            <div class="bg-blue-200 p-5 rounded m-5 w-2/5">

            </div>
        </div>
</div>


        <div class="md:container md:mx-auto">
            <div class="h-2 bg-indigo"></div>
            <div class="flex items-center">
                <div class="md:container md:mx-auto  bg-white rounded shadow-lg">
                    <div class="md:container md:mx-auto px-12 py-6">
                        <div class="text-center">
                            <h1 class="font-normal text-3xl text-grey-darkest leading-loose my-3 w-full">Plus d'information ?</h1>
                            <div class="w-full text-center">
                                <form action="#">
                                    <div class="max-w-sm mx-auto p-1 pr-0 flex items-center">
                                        <input type="email" placeholder="email@email.fr" class="flex-1 appearance-none rounded shadow p-3 text-grey-dark mr-2 focus:text-red-500 focus:outline-none">
                                        <button type="submit" class="bg-yellow-500 text-white text-base font-semibold uppercase p-3 rounded shadow hover:bg-green-500">S'inscrire</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
