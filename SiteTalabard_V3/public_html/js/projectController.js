angular.module('app').controller("ProjectController", function ($scope) {

    $scope.projects = {};

    $scope.getProjects = function () {
        var store = window.localStorage['projects'] || '{}';
        if (store !== null && store !== '{}')
        {
            $scope.projects = JSON.parse(store);
        }
        else {
            var result;
            $.ajax({
                async: false,
                type: 'post',
                dataType: "json",
                url: './db/getData.php',
                data: {table: "project"},
                success: function (obj) {
                    result = null;
                    result = JSON.parse(JSON.stringify(obj));
                }
            });
            for (var i in result) {
                $.ajax({
                    async: false,
                    type: 'post',
                    dataType: "json",
                    url: './db/getDataLink.php',
                    data: {id: JSON.stringify(result[i].idlinks)},
                    success: function (obj) {
                        var links = JSON.parse(JSON.stringify(obj));
                        result[i].links = links;
                    }
                });
            }
            window.localStorage["projects"] = JSON.stringify(result);
            $scope.projects = result;
        }
    };
});

        