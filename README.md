A laravel created project that uses curl in the model to hit on an api endpoint written in golang which is passed into the controller and finally displayed in the view. 

The model is found at: app/Mytest.php

The controller is found at: app/Http/Controllers/TestController.php

The view is found at: resources/views/mytest/index.blade.php

Side note, index.blade.php uses a template found at: resources/views/layout.blade.php

-------------------------------------------------------------------------------------

All the pieces of the test_app project that were altered:

routes/web.php - I added the line Route::resource('mytest', 'TestController');

app/Mytest.php - I created this php file to act as a custom model which has the function Call() which uses curl to hit upon the json api go server

app/Http/Controllers/TestController.php - I created this php file to act as a custom controller which passes the json object from the model to the view

resources/views/layout.blade.php - I created this php file to act as a template for other views

resources/views/mytest - I created the folder mytest to fold my custom view files

resources/views/mytest/index.blade.php - I created this php file to act as a custom view that displays the json from the go server that is passed in from the controller

I believe everything else in test_app is out of the box for a Laravel project.
