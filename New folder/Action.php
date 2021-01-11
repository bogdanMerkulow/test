<?php
class Action
{
    public $blockId;
    public $itemId;
    public $limit;

    public function GetItems()
    {
        if (is_Int($this->limit) && $this->limit != null)
        {
            $res = CIBlockElement::GetList
            (
                array(),
                array('IBLOCK_ID' => $this->blockId),
                false,
                array('nTopCount' => $this->limit)
            );
            while ($el = $res->GetNextElement())
            {
                //if ($el == null) return;
                $arrFields = $el->GetFields();
                echo '<pre>';
                print_r($arrFields['SEARCHABLE_CONTENT']);
                echo '</pre><hr>';
            }
        }
    }

    public function Add()
    {
        CIBlockElement::Add
        (
            array(),
            array('IBLOCK_ID' => $this->blockId),
            true,
            false
        );
    }

    public function Delete()
    {
        if(CIBlock::GetPermission($this->blockId) && $this->itemId != null)
        {
            CIBlockElement::Delete($this->itemId);
        }   
    }

    public function Uptade()
    {
        die('test');
    }
}
?>