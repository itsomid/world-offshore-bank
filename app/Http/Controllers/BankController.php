<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Country;
use App\Http\Requests\CreateBankRequest;
use App\Http\Requests\UpdateBankRequest;
use Illuminate\Http\Request;
use Monarobase\CountryList\CountryList;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('panel.dashboard', ['banks' => Bank::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $countries = \Countries::getList('en', 'php');

        return view('panel.create', ['countries' => $countries]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBankRequest $request)
    {


        $bank = new Bank();
        $bank->name = $request->name;
        $bank->registered_name = $request->registered_name;
        $bank->slug = $request->slug;
        $bank->bic = $request->bic;
        $bank->website = $request->website;
        $bank->email = $request->email;
        $bank->address = $request->address;
        $bank->presence = $request->presence;
        $bank->type = $request->type;
        $bank->certification = $request->certification;
        $bank->total_income = $request->total_income;
        $bank->total_assets = $request->total_assets;
        $bank->currency = $request->currency;
        $bank->employee = $request->employee;
        $bank->short_description = $request->short_description;
        $bank->description = $request->description;
        $bank->blockquote = $request->blockquote;
        $bank->headquarter = $request->headquarter;
        $bank->founded = $request->founded;
        $bank->status = $request->status;
        if ($request->hasFile('img_1')){
            $image_1 = $request->img_1->store('banks');
            $bank->img_1 = env('IMAGE_URL').$image_1;
        }

        if ($request->hasFile('img_2')){
            $image_2 = $request->img_2->store('banks');
            $bank->img_2 = env('IMAGE_URL').$image_2;
        }
        $bank->save();
        session()->flash('success','Bank Created Successfully');
        return redirect(route('banks.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $bank)
    {
        $countries = \Countries::getList('en', 'php');
        return view('panel.create', ['bank' => $bank, 'countries' => $countries]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBankRequest $request, Bank $bank)
    {
//        return $request->all();
        $data = $request->except(['img_1', 'img_2']);

        $data['presence'] = $request->presence == '1' ? 1 : 0;
        $data['status'] = $request->status == '1' ? 1 : 0;

        if ($request->hasFile('img_1')) {
            // upload it
            $image = $request->img_1->store('banks');
            // delete old one
            $bank->deleteImage();
            $data['img_1'] = env('IMAGE_URL').$image;
        }
        if ($request->hasFile('img_2')) {
            // upload it
            $image = $request->img_2->store('banks');
            // delete old one
            $bank->deleteImage();
            $data['img_2'] = env('IMAGE_URL').$image;
        }

        $bank->update($data);
        session()->flash('success', 'Bank updated successfully.');

        return redirect(route('banks.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
