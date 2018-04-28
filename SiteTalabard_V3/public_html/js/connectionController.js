angular.module('app').controller("ConnectionController", function ($scope) {
    $scope.images = {};
    $scope.projects = {};
    $scope.jobs = {};
    $scope.formations = {};
    $scope.hobies = {};
    this.current_item = {};
    this.update = false;
    
    $scope.makeUrl = function (imageName) {
        return "img/" + imageName;
    };

    $scope.getImages = function () {
        var result;
        $.ajax({
            async: false,
            type: 'post',
            dataType: "json",
            url: '../db/getData.php',
            data: {table: "image"},
            success: function (obj) {
                result = null;
                result = JSON.parse(JSON.stringify(obj));
            }
        });
        $scope.images = result;
    };

    $scope.GoUpdate = function (formation,pageRedirect) {
        this.current_item = formation;
        document.location.href = pageRedirect;
        this.update = true;
    };
    $scope.getListItem = function () {
        var result;
        $.ajax({
            async: false,
            type: 'post',
            dataType: "json",
            url: '../db/getDataSimplified.php',
            data: {table: "project"},
            success: function (obj) {
                result = null;
                result = JSON.parse(JSON.stringify(obj));
            }
        });
        $scope.projects = result;
        $.ajax({
            async: false,
            type: 'post',
            dataType: "json",
            url: '../db/getDataSimplified.php',
            data: {table: "job"},
            success: function (obj) {
                result = null;
                result = JSON.parse(JSON.stringify(obj));
            }
        });
        $scope.jobs = result;
        $.ajax({
            async: false,
            type: 'post',
            dataType: "json",
            url: '../db/getDataSimplified.php',
            data: {table: "hobie"},
            success: function (obj) {
                result = null;
                result = JSON.parse(JSON.stringify(obj));
            }
        });
        $scope.hobies = result;
        $.ajax({
            async: false,
            type: 'post',
            dataType: "json",
            url: '../db/getDataSimplified.php',
            data: {table: "formation"},
            success: function (obj) {
                result = null;
                result = JSON.parse(JSON.stringify(obj));
            }
        });
        $scope.formations = result;
    };
});

        