<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;
class ResourceController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate([
          'name' => 'required|string|max:255',
          // Ajoutez d'autres règles de validation si nécessaire
      ]);

      Resource::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $request->validate([
          'name' => 'required|string|max:255',
          // Ajoutez d'autres règles de validation si nécessaire
      ]);

      $resource = Resource::findOrFail($id);
      $resource->update($request->all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $resource = Resource::findOrFail($id);
      $resource->delete();
    }
}
