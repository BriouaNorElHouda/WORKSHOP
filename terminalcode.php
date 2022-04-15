php artisan make:migration create_room_tbl --create=rooms
php artisan make:migration create_reservation_tbl --create=reservations



php artisan make:controller RoomController --resource --model=Room
php artisan make:controller ReservationController --resource --model=Reservation
