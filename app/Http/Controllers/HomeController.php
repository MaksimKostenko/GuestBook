<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\Models\Message;
class HomeController extends Controller
{
    public function index()
    {   
        $data = [
            'messages' => Message::latest()->paginate(3),//or  orderBy('created_at', 'desc')->get()
            'count' => Message::count()
        ];
        return view('pages.index',$data);
    }

    public function store()
    {
        $input = Request::all();
        $add = new Message(['username' => $input['username'],'email' => $input['email'],'message'=> $input['message']]);
        $add->save();
        return redirect('/');
    }

    public function edit($id)
    {
        $data = ['messages' => Message::all()];
        return view('pages.edit', $data)->with('id', $id);
    }

    public function update($id)
    {
        $edit = Request::all();
        $data = ['messages' => Message::all()];

        foreach($data['messages'] as $message)
        {
            if ($message->username == $edit['username'] && $message->email == $edit['email'] )
            {
                $updateQuery = DB::table('messages')->where('id', $id)->update(array('message' => $edit['message']));
                return redirect()->back();
            }
            else return redirect()->back()->withErrors(['You can not edit this message, because you are not the creator ', 'The Message']);
        }
    }

    public function delete($id)
    {
        $data = ['messages' => Message::all()];
        foreach($data['messages'] as $message)
        {
            $deleteQuery = DB::table('messages')->where('id', $id)->delete();
        }
        return redirect()->back();
    }
}
