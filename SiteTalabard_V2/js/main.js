angular.module('app').controller("DataController", function () {
    var viewModel = this;
    viewModel.description = {
        intitule: "Description Générale",
        name: "Talabard Jérémy",
        email: "jeremy.talabard@hotmail.fr",
        photo: "image_anonyme.png",
        resume: "Je m'appelle Jérémy Talabard. Je suis originaire de Vendat dans l'Allier (03), j'ai 21 ans. "+
                "J'ai eu mon Baccalauréat Scientifique en 2012. Suite à celà j'ai fait un DUT Informatique et une licence professionnelle développement d'applications pour plateformes mobiles à Clermont-Ferrand. " +
                "Je suis actuellement en Licence 3 informatique dans le but de faire un Master." +
                " Je suis quelqu'un d'autonome et qui n'a pas peur du travail. " +
                "Grâce aux différents stages et emplois que j'ai réalisés," +
                " j'ai acquît une bonne expérience dans le milieu professionnel mais surtout en développement informatique." +
                " Mon domaine informatique favori est le développement d'applications mobiles car leurs intérêts dans le monde d'aujourd'hui " +
                "est capital aussi bien pour les particuliers que les professionnels.",
        tel: "0677189651",
        faceBookLink: "https://www.facebook.com/jeremy.talabard",
        linkedinLink: "https://www.linkedin.com/profile/view?id=AAIAABYFOeIBA2k2B-Rqw86SJGu1IWol7UksASI&trk=nav_responsive_tab_profile"
    };
    
    viewModel.menus = [
        {
            libl: "Menu",
            sous_menu: [
                {
                    libl: "Accueil",
                    url: "index.html"
                },
                {
                    libl: "Description Générale",
                    url: "index.html#me"
                },
                {
                    libl: "Curriculum Vitae",
                    url: "index.html#cv"
                },
                {
                    libl: "Formations",
                    url: "formations.html"
                },
                {
                    libl: "Compétences Informatiques",
                    url: "skills.html"
                },
                {
                    libl: "Projets/Stages",
                    url: "project.html"
                },
                {
                    libl: "Loisirs",
                    url: "hobies.html"
                },
                {
                    libl: "Emplois",
                    url: "job.html"
                },
                {
                    libl: "Contact",
                    url: "#footer"
                }


            ]
        }
    ];
    viewModel.documents = [
        {
            type:"cv",
            link:"https://www.dropbox.com/s/civatb6142dsc4q/Talabard_J%C3%A9r%C3%A9my_CV_original.pdf?dl=1",
            name: "Talabard_Jérémy_CV_original.pdf",
            libl:"CV Coloré",
            importance:true
        },
        {
            type:"cv",
            link:"https://www.dropbox.com/s/t09lna6yxnfa51i/Talabard_J%C3%A9r%C3%A9my_CV_classique.pdf?dl=1",
            name: "Talabard_Jérémy_CV_classique.pdf",
            libl:"CV Classique",
            importance:true
        }
    ];
    viewModel.heads = [
        {
            title:"Talabard Jérémy",
            subtitle:"Développeur d'applications pour plateformes mobiles",
            subsubtitle:"En recherche de stage",
            resume: "Vous trouverez sur ce site toutes mes formations, mes projets, "+
                        "mes loisirs et toutes mes compétences dans le domaine de l'informatique."
        },
        {
            title:"Formations",
            subtitle:"",
            subsubtitle:"",
            resume: "Pour connaître mon parcours scolaire, universitaire et mes formations professionnelles."
        },
        {
            title:"Projets et Stages",
            subtitle:"",
            subsubtitle:"",
            resume: "Pour connaître les projets que j'ai réalisé au cours de mes différentes formations et mes projets personnels ainsi que pour connaître les stages que j'ai eu la chance de faire."
        },
        {
            title:"Loisirs",
            subtitle:"",
            subsubtitle:"",
            resume: "'Un esprit sain dans un corps sain'"
        },
        {
            title:"Emplois",
            subtitle:"",
            subsubtitle:"",
            resume: "Pour connaître mes emplois et pour montrer mes capacités à m'adapter à des environnements différents."
        },
        {
            title:"Mes compétences informatiques",
            subtitle:"",
            subsubtitle:"",
            resume: ""
        }
    ];
});

        