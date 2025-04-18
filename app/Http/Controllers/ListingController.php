<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    public function index()
    {

        return view('listings.index', [

            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
    public function create()
    {
        return view('listings.create');
    }
    public function store(Request $request)
    {

        $fields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'

        ]);

        if ($request->hasFile('logo')) {
            $fields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $fields['user_id'] = auth()->id();
        Listing::create($fields);
        return redirect('/')->with('message', 'Job created successfully!');
    }
    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }
    public function update(Request $request, Listing $listing)
    {
        $fields['user_id'] = auth()->id();

        if (!$fields['user_id']) {
            abort(403, 'You must be logged in to post a job.');
        }
        
        $fields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'

        ]);

        if ($request->hasFile('logo')) {
            $fields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $listing->update($fields);
        return back()->with('message', 'Job updated successfully!');
    }
    public function destroy(Listing $listing)
    { 
         if($listing->user_id != auth()->id()) {
        abort(403, 'You do not have access to this job');
        }
        $listing->delete();
        return redirect('/')->with('message', 'Job deleted successfully!');
    }
    public function manage() {
        return view('listings.manage',['listings' => auth()->user()->listings()->get()]);
    }
}
