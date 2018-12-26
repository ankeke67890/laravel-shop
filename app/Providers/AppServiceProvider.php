<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Monolog\Logger;
use Yansongda\Pay\Pay;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //往服务容器中注入一个名为alipay的单例对象
        $this->app->singleton('alipay', function() {
            $config = config('pay.alipay');
            $config['notify_url'] = 'http://requestbin.leo108.com/vgvfqzvg';
            $config['return_url'] = route('payment.alipay.return');
            //判断当前项目运行环境是否为线上
            if(app()->environment() !== 'production') {
                $config['mode'] = 'dev';
                $config['log']['level'] = Logger::DEBUG;
            }else{
                $config['log']['level'] = Logger::WARNING;
            }

            //调用yansongda\pay来创建一个支付宝支付对象
            return Pay::alipay($config);
        });

        $this->app->singleton('wechat_pay', function() {
            $config = config('pay.wechat');
            $config['notify_url'] = 'http://requestbin.leo108.com/19ctj631';
            if(app()->environment() !== 'production') {
                $config['log']['level'] = Logger::DEBUG;
            }else{
                $config['log']['level'] = Logger::WARNING;
            }

            return Pay::wechat($config);
        });
    }
}
