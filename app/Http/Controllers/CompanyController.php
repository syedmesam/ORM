<?php

namespace App\Http\Controllers;

use App\Company;
use App\event;
use App\Phone;
use App\post;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class CompanyController extends Controller
{
    public function index(){
        
        // $company =Company::find($id = 2);
        //hasmany company has many posts 
        // $company = Company::find($id = 2);
        // dd($company->post);
        //belongs to in has many one post is associated with one company
        //$post= post::find($id = 2);
        //dd($post->company);





        //insert data in to pivot table we have 
        // $company = Company::first();
        
        // $event = event::first();
        // $company->event()->attach([2,3]);
        // dd($company->event->where('id', '1'));
        
        // $event = event::first();
        // $company = new company();
        // dd($event->name);
        //many-to-many belongs to many one company can have many events 
        //so for that


        // \DB::enableQueryLog();

        // /**
        //  * Get relationship using attribute
        //  * -  Single Company -> all events
        //  */
        // $company = Company::find(1);
        // dump($company->events);

        // dump(\DB::getQueryLog());


        /**
         * Get relationship using method
         * when need to modify query builder
         * -  Single Comapny -> specific events
        //  */
        // $company = Company::find(1);
        // dump($company->events()->where('name', 'farewell')->first()->name);

        // dump(\DB::getQueryLog());


        /**
         * Get relationship using eager loading
         * performing on collection
         * -  Multiple companies -> get all/specific events
        //  */
        // $company = Company::with(['events' => function($q) {
        //     $q->whereIn('name', ['farewell', 'seminar']);
        // }])->get();
        
        // foreach ($company as $company) {
        //     dump($company, $company->events);
        // }

        // dump(\DB::getQueryLog());

    
        // // $post->title = 'revenue';
        // $post->description = 'per decade';
        // $post->companies_id = $company->id;
        // $post->save();
        

        // //$data = new company();
        // // $data =company::find($id = 5);
        // $data = company::all();
        // // $data =company::where('name','agilent technologies')->get();
        // //$data->where('name','agilent technologies')->name= 'agile tech';
        // //$data->name='agile tech';
        // //dd($data);
        // // $data->name = 'agile tech';
        // if($data->save()){
        //     echo "updated successfully data";
        // }
        // else{
        //     return 'error while uploading';
        // }
        
        // $data = Phone::first();
        // $company = Company::first();
        // $phone = Phone::where('number','0123456')->first();
        // dd($phone->company);
        // where('number','123456')->first();
        
        //dd($data->company);
        // $datas = company::find('1');
        // dd($datas->phone->number);
        

        //getting the comoany name using query builder 
        $company = Company::get();
        
        //now it will return us colletion of which can use 
        //loop to get ti the attribute we want
        foreach ($company as $key => $value) {
            # code...
            echo $value->name;
        }
        // dd($company);
        
        //if you want to retrive by id 
        // $company = Company::find(1);
        // dd($company);
 
        //how you can select a specific column
        // $select=Company::select('name')->get();
        // print_r($select);

        //YOU CAN ALSO USE WHERE CLAUSE TO GET SOME SPECIFIC DATA4
        // $where = Company::where('name' , 'MANY AUTOS')->get();
        // dd($where);
        $where = Company::find(2);
       
        dd ($where->events);
        // foreach ($where as $key => $value) {
        //     # code...
           
        // }
        // dd($where);

        // return view('home',[
        //     'name'=>'Ammar',
        //     'age'=>'26',
        //     'gender'=>'M',
        //     'js'=>"<script>alert('you are hacked');</script>"
        //     ]);
        
    }
    public function mesam($str = null){
        $data = Company::all();
        //$data = new Company();
        
        return view('home',[
            'name'=>'Ammar',
            'age'=>'26',
            'gender'=>'M',
            'data'=> $data,            
            'str'=> $str
            ]);
        // return view('home',['str'=> $str]);

    }
    
}
