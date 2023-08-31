<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get( '/', function () {
    // first session complete
    // $user = DB::select('select * from users where id = ?', [1]);
    // $users = DB::select('select * from users');
    // $result = DB::table('users')->select()->get();
    // $result = DB::table('users')->get();
    // $result = User::all();
    // dump($users);
    // dump(Comment::factory(3)->create());

    // second session stat
    // $users = DB::table('users')->get();
    // $user = DB::table('users')->pluck('email');
    // $user = DB::table('users')->where('email', 'lempi29@example.com')->first();
    // $user = DB::table('users')->where('email', 'lempi29@example.com')->value('name');
    // $user = DB::table('users')->find(3);

    // $comments = DB::table('comments')->select('content as comment_content')->get();
    // $comments = DB::table('comments')->select('user_id')->distinct()->get();
    // $comments = DB::table('comments')->count();
    // $comments = DB::table('comments')->max('user_id');
    // $comments = DB::table('comments')->sum('user_id');

    // $comments = DB::table('comments')->where('id', '11')->exists();
    // $comments = DB::table('comments')->where('id', '11')->doesntExist();

    // $rooms = DB::table('rooms')->where('price', '<', 200)->get();
    // $rooms = DB::table('rooms')->where([
    //     ['room_size', '3'],
    //     ['price', '<', 300],
    // ])->get();

    // $rooms = DB::table('rooms')
    //     ->where('room_size', '3')
    //     ->orWhere('price', '<', '400')
    //     ->get();

    // $rooms = DB::table('rooms')
    //     ->where('price', '<', '400')
    //     ->orWhere(function($query){
    //         $query->where('room_size', '>', '1')
    //             ->where('room_size', '<', '4');
    //     })
    //     ->get();

    // dump($rooms);
    // dump($users);

    // $result = DB::table( 'rooms' )
    //     ->whereBetween( 'room_size', [1, 3] )
    //     ->get();

    // $result = DB::table('rooms')
    //     ->whereNotIn('id', [1,2,3])  // without this 1,2,3 id get data
    //     ->get();

    // dump( $result );

    // WhereNull('column')  whereNotNull()
    // WhereData('created_at', '2020-05-13')
    // whereMonth('created-at', '5')
    // whereDay('created_at', '24');
    // whereYear('created_at', '2020');
    // whereTime('created_at', '=', '12:25:10');
    // whereColumn('column1', '>', 'column2');

    // whereColumn([
    //     ['first_name', '=', 'last_name'],
    //     ['updated_at', '=', 'created_at'],
    // ]);

    // $result = DB::table( 'users' )
    //     ->whereExists( function ( $query ) {
    //         $query->select( 'id' )
    //             ->from( 'reservations' )
    //             ->whereRaw( 'reservations.user_id = users.id' )
    //             ->whereDate( 'created_at', '=', '2023-08-30' )
    //             ->limit( 1 );
    //     } )
    //     ->get();

    // $result = DB::table('users')
    //     ->where('meta->settings->site_background', 'black')
    //     ->get();

    // $result = DB::table('comments')->paginate(5);

    // $result = DB::table('comments')
    //     ->where('content', 'like', '%satt%')
    //     ->get();

    // $result = DB::table('comments')
    //     ->where('content', 'like', '%Id%')
    //     ->get();

    // $result = DB::table('comments')
    //     ->orderBy('id', 'DESC')
    //     ->get();

    // $result = DB::table('users')
    //     ->orderBy('name', 'DESC')
    //     ->get();

    // $result = DB::table('comments')
    //     ->selectRaw('count(id) as number_of_5stars_comments, rating')
    //     ->groupBy('rating')
    //     ->having('rating', '=', 5)
    //     ->get();

    // $result = DB::table('comments')
    //     ->skip(5)
    //     ->take(5)
    //     ->get();

    // $result = DB::table('comments')
    //     ->offset(5)
    //     ->limit(5)
    //     ->get();

    // $room_id = 1;
    // $result = DB::table('reservations')
    //     ->when($room_id, function($query, $room_id) {
    //         return $query->where('room_id', $room_id);
    //     })
    //     ->get();

    // $sortBy = null;
    // $result = DB::table('rooms')
    //     ->when($sortBy, function ($query, $sortBy) {
    //         return $query->orderBy($sortBy);
    //     }, function ($query) {
    //         return $query->orderBy('price');
    //     })
    //     ->get();

    // $result = DB::table('comments')->orderBy('id')->chunk(10, function ($comments) {
    //     foreach($comments as $comment) {
    //         if($comment->id == 10) return false;
    //     }
    // });

    // $result = DB::table('comments')->orderBy('id')->chunkById(5, function($comments){
    //     foreach ($comments as $comment) {
    //         DB::table('comments')->where('id', $comment->id)->update(['rating' => null]);
    //     }
    // });

    // $result = DB::table('reservations')
    //     ->join('rooms', 'reservations.room_id', '=', 'rooms.id')
    //     ->join('users', 'reservations.user_id', '=', 'users.id')
    //     ->where('rooms.id', '>', 3)
    //     ->where('users.id', '>', 1)
    //     ->get();

    // $result = DB::table('reservations')
    //         ->join('rooms', function ($join) {
    //             $join->on('reservations.room_id', '=', 'rooms.id')->where('rooms.id', '>', 3);
    //         })
    //         ->join('users', function ($join) {
    //             $join->on('reservations.user_id', '=', 'users.id')->where('users.id', '>', 3);
    //         })
    //         ->get();

    // $rooms = DB::table('rooms')->where('id', '>', 3);
    // $users = DB::table('users')->where('id', '>', 1);
    // $result = DB::table('reservations')
    //         ->joinSub($rooms, 'rooms', function($join) {
    //             $join->on('reservations.room_id', '=', 'rooms.id');
    //         })
    //         ->joinSub($users, 'users', function ($join) {
    //             $join->on('reservations.user_id', '=', 'users.id');
    //         })
    //         ->get();

    // $result = DB::table( 'rooms' )
    //     ->leftJoin( 'reservations', 'rooms.id', '=', 'reservations.room_id' )
    //     ->leftJoin('cities', 'reservations.city_id', '=', 'cities.id')
    //     ->selectRaw( 'room_size, cities.name, count(reservations.id) as reservations_count' )
    //     ->groupBy( 'room_size', 'price', 'cities.name' )
    //     ->orderByRaw( 'count(reservations.id) DESC' )
    //     ->get();

    // $result = DB::table('rooms')
    //     ->crossJoin('cities')
    //     ->get();

    // $users = DB::table('users')
    //     ->select('name');

    // $result = DB::table('cities')
    //     ->select('name')
    //     ->union($users)
    //     ->get();

    // $comments = DB::table('comments')
    //     ->select('rating as rating_or_room_id', 'id', DB::raw('"comments" as type_of_activity'))
    //     ->where('user_id', 2);

    // $result = DB::table('reservations')
    //     ->select('room_id as rating_or_room_id', 'id', DB::raw('"reservation" as type_of_activity'))
    //     ->union($comments)
    //     ->where('user_id', 2)
    //     ->get();

    // $result = DB::table('rooms')
    //     ->insert([
    //         ['room_number' => 1, 'room_size' => 1, 'price' => 1, 'description' => 'new description 1'],
    //         ['room_number' => 2, 'room_size' => 2, 'price' => 2, 'description' => 'new description 2']
    //     ]);
    // $id = DB::table('rooms')->insertGetId(
    //     ['room_number' => 3, 'room_size' => 3, 'price' => 3, 'description' => 'new description 3'],
    // );
    // $result = DB::table('rooms')->get();
    // dump( $id );

    //  $affected = DB::table('rooms')
    //     ->where('id', 11)
    //     ->update(['price' => '2000']);

    // $affected = DB::table('users')
    //     ->where('id', 1)
    //     ->update(['meta->settings->site_language' => 'es']);
    // dump($affected);
    
    // $affected = DB::table('rooms')
    //     ->decrement('price', 10, ['description' => 'new description']);

    // $result = DB::table('rooms')
    //     ->get();
    // dump($affected, $result);

    // DB::table('rooms')->where('id', 1)->delete();
    // DB::table('rooms')->delete();
    DB::table('rooms')
        ->insert([
            ['room_number' => 1, 'room_size' => 1, 'price' => 1, 'description' => 'new description 1'],
            ['room_number' => 2, 'room_size' => 2, 'price' => 2, 'description' => 'new description 2'],
            ['room_number' => 3, 'room_size' => 3, 'price' => 3, 'description' => 'new description 3'],
        ]);

    DB::statement('SET FOREIGN_KEY_CHECKS=0');
    DB::table('rooms')->truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=1');

    return view( 'welcome' );
} );
