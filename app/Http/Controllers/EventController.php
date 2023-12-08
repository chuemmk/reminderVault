<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Event;
use Faker\Core\Color;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
  
        if($request->ajax()) {
       
            $data = Event::whereDate('start', '>=', $request->start)
                    ->whereDate('end',   '<=', $request->end)
                    ->get(['id', 'title', 'start', 'end']);

  
            return response()->json($data);
        }
  
        return view('schedule.index');
    }
 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {
 
        switch ($request->type) {
           case 'add':
              $event = Event::create([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'update':
              $event = Event::find($request->id)->update([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'delete':
              $event = Event::find($request->id)->delete();
  
              return response()->json($event);
             break;
             
           default:
             # code...
             break;
        }
    }
    public function store(Request $request)
    {
        Event::create($request->all());
        return redirect()->route('schedule.index');
    }


}
