<?php

use Illuminate\Http\Request;
use App\Servicio;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request)
{
    return $request->user();
});

Route::get('/servicios', function ()
{
    return Servicio::all();
});

Route::post('/servicio', function (req, res)
{
    Servicio.insert({'id': req.body.id},{ "$set": { 'valor' : req.body.valor}},
      {upsert: true, setDefaultsOnInsert: true}, (err, servicio) => {
          if (err) {
              res
                  .status(400)
                  .json(err);
          } else {
              console.log("Se agrego el servicio correctamente");
              res
                  .status(201)
                  .json(servicio);
          }
      })

});
