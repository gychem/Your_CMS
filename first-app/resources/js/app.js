import './bootstrap';

import flowbite from 'flowbite'

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

///////////////////////////////////////////////////////////////////////////////////////// SUNEDITOR
import SUNEDITOR from 'suneditor'
import image from 'suneditor/src/plugins/dialog/link'
import list from 'suneditor/src/plugins/submenu/list'
import {font, fontSize, formatBlock, video, align, horizontalRule, table, template, hiliteColor, fontColor, textStyle} from 'suneditor/src/plugins'

const sunEditorElement = document.querySelector('#sunEditor');

if(sunEditorElement) {
    const editor = SUNEDITOR.create('sunEditor', {
        width : '100%',
        plugins: [font, fontSize, formatBlock, video, image, list, align, horizontalRule, table, template, hiliteColor, fontColor, textStyle],
        buttonList: [
            ['undo', 'redo'],
            ['font', 'fontSize'],
            ['paragraphStyle', 'blockquote'],
            ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
            ['fontColor', 'hiliteColor', 'textStyle'],
            ['removeFormat'],
            '/', // Line break
            ['outdent', 'indent'],
            ['align', 'horizontalRule', 'list', 'lineHeight'],
            ['table', 'link', 'image', 'video', 'audio' /** ,'math' */], // You must add the 'katex' library at options to use the 'math' plugin.
            /** ['imageGallery'] */ // You must add the "imageGalleryUrl".
            ['fullScreen', 'showBlocks', 'codeView'],
            ['preview', 'print']
            /** ['dir', 'dir_ltr', 'dir_rtl'] */ // "dir": Toggle text direction, "dir_ltr": Right to Left, "dir_rtl": Left to Right
        ]
    });

    editor.onChange = function () {
        editor.save();
    }
}
//////////////////////////////////////////////////////////////////////////////////////// DARK & LIGHT MODE 
const themeToggleDarkIcon = document.querySelector('#theme-toggle-dark-icon');
const themeToggleLightIcon = document.querySelector('#theme-toggle-light-icon');
const themeToggleBtn = document.querySelector('#theme-toggle');

if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

themeToggleBtn.addEventListener('click', function() {

    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');
    
    if (localStorage.getItem('color-theme')) { // if set via local storage previously
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }
    } else { // if NOT set via local storage previously
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
});