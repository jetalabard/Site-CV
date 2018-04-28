angular.module('app').controller("ConnectionController", function ($scope) {
    $scope.images = {};
    $scope.projects = {};
    $scope.jobs = {};
    $scope.formations = {};
    $scope.hobies = {};
    $scope.current_item = {};
    $scope.personalProjects = {};
    
    
    $scope.makeUrl = function (imageName) {
        return "img/" + imageName;
    };

    $scope.getImages = function () {
        var result;
        $.ajax({
            async: false,
            type: 'post',
            dataType: "json",
            url: '../../db/getData.php',
            data: {table: "image"},
            success: function (obj) {
                result = null;
                result = JSON.parse(JSON.stringify(obj));
            },error: function () {
                $scope.getImages();
            }
        });
        $scope.images = result;
    };

    $scope.getListItem = function () {
        var result;
        $.ajax({
            async: false,
            type: 'post',
            dataType: "json",
            url: '../../db/getDataSimplified.php',
            data: {table: "project"},
            success: function (obj) {
                result = null;
                result = JSON.parse(JSON.stringify(obj));
            },error: function () {
                $scope.getListItem();
            }
        });
        $scope.projects = result;
        $.ajax({
            async: false,
            type: 'post',
            dataType: "json",
            url: '../../db/getDataSimplified.php',
            data: {table: "personalproject"},
            success: function (obj) {
                result = null;
                result = JSON.parse(JSON.stringify(obj));
            },error: function () {
                $scope.getListItem();
            }
        });
        $scope.personalProjects = result;
        $.ajax({
            async: false,
            type: 'post',
            dataType: "json",
            url: '../../db/getDataSimplified.php',
            data: {table: "job"},
            success: function (obj) {
                result = null;
                result = JSON.parse(JSON.stringify(obj));
            },error: function () {
                $scope.getListItem();
            }
        });
        $scope.jobs = result;
        $.ajax({
            async: false,
            type: 'post',
            dataType: "json",
            url: '../../db/getDataSimplified.php',
            data: {table: "hobie"},
            success: function (obj) {
                result = null;
                result = JSON.parse(JSON.stringify(obj));
            },error: function () {
                $scope.getListItem();
            }
        });
        $scope.hobies = result;
        $.ajax({
            async: false,
            type: 'post',
            dataType: "json",
            url: '../../db/getDataSimplified.php',
            data: {table: "formation"},
            success: function (obj) {
                result = null;
                result = JSON.parse(JSON.stringify(obj));
            },error: function () {
                $scope.getListItem();
            }
        });
        $scope.formations = result;
        
        
    };
});

        