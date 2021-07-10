<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ShipDistrict;
use App\Models\ShipDivision;
use App\Models\ShipState;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShippingController extends Controller
{

    ///// Start Ship-Division///////////////

    public function DivisionView()
    {
        $divisions = ShipDivision::orderBy('id', 'DESC')->get();
        return view('backend.ship.division.division_view', compact('divisions'));
    }


    public function AddDivision(Request $request)
    {
        $request->validate([
            'division_name' => 'required',

        ]);

        ShipDivision::insert([
            'division_name' => $request->division_name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Division Inserted successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function EditDivision($id)
    {
        $division = ShipDivision::findOrFail($id);
        return view('backend.ship.division.division_edit', compact('division'));
    }

    public function UpdateDivision(Request $request, $id)
    {
        ShipDivision::findOrFail($id)->update([
            'division_name' => $request->division_name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Division Updated successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('manage.division')->with($notification);
    }

    public function DeleteDivision($id)
    {
        ShipDivision::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Division Deleted successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }


    /////////// End Ship Division //////////////


    //////// Start Ship-District ////////

    public function DistrictView()
    {
        $divisions = ShipDivision::orderBy('division_name', 'ASC')->get();
        $districts = ShipDistrict::orderBy('id', 'DESC')->get();

        return view('backend.ship.district.district_view', compact('divisions', 'districts'));
    }

    public function AddDistrict(Request $request)
    {
        $request->validate([
            'division_id' => 'required',
            'district_name' => 'required',

        ]);

        ShipDistrict::insert([
            'division_id' => $request->division_id,
            'district_name' => $request->district_name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'District Inserted successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }


    public function EditDistrict($id)
    {
        $divisions = ShipDivision::orderBy('division_name', 'ASC')->get();
        $district = ShipDistrict::findOrFail($id);
        return view('backend.ship.district.district_edit', compact('district', 'divisions'));
    }

    public function UpdateDistrict(Request $request, $id)
    {
        ShipDistrict::findOrFail($id)->update([
            'division_id' => $request->division_id,
            'district_name' => $request->district_name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'District Updated successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('manage.district')->with($notification);
    }

    public function DeleteDistrict($id)
    {
        ShipDistrict::findOrFail($id)->delete();

        $notification = array(
            'message' => 'District Deleted successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }


    ///////// End Ship District /////////


    ///////// Start Ship State////////////

    public function StateView()
    {
        $divisions = ShipDivision::orderBy('division_name', 'ASC')->get();
        $districts = ShipDistrict::orderBy('district_name', 'ASC')->get();
        $states = ShipState::orderBy('id', 'DESC')->get();

        return view('backend.ship.state.state_view', compact('divisions', 'districts', 'states'));
    }


    /////// Get District Data With Ajax///////////
    public function GetDistrictData($division_id)
    {
        $districts = ShipDistrict::where('division_id', $division_id)->orderBy('district_name', 'ASC')->get();
        return json_encode($districts);
    }


    public function AddState(Request $request)
    {
        $request->validate([
            'division_id' => 'required',
            'district_id' => 'required',
            'state_name' => 'required',

        ]);

        ShipState::insert([
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'state_name' => $request->state_name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'State Inserted successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function EditState($id)
    {
        $divisions = ShipDivision::orderBy('division_name', 'ASC')->get();
        $districts = ShipDistrict::orderBy('district_name', 'ASC')->get();
        $state = ShipState::findOrFail($id);

        return view('backend.ship.state.state_edit', compact('divisions', 'districts', 'state'));
    }


    public function UpdateState(Request $request, $id)
    {
        ShipState::findOrFail($id)->update([
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'state_name' => $request->state_name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'State Updated successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('manage.state')->with($notification);
    }

    public function DeleteState($id)
    {
        ShipState::findOrFail($id)->delete();

        $notification = array(
            'message' => 'State Deleted successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }



    ///////// End Ship State///////////////
}