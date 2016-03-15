<?php
namespace Sharoff\Mango\Api\Base;

class MangoOfficeRecord
{
    protected $id;
    protected $action;
    protected $apiKey;
    protected $apiSalt;

    public function __construct($recordId)
    {
        $this->id = $recordId;
    }

    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->getId();
    }

    public function setAction($action='download')
    {
        $this->action = $action;
    }

    public function getPostLink()
    {
        $this->setAction($this->action);
        $apiUrl = '/queries/recording/post/';
    }

    public function getGetLink()
    {
        $this->setAction($this->action);
        $apiUrl = '/queries/recording/link/[recording_id]/[action]/[vpbx_api_key]/[timestamp]/[sign]';
    }
}