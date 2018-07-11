const apiDomain = Laravel.apiDomain;
export const siteName = Laravel.siteName;

//export const getnames1= apiDomain + '/getnames1';
export const api = {
	login: apiDomain + '/authenticate',
	currentUser: apiDomain + '/user',
	updateUserProfile: apiDomain + '/user/profile/update',
	updateUserPassword: apiDomain + '/user/password/update',
	getnames1: apiDomain + '/getnames1',
	saves1: apiDomain + '/savenames',
};