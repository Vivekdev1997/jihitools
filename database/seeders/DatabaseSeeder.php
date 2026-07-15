<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\PageMeta;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ---------- Admin user ----------
        User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            ['name' => 'Administrator', 'password' => Hash::make('admin123')]
        );

        // ---------- Site settings ----------
        $settings = [
            'phone'           => '(934) 256 7850',
            'email'           => 'info@example.com',
            'address'         => '73 Ringer House Lane, Dynatis Newyork 33022, USA',
            'factory_address' => 'Suite # 140 Belfast Ave, Trendys Florida 33022, USA',
            'working_hours'   => 'Mon to Sat: 9:am to 6pm',
            'top_bar_text'    => 'Quality hand tools built to last',
            'footer_about'    => 'JIHI Hand Tools manufactures durable, precision hand tools trusted by professionals, workshops and everyday users.',
            'copyright'       => '© ' . date('Y') . ' JIHI Hand Tools. All rights reserved.',
            'facebook'        => '#',
            'twitter'         => '#',
            'linkedin'        => '#',
            'youtube'         => '#',
            'instagram'       => '#',
        ];
        foreach ($settings as $key => $value) {
            Setting::firstOrCreate(['key' => $key], ['value' => $value]);
        }

        // ---------- Page meta tags (SEO) ----------
        $metas = [
            'home'     => ['Home', 'JIHI Hand Tools | Quality Hand Tools Manufacturer', 'Durable, precision hand tools for professionals, workshops and everyday users by JIHI Hand Tools.'],
            'about'    => ['About', 'About Us | JIHI Hand Tools', 'Learn about JIHI Hand Tools — a manufacturer of durable, precision hand tools with strict quality checks.'],
            'products' => ['Products', 'Our Products | JIHI Hand Tools', 'Browse the JIHI Hand Tools product range by category — quality hand tools built to last.'],
            'contact'  => ['Contact', 'Contact Us | JIHI Hand Tools', 'Get in touch with JIHI Hand Tools for product enquiries, bulk orders and support.'],
        ];
        foreach ($metas as $slug => [$name, $title, $description]) {
            PageMeta::firstOrCreate(['slug' => $slug], [
                'name'             => $name,
                'meta_title'       => $title,
                'meta_keywords'    => 'JIHI Hand Tools, hand tools, ' . strtolower($name),
                'meta_description' => $description,
            ]);
        }

        // ---------- Sample categories & products ----------
        if (Category::count() === 0) {
            $samples = [
                'Hand Tools' => [
                    ['Screwdriver Set', null],
                    ['Combination Pliers', null],
                    ['Adjustable Wrench', null],
                ],
                'Garden Tools' => [
                    ['Garden Trowel', null],
                    ['Pruning Shears', null],
                    ['Hedge Clippers', null],
                ],
            ];

            $catOrder = 0;
            foreach ($samples as $catName => $products) {
                $category = Category::create([
                    'name'        => $catName,
                    'slug'        => Str::slug($catName),
                    'description' => "High quality {$catName} for modern industries.",
                    'sort_order'  => $catOrder++,
                    'is_active'   => true,
                ]);

                foreach ($products as $i => [$name, $image]) {
                    Product::create([
                        'category_id'       => $category->id,
                        'name'              => $name,
                        'slug'              => Str::slug($name),
                        'short_description' => "Reliable and efficient {$name} built for demanding industrial environments.",
                        'description'       => "<p>The <strong>{$name}</strong> is designed for performance and durability. It is part of our {$catName} range and comes with full installation support and warranty.</p><p>Contact us for specifications, pricing and delivery options.</p>",
                        'image'             => $image,
                        'sort_order'        => $i,
                        'is_active'         => true,
                    ]);
                }
            }
        }
    }
}
