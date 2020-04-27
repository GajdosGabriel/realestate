<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Public area
Route::name('public.')->group(function() {
    Route::get('/', 'PublicController@index')->name('home');
    Route::get('/sk', 'PublicController@indexSK');
    Route::get('/video', 'PublicController@video');
    Route::get('/video/sk', 'PublicController@videoSK');
    Route::get('/terms-and-conditions', 'PublicController@terms_and_conditions')->name('tac');
    Route::get('/privacy-policy', 'PublicController@privacy_policy')->name('pp');
    Route::get('/risk-disclosure', 'PublicController@risk_disclosure')->name('rd');
    Route::get('/cookies', 'PublicController@cookies')->name('cookies');
    Route::get('/lang/{lang}', 'PublicController@lang')->name('lang');

    Route::name('certification.')->prefix('/certification')->group(function() {
        Route::get('/', 'CertificationController@index')->name('index');
        Route::get('/hnwi', 'CertificationController@hnwi')->name('hnwi');
        Route::get('/si', 'CertificationController@si')->name('si');
        Route::get('/ri', 'CertificationController@ri')->name('ri');

        Route::post('/submit', 'CertificationPostController@submit')->name('submit');
    });

    Route::get('/test', 'PublicController@test');
    Route::get('/office-building', 'PublicController@project');
    Route::get('/nitra', 'PublicController@nitra');
    Route::get('/home-box', 'PublicController@home_box');
    Route::get('/office-building2', 'PublicController@office2');
    Route::get('/wellness-resort-renovation-project', 'PublicController@wrrp');
    Route::get('/first-line-lake-development-project/{lang?}', 'PublicController@flldp');
    Route::get('/city-center-renovation-project', 'PublicController@ccrp');
    Route::get('/schon', 'PublicController@schon');
    Route::get('/liptov', 'PublicController@liptov');

    Route::post('/contact', 'PublicPostController@contact')->name('contact');
    Route::post('/cookies', 'PublicPostController@cookies')->name('cookiesPost');

    Auth::routes();
    Route::get('/login', 'PublicController@login')->name('login');
    Route::get('/login/sk', 'PublicController@loginSK')->name('loginSK');
    Route::get('/sign-up/{lang?}', 'PublicController@sign_up')->name('signUp');
});

