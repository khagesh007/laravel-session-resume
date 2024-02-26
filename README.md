# laravel-session-resume

This is a simple solution to Laravel web session expired when user is not intracting with page. This will check if user session is active if its not active it will send a csrf token from controller which can be used on expired page for login form otherwise It wouldn't work, After successful login it will close the login modal and all the tokens on current page forms will be updated to latest one.
//write code block 
```
$(document).ajaxError(function(event,xhr,options,exc){
    if(xhr.status == 401 || xhr.status == 419){
        checkSession();
    }
});
```

This will check for ajax error code 401 & 419 and run session checker then will show modal to the user. You can add other xhr response code here as you wish, I am using this approch to not run the session checker on background for like every minute or so.
