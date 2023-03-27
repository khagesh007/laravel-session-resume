# laravel-session-resume

This is a simple solution to Laravel web session expired when user is not intracting with page. This will will check if user session is active if its not active it will send a csrf token from controller which can be used on expired page for login form otherwise It wouldn't work, After successful login it will close the login modal and all the tokens on current page forms will be updated to latest one.
