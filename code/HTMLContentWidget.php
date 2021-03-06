<?php

class HTMLContentWidget extends Widget
{

    private static $db = array(
        "WidgetContent" => "HTMLText"
    );

    /**
     * @var string
     */
    private static $title = "HTML Content Widget";

    /**
     * @var string
     */
    private static $cmsTitle = "Widget with HTML Content";

    /**
     * @var string
     */
    private static $description = "Display a title and HTML Content.";

    public function SmallWidget()
    {
        $result = array(
            "WidgetTitle"   => $this->Title,
            "WidgetContent" => $this->WidgetContent
        );
        return $result;
    }

    public function Title()
    {
        return $this->WidgetLabel;
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->push(TextField::create("WidgetLabel", "Widget Label"));
        $fields->push(TextField::create("WidgetTitle", "Widget Title"));
        $fields->push(HtmlEditorField::create("WidgetContent", "Content"));
        return $fields;
    }
}
