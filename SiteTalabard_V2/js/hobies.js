angular.module('app').controller("HobiesController", function () {
    this.hobies = [
        {
            title:"Judo/Jujitsu",
            photo:"judo.jpg",
            subtitle:"Licencié au Martres de Veyre (63)",
            date:"",
            resume:"Je pratique le judo depuis 15 ans. Je suis ceinture noire. J'aime ce sport parce qu'il permet de se "+
                            "défouler tout en apprenant à se contrôler. De plus, le code moral est très important, il va au delà "+
                            "du Judo car ces valeurs sont applicables dans la vie en générale. ",
            links:[
            ]
        },
        {
            title:"Théâtre",
            photo:"theatre.jpg",
            subtitle:"Compagnie Pattafyx à Vendat (03)",
            date:"",
            resume:"Je fais du théâtre depuis l'âge de dix ans. Cette activité m'a permis de m'ouvrir vers les personnes, "+
                            "de tenir des longs discours et d'être à l'aise à l'oral.",
            links:[
                {
                    libl:"Page Facebook de la compagnie",
                    link:"https://www.facebook.com/Compagnie-Pattafyx-232985006823257/timeline/",
                    liblLink:"",
                    url:true,
                    importance:true
                }
            ]
        },
        {
            title:"Course à pied",
            photo:"jogging.jpg",
            subtitle:"Amateur",
            date:"",
            resume:"La course à pied me permet de me vider l'esprit, "+
                            "mais elle m'apporte aussi un gain de souffle et d'énergie pour les autres sports.",
            links:[
                
            ]
        }
    ];
});
