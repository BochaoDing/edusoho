<?php

namespace ApiBundle\Api\Resource\Trade\Factory;

class WeChatPayMWebTrade extends BaseTrade
{
    protected $payment = 'wechat';

    protected $platformType = 'Mweb';

    public function getCustomResponse($trade)
    {
        return array(
            'mwebUrl' => $trade['platform_created_result']['mweb_url'],
            'paymentForm' => array(),
            'paymentHtml' => '',
            'paymentUrl' => $this->generateUrl('cashier_wechat_mweb_app_trade', array('tradeSn' => $trade['trade_sn']), true),
        );
    }
}
