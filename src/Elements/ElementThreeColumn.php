<?php

namespace JoshMens\Elements\ThreeColumn\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\ORM\FieldType\DBField;

/**
 * Class ElementImage.
 */
class ElementThreeColumn extends BaseElement
{
    /**
     * @var string
     */
    private static $icon = 'font-icon-columns';

    /**
     * @return string
     */
    private static $singular_name = 'Three Column';

    /**
     * @return string
     */
    private static $plural_name = 'Three Column Elements';

    /**
     * @var string
     */
    private static $table_name = 'ElementThreeColumn';

    /**
     * @var array
     */
    private static $db = [
        'ColOne' => 'HTMLText',
        'ColTwo' => 'HTMLText',
        'ColThree' => 'HTMLText'
    ];

    // /**
    //  * @var array
    //  */
    // private static $has_one = [
        
    // ];

    // /**
    //  * @var array
    //  */
    // private static $owns = [
        
    // ];

    /**
     * @return \SilverStripe\Forms\FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $ColOne = $fields->fieldByName('Root.Main.ColOne');
        $ColTwo = $fields->fieldByName('Root.Main.ColTwo');
        $ColThree = $fields->fieldByName('Root.Main.ColThree');

        return $fields;
    }

    /**
     * @return DBHTMLText
     */
    public function getSummary()
    {
    }

    /**
     * @return array
     */
    protected function provideBlockSchema()
    {
        $blockSchema = parent::provideBlockSchema();
        $blockSchema['content'] = $this->getSummary();

        return $blockSchema;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'ThreeColumn');
    }
}
