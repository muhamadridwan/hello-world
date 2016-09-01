
app.service('Authorization', function($state, $localStorage, AppCache) {

  this.authorized = false;
  this.memorizedState = null;
  this.authToken = "";

  this.setAuth = function(authorized, token){
	this.authorized = authorized;
    this.authToken = token;  
  };
  
  this.clear = function(){
    this.authorized = false;
    this.memorizedState = null;
	this.authToken = "";
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
	setAuth : this.setAuth,
	clear: this.clear,
    go: this.go
	};
  }
});