// Member area
Route::name('member.')->middleware(['auth'])->prefix('/member')->group(function() {
    Route::get('/', 'MemberController@index')->name('home');
    Route::get('/contact', 'MemberController@contact')->name('contact');
    Route::get('/invest', 'MemberController@invest')->name('invest');

    Route::name('sirava.')->prefix('/sirava')->group(function() {
        Route::get('/why-invest', 'Member\SiravaController@why_invest')->name('why_invest');
        Route::get('/master-plan', 'Member\SiravaController@master_plan')->name('master_plan');
        Route::get('/beach-club', 'Member\SiravaController@beach_club_mp')->name('beach_mp');
        Route::get('/business-plan', 'Member\SiravaController@business_plan')->name('business_plan');
        Route::get('/location', 'Member\SiravaController@location')->name('location');
        Route::get('/news', 'Member\SiravaController@news')->name('news');
        Route::get('/how-to-invest', 'Member\SiravaController@how_to_invest')->name('how_to_invest');
    });

    Route::name('realized.')->prefix('/realized-projects')->group(function() {
//        Route::get('/', 'Member\RealizedController@index')->name('home');
        Route::get('/renovation-project-house-1', 'Member\RealizedController@renovation_project_house1')->name('renovation_project_house1');
        Route::get('/renovation-project-house-3', 'Member\RealizedController@renovation_project_house3')->name('renovation_project_house3');
        Route::get('/recreational-new-development-project', 'Member\RealizedController@recreational_new_development_project')->name('recreational_new_development_project');
        Route::get('/renovation-project-house-2', 'Member\RealizedController@renovation_project_house2')->name('renovation_project_house2');
    });

    Route::name('projects.')->prefix('/projects')->group(function() {
        Route::get('/', 'Member\ProjectsController@index')->name('index');
        Route::get('/renovations', 'Member\ProjectsController@renovations')->name('renovations');
        Route::get('/wellness-resort-renovation-project', 'Member\ProjectsController@wrrp')->name('wrrp');
        Route::get('/first-line-lake-development-project', 'Member\ProjectsController@flldp')->name('flldp');
        Route::get('/city-center-renovation-project', 'Member\ProjectsController@ccrp')->name('ccrp');
    });

    Route::name('orders.')->prefix('/orders')->group(function() {
        Route::get('/{id}', 'Member\OrderController@order')->name('order');
        Route::get('/{id}/annex/{number}', 'Member\OrderController@annex')->name('annex');
    });

    Route::name('news.')->prefix('/news')->group(function() {
        Route::get('/{id}', 'Member\NewsController@article')->name('article');
    });

    Route::name('partner.')->prefix('/partner-program')->group(function() {
        Route::get('/', 'Member\PartnerController@index')->name('home');

        Route::name('marketing-materials.')->prefix('/marketing-materials')->group(function() {
            Route::get('/', 'Member\PartnerController@marketing_materials')->name('home');
            Route::get('/html-banners', 'Member\PartnerController@html_banners')->name('html-banners');
            Route::get('/facebook-banners', 'Member\PartnerController@fb_banners')->name('fb-banners');
        });

        Route::get('/your-signups', 'Member\PartnerController@your_signups')->name('your-signups');
        Route::get('/email-banner/{id}', 'Member\PartnerController@email_banner')->name('email-banner');

        Route::name('users.')->prefix('/users')->group(function() {
            Route::get('/{id}', 'Member\UserController@user')->name('user');
            Route::get('/{id}/activity', 'Member\UserController@activity')->name('userActivity');

            Route::post('/status', 'Member\UserPostController@status')->name('userStatusPost');
            Route::post('/comment', 'Member\CommentPostController@add')->name('commentPost');
        });

        Route::post('/partner', 'MemberPostController@partner')->name('partnerPost');
    });

    Route::get('/my-investments', 'MemberController@my_investments')->name('investments');
    Route::get('/account', 'MemberController@account')->name('account');
    Route::get('/leaveImpersonation', 'MemberController@leave_impersonation')->name('leaveImpersonation');
    Route::get('/step1', 'MemberController@step1')->name('step1');
    Route::get('/step2', 'MemberController@step2')->name('step2');
    Route::get('/step3', 'MemberController@step3')->name('step3');

    Route::post('/step1', 'Member\OrderPostController@step1')->name('step1Post');
    Route::post('/step2', 'Member\OrderPostController@step2')->name('step2Post');
    Route::post('/step3', 'Member\OrderPostController@step3')->name('step3Post');
    Route::post('/pep', 'MemberPostController@pep')->name('pepPost');
    Route::post('/document-upload', 'Member\DocumentPostController@upload')->name('documentUploadPost');
    Route::post('/account', 'MemberPostController@account')->name('accountPost');
    Route::post('/bank-details', 'MemberPostController@bank_details')->name('bankDetailsPost');
    Route::post('/contact', 'MemberPostController@contact')->name('contactPost');
});

// Marketing area
Route::name('marketing.')->middleware(['auth', 'checkMarketing'])->prefix('/marketing')->group(function() {
    Route::get('/', 'MarketingController@index')->name('home');

    Route::name('users.')->prefix('/users')->group(function() {
        Route::get('/', 'Marketing\UserController@index')->name('home');
        Route::get('/by-role/{name?}', 'Marketing\UserController@by_role')->name('byRole');
        Route::get('/by-status/{id?}', 'Marketing\UserController@by_status')->name('byStatus');
        Route::get('/{id}', 'Marketing\UserController@user')->name('user');
        Route::get('/{id}/activity', 'Marketing\UserController@activity')->name('userActivity');
    });

    Route::name('articles.')->prefix('/articles')->group(function() {
        Route::get('/', 'Marketing\ArticleController@index')->name('home');
        Route::get('/new', 'Marketing\ArticleController@new')->name('new');
        Route::get('/{id}', 'Marketing\ArticleController@article')->name('article');
        Route::get('/{id}/edit', 'Marketing\ArticleController@edit')->name('articleEdit');

        Route::post('/new', 'Marketing\ArticlePostController@article')->name('articlePost');
        Route::post('/edit', 'Marketing\ArticlePostController@edit')->name('articleEditPost');
    });
});

