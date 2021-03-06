<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.index');
});

Route::get('/index', function () {
    return view('templates.index');
});

Route::name('login')->get('login/', 'SistemController@login');

Route::name('iniciar_sesion')->get('iniciar_sesion/', 'SistemController@iniciar_sesion');

Route::name('home')->get('home/', 'SistemController@home');

Route::name('elements')->get('elements/', 'SistemController@elements');

Route::name('catalogo')->get('catalogo/', 'SistemController@catalogo');

Route::name('validar')->post('validar/', 'LoginController@validar');

Route::name('logout')->get('logout/', 'LoginController@logout');

//Route::name('paywithpaypal')->get('paywithpaypal/', 'PaymentController@paywithpaypal');



// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');

// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');

//-------------------------------------------Usuarios--------------------------------------------------------------

Route::name('usuarios')->get('usuarios/', 'SistemController@usuarios');

Route::name('guardar')->post('guardar/', 'SistemController@guardar');

Route::name('registrarse')->get('registrarse/', 'SistemController@registrarse');

Route::name('modificar')->get('modificar/{id}', 'SistemController@modificar');

Route::name('salvar')->put('salvar/{id}', 'SistemController@salvar');

Route::name('borrar')->get('borrar/{id}', 'SistemController@borrar');


//-------------------------------------------Productos--------------------------------------------------------------

Route::name('productos')->get('productos/{buscar?}', 'SistemController@productos');

Route::name('guardarProductos')->post('guardarProductos/', 'SistemController@guardarProductos');

Route::name('registrarProductos')->get('registrarProductos/', 'SistemController@registrarProductos');

Route::name('modificarProductos')->get('modificarProductos/{id}', 'SistemController@modificarProductos');

Route::name('salvarProductos')->put('salvarProductos/{id}', 'SistemController@salvarProductos');

Route::name('borrarProducto')->get('borrarProducto/{id}', 'SistemController@borrarProducto');


//-------------------------------------------Ventas--------------------------------------------------------------
Route::name('ventas')->get('ventas/', 'CRUDController@ventas');

Route::name('guardarVentas')->post('guardarVentas/', 'CRUDController@guardarVentas');

Route::name('registrarVentas')->get('registrarVentas/', 'CRUDController@registrarVentas');

Route::name('modificarVentas')->get('modificarVentas/{id}', 'CRUDController@modificarVentas');

Route::name('salvarVentas')->put('salvarVentas/{id}', 'CRUDController@salvarVentas');

Route::name('borrarVenta')->get('borrarVenta/{id}', 'CRUDController@borrarVenta');

//-------------------------------------------Materiales--------------------------------------------------------------
Route::name('materiales')->get('materiales/', 'CRUDController@materiales');

Route::name('guardarMateriales')->post('guardarMateriales/', 'CRUDController@guardarMateriales');

Route::name('registrarMateriales')->get('registrarMateriales/', 'CRUDController@registrarMateriales');

Route::name('modificarMateriales')->get('modificarMateriales/{id}', 'CRUDController@modificarMateriales');

Route::name('salvarMateriales')->put('salvarMateriales/{id}', 'CRUDController@salvarMateriales');

Route::name('borrarMaterial')->get('borrarMaterial/{id}', 'CRUDController@borrarMaterial');

Route::name('addCarrito')->get('addCarrito/{id?}', 'SistemController@addCarrito');

Route::name('detalleProducto')->get('detalleProducto/{id?}', 'SistemController@detalleProducto');

Route::name('buscar')->get('buscar/', 'SistemController@buscar');

Route::name('carrito')->get('carrito/', 'SistemController@carrito');

Route::post('/cart-add',    'CartController@add')->name('cart.add');

Route::get('/cart-checkout','CartController@cart')->name('cart.checkout');

Route::post('/cart-clear',  'CartController@clear')->name('cart.clear');

Route::post('/cart-removeitem',  'CartController@removeitem')->name('cart.removeitem');

Route::name('reporte')->get('reporte/', 'SistemController@reporte');


//------------------------------------------Direcciones--------------------------------------------------------------

Route::name('Direcciones2')->get('Direcciones2/', 'CRUDController@Direcciones2');

Route::name('guardarDirecciones2')->post('guardarDirecciones2/', 'CRUDController@guardarDirecciones2');

Route::name('registrarDirecciones2')->get('registrarDirecciones2/', 'CRUDController@registrarDirecciones2');

Route::name('modificarDirecciones2')->get('modificarDirecciones2/{id}', 'CRUDController@modificarDirecciones2');

// Route::name('salvarDirecciones')->put('salvarDirecciones/{id}', 'CRUDController@salvarDirecciones');

// Route::name('borrarDireccion')->get('borrarDireccion/{id}', 'CRUDController@borrarDireccion');

//------------------------------------------ MIO --------------------------------------------------------------

Route::name('guardarVentas')->get('guardarVentas/{id?}', 'CRUDController@guardarVentas');

Route::name('detalleUsuario')->get('detalleUsuario/', 'SistemController@detalleUsuario');

// Route::name('registrarDireccion')->get('registrarDireccion/{id?}/{cantidad?}', 'SistemController@registrarDireccion');


// Route::name('direcciones')->get('direcciones/', 'CrudController@direcciones');


//--------------------------------- Mapas google------------------------------------------
Route::name('mapa')->get('mapa/', 'SistemController@mapa');

//paypal

Route::name('paypal')->get('paypal/', 'SistemController@paypal');

//------------------------------------  Correos con gmail -------------------------

Route::name('sendemail')->get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

Route::get('confirmar_pago', 'PaymentController@confirmar_pago');
