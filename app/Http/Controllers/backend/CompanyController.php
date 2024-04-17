<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('backend.pages.company.index', compact('companies'));
    }

    public function create()
    {
        return view('backend.pages.company.add');
    }

    public function store(Request $request)
    {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'company' => 'required',
            'domain' => 'required|url',
            'owner' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        // If validation fails, return validation errors
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ]);
        }

        // Set the timezone to Asia/Kolkata
        date_default_timezone_set('Asia/Kolkata');

        // Create the Company record with current timestamp in Asia/Kolkata timezone
        $company = new Company($request->all());
        $company->created_at = Carbon::now();
        $company->save();

        // Return a success response
        return response()->json([
            'status' => true,
            'notification' => 'Company created successfully!',
        ]);
    }



    public function show($id)
    {
        $company = Company::findOrFail($id);
        return view('companies.show', compact('company'));
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('backend.pages.company.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->update($request->all());

        // Check if the company record exists after updating
        $company = Company::find($id);
        if (!$company) {
            $response = [
                'status' => false,
                'notification' => 'Record not found!',
            ];
            return response()->json($response);
        }

        // Set the timezone to Asia/Kolkata
        date_default_timezone_set('Asia/Kolkata');

        // Update the 'updated_at' attribute with the current timestamp in Asia/Kolkata timezone
        $company->updated_at = Carbon::now();
        $company->save();

        // If the company record exists, return a success response
        $response = [
            'status' => true,
            'notification' => 'Company updated successfully!',
        ];

        return response()->json($response);
    }



    public function destroy($id)
    {
        $company = Company::find($id);
        if (!$company) {
            $response = [
                'status' => false,
                'notification' => 'Record not found.!',
            ];
            return response()->json($response);
        }
        $company->delete();

        $response = [
            'status' => true,
            'notification' => 'Company deleted successfully!',
        ];

        return response()->json($response);
    }
    // public function destroy1($id)
    // {
    //     $company = Company::find($id);
    //     if (!$company) {
    //         return redirect()->route('company.index')->with('error', 'Company not found.');
    //     }        
    //     $company->delete();        
    //     return redirect()->route('company.index')->with('success', 'Company deleted successfully');
    // }

}