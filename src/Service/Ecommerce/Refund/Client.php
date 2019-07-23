<?php

namespace LaravelWechatpayV3\Service\Ecommerce\Refund;

use LaravelWechatpayV3\Kernel\BaseClient;

/**
 * Class Client.
 */
class Client extends BaseClient
{
    /**
     * @param array $params
     * @param array $options
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Throwable
     */
    public function create(array $params, array $options = [])
    {
        $url = self::classUrl().'/apply';
        $opts = $options + ['json' => $params];

        return $this->request('POST', $url, $opts);
    }

    /**
     * @param string $outRefundNo
     * @param string|null $query
     * @param array $options
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Throwable
     */
    public function retrieveByOutRefundNo(string $outRefundNo, string $query = null, array $options = [])
    {
        $url = self::classUrl().'/out-trade-no/'.$outRefundNo;;
        $opts = $options + ['query' => $query];

        return $this->request('GET', $url, $opts);
    }

    /**
     * @param string $id
     * @param string|null $query
     * @param array $options
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Throwable
     */
    public function retrieve(string $id, string $query = null, array $options = [])
    {
        $url = self::classUrl().'/id/'.$id;;
        $opts = $options + ['query' => $query];

        return $this->request('GET', $url, $opts);
    }
}