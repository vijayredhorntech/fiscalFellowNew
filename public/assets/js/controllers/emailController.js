uvCapitalApp.controller("emailController", function ($scope, $http, $timeout) {    
    $scope.loading = false;
    $scope.isError = false;
    $scope.isSuccess = false;
    $scope.subscriberEmailId = '';
    $scope.clock = ''; //initialise the time variable
    $scope.tickInterval = 1000 //milliseconds

    $scope.email = {
        name:'',
        companyName:'',
        emailId:'',
        phoneNumber:'',
        message:'',
        isEnquiry: 'true'
    };

    var tick = function () {
        $scope.clock = Date.now(); //get the current time
        $timeout(tick, $scope.tickInterval); //reset the timer
    }

    // Start the timer
    $timeout(tick, $scope.tickInterval);

    $scope.sendEmail = function (isEnquiry) {
        $scope.loading = true;

        var email = {
            name: '',
            companyName: '',
            emailId: '',
            phoneNumber: '',
            message: '',
            isEnquiry: true
        };
        
        if (isEnquiry) {
            email = {
                name: $scope.email.name,
                companyName: $scope.email.companyName,
                emailId: $scope.email.emailId,
                phoneNumber: $scope.email.phoneNumber,
                message: $scope.email.message,
                isEnquiry: isEnquiry
            };
        }
        else {
            email = {
                name: '',
                companyName: '',
                emailId: $scope.subscriberEmailId,
                phoneNumber: '',
                message: '',
                isEnquiry: isEnquiry
            };
        }
        $http.post("api/email/send", email)
            .then(handleSuccess, handleError);
    };

    var handleSuccess = function (response) {
        $scope.loading = false;
        $scope.isError = !response.data;
        $scope.isSuccess = response.data;
        hideMessage();
        clear();
        return response.data;
    };

    var handleError = function (response) {
        $scope.loading = false;
        $scope.isError = true;
        $scope.isSuccess = false;
        hideMessage();
        return response.data;
    };

    var hideMessage = function () {
        $timeout(function () {
            $scope.isError = false;
            $scope.isSuccess = false;
        }, 2000);
    };

    var clear = function () {
        $scope.email = {
            name: '',
            companyName: '',
            emailId: '',
            phoneNumber: '',
            message: '',
            isEnquiry: 'true'
        };
    }
});