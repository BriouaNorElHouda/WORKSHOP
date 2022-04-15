use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;

Route::resource('rooms', RoomController::class);
Route::resource('reservations', ReservationController::class);
Route::resource('users', UserController::class);
