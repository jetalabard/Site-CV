angular.module('app').controller("FormationController", function ($scope) {

    $scope.formations = {};

    $scope.getFormations = function () {
        var store = window.localStorage['formations'] || '{}';
        if (store !== null && store !== '{}')
        {
            $scope.formations = JSON.parse(store);
        }
        else {
            var result;
            var success = false;
            $.ajax({
                async: false,
                type: 'post',
                dataType: "json",
                url: './db/getData.php',
                data: {table: "formation"},
                success: function (obj) {
                    result = null;
                    result = JSON.parse(JSON.stringify(obj));
                    success = true;
                }
            });
            if (success === true) {
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
                window.localStorage["formations"] = JSON.stringify(result);
                $scope.formations = result;
            }
        }
    };
});
