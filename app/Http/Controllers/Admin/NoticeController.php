<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index(){
        $notice = Notice::latest()->get();
        return view('pages.admin.notice.index',compact('notice'));

    }
    public function store(Request $request) {

        $request->validate([
            'title' => 'required|string|min:3',
            'date' => 'required',
            'link' => 'mimes:pdf,xlsx,doc,docx,ppt,pptx,ods,odt,odp',
        ]);
        $notice = new Notice();
        $notice->title = $request->title;
        $notice->date = $request->date;
        $notice->description = $request->description;
        $notice->notice_type = $request->notice_type;
        $notice->link = $this->imageUpload($request, 'link', 'uploads/notice') ?? '';
        $notice->save();
        if($notice) {
            return redirect()->route('notice.index')->with('success', 'Insert Successfull');
        }
        return redirect()->back()->withInput();
    }
    public function edit($id){
        $notice =  Notice::find($id);
        return view('pages.admin.notice.edit',compact('notice'));
    }
    public function update(Request $request,Notice $notice){
        $noticeImage = '';
        if ($request->hasFile('image')) {
            if (!empty($notice->link) && file_exists($notice->link)) {
                unlink($notice->link);
            }
            $noticeImage = $this->imageUpload($request, 'link', 'uploads/notice');
        }else{
            $noticeImage = $notice->link;
        }
        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->notice_type = $request->notice_type;
        $notice->link = $noticeImage;
        $notice->save();
        if($notice)
        {
            return redirect()->back();
        }
        return redirect()->back()->withInput()->with('success', 'Update Success');
    }
    public function delete(Notice $notice){
        if (!empty($notice->image) && file_exists($notice->image)) {
            unlink($notice->image);
        }
        $notice->delete();
        return redirect()->back()->with('success', 'Deleted Successfull');
    }
}


