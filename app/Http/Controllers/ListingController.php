<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //show all listing
    public function index()
    {
         return view('listings.index', [
        'heading' => 'Latest Job Listings',
        'listings' => Listing::latest()->filter(request(['tag', 'search']))->simplePaginate(3)
    ]);

    }

    //show single lsiting
    public function show(Listing $listing)
    {
         return view('listings.show', [
        'heading' => 'Goback to page',
        'listing' => $listing
    ]);

    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(Request $request)
    {
        $form = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required','email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $form['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $form['user_id'] = auth()->id();

        Listing::create($form);

        return redirect('/')->with('message', 'Listings created!');
    }

    //show edit form
    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }


    //update listing
    public function update(Request $request, Listing $listing)
    {
        //only logged in is owner
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized');
        
        }

        $form = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required','email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $form['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($form);

        return back()->with('message', 'Listings updated!');
    }

    //Delete Listing
    public function destroy(Listing $listing)
    {
        //only logged in is owner
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized');
        
        }
        $listing->delete();
        return redirect('/')->with('message', 'Deleted succesfully');
    }

// mANAGE listing
    public function manage()
    {
        return view('listings.manage', ['listings' => auth()->user()->listing()->get()]); 

    }


}
