import tinymce from 'tinymce'
import 'tinymce/icons/default'

import 'tinymce/themes/silver'
import 'tinymce/models/dom'

import 'tinymce/skins/ui/oxide/skin.css'

export default function configureEditor(selector, height ='', width ='' ) {
    return tinymce.init({
        selector: selector,
        skin: false,
        content_css: true,
        height: height,
        width: width,
    });    
}