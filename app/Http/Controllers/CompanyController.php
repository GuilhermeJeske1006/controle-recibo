<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Storage};

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('view', Company::class);

        return view('company.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        $this->authorize('viewUpdate', Company::class);

        return view('company.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'name_company' => 'required',
                'cnpj'         => 'required',
                'email'        => 'required',
                'street'       => 'required',
                'number'       => 'required',
                'cep'          => 'required',
                'neighborhood' => 'required',
                'city'         => 'required',
                'state'        => 'required',
                'photo'        => 'max:2048',
                'marca_dagua'  => 'max:2048',
            ]);

            $photo = $this->storeFile($request->file('photo'), 'photos', $company->photo);

            $marca_da_agua = $this->storeFile($request->file('marca_dagua'), 'marca_dagua', $company->marca_da_agua);

            $company->update([
                'name_company' => $request->name_company,
                'cnpj'         => $request->cnpj,
                'email'        => $request->email,
                'phone_sender' => $request->phone_sender,
                'description'  => $request->description,
                'instagram'    => $request->instagram,
                'photo'        => $photo,
                'slogan'       => $request->slogan,
                'marca_dagua'  => $marca_da_agua,
                'adress_id'    => $company->adress_id,
            ]);

            $company->adress->update([
                'street'       => $request->street,
                'number'       => $request->number,
                'complement'   => $request->complement,
                'cep'          => $request->cep,
                'neighborhood' => $request->neighborhood,
                'city'         => $request->city,
                'state'        => $request->state,
            ]);

            DB::commit();

            return back()->with('success', 'Empresa atualizada com sucesso!');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()->with('error', 'Erro ao atualizar empresa!');
        }
    }

    private function storeFile($file, $directory, $existingFile = null)
    {
        if ($file) {
            $path = Storage::disk('s3')->put($directory, $file, 'public');

            if ($existingFile) {
                Storage::disk('s3')->delete($existingFile);
            }

            return $path;
        }

        return $existingFile;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
