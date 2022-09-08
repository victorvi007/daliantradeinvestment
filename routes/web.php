<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvestController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Mail\MailController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\WalletController;
use App\Http\Controllers\FundAccountController;
use App\Http\Controllers\InvestCryptoController;
use App\Http\Controllers\AccountUpdateController;
use App\Http\Controllers\AccountVerifyController;
use App\Http\Controllers\Admin\ApproveController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AccountDetailsController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Admin\BtcUpdatedController;
use App\Http\Controllers\Admin\CsiUpdatedController;
use App\Http\Controllers\Admin\EthUpdatedController;
use App\Http\Controllers\Admin\HfiUpdatedController;
use App\Http\Controllers\Admin\HsiUpdatedController;
use App\Http\Controllers\Admin\IriUpdatedController;
use App\Http\Controllers\Admin\LtcUpdatedController;
use App\Http\Controllers\Admin\PkdUpdatedController;
use App\Http\Controllers\Admin\StiUpdatedController;
use App\Http\Controllers\Admin\StlUpdatedController;
use App\Http\Controllers\Admin\AdminLogoutController;
use App\Http\Controllers\Admin\TronUpdatedController;
use App\Http\Controllers\Admin\AdminSupportController;
use App\Http\Controllers\Admin\AdminRegisterController;
use App\Http\Controllers\Admin\TetherUpdatedController;
use App\Http\Controllers\WalletAddressUpdateController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ApprovePaymentController;
use App\Http\Controllers\Admin\BtcCashUpdatedController;
use App\Http\Controllers\Admin\DogecoinUpdatedController;
use App\Http\Controllers\Admin\StockProfitUpdateController;
use App\Http\Controllers\Admin\CryptoProfitUpdateController;


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

Route::get('/', function () {
    return view('posts.index');
});
Route::get('/about', function () {
    return view('posts.about');
});
Route::get('/investment', function () {
    return view('posts.investment');
});
Route::get('/terms', function () {
    return view('posts.terms');
});
Route::get('/test', function () {
    return view('posts.test');
});

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/welcome', [WelcomeController::class, 'welcome'])->name('welcome')->middleware('auth');
// Route::post('/welcome', [WelcomeController::class, 'store']);

Route::get('/wallet', [WalletController::class, 'wallet'])->name('wallet');
Route::post('/wallet', [WalletController::class, 'store']);


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/dashboard/fund-account', [FundAccountController::class, 'fund_account'])->name('fund-account')->middleware('auth');
Route::post('/dashboard/fund-account', [FundAccountController::class, 'store_fund_account'])->middleware('auth');

Route::get('/dashboard/invest/stock', [InvestController::class, 'invest'])->name('invest')->middleware('auth');
Route::post('/dashboard/invest/stock', [InvestController::class, 'store_invest'])->middleware('auth');

Route::get('/dashboard/invest/crypto', [InvestCryptoController::class, 'crypto_invest'])->name('crypto-invest')->middleware('auth');
Route::post('/dashboard/invest/crypto', [InvestCryptoController::class, 'store_crypto_invest'])->middleware('auth');

Route::get('/dashboard/withdraw', [WithdrawController::class, 'withdraw'])->name('withdraw')->middleware('auth');
Route::post('/dashboard/withdraw', [WithdrawController::class, 'store_withdraw']);

Route::get('/dashboard/wallet', [WalletController::class, 'wallet'])->name('wallet')->middleware('auth');
Route::post('/dashboard/wallet', [WalletController::class, 'store_wallet']);

Route::get('/dashboard/wallet-address-update', [WalletAddressUpdateController::class, 'wallet_addresss_update'])->name('address-update')->middleware('auth');
Route::post('/dashboard/wallet-address-update', [WalletAddressUpdateController::class, 'store_wallet_addresss_update']);

Route::get('/dashboard/account-details', [AccountDetailsController::class, 'account_details'])->name('account-details')->middleware('auth');
Route::post('/dashboard/account-details', [AccountDetailsController::class, 'store_account_details'])->middleware('auth');

Route::get('/dashboard/account-verify', [AccountVerifyController::class, 'account_verify'])->name('account-verify')->middleware('auth');
Route::post('/dashboard/account-verify', [AccountVerifyController::class, 'store_account_verify'])->middleware('auth');

