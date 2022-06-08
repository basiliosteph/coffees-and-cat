<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Details;
use App\Models\Owners;
use App\Models\Order;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users", compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foods()
    {
        $data = food::all();
        return view("admin.foods", compact("data"));
    }

    public function uploadfood(Request $request)
    {
        $data = new food;
        $image=$request->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }

    public function deletefood($id)
    {
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatefood($id)
    {
        $data=food::find($id);
        return view("admin.updatefood", compact("data"));
    }

    public function update(Request $request, $id)
    {
        $data=food::find($id);
        $image=$request->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }

    public function details(Request $request)
    {
        $data = new details;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->people=$request->people;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->address=$request->address;
        $data->save();
        return redirect()->back();
    }

    public function viewdetails()
    {
        if(Auth::id())
        {
        $data=details::all();
        return view("admin.admindetails", compact("data"));
        }
        else
        {
            return redirect('login');
        }
    }

    public function viewowners()
    {
        if(Auth::id())
        {
        $data=owners::all();
        return view("admin.adminowners", compact("data"));
        }
        else
        {
            return redirect('login');
        }
    }

    public function uploadowners(Request $request)
    {
        $data = new owners;
        $image=$request->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('ownersimage', $imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->location=$request->location;
        $data->save();
        return redirect()->back();
    }

    public function updateowners($id)
    {
        $data=owners::find($id);
        return view("admin.updateowners", compact("data"));
    }

    public function updatecafeowners(Request $request, $id)
    {
        $data=owners::find($id);
        $image=$request->image;
        if ($image) {
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('ownersimage', $imagename);
        $data->image=$imagename;
        }

        $data->name=$request->name;
        $data->location=$request->location;
        $data->save();
        return redirect()->back();

    }

    public function deleteowners($id)
    {
        $data=owners::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orders()
    {
        $data=order::all();
        return view('admin.orders', compact('data'));
    }

    public function search(Request $request)
    {
        $search=$request->search;
        $data=order::where('name', 'Like', '%'.$search.'%')->orWhere('foodname', 'Like', '%'.$search.'%')->get();
        return view('admin.orders', compact('data'));
    }
}
