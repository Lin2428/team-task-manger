import 'flowbite/dist/flowbite.min.js';
import './project-form'

import configureEditor from './tinymce';

configureEditor('#description');

configureEditor('#message', '250');