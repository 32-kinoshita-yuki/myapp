<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Influencer;
class InfluencerController extends Controller
{
     

    public function create(Request $request)
    {
         // Validationをかける
        $this->validate($request, Influencer::$rules);
        $profiles = new Influencer;
        $form = $request->all();
        
        unset($form['_token']);
        
        $influencers->fill($form);
        $influencers->save();
        
        return redirect('admin/influencers/create');
    }
     public function update(Request $request)
  {
         // Validationをかける
        $this->validate($request, Influencer::$rules);
         // News Modelからデータを取得する
        $influencer = Influencer::find($request->id);
        // 送信されてきたフォームデータを格納する
        $influencer_form = $request->all();
       
       
        return redirect('admin/news');
    }
    
    public function delete(Request $request)
  {
      // 該当するNews Modelを取得
      $influencer = Influencer::find($request->id);
      // 削除する
      $influencer->delete();
      return redirect('admin/influencer/');
 


  }
}
