import { registerBlockType } from "@wordpress/blocks";
import edit from './edit';
import save from './save';
import block from './block.json';

registerBlockType(block.name, {
    title: block.title,
    
    // edit function
    edit,
    // save function
    save,
});

 