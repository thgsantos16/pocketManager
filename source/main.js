// javascript Source

function message(txt, type) {
	if(type == "error") $('#messages').css('background', '#e65e5e');
	else $('#messages').css('background', '#064037');
	$('#messages').html(txt);
	$('#messages').fadeIn();
	$('#messages').css('top', '25px');
	setTimeout(function(){
		$('#messages').fadeOut();
		$('#messages').css('top', '-124px');
	}, 4300);
}


// State Control
function navigate(destination) {
	old = state;
	state = destination;
	var appElement = document.querySelector('[ng-app=pocketManager]');
    var $scope = angular.element(appElement).scope();

    $scope.$apply(function() {

        switch(old) {
        	case "root":
	        	$scope.rootView = false;
	        	break;     
        	case "login":
	        	$scope.loginView = false;
	        	break;     
        	case "register":
	        	$scope.registerView = false;
	        	break;    
        	case "dashboard":
	        	$scope.dashboardView = false;
	        	break;        	
        }

        switch(state) {
        	case "root":
	        	$scope.rootView = true;
	        	break;     
        	case "login":
	        	$scope.loginView = true;
	        	break;     
        	case "register":
	        	$scope.registerView = true;
	        	break;     
        	case "dashboard":
	        	$scope.dashboardView = true;
	        	break;       	
        }
    });


	if(state != "root") {
		$("main").css("width", "30%");
		$("main").css("marginLeft", "35%");
	}

	else {
		$("main").css("width", "50%");
		$("main").css("marginLeft", "25%");
	}
}

function innerPages(user) {
	$('#noModal').css({
		padding: 0,
    	display: 'block'
	}); 

	$('main').css({
		width: '100%',
	    marginLeft: 0,
	    height: 'auto'
	}); 

	$('#inner').css({
		background: '#FFF',
		padding: '2%'
	}); 

	$('#logo').css({
		width: '0'
	}); 

	$('#logo').fadeOut();

	$('header').fadeIn();
	$('header').css({
		top: 0,
		marginBottom: '272px'
	});

	$('body').css({
		background: 'url(assets/img/bg2.jpg)'
	}); 
	

	$.ajax({
	    url: "http://localhost:8080/PocketManager/api/v1/listing/"+user+"?apiKey=123456",
	    type: "GET",

	    contentType: 'application/json; charset=utf-8',
	    success: function(resultData) {

	    var i = 1;
	    var arr = [];
	    $.each(resultData, function(index, value) {
		    arr[value.id] = value;
		    i++;
		}); 

		var appElement = document.querySelector('[ng-app=pocketManager]');
	    var $scope = angular.element(appElement).scope();
    	$scope.$apply(function() {
	       $scope.expenses = arr;
	    });

	    },
	    error : function(jqXHR, textStatus, errorThrown) {
	    },

	    timeout: 120000,
	});
}

$(function() {
	$("body").fadeIn(1200);

	$('#messages').click(function() {
		$('#messages').fadeOut();
		$('#messages').css('top', '-124px');
	});

	$.ajaxSetup({
	   type: 'POST',
	   headers: { "cache-control": "no-cache" }
	});

	$('#whiteShadow').click(function() {
		$('#whiteShadow').fadeOut();
		$('#addExpense').fadeOut();
	});
});