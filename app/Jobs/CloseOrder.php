<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\Order;

//代表这个类需要放到队列里执行，而不是触发时立即执行
class CloseOrder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $order;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Order $order, $delay)
    {
        $this->order = $order;

        //设置延长的时间，delay（）方法的参数代表多少秒后执行
        $this->delay($delay);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    //定义这个任务类具体执行的逻辑
    //当队列处理器从队列中取出任务时，会调用handle()方法
    public function handle()
    {
        //判断订单是否已经支付
        //如果已经被支付则不需要关闭订单，直接退出
        if($this->order->paid_at){
            return;
        }

        //通过事务执行sql
        \DB::transaction(function() {
            //将订单的closed字段标记为true,即关闭订单
            $this->order->update(['closed' => true]);

            //循环遍历订单商品的sku,将订单中的商品数量加会到数据库中
            foreach ($this->order->items as $item) {
                $item->productSku->addStock($item->amount);
            }
        });
    }
}
