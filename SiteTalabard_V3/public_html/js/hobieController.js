angular.module('app').controller("HobieController", function ($scope) {

    $scope.hobies = {};

    $scope.getHobies = function () {
        var store = window.localStorage['hobies'] || '{}';
        if (store !== null  && store !== '{}')
        {
            $scope.hobies = JSON.parse(store);
        }
        else {
            var result;
            $.ajax({
                async: false,
                type: 'post',
                dataType: "json",
                url: './db/getData.php',
                data: {table: "hobie"},
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
            window.localStorage["hobies"] = JSON.stringify(result);
            $scope.hobies = result;
        }
    };
});

        