// Agent area
Route::name('agent.')->middleware(['auth', 'checkAgent', 'agentUpcomingReminders'])->prefix('/agent')->group(function() {
    Route::get('/', 'AgentController@index')->name('home');

    Route::name('users.')->prefix('/users')->group(function() {
        Route::get('/', 'Agent\UserController@index')->name('home');
        Route::get('/new', 'Agent\UserController@new')->name('new');
        Route::get('/by-role/{name?}', 'Agent\UserController@by_role')->name('byRole');
        Route::get('/by-status/{id?}', 'Agent\UserController@by_status')->name('byStatus');
        Route::get('/skczhu', 'Agent\UserController@skczhu')->name('skczhu');
        Route::get('/red-display/{bool}', 'Agent\UserController@red_display')->name('red-display');
        Route::get('/{id}', 'Agent\UserController@user')->name('user');
        Route::get('/{id}/edit', 'Agent\UserController@edit')->name('userEdit');
        Route::get('/{id}/activity', 'Agent\UserController@activity')->name('userActivity');
        Route::get('/{id}/impersonate', 'Agent\UserController@impersonate')->name('userImpersonate');
        Route::get('/{id}/roles', 'Agent\UserController@roles')->name('userRoles');
        Route::get('/{id}/agent', 'Agent\UserController@agent')->name('userAgent');
        Route::get('/{id}/partner', 'Agent\UserController@partner')->name('userPartner');
        Route::get('/{id}/move-down', 'Agent\UserController@move_down')->name('move-down');

        Route::post('/new', 'Agent\UserPostController@new')->name('userPost');
        Route::post('/status', 'Agent\UserPostController@status')->name('userStatusPost');
        Route::post('/edit', 'Agent\UserPostController@edit')->name('userEditPost');
        Route::post('/roles', 'Agent\RolePostController@user_roles')->name('userRolesPost');
    });

    Route::name('comments.')->prefix('/comments')->group(function() {
        Route::get('/{id}/edit', 'Agent\CommentController@edit')->name('edit');
        Route::get('/{id}/delete', 'Agent\CommentController@delete')->name('delete');

        Route::post('/comment', 'Agent\CommentPostController@add')->name('commentPost');
        Route::post('/comment-edit', 'Agent\CommentPostController@edit')->name('editPost');
    });

    Route::name('reminders.')->prefix('/reminders')->group(function() {
        Route::get('/', 'Agent\ReminderController@index')->name('home');
        Route::get('/{id}/edit', 'Agent\ReminderController@edit')->name('edit');
        Route::get('/{id}/done', 'Agent\ReminderController@done')->name('done');

        Route::post('/new', 'Agent\ReminderPostController@new')->name('newPost');
        Route::post('/edit', 'Agent\ReminderPostController@edit')->name('editPost');
    });

    Route::name('leads.')->prefix('/leads')->group(function() {
        Route::get('/', 'Agent\LeadsController@index')->name('index');
        Route::get('/hot', 'Agent\LeadsController@hot')->name('hot');
        Route::get('/{id}/move-hot', 'Agent\LeadsController@move_hot')->name('move-hot');
        Route::get('/{id}/move-down', 'Agent\LeadsController@move_down')->name('move-down');
        Route::get('/{id}/delete', 'Agent\LeadsController@delete')->name('delete');
    });
});

