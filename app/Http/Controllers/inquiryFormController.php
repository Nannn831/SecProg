<?php
  
namespace App\Http\Controllers;
  
use App\Models\inquiryForm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class inquiryFormController extends Controller
{
    /*
  Display a listing of the resource.
     
    public function contactUs(): View
    {
        $inquiryform = inquiryForm::latest()->paginate(5);
        
        return view('pages',compact('contactUs'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
                    */
  
    /*
     
    public function create(): View
    {
        return view('pages.contactUs');
    }
         Show the form for creating a new resource.
     */
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'phoneNumber' => 'required',
            'emailAddress' => 'required',
            'clientMessage' => 'required',
        ]);
        
        inquiryform::create($request->all());
         
        return redirect()->back()
                        ->with('success','Your Message Sent Successfully.');
    }
  
    /*
      Display the specified resource.
     
    public function show(inquiryForm $inquiryform): View
    {
        return view('products.show',compact('product')); 
    }
        */
  
    /*
     Show the form for editing the specified resource.
     
    public function edit(Product $product): View
    {
        return view('products.edit',compact('product'));
    }
  */

    /*
      Update the specified resource in storage.
     
    public function update(Request $request, Product $product): RedirectResponse
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'phoneNumber' => 'required',
            'emailAddress' => 'required',
            'clientMessage' => 'required'
        ]);

        
        
        $product->update($request->all());
        
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
                        */
  
    /*
    
     Remove the specified resource from storage.
    
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();
         
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
                         */
}