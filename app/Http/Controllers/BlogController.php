<?php
/**
 * Name
 * Description:
 * @author Michael Rumack
 * User: climbican
 * Date: 2/5/16
 * Time: 2:35 PM
 * Last Mod:
 * Notes:
 */

namespace app\Http\Controllers;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use File;



class BlogController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    private function prefix(){
        return 'http://localhost/dhica.com/public/';  //dev
        //return 'https://dhica.com/'; //blogion
    }

    public function index(){
        $blogs = Blog::orderBy('create_dte', 'asc')->get();

        return view('admin.blogs', compact('blogs'));
        //return response()->json($blogs);
    }

    /**public function get($id){
        $blogs = Blog::find($id);
        //return response()->json($blog);
        return view('admin.blogs', compact('blogs'));
    }**/

    public function create(){
        return view('admin.blog-create');
    }

    public function save(Request $request){
        $unx_time = time();

        $this->validate($request,['title'=>'required|max:255',
                                   'subTitle'=>'required|max:255',
                                   'bodyText'=>'min:50|max:2000',
                                   'authorName'=>'required|max:50']);

        $blog = $request->all();
        $blog['author_name'] = $blog['authorName'];
        $blog['sub_title'] = $blog['subTitle'];
        $blog['body'] = $blog['bodyText'];
        $blog['page_name'] = 'blog';
        if(isset($blog['mediaLink']) && $blog['mediaLink'] !== ''){$blog['media_link'] = $blog['mediaLink'];}
        if(isset($blog['metaDescription']) && $blog['metaDescription'] !== ''){$blog['meta_descript'] = $blog['metaDescription'];}
        if(isset($blog['imageAlt']) && $blog['imageAlt'] !== ''){$blog['image_alt_text'] = $blog['imageAlt'];}
        if(isset($blog['imageTitle']) && $blog['imageTitle'] !== ''){$blog['image_title'] = $blog['imageTitle'];}

        $blog['create_dte'] = $unx_time.'000';
        $blog['last_update'] = $unx_time.'000';
        $blog['removed_dte'] = $unx_time.'000';

        if($request->hasFile('blogImage')){
            $imageTmpName = explode('.', $request->file('blogImage')->getClientOriginalName());
            $imageName = sha1(preg_replace("/[^ \w]+/", '',time().$imageTmpName[0] ) );
            //Image::make($image->getRealPath())->resize(200, 200)->save($path);

            $blog['image_url'] = substr($imageName, 0,40).'.'.$imageTmpName[1];
            $request->file('blogImage')->move(base_path() . '/public/images/blog/', $blog['image_url']);
        } else{ $blog['image_url'] = 'no image'; echo "NO IMAGE";}

        Blog::create($blog);
            //will need  a proper response here
        //return response()->json($blog);
        return redirect('admin/blog/list');
    }

    public function delete($id){
        $blog = Blog::find($id);
        if($blog->image_url != ''){
            if(file_exists(public_path('images/blog/'.$blog->image_url)) ){
                File::delete(base_path().'/public/images/blog/'.$blog->image_url);
            }
        }
        $blog->delete();
        return redirect('admin/blog/list');
    }

    public function update(Request $request, $id){

        $this->validate($request,['title'=>'required|max:255',
            'subTitle'=>'required|max:255',
            'bodyText'=>'min:50|max:2000',
            'authorName'=>'required|max:50']);

        $blog = Blog::find($id);
        $form = $request->all();

        $blog->author_name = $request->input('authorName');
        $blog->title = $request->input('title');
        $blog->body = $request->input('bodyText');
        $blog->last_update = time().'000';
        $blog->sub_title = $request->input('subTitle');
        if(isset($form['mediaLink']) && $form['mediaLink'] !== ''){$blog->media_link = $form['mediaLink'];}else{$blog->media_link = '';}
        if(isset($form['imageAlt']) && $form['imageAlt'] !== ''){$blog->image_alt_text = $form['imageAlt'];}else{$blog->image_alt_text = '';}
        if(isset($form['imageTitle']) && $form['imageTitle'] !== ''){$blog->image_title = $form['imageTitle'];}else{$blog->image_title = '';}

        if($request->hasFile('blogImage') && $blog['blogImage'] !== ''){
            //remove the old file first
            File::delete(base_path().'/public/images/blog/'.$blog->image_url);

            $imageTmpName = explode('.', $request->file('blogImage')->getClientOriginalName());
            $imageName = sha1(preg_replace("/[^ \w]+/", '',time().$imageTmpName[0] ) );

            $blog->image_url = substr($imageName, 0,40).'.'.$imageTmpName[1];
            $request->file('blogImage')->move(base_path() . '/public/images/blog/', $blog->image_url);
        }

        $blog->save();
        \Session::flash('message', 'Successfully updated Blog!');

        ///session just adds a variable that can be detected in form /// add conditional notice on complete

        return redirect('admin/blog/list');
    }

    public function updateForm($id){
        $blog = Blog::find($id);
        if(!file_exists(public_path('images/blog/'.$blog->image_url)) || $blog->image_url === ''){
            $blog->image_url = 'no-image.png';
        }

        return view('admin.blog-update', compact('blog'));
    }

}

