<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use App\Repositories\MannequinRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * @var CategoryRepository
     */
    private $_categoryRepo;
    /**
     * @var MannequinRepository
     */
    private $_mannequinRepo;

    public function __construct(
        CategoryRepository $categoryRepository,
        MannequinRepository $mannequinRepository
    ) {
        $this->_categoryRepo = $categoryRepository;
        $this->_mannequinRepo = $mannequinRepository;
    }

    /**
     * @return Factory|View
     */
    public function home()
   {
       return view('frontend.pages.home');
   }

    /**
     * @return Factory|View
     */
    public function about()
    {
        return view('frontend.pages.about');
    }

    /**
     * @return Factory|View
     */
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    /**
     * @return Factory|View
     */
    public function signUp()
    {
        return view('frontend.pages.signup');
    }

    /**
     * @return Factory|View
     */
    public function signUpSuccess()
    {
        return view('frontend.pages.signup_success');
    }

    /**
     * @param string $category
     * @param string $gender
     * @return Factory|View
     */
    public function models(string $category, string $gender = '')
    {
        if (!in_array($category, Category::CATEGORIES)) {
            abort(404);
        }
        $models = $this->_mannequinRepo->findByCategory($category, $gender);
        return view('frontend.pages.models', compact('models', 'category'));
    }

    /**
     * @param string $hashedId
     * @param string $name
     * @return Factory|View
     */
    public function portfolio(string $hashedId, string $name)
    {
        $model = $this->_mannequinRepo->findById(base64_decode($hashedId));
        return view('frontend.pages.portfolio', compact('model'));
    }

    public function privacyPolicy()
    {
        return view('frontend.pages.privacy_policy');
    }
}
