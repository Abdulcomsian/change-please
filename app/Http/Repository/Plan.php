<?php
namespace App\Http\Repository;
use App\Models\Plan as UserPlan;

class Plan{

    public function add_user_plan($request)
    {
        try{
            $extensions = ['jpg' , 'png' , 'jpeg' , 'jfif' , 'gif' , 'hevc' , 'heif' , 'JPG' , 'PNG' , 'JPEG' , 'jfif', 'GIF', 'HEVC' , 'HEIF'];
            
            $attachment = $request->file('logo');

            $attachmentExtension = $attachment->getClientOriginalExtension();


            if(!in_array($attachmentExtension , $extensions))
            {
                return redirect()->back()->with(['error' => true , 'msg'=>'File must be of type jpg, png, jpeg, jfif, gif, hevc, heif']);
            }

            $attachmentName = $attachment->getClientOriginalName();
    
            $destinationPath = "uploads";
            //giving New Name
            $newName = strtotime(date('Y/m/d h:i:s')).$attachmentName;

            $attachment->move($destinationPath , $newName);

            $planId = UserPlan::insertGetId([
                "user_id" => auth()->user()->id,
                "company_name" => $request->company_name,
                "size" =>   $request->size,
                "country"   => $request->country,
                "city"  => $request->city,
                "address" => $request->address,
                "postal_code" => $request->postal_code,
                "company_logo" => $newName,
                "category"  => $request->category,
                "status"    => "pending",
                "video" => $request->video
            ]);

           return redirect('/investee-questions/'.$planId);

        }catch(Exception $e)
        {
            return redirect()->back()->with("error" , "something went wrong");
        }
    }


}