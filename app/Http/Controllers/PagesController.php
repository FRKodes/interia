<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	return View('pages.index');
    }

    public function google023b1f1f6a52451d()
    {
    	return View('pages.google023b1f1f6a52451d');
    }

    public function sitemap()
    {
    	// return View('pages.sitemap')->header('Content-Type', 'text/xml');
        // 
        
        $xml_content = '<?xml version="1.0" encoding="UTF-8"?> <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"> <url> <loc>https://www.interia.com.mx/</loc> <lastmod>2019-01-25T03:17:56+00:00</lastmod> <changefreq>yearly</changefreq> <priority>1.00</priority> </url> </urlset>';
        
        return response($xml_content)
                ->withHeaders([
                'Content-Type' => 'text/xml'
                ]);
    }
}
