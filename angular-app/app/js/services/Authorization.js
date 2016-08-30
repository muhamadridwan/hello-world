
app.service('Authorization', function($state, $window, AppCache) {

  this.authorized;
  this.memorizedState;
  this.authToken;

  var clear = function() {
    this.authorized = false;
    this.memorizedState = null;
  },

  go = function(fallback) {
    this.authorized = true;
    var targetState = this.memorizedState ? this.memorizedState : fallback;
    $state.go(targetState);
  };

  if($window.localStorage['Auth']){
	  return $window.localStorage['Auth'];
  } 
  else
  {
    return { 
	authorized: this.authorized,
    memorizedState: this.memorizedState,
    authToken : this.authToken,
	clear: clear,
    go: go
	}
  }
});