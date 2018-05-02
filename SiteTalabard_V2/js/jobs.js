angular.module('app').controller("JobController", function () {
    this.jobs = [
        {
            title:"Patifrais (03)",
            photo:"patifrais.jpg",
            subtitle:"Livraison à domicile de produits frais",
            date:"Eté 2013/2014",
            resume:"Le but de ce travail était de faire une tournée en camionnette réfrégérée, dans un secteur géographique précis "+
                            "et de vendre des produits frais comme des viennoiseries, des desserts ou des plats cuisinés à des clients. "+
                            "(ou de trouver des nouveaux clients) C'est un travail compliqué qui nécessite une bonne organisation pour la "+
                            "gestion des stocks et pour suivre correctement la tournée. De plus, il faut être à l'écoute des besoins du client et très autonome.",
            links:[
            ]
        },
        {
            title:"GRTGaz (03)",
            photo:"GRTGaz.jpg",
            subtitle:"Agent administratif",
            date:"Eté 2013",
            resume:"Le but de ce travail était de gérer et de trier des documents qui ont été déménagé depuis un autre local. "+
                            "La patience et l'organisation étaient cruciales pour réaliser ce travail.",
            links:[
            ]
        },
        {
            title:"Bénévolat (03)",
            photo:"benevolat.jpg",
            subtitle:"Aide à l'organisation d'événementiel",
            date:"Octobre 2014 - Décembre 2014",
            resume:"Au sein de ma compagnie de théâtre, je participe à la réalisation "+
                            "d'un repas afin d'apporter de l'argent pour réaliser les spectacles. "+
                            "Mais j'ai aussi participé à l'organisation de la brocante de mon ancien club de Judo à Vendat (03).",
            links:[
                
            ]
        }
    ];
});
