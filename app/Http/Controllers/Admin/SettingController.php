<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /** Settings editable from the admin panel, grouped for display. */
    public const GROUPS = [
        'Contact Details' => [
            'phone'           => 'Phone Number',
            'email'           => 'Email Address',
            'address'         => 'Head Office Address',
            'factory_address' => 'Factory Address',
            'working_hours'   => 'Working Hours',
        ],
        'Header & Footer' => [
            'top_bar_text' => 'Top Bar Text',
            'footer_about' => 'Footer About Text',
            'copyright'    => 'Copyright Line',
        ],
        'Social Links' => [
            'facebook'  => 'Facebook URL',
            'twitter'   => 'Twitter URL',
            'linkedin'  => 'LinkedIn URL',
            'youtube'   => 'YouTube URL',
            'instagram' => 'Instagram URL',
        ],
    ];

    public function edit()
    {
        return view('admin.settings', [
            'groups' => self::GROUPS,
            'values' => Setting::all_pairs(),
        ]);
    }

    public function update(Request $request)
    {
        $allowedKeys = array_merge(...array_map('array_keys', array_values(self::GROUPS)));

        foreach ($allowedKeys as $key) {
            Setting::set($key, $request->input($key));
        }

        return back()->with('success', 'Settings saved.');
    }
}
