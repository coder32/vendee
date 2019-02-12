<?php

namespace App\Http\Controllers;

use App\MembershipModel;
use App\SecurityModel;
use App\SelfBankAccount;
use App\SelfPartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    //
    public function index(){
        $securityQuestions = SecurityModel::all();
        $memberShipPlans = MembershipModel::all();
        $accounts = SelfBankAccount::all();
        $partners = SelfPartner::all();
        return view('admin.setting.index', ['questions' => $securityQuestions, 'memberShip'=> $memberShipPlans, 'accounts'=> $accounts, 'partners'=>$partners]);
    }



    public function distroyQuestion($id){
        $question = SecurityModel::find($id);
        if($question != null){
            $question->delete();
            return redirect()->back()->with('success', 'Question Deleted successfully');
        }
        return back()->with('error', 'Error in Question');

    }

    public function updateQuestion(){
        $question = SecurityModel::find(Input::get('question_id'));
        if($question !=null){
            $question->question = Input::get('question');
            /*$question->option_1 = Input::get('option1');
            $question->option_2 = Input::get('option2');
            $question->option_3 = Input::get('option3');
            $question->option_4 = Input::get('option4');
            $correctOption = Input::get('correct_option');
            if(!isset($correctOption)){
                $correctOption = 1;
            }

            $question->correct_option = $correctOption;*/
            $question->save();
            return redirect()->back()->with('success', 'Question added successfully');
        }
        return back()->with('error', 'Error in Question');
    }
    public function postQuestion(){

        $question = new SecurityModel();
        $question->question = Input::get('question');
        /*$question->option_1 = Input::get('option1');
        $question->option_2 = Input::get('option2');
        $question->option_3 = Input::get('option3');
        $question->option_4 = Input::get('option4');
        $correctOption = Input::get('correct_option');
        if(!isset($correctOption)){
            $correctOption = 1;
        }

        $question->correct_option = $correctOption;*/


        $question->save();

        return redirect()->back()->with('success', 'Question added successfully');

    }


    public function postBank(){
        $bank = new SelfBankAccount();
        $bank->bank_name = Input::get('bank_name');
        $bank->bank_account = Input::get('bank_account');
        $bank->has_ref_number = Input::get('hasRef');
        $bank->save();
        return redirect()->back()->with('success', 'Bank Added successfully');
    }


    public function postPartner(Request $request){
     $partner = new SelfPartner();
     $partner->name = Input::get('partner_name');
     $partner->url = Input::get('url');

        if($request->hasfile('partner_logo'))
        {

            $file1 = $request->file('partner_logo');
            $extension = $file1->getClientOriginalExtension();
            $filename1 =time().'.'.$extension;

            $file1->move(public_path().'/uploads/partners/', $filename1);
            $partner->logo = $filename1;


        }

        $partner->save();
        return redirect()->back()->with('success', 'Partner Added successfully');

    }

    public function deletePartner($id){
        $partner = SelfPartner::find($id);
        if($partner != null){
            $partner->delete();
            return redirect()->back()->with('success', 'Partner Deleted successfully');
        }
        return redirect()->back()->with('error', 'Partner Not found!');
    }


    public function deleteBank($id){
        $bank = SelfBankAccount::find($id);
        if($bank != null){
            $bank->delete();
            return redirect()->back()->with('success', 'Bank Deleted successfully');
        }
        return redirect()->back()->with('error', 'Bank Not found');
    }


    public function postMembershipPlan(Request $request){

        //Free membership setting
        $freeRate = Input::get('free_rate');
        $freeBids = Input::get('free_bids');
        $free_skills = Input::get('free_skills');
        $freeProjects = Input::get('free_project');
        $freeLogo = Input::get('free_logo');
        $free_description = Input::get('free_description');

        //Intro membership setting
        $introRate = Input::get('intro_rate');
        $introBids = Input::get('intro_bids');
        $intro_skills = Input::get('intro_skills');
        $introProjects = Input::get('intro_project');
        $introLogo = Input::get('intro_logo');
        $intro_description = Input::get('intro_description');

        //Gold membership setting
        $basicRate = Input::get('basic_rate');
        $basicBids = Input::get('basic_bids');
        $basic_skills = Input::get('basic_skills');
        $basicProjects = Input::get('basic_project');
        $basicLogo = Input::get('basic_logo');
        $basic_description = Input::get('basic_description');

        //Plus membership setting
        $plusRate = Input::get('plus_rate');
        $plusBids = Input::get('plus_bids');
        $plus_skills = Input::get('plus_skills');
        $plusProjects = Input::get('plus_project');
        $plusLogo = Input::get('plus_logo');
        $plus_description = Input::get('plus_description');

        //Premium membership setting
        $premiumRate = Input::get('premium_rate');
        $premiumBids = Input::get('premium_bids');
        $premium_skills = Input::get('premium_skills');
        $premiumProjects = Input::get('premium_project');
        $premiumLogo = Input::get('premium_logo');
        $premium_description = Input::get('premium_description');

        MembershipModel::truncate();
        $freeMemberShipModel = new MembershipModel();
        $freeMemberShipModel->name = 'Free';
        $freeMemberShipModel->rate = '0';
        $freeMemberShipModel->skills = $free_skills;
        $freeMemberShipModel->bids =   $freeBids;
        $freeMemberShipModel->projects = $freeProjects;
        $freeMemberShipModel->description = $free_description;




        if($request->hasfile('free_logo'))
        {
            $file1 = $request->file('free_logo');
            $extension = $file1->getClientOriginalExtension(); // getting image extension
            $filename1 =time().'.'.$extension;

            $file1->move(public_path().'uploads/logos/', $filename1);
            $freeMemberShipModel->logo = $filename1;
        }


        $freeMemberShipModel->save();


        $introMemberShip = new MembershipModel();
        $introMemberShip->name = 'Intro';
        $introMemberShip->rate = $introRate;
        $introMemberShip->skills = $intro_skills;
        $introMemberShip->bids = $introBids;
        $introMemberShip->projects = $introProjects;
        $introMemberShip->description = $intro_description;

        if($request->hasfile('intro_logo'))
        {
            $file2 = $request->file('intro_logo');
            $extension = $file2->getClientOriginalExtension(); // getting image extension
            $filename2 =time().'.'.$extension;
            $file2->move(public_path().'uploads/logos/', $filename2);
            $introMemberShip->logo = $filename2;
        }



        $introMemberShip->save();


        $basicMemberShip = new MembershipModel();
        $basicMemberShip->name = 'Basic';
        $basicMemberShip->rate = $basicRate;
        $basicMemberShip->skills = $basic_skills;
        $basicMemberShip->bids = $basicBids;
        $basicMemberShip->description = $basic_description;
        $basicMemberShip->projects = $basicProjects;



        if($request->hasfile('basic_logo'))
        {
            $file3 = $request->file('basic_logo');
            $extension = $file3->getClientOriginalExtension(); // getting image extension
            $filename3 =time().'.'.$extension;
            $file3->move(public_path().'uploads/logos/', $filename3);
            $basicMemberShip->logo = $filename3;
        }


        $basicMemberShip->save();



        $plusMemberShip = new MembershipModel();
        $plusMemberShip->name = 'Plus';
        $plusMemberShip->rate = $plusRate;
        $plusMemberShip->skills = $plus_skills;
        $plusMemberShip->bids = $plusBids;
        $plusMemberShip->description = $plus_description;
        $plusMemberShip->projects = $plusProjects;



        if($request->hasfile('plus_logo'))
        {
            $file3 = $request->file('plus_logo');
            $extension = $file3->getClientOriginalExtension(); // getting image extension
            $filename3 =time().'.'.$extension;
            $file3->move(public_path().'uploads/logos/', $filename3);
            $plusMemberShip->logo = $filename3;
        }


        $plusMemberShip->save();





        $premiumMemberShip = new MembershipModel();
        $premiumMemberShip->name = 'Premium';
        $premiumMemberShip->rate = $premiumRate;
        $premiumMemberShip->skills = $premium_skills;
        $premiumMemberShip->bids = $premiumBids;
        $premiumMemberShip->description = $premium_description;
        $premiumMemberShip->projects = $premiumProjects;



        if($request->hasfile('plus_logo'))
        {
            $file3 = $request->file('plus_logo');
            $extension = $file3->getClientOriginalExtension(); // getting image extension
            $filename3 =time().'.'.$extension;
            $file3->move(public_path().'uploads/logos/', $filename3);
            $premiumMemberShip->logo = $filename3;
        }


        $premiumMemberShip->save();



        return redirect()->back()->with('success', 'Membership plan updated successfully');


    }
}
