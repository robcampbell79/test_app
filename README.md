A laravel created project that uses curl in the model to hit on an api endpoint written in golang which is passed into the controller and finally displayed in the view. The model is found at: app/Mytest.php, the controller is found at: app/Http/Controllers/TestController.php, the view is found at: resources/views/mytest/index.blade.php, and on a side note, index.blade.php uses a template found at: resources/views/layout.blade.php.

All the pieces of the test_app project that were altered:

routes/web.php - I added the line Route::resource('mytest', 'TestController');

app/Mytest.php - I created this php file to act as a custom model

app/Http/Controllers/TestController.php - I created this php file to act as a custom controller

resources/views/layout.blade.php - I created this php file to act as a template for other views

resources/views/mytest - I created the folder mytest

resources/views/mytest/index.blade.php - I created this php file to act as a custom view that displays the json from the go server

I believe everything else in test_app is out of the box for a Laravel project.
