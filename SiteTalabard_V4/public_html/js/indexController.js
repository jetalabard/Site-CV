angular.module('app').controller("IndexController", function ($scope) {

    $scope.description = {};
    $scope.documents = {};
    $scope.heads = {};
	
	
	$scope.popupApp = function(){
		if( /Android|BlackBerry/i.test(navigator.userAgent) ) {
			$scope.android = true;
	    }
	}

    $scope.getDescription = function () {
        var store = window.localStorage['description'] || '{}';
        if (store !== null && store !== '{}')
        {
            $scope.description = JSON.parse(store);
        }
        else {
            var result;
            $.ajax({
                async: false,
                type: 'post',
                dataType: "json",
                url: './db/getData.php',
                data: {table: "description"},
                success: function (obj) {
                    result = null;
                    result = JSON.parse(JSON.stringify(obj))[0];
                    window.localStorage["description"] = JSON.stringify(result);
                }, error: function () {
                }

            });
            $scope.description = result;
        }
    };
    $scope.getDocuments = function () {
        var store = window.localStorage['documents'] || '{}';
        if (store !== null && store !== '{}')
        {
            $scope.documents = JSON.parse(store);
        }
        else {
            var result;
            $.ajax({
                async: false,
                type: 'post',
                dataType: "json",
                url: './db/getData.php',
                data: {table: "document"},
                success: function (obj) {
                    result = null;
                    result = JSON.parse(JSON.stringify(obj));
                    window.localStorage["documents"] = JSON.stringify(result);
                }, error: function () {
                }
            });
            $scope.documents = result;
        }
    };
    $scope.getHeads = function () {
        var store = window.localStorage['heads'] || '{}';
        if (store !== null && store !== '{}')
        {
            $scope.heads = JSON.parse(store);
        }
        else {
            var result;
            $.ajax({
                async: false,
                type: 'post',
                dataType: "json",
                url: './db/getData.php',
                data: {table: "head"},
                success: function (obj) {
                    result = null;
                    result = JSON.parse(JSON.stringify(obj));
                    window.localStorage["heads"] = JSON.stringify(result);
                }, error: function () {
                }
            });
            $scope.heads = result;
        }
    };
});

        