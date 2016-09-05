
app.service('NotificationSvc', function(SweetAlert) {
  return {
		notifyUnauthorizedUser : function(){
			SweetAlert.swal("Please login!", "You are not authorized for this Action.", "error");
		}
	}
});