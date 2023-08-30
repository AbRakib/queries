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

    return view( 'welcome' );
} );
