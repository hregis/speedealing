angular.module('mean.europexpress').controller('EEPlanningController', ['$scope', '$routeParams', '$location', '$route', 'Global', '$http', 'EEPlanning', function($scope, $routeParams, $location, $route, Global, $http, Object) {
		$scope.global = Global;
		$scope.showEdit = {};

		$scope.cpt = 0;
		$scope.hsupp = 0;

		$scope.dateDay = function(day) {
			var year = parseInt($routeParams.id2);
			var week = parseInt($routeParams.id1);

			var d = new Date(year, 0, 0);

			d.setDate(d.getDate() + ((week - 1) * 7) - 1 + day);

			return d;

		}

		$scope.find = function() {
			if ($routeParams.id1 == null)
				return $scope.today();

			//console.log($routeParams);
			Object.query({week: $routeParams.id1, year: $routeParams.id2}, function(tournees) {
				$scope.tournees = tournees;
				$scope.cpt = $scope.tournees.length;
				
				// somme des heures Supp de la semaine
				for(var i=0;i<$scope.cpt;i++)
					$scope.hsupp+=tournees[i].hSupp;
			});
		};

		$scope.enableEdit = function(id) {
			$scope.showEdit[id] = true;
		};

		$scope.today = function() {
			var d = new Date();
			d.setHours(0, 0, 0);
			d.setDate(d.getDate() + 4 - (d.getDay() || 7));
			var week = Math.ceil((((d - new Date(d.getFullYear(), 0, 1)) / 8.64e7) + 1) / 7).toString();
			$location.path('module/europexpress/planning.html/' + week + '/' + d.getFullYear());
		};

		$scope.next = function() {
			var year = parseInt($routeParams.id2);
			var week = parseInt($routeParams.id1);

			if (week === 52) {
				year++;
				week = 0;
			}
			week++;

			//console.log('module/europexpress/planning.html/' + week + '/' + year);

			$location.path('module/europexpress/planning.html/' + week + '/' + year);
		};

		$scope.previous = function() {
			var year = parseInt($routeParams.id2);
			var week = parseInt($routeParams.id1);

			if (week === 1) {
				year--;
				week = 53;
			}
			week--;

			$location.path('module/europexpress/planning.html/' + week + '/' + year);
		};

		$scope.week = $routeParams.id1 + '/' + $routeParams.id2;

		$scope.disableEdit = function() {
			for (var i in $scope.showEdit)
				$scope.showEdit[i] = false;
		};

		/**
		 * AutoComplete User Driver
		 */
		function SearchDriver() {
			var that = this;
			this.options = {
				html: true,
				minLength: 1,
				outHeight: 100,
				maxWidth: 300,
				source: function(request, response) {
					// you can $http or $resource service to get data frome server.
					$http({method: 'POST', url: 'api/user/name/autocomplete', data: {
							take: '5',
							skip: '0',
							page: '1',
							pageSize: '5',
							filter: {filters: [{value: request.term}]}}
					}).
							success(function(data, status) {

						angular.forEach(data, function(row) {
							row.label = row.name;
							row.value = row.name;
						});

						// response data to suggestion menu.
						response(data);
					}).
							error(function(data, status) {
						response(data || "Request failed");
					});
				}
			};
			this.events = {
				change: function(event, ui) {
					if (ui.item == null)
						ui.item = {};

					$scope.aday.driver.id = ui.item.id;
					$scope.aday.driver.name = ui.item.name;
				}
			};
		}
		$scope.searchDriver = function() {
			this.searchUser = new SearchDriver();
			return this.searchUser;
		};

		/**
		 * AutoComplete Sous-Traitant
		 */
		function SearchSousTraitant() {
			var that = this;
			this.options = {
				html: true,
				minLength: 1,
				outHeight: 100,
				maxWidth: 300,
				source: function(request, response) {
					// you can $http or $resource service to get data frome server.
					$http({method: 'POST', url: 'api/societe/autocomplete?fournisseur=SUBCONTRACTOR', data: {
							take: '5',
							skip: '0',
							page: '1',
							pageSize: '5',
							filter: {filters: [{value: request.term}]}}
					}).
							success(function(data, status) {

						angular.forEach(data, function(row) {
							row.label = row.name;
							row.value = row.name;
						});

						// response data to suggestion menu.
						response(data);
					}).
							error(function(data, status) {
						response(data || "Request failed");
					});
				}
			};
			this.events = {
				change: function(event, ui) {
					if (ui.item == null)
						ui.item = {};

					$scope.aday.sousTraitant.id = ui.item.id;
					$scope.aday.sousTraitant.name = ui.item.name;
				}
			};
		}
		$scope.searchSousTraitant = function() {
			this.search = new SearchSousTraitant();
			return this.search;
		};

		$scope.update = function(id) {
			var article = $scope.aday;

			article.$update(function() {
				$route.reload();
				//$location.path('articles/' + article._id);
			});
		};

		$scope.findOne = function(id) {
			Object.get({
				planningId: id
			}, function(aday) {
				$scope.aday = aday;
			});
		};

		$scope.refresh = function() {
			/*angular.element('#refresh').confirm({
			 message: 'Are you really really sure?',
			 onConfirm: function()
			 {
			 /* Custom code here */

			// Return false to prevent default action
			/*	return false;
			 }
			 });*/

			$http({method: 'POST', url: 'api/europexpress/planning/refresh', data: {
					year: $routeParams.id2,
					week: $routeParams.id1}
			}).
					success(function(data, status) {
				$route.reload();
			}).
					error(function(data, status) {
				console.log("Request failed");
			});

		};

		$scope.disableRefresh = function() {
			var d = new Date();
			d.setHours(0, 0, 0);
			d.setDate(d.getDate() + 4 - (d.getDay() || 7));
			var todayWeek = Math.ceil((((d - new Date(d.getFullYear(), 0, 1)) / 8.64e7) + 1) / 7).toString();

			var year = parseInt($routeParams.id2);
			var week = parseInt($routeParams.id1);

			return (year < d.getFullYear() || week < todayWeek);
		};

		/* $scope.create = function() {
		 var article = new Articles({
		 title: this.title,
		 content: this.content
		 });
		 article.$save(function(response) {
		 $location.path("articles/" + response._id);
		 });
		 
		 this.title = "";
		 this.content = "";
		 };
		 
		 $scope.remove = function(article) {
		 article.$remove();  
		 
		 for (var i in $scope.articles) {
		 if ($scope.articles[i] == article) {
		 $scope.articles.splice(i, 1);
		 }
		 }
		 };
		 
		 $scope.find = function() {
		 Articles.query(function(articles) {
		 $scope.articles = articles;
		 });
		 };
		 
		 $scope.findOne = function() {
		 Articles.get({
		 articleId: $routeParams.articleId
		 }, function(article) {
		 $scope.article = article;
		 });
		 };*/
	}]);

