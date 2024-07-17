<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homes;
use App\Models\Images;
use App\Models\Corosels;
use App\Models\Texts;
use App\Models\Cards;
use App\Models\Carths;
use App\Models\Prices;
use App\Models\Galeris;
use App\Models\Testimonis;
use App\Models\Contacts;
use App\Models\Abouts;
use App\Models\Files;
use App\Models\Blogconsole;
use App\Models\Blogkategoris;
use App\Models\Blogs;
use App\Models\Blogtags;
class FrontController extends Controller
{
    public function LogoShow(Request $request)
    {   
        $carousel= Corosels::all()->take(3);
        $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
        $header= Homes::with(['images','texts'])->where('kategori', 'header')->take(1)->get();
        $about = Abouts::all();
        $textheader= Texts::all()->where('title', 'header')->take(1);
        $textservice = Texts::all()->where('title', 'headerservice')->take(1);
        $textprice = Texts::all()->where('title', 'headerprice')->take(1);
        $service = Cards::all()->where('kategori', 'Layanan')->take(4);
        $price = Prices::all()->take(4);
        $gallery = Galeris::with(['images','texts'])->take(4)->get();

        $alltema = Carths::paginate(6); // Per page limit

        $basic = Carths::all()->where('kategori', 'basic')->take(6);
        $medium = Carths::all()->where('kategori', 'medium')->take(6);
        $custom = Carths::all()->where('kategori', 'custom')->take(6);

        $porto = Cards::all()->where('kategori', 'Portofolio')->take(1);
        $portowebsite = Cards::all()->where('judul', 'Website')->take(4);
        $portomobile = Cards::all()->where('judul', 'Mobile')->take(4);
        $portodigital = Cards::all()->where('judul', 'Digital Marketing')->take(4);
        $portouiux = Cards::all()->where('judul', 'UI UX')->take(4);

        $testimoni = Testimonis::all()->take(3);
        $contact = Contacts::all();
        $blog = Blogs::all();
        $blogkategori = Blogkategoris::all();
        return view('home', compact(
            'logo',
            'carousel', 
            'about',
            'textheader',
            'textservice',
            'textprice',
            'service',
            'price',
            'gallery',
            'testimoni',
            'alltema',
            'basic',
            'medium',
            'custom',
            'porto',
            'portowebsite',
            'portomobile',
            'portodigital',
            'portouiux',
            'header',
            'contact',
            'blog',
            'blogkategori'
        ));
    }
    public function ServiceShow(Request $request)
    
        {   
        $service = Cards::all()->where('kategori', 'Layanan')->take(4);
        $alltema = Carths::paginate(6); // Per page limit

        $basic = Carths::all()->where('kategori', 'basic')->take(6);
        $medium = Carths::all()->where('kategori', 'medium')->take(6);
        $custom = Carths::all()->where('kategori', 'custom')->take(6);
            return view('service', compact(
            'alltema',
            'basic',
            'medium',
            'custom',
            'service',
            ));
        }
        public function PortfolioShow()
    
        {   
        $porto = Cards::all()->where('kategori', 'Portofolio')->take(1);
        $portowebsite = Cards::all()->where('judul', 'Website')->take(4);
        $portomobile = Cards::all()->where('judul', 'Mobile')->take(4);
        $portodigital = Cards::all()->where('judul', 'Digital Marketing')->take(4);
        $portouiux = Cards::all()->where('judul', 'UI UX')->take(4);
            return view('portofolio', compact(
            'porto',
            'portowebsite',
            'portomobile',
            'portodigital',
            'portouiux',
            ));
        }
        public function GalleryShow()
        
        {   
        $gallery = Galeris::all();
            return view('gallery', compact(
            'gallery',
            
        ));
        }
        public function BlogShow()
    
        {   
            $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
            $blog = Blogs::with(['kategoris'])->paginate(4);
            $blogkategori = Blogkategoris::all();
            $blogtags = Blogtags::all();
            $blogabove = Blogs::all()->take(3);
            return view('blog', compact(
                'blog',
                'blogabove',
                'blogkategori',
                'blogtags',
                'logo',
            ));
            }
        public function AboutShow()
    
        {   
            $about = Abouts::all();
            return view('about', compact(
  
                'about',
            ));
        }
        public function ContactShow()
    
        {   
            return view('contact');
        }
        public function BlogContent()
    
        {   
            return view('blogcontent');
        }
        public function BlogDetail($slug)
        {
            $logo= Homes::with(['images','texts'])->where('kategori', 'logo')->take(1)->get();
            $blog = Blogs::all();
            $blogabove = Blogs::all()->take(3);
            $blogkategori = Blogkategoris::all();
            $blogtags = Blogtags::all();
            $blogdetail = Blogs::where('slug', $slug)->firstOrFail();
            return view('blogvalue', compact(
                'blogdetail',
                'blog',
                'blogabove',
                'blogkategori',
                'blogtags',
                'logo',
            ));
        }
}
