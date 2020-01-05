<?php
namespace Library;

class TomatoPay {
    private $mchid;
    private $account;
    private $key;

    public function __construct($mchid, $account, $key) {
        $this->mchid = $mchid;
        $this->account = $account;
        $this->key = $key;
    }
    
    public function alipay ($cny, $type, $trade) {
        $params = [
            'mchid' => $this->mchid,
            'account' => $this->account,
            'cny' => $cny,
            'type' => $type,
            'trade' => $trade
        ];
        $params['signs'] = $this->sign(http_build_query($params));
        return $this->buildHtml('https://b.fanqieui.com/gateways/alipay.php', $params);
    }

    public function sign ($str) {
        return md5($str.$this->key);
    }

    public function buildHtml($url, $params, $method = 'post', $target = '_self'){

        // var_dump($params);exit;
		$html = "<form id='submit' name='submit' action='".$url."' method='$method' target='$target'>";
		foreach ($params as $key => $value) {
			$html .= "<input type='hidden' name='$key' value='$value'/>";
		}
		$html .= "</form><script>document.forms['submit'].submit();</script>";
		return $html;
    }
}