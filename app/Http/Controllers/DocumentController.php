<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{

	public function index(Request $request)
	{
		$documents = Document::orderBy('id', 'desc')->get();
		return view('documents', [
			'documents' => $documents,
		]);
	}

	public function create(Request $request)
	{
		$document = new Document;
		$document->contents = $request->contents;
		$document->save();

		return redirect('/documents');
	}

	public function delete(Request $request, Document $document)
	{
		$document->delete();

		return redirect('/documents');
	}



}
