
app.service('Authorization', function($state, $localStorage) {

  this.authorized = false;
  this.memorizedState = null;
  this.authToken = "";
  this.userData = {};

  this.setAuth = function(authorized, token, userData){
	this.authorized = authorized;
    this.authToken = token;
	this.userData = userData;
  };
  
  this.clear = function(){
    this.authorized = false;
    this.memorizedState = null;
	this.authToken = "";
	this.userData = {};
  };

  this.go = function(fallback) {
    this.authorized = true;
    var targetState = this.memorizedState ? this.memorizedState : fallback;
    $state.go(targetState);
  };

  if($localStorage.auth){
	  return { 
	authorized: $localStorage.auth.authorized,
    memorizedState: $localStorage.auth.memorizedState,
    authToken : $localStorage.auth.authToken,
	userData :$localStorage.auth.userData,
	setAuth : this.setAuth,
	clear: this.clear,
    go: this.go
	};
  } 
  else
  {
    return { 
	authorized: this.authorized,
    memorizedState: this.memorizedState,
    authToken : this.authToken,
	userData : this.userData,
	setAuth : this.setAuth,
	clear: this.clear,
    go: this.go
	};
  }
});