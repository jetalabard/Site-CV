angular.module('app').controller("SkillController", function ($scope) {

    $scope.skills = {};

    $scope.getSkills = function () {
        var store = window.localStorage['skills'] || '{}';
        if (store !== null  && store !== '{}')
        {
            $scope.skills = JSON.parse(store);
        }
        else {
            var result;
            $.ajax({
                async: false,
                type: 'post',
                dataType: "json",
                url: './db/getData.php',
                data: {table: "competence"},
                success: function (obj) {
                    result = null;
                    result = JSON.parse(JSON.stringify(obj));
                    window.localStorage["skills"] = JSON.stringify(result);
                }
            });
            $scope.skills = result;
        }
    };
});

        