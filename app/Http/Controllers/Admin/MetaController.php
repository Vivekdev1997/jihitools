<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageMeta;
use Illuminate\Http\Request;

class MetaController extends Controller
{
    public function edit()
    {
        return view('admin.meta', [
            'pages' => PageMeta::orderBy('id')->get(),
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'meta'                        => ['required', 'array'],
            'meta.*.meta_title'           => ['nullable', 'string', 'max:255'],
            'meta.*.meta_keywords'        => ['nullable', 'string', 'max:1000'],
            'meta.*.meta_description'     => ['nullable', 'string', 'max:1000'],
        ]);

        foreach ($data['meta'] as $slug => $fields) {
            PageMeta::where('slug', $slug)->update([
                'meta_title'       => $fields['meta_title'] ?? null,
                'meta_keywords'    => $fields['meta_keywords'] ?? null,
                'meta_description' => $fields['meta_description'] ?? null,
            ]);
        }

        PageMeta::clearCache();

        return back()->with('success', 'Meta tags saved.');
    }
}
