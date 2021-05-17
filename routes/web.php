<?php

use App\Comments;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

//    dump(factory(App\Comments::class,3)->make());
//    dump(factory(App\User::class,6)->make());

    //$users = DB::table('users')->get();
    //$users = DB::table('users')->pluck('name');
    //$comments = DB::table('comments')->get();

    //$users = DB::table('users')->find(1);

    //$comments = DB::table('comments')->select('content as comment_content')->get();
    //$results = DB::table('rooms')->where('room_size','2')->orWhere('price','<','400')->get();

//    $results = DB::table('rooms')->where('price','<','400')
//        ->orWhere(function ($query){
//        $query->where('room_size','>','1')->where('room_size','<','4');
//    })->get();

    //$results = DB::table('comments')->selectRaw('count(user_id) as number_of_comments, users.name')->join('users','users.id','=','comments.user_id')->groupBy('user_id')->get();


    //$results = DB::table('users')->latest()->get();

    //$results = DB::table('comments')->whereRaw("MATCH(content) AGAINST(? IN BOOLEAN MODE)",['+repellendus -pariatur'])->get();

    //$results = DB::table('comments')->orderByRaw('updated_at - created_at DESC')->get();

        //eloquent_orm
//    $results = DB::table('rooms')->where('room_size',4)
//        ->get();



//    $results = User::select('name','email')
//        ->addSelect(['wrost_rating'=>Comments::select('rating')
//            ->whereColumn('user_id','users.id')
//            ->orderBy('rating','asc')
//        ])->get()->toArray();


    //$results = DB::table('users')->inRandomOrder()->first();



//   $results = DB::table('reservations')
//       ->join('rooms','reservations.room_id','=','rooms.id')
//       ->join('users','reservations.user_id','=','user_id')
//       ->where('rooms.id','<',3)
//       ->where('users.id','>',1)
//       ->get();
//
//    $results = DB::table('reservations')
//        ->join('rooms', function ($join){
//           $join->on('reservations.room_id', '=','room_id')
//           ->where('rooms.id','>',3);
//        })
//        ->join('users',function ($join){
//            $join->on('reservations.user_id','=','users.id')->where('users.id','>',1);
//        })
//
//        ->get();

//
//    $results = DB::table('comments')
//        ->selectRaw('count(id) as number_of_5stars_comments, rating')
//        ->groupBy('rating')
//        ->having('rating', '=',5)
//        ->get();


//    $results = DB::table('comments')
//        ->skip(5)
//        ->take(5)
//        ->get();


//    $room_id = 1;
//    $results = DB::table('reservations')
//        ->when($room_id, function ($query,$room_id){
//            return $query->where('room_id',$room_id);
//        })
//        ->get();

//    $sortBy = null;
//    $results = DB::table('rooms')
//        ->when($sortBy, function ($query,$sortBy){
//            return $query->orderBy($sortBy);
//        }, function ($query){
//            return $query->orderBy('price');
//        })
//        ->get();



    //chunking results


//    $results = DB::table('comments')->orderBy('id')->chunk(2, function ($comments) {
//        foreach ($comments as $comment) {
//            if ($comment->id == 5) return false;
//        }
//    });
//

//    $results = DB::table('comments')->orderBy('id')->chunkById(1, function ($comments) {
//        foreach ($comments as $comment) {
//           DB::table('comments')
//               ->where('id' , $comment->id)
//               ->update(['rating'=>null]);
//        }
//    });


//    $result = DB::table('reservations')
//        ->join('rooms','reservations.room_id','=','rooms.id')
//        ->join('users','reservations.room_id','=','users.id')
//        ->select('users.*', 'reservations.room_id', 'users.name')
//        ->get();






//    $users = DB::table('users')
//        ->join('contacts', 'users.id', '=', 'contacts.user_id')
//        ->join('orders', 'users.id', '=', 'orders.user_id')
//        ->select('users.*', 'contacts.phone', 'orders.price')
//        ->get();


//    echo "<pre>";
//   print_r($result);




    //return view('welcome');
});

Route::get('/querytest', 'LaravelQueryController@laravelQuery');




