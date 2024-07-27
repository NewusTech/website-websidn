<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\TextController;
use App\Http\Controllers\Admin\CoroselController;
use App\Http\Controllers\Admin\CardController;
use App\Http\Controllers\Admin\CarthController;
use App\Http\Controllers\Admin\TestimoniController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\Components\HomeController;
use App\Http\Controllers\Admin\Components\TextHomeController;
use App\Http\Controllers\Admin\Components\TestimoniHomeController;
use App\Http\Controllers\Admin\Components\Controller;
use App\Http\Controllers\Admin\Components\InsertController;
use App\Http\Controllers\Admin\Components\ContactHomeController;
use App\Http\Controllers\Admin\Components\CoroselHomeController;
use App\Http\Controllers\Admin\Components\CardHomeController;
use App\Http\Controllers\Admin\Blogger\BlogController;
use App\Http\Controllers\Admin\Blogger\BlogkategoriController;
use App\Http\Controllers\Admin\Blogger\BlogtagController;
use App\Http\Controllers\Admin\Blogger\BlogconsoleController;
use Illuminate\Support\Facades\Route;

Route::get('/sitemap.xml', [SitemapController::class, 'index']);

Route::get('/', [FrontController::class, 'LogoShow'])->name('home');
Route::get('/layanan', [FrontController::class, 'ServiceShow'])->name('layanan');
Route::get('/portofolio', [FrontController::class, 'PortfolioShow'])->name('portofolio');
Route::get('/gallery', [FrontController::class, 'GalleryShow'])->name('gallery');
Route::get('/blog', [FrontController::class, 'BlogShow'])->name('blog');
Route::get('/blogcontent', [FrontController::class, 'BlogContent'])->name('blogcontent');
Route::get('/about', [FrontController::class, 'AboutShow'])->name('about');
Route::get('/contact', [FrontController::class, 'ContactShow'])->name('contact');
// Route::get('/{slug}', function ($slug) {
//     return redirect()->route('blog.detail', ['slug' => $slug]);
// });
Route::get('/blog/{slug}', [FrontController::class, 'BlogDetail'])->name('blog.detail');

Route::controller(LoginController::class)->group(function () {
    Route::get('/login','LoginForm')->name('login'); 
    Route::post('/login','login');
    Route::post('/logout','logout');
  });