Route::get('/dashboard/support', [SupportController::class, 'support'])->name('support')->middleware('auth');
Route::post('/dashboard/support', [SupportController::class, 'store_support'])->middleware('auth');

Route::get('/dashboard/account-update', [AccountUpdateController::class, 'account_update'])->name('account-update')->middleware('auth');
Route::post('/dashboard/account-update', [AccountUpdateController::class, 'store_account_update'])->middleware('auth');



//Administrative Area
Route::post('/admin-logout', [AdminLogoutController::class, 'admin_logout'])->name('admin-logout');




Route::get('/admin/dashboard', [AdminDashboardController::class, 'admin_dashboard'])->name('admin-dashboard')->middleware('auth');

Route::get('/admin/users', [AdminUsersController::class, 'users'])->name('users')->middleware('auth');

Route::get('/admin/approve-payment', [ApprovePaymentController::class, 'approve_payment'])->name('approve-payment')->middleware('auth');
Route::post('/admin/approve-payment/{user_id}/approve', [ApproveController::class, 'approve'])->name('approve')->middleware('auth');

//stocks Begins
Route::get('/admin/stock-profit-update', [StockProfitUpdateController::class, 'stock_profit_update'])->name('stock-profit-update')->middleware('auth');
Route::post('/admin/stock-profit-update/{user_id}/hfi', [HfiUpdatedController::class, 'hfi_updated'])->name('hfi_updated')->middleware('auth');
Route::post('/admin/stock-profit-update/{user_id}/iri', [IriUpdatedController::class, 'iri_updated'])->name('iri_updated')->middleware('auth');
Route::post('/admin/stock-profit-update/{user_id}/csi', [CsiUpdatedController::class, 'csi_updated'])->name('csi_updated')->middleware('auth');       
Route::post('/admin/stock-profit-update/{user_id}/hsi', [HsiUpdatedController::class, 'hsi_updated'])->name('hsi_updated')->middleware('auth');       
Route::post('/admin/stock-profit-update/{user_id}/sti', [StiUpdatedController::class, 'sti_updated'])->name('sti_updated')->middleware('auth');       
//stocks ends

//crypto starts
Route::get('/admin/crypto-profit-update', [CryptoProfitUpdateController::class, 'crypto_profit_update'])->name('crypto-profit-update')->middleware('auth');
Route::post('/admin/crypto-profit-update/{user_id}/btc', [BtcUpdatedController::class, 'btc_updated'])->name('btc_updated')->middleware('auth');
Route::post('/admin/crypto-profit-update/{user_id}/eth', [EthUpdatedController::class, 'eth_updated'])->name('eth_updated')->middleware('auth');
Route::post('/admin/crypto-profit-update/{user_id}/ltc', [LtcUpdatedController::class, 'ltc_updated'])->name('ltc_updated')->middleware('auth');
Route::post('/admin/crypto-profit-update/{user_id}/tether', [TetherUpdatedController::class, 'tether_updated'])->name('tether_updated')->middleware('auth');
Route::post('/admin/crypto-profit-update/{user_id}/btc_cash', [BtcCashUpdatedController::class, 'btc_cash_updated'])->name('btc_cash_updated')->middleware('auth');
Route::post('/admin/crypto-profit-update/{user_id}/dogecoin', [DogecoinUpdatedController::class, 'dogecoin_updated'])->name('dogecoin_updated')->middleware('auth');
Route::post('/admin/crypto-profit-update/{user_id}/stl', [StlUpdatedController::class, 'stl_updated'])->name('stl_updated')->middleware('auth');
Route::post('/admin/crypto-profit-update/{user_id}/pkd', [PkdUpdatedController::class, 'pkd_updated'])->name('pkd_updated')->middleware('auth');
Route::post('/admin/crypto-profit-update/{user_id}/tron', [TronUpdatedController::class, 'tron_updated'])->name('tron_updated')->middleware('auth');
//crypto ends

Route::get('/admin/admin-support', [AdminSupportController::class, 'admin_support'])->name('admin-support')->middleware('auth');

Route::get('/mail', [MailController::class, 'mail'])->name('mail');

 