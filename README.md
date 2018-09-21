# laravel_learning

###### Creació d'una ruta amb pas de paràmetres
~~~
Route::get('/post/{id}/{name}', function ($id,$name){
    return "Este es el post numº $id de $name";
});
~~~
###### Creació d'una ruta amb pas de paràmetres i filtrat dels mateixos
~~~
Route::get('/post/{id}/{name}', function ($id,$name){
    return "Este es el post nº $id de $name";
})->where('name', '[a-zA-Z]+');
~~~
* namespace (S'utilitza per no crear conflicte en altres classes, mètodes o variables que vaiguin crear les altres usuaris)
* Si la App es mol complexa, utilitzarem els controladors per a gestionar les rutes.
###### Per enllaçar l'arxiu de les rutes amb el contolador creat
~~~
Route::get('/start','ExampleController@start');

    * Primer argument: URL
    * Segon argument: Nom del controlador@nomDeLaFuncioQueUtilitzarem
~~~
* php artisan make:controller nomControlador (Per crear un controlador de forma automàtica (hem d'estar dintre la carpeta del projecte!!!))
* php artisan make:controller --resource nomControlador (Per crear un controlador de forma automàtica amb una serie de recursos predefinits (hem d'estar dintre la carpeta del projecte!!!))
* php artisan route:list (Llista totes les URL's que tenim creades)
* Si els mètodes que ens crea el "php artisan make:controller --resource" ens serveixen per la nostra web, si dintre el fitxer de rutes afegim "Route::resource("post","Example3Controller");", ens crea totes les rutes automàticament
* Bootstrap (Framework CSS, permet donar format a un lloc Web utilitzant llibreries CSS)