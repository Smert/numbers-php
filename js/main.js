angular.module('numberApp', [])
	.factory('ModelNumber', ['$http', '$rootScope', function($http, $rootScope) {
		var service = {
			number: 0,
			translate: function (number, leng) {
				$http({method: 'GET', url: '/api.php?n=' + number + '&len=' + leng})
					.success(function(data) {
						service.number = data;
						$rootScope.$broadcast('number:updated');
					});
			}
		};
		return service;
	}])
	.controller('NumberForm', ['$scope', '$rootScope', 'ModelNumber', function ($scope, $rootScope, ModelNumber) {
		$scope.number = '';
		$scope.text = '';
		$scope.leng = 'ua';
		
		$scope.translate = function ($event) {
			if (typeof $event === 'object') {
				$event.preventDefault();
			}
			ModelNumber.translate($scope.number, $scope.leng);
		};
		
		$rootScope.$on('number:updated', function() {
            $scope.text = ModelNumber.number;
        });
	}]);