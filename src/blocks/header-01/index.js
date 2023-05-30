import { registerBlockType } from "@wordpress/blocks";
import block from "./block.json";
import edit from "./edit";
import save from "./save";

// register block type
registerBlockType(block.name, {
    title: block.title,
    // edit function
    edit: edit,
    save
});

 