angular.module('app').controller("JobController", function ($scope) {

    $scope.jobs = {};

    $scope.getJobs = function () {
        var store = window.localStorage['jobs'] || '{}';
        if (store !== null  && store !== '{}')
        {
            $scope.jobs = JSON.parse(store);
        }
        else {
            var result;
            $.ajax({
                async: false,
                type: 'post',
                dataType: "json",
                url: './db/getData.php',
                data: {table: "job"},
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
            window.localStorage["jobs"] = JSON.stringify(result);
            $scope.jobs = result;
        }
    };
});

        