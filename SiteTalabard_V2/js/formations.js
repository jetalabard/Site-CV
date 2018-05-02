angular.module('app').controller("FormationController", function () {
    this.formations = [
        {
            title:"Licence 3 Informatique (en cours)",
            photo:"ubp.png",
            subtitle:"Université Blaise Pascal à Aubière(63)",
            date:"2015-2016",
            resume:"L'objectif de la licence Informatique est de donner une connaissance approfondie des systèmes informatiques, de leurs "+
                            "applications et des méthodes de conception de logiciels. Elle propose une formation de base solide dans les domaines "+
                            "fondamentaux de l'informatique : algorithmique, architecture, réseaux, systèmes d'exploitation, génie logiciel, bases "+
                            "de données, mathématiques pour l'informatique, recherche opérationnelle, recouvrant ainsi tous les grands domaines "+
                            "de l'Informatique.",
            links:[
                {
                    libl:"Détail de la Licence",
                    link:"https://www.dropbox.com/s/lp4fufzs432mlb4/Licence_Informatique.pdf?dl=1",
                    liblLink:"Licence_Informatique.pdf",
                    url:false,
                    importance:false
                }
            ]
        },
        {
            title:"Licence Professionnelle Génie logiciel, développement d'applications pour plateformes mobiles",
            photo:"dev_mobile.png",
            subtitle:"Université D'Auvergne Aubière(63)",
            date:"2014-2015",
            resume:"Cette licence spécialise des informaticiens sur les thèmes "+
                            "du génie logiciel et de l'informatique mobile. Ainsi, à l'issue de la licence, "+
                            "l'analyse et le développement fiable de logiciels auront été détaillés avec le Java, "+
                            "le C#, le C++ et l'ObjectiveC. Des supports variés de développement sont à la disposition "+
                            "des étudiants afin qu'ils soient capables de développer pour les téléphones portables "+
                            "et les tablettes du marché (Windows phone, Android, IOs), ainsi que pour de supports "+
                            "plus exceptionnels (Sailfish, QT mobile).",
            links:[
                {
                    libl:"Détail de la Licence Pro",
                    link:"https://www.dropbox.com/s/v40vok4hl8gi3dr/Licence_pro.pdf?dl=1",
                    liblLink:"Licence_pro.pdf",
                    url:false,
                    importance:false
                },
                {
                    libl:"Notes Licence",
                    link:"https://www.dropbox.com/s/ccmkkhdj3nicx86/Talabard_J%C3%A9r%C3%A9my_Feuille%20de%20Note_Licence_Pro.pdf?dl=1",
                    liblLink:"Talabard_Jérémy_Feuille.pdf",
                    url:false,
                    importance:true
                },
                {
                    libl:"Diplôme Licence Pro",
                    link:"https://www.dropbox.com/s/x9m0pi5cutjnl4m/Talabard_J%C3%A9r%C3%A9my_attestation_diplome_licence_pro.jpg?dl=1",
                    liblLink:"Talabard_Jérémy_attestation_diplome_licence_pro.jpg",
                    url:false,
                    importance:true
                }
                
            ]
        },
        {
            title:"DUT informatique",
            photo:"iut.jpg",
            subtitle:"Université D'Auvergne Aubière(63)",
            date:"2012-2014",
            resume:"Le DUT informatique est un diplôme universitaire national à bac + 2 (sur quatre semestres) "+
                            "conduisant essentiellement au métier de développeur de logiciels dans différents langages (C, "+
                            "C++, JAVA, C#, PHP, …), d'administrateur de systèmes d'exploitation, de bases de données et de "+
                            "réseaux. Il est aussi un excellent diplôme généraliste, alliant la théorie à la pratique.",
            links:[
                {
                    libl:"Détail du DUT",
                    link:"https://www.dropbox.com/s/x3mk41dh300e3iu/DUT_Info.pdf?dl=1",
                    liblLink:"DUT_Info.pdf",
                    url:false,
                    importance:false
                },
                {
                    libl:"Notes S1",
                    link:"https://www.dropbox.com/s/a84lqnoc2gfjaot/Talabard_J%C3%A9r%C3%A9my_Note%20DUT_S1.jpg?dl=1",
                    liblLink:"Talabard_Jérémy_Note DUT_S1.jpg",
                    url:false,
                    importance:true
                },
                {
                    libl:"Notes S2",
                    link:"https://www.dropbox.com/s/0x1xtzqkkc03t25/Talabard_J%C3%A9r%C3%A9my_Note%20DUT_S2.jpg?dl=1",
                    liblLink:"Talabard_Jérémy_Note DUT_S2.jpg",
                    url:false,
                    importance:true
                },
                {
                    libl:"Notes S3",
                    link:"https://www.dropbox.com/s/oa94kulyrvm5y1d/Talabard_J%C3%A9r%C3%A9my_Note%20DUT_S3.jpg?dl=1",
                    liblLink:"Talabard_Jérémy_Note DUT_S3.jpg",
                    url:false,
                    importance:true
                },
                {
                    libl:"Notes S4",
                    link:"https://www.dropbox.com/s/jwhjloa2f4ib9ye/Talabard_J%C3%A9r%C3%A9my_Note%20DUT_S4.jpg?dl=1",
                    liblLink:"Talabard_Jérémy_Note DUT_S4.jpg",
                    url:false,
                    importance:true
                },
                {
                    libl:"Diplôme DUT",
                    link:"https://www.dropbox.com/s/vt73pj7pqwy2xl4/Talabard_J%C3%A9r%C3%A9my_Diplome_DUT.jpg?dl=1",
                    liblLink:"Talabard_Jérémy_Diplome_DUT.jpg",
                    url:false,
                    importance:true
                }
                
            ]
        },
        {
            title:"Baccalauréat Générale scientifique (SI)",
            photo:"bacS.jpg",
            subtitle:"Lycée Albert Londres Cusset (03)",
            date:"2009-2012",
            resume:"Le baccalauréat scientifique implique des capacités de concentration, de rigueur, "+
                            "de raisonnement et un goût de l'expérimentation. Son objectif est de développer une réelle "+
                            "culture scientifique fondée sur des connaissances et une approche expérimentale des sciences. ",
            links:[
                {
                    libl:"Détail du BAC S",
                    link:"",
                    liblLink:"http://www.onisep.fr/Choisir-mes-etudes/Au-lycee-au-CFA/Au-lycee-general-et-technologique/Les-bacs-generaux/Le-bac-S-scientifique",
                    url:true,
                    importance:false
                },
                {
                    libl:"Notes BAC",
                    link:"https://www.dropbox.com/s/econ14cdqhhvnet/Talabard_J%C3%A9r%C3%A9my_Note%20Bac.jpg?dl=1",
                    lliblLinkink:"Talabard_Jérémy_Note Bac.jpg",
                    url:false,
                    importance:true
                },
                {
                    libl:"Diplôme",
                    link:"",
                    liblLink:"",
                    url:false,
                    importance:true
                }
            ]
        }
    ];
});