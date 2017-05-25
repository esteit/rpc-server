<?php

namespace Moriony\RpcServer\Exception;

class RpcException extends \Exception implements RpcExceptionInterface
{
    protected $message = 'Unexpected error occurred.';
    protected $code = self::ERROR_CODE_INTERNAL_ERROR;
    protected $data;
    protected $requestId = null;

    public function setRequestId($id)
    {
        $this->requestId = $id;

        return $this;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function getData()
    {
        return $this->data;
    }
}