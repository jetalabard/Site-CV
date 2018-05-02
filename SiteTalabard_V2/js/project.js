angular.module('app').controller("ProjectController", function () {
    this.projects = [
        {
            title:"Réalisation d'une application Android (Projet personnel)",
            photo:"JeuxVideoImageApp.png",
            subtitle:"Création d'une application permettant de récupérer les flux RSS de JeuxVideo.com",
            date:"Novembre 2015",
            resume:"J'ai conçu cette application dans le but de me perfectionner en Android."+
                    " Des données sont stockées dans une base SQLite,le contenu de cette base est téléchargé depuis une url. Le reste des données est mis à jour via une connexion internet en parsant des flux RSS."+
                    " J'utilise dans cette application un SwipeRefreshLayout qui permet de rafraichir une liste mais aussi des WebView et des VideoView. ",
            links:[
                {
                    libl:"APK du Projet",
                    link:"https://www.dropbox.com/s/7uicuneniz98p5l/JeuxVideo.apk?dl=1",
                    liblLink:"JeuxVideo.apk",
                    url:false,
                    importance:true
                }
            ]
        },
        {
            title:"Réalisation d'une application Android (Projet personnel)",
            photo:"pattern.png",
            subtitle:"Création d'une application permettant de lister les patrons de conception du Gang of Four",
            date:"Octobre 2015",
            resume:"J'ai conçu cette application dans le but de me perfectionner en Android et de me remémorrer les patrons de conception."+
                    " Les données sont liées à une base de données SQLite sur le téléphone, on y trouve aussi des animations",
            links:[
                {
                    libl:"APK du Projet",
                    link:"https://www.dropbox.com/s/hjp9ch1u3j8o6cn/Pattern.apk?dl=1",
                    liblLink:"Pattern.apk",
                    url:false,
                    importance:true
                }
            ]
        },
        {
            title:"Réalisation d'un site responsive design (Projet personnel)",
            photo:"rwd.jpg",
            subtitle:"Conception d'un site faisant office de Curriculum Vitae et dans le but de m'entraîner sur des technologies web.",
            date:"Septembre 2015",
            resume:"Vous naviguez depuis tout à l'heure sur ce site, c'est moi qui l'ai conçu. Tout d'abord une première version avec Bootstrap et ensuite une seconde en m'inspirant de plusieurs template de responsive design",
            links:[
                {
                }
            ]
        },
        {
            title:"Stage Conseil Général du Puy-de-Dôme",
            photo:"osw.png",
            subtitle:"Etude de différentes possibilités pour adapter un site internet existant vers un environnement mobile",
            date:"Février 2015-Juillet 2015",
            resume:"Au cours de ce stage, j'ai réalisé des web services "+
                            "permettant d'alimenter en données une future application mobile. "+
                            "Pour réaliser cette application, j'ai étudié différentes possibilités "+
                            "afin de montrer toutes les technologies mobiles au Conseil Général comme le responsive design, "+
                            "une application native Android ou encore une application hybride en Ionic et Cordova.",
            links:[
                {
                    libl:"Rapport du Stage",
                    link:"https://www.dropbox.com/s/6g1texeuwzwh9xj/Talabard_J%C3%A9r%C3%A9my_Rapport_Stage%20CG.pdf?dl=1",
                    liblLink:"Talabard_Jérémy_Rapport_Stage CG.pdf",
                    url:false,
                    importance:true
                }
            ]
        },
        {
            title:"Réalisation d'un jeu de poker en réseau",
            photo:"poker.png",
            subtitle:"Création d'un serveur sur ordinateur servant de table de jeu, création d'une application mobile permettant d'intéragir avec le serveur et d'autres joueurs.",
            date:"Octobre 2014 - Décembre 2014",
            resume:"Dans le cadre de ma licence professionnelle, j'ai réalisé un projet avec 2 autres collègues. "+
                            "Nous avons suivi la méthode de travail Scrum. En dix semaines, nous avons découvert JavaFx et réalisé la table de jeu dans ce langage. "+
                            "Nous avons implémenté quasiment toutes les règles du Texas Holdem Poker. Et nous pouvions jouer une partie à plusieurs grâce à une application Android qui permet de voir sa main, "+ 
                            "de miser mais aussi de se coucher en faisant glisser les cartes pour qu'elles arrivent sur la table de jeu. ",
            links:[
                {
                    libl:"Rapport de projet",
                    link:"https://www.dropbox.com/s/gazbtihtpua3z4r/Talabard_J%C3%A9r%C3%A9my_Poker_Rapport.pdf?dl=1",
                    liblLink:"Talabard_Jérémy_Poker_Rapport.pdf",
                    url:false,
                    importance:true
                },
                {
                    libl:"Code et exécutable de la table de jeu",
                    link:"https://www.dropbox.com/s/l5utyj0yngm57ly/Talabard_J%C3%A9r%C3%A9my_Poker%20table.zip?dl=1",
                    liblLink:"Talabard_Jérémy_Poker table.zip",
                    url:false,
                    importance:true
                },
                {
                    libl:"Exécutable Android",
                    link:"https://www.dropbox.com/s/q47sw5mib8ocdd9/Talabard_J%C3%A9r%C3%A9my_Poker_application.apk?dl=1",
                    liblLink:"Talabard_Jérémy_Poker_application.apk",
                    url:false,
                    importance:true
                }
                
            ]
        },
        {
            title:"Stage chez Transport Blanquet et Fils (63)",
            photo:"tbf.png",
            subtitle:"Amélioration d'un outil de traçabilité",
            date:"Mars 2014-Mai 2014",
            resume:"L'outil de traçabilité est utilisé par des chauffeurs pour scanner "+
                            "des sacoches bancaires de sorte à connaître son itinéraire et l'heure de passage. "+
                            "Il a donc fallu reprendre un site internet développé avec le Framework PHP Yii, et "+
                            "aussi améliorer l'application faite sur des appareils Windows Mobile en Visual Basic "+
                            "en apportant plus de fonctionnalités.",
            links:[
                {
                    libl:"Rapport de Stage",
                    link:"https://www.dropbox.com/s/2sdstv0wn4z41ew/Talabard_J%C3%A9r%C3%A9my_Rapport_Stage%20TBF.pdf?dl=1",
                    liblLink:"Talabard_Jérémy_Rapport_Stage TBF.pdf",
                    url:false,
                    importance:true
                }
            ]
        },
        {
            title:"Gestionnaire de planning chez TBF",
            photo:"Microsoft-VBA-Large.png",
            subtitle:"Améliaration d'un outil de planning sous excel",
            date:"Septembre 2014",
            resume:"Automatisation de tâches répétitives sous excel grâce à des macros en Visual Basic pour Applications.",
            links:[
                {
                    libl:"Projet",
                    link:"https://www.dropbox.com/s/54mym5g4jj5xl5o/Talabard_J%C3%A9r%C3%A9my_Planning.rar?dl=1",
                    liblLink:"Talabard_Jérémy_Planning.rar",
                    url:false,
                    importance:false
                }
            ]
        },
        {
            title:"JRetouch",
            photo:"Jretouch.png",
            subtitle:"Réalisation d'un logiciel de retouche d'images",
            date:"Octobre 2013-Mars 2014",
            resume:"Au cours de mon DUT, j'ai réalisé un projet par groupe de quatre. "+
                            "Le but était de faire un logiciel en Java (Swing) en étudiant tout les algorithmes permettant "+
                            "la transformation d'une image, de rendre ce logiciel 'User friendly' "+ 
                            "et d'apprendre à réaliser un logiciel en groupe tout en mettant au courant "+
                            "notre tuteur de l'avancement du projet grâce à un blog.",
            links:[
                {
                    libl:"Rapport de projet",
                    link:"https://www.dropbox.com/s/eibgrwn4wu1s4dt/Talabard_J%C3%A9r%C3%A9my_Rapport_Retoucheur%20image.pdf?dl=1",
                    liblLink:"Talabard_Jérémy_Rapport_Retoucheur_image.pdf",
                    url:false,
                    importance:true
                },
                {
                    libl:"Projet",
                    link:"https://www.dropbox.com/s/gsx98m32g3kyobv/Talabard_J%C3%A9r%C3%A9my_JRetouch.7z?dl=1",
                    liblLink:"Talabard_Jérémy_JRetouch.7z",
                    url:false,
                    importance:true
                }
            ]
        }
    ];
});