// Admin area
Route::name('admin.')->middleware(['auth', 'checkAdmin', 'adminUpcomingReminders'])->prefix('/admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('home');

    Route::name('articles.')->prefix('/articles')->group(function() {
        Route::get('/', 'Admin\ArticleController@index')->name('home');
        Route::get('/new', 'Admin\ArticleController@new')->name('new');
        Route::get('/{id}', 'Admin\ArticleController@article')->name('article');
        Route::get('/{id}/edit', 'Admin\ArticleController@edit')->name('articleEdit');

        Route::post('/article', 'Admin\ArticlePostController@article')->name('articlePost');
        Route::post('/article/edit', 'Admin\ArticlePostController@article_edit')->name('articleEditPost');
    });

    Route::name('users.')->prefix('/users')->group(function() {
        Route::get('/', 'Admin\UserController@index')->name('home');
        Route::get('/new', 'Admin\UserController@new')->name('new');
        Route::get('/by-role/{name?}', 'Admin\UserController@by_role')->name('byRole');
        Route::get('/by-status/{id?}', 'Admin\UserController@by_status')->name('byStatus');
        Route::get('/agents', 'Admin\UserController@agents')->name('agents');
        Route::get('/{id}', 'Admin\UserController@user')->name('user');
        Route::get('/{id}/edit', 'Admin\UserController@edit')->name('userEdit');
        Route::get('/{id}/pep', 'Admin\UserController@pep')->name('userPep');
        Route::get('/{id}/activity', 'Admin\UserController@activity')->name('userActivity');
        Route::get('/{id}/impersonate', 'Admin\UserController@impersonate')->name('userImpersonate');
        Route::get('/{id}/roles', 'Admin\UserController@roles')->name('userRoles');
        Route::get('/{id}/agent', 'Admin\UserController@agent')->name('userAgent');
        Route::get('/{id}/partner', 'Admin\UserController@partner')->name('userPartner');
        Route::get('/{id}/documents', 'Admin\UserController@documents')->name('userDocuments');
        Route::get('/{id}/bank-details', 'Admin\UserController@bank_details')->name('userBankDetails');
        Route::get('/{id}/orders', 'Admin\UserController@orders')->name('userOrders');
        Route::get('/{user}/delete', 'Admin\UserController@delete')->name('delete');

        Route::post('/new', 'Admin\UserPostController@new')->name('userPost');
        Route::post('/user/edit', 'Admin\UserPostController@edit')->name('userEditPost');
        Route::post('/bank-details', 'Admin\UserPostController@bank_details')->name('userBankDetailsPost');
        Route::post('/status', 'Admin\UserPostController@status')->name('userStatusPost');
        Route::post('/roles', 'Admin\RolePostController@user_roles')->name('userRolesPost');
        Route::post('/assignedRoles', 'Admin\RolePostController@agent_roles')->name('userAgentRolesPost');
    });

    Route::name('orders.')->prefix('/orders')->group(function() {
        Route::get('/', 'Admin\OrderController@index')->name('index');
        Route::get('/payments', 'Admin\OrderController@payments')->name('payments');
        Route::get('/{id}', 'Admin\OrderController@order')->name('order');
        Route::get('/{order}/delete', 'Admin\OrderController@delete')->name('delete');
        Route::get('/{id}/download-contract', 'Admin\OrderController@download_contract')->name('download-contract');
    });

    Route::name('documents.')->prefix('/documents')->group(function() {
        Route::get('/download/{id}', 'Admin\DocumentController@download')->name('download');
        Route::get('/confirm/{id}', 'Admin\DocumentController@confirm')->name('confirm');

        Route::post('/upload', 'Admin\DocumentPostController@upload')->name('uploadPost');
    });

    Route::name('comments.')->prefix('/comments')->group(function() {
        Route::get('/{id}/edit', 'Admin\CommentController@edit')->name('edit');
        Route::get('/{id}/delete', 'Admin\CommentController@delete')->name('delete');

        Route::post('/comment', 'Admin\CommentPostController@add')->name('commentPost');
        Route::post('/comment-edit', 'Admin\CommentPostController@edit')->name('editPost');
    });

    Route::name('roles.')->prefix('/roles')->group(function() {
        Route::get('/', 'Admin\RoleController@index')->name('home');
        Route::get('/new', 'Admin\RoleController@new')->name('new');
        Route::get('/{id}/edit', 'Admin\RoleController@edit')->name('edit');

        Route::post('/new', 'Admin\RolePostController@new')->name('newPost');
        Route::post('/edit', 'Admin\RolePostController@edit')->name('editPost');
    });

    Route::name('reminders.')->prefix('/reminders')->group(function() {
        Route::get('/', 'Admin\ReminderController@index')->name('home');
        Route::get('/{id}/edit', 'Admin\ReminderController@edit')->name('edit');
        Route::get('/{id}/done', 'Admin\ReminderController@done')->name('done');
        Route::get('/{id}/delete', 'Admin\ReminderController@delete')->name('delete');

        Route::post('/new', 'Admin\ReminderPostController@new')->name('newPost');
        Route::post('/edit', 'Admin\ReminderPostController@edit')->name('editPost');
    });

    Route::name('sirava.')->prefix('/sirava')->group(function() {
        Route::get('/', 'Admin\SiravaController@index')->name('index');
        Route::get('/real-estate', 'Admin\SiravaController@re')->name('re');
        Route::get('/holiday', 'Admin\SiravaController@holiday')->name('holiday');
        Route::get('/thermal-spa', 'Admin\SiravaController@thermalSpa')->name('thermalSpa');
    });

    Route::name('contracts.')->prefix('/contracts')->group(function() {
        Route::get('/', 'Admin\ContractController@index')->name('index');
        Route::post('/show', 'Admin\ContractPostController@show')->name('show');
    });

    Route::get('/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name('logs');

    Route::name('gif.')->prefix('/gif')->group(function() {
        Route::get('/', 'Admin\GifController@index')->name('index');
        Route::get('/new', 'Admin\GifController@new')->name('new');

        Route::post('/new', 'Admin\GifPostController@new')->name('newPost');
    });
});