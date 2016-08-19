'use strict'

app.factory('gravatarUrlBuilder',function(md5){
	return {
		buildGravatarUrl: function(user){
			var gravatarUrl = "http://www.gravatar.com/avatar/";
		var defaultGravatarUrl = gravatarUrl + "000?s=200";
		return gravatarUrl + md5.createHash(user.emailAddress) + ".jpg?s=200&r=g";
		},
		buildGravatarUrlFromEmail: function(email){
			var gravatarUrl = "http://www.gravatar.com/avatar/";
		var defaultGravatarUrl = gravatarUrl + "000?s=200";
		return gravatarUrl + md5.createHash(email) + ".jpg?s=200&r=g";
		}

	}
});
