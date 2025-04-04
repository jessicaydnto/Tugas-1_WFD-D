<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;

class PromotionController extends Controller
{
    public function index()
    {
        $promotions = Promotion::latest()->get(); // ambil data promosi
        return view('promotions.index', compact('promotions')); // mengirim ke 
    }

    public function create()
    {
        return view('promotions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('public/promotions');

        Promotion::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => str_replace('public/', 'storage/', $imagePath),
        ]);

        return redirect()->route('promotions.index')->with('success', 'Promotion created successfully.');
    }

    public function show(Promotion $promotion)
    {
        return view('promotions.detail', compact('promotion'));
    }

    public function edit(Promotion $promotion)
    {
        return view('promotions.edit', compact('promotion'));
    }

    public function update(Request $request, Promotion $promotion)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/promotions');
            $promotion->image = str_replace('public/', 'storage/', $imagePath);
        }

        $promotion->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $promotion->image,
        ]);

        return redirect()->route('promotions.index')->with('success', 'Promotion updated successfully.');
    }

    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        return redirect()->route('promotions.index')->with('success', 'Promotion deleted successfully.');
    }
}