Route::prefix("admin")->namespace("Admin")->middleware(["auth","admin"])->group(function(){
    Route::prefix('')->group(function () {
        Route::get('/image', [ImageController::class, 'ImageIndex'])->name('image.index');
        Route::get('/image/create', [ImageController::class, 'ImageCreate'])->name('image.create');
        Route::post('/image', [ImageController::class, 'ImageStore'])->name('image.store');
        Route::get('/image/{id}/edit', [ImageController::class, 'ImageEdit'])->name('image.edit');
        Route::put('/image/{id}', [ImageController::class, 'ImageUpdate'])->name('image.update');
        Route::get('/image/{id}', [ImageController::class, 'ImageView'])->name('image.view');
        Route::delete('/image/{id}', [ImageController::class, 'ImageDelete'])->name('image.delete');
    
        Route::get('/text', [TextController::class, 'TextIndex'])->name('text.index');
        Route::get('/text/create', [TextController::class, 'TextCreate'])->name('text.create');
        Route::post('/text', [TextController::class, 'TextStore'])->name('text.store');
        Route::get('/text/{id}/edit', [TextController::class, 'TextEdit'])->name('text.edit');
        Route::put('/text/{id}', [TextController::class, 'TextUpdate'])->name('text.update');
        Route::get('/text/{id}', [TextController::class, 'TextView'])->name('text.view');
        Route::delete('/text/{id}', [TextController::class, 'TextDelete'])->name('text.delete');
   
        Route::get('/corosel', [CoroselController::class, 'CoroselIndex'])->name('corosel.index');
        Route::get('/corosel/create', [CoroselController::class, 'CoroselCreate'])->name('corosel.create');
        Route::post('/corosel', [CoroselController::class, 'CoroselStore'])->name('corosel.store');
        Route::get('/corosel/{id}/edit', [CoroselController::class, 'CoroselEdit'])->name('corosel.edit');
        Route::put('/corosel/{id}', [CoroselController::class, 'CoroselUpdate'])->name('corosel.update');
        Route::get('/corosel/{id}', [CoroselController::class, 'CoroselView'])->name('corosel.view');
        Route::delete('/corosel/{id}', [CoroselController::class, 'CoroselDelete'])->name('corosel.delete');
    
        Route::get('/card', [CardController::class, 'CardIndex'])->name('card.index');
        Route::get('/card/create', [CardController::class, 'CardCreate'])->name('card.create');
        Route::post('/card', [CardController::class, 'CardStore'])->name('card.store');
        Route::get('/card/{id}/edit', [CardController::class, 'CardEdit'])->name('card.edit');
        Route::put('/card/{id}', [CardController::class, 'CardUpdate'])->name('card.update');
        Route::get('/card/{id}', [CardController::class, 'CardView'])->name('card.view');
        Route::delete('/card/{id}', [CardController::class, 'CardDelete'])->name('card.delete');

        Route::get('/carth', [CarthController::class, 'CarthIndex'])->name('carth.index');
        Route::get('/carth/create', [CarthController::class, 'CarthCreate'])->name('carth.create');
        Route::post('/carth', [CarthController::class, 'CarthStore'])->name('carth.store');
        Route::get('/carth/{id}/edit', [CarthController::class, 'CarthEdit'])->name('carth.edit');
        Route::put('/carth/{id}', [CarthController::class, 'CarthUpdate'])->name('carth.update');
        Route::get('/carth/{id}', [CarthController::class, 'CarthView'])->name('carth.view');
        Route::delete('/carth/{id}', [CarthController::class, 'CarthDelete'])->name('carth.delete');
        
        // TestimoniController routes
        Route::get('/testimoni', [TestimoniController::class, 'TestimoniIndex'])->name('testimoni.index');
        Route::get('/testimoni/create', [TestimoniController::class, 'TestimoniCreate'])->name('testimoni.create');
        Route::post('/testimoni', [TestimoniController::class, 'TestimoniStore'])->name('testimoni.store');
        Route::get('/testimoni/{id}/edit', [TestimoniController::class, 'TestimoniEdit'])->name('testimoni.edit');
        Route::put('/testimoni/{id}', [TestimoniController::class, 'TestimoniUpdate'])->name('testimoni.update');
        Route::get('/testimoni/{id}', [TestimoniController::class, 'TestimoniView'])->name('testimoni.view');
        Route::delete('/testimoni/{id}', [TestimoniController::class, 'TestimoniDelete'])->name('testimoni.delete');
        
        // PriceController routes
        Route::get('/price', [PriceController::class, 'PriceIndex'])->name('price.index');
        Route::get('/price/create', [PriceController::class, 'PriceCreate'])->name('price.create');
        Route::post('/price', [PriceController::class, 'PriceStore'])->name('price.store');
        Route::get('/price/{id}/edit', [PriceController::class, 'PriceEdit'])->name('price.edit');
        Route::put('/price/{id}', [PriceController::class, 'PriceUpdate'])->name('price.update');
        Route::get('/price/{id}', [PriceController::class, 'PriceView'])->name('price.view');
        Route::delete('/price/{id}', [PriceController::class, 'PriceDelete'])->name('price.delete');
        
        // BlogController routes
        Route::get('/blogs', [BlogController::class, 'Blogindex'])->name('blog.index');
        Route::get('/blogs/create', [BlogController::class, 'Blogcreate'])->name('blog.create');
        Route::post('/blogs/store', [BlogController::class, 'Blogstore'])->name('blog.store');
        Route::get('/blogs/{id}/edit', [BlogController::class, 'Blogedit'])->name('blog.edit');
        Route::put('/blogs/{id}/update', [BlogController::class, 'Blogupdate'])->name('blog.update');
        Route::get('/blogs/{id}/show', [BlogController::class, 'Blogshow'])->name('blog.show');
        Route::delete('/blogs/{id}/destroy', [BlogController::class, 'Blogdestroy'])->name('blog.destroy');
        
        // BlogkategoriController routes
        Route::get('/blogkategoris', [BlogkategoriController::class, 'Blogkategoriindex'])->name('blogkategori.index');
        Route::get('/blogkategoris/create', [BlogkategoriController::class, 'Blogkategoricreate'])->name('blogkategori.create');
        Route::post('/blogkategoris/store', [BlogkategoriController::class, 'Blogkategoristore'])->name('blogkategori.store');
        Route::get('/blogkategoris/{id}/edit', [BlogkategoriController::class, 'Blogkategoriedit'])->name('blogkategori.edit');
        Route::put('/blogkategoris/{id}/update', [BlogkategoriController::class, 'Blogkategoriupdate'])->name('blogkategori.update');
        Route::get('/blogkategoris/{id}/show', [BlogkategoriController::class, 'Blogkategorishow'])->name('blogkategori.show');
        Route::delete('/blogkategoris/{id}/destroy', [BlogkategoriController::class, 'Blogkategoridestroy'])->name('blogkategori.destroy');
        
        // BlogtagController routes
        Route::get('/blogtags', [BlogtagController::class, 'Blogtagindex'])->name('blogtag.index');
        Route::get('/blogtags/create', [BlogtagController::class, 'Blogtagcreate'])->name('blogtag.create');
        Route::post('/blogtags/store', [BlogtagController::class, 'Blogtagstore'])->name('blogtag.store');
        Route::get('/blogtags/{id}/edit', [BlogtagController::class, 'Blogtagedit'])->name('blogtag.edit');
        Route::put('/blogtags/{id}/update', [BlogtagController::class, 'Blogtagupdate'])->name('blogtag.update');
        Route::get('/blogtags/{id}/show', [BlogtagController::class, 'Blogtagshow'])->name('blogtag.show');
        Route::delete('/blogtags/{id}/destroy', [BlogtagController::class, 'Blogtagdestroy'])->name('blogtag.destroy');
        
        // BlogconsoleController routes
        Route::get('/blogconsoles', [BlogconsoleController::class, 'Blogconsoleindex'])->name('blogconsole.index');
        Route::get('/blogconsoles/create', [BlogconsoleController::class, 'Blogconsolecreate'])->name('blogconsole.create');
        Route::post('/blogconsoles/store', [BlogconsoleController::class, 'Blogconsolestore'])->name('blogconsole.store');
        Route::get('/blogconsoles/{id}/edit', [BlogconsoleController::class, 'Blogconsoleedit'])->name('blogconsole.edit');
        Route::put('/blogconsoles/{id}/update', [BlogconsoleController::class, 'Blogconsoleupdate'])->name('blogconsole.update');
        Route::get('/blogconsoles/{id}/show', [BlogconsoleController::class, 'Blogconsoleshow'])->name('blogconsole.show');
        Route::delete('/blogconsoles/{id}/destroy', [BlogconsoleController::class, 'Blogconsoledestroy'])->name('blogconsole.destroy');
        
        // HomeController routes
        Route::get('/home', [HomeController::class, 'HomeIndex'])->name('home.index');
        Route::get('/home/create', [HomeController::class, 'HomeCreate'])->name('home.create');
        Route::post('/home', [HomeController::class, 'HomeStore'])->name('home.store');
        Route::get('/home/{id}/edit', [HomeController::class, 'HomeEdit'])->name('home.edit');
        Route::put('/home/{id}', [HomeController::class, 'HomeUpdate'])->name('home.update');
        Route::get('/home/{id}', [HomeController::class, 'HomeView'])->name('home.view');
        Route::delete('/home/{id}', [HomeController::class, 'HomeDelete'])->name('home.delete');
        
        // GaleriController routes
        Route::get('/galeri', [GaleriController::class, 'GaleriIndex'])->name('galeri.index');
        Route::get('/galeri/create', [GaleriController::class, 'GaleriCreate'])->name('galeri.create');
        Route::post('/galeri', [GaleriController::class, 'GaleriStore'])->name('galeri.store');
        Route::get('/galeri/{id}/edit', [GaleriController::class, 'GaleriEdit'])->name('galeri.edit');
        Route::put('/galeri/{id}', [GaleriController::class, 'GaleriUpdate'])->name('galeri.update');
        Route::get('/galeri/{id}', [GaleriController::class, 'GaleriView'])->name('galeri.view');
        Route::delete('/galeri/{id}', [GaleriController::class, 'GaleriDelete'])->name('galeri.delete');
        
        // FileController routes
        Route::get('/file', [FileController::class, 'FileIndex'])->name('file.index');
        Route::get('/file/create', [FileController::class, 'FileCreate'])->name('file.create');
        Route::post('/file', [FileController::class, 'FileStore'])->name('file.store');
        Route::get('/file/{id}/edit', [FileController::class, 'FileEdit'])->name('file.edit');
        Route::put('/file/{id}', [FileController::class, 'FileUpdate'])->name('file.update');
        Route::get('/file/{id}', [FileController::class, 'FileView'])->name('file.view');
        Route::delete('/file/{id}', [FileController::class, 'FileDelete'])->name('file.delete');
        
        // ContactController routes
        Route::get('/contact', [ContactController::class, 'ContactIndex'])->name('contact.index');
        Route::get('/contact/create', [ContactController::class, 'ContactCreate'])->name('contact.create');
        Route::post('/contact', [ContactController::class, 'ContactStore'])->name('contact.store');
        Route::get('/contact/{id}/edit', [ContactController::class, 'ContactEdit'])->name('contact.edit');
        Route::put('/contact/{id}', [ContactController::class, 'ContactUpdate'])->name('contact.update');
        Route::get('/contact/{id}', [ContactController::class, 'ContactView'])->name('contact.view');
        Route::delete('/contact/{id}', [ContactController::class, 'ContactDelete'])->name('contact.delete');
        
        // AboutController routes
        Route::get('/about', [AboutController::class, 'AboutIndex'])->name('about.index');
        Route::get('/about/create', [AboutController::class, 'AboutCreate'])->name('about.create');
        Route::post('/about', [AboutController::class, 'AboutStore'])->name('about.store');
        Route::get('/about/{id}/edit', [AboutController::class, 'AboutEdit'])->name('about.edit');
        Route::put('/about/{id}', [AboutController::class, 'AboutUpdate'])->name('about.update');
        Route::get('/about/{id}', [AboutController::class, 'AboutView'])->name('about.view');
        Route::delete('/about/{id}', [AboutController::class, 'AboutDelete'])->name('about.delete');
    });

    
});
