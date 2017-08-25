<?php

class SP_SimpleSlider_Block_List extends Mage_Core_Block_Template{
    /**@var Varien_Data_Collection*/
    protected $collection;
    protected function _construct()
    {
        $this->collection = new Varien_Data_Collection();
        for($i=0; $i<10; $i++)
        {
            $this->collection->addItem(new Varien_Object([
                'image'=>sprintf("image_%d.jpg", $i),
                'alt'=>sprintf("test_%d", $i),
            ]));
        }
        parent::_construct();
    }
    /**@return Varien_Data_Collection */
    public function getSliderImages()
    {
        return $this->collection;
    }

}
