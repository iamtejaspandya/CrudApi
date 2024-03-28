<?php

declare(strict_types=1);

namespace Tejas\CrudApi\Model;

use Tejas\CrudApi\Api\CrudInterface;
use Tejas\CrudApi\Api\Data\DataInterface;
use Tejas\Mymodule\Model\DataFactory;
use Tejas\Mymodule\Model\ResourceModel\Data as DataResourceModel;
use Tejas\Mymodule\Model\ResourceModel\Data\CollectionFactory as DataCollectionFactory;
use Tejas\CrudApi\Model\Response\DataResponse;
use Magento\Framework\Webapi\Rest\Request;

class Crud implements CrudInterface
{
    /**
     * @var DataFactory
     */
    protected $dataFactory;

    /**
     * @var DataResourceModel
     */
    protected $dataResourceModel;

    /**
     * @var DataCollectionFactory
     */
    protected $dataCollectionFactory;

    /**
     * @var DataResponse
     */
    protected $dataResponse;

    /**
     * @var Request
     */
    protected $request;

    public function __construct(
        DataFactory $dataFactory,
        DataResourceModel $dataResourceModel,
        DataCollectionFactory $dataCollectionFactory,
        DataResponse $dataResponse,
        Request $request
    ) {
        $this->dataFactory = $dataFactory;
        $this->dataResourceModel = $dataResourceModel;
        $this->dataCollectionFactory = $dataCollectionFactory;
        $this->dataResponse = $dataResponse;
        $this->request = $request;
    }

    public function getCustomTableData()
    {
        $dataCollection = $this->dataCollectionFactory->create();
        $data = [];
        foreach ($dataCollection as $item) {
            $data[] = $item->getData();
        }
        return $data;
    }

    public function getDataById($id)
    {
        $dataCollection = $this->dataCollectionFactory->create();
        $dataCollection->addFieldToFilter('id', $id);
        $dataModel = $dataCollection->getFirstItem();
    
        if (!$dataModel->getId()) {
            throw new \Magento\Framework\Exception\NoSuchEntityException(__('Data with id '. $id . ' does not exist.', $id));
        }
    
        $this->dataResponse->setId((int)$dataModel->getId());
        $this->dataResponse->setFirstName((string)$dataModel->getFirstName());
        $this->dataResponse->setLastName((string)$dataModel->getLastName());
        $this->dataResponse->setGender((string)$dataModel->getGender());
        $this->dataResponse->setEmail((string)$dataModel->getEmail());
        $this->dataResponse->setAdress1((string)$dataModel->getAdress1());
        $this->dataResponse->setAdress2((string)$dataModel->getAdress2());
        $this->dataResponse->setCity((string)$dataModel->getCity());
        $this->dataResponse->setState((string)$dataModel->getState());
        $this->dataResponse->setZipCode((string)$dataModel->getZipCode());
        $this->dataResponse->setFeedback((string)$dataModel->getFeedback());
    
        return $this->dataResponse;
    }
    
    public function saveData()
    {
        $bodyParams = $this->request->getBodyParams();

        if (!empty($bodyParams['data'])) {
            foreach ($bodyParams['data'] as $item) {
                $dataModel = $this->dataFactory->create();
                $dataModel->setData([
                    'first_name' => (string)$item['first_name'],
                    'last_name' => (string)$item['last_name'],
                    'gender' => (string)$item['gender'],
                    'email' => (string)$item['email'],
                    'adress1' => (string)$item['adress1'],
                    'adress2' => (string)$item['adress2'],
                    'city' => (string)$item['city'],
                    'state' => (string)$item['state'],
                    'zip_code' => (string)$item['zip_code'],
                    'feedback' => (string)$item['feedback']
                ]);
        
                $this->dataResourceModel->save($dataModel);
            }

            return "Data added successfully";
        } else {
            return "No data to add";
        }
    }

    public function deleteDataById($id)
    {
        $dataCollection = $this->dataCollectionFactory->create();
        $dataModel = $dataCollection->getItemById($id);
    
        if (!$dataModel) {
            throw new \Magento\Framework\Exception\NoSuchEntityException(__('Data with id ' . $id . ' does not exist.', $id));
        }
    
        $this->dataResourceModel->delete($dataModel);
        return 'Data deleted successfully.';
    }

}
