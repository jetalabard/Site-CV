angular.module('app').controller("MenuController", function () {
    var viewModel = this;
    viewModel.menus = [
        {
            libl: "Menu",
            sous_menu: [
                {
                    libl: "Accueil",
                    url: "index.php"
                },
                {
                    libl: "Description Générale",
                    url: "index.php#first"
                },
                {
                    libl: "Curriculum Vitae",
                    url: "index.php#cv"
                },
                {
                    libl: "Formations",
                    url: "formations.php"
                },
                {
                    libl: "Compétences Informatiques",
                    url: "skills.php"
                },
                {
                    libl: "Projets/Stages",
                    url: "project.php"
                },
                {
                    libl: "Projets Personnels",
                    url: "personalProject.php"
                },
                {
                    libl: "Loisirs",
                    url: "hobies.php"
                },
                {
                    libl: "Emplois",
                    url: "job.php"
                },
                {
                    libl: "Contact",
                    url: "#footer"
                },
                {
                    libl: "Connexion",
                    url: "connection.php"
                },
                {
                    libl: "Administration",
                    url: "admin.php"
                },
                {
                    libl: "Déconnexion",
                    url: "./session/logout.php"
                }


            ]
        }
    ];
    viewModel.menusForm = [
        {
            libl: "Menu",
            sous_menu: [
                {
                    libl: "Accueil",
                    url: "../../index.php"
                },
                {
                    libl: "Description Générale",
                    url: "../../index.php#first"
                },
                {
                    libl: "Curriculum Vitae",
                    url: "../../index.php#cv"
                },
                {
                    libl: "Formations",
                    url: "../../formations.php"
                },
                {
                    libl: "Compétences Informatiques",
                    url: "../../skills.php"
                },
                {
                    libl: "Projets/Stages",
                    url: "../../project.php"
                },
                {
                    libl: "Projets Personnels",
                    url: "../../personalProject.php"
                },
                {
                    libl: "Loisirs",
                    url: "../../hobies.php"
                },
                {
                    libl: "Emplois",
                    url: "../../job.php"
                },
                {
                    libl: "Contact",
                    url: "../../index.php#footer"
                },
                {
                    libl: "Connexion",
                    url: "../../connection.php"
                },
                {
                    libl: "Administration",
                    url: "../../admin.php"
                },
                {
                    libl: "Déconnexion",
                    url: "../../session/logout.php"
                }


            ]
        }
    ];
});

        