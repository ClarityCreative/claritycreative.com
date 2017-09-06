<?php
namespace Craft;

class VideoRetriever_VimeoFieldType extends BaseFieldType
{
    public function getName()
    {
        return Craft::t('Vimeo Video');
    }

    public function getInputHtml($name, $value)
    {
        // Reformat the input name into something that looks more like an ID
        $id = craft()->templates->formatInputId($name);
        // Figure out what that ID is going to look like once it has been namespaced
        $namespacedId = craft()->templates->namespaceInputId($id);

        return craft()->templates->render('videoretriever/vimeo/input', array(
            'name'  => $name,
            'value' => $value,
            'id' => $namespacedId
        ));
    }

}
?>