<?php

namespace App\Http\Controllers;

use App\News;
use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Laracasts\Flash\Flash;

class NewsController extends Controller
{
    //
    private $user;

    public function __construct(Request $request){
        $this->user=$request->user();
    }
    public function create(){
        return view('news.create')->with([
            'title'=>'ثبت خبر جدید'
        ]);
    }

    public function adminIndex(){
        //$news=News::all();
        $news=News::orderBy('id','DESC')->paginate(Config::get('nafisConfig.perPage'));
        return view('news.adminIndex',compact('news'))->with([
            'title'=>'مدیریت خبرها'
        ]);
    }

    private function uploadImage($image){
        //dd($image);
        $user=$this->user;
        $imageName=$user->id.'_'.str_random(10).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images/news/'),$imageName);
        return $imageName;
    }
    public function store(Request $request){
        //dd($request->all());
        $user=$this->user;
        $this->validate($request,[
           'title'=>'required',
            'content'=>'required',
            'status'=>'required | in:0,1'
        ]);

        if($request->hasFile('image')){
            $this->validate($request,[
               'image'=>'mimes:jpeg,jpg,bmp,png | max:1024'
            ]);
            $imageName=$this->uploadImage($request->file('image'));

        }else{
            $imageName=null;
        }
        $news=News::create([
            'title'=>$request->input('title'),
            'content'=>$request->input('content'),
            'status'=>$request->input('status'),
            'user_id'=>$user->id,
            'image'=>$imageName
        ]);

        /*
         * Register Tags
         */
        $selected=$this->registerTags($request); //آی دی های تگ های جدید
        $news->tags()->sync($selected);

        Flash::success(trans('messages.newsCreated'));
        return redirect()->back();


    }

    public function uploadSummernote(Request $request){
        //dd($request->all());
        $this->validate($request,[
           'file'=>'mimes:jpeg,jpg,bmp,png | max:1024'
        ]);
        $user=$this->user;
        $image=$request->file('file');
        $imageName=$user->id.'_'.str_random(10).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images/news/'),$imageName);
        return asset('images/news/'.$imageName);
    }

    public function deleteSummernote(Request $request){
        $user=$this->user;
        $src=$request->input('src');
        //dd($src);
        $srcArray= explode('/',$src);
        $imageName=end($srcArray);
        $path=public_path('/images/news/'.$imageName);
        if(File::exists($path)){
            unlink($path);
        }
    }

    /*
     * Created by Iman on 94/12/10
     * register edit news
     */
    public function edit(News $news){
        //dd($news);
        $user=$this->user; //use later
        $tagsQuery=$news->tags();
        $tags=$tagsQuery->lists('name','name');
        //dd($tags);
        $selectedTags=$tagsQuery->lists('name')->toArray();
        //dd($selectedTags);
        return view('news.edit',compact('news','tags'))->with([
            'title'=>'مدیریت خبرها',
            'selectedTags'=>$selectedTags
        ]);
    }

    /*
     * Created By Iman 94/12/10
     * register Update News
     */
    public function update(News $news,Request $request){
        //dd($request->all());
        $user=$this->user;
        $this->validate($request,[
            'title'=>'required',
            'content'=>'required',
            'status'=>'required | in:0,1'
        ]);

        if($request->hasFile('image')){
            $this->validate($request,[
                'image'=>'mimes:jpeg,jpg,png,bmp,gif | max:1024'
            ]);
            $imageName=$this->uploadImage($request->file('image'));

            // delete the last image if exist
            $path=public_path('images/news/').'/'.$news->image;
            if(File::exists($path)){
                File::delete($path);
            }

        }else{
            $imageName=$news->image; //old image name
        }
        $news->update([
            'title'=>$request->input('title'),
            'content'=>$request->input('content'),
            'status'=>$request->input('status'),
            'user_id'=>$user->id,
            'image'=>$imageName
        ]);

        /*
         * Register Update Tags
         */
        $selected=$this->registerTags($request); //آی دی های تگ های جدید
        $news->tags()->sync($selected); //sync -> insert new tag and remove old tags

        Flash::success(trans('messages.newsEdited'));
        return redirect()->back();

    }

    /*
     * Created By Iman 94/12/10
     * Show all news
     */
    public function index(){
        //$news=News::all();
        $news=News::orderBy('id','DESC')->paginate(Config::get('nafisConfig.sitePerPage'));
        return view('news.index',compact('news'))->with([
            'title'=>'خبرها'
        ]);
    }

    /*
     * Created By Iman 94/12/10
     * Show news Preview
     */
    public function show(News $news){
        //dd($news);
        return view('news.newsPreview',compact('news'))->with([
            'title'=>$news->title
        ]);

    }

    /**
     * Created By Iman 94/12/01
     * Register Tags
     */
    private function registerTags($request)
    {
        $tags=$request->input('tags');
        $selectedTagIds=[];
        foreach($tags as $tag){
            if($registerdTag=Tag::where('name',$tag)->first()){
                $selectedTagIds[]=$registerdTag->id;
            }else{
                $newTag=Tag::create(['name'=>$tag]);
                $selectedTagIds[]=$newTag->id;
            }
        }
        return $selectedTagIds; // Return Selected Tag Ids
    }

}