angular.module('mean.europexpress').controller('EETourneeController', ['$scope', '$routeParams', '$location', '$route', 'Global', 'EEPlanning', function($scope, $routeParams, $location, $route, Global, Object) {
		$scope.global = Global;

		var crudServiceBaseUrl = "api/europexpress/tournee";

		$scope.dataSource = new kendo.data.DataSource({
			transport: {
				read: {
					url: crudServiceBaseUrl,
					type: "GET",
					dataType: "json"
				},
				update: {
					url: crudServiceBaseUrl,
					type: "PUT",
					dataType: "json"
				},
				destroy: {
					url: crudServiceBaseUrl,
					type: "DELETE",
					dataType: "json"
				},
				create: {
					url: crudServiceBaseUrl,
					type: "POST",
					dataType: "json"
				},
				parameterMap: function(options, operation) {
					if (operation !== "read" && options.models) {
						return {models: kendo.stringify(options.models)};
					}
				}
			},
			error: function(e) {
				// log error
				alert(e.xhr.responseText);
			},
			batch: true,
			pageSize: 50,
			schema: {
				model: {
					id: "_id",
					fields: {
						_id: {editable: false, nullable: true},
						storehouse: {editable: true, validation: {required: true}},
						datec: {type: "date", editable: true},
						client: {editable: true, defaultValue: {id: null, name: ""}},
						forfait: {editable: true, type: "boolean", defaultValue: false},
						Mond_mode: {editable: true, defaultValue: {id: "NONE", name: ""}},
						Mond_hNuit: {editable: true, type: "number", defaultValue: 0, validation: {min: 0}},
						Mond_panier: {editable: true, defaultValue: []},
						Tues_mode: {editable: true, defaultValue: {id: "NONE", name: ""}},
						Tues_hNuit: {editable: true, type: "number", defaultValue: 0, validation: {min: 0}},
						Tues_panier: {editable: true, defaultValue: []},
						Wedn_mode: {editable: true, defaultValue: {id: "NONE", name: ""}},
						Wedn_hNuit: {editable: true, type: "number", defaultValue: 0, validation: {min: 0}},
						Wedn_panier: {editable: true, defaultValue: []},
						Thur_mode: {editable: true, defaultValue: {id: "NONE", name: ""}},
						Thur_hNuit: {editable: true, type: "number", defaultValue: 0, validation: {min: 0}},
						Thur_panier: {editable: true, defaultValue: []},
						Frid_mode: {editable: true, defaultValue: {id: "NONE", name: ""}},
						Frid_hNuit: {editable: true, type: "number", defaultValue: 0, validation: {min: 0}},
						Frid_panier: {editable: true, defaultValue: []},
						Satu_mode: {editable: true, defaultValue: {id: "NONE", name: ""}},
						Satu_hNuit: {editable: true, type: "number", defaultValue: 0, validation: {min: 0}},
						Satu_panier: {editable: true, defaultValue: []}
					}
				}
			},
			sort: {field: "storehouse", dir: "asc"}
		});

		$scope.clientDropDownEditor = function(container, options) {
			$('<input id="id"/>')
					.attr("name", options.field)
					.appendTo(container)
					.kendoAutoComplete({
				minLength: 1,
				dataTextField: "name",
				filter: "contains",
				dataSource: {
					serverFiltering: true,
					serverPaging: true,
					pageSize: 5,
					transport: {
						read: {
							url: "api/societe/autocomplete",
							type: "POST",
							dataType: "json"
						}
					}
				}
			});
		}

		$scope.modeDropDownEditor = function(container, options) {
			$('<input data-ng-model="name" data-bind="value:' + options.field + '"/>')
					.appendTo(container)
					.kendoDropDownList({
				autoBind: true,
				dataTextField: "name",
				dataValueField: "id",
				dataSource: [
					{id: "NONE", name: ""},
					{id: "AM", name: "AM"},
					{id: "PM", name: "PM"},
					{id: "DAY", name: "En journée"}
				]
			});
		}

		$scope.panierMultiSelect = function(container, options) {
			$('<input data-bind="value:' + options.field + ', source: ' + options.field + '" />')
					.appendTo(container)
					.kendoMultiSelect({
				minLength: 1,
				placeholder: "Sélectionner les paniers...",
				autoBind: true,
				//dataTextField: "name",
				//dataValueField: "id",
				dataSource: {
					serverFiltering: true,
					serverPaging: true,
					pageSize: 5,
					transport: {
						read: {
							url: "api/europexpress/tournee/select/panier",
							type: "POST",
							dataType: "json"
						}
					}
				}
			});
		}
	}]);