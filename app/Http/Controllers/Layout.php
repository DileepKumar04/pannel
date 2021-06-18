<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use DB;
class Layout extends Controller
{
    //

    public function content(){


$cms_content=Content::paginate(2);

 return view('Admin.cms_content',compact('cms_content'));
    }




public function content_edit($content_id){


   $content_detail = Content::findorfail($content_id);



    return view('Admin.banner',compact('content_detail'));
}




public function content_update(request $request,$content_id){

$content_update =Content::findorfail($content_id);
$content_update->description=$request->texteditor;
$content_update->page_name=$request->page_name;
$content_update->title=$request->title;
$content_update->save();
return back()->with('Content_update','Content have been updated');

}






public function delete_content($id){


 DB::delete('delete from contents  where id = ?',[$id]);

return back()->with('Content_delete','Content have been deleted');
}



}
