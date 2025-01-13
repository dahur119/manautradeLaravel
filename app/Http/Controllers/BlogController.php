<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   




    public function show(string $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog-details', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
   

    
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        try{

            $blog = Blog::where('slug', $slug)->firstOrFail();

            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'slug' => 'required|string|max:unique:blogs',
                'content' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'tags' => 'required|array|exists:tags,id',
            ]);

            if($request->hasFile('image')){
                $image = $request->file('image');
                $imagePath = $request->file('image')->store('images', 'public');
                $validated['image'] = $imagePath;
            }

            $blog->update($validated);
            $blog->tags()->sync($validated['tags']);

            return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');

        }catch(\Exception $e){
            return redirect()->route('blogs.index')->with('error', 'Blog update failed: ' . $e->getMessage());
        }

            

        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully');
    }


}
